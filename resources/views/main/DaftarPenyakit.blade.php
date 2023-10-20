@extends('/layouts/penyakit/main')
@section('title', 'Daftar Penyakit')

@section('content')
    <div id="content" class="flex flex-wrap px-4 py-4 min-h-screen max-sm:justify-center">
        {{-- //penyakit akar putih --}}
        <div
            class="max-w-sm p-6 mr-3 mb-3 bg-primary-200 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Penyakit Akar Putih
                </h5>
            </a>
            <img src="{{ asset('img/penyakit/P001.png') }}" class="my-2 w-[224px] h-[171px]" alt="CekKaret Logo" />
            <a href="/detail/akar_putih"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-success-700 rounded-lg hover:bg-success-800 focus:ring-4 focus:outline-none focus:ring-success-300 dark:bg-success-600 dark:hover:bg-success-700 dark:focus:ring-success-800">
                Lihat Detail
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    
        {{-- //penyakit akar merah --}}
        <div
            class="max-w-sm p-6 mr-3 mb-3 bg-primary-200 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Penyakit Akar Merah
                </h5>
            </a>
            <img src="{{ asset('img/penyakit/P002.png') }}" class="my-2 w-[224px] h-[171px]" alt="CekKaret Logo" />
            <a href="/detail/akar_merah"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-success-700 rounded-lg hover:bg-success-800 focus:ring-4 focus:outline-none focus:ring-success-300 dark:bg-success-600 dark:hover:bg-success-700 dark:focus:ring-success-800">
                Lihat Detail
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    
        {{-- Jamur Upas --}}
        <div
            class="max-w-sm p-6 mr-3 mb-3 bg-primary-200 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Jamur Upas
                </h5>
            </a>
            <img src="{{ asset('img/penyakit/P003.png') }}" class="my-2 w-[224px] h-[171px]" alt="CekKaret Logo" />
            <a href="/detail/jamur-upas"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-success-700 rounded-lg hover:bg-success-800 focus:ring-4 focus:outline-none focus:ring-success-300 dark:bg-success-600 dark:hover:bg-success-700 dark:focus:ring-success-800">
                Lihat Detail
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    
        {{-- Kanker Bercak --}}
        <div
            class="max-w-sm p-6 mr-3 mb-3 bg-primary-200 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Kanker Bercak
                </h5>
            </a>
            <img src="{{ asset('img/penyakit/P004.png') }}" class="my-2 w-[224px] h-[171px]" alt="CekKaret Logo" />
            <a href="/detail/kanker_bercak"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-success-700 rounded-lg hover:bg-success-800 focus:ring-4 focus:outline-none focus:ring-success-300 dark:bg-success-600 dark:hover:bg-success-700 dark:focus:ring-success-800">
                Lihat Detail
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    
        {{-- Nekrosis Kulit --}}
        <div
            class="max-w-sm p-6 mr-3 mb-3 bg-primary-200 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Nekrosis Kulit
                </h5>
            </a>
            <img src="{{ asset('img/penyakit/P005.png') }}" class="my-2 w-[224px] h-[171px]" alt="CekKaret Logo" />
            <a href="/detail/netkrosis_kulit"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-success-700 rounded-lg hover:bg-success-800 focus:ring-4 focus:outline-none focus:ring-success-300 dark:bg-success-600 dark:hover:bg-success-700 dark:focus:ring-success-800">
                Lihat Detail
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    
        {{-- Penyakit Bidang Sadapan
        Mouldy rot --}}
        <div
            class="max-w-sm p-6 mr-3 mb-3 bg-primary-200 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Mouldy rot
                </h5>
            </a>
            <img src="{{ asset('img/penyakit/P006.png') }}" class="my-2 w-[224px] h-[171px]" alt="CekKaret Logo" />
            <a href="/detail/mouldy_rot"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-success-700 rounded-lg hover:bg-success-800 focus:ring-4 focus:outline-none focus:ring-success-300 dark:bg-success-600 dark:hover:bg-success-700 dark:focus:ring-success-800">
                Lihat Detail
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    
        {{-- Penyakit Kering Alur Sadap --}}
        <div
            class="max-w-sm p-6 mr-3 mb-3 bg-primary-200 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Kering Alur Sadap
                </h5>
            </a>
            <img src="{{ asset('img/penyakit/P007.png') }}" class="my-2 w-[224px] h-[171px]" alt="CekKaret Logo" />
            <a href="/detail/kering_alur_sadap"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-success-700 rounded-lg hover:bg-success-800 focus:ring-4 focus:outline-none focus:ring-success-300 dark:bg-success-600 dark:hover:bg-success-700 dark:focus:ring-success-800">
                Lihat Detail
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
    <div class=" flex flex-wrap max-sm:justify-center w-609 h-210 ml-30 mt-[34px] ml-[40%] max-sm:ml-4">
        <a href="/diagnosa/g001"
            class="text-white text-lg bg-success-700 hover:bg-success-800 focus:ring-4 focus:ring-success-300 font-medium rounded-lg px-5 py-4 mr-2 mb-2 dark:bg-success-600 dark:hover:bg-success-700 focus:outline-none dark:focus:ring-success-800">
            Mulai Diagnosa</a>
    </div>
@endsection
