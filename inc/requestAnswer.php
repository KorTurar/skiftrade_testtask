<?php
	$link=mysqli_connect("localhost", "root", "", "skiftrade_testtask");
	mysqli_query($link, "SET NAMES 'utf8'");

	if(isset($_POST['submit']))
	{
    	$query = mysqli_query($link,"UPDATE requestsandanswers SET answer = '".mysqli_real_escape_string($link,$_POST['answer'])."', managerName = '".$_POST['login']."' WHERE id = ".$_POST['id']);


    
	    if($query==false)
	    {
	        print "Не удалось записать ответ";
	    }
	    else
	    {
	    	print "Ответ записан";
	    }	/**/
	}
?>