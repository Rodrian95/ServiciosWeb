<?php
include ('conexion.php');
$status = '999';
$user=$_POST['user'];
$pass=$_POST['pass'];


$query1 = "SELECT * FROM usuario WHERE usuario = '$user' AND contrasena = '$pass'";
$result = $conexion->query($query1);
$count = mysqli_num_rows($result);

if($count==0){
	echo $status = 0;
}
else{
    $llave = $user.rand();
    $date = getdate();
    $hora = $date['hours'].':'.$date['minutes'].':'.$date['seconds'];
    $query2 = "INSERT INTO acceso VALUES ('$llave','$hora')";
    $result2 = $conexion->query($query2);
    $row = $result->fetch_array();
    $query3 = "SELECT * FROM acceso WHERE llave = '$llave'";
    $result3 = $conexion->query($query3);
    $row1 = $result3->fetch_array();
    $status = -1;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['id'] = $row['id'];
    $_SESSION['usuario'] = $row['usuario'];
    $_SESSION['start'] = time();
    $_SESSION['llave'] = $row1['llave'];
    $_SESSION['expire'] = $_SESSION['start'] + (50 * 60);
    session_write_close();
    $status = 1;
}
echo $status;