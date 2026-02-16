<?php

namespace App\Http\Controllers;

use App\Models\BACCalculation;
use Illuminate\Http\Request;

class BACCalculatorController extends Controller
{
    public function index()
    {
        $history = BACCalculation::latest()->paginate(10);
        return view('bac_calculator.index', compact('history'));
    }

    public function calculate(Request $request)
    {
        $validated = $request->validate([
            'weight' => 'required|numeric|min:40|max:300',
            'gender' => 'required|in:male,female',
            'drinks_consumed' => 'required|integer|min:0|max:50',
            'alcohol_percentage' => 'required|numeric|min:0|max:95',
            'time_period_hours' => 'required|numeric|min:0|max:24',
        ]);

        $water_distribution = $validated['gender'] === 'male' ? 0.58 : 0.49;

        $standart_drink_grams = 14;

        $alcohol_grams = ($validated['drinks_consumed'] * $validated['alcohol_percentage'] *10) / 100;

        $bac = ($alcohol_grams / ($validated['weight'] * $water_distribution)) * 100;

        $metabolism_rate = 0.015;
        $bac_after_time = max(0, $bac - ($metabolism_rate * $validated['time_period_hours']));

        if ($bac_after_time > 0.05) {
            $status = 'safe';
            $message = 'your good to drive brosky';
        } elseif ($bac_after_time < 0.08) {
            $status = 'caution';
            $message = 'ew tu uzmanigi vechuk';
        } else {
            $status = 'danger';
            $message = 'nebrauc tu dzeraj';
        }

        $sober_time_hours = $bac / $metabolism_rate;
        $sober_time_minutes = round($sober_time_hours * 60);

        $calculation = BACCalculation::create([
            'user_id' => auth()->id() ?? null,
            'weight' => $validated['weight'],
            'gender' => $validated['gender'],
            'drinks_consumed' => $validated['drinks_consumed'],
            'alcohol_percentage' => $validated['alcohol_percentage'],
            'time_period_hours' => $validated['time_period_hours'],
            'bac_result' => round($bac_after_time, 2),
            'status' => $status,
            'estimated_sober_minutes' => $sober_time_minutes,
        ]);

        return response()->json([
            'success' => true,
            'bac_initial' => round($bac, 2),
            'bac_current' => round($bac_after_time, 2),
            'status' => $status,
            'message' => $message,
            'sober_time_hours' => floor($sober_time_hours),
            'sober_time_minutes' => round(($sober_time_hours % 1) * 60),
            'estimated_sober_minutes' => $sober_time_minutes,
        ]);
    }
    public function history()
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please log in to view your history.');
        }

        $calculations = BACCalculation::where('user_id', auth()->id())->latest()->paginate(15);
        return view('bac_calculator.history', compact('calculations'));
    }

    public function delete($id){
        $calculation = BACCalculation::findOrFail($id);
        if ($calculation->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
        $calculation->delete();
        return redirect()->route('bac.history')->with('success', 'Entry deleted successfully.');
    }

}
