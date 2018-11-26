<?php


function pegarTodosCupons(){

	$comando = "SELECT * FROM cupom";
	$retorno = mysqli_query(conn(), $comando);
	$cupons = array();
	while($registro = mysqli_fetch_assoc($retorno)) {
		$cupons[] = $registro;
	}
	return $cupons;
}

function pegarCupomPorId($id){
	$sql = "SELECT * FROM cupom WHERE idcupom= '$id'";

    $retorno = mysqli_query(conn(), $sql);
    $cupom = mysqli_fetch_assoc($retorno);
    return $cupom;

}

function adicionarCupom($nomecupom,$desconto){

	$comando = "INSERT INTO cupom (nomecupom, desconto)
				values ('$nomecupom', '$desconto')";
	$retorno = mysqli_query($cnx = conn(), $comando);
 if(!$retorno) { die('Erro ao adicionar cupom' . mysqli_error($cnx)); }
    return 'cupom adicionado com sucesso!';

}

function editarCupom($id, $nomecupom, $desconto){
	$comando = "UPDATE cupom SET nomecupom = '$nomecupom', desconto = '$desconto'
	WHERE idcupom ='$id'";
	$retorno = mysqli_query($cnx = conn(), $comando);
 	if(!$retorno) { die('Erro ao alterar cupom' . mysqli_error($cnx)); }
    return 'Cupom alterado com sucesso!';
	} 

function deletarCupom($id){
	$comando = "DELETE FROM cupom WHERE idcupom = $id";
	$retorno = mysqli_query($cnx = conn(), $comando); 
    if(!$retorno) { die('Erro ao deletar cupom' . mysqli_error($cnx)); }
    return 'Cupom deletado com sucesso!';
}

function procurarCupom ($nome){
	$sql = "SELECT * FROM cupom WHERE nomecupom LIKE '%$nome%'";
	$resultado = mysqli_query ($cnx = conn(), $sql);
	$cupons =  mysqli_fetch_assoc($resultado); 
	return $cupons;

}
?>