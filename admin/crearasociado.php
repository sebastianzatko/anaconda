<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	sec_session_start();
	
?>
<html>
	<head>
		<title>FeCoopteba</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		
		<link href="https://fonts.googleapis.com/css?family=Lato:700|Open+Sans:300|Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="icon" href="favicon.png" type="image/x-icon"/>
		
		
		

		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Lato|Noto+Serif" rel="stylesheet">
		<link rel="stylesheet" href="styleedicion.css"/>
		<link rel="stylesheet" href="styleuser.css"/>
		
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="icon" href="favicon.png" type="image/x-icon"/>
		
		<script src="jquery-3.2.1.js"></script>
		
		
		
		<script src="main.js"></script>
		<style>
			#map{
				width:90%;
				height:40%;
			}
				#geobusca{
                vertical-align: bottom;
                height: 30px;
                background-color: #023859;
                color:white;
        
            }
        	 #mas{
                background-color: forestgreen;
                color:white;
                height: 30px;
            }
            #menos{
                
                background-color: red;
                color:white;
                height: 30px;
            }
		</style>
		
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="main.js"></script>
		<script src="mainbarra.js"></script>
		<link rel="stylesheet" href="barrastyle.css">
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
		<div>
			<div>
			 
				<div class="hijomain">
					
					<form action="saveasociado.php?cate=<?php echo $_GET['cate']; ?>" method="POST" enctype="multipart/form-data">
						<div class="agru">
							<div class="userc"><h2 class="mensaje">Nombre</h2><input type="text" name="nombre" maxlength='150' required /></div>
							<div class="userc"><h2 class="mensaje">Matricula</h2><input type="text" name="matricula"  maxlength='40'/></div>
						</div>
						<div class="user56"><h2 class="mensaje">Logo de Coopteba o Vinculo</h2><input type="file" name="logo" id="files" name="files[]" required /><output id="list"></output></div>
						
						<div class="extras">
								<div class="usercontac">
									<div class="userv"><i class="fa fa-phone fa-3x" aria-hidden="true" color="white"></i><input type="text" name="telefono" placeholder="Telefono" maxlength="24" /></div>
									<div class="userv"><i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i><input type="text" name="mail" placeholder="Correo Electronico" maxlength='130'/></div>
									<div class="userv"><i class="fa fa-link fa-3x" aria-hidden="true"></i><input type="text" name="pagina" placeholder="Pagina Web" maxlength='140' /></div>
									<div class="userv"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i><input type="text" name="face" placeholder="Facebook" maxlength='140'/></div>
									<div class="userv"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i><input type="text" name="twit" placeholder="Twitter" maxlength='140'/></div>
									<div class="userv"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i><input type="text" name="insta" placeholder="Instagram" maxlength='140'/></div>
									<div class="userv"><i class="fa fa-youtube-play fa-3x" aria-hidden="true"></i><input type="text" name="you" placeholder="Youtube" maxlength='140'/></div>
								</div>
								
								<input type="text" id="lat" name="latitud"  />
								<input type="text" id="long" name="longuitud"  />
								<div class="user4"><h2 class="mensaje">Localizacion</h2><div class="userv"><i class="fa fa-home fa-3x" aria-hidden="true"></i><input type="text" name="dirreccion" id="address" placeholder="Direccion"/><input type="button" id="geobusca" value="&#xf002" class="fa fa-input"/></div><div class="botonera"><input type="button" id="mas" value="&#xf067" class="fa fa-input" readonly/><input type="button" id="menos" value="&#xf068" class="fa fa-input" readonly/></div><div id="map"></div></div>
						</div>
						<input type="submit"/>

						
					</form>
					
				</div>
			</div>
		</div>		
		
		
		
		<script
		  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeDjRqDrHHpnjYrXT3lO0nwmgyNwMzcsg&callback=initMap">
		</script>
		<script
		  src="js/cargarmap.js">
		</script>
		<script>
			var map=new google.maps.Map(document.getElementById('map'),{
				center:{
					lat:-34.61,
					lng:-58.37
				},
				zoom:10
			});
			
			
		</script>
		
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
	  <?php else : ?>
			<?php
				header("Location:index.php");
			?>
		
		<?php endif; ?>
	</body>
</html>