<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>CekKaret</title>
</head>

<body class="bg-main bg-cover ">

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
                <svg class="w-6 h-6 text-success-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
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
                            class="block py-2 pl-3 pr-4 text-white bg-success-700 rounded md:bg-transparent md:text-success-300 md:p-0 dark:text-white"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/about"
                            class="block py-2 pl-3 pr-4 text-gray-100 max-sm:text-success-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-success-300 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
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

    <div id="content" class="flex flex-row md:min-h-[600px] min-h-[70vh]">
        <div class="basis-1/2 max-sm:hidden">
            <br>
        </div>
        <div class="basis-1/2">
            <div id="main-content" class="">
                <h1
                    class="w-609 h-210 max-sm:ml-4  mt-[70px] font-sans font-semibold max-sm:text-[25px] text-[50px] leading-tight text-white text-left">
                    SISTEM PAKAR <br> DIAGNOSA PENYAKIT <br> TANAMAN KARET
                </h1>

                <p class="w-609 h-210 max-sm:ml-4  mt-[54px] max-sm:mt-[26px] font-sans max-sm:text-[19px] text-[38px] leading-tight text-gray-300 text-left">
                    Mulai untuk mengetahui penyakit <br>
                    tanaman karet Anda
                </p>

                <div class="w-609 h-210 max-sm:w-[304px] max-sm:h-[105px] max-sm:ml-4  mt-[34px] ml-[170px]">
                    <a href="/diagnosa/g001"
                        class="text-white text-lg max-sm:text-sm bg-success-700 hover:bg-success-800 focus:ring-4 focus:ring-success-300 font-medium rounded-lg px-20 max-sm:px-10 py-4 mr-2 mb-2 dark:bg-success-600 dark:hover:bg-success-700 focus:outline-none dark:focus:ring-success-800">
                        Mulai Diagnosa</a>
                </div>

            </div>
        </div>

    </div>

    <div class="mt-[70px]">
        <footer class="p-4 bg-black shadow md:px-6 md:py-8 dark:bg-gray-900 ">
            <span class="block text-sm text-white sm:text-center dark:text-gray-400">Copyright © 2022 
                ● All Rights Reserved ●
                <a href="#" class="hover:underline">CekKaret</a>
            </span>
        </footer>
    </div>
</body>

</html>