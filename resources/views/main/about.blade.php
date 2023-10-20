<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>About</title>
</head>

<body class="bg-main bg-cover">

    <nav class="bg-danger-600 border-gray-200 px-2 sm:px-4 py-2.5  dark:bg-gray-900">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="#" class="flex items-center">
                <img src="{{ asset('/img/logo/Logo.png') }}" class="h-7 mr-3 sm:h-9" alt="CekKaret Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap text-white">CekKaret!</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-danger-600 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/"
                            class="block py-2 pl-3 pr-4 text-gray-100 max-sm:text-success-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-success-300 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/about"
                            class="block py-2 pl-3 pr-4 text-white bg-success-700 rounded md:bg-transparent md:text-success-300 md:p-0 dark:text-white">About</a>
                    </li>
                    <li>
                        <a href="/daftar-penyakit"
                            class="block py-2 pl-3 pr-4 text-gray-100 max-sm:text-success-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-success-300 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Daftar
                            Penyakit</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div id="content" class="flex flex-row min-h-[600px]">
        <div class="basis-1/2 max-sm:hidden">
            <br>
        </div>
        <div class="basis-1/2 max-sm:basis-full ml-4">
            <div id="main-content" class=" p-4 ">
                <h1
                    class="h-210 ml-30 mt-[70px] font-sans font-semibold text-[50px] max-sm:text-[40px] leading-tight text-white text-left">
                    Apa sih itu CekKaret?
                </h1>

                <p class=" h-210 ml-30 mt-[20px]  font-sans text-[38px] max-sm:text-[19px] leading-tight text-gray-300 text-left">
                    CekKaret merupakan sebuah sistem pakar berbasis website yang dapat
                    membantu petani atau user lainnya
                    dalam mengidentifikasi berbagai macam
                    penyakit yang dapat menyerang tanaman
                    karet.
                </p>

            </div>
        </div>

    </div>

    <div class="mt-[100px]">
        <footer class="p-4 bg-black shadow md:px-6 md:py-8 dark:bg-gray-900 ">
            <span class="block text-sm text-white sm:text-center dark:text-gray-400">Copyright © 2022
                ● All Rights Reserved ●
                <a href="#" class="hover:underline">CekKaret</a>
            </span>
        </footer>
    </div>
</body>

</html>