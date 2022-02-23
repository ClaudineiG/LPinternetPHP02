<?php 

include('produto.php');
include('bd.php');

$p = new Produto(10, 'Porca', 0.6);

$p->descricao = 'Prego';

echo "$p->id - $p->descricao - $p->preco<br/>";

echo" $p->imposto <br/>";

$produtos = Persiste::obterTodosProdutos();

foreach ($produtos as $i => $v) {
	echo "$v->id - $v->descricao - $v->preco - $v->imposto <br/> ";
}

?>