<?php
include ("index.php");
include ("libreria/config.php");
//include ("libreria/conexion.php");

$enlace=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

$autores=$_POST['rec_autores'];
$titulo=$_POST['rec_titulo'];
$ciclo=$_POST['rec_ciclo'];
$curso=$_POST['rec_curso'];
$materia=$_POST['rec_materia'];
$descripcion=$_POST['rec_descripcion'];

if(isset($_POST['btn1'])){

error_reporting(0);

 $sql= ("INSERT INTO proyectos (autores,titulo,ciclo,curso,materia,descripcion) values ('$autores','$titulo','$ciclo','$curso','$materia','$descripcion')");

 mysqli_query($enlace,$sql);

 mysqli_close($enlace);


    
echo "<script>alert('Datos enviados')</script>";

}
?>
