<?php

include("menu_bst.php");

echo '
<div class="container-fluid" id="capa_T">  <!-- LOGIN -->';
?>
	<?php
	if (isset($_SESSION['username'])) {
 echo '  <u class="navbar-brand" style="padding-right:850px;top:-20px;">
    <a href="#">
    <span onclick="cargar(\'#capa_g\',\'users.php\')"  class="glyphicon glyphicon-user">
    Usuarios</span></a></u>';
	}
	
echo '	<div class="row">

	  <div class="col-sm-12">
		  <div id="capa_h1">
          <center><a href="#"><img src="images/logo.png" width="220px" height="100px"></a></center>
		  </div>
	  </div>
	</div>

	<div class="row">

	  <div class="col-sm-12">
		  <div id="capa_h2">
             <nav id="menu">
	           <ul>
			   	<li><a href="#"><span onclick="cargar(\'#capa_g\',\'txts/proyectos.php\')">Proyectos</span></a></li>
			   	<li><a href="#"><span onclick="cargar(\'#capa_cl\',\'txts/ayuda.html\')">Material de ayuda</span></a></li>
			  	<li><a href="#"><span onclick="cargar(\'#capa_n\',\'txts/n\')">Tarea</span></a></li>

		   </ul>
			  </nav> 
		  </div>
	  </div>
	</div>

	<div class="row">

	  <div class="col-dm-12">
		  <div id="capa_g">
            <!-- CAPA GENERAL -->
		  </div>
	  </div>
	</div>

	<div class="row">
		<div class="col-sm-4">
			<div id="capa_g1l">

			</div>
		</div>
		<div class="col-sm-4">
			<div id="capa_g1c">

			</div>
		</div>
		<div class="col-sm-4">		
			<div id="capa_g1r">

			</div>
		</div>	
	</div>	
	
</div>';

?>




	<!-- <div class="col-sm-4">
		  <div id="capa_cc">
             CAPA CENTER 
		  </div>
	  </div>
	

	  <div class="col-sm-4">
		  <div id="capa_cr">
             CAPA RIGHT 
		  </div>
	  </div>
	</div>
	


</div>
-->
