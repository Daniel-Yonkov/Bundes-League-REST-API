<?php

use App\Repository\Matches\MatchData;
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
//Using a callback return just for the fun :)
Route::get('/', function () {
    $request = new MatchData();
    $response = $request->get();
    dd($response);
    return view('matches.upcoming',compact('response'));
});
//using controller to handle the actions
Route::get('all', 'MatchesController@index');
