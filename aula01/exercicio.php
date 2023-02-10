<?php
class Produto
{
    function __get($variavel)
    {
        return $this->$variavel;
    }

    function __set($variavel, $valor)
    {
        $this->$variavel = $valor;
    }

    function roupa()
    {
        echo 'vender';
    }

}
$pro = new Produto();
$pro->__set('blusa', 'calca');
$pro->__set('cor', 'azul');
$pro->__set('marca', 'collci');
echo '<br>';
$pro->roupa();

print_r($pro);



?>