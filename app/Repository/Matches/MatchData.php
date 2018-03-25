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
		//default 
		if($format) {
			$this->format = new $format();
		}
		else {
			$this->format = new $this->format();
		}
		$this->apiURL.=implode('/',$urlParams);
		$this->matches = file_get_contents($this->apiURL);
	}

	public function get(){
		return $this->format->reponse($this);
	}

	public function data(){
		return $this->matches;
	}
}

