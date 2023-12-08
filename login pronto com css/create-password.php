<?php

$id = isset($_GET['id'])? $_GET['id']: '';

if($id == ''){
    print  "<script> 
            alert('Há dados em branco, por favor verifique!')
            window.location = '../forgot-password.html'
        </script>";
}

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new Password</title>

    <link rel="stylesheet" href="assets/css/create-password.css">
</head>
<body>
    <div class="forgot_div">
    <?php
        print "<form action='application/forgot-password.php?id=$id ' method='POST' class='form_forgot'>

        <h1 class='titulo_forgot'>Alterar Senha</h1>


        <div class='input_group'>
            <label for='txtPassword' class='label_forgot'>
                Crie uma senha:
            </label> <br>
            <div class='inputs'>
                <input type='password' name='txtPassword' id='txtPassword' placeholder='Insira sua nova senha aqui!' class='input_forgot_pass'>
                <input type='checkbox' name='ckView' id='ckView' onchange='viewPassword()'>
            </div>
            
        </div>

        <div class='input_group'>
            <label for='txtPassword2' class='label_forgot'>
                Re-digite a senha:
            </label> <br>
            <div class='inputs'>
                <input type='password' name='txtPassword2' id='txtPassword2' placeholder='Re-escreva sua senha aqui!' class='input_forgot_pass'>
                <input type='checkbox' name='ckView' id='ckView2' onchange='viewPassword2()'>
            </div>
            
        </div>

        <div class='botao_div'>
            <input type='submit' value='Alterar' class='botao_enviar'>
        </div>


    </form>";
    
    ?>
        
    </div>
</body>

<script>
    function viewPassword(){

        $check = document.getElementById('ckView');
        $input = document.getElementById('txtPassword')

        if($check.checked){
            $input.type ='text';
        } else{
            $input.type = 'password';
        }
    }

    function viewPassword2(){

        $check = document.getElementById('ckView2');
        $input = document.getElementById('txtPassword2')

        if($check.checked){
            $input.type ='text';
        } else{
            $input.type = 'password';
        }
    }
</script>
</html>