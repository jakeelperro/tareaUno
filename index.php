<?php 
	include_once 'includes/connection.php'; //INCLUYO ARCHIVO DE CONEXIÓN
	$query = "SELECT * FROM materias ORDER BY idMateria ASC";
	$resultQuery = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<!-- Select -->
		<form action="estudiantesCurso.php" method="post">
		  Materias:<br/> 
		   <select name="materias">
		   <?php
			   	while ($row = mysqli_fetch_array($resultQuery)) {  
				/*<option value="<?php echo $row['id_estudiante'] ?>"> <?php echo $row['nombre'] ?> </option>*/
					echo "<option value='".$row['idMateria']."'>".$row['nombreMateria'] ."</option>";
				}
			?>
		   </select>
		   <p><input type="submit" value="Calcular" /></p>
		</form>
	</body>
</html>


