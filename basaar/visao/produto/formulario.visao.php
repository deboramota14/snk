<form action="<?=@$acao?>" method="POST">
  nome: <input type="text" name="nome" value="<?=@$produto['nome']?>">
  descrição: <select  type="text" name="descricao" value="<?=@$produto['descricao']?>">
				<option>Sapatos</option>
				<option>Camisetas</option>
				<option>Blusas</option>
				<option>Calças</option>
				<option>Bermudas</option>
				<option>Shorts</option>
				<option>Meias</option>
				<option>Acessórios</option>
			</select>
  preço: <input type="text" name="preco" value="<?=@$produto['preco']?>">
    quantidade: <input type="text" name="quantidade" value="<?=@$produto['quantidade']?>">
    imagem: <input type="text" name="imagem" value="<?=@$produto['imagem']?>">

  
  <button type="submit">Enviar</button>
</form>

