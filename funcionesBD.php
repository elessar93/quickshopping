<?php
	$u="root";
	$p="n0m3l0s3";
	$b="quickshopping";
	$enlace = mysql_connect("localhost", $u, $p) or die("Error MySQL."); 
	mysql_select_db($b, $enlace) or die("Error base de datos.");
	
	function login($use,$pas){
		$sql = "SELECT idUser,typeUser from muser WHERE mailUser='".$use."' and passUser='".$pas."'";
		$result=mysql_query($sql);
			
		while($row=mysql_fetch_array($result))
			return $row['idUser'].','.$row['typeUser'];			
		return 0;
	}
	
	function registroUsuario($nom,$pas,$mail){
		$sql= "SELECT idUser from muser WHERE mailUser='".$mail."'";
		$res = mysql_query($sql);
		while($row=mysql_fetch_array($res))
			return 'El correo ya esta registrado';
		$sql = "INSERT INTO muser (nomUser, mailUser, passUser, typeUser) VALUES ('".$nom."','".$mail."','".$pas."','2');";
		$res = mysql_query($sql);
		if (!$res)
			echo "Error al ejecutar la consulta ($sql)\n";
		else{
			$sql = "SELECT * from muser WHERE mailUser='".$mail."' and passUser='".$pas."'";
			$res = mysql_query($sql);
			while($row=mysql_fetch_array($res))
				return $row['idUser'].','.$row['typeUser'];			
		}
	}
	echo login('rcardenas93@gmail.com','burris');
	echo registroUsuario('Andrea Cardenas','burris','andi@hola.com');
?>