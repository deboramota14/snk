<?php
  $estados = array("AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MG","MS","MT","PA","PB","PE","PI","PR","RJ","RN","RO","RR","RS","SC","SE","SP","TO");
?>

<form action="<?=@$acao?>" method="POST">
    nome: <input type="text" name="nome" value="<?=@$usuario['nome']?>">
    email: <input type="text" name="email" value="<?=@$usuario['email']?>">
     senha: <input type="password" name="senha" value="<?=@$usuario['senha']?>">
      telefone: <input type="text" name="telefone" value="<?=@$usuario['telefone']?>" data-mask="(00) 0000-0000">
       cpf: <input type="text" name="cpf" value="<?=@$usuario['cpf']?>" data-mask="000.000.000-00">
       endereco: <input type="text" name="endereco" value="<?=@$usuario['endereco']?>" >
        cep: <input type="text" name="cep" value="<?=@$usuario['cep']?>" data-mask="00000-000"> 
       cidade: <input type="text" name="cidade" value="<?=@$usuario['cidade']?>" >
       número: <input type="text" name="numero" value="<?=@$usuario['numero']?>" >

        estado<select name="estado" class="form-control">
        <?php for ($i = 0; $i < count($estados); $i++) {
        ?>
          ESTADOS:<option value="<?=$estados[$i]?>" <?=@assinalarCampo($usuario['estado'], '<?=$estados[$i]?>')?>><?=$estados[$i]?></option>
        <?php  } ?>
        </select> 
    <?php if (authGetUserRole() == 'admin'){ ?>
       <select name="tipouser">
         <option value="1" <?=@assinalarCampo($usuario['tipouser'], '1')?>>admin</option>
         <option value="0" <?=@assinalarCampo($usuario['tipouser'], '0')?>>user</option>
        </select>
    <?php } else { ?>
       <input type="hidden" name="tipouser" value="0">
       <?php } ?>
    sexo<select name="sexo">
        <option value="m" <?=@assinalarCampo($usuario['sexo'], 'm')?>>Masculino</option>
        <option value="f" <?=@assinalarCampo($usuario['sexo'], 'f')?>>Feminino</option>
    </select>
    <button type="submit">Enviar</button>
</form>

<script type="text/javascript" src="./publico/js/jquery.mask.js"></script>
<script type="text/javascript" src="./publico/js/jquery-3.3.1.min.js"></script>