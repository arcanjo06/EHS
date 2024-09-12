<?php
    session_start();
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['pswd'])) {
        
        include_once('config.php');
        $email=$_POST['email'];
        $senha=$_POST['pswd'];
        $sql="SELECT * FROM user WHERE Email='$email' and Senha='$senha'";


        $result=$conexao->query($sql);

        if (mysqli_num_rows($result)<1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location:login.html');
          
        }else {
            $_SESSION['email']=$email;
            $_SESSION['senha']=$senha;
            header('Location:user.php');
        }
    }else {
        header('Location:login.html');
    }


?>