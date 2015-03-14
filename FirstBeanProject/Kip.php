<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Kip
 *
 * @author peter
 */ 
class Kip {
    private $species;
        
    public function Kip() {
        $this->species = 'Kip';
    }
    
    
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
    
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
    
    function legEenEi() {
	$text = 'Een kippenei!';
	return $text;
    }
    function opstijgen() {
	$text = 'Opstijgen als een kip.';
	return $text;
    }

    public function vliegen(){
        $text = 'vliegen als een kip.';
        return $text;
    }
}
