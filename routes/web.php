<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Halaman Utama
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('main.HalamanUtama');
});

Route::get('/about', function () {
    return view('main.about');
});


Route::get('/daftar-penyakit', function () {
    return view('main.DaftarPenyakit');
});

/*
|--------------------------------------------------------------------------
| Detail Penyakit
|--------------------------------------------------------------------------
*/
Route::get('/detail/akar_merah', function () {
    return view('penyakit.AkarMerah');
});

Route::get('/detail/akar_putih', function () {
    return view('penyakit.AkarPutih');
});

Route::get('/detail/jamur-upas', function () {
    return view('penyakit.JamurUpas');
});

Route::get('/detail/kanker_bercak', function () {
    return view('penyakit.KankerBercak');
});

Route::get('/detail/kering_alur_sadap', function () {
    return view('penyakit.KeringAlurSadap');
});

Route::get('/detail/mouldy_rot', function () {
    return view('penyakit.MouldyRoot');
});

Route::get('/detail/netkrosis_kulit', function () {
    return view('penyakit.NetkrosisKulit');
});


/*
|--------------------------------------------------------------------------
| Diagnosa Gejala Penyakit
|--------------------------------------------------------------------------
*/
Route::get('/diagnosa/g001', function () {
    return view('diagnosa.G001');
});

Route::get('/diagnosa/g002', function () {
    return view('diagnosa.G002');
});

Route::get('/diagnosa/g003', function () {
    return view('diagnosa.G003');
});

Route::get('/diagnosa/g004', function () {
    return view('diagnosa.G004');
});

Route::get('/diagnosa/g005', function () {
    return view('diagnosa.G005');
});

Route::get('/diagnosa/g006', function () {
    return view('diagnosa.G006');
});

Route::get('/diagnosa/g007', function () {
    return view('diagnosa.G007');
});

Route::get('/diagnosa/g008', function () {
    return view('diagnosa.G008');
});

Route::get('/diagnosa/g009', function () {
    return view('diagnosa.G009');
});

Route::get('/diagnosa/g010', function () {
    return view('diagnosa.G010');
});

Route::get('/diagnosa/g011', function () {
    return view('diagnosa.G011');
});

Route::get('/diagnosa/g012', function () {
    return view('diagnosa.G012');
});

Route::get('/diagnosa/g013', function () {
    return view('diagnosa.G013');
});

Route::get('/diagnosa/g014', function () {
    return view('diagnosa.G014');
});

Route::get('/diagnosa/g015', function () {
    return view('diagnosa.G015');
});

Route::get('/diagnosa/g016', function () {
    return view('diagnosa.G016');
});

Route::get('/diagnosa/g017', function () {
    return view('diagnosa.G017');
});

Route::get('/diagnosa/g018', function () {
    return view('diagnosa.G018');
});

Route::get('/diagnosa/g019', function () {
    return view('diagnosa.G019');
});

Route::get('/diagnosa/g020', function () {
    return view('diagnosa.G020');
});

Route::get('/diagnosa/g021', function () {
    return view('diagnosa.G021');
});

Route::get('/diagnosa/g022', function () {
    return view('diagnosa.G022');
});

Route::get('/diagnosa/g023', function () {
    return view('diagnosa.G023');
});

Route::get('/diagnosa/g024', function () {
    return view('diagnosa.G024');
});


/*
|--------------------------------------------------------------------------
| Hasil Diagnosa Penyakit
|--------------------------------------------------------------------------
*/

Route::get('/hasil/p001', function () {
    return view('diagnosa.hasil.P001');
});

Route::get('/hasil/p002', function () {
    return view('diagnosa.hasil.P002');
});

Route::get('/hasil/p003', function () {
    return view('diagnosa.hasil.P003');
});

Route::get('/hasil/p004', function () {
    return view('diagnosa.hasil.P004');
});

Route::get('/hasil/p005', function () {
    return view('diagnosa.hasil.P005');
});

Route::get('/hasil/p006', function () {
    return view('diagnosa.hasil.P006');
});

Route::get('/hasil/p007', function () {
    return view('diagnosa.hasil.P007');
});
