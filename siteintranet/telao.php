<!DOCTYPE html>
<html>
<!--essa tela do site fica no telão da fábrica para orientar os funcionários-->



	<head>
		<meta http-equiv="refresh" content="300">
		<title>East Computer intranet</title>
	
	</head>
	<body>
<center>East Computer Intranet</center>
<hr>
<!--criar tabela com pedidos para serem processados-->
<center>
<table style="width:90%">


<tr>
	<td style="width:50%">ID PEDIDO</td><td style="width:50%"> Situação </td>
</tr>

<?php
require('conexao.php');

$query    = "SELECT * FROM pedidos where situacao like 'confirmado' or situacao like 'em processo' order by situacao desc";
		$result = mysqli_query($conn, $query);

		while ($row = mysqli_fetch_assoc($result)) {
                   echo "<tr>";
                   echo "<td>".$row['idpedido']."</td>";

		   if(strpos($row['situacao'], 'confirmado') !== false){
                 	  echo "<td bgcolor='greenyellow'>".$row['situacao']."</td>";
		   }else{
		    	  echo "<td bgcolor='yellow'>".$row['situacao']."</td>";
		   }
                   echo "</tr>";
        }

?>

</table>
</center>



<!--a pagina atualiza automaticamente a cada 5 minutos-->
		<script>
		setInterval(function() {
          	        window.location.reload();
          	      }, 300000); 
	
		</script>
	</body>
</html>