<?php
$arrayInteger = [-1, 2, 3, -6];
for ($i=0; $i < count($arrayInteger); $i++) { 
    if ($arrayInteger[$i] < 0) {
        continue;
    }else{
        echo($arrayInteger[$i]);
    }
}
?>