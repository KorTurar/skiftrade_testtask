$(document).ready(function(){
	$('.answerBtn').click(function()
		{
			$(this).parent().append($('.requestAnswerDiv'));
			$('.requestAnswerDiv').css('display', 'block');
			$(this).css('display', 'none');
			var parent=$(this).parent().parent();
			var child=$(parent).children()[0];
			var text=$(child).text();
			var id=text.split(" ")[1];
			
			
			$('.idInput').attr('value', id);
		});

	$('.showReqBtn').click(function(){
		$($(this).parent().children()[5]).css('display', 'block');
		$($(this).parent().children()[8]).css('display', 'block');
		$($(this).parent().children()[6]).css('display', 'none');
		$($(this).parent().children()[7]).css('display', 'none');
		$($(this).parent().children()[10]).css('display', 'block');
		$($(this).parent().children()[9]).css('display', 'none');

		
	});
	$('.hideReqBtn').click(function(){
		$($(this).parent().children()[5]).css('display', 'none');
		$($(this).parent().children()[8]).css('display', 'none');
		$($(this).parent().children()[6]).css('display', 'inline');
		$($(this).parent().children()[7]).css('display', 'inline');
		$($(this).parent().children()[10]).css('display', 'none');
		$($(this).parent().children()[9]).css('display', 'inline');

		
	})
});