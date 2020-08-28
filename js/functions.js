let numeralMontado = '';

function Alert(message){
	M.toast({html: message, displayLength: 6000})
}

function montarPalavra(palavra){
	numeralMontado = '';

	let alfabeto = ['A','B','C','D','E','F','G','H','I','J','K','L','M', 'N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
	palavra = palavra.split("");

	palavra.map((elem) => {
		alfabeto.map((elemA, i) => {
			if (elem.toUpperCase() == elemA) {
				numeralMontado += i;
			}
		})
	})
	
}