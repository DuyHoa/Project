<?php

use Illuminate\Http\Request;
use App\chuyennganh;
use App\mondaicuong;
use App\monchuyennganh;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*---Chuyên ngành---*/
Route::get('chuyennganhs', 'ChuyenNganhController@index');
/*Route::get('chuyennganhs/{chuyennganh}', 'ChuyenNganhController@show');*/
Route::post('chuyennganhs', 'ChuyenNganhController@store');
Route::put('chuyennganhs/{chuyennganh}', 'ChuyenNganhController@update');
Route::delete('chuyennganhs/{chuyennganh}', 'ChuyenNganhController@delete');
/*---Môn đại cương---*/
Route::get('mondaicuongs', 'MonDaiCuongController@index');
Route::get('mondaicuongs/{mondaicuong}', 'MonDaiCuongController@show');
Route::post('mondaicuongs', 'MonDaiCuongController@store');
Route::put('mondaicuongs/{mondaicuong}', 'MonDaiCuongController@update');
Route::delete('mondaicuongs/{mondaicuong}', 'MonDaiCuongController@delete');
/*---Môn chuyên ngành---*/
Route::get('monchuyennganhs', 'MonChuyenNganhController@index');
Route::get('monchuyennganhs/{monchuyennganh}', 'MonChuyenNganhController@show');
Route::post('monchuyennganhs', 'MonChuyenNganhController@store');
Route::put('monchuyennganhs/{monchuyennganh}', 'MonChuyenNganhController@update');
Route::delete('monchuyennganhs/{monchuyennganh}', 'MonChuyenNganhController@delete');

Route::get('monhoc/{ma_nganh}', 'HomeController@get_mon_hoc');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});