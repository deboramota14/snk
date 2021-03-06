<?php

	require_once "modelo/produtoModelo.php";
	
/** anon */
	function index () {
	 	$dados["produtos"] = pegarTodosProdutos();
	 	exibir ("produto/listar", $dados);
 	}

/** admin */

 	function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarProduto($nome, $descricao, $tipoproduto, $preco,$quantidade, $imagem));
        redirecionar("produto/index");
    } else {
        exibir("produto/formulario");
    }
}
/** admin */
	function deletar($id) {
    alert(deletarProduto($id));
    redirecionar("produto/index");
}
/** admin */
	function editar($id) {
    if (ehPost()) {
        $nome=$_POST["nome"];
        $descricao=$_POST["descricao"];
        $preco=$_POST["preco"];
        $quantidade=$_POST["quantidade"];
        $imagem=$_POST["imagem"];
        alert(editarProduto($id, $nome, $descricao, $tipoproduto, $preco, $quantidade, $imagem));
        redirecionar("produto/index");
    } else {
        $dados['produto'] = pegarProdutoPorId($id);
        $dados['acao'] = "./produto/editar/$id";
        exibir("produto/formulario", $dados);
    }
}
/** anon */
	function visualizar($id) {
    $dados['produto'] = pegarProdutoPorId($id);
    exibir("produto/visualizar", $dados);
}


?>