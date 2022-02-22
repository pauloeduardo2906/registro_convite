<?php
session_start();
require_once "config.php";




?>

<html>
<head>
<meta charset="UTF-8"/>
<title>PHP</title>
<link rel="shortcut icon" type="image/png" href="assets/img/favicon/favicon.png"/>
<?php require_once "assets/css/style.php"; ?>
</head>

<body>


<p class="alert alert-primary">
    <?php

        if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
            $sql = "SELECT * FROM usuarios WHERE id=".$_SESSION['id'];
            $sql = $pdo->query($sql);
            $sql = $sql->fetch();
            echo "<strong>Área Interna do Sistema</strong>";
            echo "<br><br>";
            echo "Usuário: ".$sql['email'];
            echo "<br><br>";
            echo "<a href='login.php' class='btn btn-danger'>Sair</a>";
        }else{
            header("Location: login.php");
        }

        
    
    ?>
</p>

<br>
<p class="alert alert-secondary">
    <?php

        if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
            $codigo = $sql['codigo'];
            $num_convite = "SELECT * FROM usuarios WHERE convite='$codigo'";
            $num_convite = $pdo->query($num_convite);
            $num_convite = $num_convite->rowCount();
            echo "<strong>Link:</strong>";
            echo "<br><br>";

    ?>      
            <span class="input">
                <input type="text" class="form-control" value="<?php echo "http://localhost/b7web-sistemas/php-intermediario/7registro_convite/cadastro.php?codigo=".$codigo ?>">
            </span>

            <br>

            <strong>Pessoas que usaram seu convite: <?php echo $num_convite; ?></strong>
                
        
            
            
            
    <?php
       
        }else{
            header("Location: login.php");
        }

        
    
    ?>
</p>


</body>
</html>




