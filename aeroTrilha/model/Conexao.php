<?php


class Conexao {

    public static function conectar() {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=rotaairlines", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexão efetuada com sucesso!";
            return $conn;
        } catch(PDOException $e){
            echo "Conexão falhou! " . $e->getMessage();
            return null;
        }

    }

}


?>