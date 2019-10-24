<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "Requisitor";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$dni = $_POST['dni'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$fechaNaci = $_POST['fechaNaci'];
$descripcion = $_POST['descripcion'];
$lugar = $_POST['lugar'];
$delito = $_POST['delito'];
$imagenes = $_POST['imagenes'];

$sql = "INSERT INTO persona (p_dni, p_nombres, p_apellidos ,p_edad, p_fechaNaci, p_lugar, p_descripcion , p_delito ,p_imagenes)
					VALUES ('$dni', '$nombres', '$apellidos', '$edad', '".$fechaNaci."','$descripcion','$lugar','$delito', '$imagenes' )";

if (mysqli_query($conn, $sql)) {

  header('Content-type: application/json');

  echo json_encode(['status' => 200, 'mensage' => "Se inserto Correctamente al Requisitor"]);

    
} else {

  echo json_encode(['status' => 100, 'mensage' => "No se pudo insertar"]);
}

mysqli_close($conn);



?>
