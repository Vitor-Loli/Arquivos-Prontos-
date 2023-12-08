<?php

    require_once 'class/dataBase.php';

    $id = isset($_GET['id'])? $_GET['id']: '';
    $pass = isset($_POST['txtPassword'])? $_POST['txtPassword']: '';
    $pass2 = isset($_POST['txtPassword2'])? $_POST['txtPassword2']: '';

    var_dump($id);
    var_dump($pass);
    var_dump($pass2);

    if($id == '' || $pass == '' || $pass2 == ''){
        print  "<script> 
            alert('Há dados em branco, por favor verifique!')
            window.location = '../create-password.php'
        </script>";
    }

    if($pass != $pass2){
        print  "<script> 
            alert('As senhas precisam ser iguais!')
            window.location = '../create-password.php'
        </script>";
        exit;
    } else{
        $dataBase = new dataBase;
        $sql = "UPDATE usuarios SET senha = ? WHERE id_usuario = ?";
        $parameters = [$pass, $id];
        $dataBase->executeCommand($sql, $parameters);

        print  "<script> 
            alert('Senha alterada com sucesso!')
            window.location = '../index.html'
        </script>";
    }

    
?>