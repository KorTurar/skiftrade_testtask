<?php
// Соединямся с БД
$link=mysqli_connect("localhost", "root", "", "skiftrade_testtask");

if(isset($_POST['submit']))
{
    
    $query = mysqli_query($link,"SELECT id, password, email, role FROM users WHERE username='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    if($query==false)
    {
        print "Такого логина нет в базе.";
    }	
    $data = mysqli_fetch_assoc($query);

    // Сравниваем пароли
    if($data['password'] === md5(md5($_POST['password'])))
    {
        if($data['role']=="client")
        {
            //setcookie("id", $data['id'], time()+60*60*24*30);
            //setcookie("authorized", 1, time()+60*60*24*30,null,null,null,true); 

            $query = mysqli_query($link,"SELECT id, theme, request, sendtime FROM requestsandanswers WHERE username='".mysqli_real_escape_string($link,$_POST['login'])."'");
            include "clientPage.php";       
        //echo "<p style='text-align:center;'>Вы авторизованы</p>";
        }

        
        
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}
?>