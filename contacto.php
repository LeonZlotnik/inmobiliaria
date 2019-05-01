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
	
		$zname = $_POST['nombre'];
		$zmail = $_POST['correo'];
		$zcity = $_POST['ciudad'];
		$zgender = $_POST['genero'];	
		$zinter = $_POST['inter'];
		$ztel = $_POST['tel'];
		$zcoment = $_POST['comentario'];
	
	/*$temp = explode("/",$zdate);
	$fecha = "$temp[2]-$temp[1]-$temp[0]";*/
		
	$connect = mysqli_connect($server,$user,$pword,$DBname) or die("error en conexion ".mysqli_connect_error());
		mysqli_set_charset($connect, "utf8");
	
	$query = "INSERT INTO registros (nombre, correo, ciudad, genero, inter, tel, comentario) VALUES ('$zname','$zmail', '$ztel','$zgender','$zinter','$zdate','$zcoment')";
	
	$result = mysqli_query($connect,$query) or die ("error en query $query".mysqli_error());//
	
	if($result){
		echo '<script type="text/javascript">
			alert("Tu información ha sido ingresada");
		</script>';
	}
	else{
		echo '<script type="text/javascript">
			alert("Ha ocuurido un error en la conexión, intente de nuevo!");
		</script>';
	}
	
	mysqli_free_result($result);
	mysqli_close($connect);
	
	header("Location: index.php?z=1");
} 
?>

<?php include_once('header.php'); ?>

<script src="js/moment.js"></script>
<script src="bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js"></script>
<link href="bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.css">

<main>

     <h2 class="h2">Contacto</h2>
<br>
     <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Registrate para más Info
</button>
<br>
<br>
<h6 class="h6">TEL: +52 1 55 4359 1943</h6>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Registo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="" method="POST">

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputName">Nombre
            </label>
            <input type="text" name="nombre" class="form-control" id="inputName" placeholder="Nombre" required>
          </div>

          <div class="form-group col-md-6">
            <label for="inputPassword4">Interado</label>
            <select id="inputState" name="inter" class="form-control" >
              <option value="null">seleccione</option>
              <option value="soltero">Soltero</option>
              <option value="pareja">Pareja</option>
              <option value="hijos">Con Hijos</option>
              <option value="mascota">Con Mascota</option>
              <option value="inversion">Como Inversión</option>
              <option value="otro">Otro</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail4">Email</label>
          <input type="email" name="correo" class="form-control" id="inputAddress" placeholder="ejemplo@email.com" required>
        </div>

        <div class="form-row">

        <div class="form-group col-md-6">
            <label for="inputPassword4">Ciudad</label>
                <select id="inputState" name="ciudad" class="form-control" >
                  <option value="null">seleccione</option>
                  <option value="Aguascalientes">Aguascalientes</option>
                  <option value="Cancun">Cancún</option>
                  <option value="CDMX">Cd.México</option>
                  <option value="Chihuahua">Chihuahua</option>
                  <option value="Cuernavaca">Cuernavaca</option>
                  <option value="Guadalajara">Guadalajara</option>
                  <option value="Hermosillo">Hermosillo</option>
                  <option value="Leon">León</option>
                  <option value="Merida">Mérida</option>
                  <option value="Monterrey">Monterrey</option>
                  <option value="Morelia">Morelia</option>
                  <option value="Puebla">Puebla</option>
                  <option value="Queretaro">Querétaro</option>
                  <option value="Saltillo">Saltillo</option>
                  <option value="San Luis Potosi">San Luis Potosí</option>
                  <option value="Veracruz">Veracruz</option>
                  <option value="Toluca">Toluca</option>
                  <option value="Otra">Otra</option>
                </select>
              </div>

      
        <div class="form-group col-md-6">
            <label for="inputName">Telefono</label>
            <input type="tel" name="tel" class="form-control" id="inputNumber" placeholder="#00-00-00" required>
          </div>


        </div>

        <div class="form-group">
          <label for="inputAddress2">Comentarios</label>
          <textarea type="text" name="comentario" class="form-control" id="inputAddress2" placeholder="Escribe tus preguntas aquí"></textarea>
        </div>
        
        <div class="form-group">
          <div class="form-check">
            <label class="form-check-label" for="gridCheck">
              Genero
            </label>
            <div> Hombre <input type="radio" name="genero" value="Hombre"> Mujer <input type="radio" name="genero" value="Mujer"></div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="submit" name="insert" value="Enviar" class="btn btn-primary">
      </div>
    </div>
  </div>
</div>
</form>

<section class="ubicacion columna col5">
<br>
<div class="embed-responsive embed-responsive-21by9">
  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.0082848869497!2d-99.14114448536503!3d19.325446786945236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce01ce6afe943d%3A0xead7a966258724eb!2sCalz.+de+Tlalpan+2601%2C+Emiliano+Zapata%2C+04610+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses!2smx!4v1546736256555" width="1000" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</section>

</main>

<?php include_once('footer.php');?>

</body>
<!-- InstanceEnd --></html>
