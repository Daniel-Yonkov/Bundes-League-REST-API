<?php

namespace App\Repository\Matches;

use App\Repository\Matches\Formatter;
use App\Repository\Matches\JSONFormat;

class MatchData implements Matches {
	private $apiURL = 'https://www.openligadb.de/api/getmatchdata/bl1/';
	private $format = JSONFormat::class;
	private $matches;
	public function __construct(array $urlParams=array(), Formatter $format = NULL)
	{
		//if format is provided, the new format object is injected
		if($format) {
			$this->format = new $format();
		}
		//the default format (JSONFormat) is injected
		else {
			$this->format = new $this->format();
		}
		//if params are provided we append them to the url
		$this->apiURL.=implode('/',$urlParams);
		$this->matches = file_get_contents($this->apiURL);
	}
	/**
	 * Returns data of the Matches
	 * There is no need in this case to use this parser since Laravel parses the response into a Collection, which in fact this parser breaks a bit - I decided to show some pattern ideas.
	 * @return Formatter->response | this could return the Formatter implementing object.
	 * 
	 */
	public function get(){
		return $this->format->reponse($this);
	}
	/**
	 * Retrieves the data from the consumed REST API call. 
	 */
	public function data(){
		return $this->matches;
	}
}

