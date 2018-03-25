<?php

use Illuminate\Http\Request;

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

Route::get('/', function () {
    $request=json_decode(file_get_contents('https://www.openligadb.de/api/getmatchdata/bl1'));
    // dd($request[0]);
    return view('matches.upcoming',compact('request'));
});
