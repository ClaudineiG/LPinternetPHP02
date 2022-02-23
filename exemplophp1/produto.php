<?php

class Produto
{
	private $id;
	private $descricao;
	private $preco;

	public function __set($prop,$valor)
	{
			$this->{$prop} = $valor;
	}

	public function __get($prop)
	{
		if($prop == 'imposto'){
			return $this->preco * 0.1;
		}
		else{
			return $this ->{$prop};
		}
		
	}

	public function __construct($i,$d,$p){
		$this->id = $i;
		$this->descricao = $d;
		$this->preco = $p;
	}
}
?>