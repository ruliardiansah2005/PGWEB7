<?php
    /*
    $i = 1;
    while ($i < 10) {
        echo $i . "<br>";
        $i++; //$i= $i+1 increment
    }
    */

    /*
    for ($i = 1; $i < 100; $i++) {
        echo $i . "<br>";
    }
        */

    $mobil = array("Toyota", "Honda", "Suzuki", "Daihatsu", "Mitsubishi");

    foreach ($mobil as $value) {
        echo $value . "<br>";
    }

    for($i=0; $i<=4; $i++){
        echo $mobil[$i] . "<br>";
    }
?>