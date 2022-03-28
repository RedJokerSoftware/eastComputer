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
<table style="width:50%; float:left;">


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

<div style="float:left; width:50%"><br>
Atualizar cadastro de peça:

<form method="post">

<input type="text" name="pesquisa" >

<input type="submit" value="pesquisar">
</form>
	</div><br><br><br><br>
	<hr>
<br>
<!--links para cadastros de máquinas-->
<a href="cadastrocpu.php">cadastrar cpu </a>&nbsp;&nbsp;&nbsp;
<a href="cadastrogpu.php"> cadastrar gpu </a>&nbsp;&nbsp;&nbsp;
<a href="cadastroram.php"> cadastrar memoria ram </a>&nbsp;&nbsp;&nbsp;
<a href="cadastromae.php"> cadastrar placa mae </a>&nbsp;&nbsp;&nbsp;
<a href="cadastrofonte.php"> cadastrar fonte </a>&nbsp;&nbsp;&nbsp;
<a href="cadastrogabinete.php"> cadastrar gabinete </a>&nbsp;&nbsp;&nbsp;
<a href="cadastroperiferico.php"> cadastrar perifericos </a>&nbsp;&nbsp;&nbsp;
		


<!--a pagina atualiza automaticamente a cada 5 minutos-->
		<script>
		setInterval(function() {
          	        window.location.reload();
          	      }, 300000); 
	
		</script>
	</body>
</html>