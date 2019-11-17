<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">

	<title>Document</title>
	
	<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="../css/clientPageStyle.css">
</head>
<body>
	<header>
		<div class="userName">
		 	<p>
				<?php echo $_POST['login'];?>
			</p>
		</div>
			
	</header> 
	<section class="requestsSec">
		<div class="requestHeadingDiv">
			<h1 class="requestsHeading">Ваши запросы</h1>
		</div>
		<?php 
			if(mysqli_num_rows($requestsQuery) == 0)
    		{	
    			echo "<p class='noRequestsPar'>У вас нет запросов</p>";
    		}
    		else
    		{	
    			
    			while ($row = mysqli_fetch_assoc($requestsQuery)) 
    			{
    				echo "<article class='reqArt'>"; 
    				echo "<span class='id'>id: ".$row["id"]."</span><span class='sendTime'>Дата и время отправки: ".$row["sendDateAndTime"]."</span>";
    				echo "<h2 class='theme'>Тема: ".$row["theme"]."</h2>";
    			    echo "<p class='requestBody'>".$row["request"]."</p>";
    			     if ($row["answer"]!=null)
    			    {
    			    	echo "<h2 class='answerHeading'>Ответ</h2>";
    			    	echo "<p class='answerBody'>".$row["answer"]."</p>";
    			    }
    			    echo "</article>";
    			}
    			
    		}

		?>
		
	</section>
	<section class="feedbackSec">
		<div class="contactHeadingDiv">
			<h2 class="contactHeading">Обратная связь</h2>
		</div>
	<?php
		$dateQuery = mysqli_query($link,"SELECT MAX(sendDateAndTime) FROM requestsandanswers WHERE username='".$_POST['login']."'");
    	$date= mysqli_fetch_assoc($dateQuery);
    	
    	$dateArray=explode(" ", $date['MAX(sendDateAndTime)']);
    	
    	if($dateArray[0]!=date("Y-m-d"))
		{
    	echo "<div class='formDiv'>";
		echo "<form class='requestSendForm' method='post' action='requestReceive.php' enctype='multipart/form-data'>";
		echo "<input type='text' name='login' class='loginInput' value=".$_POST['login'].">";
		echo "<input type='text' name='theme' class='themeInput' placeholder='Введите тему' required>";
		echo "<textarea name='request' class='requestInput' placeholder='Ваш запрос' cols='45' rows='10' required></textarea>";
		echo "<input type='submit' name='submit' class='submit' value='Отправить'></form>";
		echo "</div>";


		
		}
		else
		{
			echo "<div class='noPermissionDiv'><span class='noPermission'>Вы уже оставляли запрос сегодня</span></div>";
		}
	?>

	</section>
</body>
</html>



