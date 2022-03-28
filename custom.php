<?php
//incluir secao.php em todo o site
include("secao.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="_css/estilo.css">
		<title>East Computer Soluções em Informática</title>
		<link rel="shortcut icon" href="_imagens/icone.png" type="image/x-icon">
	</head>
	<body>

		<div id="holder">
<!--cabeçalho-->
	<nav class="navbar">
		<div id="header">
			<a href="index.php"><img src="_imagens/bannercabecalho.png" id="headerimg"></a>
			<a href="carrinho.php"><img src="_imagens/carrinhobtn.png" id="botaocarro"></a>
			<!--botao de login ou logoff-->

			<?php
  		 		 if (isset($_SESSION["usuario"])) {
			?>
		<a href="logoff.php"><img src="_imagens/sairbtn.png" id="botaologin"></a>
			<?php
				} else {
			?>
		<a href="login.php"><img src="_imagens/loginbtn.png" id="botaologin"></a>
			<?php
     				}
			?>
<!--fim botao de login ou logoff-->

<!--links de topo-->
			<a href="#" class="botaosanduiche" id="botaosanduiche">
				<span class="bar2"></span>
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar2"></span>
				<span class="bar2"></span>	
			</a>

			<div class="secaobotoescabecalho">
			
				<div class="botoescabecalho"><a class="textobotoescabecalho" href="Produtosdomesticos.php">Para casa</a></div>
				<div class="botoescabecalho"><a class="textobotoescabecalho" href="Produtosempresariais.php">Para trabalho</a></div>
				<div class="botoescabecalho"><a class="textobotoescabecalho" href="Suporte.php">Suporte e Downloads</a></div>
				<div class="botoescabecalho"><a class="textobotoescabecalho" href="custom.php">Especiais</a></div>
				<div class="botoescabecalho" onclick="trocartema()"><a class="textobotoescabecalho">trocar tema</a></div>
			</div>
		</div>
	</nav>
<!--essas quebras são necessárias para manter o layout-->
<br><br><br><br><br><br><br><br>
<!--fim cabeçalho-->

<!--conteúdo-->
<?php
if (isset($_GET['m'])) {
    echo $_GET['m'];
	?>
	Escolha sua configuração:<br>
	<form method="post">
 	em construção<br>

	Total:<input type = "text" value = "R$2500,00" readonly><br>
 	<input id = "validar" type = "submit" value = "Adicionar ao Carrinho">
</form>
	<?php
} else {
 
?>

<h1>Soluções personalizadas</h1>

<h3>Escolha de peças para obter uma experiência única.</h3>

Escolha sua configuração:<br>
	<form method="post">
 	em construção<br>

	Total:<input type = "text" value = "R$2500,00" readonly><br>
 	<input id = "validar" type = "submit" value = "Adicionar ao Carrinho">




<?php
}
?>

</div>
<!--rodapé-->

	<div id="footer">
		<div class="divisoesrodape">Endereço<br>
			East Computer Soluções em Informática LTDA.
			<br>Avenida Aricanduva 5131, Aricanduva, São Paulo - SP
			<br>CEP:03527-000
		</div>
		<div class="divisoesrodape">links seções do site
			<br><a href="Produtosempresariais.php">Workstations</a>
			<br><a href="Produtosdomesticos.php">Computadores domésticos</a>
			<br><a href="Suporte.php">Suporte e downloads</a>
		</div>
		<div class="divisoesrodape">Links de sites de terceiros
			<br><a href="http://www.intel.com">Intel</a>
			<br><a href="http://www.amd.com">AMD</a>
			<br><a href="http://www.nvidia.com">Nvidia</a>
		</div>
		<div class="divisoesrodape">outros
			<br><a href="imprensa.php">Notícias</a>
			<br><a href="nos.php">Sobre nós</a>
			<br><br>2022 East Computer<br>Uma empresa do grupo RedJoker <img class="rjs" src="_imagens/redjokerlogo.png">
		</div>
			
			
	</div>

<!--fim rodapé-->
	
<!--scripts-->
		<script src="_javascript/main.js"></script>
<!--fim scripts--> 
	</body>
</html>