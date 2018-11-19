<?php
	require 'tasks.php';

	$dados = new Task();
	$dados->conectar();

	$tasks = $dados->getAllTasks();

	foreach ($tasks as $task)
	{
		echo "<h3>Tarefa " .$task['id']. "</h3>";
		echo "<p>";
		echo nl2br($task['descricao']);
		echo "</p>";
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
		<div class="container pt-3 mt-3">
		<h2>Novo Tópico</h2>
		<form action="insert.php" method="POST">
				<label>
						Título: <input type="text" name="titulo">
				</label>
				<br>
				<label>
						Descrição:
						<br>
						<textarea name="descricao" cols="50" rows="20"></textarea>
				</label>
				<br>
				<input type="submit" value="Adicionar Tópico">
		</form>

		<form>
			<div class="form-group">
				<label for="exampleFormControlInput1">Email address</label>
				<input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
			</div>
			<div class="form-group">
				<label for="exampleFormControlSelect1">Example select</label>
				<input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
			</div>
		</form>
		</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>