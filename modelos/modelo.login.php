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
    $row = $result->fetch_array();
    if($row['activo'] == '0'){
        $status = -1;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['usuario'] = $row['usuario'];
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (50 * 60);
       session_write_close();
       $status = 1;
	}
}
echo $status;