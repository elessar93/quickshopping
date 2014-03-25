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
		$result = mysql_query("SELECT COUNT(*) AS RecordCount FROM almacen;");
		$row = mysql_fetch_array($result);
		$recordCount = $row['RecordCount'];
		
		$result = mysql_query("SELECT * FROM almacen order by marca;");
		
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
		$result = mysql_query("INSERT INTO almacen(nombre,existencia,precio,categoria,marca) VALUES('" . $_POST["nombre"] . "', '" . $_POST["existencia"] . "', '" . $_POST["precio"] . "', '" . $_POST["categoria"] . "', '" . $_POST["marca"] . "');");
		
		//Get last inserted record (to return to jTable)
		$result = mysql_query("SELECT * FROM almacen WHERE idproducto = LAST_INSERT_ID();");
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
		$result = mysql_query("UPDATE almacen SET nombre = '" . $_POST["nombre"] . "', existencia='" . $_POST["existencia"] . "',precio='" . $_POST["precio"] . "',categoria='" . $_POST["categoria"] . "',marca='" . $_POST["marca"] . "'  WHERE idproducto = " . $_POST["idproducto"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
	//Deleting a record (deleteAction)
	else if($_GET["action"] == "delete")
	{
		//Delete from database
		$result = mysql_query("DELETE FROM almacen WHERE idproducto = " . $_POST["idproducto"] . ";");

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