<?php 

$server = "mysql01.c4utrkzk5zgf.us-west-1.rds.amazonaws.com";
$user = "grupo6";
$pass = "grupo6";
$bd = "Requisitoriado";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$userParam = $_GET['usuario'];
$sql = "SELECT * FROM administrador where usuario = $userParam";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$clientes = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 

	$id_codigo = $row['id_codigo'];
	$usuario = $row['usuario'];
	$password = $row['password'];
	$nombre = $row['nombre'];

    

    $clientes[] = array('id_codigo'=> $id_codigo, 'usuario'=> $usuario,'password'=> $password, 'nombre'=> $nombre);
    $arrayName = array("status"=>"200" , "data"=> $clientes);

}
    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

echo json_encode($arrayName);

?>