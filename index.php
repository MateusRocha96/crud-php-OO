<?php

require_once 'vendor/autoload.php';

/*$produto = new \App\Model\Produto();
$produto->setId(1);
$produto->setNome('Notebook-Lenovo');
$produto->setDescricao('i5, 16gb');

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->update($produto);
$produtoDao->read();

foreach ($produtoDao->read() as $produto) {
	echo $produto['nome']."<br>".$produto['descricao']."<hr";
	
}*/

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->delete(1);