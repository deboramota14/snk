<?php
function conn() {
    $cnx = mysqli_connect("localhost", "id8001867_root", "esqueci", "id8001867_basaar");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}