<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	sec_session_start();
	
?>

<html>
	<head>
		<title>Nueva Noticia</title>
		<meta charset="UTF-8"/>
		<script src="jquery-3.2.1.js"></script>
		
		<link href="estilo2.css" rel="stylesheet" type="text/css" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" href="styleuser.css"/>
		<link rel="icon" href="favicon.png" type="admin/image/x-icon"/>

		
		
		<script src="mainbarra.js"></script>
		<link rel="stylesheet" href="barrastyle.css">
		
		<style>
			
			.altalinea{
				border: solid 1px black;
			}
		</style>
		
		<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
		<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

		<!-- include summernote css/js -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
		<script src="https://fecoopteba.coop/admin/lang/summernote-es-ES.js"></script>
		<script src="notify.js"></script>
		
		
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
		<section class="secnoti">
			<form method="POST" action="guardar.php" enctype="multipart/form-data">
				<h2 style="margin-top:5%;">Titulo</h2>
				<input class="ingr" maxlength="70" type="text" placeholder="Ingrese el titulo de la noticia" name="titulo" required />
				<h2 style="margin-top:5%;">Sinopsis de la noticia</h2>
				<textarea name="sinop" class="ingr" maxlength='300' required ></textarea>
				<h2 style="margin-top:5%;">Cuerpo de la noticia</h2>
				<textarea name="noticia" id="summernote" class="ingr" required></textarea>
				<div class="user3"><h2 class="mensaje">Portada</h2><input type="file" id="files" name="files" required><output id="list"></output></div>
				<hr class="altalinea">
				<h2 class="mensaje">Tamaño de la noticia</h2>
				<hr class="altalinea">
				<table style="margin:4%;width: 100%;font-size: 25px;">
					<tr>
						<td><label style="margin-right: 10%;"><input type="radio" value="0" name="tamano" required />Grande</label></td>
						<td></td>
						<td><label style="margin-right: 10%;"><input type="radio" value="1" name="tamano" required />Pequeño</label></td>
					</tr>
				</table>
				<hr class="altalinea">
				<h2 class="mensaje">Aparicion de la noticia</h2>
				<hr class="altalinea">
				<table style="margin:4%;width: 100%;font-size: 25px;">
					<tr>
						<td><label style="margin-right: 10%;"><input type="checkbox" value="1" name="destacada"/>Insetar en primera pagina</label></td>
						<td><label style="margin-right: 10%;"><input type="checkbox" value="1" name="actividad"/>Insertar a las actividades</label></td>
						<td><label style="margin-right: 10%;"><input type="checkbox" value="1" name="slider"/>Insertar en el carrusel de noticias</label></td>
					</tr>
				</table>
				<hr class="altalinea">
				<label class="fecha" style="margin-right: 2%;">Fecha:</label><input id="date" type="date" name="fecha">
				<hr class="altalinea">
				<p class="fecha">Selecciona relevancia</p>
				<select class="fecha" name="prioridad">
					<option class="fecha" value="max">Maxima</option>
					<option class="fecha" value="med">Media</option>
					<option class="fecha" value="min">Minima</option>
					<option class="fecha" value="none">Ninguna</option>
				</select>
				<hr class="altalinea">
				<?php 
					require 'conection.php';
					$consulta="SELECT * FROM asociado WHERE categoria=1";
					$consulta2="SELECT * FROM asociado WHERE categoria=2";
					echo "<h2 class='mensaje'>Relacionar con...</h2><div class='pectab1'><table class='pectab3'><h2 class='mensaje2''>Vinculos</h2>";
					$obtener1=mysqli_query($con,$consulta) or die(mysqli_error($con));
					while($asociado = mysqli_fetch_array($obtener1)){

									echo "<tr><td><input type='checkbox' value='".$asociado[0]."' name='asociates[]'/></td><td><p>".$asociado[1]."</p></td></tr>";

								
							}
					echo "</table></div><div class='pectab2'><table class='pectab4'><h2 class='mensaje2''>Cooptebas</h2>";
					$obtener2=mysqli_query($con,$consulta2) or die(mysqli_error($con));
					while($coopteba = mysqli_fetch_array($obtener2)){

									echo "<tr><td><input type='checkbox' value='".$coopteba[0]."' name='asociates[]'/></td><td><p>".$coopteba[1]."</p></td></tr>";

								
							}
					echo "</table></div>";
				?>
				<div class="botons">
					<input class="canc" type="button" value="Cancelar" onclick="window.history.back()" name="action"/>
					<input type="submit" class="boton" value="Cargar">
				</div>
			</form>
		</section>
		

		<script>
			var $_GET=[];
			window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(a,name,value){$_GET[name]=value;});
			var nombrevar=$_GET['var'];
			console.log(nombrevar);
			if (nombrevar == 1){
				$.notify("Se han cargado los datos correctamente","success");
			}
			else if (nombrevar == 2){
				$.notify("Ha ocurrido un error","error");
			}
			else {

			}
		</script>
		

		<script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('files').addEventListener('change', archivo, false);
      </script>
	  <script>
		$(document).ready(function() {
			$('#summernote').summernote({
				lang: 'es-ES',
				callbacks: {
					onImageUpload: function(files, editor, welEditable) {
						sendFile(files[0], editor, welEditable);
					}           
				}
				
			});
			function sendFile(file, url, editor) {
				data = new FormData();
				data.append("file", file);
				$.ajax({
					data: data,
					type: "POST",
					url: "subida.php",
					cache: false,
					contentType: false,
					processData: false,
					success: function(url) {
						$('#summernote').summernote('editor.insertImage', url);
					}
				});
			}
		});
		</script>
	  <?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>
	</body>
</html>