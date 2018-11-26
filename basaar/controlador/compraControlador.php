<?php
require_once 'modelo/usuarioModelo.php';
require_once 'modelo/produtoModelo.php';
require_once 'modelo/cupomModelo.php';

function index () {
	if (ehPost()) {
		$cupom = $_POST["cupom"];
		$cupom_encontrado = procurarCupom($cupom);

		if (!empty($cupom_encontrado)) {
			$desconto = 0;
			$desconto = $cupom_encontrado["desconto"]/100;
			//	echo $desconto;
		}
	}




$dados_cliente = $_SESSION["auth"]["user"];
$total_pagamento = 0;
$produtos_comprados = array();
foreach ($_SESSION["carrinho"] as $campo => $value) {
	$produtos_comprados[] = pegarProdutoPorId($value['id']);
	foreach ($produtos_comprados as $key => $valor) {
		if ($value["id"] == $valor["idProduto"]) {
				$total_pagamento = $total_pagamento  +($value["quantidade"] * $valor["preco"]);
			}
		}
	}

if (isset($desconto)) {
	$total_pagamento = $total_pagamento - ($total_pagamento * $desconto);
}


$dados["dados_cliente"] = $dados_cliente;
$dados["produtos_comprados"] = $produtos_comprados;
$dados["total_pagamento"] = $total_pagamento;
exibir("compra/listar",$dados);




}
?>