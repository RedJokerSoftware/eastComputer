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

Cadastro de Clientes<br>
<div id="cadcliente">

<?php
    require('conexao.php');
    if (isset($_REQUEST['email'])) {


        $cpf = stripslashes($_REQUEST['cpf']);
        $cpf = mysqli_real_escape_string($conn, $cpf);
		$nome = stripslashes($_REQUEST['nome']);
        $nome = mysqli_real_escape_string($conn, $nome);
		$telefone = stripslashes($_REQUEST['telefone']);
        $telefone = mysqli_real_escape_string($conn, $telefone);
		$cep = stripslashes($_REQUEST['cep']);
        $cep = mysqli_real_escape_string($conn, $cep);
		$rua = stripslashes($_REQUEST['rua']);
        $rua = mysqli_real_escape_string($conn, $rua);
		$complemento = stripslashes($_REQUEST['complemento']);
        $complemento = mysqli_real_escape_string($conn, $complemento);
		$bairro = stripslashes($_REQUEST['bairro']);
        $bairro = mysqli_real_escape_string($conn, $bairro);
		$cidade = stripslashes($_REQUEST['cidade']);
        $cidade = mysqli_real_escape_string($conn, $cidade);
		$estado = stripslashes($_REQUEST['estado']);
        $estado = mysqli_real_escape_string($conn, $estado);
		$numero = stripslashes($_REQUEST['numero']);
        $numero = mysqli_real_escape_string($conn, $numero);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn, $email);
        $senha = stripslashes($_REQUEST['senha']);
        $senha = mysqli_real_escape_string($conn, $senha);

       
        $query    = "insert into `clientes` (cpf,nome,telefone,cep,rua,bairro,cidade,estado,numero,complemento,email,senha)
		             VALUES ('$cpf','$nome','$telefone','$cep','$rua','$bairro','$cidade','$estado','$numero','$complemento','$email', '$senha')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Conta criada com sucesso.</h3><br/>
                  <p class='link'><a href='login.php'>Clique aqui para entrar </a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>erro ao cadastrar.</h3><br/>
                  <p class='link'><a href='logincadastro.php'>clique aqui para tentar novamente.</a></p>
                  </div>";
        }
    } else {
?>


<form method="post">
Nome: <input id="nome" name="nome" type="text" size="30" maxlength="80" required><br>
CPF: <input id="cpf" name="cpf" type="text" size="14" maxlength="14" required><br>
Telefone: <input id="tel" name="telefone" type="text" size="11" maxlength="11" required><br>
Endereço:<br>
CEP: <input id="CEP" name="cep" type="text" size="10" maxlength="9" onblur="pesquisacep(this.value)"><br>
Rua:<input id="rua" name="rua" type="text" size="20" maxlength="80" readonly>  número: <input id="endnumero" name="numero" type="text" size="5" maxlength="5" required><br>
Complemento:<input id="endcomplemento" name="complemento" type="text" maxlength="80"><br>
Bairro:<input id="endbairro" name="bairro" type="text"  readonly><br>
Cidade:<input id="endcidade" name="cidade" type="text"  readonly><br>
Estado:<input id="endestado" name="estado" type="text"  readonly><br>
<br><br>Conta de usuário<br><br>
E-Mail:<input id="email" name="email" type="text" maxlength="80" required><br>
Senha para esse site:<input id="senha" name="senha" type="password" maxlength="80" required><br>
	<br><br><center>
	<input id = "validar" type = "submit" value = "Cadastrar cliente">
</form>
</center>

<?php
    }
?>

</div>

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
		<script src="_javascript/cadclien.js"></script> 
<!--fim scripts-->
	</body>
</html>