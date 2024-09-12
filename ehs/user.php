<?php
session_start();
if ((!isset($_SESSION['email'])==true) && (!isset($_SESSION['senha'])==true)) {

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location:login.html');
}
    $logado=$_SESSION['email'];
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Usuário</title>
    <link rel="stylesheet" href="style.css">
    <style>

::-webkit-scrollbar {
            width: 10px; /* Largura da barra vertical */
            height: 10px; /* Altura da barra horizontal */
        }

        /* Estiliza o fundo da barra de rolagem */
        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.6);/* Cor do fundo da barra */
        }

        /* Estiliza a parte de rolagem da barra */
        ::-webkit-scrollbar-thumb {
            background: blue; /* Cor da parte rolável */
        }

        /* Estiliza a parte de rolagem ao passar o mouse */
        ::-webkit-scrollbar-thumb:hover {
            background: #555; /* Cor ao passar o mouse */
        }

        .content {
            margin-bottom: 20px;
            color: black;
        }

        .progress-bar {
            background-color: #f0f0f0;
            border-radius: 5px;
            height: 20px;
            margin-top: 10px;
        }

        .progress {
            background-color: rgb(0, 0, 161);;
            height: 100%;
            border-radius: 5px;
            text-align: center;
            line-height: 20px;
            color: white;
        }
        .little-box{
            width: 40%;
            height: 60vh;
            margin: 1vw;
            background-image: linear-gradient(to right,rgb(228, 225, 225),rgb(212, 212, 212),rgb(240, 238, 238));
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            border-radius: 5px;
            padding: 1%;
        }
        .little-box>h1{
            font-size: 3vw;
            color: black;
        }
        .big-box{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .btn-sair{
            font-size: 2rem;
            background-color: rgb(146, 2, 31);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            margin: 5px;
        }
        .btn-sair:hover{
            text-decoration: underline;
            background-color: rgb(82, 0, 17);
        }

    </style>
</head>
<body>
    <header>
        <img id="logo" src="images/logo.png" alt="">
            <h2 id="title">EHSYNC</h2>
            <span class="button-container">
                <a href="conteudos.html"><button class="header-button"><img src="images/content.png" width="60px" height="60px">Conteúdos</button></a>
                <a href="professor.html"><button class="header-button"><img src="images/teacher.png" width="60px" height="60px" >Professor</button></a>
                <a href="quemsomos.html"><button class="header-button"><img src="images/quemsomos.png" width="70px" height="70px" >Quem Somos</button></a>
                    <span class="user">
                <a href="user.php"><button><img src="images/user.png" width="70%" height="80%" >
                    User</button></a>
                </span>
                <span>
            <a href="sair.php" class="btn-sair">Sair</a>
        </span>
            </span>
            </header>
    
    <div class="box">
        <?php
            echo "<h1>Bem vindo $logado!!</h1>"

        ?>
<br><br><br><br>
<div class="big-box">
        <div class="little-box">
            <h1>Status do Aluno</h1>
            <br><br><br><br>
        <div class="content">
            <h2>Logica de Programação</h2>
            <div class="progress-bar">
                <div class="progress" style="width: 50%;">50% concluído</div>
            </div>
        </div>
        
        <div class="content">
            <h2>Python</h2>
            <div class="progress-bar">
                <div class="progress" style="width: 30%;">30% concluído</div>
                </div>
            </div>
        </div>
        <div class="little-box">
            <h1>Assuntos Favoritados</h1>
            <br><br><br><br>
        <div class="content">
            <h2>&#11088;Curso em Video-Python</h2>
            <h2>&#11088;Dev Aprender-Lógica de Programação</h2>
            
        </div>
        </div>
        
    </div>
    </div>
</div>
    
    
    <script src="script.js"></script>
</body>
</html>