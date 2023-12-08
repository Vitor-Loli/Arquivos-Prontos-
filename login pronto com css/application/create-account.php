<?php

    require_once 'class/dataBase.php';

    $name = isset($_POST['txtNameCreate'])        ? $_POST['txtNameCreate']     : '';
    $user = isset($_POST['txtUserCreate'])        ? $_POST['txtUserCreate']     : '';
    $pass = isset($_POST['txtPasswordCreate'])    ? $_POST['txtPasswordCreate'] : '';

    if($name == '' || $user == '' || $pass == ''){
        print  "<script> 
            alert('Há dados em branco, por favor verifique!')
            window.location = '../create-account.html'
        </script>";
    }

    $dataBase = new dataBase;
    $sql = "INSERT INTO usuarios (nome, usuario, senha) VALUES (?,?,?)";
    $parameters = [$name, $user, $pass];
    $dataBase->executeCommand($sql, $parameters);

    print  "<script> 
            alert('Conta criada com sucesso! Bem vindo!')
            window.location = '../index.html'
        </script>";

       
?>