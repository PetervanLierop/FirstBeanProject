<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Circus
 *
 * @author peter
 */
class Circus {
    public function beesteBoel($beesten) {
        
        foreach ($beesten as $beest) {
            $v = $beest->vliegen();
            $s = $beest->species;
            echo '<p>Het is een: ', $s; '</p>';
            echo '<p>Hoe vliegt het beest? ', $v; '</p>';
        }
    }
}
