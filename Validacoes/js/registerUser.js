function validarUsuario(){

	let nome = $('#nome').val();
	let nascimento = $('#nascimento').val();
	let cpf = $('#cpf').val();
	let email = $('#email').val();
	let senha = $('#senha').val();
	let repetir_senha = $('#repetir-senha').val();
	let cep = $('#cep').val();
	let rua = $('#rua').val();
	let bairro = $('#bairro').val();
	let cidade = $('#cidade').val();
	let estado = $('#estado').val();
	let numero = $('#numero').val();
	let telefone = $('#telefone').val();

	if (nome == '') {
		Alert('Preencher o campo nome');
		return;
	}else if (nascimento == '') {
		Alert('Preencher o campo nascimento');
		return;
	}else if (cpf == '') {
		Alert('Preencher o campo CPF');
		return;
	}else if (email == '') {
		Alert('Preencher o campo email');
		return;
	}else if (senha == '') {
		Alert('Preencher o campo senha');
		return;
	}else if (repetir_senha == '') {
		Alert('Preencher o campo repetir senha');
		return;
	}else if (cep == '') {
		Alert('Preencher o campo cep');
		return;
	}else if (numero == '') {
		Alert('Preencher o campo número');
		return;
	}else if (telefone == '') {
		Alert('Preencher o campo telefone');
		return;
	}else if(senha != repetir_senha){
		Alert('Os campos senha e repetir senha não estão iguais, verificar');
		return;
	}else if(!validarCPF(cpf)){
		Alert('O campo CPF está inválido');
		return;
	}else if(cepInvalido){
		Alert('O campo CEP está inválido');
		return;
	}

	$('#registerUser').submit();

}