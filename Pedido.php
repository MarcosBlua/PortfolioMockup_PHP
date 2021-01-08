<?php
    $tittle = 'Pedido';
    $currentPage = 'Pedido';

    include 'Header.php';

    include 'Navbar.php';
?>

<style>
.error {color: #FF0000;}
</style>

<?php
    $nombre = $email = $fecha_lim = $image_res = $descripcion = "";
    $nombreErr = $emailErr = $fecha_limErr = $image_resErr = $descripcionErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nombre"])) {
          $nombreErr = "Nombre es obligatorio";
        } else {
          $name = test_input($_POST["nombre"]);
          if (!preg_match("/^[a-zA-Z-' ]*$/",$nombre)) {
            $nombreErr = "Solo se permiten letras y espacios";
          }
        }
        
        if (empty($_POST["email"])) {
          $emailErr = "Email es obligatorio";
        } else {
          $email = test_input($_POST["email"]);
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Formato de Email invalido";
          }
        }

        if (date('Y/m/d', strtotime($_POST["fecha_lim"])) >= date('Y/m/d', time())) {
            $fecha_lim = $_POST["fecha_lim"];
        } else {
            $fecha_limErr = "La fecha ingresada no es valida";
        }
          
        if (empty($_POST["image_res"])) {
          $image_resErr = "La resolución de imagen es obligatoria";
        } else {
          $website = test_input($_POST["image_res"]);
          if (!preg_match("/[0-9][x][0-9]/i",$image_res)) {
            $image_resErr = "El formato de resolución es invalido";
          }
        }
      
        if (empty($_POST["descripcion"]) or $_POST["descripcion"] == " ") {
          $descripcionErr = "Descripcion es obligatorio";
        } else {
          $descripcion = test_input($_POST["descripcion"]);
        }
    }
      
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<div class="container" style="text-align:center">
	<br>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="form-group"> 
			<label for="nombre"> Nombre </label> 
            <input type="text" class="form-control" name="nombre" placeholder="Elmo Thor" />
            <span class="error">* <?php echo $nombreErr;?></span>
		</div> 
		<div class="form-group"> 
			<label for="email"> Correo electronico </label> 
            <input type="email" class="form-control" name="email" placeholder="Elmothor@juanmeil.com" />
            <span class="error">* <?php echo $emailErr;?></span> 
		</div>
		<div class="form-group"> 
			<label for="fecha_lim"> Fecha limite de entrega </label> 
            <input type="date" class="form-control" name="fecha_lim"/>
            <span class="error">* <?php echo $fecha_limErr;?></span>
		</div>
		<div class="form-group"> 
			<label for="resolucion"> Resolución de la imagen </label> 
            <input type="text" class="form-control" name="image_res" placeholder="1920x1080" />
            <span class="error">* <?php echo $image_resErr;?></span> 
		</div>
		<div class="form-group"> 
			<label for="descripcion"> Descripción del pedido </label> 
            <textarea class="form-control" name="descripcion" style="height:200px;width:100%;"> </textarea>
            <span class="error">* <?php echo $descripcionErr;?></span>
		</div> 
		<div class="form-group">
			<input type="submit" name="submit" value="Hacer pedido"/>
		</div>
	</form>
</div>

<?php
  echo $nombre;
?>

<?php
    include 'Footer.php';
?>