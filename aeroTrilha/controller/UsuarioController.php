<?php
require_once "model/Usuario.php";
class UsuarioController{
    public function processa($acao){
        
        if($acao == "C") {
            $novoUsuario = new Usuario();
            $novoUsuario->setCpf($_POST[('cpf')]);
            $novoUsuario->setSenha(md5($_POST['senha']));
            $novoUsuario->setDtaNasc($_POST['dataNasc']);
            $novoUsuario->setEmail($_POST['email']);
            $novoUsuario->setNomeUsuario($_POST['nomeUsuario']);
            $novoUsuario->setNumTel($_POST['numeroCelular']);
            $novoUsuario->setPaisNasc($_POST['paisUsuario']);
            $novoUsuario->setSexo($_POST['sexo']);
            $novoUsuario->cadastraUsuario();

        }
    }

}

?>