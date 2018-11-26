<section class="wrapper">
    <div class="inner">
        <header class="special">
            <h2>Confira nossos produtos!</h2>
        </header>
        <div class="highlights">
         <?php foreach ($produtos as $produto): ?>
            <section>
                <div class="content">
                    <header>
                        <img src="<?=$produto['imagem']?>" width="200">
                        <h3><?=$produto['nomeproduto']?></h3>
                    </header>
                    <p><?=$produto['descricao']?></p>
                    <p><a href="./carrinho/adicionar/<?=$produto['idProduto']?>" class="btn btn-danger">Carrinho</a></p>
                    <p><a href="./produto/visualizar/<?=$produto['idProduto']?>" class="btn btn-secondary">Detalhes</a></p>

                </div>
            </section>
        <?php endforeach; ?>
        </div>
    </div>
</section>





<h2>Listar Produtos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>PREÇO</th>
            <th>DESCRIÇÃO</th>
            <th>QUANTIDADE</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
            <th>COMPRAR</th>
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?=$produto['idProduto']?></td>
            <td><?=$produto['nomeproduto']?></td>
            <td><?=$produto['preco']?></td>
            <td><?=$produto['descricao']?></td>
            <td><?=$produto['quantidade']?></td>
            <td><a href="./produto/visualizar/<?=$produto['idProduto']?>" class="btn btn-secondary">View</a></td>
            <td><a href="./produto/editar/<?=$produto['idProduto']?>" class="btn btn-info">Editar</a></td>
            <td><a href="./produto/deletar/<?=$produto['idProduto']?>" class="btn btn-danger">Deletar</a></td>
            <td><a href="./carrinho/adicionar/<?=$produto['idProduto']?>" class="btn btn-danger">Carrinho</a></td>

        </tr>
    <?php endforeach; ?>
</table>

<?php if(authGetUserRole() == 'admin'){?>
<a href="./produto/adicionar" class="btn btn-primary">Adicione um novo produto se você é administrador!</a>
<?php } ?>
