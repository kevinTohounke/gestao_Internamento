<html>
<head>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

		<label>Nome</label>
	<input type="text" name="nome"><br>
	<label>Idade</label>
	<input type="text" name="idade"><br>
	<label>Sexo</label>
	<input type="text" name="sexo"><br>
	<label>Endereco</label>
	<input type="text" name="endereco"><br>
	<label>Estado</label>


	<select name="estado" id="estado">
  <option value="terapia intensiva">Terapia intensiva</option>
  <option value="terapia intermediaria">Terapia intermediaria</option>
  <option value="enfermaria">Enfermaria</option>

</select><br>

	<label>Operado</label>
<select name="operado" id="operado">
  <option value="sim">sim</option>
  <option value="nao">nao</option> </select>

	


	<button type="submit" name="guardar">Cadastrar</button>
	</form>
</body>
</html>

