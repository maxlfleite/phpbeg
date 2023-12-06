<?php 
//o nome da função dd significa dump and die.
function dd($value) {
    echo "<pre>";
var_dump($value);
echo "</pre>";

die();
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}
?>