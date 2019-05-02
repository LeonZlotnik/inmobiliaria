<?php include_once('header.php'); ?>

<?php

if(isset($_POST["insert"])){

    /*$server = "107.180.4.42";
    $user = "leon9115";
    $pword = "Zlotnl910";
    $DBname = "0123clientes";*/

    $server = "localhost";
    $user = "root";
    $pword = "root";
    $DBname = "inmobiliaria";

    $zusername = $_POST['userlogin'];
    $zpassword = $_POST['pwlogin'];

    $connect = mysqli_connect($server,$user,$pword,$DBname) or die("error en conexion ".mysqli_connect_error());
		mysqli_set_charset($connect, "utf8");
	
	$query = "INSERT INTO logins (userlogin,pwlogin) VALUES ('$zusername','$zpassword')";
	
	$result = mysqli_query($connect,$query) or die ("error en query $query".mysqli_error());//
	
	if($result){
		echo '<script type="text/javascript">
			alert("Usuario correcto");
		</script>';
	}
	else{
		echo '<script type="text/javascript">
			alert("Ups! intente de nuevo.");
		</script>';
	}
	
	mysqli_free_result($result);
	mysqli_close($connect);
	
	header("Location: database.php?z=100%");
} 

?>

<html>
<body>
<br>
<div class="container">
    <form action="db100zlotim58.php" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1" class="h4">Username</label>
        <input type="text" name="userlogin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduzca nombre de usuario" require>
        <small id="emailHelp" class="form-text text-muted">Esta sección es para uso exclusívo del personal de Zlotinmobiliaria</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" class="h4">Password</label>
        <input type="password" name="pwlogin" class="form-control" id="exampleInputPassword1" placeholder="Introduzca contraseña" require>
    </div>
    
    <input type="submit" name="insert" value="Entrar" class="btn btn-primary">
    </form>
</div>
<br>


</body>

</html>

<?php include_once('footer.php'); ?>