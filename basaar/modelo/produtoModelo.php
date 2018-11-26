<?php


function pegarTodosProdutos(){

	$comando = "SELECT * FROM tblproduto";
	$retorno = mysqli_query(conn(), $comando);
	$produtos = array();
	while($registro = mysqli_fetch_assoc($retorno)) {
		$produtos[] = $registro;
	}
	return $produtos;
}

function pegarProdutoPorId($id){
	$sql = "SELECT * FROM tblproduto WHERE idProduto= '$id'";

    $retorno = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_array($retorno);
    return $produto;

}

function adicionarProduto($nome, $descricao, $tipo, $preco,$quantidade, $imagem){

	$comando = "INSERT INTO tblproduto (nomeproduto, descricao, tipoproduto, preco,quantidade, imagem)
				values ('$nome', '$descricao', '$tipo', '$preco','$quantidade', '$imagem')";
	$retorno = mysqli_query($cnx = conn(), $comando);
 if(!$retorno) { die('Erro ao adicionar produto' . mysqli_error($cnx)); }
    return 'produto adicionado com sucesso!';

}

function editarProduto($id, $nome, $descricao, $tipo, $preco, $quantidade, $imagem){
	$comando = "UPDATE tblproduto SET nomeproduto = '$nome', descricao = '$descricao', tipoproduto = '$tipo',  preco = '$preco', quantidade = '$quantidade', imagem = '$imagem'
	WHERE idProduto ='$id'";
	$retorno = mysqli_query($cnx = conn(), $comando);
 	if(!$retorno) { die('Erro ao alterar produto' . mysqli_error($cnx)); }
    return 'Produto alterado com sucesso!';
	} 

function deletarProduto($id){
	$comando = "DELETE FROM tblproduto WHERE idProduto = $id";
	$retorno = mysqli_query($cnx = conn(), $comando); 
    if(!$retorno) { die('Erro ao deletar produto' . mysqli_error($cnx)); }
    return 'Produto deletado com sucesso!';
}
?>