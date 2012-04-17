$(document).ready(function(){
	$('#ticket_name').blur(function(){
		$.post(
			'http://localhost:8080/meroticket/tickets/validate_form',
			{field:$('#ticket_name').attr('id'),value:$('#ticket_name').val()},
			handleNameValidation
		);
		
	})
	$('#price').blur(function(){
		$.post(
			'http://localhost:8080/meroticket/tickets/validate_form',
			{field:$('#price').attr('id'),value:$('#price').val()},
			handlePriceValidation
		);
		
	})
	function handleNameValidation(error){
		if(error.length>0){
			if($('#ticket_name-notEmpty').length == 0){
				$('#ticket_name').after('<div id="ticket_name-notEmpty" class="error-message">'+error+'</div>');
			}
		}else{
			$('#ticket_name-notEmpty').remove();
		}
	}
	function handlePriceValidation(error){
		if(error.length>0){
			if($('#price-notEmpty').length == 0){
				$('#price').after('<div id="price-notEmpty" class="error-message">'+error+'</div>');
			}
		}else{
			$('#price-notEmpty').remove();
		}
	}
})