
<?php



        if($_POST){
        	$nombre= $_POST['nombre'];
        	$apellidos= $_POST['apellidos'];
            $edad= $_POST['edad'];
            $direccion=$_POST['direccion'];
        	$copo= $_POST['cp'];
            $email=$_POST['mail'];
            $tel= $_POST['tel'];
            $nick=$_POST['nick'];
            $tc=$_POST['tc'];
            $contra= $_POST['contra'];
            $contra1=$_POST['contra1'];
			$correo=$_POST['correo'];
            
            $con=0;
			
        	if($nick == "" || $nombre=="" || $apellidos == "" || $edad =="" || $direccion == "" || $copo=="" || $email=="" || $tc =="" || $tel=="" || $contra=="" || $contra1=="" ){
		
		
				echo "<script type='text/javascript'>";
	 
    echo "alert('Falta ingresar campos '); ";
     echo" window.location='CrearCuenta.html'; ";
    
    echo "</script> ";
				
			  
			$con=1;}
 	
        	
                 else {
				 
				 if($contra!=$contra1){$con=1;
				 	echo "<script type='text/javascript'>";
	 
    echo "alert('contraseña no coincide'); ";
     echo" window.location='CrearCuenta.html'; ";
    
    echo "</script> ";
					 }	
				 
				 
				 if(strlen($tc)!=16 || is_numeric($tc)==0){echo "<script type='text/javascript'>";
	 
    echo "alert('No ingreso un nick de tarjeta de credito'); ";
     echo" window.location='CrearCuenta.html'; ";
    
    echo "</script> ";
				 	  $con=1;}
				 if(is_numeric($tel)!= 1){echo "<script type='text/javascript'>";
	 
    echo "alert('No ingreso un numero telefonico'); ";
     echo" window.location='CrearCuenta.html'; ";
    
    echo "</script> "; $con=1;}
				
 
				 }
 
}      
if($con==0){
	include("registra.php");
	$n;
				 	$ema=$email.$correo;
				$n= inserta($nick,$nombre,$apellidos,$edad,$direccion,$copo,$ema,$tel,$nick,$contra,$tc);
				 if($n=="1"){
				 	echo "<script type='text/javascript'>";
	 
    echo "alert('Se ha registrado con exito'); ";
     echo" window.location='index.html'; ";
    
    echo "</script> ";
					
					
				 }
				  }

?>