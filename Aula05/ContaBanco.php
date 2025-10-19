<?php

class ContaBanco
{
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // Métodos Públicos
    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CP") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta com saldo positivo. Não pode ser fechada.</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta com saldo negativo. Não pode ser fechada.></p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta fechada com sucesso.</p>";
        }
    }
    public function depositar($v)
    {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Depósito de R$ $v na conta de " . $this->getDono() . "</p>";
        } else {
            echo "<p>Impossível depositar. Conta fechada.</p>";
        }
    }
    public function sacar($v)
    {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$ $v autorizado na conta de " . $this->getDono() . "</p>";
            } else {
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        } else {
            echo "<p>Impossível sacar. Conta fechada.</p>";
        }
    }
    public function pagarMensal()
    {
        if ($this->getTipo() == "CC") {
            $v = 12;
        } elseif ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de R$ $v debitada na conta de " . $this->getDono() . "</p>";
            } else {
                echo "<p>Saldo insuficiente para pagar a mensalidade.</p>";
            }
        } else {
            echo "<p>Impossível pagar. Conta fechada.</p>";
        }
    }
    // Métodos Especiais
    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setNumConta($n)
    {
        $this->numConta = $n;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($t)
    {
        $this->tipo = $t;
    }
    public function getDono()
    {
        return $this->dono;
    }
    public function setDono($d)
    {
        $this->dono = $d;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($s)
    {
        $this->saldo = $s;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($st)
    {
        $this->status = $st;
    }
}
