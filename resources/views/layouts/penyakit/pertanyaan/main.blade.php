<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Diagnosa</title>
</head>

<body class="bg-main bg-cover">

    <h1 class="text-center text-5xl max-sm:text-xl font-bold text-white mt-24">
        Pertanyaan Diagnosa
    </h1>

    <div class="flex flex-row justify-center mt-20">
        <div
            class="w-1/2 p-6 bg-primary-200 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <h1 class="text-left text-lg max-sm:text-sm font-semibold text-black">
                @yield('pertanyaan')
            </h1>
        </div>
    </div>

    <div class="flex flex-row justify-center mt-20">
        <div class="w-1/2 p-6rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-between">
                <a href="@yield('link_tidak')"
                    class="text-white text-lg max-sm:text-sm bg-danger-700 hover:bg-danger-800 focus:ring-4 focus:ring-danger-300 font-medium   rounded-lg px-20 max-sm:px-6 py-4 mr-2 mb-2 dark:bg-danger-600 dark:hover:bg-danger-700 focus:outline-none dark:focus:ring-danger-800">
                    Tidak
                </a>

                <a href="@yield('link_ya')"
                    class="text-white text-lg max-sm:text-sm bg-success-700 hover:bg-success-800 focus:ring-4 focus:ring-success-300 font-medium rounded-lg px-20 max-sm:px-8 py-4 mr-2 mb-2 dark:bg-success-600 dark:hover:bg-success-700 focus:outline-none dark:focus:ring-success-800">
                    Ya
                </a>
            </div>
        </div>
    </div>
</body>

</html>