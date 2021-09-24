
var btn = document.getElementById('adcCarro');
var formCarro = document.getElementById('formAdcCarro');

$(btn).on('click', function(){
	$(formCarro).show();
})



$(document).ready(function(){
	$('input.placa').mask("aaa-9a99");
})
