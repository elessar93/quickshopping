<?php

      
 $a=$_POST['nick'];
 $b=$_POST['contra'];     	
$host = "localhost";
$db= "usuario";
$user = "root";
       	

if(!($enlace=mysql_connect($host,$user))){
exit();
}




mysql_select_db($db,$enlace);


$consulta = "SELECT contrasena FROM registro where nick='$a'";
$consulta1 = "SELECT contrasena FROM administrador where nick='$a'";
$q= mysql_query($consulta,$enlace);   
if (mysql_num_rows($q) > 0)
{
  $resul=mysql_result($q,0);
if($resul == $b){
header('Location: index.html');
}
else{
	
	
	
	
	echo "<script type='text/javascript'>";
	 
    echo "alert('contraseña no valida'); ";
     echo" window.location='Login.html'; ";
    
    echo "</script> ";
}


}
else{header('Location:Login.html');


$q= mysql_query($consulta1,$enlace);   
if (mysql_num_rows($q) > 0)
{
  $resul=mysql_result($q,0);
if($resul == $b){
header('Location: selectadmon.html');
}
else{
	
	
	
	
	echo "<script type='text/javascript'>";
	 
    echo "alert('contraseña no valida'); ";
     echo" window.location='Login.html'; ";
    
    echo "</script> ";
}


}
else{header('Location:Login.html');}


}

?>
			  
