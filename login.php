<?php

session_start();
require_once "config.php";

if(isset($_COOKIE["convite"]) && !empty($_COOKIE["convite"])){
    echo "<p class='alert alert-danger'>".$_COOKIE["convite"]."</p>";
}

if(isset($_POST['email']) && !empty($_POST['email'])){
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql = $pdo->query($sql);

    if($sql->rowCount() > 0){
        $sql = $sql->fetch();
        $_SESSION['id'] = $sql['id'];
        header("Location: index.php");
    }else{
        echo "<p class='alert alert-warning'>Usuário Não Encontrado!</p>";
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
        <input type="submit" value="Entrar" class="btn btn-success">
        <br>
        <a href="cadastro.php" class="btn btn-primary">Cadastrar</a>
    </div>

</form>

    
</body>
</html>