<?php

try
{
	//Open database connection
	$con = mysql_connect("localhost","root","");
	mysql_select_db("usuario", $con);

	//Getting records (listAction)
	if($_GET["action"] == "list")
	{
		
		//Get record count
		$result = mysql_query("SELECT COUNT(*) AS RecordCount FROM administrador;");
		$row = mysql_fetch_array($result);
		$recordCount = $row['RecordCount'];
		
		$result = mysql_query("SELECT * FROM administrador;");
		
		//Add all records to an array
		$rows = array();
		while($row = mysql_fetch_array($result))
		{
		    $rows[] = $row;
		}

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['TotalRecordCount'] = $recordCount;
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
	}
	//Creating a new record (createAction)
	else if($_GET["action"] == "create")
	{
		//Insert record into database
		$result = mysql_query("INSERT INTO administrador(nick,nombre,apellido,direccion,cp,telefono,correo,contrasena) VALUES('" . $_POST["nick"] . "', '" . $_POST["nombre"] . "', '" . $_POST["apellido"] . "', '" . $_POST["direccion"] . "', '" . $_POST["cp"] . "', '" . $_POST["telefono"] . "', '" . $_POST["correo"] . "', '" . $_POST["contrasena"] . "');");
		
		//Get last inserted record (to return to jTable)
		$result = mysql_query("SELECT * FROM administrador WHERE idadministrador = LAST_INSERT_ID();");
		$row = mysql_fetch_array($result);

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Record'] = $row;
		print json_encode($jTableResult);
	}
	//Updating a record (updateAction)
	else if($_GET["action"] == "update")
	{
		//Update record in database
		$result = mysql_query("UPDATE administrador SET nick = '" . $_POST["nick"] . "',nombre='" . $_POST["nombre"] . "',apellido='" . $_POST["apellido"] . "',direccion='" . $_POST["direccion"] . "',cp='" . $_POST["cp"] . "',telefono='" . $_POST["telefono"] . "',correo='" . $_POST["correo"] . "',contrasena='" . $_POST["contrasena"] . "'  WHERE idadministrador = " . $_POST["idadministrador"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
	//Deleting a record (deleteAction)
	else if($_GET["action"] == "delete")
	{
		//Delete from database
		$result = mysql_query("DELETE FROM administrador WHERE idadministrador = " . $_POST["idadministrador"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}

	//Close database connection
	mysql_close($con);

}
catch(Exception $ex)
{
    //Return error message
	$jTableResult = array();
	$jTableResult['Result'] = "ERROR";
	$jTableResult['Message'] = $ex->getMessage();
	print json_encode($jTableResult);
}
	
?>