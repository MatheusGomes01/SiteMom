<!DOCTYPE html>
<html>
<head>
	<title>Bete's salagdos</title>
	<?php
		require 'header.php';
		require 'navigatorExternal.php';
	?>

	<script type="text/javascript" src="js/registerUser.js"></script>
	<script type="text/javascript" src="js/CEPAPI.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="Validacoes/js/registerUser.js"></script>
	<style type="text/css">
		.container{
			margin-top: 150px;
		}
	</style>
</head>
<body>
	<div class="container center-align">
		<form method="POST" id="registerUser" action="Validacoes/ValidRegisterUser.php">
			<div class="row">
				<div class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">account_circle</i>
							<input type="text" name="nome" id="nome" class="autocomplete">
							<label for="autocomplete-input">Nome Completo</label>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12">
					<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix">date_range</i>
							<input type="text" name="nascimento" id="nascimento" class="datepicker">
							<label for="autocomplete-input">Nascimento</label>
						</div>

						<div class="input-field col s6">
							<i class="material-icons prefix">contact_mail</i>
							<input type="text" name="cpf" id="cpf" class="autocomplete" onblur="validarCPF(this.value)">
							<label for="autocomplete-input">CPF</label>
							<i class="material-icons right tinny tooltipped" data-position="bottom" data-tooltip="Os dados importantes serão criptografados">live_help</i>
						</div>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">email</i>
							<input type="email" name="email" id="email" class="autocomplete">
							<label for="autocomplete-input">Email</label>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12">
					<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix">security</i>
							<input type="password" name="senha" id="senha" class="autocomplete">
							<label for="autocomplete-input">Senha</label>
							<i class="material-icons right tinny tooltipped" data-position="bottom" data-tooltip="A senha deve conter ao menos 8 caracteres, sendo no minímo uma letra maiúscula, uma minúscula, um número e caracter especial">live_help</i>
						</div>

						<div class="input-field col s6">
							<i class="material-icons prefix">security</i>
							<input type="password" name="repetir-senha" id="repetir-senha" class="autocomplete">
							<label for="autocomplete-input">Repetir Senha</label>
							<i class="material-icons right tinny tooltipped" data-position="bottom" data-tooltip="Esta senha deve ser igual a anterior">live_help</i>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">location_on</i>
							<input type="text" name="cep" id="cep" class="autocomplete" size="10" maxlength="9" onblur="pesquisacep(this.value);">
							<label for="autocomplete-input">CEP</label>
							<i class="material-icons right tinny tooltipped" data-position="bottom" data-tooltip="Preencher o CEP de acordo com a sua residência">live_help</i>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12">
					<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix">streetview</i>
							<input type="text" name="rua" id="rua" class="autocomplete" readonly>
							<label for="autocomplete-input" class="cep-add-active">Rua</label>
						</div>

						<div class="row">
							<div class="input-field col s6">
								<i class="material-icons prefix">location_searching</i>
								<input type="text" name="bairro" id="bairro" class="autocomplete" readonly>
								<label for="autocomplete-input" class="cep-add-active">Bairro</label>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12">
					<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix">location_city</i>
							<input type="text" name="cidade" id="cidade" class="autocomplete" readonly>
							<label for="autocomplete-input" class="cep-add-active">Cidade</label>
						</div>

						<div class="input-field col s6">
							<i class="material-icons prefix">location_city</i>
							<input type="text" name="estado" id="estado" class="autocomplete" readonly>
							<label for="autocomplete-input" class="cep-add-active">Estado</label>
						</div>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">format_list_numbered</i>
							<input type="text" name="numero" id="numero" class="autocomplete">
							<label for="autocomplete-input">Número</label>
							<i class="material-icons right tinny tooltipped" data-position="bottom" data-tooltip="Número referente a residência ou apartamento (ex: Bloco A, AP: 15)">live_help</i>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">contact_phone</i>
							<input type="text" name="telefone" id="telefone" class="autocomplete">
							<label for="autocomplete-input">Telefone/Celular</label>
						</div>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col s12">
					<div class="row">
						<button type="button" class="btn waves-effect waves-light" name="action" onclick="validarUsuario()">Enviar
						  <i class="material-icons right">send</i>
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>