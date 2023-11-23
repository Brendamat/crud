<?php session_start(); ?>
<html>
<head>
	<title>Pagina princioal</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="header">
		Seja bem vindo (a)!
	</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>
				
		Bem vindo (a)! <?php echo $_SESSION['name'] ?> ! <a href='logout.php'>Sair</a><br/>
		<br/>
		<a href='view.php'>Visualizar e adicionar produtos</a>
		<br/><br/>
	<?php	
	} else {
		echo "Você deve estar logado para visualizar esta página.<br/><br/>";
		echo "<a href='login.php'>Login</a> | <a href='register.php'>Cadastro</a>";
	}
	?>
	<div id="footer">
		Criado por <a href="http://blog.chapagain.com.np" title="Mukesh Chapagain">Brenda Martins</a>
	</div>
</body>
</html>
