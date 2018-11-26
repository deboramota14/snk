<?php

    /*AQUI ESTANOS EXIBINDO OS DOIS VETORES (DOS ITENS COMPRADOS E DA SESSÃO CARRINHO) */
/*
    echo "<pre>";
    print_r($carrinho);
    print_r($_SESSION["carrinho"]);
    */
if (empty($carrinho)) :?>
<?php 
    echo "<h1> Carrinho Vazio </h1>";
    die();

?>
<?php else: ?>
    <meta charset="utf-8">
<h2>Listar Produtos no Carrinho</h2>

<table class="table">
    <thead>
        <tr>
            <TH>IDPRODUTO</TH>
            <th>NOME</th> 
            <th>PREÇO</th>
            <th>QUANTIDADE</th>
            <th>DELETE</th>
            <th>ADICIONAR</th>
        </tr>
    </thead>

    
    <?php foreach ($carrinho as $produtos): ?>

<?php
$quantidade = 0;
// PERCORREMOS A SESSÃO CARRINHO, POIS PERCEBEMOS QUE OS DOIS VETORES TINHAM UM DADO IMPORTANTE, O ID DO PRODUTO
    foreach ($_SESSION["carrinho"] as $key => $comprado) {
        // AQUI COMPARAMOS OS DOIS IDS PARA ASSIM CRIAR UMA VARIAVEL PARA RECEBER A RESPECTIVA QUANTIDADE 
        if ($produtos["idproduto"] == $comprado["id"]) {
            // AQUI A VARIAVEL QUANTIDADE ESTÁ RECEBENDO A RESPECTIVA QUANTIDADE COM RELAÇÃO AO "IF" QUE FIZEMOS AQUI EM CIMA.
            $quantidade = $comprado["quantidade"];
            //echo "PRODUTO = ".$comprado["id"]. "SUA RESPECTIVA QUANTIDADE = ".$quantidade;
        }
    }


?>
    <tr>    
        <td><?=$produtos['idproduto']?></td>
        <td><?=$produtos['nomeproduto']?></td>
        <td><?=$produtos['preco']?></td>
        <td><?=$quantidade?></td>
        <td><a href="./carrinho/deletar/<?=$produtos['idproduto']?>" class="btn btn-danger">Deletar</a></td>
         <td><a href="./carrinho/adicionarQuantidade/<?=$produtos['idproduto']?>" class="btn btn-danger">Adicionar</a></td>
    </tr>
      
    <?php endforeach; ?>

<?php endif; ?>
</table>
<a href="./compra/index" class="btn btn-danger">Continuar</a>

