<?php
require_once 'modelo/usuarioModelo.php';
define('AUTENTICADOR', true);

function authLogin($login, $passwd) {
   $user = pegardoBanco($login);
   
    if ($passwd == $user['senha'] && $user['tipouser'] == 1) {
        $_SESSION["auth"] = array("user" => "admin", "role" => "admin");
        //print(authGetUserRole());
        return true;
    }
    if ($passwd == $user['senha'] && $user['tipouser'] == 0) {
        $_SESSION["auth"] = array("user" => $user, "role" => $user['tipouser']);
        return true;
    }
    return false; 
}

function authIsLoggedIn() {
    return isset($_SESSION["auth"]);
}

function authLogout() {
    if (isset($_SESSION["auth"])) {
        $_SESSION["auth"] = null;
        unset($_SESSION["auth"]);
    }
}

function authGetUserRole() {
    if (authIsLoggedIn()) {
        return $_SESSION["auth"]["role"];
    }
}
