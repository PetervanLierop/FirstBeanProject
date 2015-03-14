<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of WaterVleermuis
 *
 * @author peter
 */
class WaterVleermuis {
    private $species;
    
    public function WaterVleermuis() {
        $this->species = 'WaterVleermuis';
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
   
    function opstijgen() {
	$text = 'Opstijgen als een watervleermuis.';
	return $text;
    }
    
    function vliegen(){
    $text = 'vliegen als een watervleermuis.';
	return $text;
    }
}
