<?php
		
		$dir = './arquivos/'; 
		$tmpName = $_FILES['arquivo']['tmp_name']; 
		$name = $_FILES['arquivo']['name']; 
		
		// move_uploaded_file
		if( move_uploaded_file( $tmpName, $dir . $name ) ) { 	
			header('Location: sucesso.php'); 		
		} else {			
			header('Location: erro.php'); 			
		}
?>


		