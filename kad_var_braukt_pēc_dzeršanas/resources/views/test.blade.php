<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="flex min-h-screen items-center justify-center dark:bg-indigo-900 bg-pink-400 p-4">
<div
  class="w-full max-w-md border-4 border-black bg-white dark:bg-gray-900 dark:text-white p-8 shadow-[12px_12px_0px_0px_rgba(0,0,0,1)]"
>
<div class="group mb-8 w-fit cursor-pointer"><h1 class="mb-2 text-3xl font-black uppercase transition-transform duration-300 group-hover:scale-105 md:text-4xl">LOGIN</h1><div class="relative"><div class="h-2 w-20 origin-left bg-black transition-all duration-500 ease-out group-hover:w-full dark:bg-white"></div></div></div>
  <form class="space-y-6">
    <div>
      <label class="mb-2 block text-sm font-black dark:text-white text-black"> EMAIL </label>
      <input
        type="email"
        class="w-full border-4 border-black px-4 py-2 font-bold focus:outline-none focus:ring-4 focus:ring-yellow-300"
      />
    </div>

    <div>
      <label class="mb-2 block text-sm font-black dark:text-white text-black">
        PASSWORD
      </label>
      <input
        type="password"
        class="w-full border-4 border-black px-4 py-2 font-bold focus:outline-none focus:ring-4 focus:ring-yellow-300"
      />
    </div>

    <button
      type="submit"
      class="w-full border-4 dark:text-black border-black bg-yellow-300 dark:bg-yellow-400 px-6 py-3 text-xl font-black shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] transition-all hover:translate-x-0.5 hover:translate-y-0.5 hover:bg-yellow-200 hover:shadow-none active:translate-x-0.5 active:translate-y-0.5 active:shadow-none"
    >
      LOGIN NOW
    </button>
  </form>

  <div class="mt-6 text-center">
    <button class="font-bold dark:text-white text-black underline hover:text-gray-700">
      Do not have an account? SIGN UP
    </button>
  </div>
</div>
</div>
</body>
</html>
