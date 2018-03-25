<?php

namespace App\Http\Controllers;

use App\Repository\Matches\MatchData;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
    public function index(){
    	$matches = new MatchData(array('2017'));
    	$response = $matches->get();
    	return view('matches.all',compact('response'));
    }
}
