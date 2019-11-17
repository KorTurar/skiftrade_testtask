<?php
	$link=mysqli_connect("localhost", "root", "", "skiftrade_testtask");
	mysqli_query($link, "SET NAMES 'utf8'");

	if(isset($_POST['submit']))
	{
    	/*
    	$dateQuery = mysqli_query($link,"SELECT MAX(sendDateAndTime) FROM requestsandanswers WHERE username='".$_POST['login']."'");
    	$date= mysqli_fetch_assoc($dateQuery);
    	
    	$dateArray=explode(" ", $date['MAX(sendDateAndTime)']);
    	echo $dateArray[0];
    	echo date("Y-m-d");
    	if($dateArray[0]!=date("Y-m-d"))
    	{
    		 $query = mysqli_query($link,"INSERT INTO requestsandanswers SET username='".$_POST['login']."', theme='".mysqli_real_escape_string($link,$_POST['theme'])."', request='".mysqli_real_escape_string($link,$_POST['request'])."', sendDateAndTime=NOW()");
		    if($query==false)
		    {
		        print "Не удалось записать запрос";
		    }
		    else
		    {
		    	print "Всё записалось";
		    }	
    	}
    	else
    	{
    		print "Вы уже оставляли запрос сегодня";
    	}*/


        if (isset($_FILES['userfile']))
        {
            
            $uploaddir = '../uploads/';
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
            move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
            
            $query = mysqli_query($link,"INSERT INTO requestsandanswers SET username='".$_POST['login']."', theme='".mysqli_real_escape_string($link,$_POST['theme'])."', request='".mysqli_real_escape_string($link,$_POST['request'])."', sendDateAndTime=NOW(), fileName='".$_FILES['userfile']['name']."'");
            if($query==false)
            {
                print "Не удалось записать запрос";
            }
            else
            {
                print "Всё записалось";
            }   
        }
        else
        {
            $query = mysqli_query($link,"INSERT INTO requestsandanswers SET username='".$_POST['login']."', theme='".mysqli_real_escape_string($link,$_POST['theme'])."', request='".mysqli_real_escape_string($link,$_POST['request'])."', sendDateAndTime=NOW()");
            if($query==false)
            {
                print "Не удалось записать запрос";
            }
            else
            {
                print "Всё записалось";
            }   
        }
        /**/
       

	}
?>