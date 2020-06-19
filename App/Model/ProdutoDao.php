<?php

namespace App\Model;

class ProdutoDao{

	public function create(Produto $produto){

		$sql = 'INSERT INTO produtos (nome, descricao) VALUES (?,?)';

		$stmt = Conexao::getCon()->prepare($sql);

		$stmt->bindValue(1, $produto->getNome()); 	
		$stmt->bindValue(2, $produto->getDescricao());

		$stmt->execute(); 	
	}
	public function read(){

		$sql = 'SELECT * FROM produtos';

		$stmt = Conexao::getCon()->prepare($sql);
		$stmt->execute();

		if($stmt->rowCount()>0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;
		
	}
	public function update(Produto $produto){

		$sql = 'UPDATE produtos Set nome = ?, descricao = ? WHERE id = ?';

		$stmt= Conexao::getCon()->prepare($sql);

		$stmt->bindValue(1, $produto->getNome());
		$stmt->bindValue(2, $produto->getDescricao());
		$stmt->bindValue(3, $produto->getId());

		$stmt->execute();

	}
	public function delete($id){

		$sql = 'DELETE FROM produtos WHERE id = ?';
		$stmt = Conexao::getCon()->prepare($sql);
		$stmt->bindValue(1, $id);

		$stmt->execute();
		
	}


}