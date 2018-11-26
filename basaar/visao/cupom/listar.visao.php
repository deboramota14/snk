<?php if(empty($cupons)) :?>

    <h1>Sem cupons!</h1>
    <a href="./cupom/adicionar"> Volte e cadastre um novo cupom! </a>


    <?php else: ?>

        <div class="container">
            <h2>CUPONS</h2>
            <div class="panel panel-default">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>IDCUPOM</th>
                            <th>NOME</th>
                            <th>DESCONTO</th>
                            <th>EDITAR</th>
                            <th>DELETAR</th>
                        </tr>
                    </thead>
                 
     
                    <?php foreach ($cupons as $cupom): ?>

                
                        <tr>
                            <td><?=$cupom["idcupom"];?></td>
                            <td><?=$cupom["nomecupom"];?></td>
                            <td><?=$cupom['desconto']?>%</td>
                            <td><a href="./cupom/editar/<?=$cupom["idcupom"]?>" class="btn btn-danger">edit</a></td>
                            <td><a href="./cupom/deletar/<?=$cupom["idcupom"]?>" class="btn btn-danger">del</a></td>
                        </tr> 
                    <?php endforeach; ?>
                    
                </table> 
            </div>
        </div>
    <?php endif; ?>



