<?php 

		$cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $fecha = $_POST['fecha'];

        require("conexion.php");
        $conn = conexionBD();


		$sql = "INSERT INTO agendarcita (cedula, nombre, apellido, telefono, fecha) VALUES (:cedula, :nombre, :apellido, :telefono, :fecha)";
		$q = $conn->prepare($sql);
		$q->execute(array(':cedula'=>$cedula, ':nombre'=>$nombre, ':apellido'=>$apellido, ':telefono'=>$telefono, ':fecha'=>$fecha));


 ?>