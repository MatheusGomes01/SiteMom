function validarEmail(email){
	return /^[\w+.]+@\w+\.\w{2,}(?:\.\w{2})?$/.test(email);
}


function validarSenha(password){

	let retorno = false;
	let letrasMaiusculas = /[A-Z]/;
	let letrasMinusculas = /[a-z]/; 
	let numeros = /[0-9]/;
	let caracteresEspeciais = /[!|@|#|$|%|^|&|*|(|)|-|_]/;

	if(password.length < 8){
		return retorno;
	}

	let auxMaiuscula = 0;
	let auxMinuscula = 0;
	let auxNumero = 0;
	let auxEspecial = 0;

	for(var i = 0 ; i < password.length; i++){

		if(letrasMaiusculas.test(password[i]))
			auxMaiuscula++;
		else if(letrasMinusculas.test(password[i]))
			auxMinuscula++;
		else if(numeros.test(password[i]))
			auxNumero++;
		else if(caracteresEspeciais.test(password[i]))
			auxEspecial++;
	}

	if (auxMaiuscula > 0){
		if (auxMinuscula > 0){
			if (auxNumero > 0){
				if (auxEspecial) {
					retorno = true;
				}
			}
		}
	}

	return retorno;
}

function validarCPF(strCPF) {

	var numeros, digitos, soma, i, resultado, digitos_iguais;
	cpf = strCPF.replace(/[.|-]/g,'');

	digitos_iguais = 1;

	if (cpf.length < 11){
		Toast('CPF Inválido');
		return false;
	}
		
	for (i = 0; i < cpf.length - 1; i++)
		if (cpf.charAt(i) != cpf.charAt(i + 1)){
			digitos_iguais = 0;
			break;
		}

		if (!digitos_iguais)
		{
			numeros = cpf.substring(0,9);
			digitos = cpf.substring(9);
			soma = 0;
			for (i = 10; i > 1; i--)
			{
				soma += numeros.charAt(10 - i) * i;
			}

			resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;

			if (resultado != digitos.charAt(0)){
				Toast('CPF Inválido');
				return false;
			}

			numeros = cpf.substring(0,10);
			soma = 0;

			for (i = 11; i > 1; i--){
				soma += numeros.charAt(11 - i) * i;
			}

			resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
			
			if (resultado != digitos.charAt(1)){
				Toast('CPF Inválido');
				return false;
			}

			return true;
		}
		else{
			Toast('CPF Inválido');
			return;
		}
	}