
<?php



        if($_POST){
        	
            $tc=$_POST['tc'];
            
            $con=0;
			
        	if($tc ==""){
		
		
				echo "<script type='text/javascript'>";
	 
    echo "alert('Falta ingresar campos '); ";
     echo" window.location='carrito.html'; ";
    
    echo "</script> ";
				
			  
			$con=1;}
 	
        	
                 else {
				 
				 	
				 
				 
				 if(strlen($tc)!=16 || is_numeric($tc)==0){echo "<script type='text/javascript'>";
	 
    echo "alert('Numero de targeta incorrecto'); ";
     echo" window.location='carrito.html'; ";
    
    echo "</script> ";
				 	  $con=1;}
				
				
 
				 }
 
}      
if($con==0){
		echo "<script type='text/javascript'>";
	 
    echo "alert('Compra exitosa'); ";
     echo" window.location='index.html'; ";
    
    echo "</script> ";
					
					
				 
				  }

?>