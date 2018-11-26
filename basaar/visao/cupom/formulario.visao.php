<form action="<?=@$acao?>" method="POST">
  nome: <input type="text" name="nomecupom" value="<?=@$cupons['nomecupom']?>">
  desconto: <input type="number" name="desconto" value="<?=@$cupons['desconto']?>">

  
  <button type="submit">Enviar</button>
  <br>
  <a href="./cupom/"> Ver todos Cupons </a>
</form>