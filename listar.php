
<?php 

$server = "mysql01.c4utrkzk5zgf.us-west-1.rds.amazonaws.com";
$user = "grupo6";
$pass = "grupo6$";
$bd = "Requisitoriado";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$sql = "SELECT * FROM persona where p_dni = '73127325'";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$clientes = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 

	$dni = $row['p_dni'];
	$nombres = $row['p_nombres'];
	$apellidos = $row['p_apellidos'];
	$edad = $row['p_edad'];
	$fechaNaci = $row['p_fechaNaci'];
	$descripcion = $row['p_descripcion'];
	$lugar = $row['p_lugar'];
	$delito = $row['p_delito'];
	$imagenes = $row['p_imagenes'];
    

    $clientes[] = array('dni'=> $dni, 'nombres'=> $nombres, 'apellidos'=> $apellidos, 'edad'=> $edad,
                        'fechaNaci'=> $fechaNaci, 'descripcion'=> $descripcion, 'lugar'=> $lugar, 'delito'=> $delito,'imagenes'=> $imagenes );
    $arrayName = array("status"=>"200" , "data"=> $clientes);

}
    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

echo json_encode($arrayName);

?>



<?php 

$server = "mysql01.c4utrkzk5zgf.us-west-1.rds.amazonaws.com";
$user = "admin";
$pass = "Adm1n2019$";
$bd = "Requisitoriado";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$sql = "SELECT * FROM persona";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$clientes = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 

	$dni = $row['p_dni'];
	$nombres = $row['p_nombres'];
	$apellidos = $row['p_apellidos'];
	$edad = $row['p_edad'];
	$fechaNaci = $row['p_fechaNaci'];
	$descripcion = $row['p_descripcion'];
	$lugar = $row['p_lugar'];
	$delito = $row['p_delito'];
	$imagenes = $row['p_imagenes'];
    

    $clientes[] = array('dni'=> $dni, 'nombres'=> $nombres, 'apellidos'=> $apellidos, 'edad'=> $edad,
                        'fechaNaci'=> $fechaNaci, 'descripcion'=> $descripcion, 'lugar'=> $lugar, 'delito'=> $delito,'imagenes'=> $imagenes );
    $arrayName = array("status"=>"200" , "data"=> $clientes);

}
    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

echo json_encode($arrayName);

?>


