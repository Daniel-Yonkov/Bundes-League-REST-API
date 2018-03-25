<?php

namespace App\Repository\Matches;

use App\Repository\Matches\Formatter;

class JSONFormat implements Formatter {
	/**
	 * Generates JSON data from the provided response
	 * @param Matches $matches 
	 * @return JSON
	 */
	public function reponse(Matches $matches){
		return json_decode($matches->data());
	}
}