<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bete's salagdos</title>
	<?php
	require 'header.php';
	require 'navigatorInternal.php';
	?>

	<style type="text/css">
		.container{
			margin-top: 150px;
		}
	</style>
</head>
<body>

	<div class="carousel">
		<a class="carousel-item center-align" href="#one!">
			<img src="Images/Produtos/paotradicional.jpg">
			<button class="waves-effect waves-light btn-large pink lighten-1 modal-trigger" href="#modal-lanches">Visualizar</button>
		</a>
		<a class="carousel-item center-align" href="#two!">
			<img src="Images/Produtos/paodoce.jpg">
			<button class="waves-effect waves-light btn-large pink lighten-1 modal-trigger" href="#modal-lanches">Visualizar</button>
		</a>
		<a class="carousel-item center-align" href="#three!">
			<img src="Images/Produtos/paodequeijo.jpg">
			<button class="waves-effect waves-light btn-large pink lighten-1 modal-trigger" href="#modal-lanches">Visualizar</button>
		</a>
		<a class="carousel-item center-align" href="#four!">
			<img src="Images/Produtos/empadafrango.jpg">
			<button class="waves-effect waves-light btn-large pink lighten-1 modal-trigger" href="#modal-lanches">Visualizar</button>
		</a>
		<a class="carousel-item center-align" href="#five!">
			<img src="Images/Produtos/empadapalmito.jpg">
			<button class="waves-effect waves-light btn-large pink lighten-1 modal-trigger" href="#modal-lanches">Visualizar</button>
		</a>
	</div>

	<!-- Modal Structure -->
	<div id="modal-lanches" class="modal">
	  <div class="modal-content">
	    <h4>Pão Tradicional</h4>
	    <p>venha conhecer nossos pães tradionais os melhores da região</p>
	    <p class="center-align"><img src="Images/Produtos/paotradicional.jpg" style="transform: rotate(90deg); width: 200px; height: 200px"></p>
	  </div>
	  <div class="modal-footer">
	  	<div class="row">
	  		<div class="col s4 m4">
	  			<a class="btn-floating btn-large waves-effect waves-light red right" onclick="removeUnity();">
	  				<i class="material-icons">remove</i>
	  			</a> 
	  		</div>
	  		<div class="col s4 m4">
	  			<h3 class="center unidades">0</h3>
	  			<input type="hidden" name="unidades" id="unidades">
	  		</div>
	  		<div class="col s4 m4">
	  			<a class="btn-floating btn-large waves-effect waves-light red left" onclick="addUnity();">
	  				<i class="material-icons">add</i>
	  			</a>
	  		</div>
	  	</div>
	  	<div class="row">
	  		<div class="col s4 m4"></div>
	  		<div class="col s4 m4">
	  			<h3 class="center amount">R$ 0,00</h3>
	  			<input type="hidden" name="amount" id="amount">
	  		</div>
	  		<div class="col s4 m4"></div>
	  	</div>
	  </div>
	</div>

	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="Jquery/jquey-plugins/dist/jquery.mask.js"></script>
	<script type="text/javascript" src="Jquery/jquey-plugins/src/jquery.mask.js"></script>
	<script type="text/javascript">
		function addUnity(){
			let unidade = $('#unidades').val() == "" ? 0 : parseInt($('#unidades').val());
			unidade = unidade + 1;

			$('#unidades').val(unidade);
			$('.unidades').html(unidade);
			amount(unidade);
		}

		function removeUnity(){
			let unidade = $('#unidades').val() == "" ? 0 : parseInt($('#unidades').val());

			if (unidade == 0) {
				Alert('Unidade não pode ser menor que 0');
				return;
			}

			unidade = unidade - 1;

			$('#unidades').val(unidade);
			$('.unidades').html(unidade);
			amount(unidade);
		}

		function amount(unidade){
			valor = 12.6;
			valor = valor * unidade;

			valor = valor.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});

			$('#amount').val(valor);
			$('.amount').html(valor);
		}
	</script>
</body>
</html>