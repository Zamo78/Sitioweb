<?php
session_start();
?>  
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
   <script src="bootstrap/js/jquery-3.1.0.min.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
   <script src="bootstrap/js/funciones_gral.js"></script>
   <link rel="stylesheet" href="bootstrap/css/style_chat.css" media="all"/>	
   <link rel="stylesheet" href="bootstrap/ui/jquery-ui.css">
   <link rel="stylesheet" href="bootstrap/cust.css">
   <link rel="stylesheet" href="menu.css">
   <script src="bootstrap/ui/jquery-ui.js"></script>

<input type="text"  id="txt_b_c" placeholder="Buscar" style="position: absolute;right: 100px;">
<button type="button" id="btn_b_c" class="btn btn-primary btn-sm" style="position: absolute;right: 20px;">Buscar</button>
<h3>Proyectos T4
<?php
if (isset($_SESSION['username']) && $_SESSION['rol']=='administrador'){
echo '<button type="button" class="btn btn-primary  btn-sm"  onclick="cargar(\'#capa_g1c\',\'alta_proy.php\')">Alta</button>';
}
?>



