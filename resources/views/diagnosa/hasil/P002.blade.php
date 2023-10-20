@extends('/layouts/penyakit/hasil/main')
@section('title', 'Akar Merah')

@section('content')

    <div id="content" class="flex flex-row max-sm:flex-col px-4 py-4 ">
        <img src="{{ asset('img/penyakit/P002.png') }}" class="my-2 w-[500px] h-[350px]" alt="CekKaret Logo" />

        <div class="pl-4">
            <div
                class="w-full p-6 bg-primary-200 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Hasil Diagnosa :<span class="text-danger-600"> Penyakit Akar Merah</span> </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    &nbsp; &nbsp;Penyakit Jamur Akar Merah pada tanaman karet disebabkan oleh jamur Phytophthora megakarya.
                    Penyakit ini dapat
                    menyebabkan kerusakan pada akar-akar tanaman karet yang cukup serius, terutama pada pohon-pohon yang
                    baru tumbuh. Gejala
                    pertama dari penyakit ini biasanya terlihat pada daun-daun pohon, di mana terdapat bercak-bercak coklat
                    yang terlihat
                    pada permukaan daun. Bercak-bercak ini kemudian akan membesar dan menyebabkan terjadinya retak-retak
                    pada daun. Selain
                    itu, akar-akar pohon juga dapat terpengaruh oleh penyakit ini, di mana terdapat bercak-bercak merah yang
                    terlihat pada
                    permukaan akar. Jika tidak segera diatasi, penyakit ini dapat menyebabkan pohon karet menjadi layu dan
                    mati.
                </p>
                <br><br>

            </div>

            <div class="w-609 h-210 ml-30 mt-[34px] max-sm:flex max-sm:flex-col">
                <a href="/daftar-penyakit"
                    class="text-white text-lg bg-info-700 hover:bg-info-800 focus:ring-4 focus:ring-info-300 font-medium rounded-lg px-4 py-4 mr-2 mb-2 dark:bg-info-600 dark:hover:bg-info-700 focus:outline-none dark:focus:ring-info-800">
                    Daftar Penyakit Tanaman Karet</a>

                <a href="/"
                    class="text-white text-lg bg-success-700 hover:bg-success-800 focus:ring-4 focus:ring-success-300 font-medium rounded-lg px-4 py-4 mr-2 mb-2 dark:bg-success-600 dark:hover:bg-success-700 focus:outline-none dark:focus:ring-success-800">
                    Kembali Ke Halaman Utama</a>
            </div>


        </div>

    </div>

@endsection
