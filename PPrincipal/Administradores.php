<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="author" content="EPICWARE"/>
    <link href='imagenes/favicon (1).ico' rel='icon' type='image/x-icon'/>
    <title>Gestion de Aministradores</title>
    <link href="css/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="scripts/jtable/themes/standard/blue/jtable_blue.css" rel="stylesheet" type="text/css" />
	<link type="text/css" rel="stylesheet" href="css/gadmon.css"/>
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
	
  </head>
  <body>
<div id="capa1">
    		<div id="logo"><img src="imagenes/QS.jpg" alt="logo" width="450" height="136"></div>
    		<div id="ima"><img src="imagenes/creacuenta.jpg" alt="logo" width="320" height="190"></div>
    	</div>
    <div id="linea2"></div>
<div id="principal">
<div id="cont">
	<div id="PeopleTableContainer" style="width: 600px;"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
				title: 'Gestion de Administradores',
				paging: true,
				pageSize: 2,
				sorting: true,
				defaultSorting: 'Name ASC',
				actions: {
					listAction: 'PersonActionsAdmon.php?action=list',
					createAction: 'PersonActionsAdmon.php?action=create',
					updateAction: 'PersonActionsAdmon.php?action=update',
					deleteAction: 'PersonActionsAdmon.php?action=delete'
				},
				fields: {
					idadministrador: {
						key: true,
						create: false,
						edit: false,
						list: false
					},
					nick: {
						title: 'Nombre',
						width: '40%'
					},
					nombre: {
						title: 'Apellido',
						width: '40%'
					},
					apellido: {
						title: 'Edad',
						width: '20%',
						
					},
					direccion: {
						title: 'Dirreccion',
						width: '50%'
					},
					cp: {
						title: 'CP',
						width: '20%'
					},
					
					telefono: {
						title: 'Telefono',
						width: '20%'
					},
					correo: {
						title: 'Correo',
						width: '20%'
					},
					
					contrasena: {
						title: 'Contrase&ntilde;a',
						width: '20%'
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
