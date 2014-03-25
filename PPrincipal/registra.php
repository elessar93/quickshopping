
<?php


function inserta($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k)

{



$host = "localhost";
$db= "usuario";
$user = "root";
       	

if(!($enlace=mysql_connect($host,$user))){
exit();
}




mysql_select_db($db,$enlace);



  $consulta = "INSERT INTO  registro values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')";

$q= mysql_query($consulta,$enlace)or die(mysql_error());    



   
  


$media ="1";
	 

return $media;

}



?>
