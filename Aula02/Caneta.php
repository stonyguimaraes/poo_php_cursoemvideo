<?php

class Caneta
{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar()
    {
        if ($this->tampada) {
            echo "<p>ERRO! Não posso rabiscar</p>";
        } else {
            $this->ponta;
            echo "<p>Estou rabiscando</p>";
        }
    }
    function tampar()
    {
        $this->tampada = true;
    }
    function destampar()
    {
        $this->tampada = false;
    }
}
