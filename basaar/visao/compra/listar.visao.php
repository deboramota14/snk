
<h1> Produtos Comprados </h1>

<table class="table">
    <thead>
        <tr>
            <th>NOME</th>
            <th>PREÇO</th>
            <th>CATEGORIA</th>
        </tr>
    </thead>
 <?php foreach ($produtos_comprados as $produto): ?>
        <tr>
            <td><?=$produto['nomeproduto']?></td>
            <td><?=$produto['preco']?></td>
            <td><?=$produto['descricao']?></td>
        </tr>
    <?php endforeach; ?>
</table>
     

<h1> Endereço de entrega </h1>


	<table class="table">
    <thead>
        <tr>
            <th>NOME</th>
            <th>ENDEREÇO</th>
            <th>NUMERO</th>
            <th>CIDADE</th>
            <th>CEP</th>
        
        </tr>
    </thead>
    <tr>
        <td><?=$dados_cliente['nomeusuario']?></td>
        <td><?=$dados_cliente['endereco']?></td>
        <td><?=$dados_cliente['numero']?></td>
        <td><?=$dados_cliente['cidade']?></td>
        <td><?=$dados_cliente['cep']?></td>
 	</tr>
</table>

<?php
echo "<h2>Total a pagar = R$ ".$total_pagamento."</h2>";

?>


<form method="POST" action="">
	Digite o código do seu cupom: <input type="text" name="cupom">
	<input type="submit" value="Aplicar">


</form>





<a href=""> Confirmar Compra </a>	