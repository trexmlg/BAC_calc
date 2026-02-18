<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAC Calculator</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-slate-900 via-slate-800 toslate-900 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- header -->
        <div class="text-center mb-12"></h1>
        <h1 class="text-5xl font-bold text-white mb-4">Blood Alcohol Content (BAC) Calculator</h1>
        <p class="text-lg text-gray-300">Calculate your BAC and see when it's safe to drive.</p>
        </div>

        <div class="md:col-span-2">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Calculate Your BAC</h2>
                <form id="bacForm" class="space-y-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">
                            Weight (kg):
                        </label>
                        <input
                        type="number"
                        name="weight"
                        id="weight"
                        placeholder="Enter your weight in kg"
                        step="0.1"
                        min="40"
                        max="300"
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                        >
                        <small class="block text-gray-500">Typical adult weight range: 40kg - 300kg</small>
                    </div>
                    <!---gender--->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Gender</label>
                        <div class="grid grid-cols-2 gap-4">
                            <label class="flex items-center cursor-pointer">
                                <input
                                type="radio"
                                name="gender"
                                value="male"
                                required
                                class="mr-3 w-5 h-5"
                                >
                                <span class="text-gray-700">Male</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input
                                type="radio"
                                name="gender"
                                value="female"
                                required
                                class="mr-3 w-5 h-5"
                                >
                                <span class="text-gray-700">Female</span>
                            </label>
                        </div>
                    </div>
                    <!---cik izdzeri--->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Drinks Consumed</label>
                        <input
                        type="number"
                        name="drinks_consumed"
                        id="drinks"
                        placeholder="0"
                        min="0"
                        max="50"
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                        >
                        <small class="block text-gray-500">Standard drink = 1 beer, 1 wine, 1 shot</small>
                    </div>

                    <!---alkasa procenti--->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Alcohol Percentage (%)</label>
                        <select
                        name="alcohol_percentage"
                        id="alcohol_percentage"
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                        >
                            <option value="">Select drink type...</option>
                            <option value="4.5">4.5% (light Beer)</option>
                            <option value="6">6% (Normal Beer)</option>
                            <option value="12">12% (Dark Beer)</option>
                            <option value="14">14% (Wine)</option>
                            <option value="14.5">14.5% (Lode)</option>
                            <option value="15">15% (Liqueurs)</option>
                            <option value="36">36% (Gin)</option>
                            <option value="38">38% (Rum)</option>
                            <option value="40">40% (Vodka)</option>
                            <option value="42">42% (Whiskey)</option>
                            <option value="50">50% (Tequila)</option>
                        </select>
                    </div>

                    <!---time since last drink--->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Time Since Last Drink (hours)</label>
                        <input
                        type="number"
                        name="time_since_last_drink"
                        id="time_since_last_drink"
                        placeholder="Enter hours"
                        min="0"
                        max="24"
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                        >
                    </div>

                    <div class="text-center">
                        <button
                        type="submit"
                        class="bg-blue-500 text-white font-bold py-3 px-6 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                        >
                            Calculate BAC
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>