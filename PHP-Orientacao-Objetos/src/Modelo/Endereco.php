<?php

namespace Alura\Banco\Modelo;

/**
 * class Endereco
 * @packege Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 * 
 */
final class Endereco
{
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function __get(string $nomeAtributo)
    {
        //rua -> recuperaRua
        $metodo = 'recupera'. ucfirst($nomeAtributo);
        return $this->$metodo();
    }

    //Exemplo de método set, que inclui um alterar, e o __set para recuperar a função altera

    public function alteraCidade($novaCidade): void{
        $this->cidade = $novaCidade;
    }

    public function __set($nomeAtributo, $value): void{
        $metodo = 'altera' . ucfirst($nomeAtributo);
        $this->$metodo($value);

    }
}
