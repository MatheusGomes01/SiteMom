$(document).ready(function(){
	$('.carousel').carousel();
  	$('.modal').modal();
	$('.sidenav').sidenav();
	$('.dropdown-trigger').dropdown();
	$('.tooltipped').tooltip();
	$('.timepicker').timepicker();
	    $('.datepicker').datepicker({
	     i18n: {
	        months: [
	        'Janeiro',
	        'Fevereiro',
	        'Março',
	        'Abril',
	        'Maio',
	        'Junho',
	        'Julho',
	        'Agosto',
	        'Setembto',
	        'Outubro',
	        'Novembro',
	        'Dezembro'
	        ],

	        monthsShort : [
	        'Jan',
	        'Fev',
	        'Mar',
	        'Abr',
	        'Mai',
	        'Jun',
	        'Jul',
	        'Ago',
	        'Set',
	        'Out',
	        'Nov',
	        'Dez'
	        ],

	        weekdays: [
	        'Dom',
	        'Seg',
	        'Ter',
	        'Qua',
	        'Qui',
	        'Sex',
	        'Sab'
	        ],

	        weekdaysShort: [
	        'Dom',
	        'Seg',
	        'Ter',
	        'Qua',
	        'Qui',
	        'Sex',
	        'Sab'
	        ],

	        weekdaysAbbrev : 
	        ['D','S','T','Q','Q','S','S']

	    }
	});

});

function Toast(write){
	M.toast({html: write, displayLength : 10000})
}