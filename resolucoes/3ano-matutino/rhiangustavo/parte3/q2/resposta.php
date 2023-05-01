

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Inserir Dados</h2>
			<form action="resposta.php" method="post">
				<label>Número:
					<input type="number" id="number" name="number" required>
				</label>
        
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
            <?php
    $numero = $_POST['number'];
    $i = 1;
    echo "<h2>Tabuada de Multiplicação do $numero:</h2><br/>";
    while($i <= 10){
      $resultado = $numero * $i;
      echo "$numero x $i = $resultado<br/>";
      $i++;
    }
?>
		</div>
	</div>
</body>
</html>