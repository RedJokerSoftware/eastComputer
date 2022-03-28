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
<!--cabecalho-->
		<nav class="navbar">
			<div id="header">
				<a href="index.php"><img src="_imagens/bannercabecalho.png" id="headerimg"></a>
		
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
<!--essas quebras sao necessarias para manter o layout-->
<br><br><br><br><br><br><br><br>
<!--fim cabecalho-->

<!--conteudo-->
<center>
	
Login<br>
<div id="cadcliente">
<?php
    require('conexao.php');
    
    // When form submitted, check and create user session.
    if (isset($_POST['usuario'])) {
		$usuario = stripslashes($_REQUEST['usuario']);    // remover barras
        $usuario = mysqli_real_escape_string($conn, $usuario);
        $senha = stripslashes($_REQUEST['senha']);
        $senha = mysqli_real_escape_string($conn, $senha);
		
		// verificar se usuario existe no banco de dados
		$query    = "SELECT * FROM `CLIENTES` WHERE email='$usuario' AND senha='$senha'";
		$result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
		if ($rows == 1) {
            $_SESSION['usuario'] = $usuario;
            // Redirecionar para a pagina de boas vindas
            header("Location: bemvindo.html");
        } else {
            echo "<div id='cadcliente'>
                  <h3>E-mail ou senha incorretos.</h3><br/>
                  <p ><a href='login.php'>Clique aqui para tentar novamente.</a></p>
                  </div>";
        }



	} else {
		?>

	<form method="post" >
		E-Mail:<input id="email" name="usuario" type="text" maxlength="80" required><br>
		Senha:<input id="senha" name="senha" type="password" maxlength="80" required><br>

		<input id = "validar" type = "submit" value = "Entrar"><a href="logincadastro.php"><input id = "validar" type = "button" value = "Novo Usuário" onclick = ></a>
	</form>
</div>

<?php
    }
?>
</center>
</div>
<!--rodape-->

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
			<br><a href="imprensa.php">notícias</a>
			<br><a href="nos.php">Sobre nós</a>
			<br><br>2022 East Computer<br>Uma empresa do grupo RedJoker <img class="rjs" src="_imagens/redjokerlogo.png">
		</div>
			
			
	</div>

<!--fim rodape-->
	
<!--scripts-->
		<script src="_javascript/main.js"></script>  
		<script src="_javascript/cadclien.js"></script> 
<!--fim scripts-->
	</body>
</html>