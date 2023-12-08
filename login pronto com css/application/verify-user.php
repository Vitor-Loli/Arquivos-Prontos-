<?php

    require_once 'class/dataBase.php';

    $user = isset($_POST['txtUser'])? $_POST['txtUser']: '';

    if($user == ''){
        print  "<script> 
            alert('Há dados em branco, por favor verifique!')
            window.location = '../forgot-password.html'
        </script>";
    }

    $dataBase = new dataBase;
    $sql = "SELECT id_usuario FROM usuarios WHERE usuario = ?";
    $parameters = [$user];
    $dados = $dataBase->selectRegister($sql, $parameters);

    if(empty($dados)){
        print  "<script> 
            alert('Usuário não encontrado, Por Favor crie uma conta!')
            window.location = '../create-account.html'
        </script>";
    } else{
        header("LOCATION: ../create-password.php?id={$dados['id_usuario']}");
    }

?>