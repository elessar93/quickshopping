<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="author" content="EPICWARE"/>
    <link href='imagenes/favicon (1).ico' rel='icon' type='image/x-icon'/>
    <title>Gestion de Almacen</title>
    <link href="css/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="scripts/jtable/themes/standard/blue/jtable_blue.css" rel="stylesheet" type="text/css" />
	<link type="text/css" rel="stylesheet" href="css/gesalmacen.css"/>
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
	
  </head>
<body>
  	<div id="capa1">
    		<div id="logo"><img src="imagenes/QS.jpg" alt="logo" width="450" height="136"></div>
    		<div id="ima"><img src="imagenes/almacen.jpg" alt="logo" width="450" height="190"></div>
    	</div>
    <div id="linea2"></div>
<div id="principal">
	
	<div id="cont">
	<div id="PeopleTableContainer" style="width: 600px;"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
				title: 'Gestion de Almacen',
				paging: true,
				pageSize: 2,
				sorting: true,
				defaultSorting: 'Name ASC',
				actions: {
					listAction: 'GAlmacen.php?action=list',
					createAction: 'GAlmacen.php?action=create',
					updateAction: 'GAlmacen.php?action=update',
					deleteAction: 'GAlmacen.php?action=delete'
				},
				fields: {
					idproducto: {
						key: true,
						create: false,
						edit: false,
						list: false
					},
					
					nombre: {
						title: 'Producto',
						width: '40%'
					},
					existencia: {
						title: 'Existencias',
						width: '20%',
						
					},
					precio: {
						title: '$Precio',
						width: '50%'
					},
					categoria: {
						title: 'Categoria',
						width: '20%'
					},
					
					marca: {
						title: 'Marca',
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
