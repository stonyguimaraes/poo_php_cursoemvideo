<?php

class Caneta
{
    var $modelo;
    var $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar()
    {
        if ($this->tampada) {
            echo "<p>ERRO! Não posso rabiscar</p>";
        } else {
            $this->ponta;
            echo "<p>Estou rabiscando...</p>";
        }
    }
    public function tampar()
    {
        $this->tampada = true;
    }
    public function destampar()
    {
        $this->tampada = false;
    }
}
