
<?php 
require "./servicos/carrinhoServico.php";
require "./modelo/produtoModelo.php";

/** anon */

	// function index(){
	// 	$carrinhoProdutos = $_SESSION["carrinho"];
	// 	$dados["produtos"] = pegarProdutosPorId($carrinhoProdutos);
	// 	exibir("produto/carrinho",$dados);
	// }

function index(){
	if (!empty($_SESSION["carrinho"])) {
		$carrinho = $_SESSION["carrinho"];
        $prod = array();

        for ($i=0; $i < count($carrinho); $i++) { 
            $produto = pegarProdutoPorId($carrinho[$i]["id"]);	
            $prod["idproduto"] = $carrinho[$i]["id"];

            $prod['nomeproduto'] = $produto['nomeproduto'];
            $prod['preco'] = $produto['preco'];
            $produtos[] = $prod;
        }
        $dados["carrinho"] = $produtos;
        exibir("produto/carrinho",$dados);
    }else{
       exibir("produto/carrinho");
                     //echo "<h2>vazio!</h2>";

   }
}

/** anon */
function adicionar($id)
{
    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    }

    //vai existir a sessao carrinho!
    $alt = false ;


    for ($i=0; $i < count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["id"] == $id) {
            $alt = true;
            $_SESSION["carrinho"][$i]["quantidade"]++;
        }
    }
    if (!$alt) {
        $produto["id"] = $id;

        $produto["quantidade"]=1;

        $_SESSION["carrinho"][] = $produto;
    }

    
    
    redirecionar("carrinho");
}	

/** anon */
function deletar($id){
// Códugi da thasmires para excluir todas as quantidade do produto que está sendo passado por parametro nessa função 
    for ($i=0; $i < count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["id"] == $id) {
        //echo $_SESSION["carrinho"][$i]["quantidade"];
            $_SESSION["carrinho"][$i]["quantidade"] = $_SESSION["carrinho"][$i]["quantidade"] - 1;
            if ($_SESSION["carrinho"][$i]["quantidade"] == 0) {
               unset($_SESSION["carrinho"][$i]);
               $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);   
           }
           redirecionar("carrinho/index");
       } 
   }

}
   function adicionarQuantidade ($id) {
    for ($i=0; $i < count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["id"] == $id) {
        //echo $_SESSION["carrinho"][$i]["quantidade"];
            $_SESSION["carrinho"][$i]["quantidade"] = $_SESSION["carrinho"][$i]["quantidade"] + 1;
            
        } 
    }
    redirecionar("carrinho/index");
}

?>