<?php
class Lutador
{
    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    // Métodos Públicos
    public function apresentar()
    {
        echo "<p>------------------------------------</p>";
        echo "<p>Chegou a hora! Apresentamos o lutador " . $this->getNome() . "</p>";
        echo "<p>Diretamente de " . $this->getNacionalidade() . "</p>";
        echo "<p>Com " . $this->getIdade() . " anos e " . $this->getAltura() . "m de altura</p>";
        echo "<p>Peso: " . $this->getPeso() . "kg</p>";
        echo "<p>Ganhou " . $this->getVitorias() . " vezes</p>";
        echo "<p>Perdeu " . $this->getDerrotas() . " vezes</p>";
        echo "<p>Empatou " . $this->getEmpates() . " vezes</p>";
    }
    public function status()
    {
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria() . "</p>";
        echo "<p>Ganhou " . $this->getVitorias() . " vezes</p>";
        echo "<p>Perdeu " . $this->getDerrotas() . " vezes</p>";
        echo "<p>Empatou " . $this->getEmpates() . " vezes</p>";
    }
    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }
    // Métodos Especiais
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    private function setCategoria()
    {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }
    public function getVitorias()
    {
        return $this->vitorias;
    }
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }
    public function getDerrotas()
    {
        return $this->derrotas;
    }
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }
    public function getEmpates()
    {
        return $this->empates;
    }
    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }
}
