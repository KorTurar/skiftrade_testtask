<?php
// Соединямся с БД
$link=mysqli_connect("localhost", "root", "", "skiftrade_testtask");

if(isset($_POST['submit']))
{
    
    $query = mysqli_query($link,"SELECT id, password, email, role FROM users WHERE username='".$_POST['login']."' LIMIT 1");
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
            $requestsQuery = mysqli_query($link,"SELECT * FROM requestsandanswers WHERE username='".$_POST['login']."'");
            include "clientPage.php";       
        
        }
        elseif($data['role']=="manager")
        {
            $requestsQuery = mysqli_query($link,"SELECT * FROM requestsandanswers");
            include "managerPage.php";  
        }
        
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}
?>