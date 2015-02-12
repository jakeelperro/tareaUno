<?php 
	include_once 'includes/connection.php'; //INCLUYO ARCHIVO DE CONEXIÓN
	
	//======== CONSULTAR ========= //
	$id_materia = $_POST['materias'];
	$id_estudiante= $_POST ['usuario'];
	$selectJoin = "SELECT * FROM estudiantes 
			INNER JOIN tipo_nota ON estudiantes.idEstudiante = tipo_nota.idEstudiante
			INNER JOIN nota             ON notas.idNotas             = tipo_nota.idTipo
			INNER JOIN materias          ON materias.idMateria        = notas.idMateria WHERE materias.idMateria=$id_materia AND estudiantes.idEstudiante=$id_estudiante";
	$resultQuery = mysqli_query($con,$selectJoin);
?>


<table border="1">
	 <tr>
	   <td>Nombre Nota</td>
	   <td>Nota</td> 
	   <td>Porcentaje nota</td>
	   <td>Total</td>
	 </tr>

	<?php
		$varAumento=0;
		$nombre;
		while ($row = mysqli_fetch_array($resultQuery)) {
			$nombre=$row['nombre'];
			$nombre_materia=$row['tipo_nota'];
				echo "
				  <tr>
				    <td>".$row['tipo_nota']."</td>
				    <td>".$row['float']."</td> 
				    <td>".$row['porcentaje']."</td>
				    <td>".$row['float'] * $row['porcentaje']."</td>
				  </tr>
				";
			$varAumento++;
			$arrayNota[$varAumento]=$row['float'] * $row['porcentaje'];
		}
	?>
</table>

<?php 
	echo $nombre_materia.":";
	echo$arrayNota[1]+$arrayNota[2];
	echo "</br>";
	echo  $nombre;
?>