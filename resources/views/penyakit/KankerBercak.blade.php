@extends('/layouts/penyakit/detail/main')
@section('title', 'Kanker Bercak')

@section('content')

<div id="content" class="flex flex-row max-sm:flex-col px-4 py-4">
    <img src="{{ asset('img/penyakit/P004.png') }}" class="my-2 w-[500px] h-[350px]" alt="CekKaret Logo" />

    <div class="pl-4">
        <div
            class="w-full p-6 bg-primary-200 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Penyakit Kanker Bercak</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                &nbsp; &nbsp;Penyakit Kanker Bercak pada tanaman karet merupakan penyakit yang disebabkan oleh jamur Nectria haematococca. Penyakit
                ini dapat menyebabkan kerusakan pada batang pohon karet yang cukup serius. Gejala pertama dari penyakit ini biasanya
                terlihat pada batang pohon, di mana terdapat bercak-bercak coklat yang terlihat pada permukaan batang. Bercak-bercak ini
                kemudian akan membesar dan menyebabkan terjadinya retak-retak pada batang pohon. Selain itu, daun-daun pohon juga dapat
                terpengaruh oleh penyakit ini, di mana terdapat bercak-bercak coklat yang terlihat pada permukaan daun. Jika tidak
                segera diatasi, penyakit ini dapat menyebabkan pohon karet menjadi layu dan mati.
            </p>
            <br><br><br>

        </div>

        <div class="w-609 h-210 ml-30 mt-[34px] md:ml-[40%] max-sm:justify-center">
            <a href="/daftar-penyakit"
                class="text-white text-lg bg-danger-700 hover:bg-danger-800 focus:ring-4 focus:ring-danger-300 font-medium rounded-lg px-20 py-4 mr-2 mb-2 dark:bg-danger-600 dark:hover:bg-danger-700 focus:outline-none dark:focus:ring-danger-800">
                Kembali</a>
        </div>


    </div>

</div>

@endsection