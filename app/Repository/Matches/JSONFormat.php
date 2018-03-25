<?php

namespace App\Repository\Matches;

use App\Repository\Matches\Formatter;

class JSONFormat implements Formatter {
	public function reponse(Matches $matches){
		return json_decode($matches->data());
	}
}