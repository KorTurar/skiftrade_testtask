<?php
	$link=mysqli_connect("localhost", "root", "", "skiftrade_testtask");

	if(isset($_POST['submit']))
	{
    	
    $query = mysqli_query($link,"INSERT INTO requestsandanswers SET username='".$_POST['login']."', theme='".$_POST['theme']."', request='".$_POST['request']."', sendDateAndTime=NOW()");/**/
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