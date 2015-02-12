<?php 
	include_once 'includes/connection.php'; //INCLUYO ARCHIVO DE CONEXIÓN
		$materiaEscogida=$_POST['materias'];
		//======== Unir consultas de distintas tablas ========= // 
		//inner Join es igual a Join";
		$selectJoin = "SELECT estudiantes.idEstudiante, estudiantes.nombreEstudiante, materias.nombreMateria FROM estudiantes 
			INNER JOIN usuarios_curso ON estudiantes.idEstudiante = usuarios_curso.idUsuario
			INNER JOIN materias            ON materias.idMateria        = usuarios_curso.idCurso WHERE materias.idMateria=$materiaEscogida";
		$resultQueryJoin = mysqli_query($con,$selectJoin);
		while ($row = mysqli_fetch_array($resultQueryJoin)) {
			echo "  
				<form action='notas.php' method='post'>
					<select name='usuario'>
						<option value='".$row['idEstudiante']."'>".$row['idEstudiante'] ."</option>
					</select>"
					
					." ".
					$row["nombre"]
					." ".
					
					"<select name='usuario'>
						<option value='".$materiaEscogida."'>".$row['nombreEstudiante'] ."</option>
					</select>"
					
					." ".
					
					"<input type='submit' value='Ver notas'>
				</form>
			"
			;
 		}
			
 ?>