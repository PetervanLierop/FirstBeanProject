<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        include_once 'Kip.php';
        include_once 'WaterVleermuis.php';
        include_once 'Circus.php';
        $circus = new Circus;
        $truus = new Kip; 
        $henk = new WaterVleermuis;

 	$beesten = array ();
        $beesten[] = $truus;
        $beesten[] = $henk;
        $circus->beesteBoel($beesten);

        ?>
    </body>
</html>
