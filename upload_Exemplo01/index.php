<html>
<head>
	<title> PHP - UPLOAD de Arquivos </title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
	
	<h1> Exemplo de Upload - PHP </h1>
	

	<div>
		<form action="upload.php" method="post" enctype="multipart/form-data">
				
			<label for="arquivo">Arquivo:</label> <input type="file" name="arquivo" id="arquivo" />
			
			<br />
			<br />
			
			<input type="submit" value="Enviar" />
			
		</form>
	</div>

</body>
</html>