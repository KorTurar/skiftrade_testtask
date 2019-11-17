<?php
	$link=mysqli_connect("localhost", "root", "", "skiftrade_testtask");
	mysqli_query($link, "SET NAMES 'utf8'");

	if(isset($_POST['submit']))
	{
    	var_dump($_POST);
    $query = mysqli_query($link,"UPDATE requestsandanswers SET answer = '".mysqli_real_escape_string($link,$_POST['answer'])."', managerName = '".$_POST['managerName']."' WHERE id = ".$_POST['id']);


    /*"INSERT INTO requestsandanswers SET username='".$_POST['login']."', theme='".mysqli_real_escape_string($link,$_POST['theme'])."', request='".mysqli_real_escape_string($link,$_POST['request'])."', sendDateAndTime=NOW()"*/
	    if($query==false)
	    {
	        print "Не удалось записать ответ";
	    }
	    else
	    {
	    	print "Всё записалось";
	    }	/**/
	}
?>