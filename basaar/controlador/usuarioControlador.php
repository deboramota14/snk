    <?php

require_once "modelo/usuarioModelo.php";

/** admin */
function index() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}

/** anon */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarUsuario($nome, $cpf, $email, $telefone, $sexo, $senha, $tipouser, $endereco, $cep, $cidade, $numero));
        redirecionar("usuario/index");
    } else {
        exibir("usuario/formulario");
    }
}
/** admin */
function deletar($id) {
    alert(deletarUsuario($id));
    redirecionar("usuario/index");
}

/** user */
function editar($id) {
    if (ehPost()) {
        $nome=$_POST["nome"];
        $cpf=$_POST["cpf"];
        $email=$_POST["email"];
        $telefone=$_POST["telefone"];
        $sexo=$_POST["sexo"];
        $senha=$_POST["senha"];
        $endereco=$_POST["endereco"];
        $cep=$_POST["cep"];
        $cidade=$_POST["cidade"];
        $numero=$_POST["numero"];
        alert(editarUsuario($id,$nome, $cpf, $email, $telefone, $sexo, $senha, $endereco, $cep, $cidade, $numero));
        redirecionar("usuario/index");
    } else {
        $dados['usuario'] = pegarUsuarioPorId($id);
        $dados['acao'] = "./usuario/editar/$id";
        exibir("usuario/formulario", $dados);
    }
}

/** admin */
function visualizar($id) {
    $dados['usuario'] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}