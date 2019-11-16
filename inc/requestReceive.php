<?php
	$link=mysqli_connect("localhost", "root", "", "skiftrade_testtask");

	if(isset($_POST['submit']))
	{
    	
    $query = mysqli_query($link,"INSERT INTO requestsandanswers SET username='".$_POST['login']."', theme='".mysqli_real_escape_string($link,$_POST['theme'])."', request='".mysqli_real_escape_string($link,$_POST['request'])."', sendDateAndTime=NOW()");/**/
	    if($query==false)
	    {
	        print "Не удалось записать запрос";
	    }
	    else
	    {
	    	print "Всё записалось";
	    }	
	}
?>