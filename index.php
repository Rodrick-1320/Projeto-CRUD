<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Projeto de Vendas</title>

	<script src="Vendascalc.js"></script>
	<link rel="stylesheet" href="Vendasstyle.css">

</head>

<body>

	<header>

		<h1>Controle de Vendas e Estatísticas</h1>

	</header>

	<main>

		<div class="title">
			<h2>Produtos</h2>
			<span>Lista de Produtos</span>
		</div>

		<div class="card">
			<form method="post" action="send-data.php">

				<div class="lineInput">
					<label>Produto</label>
					<input type="text " name="prdt" id="produto" placeholder="Nome do Produto">
				</div>

				<div class="lineInput">
					<label>Valor</label>
					<input type="number " name="val" id="valor" placeholder="Valor do Produto">
				</div>

				<div class="lineInput">
					<label>Quantidade Vendida M1</label>
					<input type="number " name="qt1" id="quantidade1" placeholder="Quantidade de Produtos">
				</div>

				<div class="lineInput">
					<label>Quantidade Vendida M2</label>
					<input type="number" name="qt2" id="quantidade2" placeholder="Quantidade de Produtos">
				</div>



				<button onclick="produto.salvar()">Salvar</button>
				<button type="submit">Enviar</button>
			</form>
		</div>

		<div class="content">
			<table border="1">
				<thead>

					<th class="center">ID</th>
					<th class="center">Nome</th>
					<th class="center">Valor</th>
					<th class="center">Quantidade M1</th>
					<th class="center">Quantidade M2</th>
					<th class="center">Valor Total Vendido</th>
					<th class="center">Relação Intermês</th>

				</thead>
				<tbody id="tbody">

				</tbody>
			</table>
		</div>

	</main>

</body>

</html>

<?php

// @$nome = $_POST['prdt'];
// @$val = $_POST['val'];
// @$qt1 = $_POST['q1'];
// @$qt2 = $_POST['q2'];

// $vl = intval($val);
// $qtd1 = intval($qt1);
// $qtd2 = intval($qt2);

// $v = (($qtd1 + $qtd2) * $vl);
// $vt = strval($v);

// $rint = (($qtd2 * 100) / $qtd1);
// $rin = intval($rint);

// if ($rin >= 100) {
// 	$r = ($rin - 100);
// 	//$r =  " + " + ($rin - 100) + " % ";
// } else {
// 	$r = ($rin - 100) + " % ";
// }

// $ri = strval($r);


// $servername = "localhost";
// $database = "loja";
// $passw = "";
// $username = "root";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $database);

// // Check connection
// if (!$conn) {
// 	die("Connection failed: " . mysqli_connect_error());
// }

// echo "Connected successfully";

// $sql = "INSERT INTO produtos (id, nome, val, qt1, qt2, vt, ri) VALUES ('',$nome,$val,$qt1, $qt2, $vt, $ri )";

// if (mysqli_query($conn, $sql)) {
// 	echo "New record created successfully";
// } else {
// 	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);

?>