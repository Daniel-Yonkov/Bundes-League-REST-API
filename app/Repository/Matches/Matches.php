<?php

namespace App\Repository\Matches;
/**
 * Matches interface used in order to use Type hinting and dependency injection from within the clasees implementing Formatter
 */
interface Matches {
	public function get();
	public function data();
}