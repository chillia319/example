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
use App\Csvdata;
use ConsoleTVs\Charts\Classes\Charts\Chart;
use App\Charts\SampleChart;

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/', "TableController@csvToArray");
//Route::get('Charts', 'SampleChart@index');

