<?php 

$url = strtoupper($_GET['url']);


if($url=="CADASTROUSUARIO"){
    require_once "view/cadastro.php";
}

else if($url=="CADASTRA") {
    require_once "Controller/UsuarioController.php";
    $controle = new UsuarioController();
    $controle->processa("C");
}

?>