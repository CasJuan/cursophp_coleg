<?php

function anidacion() {
    
    $day = "sabado";

    if(empty($day))
        return false;

    $openinDays = ["lunes","martes","miercoes","jueves","viernes"];

    return in_array(strtolower($day),$openinDays, true);

    
}

echo anidacion() ? "abierto" : "cerrado";


/* if($day){
    if (is_string($day)) {
        $day = strtolower($day);

        if ($day == "lunes") {  
            return true;
        }else{
            return false;
        }
    }
} */


