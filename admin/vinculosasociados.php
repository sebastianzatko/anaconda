<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	sec_session_start();
	
?>
<html>
	<head>
		<title>Publicar Entes</title>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="estilo.css" rel="stylesheet" type="text/css" />
		<script src="jquery-3.2.1.js"></script>
		<script src="notify.js"></script>
		<link rel="stylesheet" href="styleuser.css"/>
		<link rel="icon" href="favicon.png" type="admin/image/x-icon"/>
		<style>
			.divtabla1 td{
				text-align:center !important;
				border: 3px solid #023859!important;
				
			}
			.chiquito{
				width:100px;
				height:100px;
			}
			.divtabla2 td{
				text-align:center !important;
				border: 3px solid #023859!important;
				
			}
			.checkatr{
				width:30px;
				height:30px;
				background:#006bbd;
			}
			.tablaatr{
				width:100%;
			}
			
			
			
		</style>
		
		<script src="mainbarra.js"></script>
		<link rel="stylesheet" href="barrastyle.css">
	</head>
	<body>
		<?php if (login_check($mysqli) == true) : ?>
		<section class="oja">
			<span id="botonmenu" class="fa fa-arrow-right"></span>
            <nav class="barra">
                <ul class="lista1">
                    <li class="inicio">Opciones Modo Administrador</li>
					<li menu="0"><a href="redireccion.php"><i class="fa fa-home"></i> Home</a>
                    <li class="item-sublista" menu="1"><a href="#"><i class="fa fa-plus-square"></i> Crear</a>
                        <ul class="sublista">
                            <li class="inicio"><i class="fa fa-plus-square"></i> Crear</li>
                            <li class="atras">Volver</li>
                            <li><a href="nuevanoti.php"><i class="fa fa-newspaper-o"></i> Noticias</a></li>
                            <li><a href="crearasociado.php?cate=1"><i class="fa fa-user-plus"></i> Vinculo</a></li>
                            <li><a href="crearasociado.php?cate=2"><i class="fa fa-user-plus"></i> Coopteba</a></li>
                            <li><a href="guardardocumento.php"><i class="fa fa-file"></i> Documento</a></li>
							<li><a href="crearcomision.php"><i class="fa fa-sitemap"></i> Comision</a></li>
							<li><a href="publicaciones.php"><i class="fa fa-align-left"></i> Publicaciones</a></li>
                        </ul>
                    </li>    
                    <li class="item-sublista" menu="2"><a href="#"><i class="fa fa-edit"></i> Modificar</a>
                        <ul class="sublista">
                            <li class="inicio"><i class="fa fa-edit"></i> Modificar</li>
                            <li class="atras">Volver</li>
                            <li><a href="modificarnoticia.php"><i class="fa fa-newspaper-o"></i> Noticia</a></li>
                            <li><a href="modificarasociado.php"><i class="fa fa-user"></i> Vinculo</a></li>
                            <li><a href="modificarasociado.php"><i class="fa fa-user"></i> Coopteba</a></li>
                            <li><a href="modificardocumento.php"><i class="fa fa-file"></i> Documento</a></li>
                            <li><a href="modificardocumento.php"><i class="fa fa-book"></i> Legislaciones</a></li>
							<li><a href="modificarpublicacion.php"><i class="fa fa-align-left"></i> Publicacion</a></li>
							<li><a href="modificarcomision.php"><i class="fa fa-sitemap"></i> Comision</a></li>
							<li><a href="vinculosasociados.php"><i class="fa fa-users"></i> Publicar Entes</a></li>
                        </ul>
                    </li>
					<li class="item-sublista" menu="3"><a href="#"><i class="fa fa-th-large"></i> Secciones</a>
						<ul class="sublista">
							<li class="inicio"><i class="fa fa-th-large"></i> Secciones</li>
                            <li class="atras">Volver</li>
							<li><a href="contacto.php"><i class="fa fa-phone-square"></i> Contacto</a></li>
                            <li><a href="guardarobjetivos.php"><i class="fa fa-line-chart"></i> Objetivos</a></li>
                            <li><a href="historia.php"><i class="fa fa-archive"></i> Historia</a></li>
							<li><a href="publicacionprincipal.php"><i class="fa fa-object-group"></i> Pop-up</a></li>
							<li><a href="documentostexto.php"><i class="fa fa-file"></i> Texto Documentos</a></li>
							<li><a href="documentostexto.php"><i class="fa fa-book"></i> Texto Legislacion</a></li>
						</ul>
					</li>
                    <li class="item-sublista" menu="4"><a href="#"><i class="fa fa-minus-square"></i> Eliminar</a>
                        <ul class="sublista">
                            <li class="inicio"><i class="fa fa-minus-square"></i> Eliminar</li>
                            <li class="atras">Volver</li>
                            <li><a href="eliminarnoticia.php"><i class="fa fa-newspaper-o"></i> Noticia</a></li>
                            <li><a href="eliminarasociados.php"><i class="fa fa-user-times"></i> Vinculo</a></li>
                            <li><a href="eliminarasociados.php"><i class="fa fa-user-times"></i> Coopteba</a></li>
                            <li><a href="eliminardoc.php"><i class="fa fa-file"></i> Documento</a></li>
							<li><a href="eliminardoc.php"><i class="fa fa-book"></i> Legislacion</a></li>
							<li><a href="eliminarcomision.php"><i class="fa fa-sitemap"></i> Comision</a></li>
							<li><a href="eliminarpublicacion.php"><i class="fa fa-align-left"></i> Publicacion</a></li>
							<li><a href="eliminarseccion.php"><i class="fa fa-th-large"></i> Seccion</a></li>
                        </ul>
                    </li>
                    <li class="item-sublista" menu="5"><a href="#"><i class="fa fa-sort"></i> Cambiar Relevancia</a>
                        <ul class="sublista">
                            <li class="inicio"><i class="fa fa-sort"></i> Cambiar Relevancia</li>
                            <li class="atras">Volver</li>
                            <li><a href="noticiaprioridad.php"><i class="fa fa-newspaper-o"></i> Noticia</a></li>
                            <li><a href="prioridadnoticiadestacada.php"><i class="fa fa-newspaper-o"></i> Noticia Destacada</a></li>
                            <li><a href="prioridadnoticiaslider.php"><i class="fa fa-newspaper-o"></i> Noticia Carrusel</a></li>
                            <li><a href="documentoprioridad.php"><i class="fa fa-file"></i> Documento</a></li>
                            <li><a href="legislacionprioridad.php"><i class="fa fa-book"></i> Legislacion</a></li>
                        </ul>
                    </li>
                   
					<li menu="0"><a href="consultas.php"><i class="fa fa-wrench"></i> Consultas</a>
					<li menu="0"><a href="logout.php"><i class="fa fa-times-circle"></i> Cerrar Sesion</a>
                </ul>
            </nav>
        </section>
		
		
		<header>
		<div >
			<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-menu"></span>Menú</a>
			</div>
			
			<nav>
				<div class="logo"><a href="index1.php"> <img src="logonav.svg" class="logo2" /> </a>	</div>
					<ul>
					<li ><a href="index1.php"><img src="icons/botonhogar5.svg" class="logo56" />INICIO</a></li>
					<li ><a href="index2.php"><img src="icons/grupo69.svg" class="logonosotros" />SOBRE NOSOTROS</a></li>
					<li ><a href="index3.php"><img src="icons/documento5.svg" class="logodocumento" />DOCUMENTOS</a></li>
					<li ><a href="index4.php"><img src="icons/comisiones5.svg" class="logocoopteba" />COMISIONES</a></li>
					<li ><a href="index5.php"><img src="icons/noticia5.svg" class="logonoticia" />NOTICIAS</a></li>
					<li ><a href="index6.php"><img src="icons/usuario5.svg" class="logocoopteba" />COOPTEBAS</a></li>
					<li ><a href="index7.php"><img src="icons/vinculo5.svg" class="logocontacto" />VINCULOS</a></li>
					<li ><a href="index8.php"><img src="icons/contacto5.svg" class="logocontacto" />CONTACTO</a></li>
							
					</ul>		
				</nav>
		</div>	
		</header>
		
		<form method="POST" action="updateasociadosvinculos.php">
		<div class="divtabla2" style="margin-bottom: 10%; margin-top: 7%;background:#f5f5f5;padding: 3%;border-radius: 30px;" id="der">
			<center><h2 class="h2atr">Vinculos</h2></center>	
			<table style="width:100%;">
				
					<tr>
						<th class="modititular">Logo</th>
						<th class="modititular" >Nombre</th>
						<th class="modititular">Matricula</th>
						<th class="modititular">Aparecer en el inicio</th>
					</tr>
					<?php
						require 'conection.php';
						$sql = "SELECT id_asociado,nombre,matricula,logo,portada FROM asociado WHERE categoria=1";
						$texto=mysqli_query($con,$sql) or die(mysqli_error($con));
							while($asociado = mysqli_fetch_array($texto)){
								if($asociado[4]==1){ $confirma="checked"; }else{ $confirma=""; }
								echo "<tr><td class='portadaatr'><img src='".$asociado[3]."' class='chiquito' /></td><td class='tituloatr'>".$asociado['1']."</td><td class='tituloatr'>".$asociado['2']."</td><td><input type='checkbox' name='asociados[]' value='".$asociado['0']."' class='checkatr' ".$confirma."></td></tr>";
						}
					?>
				</table>
			</div>	
			<div class="divtabla1" style="margin-bottom: 10%; margin-top: 7%;background: #f5f5f5;padding: 3%;border-radius: 30px;" id="izq">	
				<center><h2 class="h2atr">Cooptebas</h2></center>
				<table style="width:100%;">
				
					<tr>
						<th class="modititular">Logo</th>
						<th class="modititular">Nombre</th>
						<th class="modititular">Matricula</th>
						<th class="modititular">Aparecer en el inicio</th>
					<tr>
					<?php
						$sql1 = "SELECT id_asociado,nombre,matricula,logo,portada FROM asociado WHERE categoria=2";
						$texto2=mysqli_query($con,$sql1) or die(mysqli_error($con));
						while($coopteba = mysqli_fetch_array($texto2)){
								if($coopteba[4]==1){ $confirma="checked"; }else{ $confirma=""; }
								echo "<tr><td class='portadaatr'><img src='".$coopteba[3]."' class='chiquito' /></td><td class='tituloatr'>".$coopteba['1']."</td><td class='tituloatr'>".$coopteba['2']."</td><td><input type='checkbox' name='asociados[]' value='".$coopteba['0']."' class='checkatr' ".$confirma."></td></tr>";
						}
					?>
				</table>
			</div>
			<div class="botons">
				<input class="canc" type="button" value="Cancelar" onclick="window.history.back()" name="action"/>
				<input class="boton" type="submit" />
			</div>
		</form>
		
		
		<script>
			var $_GET=[];
			window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(a,name,value){$_GET[name]=value;});
			var nombrevar=$_GET['var'];
			console.log(nombrevar);
			if (nombrevar == 1){
				$.notify("Se han publicado los datos correctamente","success");
			}
			else if (nombrevar == 2){
				$.notify("Ha ocurrido un error","error");
			}
			else if (nombrevar == 3){
				$.notify("No se han realizado cambios","warn");
			}
			else {

			}
		</script>
		
		<?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>
	</body>
</html>