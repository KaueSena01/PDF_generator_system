<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Gerador de PDF</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="content">
			<h1>PDF de usuários cadastrados</h1>
		</div>
	</header>

	<div class="form">
		<form method="POST" action="cad_usuario.php">
			<div class="form-control">
				<h1>PDF</h1> 
			</div>
			<div class="form-control">
				<label for="InputNome">Seu nome:</label>
				<input type="text" name="nome" class="form-group" placeholder="Nome completo" required> 
			</div>
			<div class="form-control">
				<label for="InputEmail">Seu E-mail:</label>
				<input type="email" name="email" class="form-group" placeholder="Ex: email12@gmail.com" required> 
			</div>
			<div class="form-control">
				<input type="submit" class="form-group btn" value="Gerar PDF"> 
			</div>
		</form>
	</div>

	<div class="a-control">
		<a href="lista_pdf.php">Ver PDF</a>
	</div>

		<div class="footer-control">
			<p>&copy; Kauê Sena 2021</p>
		</div>
</body>
</html>