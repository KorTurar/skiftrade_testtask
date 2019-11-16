<?php
// Соединямся с БД
$link=mysqli_connect("localhost", "root", "", "regandauth");

if(isset($_POST['submit']))
{
    
    $query = mysqli_query($link,"SELECT user_id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    if($query==false)
    {
        print "Такого логина нет в базе.";
    }	
    $data = mysqli_fetch_assoc($query);

    // Сравниваем пароли
    if($data['user_password'] === md5(md5($_POST['password'])))
    {
        

        
        setcookie("id", $data['user_id'], time()+60*60*24*30);
        setcookie("authorized", 1, time()+60*60*24*30,null,null,null,true); 

        
       echo "<p style='text-align:center;'>Вы авторизованы</p>";
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}
?>