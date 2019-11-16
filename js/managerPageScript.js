$(document).ready(function(){
	$('.answerBtn').click(function()
		{
			$(this).parent().append($('.requestAnswerDiv'));
			$('.requestAnswerDiv').css('display', 'block');
			$(this).css('display', 'none');
			var parent=$(this).parent();
			var child=$(parent).children()[0];
			var text=$(child).text();
			var id=text.split(" ")[1];
			
			
			$('.idInput').attr('value', id);
		});

	$('.closeFormBtn').click(function()
		{
			
			$('.requestAnswerDiv').css('display', 'none');
			var parent=$(this).parent().parent().parent();
			var button=$(parent).children()[6];
			$(button).css('display','block');
		});
	
});