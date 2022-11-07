<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require "conexao.php";

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $query = "SELECT * FROM usuarios WHERE usuario='$username' AND senha='$pass'";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        if(count($result)){
            $nome = $result[0]['nome'];
            $usuario = $result[0]['usuario'];
            $senha = $result[0]['senha'];
            $tipo = $result[0]['tipo'];

            $cookie = md5($usuario);
            $_SESSION['session'] = $cookie;
            setcookie("portalSession", $cookie); 
            header("Location: index.php");
        }
        else{
            $query = "SELECT COUNT(*) FROM usuarios WHERE usuario=".$username;
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $erro = "0";
            if($result[0][0] == "0"){
                header('Location: index.php?page=login_professor.php&erro=1');
            }
            else{
                header('Location: index.php?page=login_professor.php&erro=2');
            }
        }
    }

 
?>

