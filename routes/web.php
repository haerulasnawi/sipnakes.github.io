<?php

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

use Illuminate\Routing\RouteGroup;

Route::get('/datasipnakes', function () {
    return view('search');
});
Route::get('/', function () {
    return view('welcome');
});

//nakes route
Route::resource('/nakes', 'NakeController');
Route::get('/profile', function () {
    return view('pages.nakes.profile.index');
})->name('profile.nakes');
Route::post('/table/nakes', 'NakeController@dataTable')->name('table.daftar.nakes');

//user route
Route::resource('/users', 'UserController');
Route::post('/table/user', 'UserController@dataTable')->name('table.daftar.user');

//faskes route
Route::resource('/faskes', 'FaskeController');
Route::get('/profile_faskes', function () {
    return view('pages.faskes.profile.index');
})->name('profile.faskes');
Route::post('/table/daftar_faskes', 'FaskeController@dataTable')->name('table.daftar.faskes');

//istr roure
Route::resource('/str', 'IstrController');
Route::post('table/str', 'IstrController@dataTable')->name('table.str');

//pengaturan
Route::resource('/persyaratan', 'RequirementController');
Route::post('/table/peryaratan', 'RequirementController@dataTable')->name('table.persyaratan');
//dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('verified');


Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


// Route::get('/table/user_biasa', 'NakeController@dataTable')->name('table.user.biasa');
// Route::group(['middleware' => ['auth', 'checkrole:superadmin', 'verified']], function () {
//     Route::get('/admin', function () {
//         return 'Halaman admin';
//     });
// });
// Route::group(['middleware' => ['auth', 'checkrole:,superadmin,admin', 'verified']], function () {
//     Route::get('/admin', function () {
//         return 'Halaman admin';
//     });
// });
// Route::group(['middleware' => ['auth', 'checkrole:superadmin,admin,nakes,faskes', 'verified']], function () {
// });
// Route::group(['middleware' => ['auth', 'checkrole:nakes', 'verified']], function () {
//     Route::get('/nakes', function () {
//         return 'Halaman nakes';
//     });
// });
// Route::group(['middleware' => ['auth', 'checkrole:faskes', 'verified']], function () {
// });
