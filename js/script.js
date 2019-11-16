 $(document).ready(function(){
	$('.reg').click(function()
		{
			$('#auth').css('display', 'none');
			$('#registration').css('display', 'block');
		});

		$('.auth').click(function()
		{
			$('#auth').css('display', 'block');
			$('#registration').css('display', 'none');
		});
});