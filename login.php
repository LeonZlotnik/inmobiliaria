<?php include_once('header.php'); ?>

<?php

$zuname = $_POST['uname'];
$zpass = $_POST['pass'];
$error = "";
$success = "";

if(isset($_POST['insert'])){
    if($zuname == "admin"){
        if($zpass == "0123456"){
            $error = "";
            $success = "Bienvenido!!";
            //redirigir a
            header("Location: db100zlotim58.php");
        }
        else{
            $error = "Ups!! Password Invalido";
            $success = "";
        }
 
    }
        else{
            $error = "Ups!! Usuario Invalido";
            $success = "";
    }
};


?>

<html>
<body>
<br>
<div class="container">
<p class="error"><?php $error ?></p><p class="success"><?php $success ?></p>
    <form method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1" class="h4">Username</label>
        <input type="text" name="uname" class="form-control" id="uname" aria-describedby="emailHelp" placeholder="Introduzca nombre de usuario" require>
        <small id="emailHelp" class="form-text text-muted">Esta sección es para uso exclusívo del personal de Zlotinmobiliaria</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" class="h4">Password</label>
        <input type="password" name="pass" class="form-control" id="pass" placeholder="Introduzca contraseña" require>
    </div>
    
    <input type="submit" name="insert" value="Entrar" class="btn btn-primary">
    </form>
</div>
<br>


</body>

</html>

<?php include_once('footer.php'); ?>