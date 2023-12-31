<?php 

class Validator{
    public static function string($value, $min = 1, $max = INF){
       // trim() remove os espaços em branco
        $value = trim($value);

        // Verifica se o tamanho do texto da variável corresponde com o min e max
        return strlen($value) >=$min && strlen($value) <=$max;
    }
    public static function email($value){
       return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
?>
