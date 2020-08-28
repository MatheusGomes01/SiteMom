function submitRegister(){
	let nome = document.querySelector('#nome');
	let nascimento = document.querySelector('#nascimento');
	let cpf = document.querySelector('#cpf');
	let email = document.querySelector('#email');
	let senha = document.querySelector('#senha');
	let repetir_senha = document.querySelector('#repetir-senha');
	let cep = document.querySelector('#cep');
	let numero = document.querySelector('#numero');
	let telefone = document.querySelector('#telefone');

	if (nome.value.length == 0) {
		Toast("Preencha o campo nome");
		return;
	}

	if (nascimento.value.length == 0) {
		Toast("Preencha o campo nascimento");
		return;
	}

	if (cpf.value.length == 0) {
		Toast("Preencha o campo CPF");
		return;
	}

	if (email.value.length == 0) {
		Toast("Preencha o campo email");
		return;
	}

	if (senha.value.length == 0) {
		Toast("Preencha o campo senha");
		return;
	}

	if (repetir_senha.value.length == 0) {
		Toast("Preencha o campo repetir senha");
		return;
	}

	if (senha.value != repetir_senha.value) {
		Toast("O campo senha e repetir senha devem ser idênticos");
		return;
	}

	if (cep.value.length == 0) {
		Toast("Preencha o campo CEP");
		return;
	}

	if (numero.value.length == 0) {
		Toast("Preencha o campo numero");
		return;
	}

	if (telefone.value.length == 0) {
		Toast("Preencha o campo telefone");
		return;
	}

	if (!validarEmail(email.value)) {
		Toast("O campo email é inválido");
		return;	
	}

	if (!validarSenha(senha.value)) {
		Toast("A senha deve conter ao menos 8 caracteres, sendo no minímo uma letra maiúscula, uma minúscula, um número e caracter especial");
		return;	
	}

}