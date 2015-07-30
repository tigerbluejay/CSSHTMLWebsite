<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
include ("connect.php");

$name=$_POST['name'];
$email=$_POST['email'];
$comments=$_POST['comments'];

echo $name;echo "<br/>";
echo $email;echo "<br/>";
echo $comments;echo "<br/>";

/* check connection */

/* el objeto mysqli (perteneciente a la clase mysqli) realiza la funcion connect_errno, entonces imprimir "Connect..." cuando el objeto realiza la funcion connect_errno, luego salir*/

if($mysqli->connect_errno) {
	printf ("Connect failed: %s\n", $mysqli->connect_errno);
	exit();
}
$sql="Insert into hotdogwebtable values('$name', '$email', '$comments')";
$mysqli -> query($sql);
$mysqli -> close();

/*recordar que para que funcione hay que cargar los datos en index, desde localhost en el explorador*/

?>



</body>
</html>