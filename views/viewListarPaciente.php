<html>
<head>
	</head>
	<body>

<table width="50%" border="1" style="border-collapse: collapse; margin-top: 40px;">
		<thead style="text-align: justify;">
			<th>Nome</th><th>Idade</th><th>sexo</th> <th>endereco</th> <th>estado</th><th>operado</th>          </thead>
		<tbody style="color:black;">
	<?php 
	
	foreach($mostra as $value) {
		 print "<tr>

		 <td style='height:30px'>".$value['nome']."</td>
		 <td>".$value['idade']."</td>
		 <td>".$value['sexo']."</td> 
		  <td>".$value['endereco']."</td>
		  <td>".$value['estado']."</td>
		  <td>".$value['operado']."</td>


		    </tr>";
	}

	?>

	</body>
</html>