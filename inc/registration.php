<?php
$link=mysqli_connect("localhost", "root", "", "skiftrade_testtask");

if(isset($_POST['submit']))
{

    $err = [];

    /**/
    if(!preg_match("/^[a-zA-Z0-9_]+$/",$_POST['login']))
    {
        $err[] = "Ваш логин должен состоять только из латиницы и цифр.";
        
    }

    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Ваш логин должен быть иметь не меньше 3-х символов и не больше 30.";
        
    }

    
    $query = mysqli_query($link, "SELECT id FROM users WHERE username='".$_POST['login']."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "Пользователь с таким логином уже есть.";
        
    }

   
    if(count($err) == 0)
    {
       
        $login = $_POST['login'];

        
        $password = md5(md5(trim($_POST['password'])));

        mysqli_query($link,"INSERT INTO users SET username='".$login."', password='".$password."', email='".$_POST['email']."'");
        var_dump($query);
        echo "<br><p style='text-align:center;'>Вы зарегистрированы</p>";
    }
    else
    {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
}
?>