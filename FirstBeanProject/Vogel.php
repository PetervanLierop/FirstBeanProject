<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace vogel;

/**
 * Description of Vogel
 *
 * @author peter
 */
abstract class Vogel extends \Beest implements BewegenDoorDeLucht
{
	private $species = 'Kip';

	function getSpecies() {
		return $this->species;
	}

	function legEenEi() {
		$text = 'Een kippenei!';
		return $text;
	}
	function opstijgen() {
		$text = 'Opstijgen als een kip.';
		return $text;
	}

	function vliegen(){
		$text = 'vliegen als een kip.';
		return $text;
	}
}
