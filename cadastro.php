<?php
require_once "config.php";

if(isset($_GET['codigo']) && !empty($_GET['codigo'])){
    $codigo = addslashes($_GET['codigo']);
    $sql = "SELECT * FROM usuarios WHERE codigo = '$codigo'";
    $sql = $pdo->query($sql);

    $num_convite = "SELECT * FROM usuarios WHERE convite='$codigo'";
    $num_convite = $pdo->query($num_convite);

    if($sql->rowCount() == 0){
        header("Location: login.php");
        exit; 
    }

    if($num_convite->rowCount() > 3){
        setcookie("convite", "Convite Expirado!", time()+3);
        header("Location: login.php");
        exit; 
    }

}else{
    header("Location: login.php");
    exit;
}

if(isset($_POST['email']) && !empty($_POST['email'])){
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
    $codigo = md5(time().rand(0,999).$email);
    $convite = addslashes($_GET['codigo']);

    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $sql = $pdo->query($sql);
    $sql = $sql->rowCount(); 

    if($sql == 0){
        $sql = "INSERT INTO usuarios (email, senha, codigo, convite) VALUES (:email, :senha, :codigo, :convite)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->bindValue(":codigo", $codigo);
        $sql->bindValue(":convite", $convite);
        $sql->execute();
        header("Location: login.php");
    }else{
        echo "<p class='alert alert-warning'>Esse email já foi cadastrado!</p>";
    }
}



?>


<html>
<head>
<meta charset="UTF-8"/>
<title>PHP</title>
<link rel="shortcut icon" type="image/png" href="assets/img/favicon/favicon.png"/>
<?php require_once "assets/css/style.php"; ?>
</head>
<body class="fundo">


<form method="POST" class="form">

    <div class="input">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>

    <div class="input">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" class="form-control">
    </div>

    <div class="input">
        <br>
        <input type="submit" value="Cadastrar" class="btn btn-success">
    </div>

</form>

    
</body>
</html>