<!DOCTYPE html>
<html>
<head>
	<title>Bete's salagdos</title>
	<?php
	require 'header.php';
	require 'navigatorExternal.php';
	?>

	<style type="text/css">
		.container{
			margin-top: 150px;
		}
	</style>
</head>
<body>
	<div class="container center-align">
		<form method="POST" action="Validacoes/validLogin.php">
			<div class="row">
				<div class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">account_circle</i>
							<input type="text" name="username" id="username" class="autocomplete">
							<label for="autocomplete-input">Usuário</label>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">security</i>
							<input type="password" name="senha" id="senha" class="autocomplete">
							<label for="autocomplete-input">Senha</label>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12">
					<div class="row">
						<button class="btn waves-effect waves-light" type="submit" name="action">Entrar
						  <i class="material-icons right">send</i>
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>