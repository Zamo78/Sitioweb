 <?php
//include_once("libreria/motor.php");
//include_once("libreria/proyectos_c.php"); #aca va archivo de comandos sql de proyecto


?>

<y style="position:absolute;top:-85px;left:-30px;" >
<br><br>
<div class="container">
  
<div class="row" >
 
  <div class="col-sm-6" >
  <div id="capa_d">
   
<!--  <form  role="form" method="post" action="alta_proy.php">
   <legend>Registro de proyectos </legend>
   <div class="row">
   
	 <div class="form-group">
		 <div class="col-xs-12">
		   <label>Profesor/es</label>
		   <input type="text"  size="20" name="autores" class="form-control" id="txtAutores" value="Guane"
				   placeholder="Nombre de los profesores" />
		 </div>
		
		 <div class="col-xs-12">
		  <label>Titulo</label>
		  <input type="text"  size="20" name="txtTitulo" class="form-control" id="txtTitulo"
				   placeholder="Nombre del proyecto" />
		 </div>		   
	 </div> 
   
	 
	 
	  <div class="form-group">
	  <div class="col-xs-4">
	   <div class="ui-widget">
		<label for="tit_origen">Ciclo</label>
		<select class="form-control" name="txtCiclo">
			<option> Básico </option>
			<option> Superior </option>
		</select>
		


		</div>	   
	   </div>
	   	<div class="col-xs-2">
		</div>	
	    <div class="col-xs-6">
		<label>Curso</label>
		<input type="text"  size="10" name="txtCurso" class="form-control" id="txtCurso"
			   placeholder="Curso que realizó proyecto" />
	    </div>	   
	   </div> 
	  
 <div class="form-group">
	  
	  <div class="col-xs-6">
		<label>Materia</label>
		<input type="text"  size="20" name="txtMateria" class="form-control" id="txtMateria"
			   placeholder="Materia" />
	  </div>	   
	  </div>
	  
	  
	  <div class="form-group">
	  <div class="col-xs-8">
		<label>Descripción</label>
		<input type="text"  size="50" name="txtDesc" class="form-control" id="txtDesc"
			   placeholder="Detalles del proyecto" />
		</div>	   
	   
    
	 </div>  

	 
	 
 
	   
  </div>





		  <div class="form-group">
			<label>Subir archivo</label>
				<input type="file"  id="fileToUpload" onchange="upload_pdf();PonerNombreArchivo(); /">
			
		  </div>
		  <div class="upload-msg"></div><Para mostrar la respuesta del archivo llamado via ajax
		 

		
 </div>
  </div>



 	<div class="form-group">
 		<div class="col-xs-12">
 			<button class="btn btn-success" name="btn1"> Agregar proyecto</button>
 		</div>	
 </div>
</form>-->
<form method="post" action="alta_proydb.php">
    <center><legend style="font-size: 25px; font-weight: bold;"> Registro de Proyectos </legend></center>
    	<style>
    	table{
    		border-collapse: separate;
    		border-spacing: 10px 15px;
    	}
    	td {
    		font-family: Verdana;
    		font-size:15px;

    	}
    	</style>
        <table cellpadding="0" cellspacing="" border="0">
            <tr>
                <td>Autores:</td>
                <td><input type="text" size="40" name="rec_autores" id="rec_autores" class="form-control" /></td>
            </tr>

            <tr>
                <td>Titulo:</td>
                <td><input type="text" name="rec_titulo" id="rec_titulo" class="form-control" /></td>
            </tr>
            <tr>
                <td>Ciclo:</td>
                <td><select name="rec_ciclo" id="rec_ciclo" class="form-control" ><option>Basico</option><option>Superior</option></td>
            </tr>
            <tr>
                <td>Curso:</td>
                <td><input type="text" name="rec_curso" id="rec_curso" class="form-control" /></td>
            </tr>
            <tr>
                <td>Materia:</td>
                <td><input type="text" name="rec_materia" id="rec_materia" class="form-control" /></td>
            </tr>
            <tr>
                <td>Descripcion:</td>
                <td><input type="text" name="rec_descripcion" id="rec_descripcion" class="form-control"/></td>
            </tr>
            <!-- <tr>
                <td>Subir Archivo:</td>
                <td><input type="file"  id="fileToUpload" onchange="upload_pdf();PonerNombreArchivo(); /"></td>
            </tr>-->
            <tr>
                <td colspan="2" align="right"><button class="btn btn-success" id="btn" name="btn1">Registrar</button></td>
            </tr>
        </table>
    </form>


</y>
</div>
</div>
</div>
</div>

<?php


if(isset($_POST['btn1'])){


$host="localhost";
$user="root";
$pass="";
$database="t4um";

$autores=$_POST['rec_autores'];
$titulo=$_POST['rec_titulo'];
$ciclo=$_POST['rec_ciclo'];
$curso=$_POST['rec_curso'];
$materia=$_POST['rec_materia'];
$descripcion=$_POST['rec_descripcion'];

error_reporting(0);

$conexion= mysqli_connect($host,$user,"",$database);

    $sql= ("INSERT INTO proyectos (autores,titulo,ciclo,curso,materia,descripcion) values ('$autores','$titulo','$ciclo','$curso','$materia','$descripcion')");

    mysqli_query($conexion,$sql);

    mysqli_close($conexion);

    
    echo "<script>alert('Datos enviados')</script>";
}

?>
<script>
$( "#tit_origen" ).autocomplete({
  
   source: "sugerir.php",
   minLength: 1,
   select: function(event,ui){
    
    }
   
});

</script>