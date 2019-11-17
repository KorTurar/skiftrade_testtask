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

	/*$('.closeFormBtn').click(function()
		{
			
			$('.requestAnswerDiv').css('display', 'none');
			var parent=$(this).parent().parent().parent();
			var button=$(parent).children()[6];
			$(button).css('display','block');
		});*/

	
	/*
	$('.requestBody').each(function (index){
		$('.requestBody').css('display', 'none');
		var shortenedText=$(this).text().substr(0,20)+".....";
		var shortenedP=$('<span>', { class: "shortenedRequest", text: shortenedText});
		$(this).after($(shortenedP));
		var answeredStatusN=$('<span>', { class: "answeredStatus", text: "Вы не ответили"});
		var answeredStatusY=$('<span>', { class: "answeredStatus", text: "Вы ответили"});
		if ($($(this).next().next().next().children()[0]).hasClass("answerHeading"))
		{
			$(shortenedP).after(answeredStatusY);
			//$(this).next().next().next().css('display', 'none');
		}
		else
		{
			$(shortenedP).after(answeredStatusN);
		}
		//$(this).parent().append($('<button>', { class: "showBtn", text: "Просмотреть"}));
	});*/
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
		$($(this).parent().children()[9]).css('display', 'block');

		
	})
});