<?php
	if( $_FILES['arquivo'] ) { 
		$dir = './arquivos/'; 
	
		$tmpName = $_FILES['arquivo']['tmp_name']; 
		$name = $_FILES['arquivo']['name']; 
		
		// move_uploaded_file
		if( move_uploaded_file( $tmpName, $dir . $name ) ) { 	
			header('Location: sucesso.php'); 		
		} else {		
			// direciona para a página de erro qdo ocorre erro no move_uploaded_file
			header('Location: erro.php'); 			
		}
		
	} else {
		// direciona para a página de erro qdo não seleciona o arquivo
		header('Location: erro.php'); 
	}
?>


