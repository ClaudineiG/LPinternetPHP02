<?php

include_once('produto.php');

class Persiste

{
	public static function obterTodosProdutos()
	{
		return [
			new Produto(20,'Parafuso',2.0)
			,
			new Produto(30,'Arruela',0.35)
		];
	}
}
			
?>

