<?php
    if(isset($_POST['submit'])){
        include_once('config.php');

        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $data_nascimento=$_POST['data_nascimento'];
        $cargo=$_POST['cargo'];
        $senha=$_POST['pswd'];

        $result=mysqli_query($conexao,"INSERT INTO user(Nome,Email,Data_Nascimento,Cargo,Senha) VALUES('$nome','$email','$data_nascimento','$cargo','$senha')");
    }


?>