<!DOCTYPE html>
<!-- <meta charset="UTF-8"> -->
<?php include("db.php")?>

<html>
<head>
	<title>CRUD PHP & MySQL</title>
	<meta charset="UTF-8">
</head>

<body>
<form method="POST" action="Crea_grup.php">
		<label>Codi:</label><br>
			<input type "number" name="id" placeholder="escriu codi grup"><br>
		<label>Nom:</label><br>
			<input type "text" name="nom" placeholder="escriu nom grup"><br>
		<label>Origen:</label><br>
			<input type "text" name="origen" placeholder="escriu origen grup"><br>
		<label>Any:</label><br>
			<input type "number" name="anyFundacio" placeholder="escriu any fundacio grup"><br>

			<input type = "submit" name ="insert" value="INSERIR DADES">
</form>
<br>

<table width="500" border="2" style = "background-color=#F9F9F9">
		<tr>
			<th>ID</th>
			<th>NOM</th>
			<th>Origen</th>
			<th>Any Fundacio</th>
			<th>Editar</th>
			<th>Borrar</th>
		</tr>

		<?php 
			$consulta="SELECT * FROM grups;";
			$executar=mysqli_query($con,$consulta);
			$i=0;
		
			while($fila=mysqli_fetch_array($executar)){
				$id= $fila['id'];
				$nom= $fila['nom'];
				$origen= $fila['origen'];
				$anyFundacio= $fila['anyFundacio'];

				$i++;
		?>

		<tr align="center">
			<td><?php echo $id; ?></td>
			<td><?php echo $nom; ?></td>
			<td><?php echo $origen; ?></td>
			<td><?php echo $anyFundacio; ?></td>
			<td><a href= "update.php?editar=<?php echo $id; ?>">Editar</a></td>
			<td><a href= "delete.php?borrar=<?php echo $id; ?>">Borrar</a></td>

		</tr>
		<?php } ?>

	</table>

</html>