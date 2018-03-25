<?php

namespace App\Http\Controllers;

use App\Repository\Matches\MatchData;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
	/**
	 * Displats all the matches for the season
	 * @return Illuminate\View\View
	 */
    public function index(){
    	$matches = new MatchData(array(Carbon::now()->format('Y') - 1));
    	$response = $matches->get();
    	return view('matches.all',compact('response'));
    }
}
