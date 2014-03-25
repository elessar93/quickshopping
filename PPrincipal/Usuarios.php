<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="author" content="EPICWARE"/>
    <link href='imagenes/favicon (1).ico' rel='icon' type='image/x-icon'/>
    <title>Gestion de Usuarios</title>
    <link href="css/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="scripts/jtable/themes/standard/blue/jtable_blue.css" rel="stylesheet" type="text/css" />
	<link type="text/css" rel="stylesheet" href="css/gesusuario.css"/>
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
  </head>
  
  <body>
  	<div id="capa1">
    		<div id="logo"><img src="imagenes/QS.jpg" alt="logo" width="450" height="136"></div>
    		<div id="ima"><img src="imagenes/creacuenta.jpg" alt="logo" width="330" height="190"></div>
    	</div>
    <div id="linea2"></div>
<div id="principal">
	
	<div id="cont">
	<div id="PeopleTableContainer" style="width: 600px;"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
				title: 'GESTION DE USUARIOS',
				paging: true,
				pageSize: 2,
				sorting: true,
				defaultSorting: 'Name ASC',
				actions: {
					listAction: 'PersonActionsUsuario.php?action=list',
					createAction: 'PersonActionsUsuario.php?action=create',
					updateAction: 'PersonActionsUsuario.php?action=update',
					deleteAction: 'PersonActionsUsuario.php?action=delete'
				},
				fields: {
					idusuario: {
						key: true,
						create: false,
						edit: false,
						list: false
					},
					nombre: {
						title: 'Nombre',
						width: '40%'
					},
					apellido: {
						title: 'Apellido',
						width: '40%'
					},
					edad: {
						title: 'Edad',
						width: '20%',
						
					},
					direccion: {
						title: 'Dirreccion',
						width: '50%'
					},
					codigo: {
						title: 'CP',
						width: '20%'
					},
					email: {
						title: 'E-mail',
						width: '40%'
					},
					telefono: {
						title: 'Telefono',
						width: '20%'
					},
					nick: {
						title: 'Nick',
						width: '40%'
					},
					contrasena: {
						title: 'Contrase&ntilde;a',
						width: '20%'
					},
					num_tarjeta: {
						title: 'Num_Tarjeta',
						width: '40%'
					}
				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>
	</div>
</div>
<div id="linea"></div>		
<div id="copyright">Copyright &copy; 2012 Hecho por EPICWARE. Todos los Derechos Reservados.<a href="http://apycom.com/"></a></div>

  </body>
</html>
