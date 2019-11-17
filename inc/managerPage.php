<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">

	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/managerPageScript.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/managerPageStyle.css">
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
        <div class="requestsHeadingDiv">
		  <h1 class="requestsHeading">Все запросы</h1>
        </div>
		<?php 
			if(mysqli_num_rows($requestsQuery) == 0)
    		{	
    			echo "<p>Запросов нет</p>";
    		}
    		else
    		{	
    			
    			while ($row = mysqli_fetch_assoc($requestsQuery)) 
    			{
    				$emailQuery = mysqli_query($link,"SELECT email FROM users WHERE username='".$row['username']."' LIMIT 1");
					$emailRow = mysqli_fetch_assoc($emailQuery);
					
    				echo "<article class='reqArt'>"; 
    				echo "<span class='id'>id: ".$row["id"]."</span><span class='username'>Отправил: ".$row['username']."</span><span class='email'>Почта: ".$emailRow['email']."</span><span class='sendTime'>Дата и время отправки: ".$row["sendDateAndTime"]."</span>";
    				echo "<h2 class='theme'>Тема: ".$row["theme"]."</h2>";
    			    echo "<p class='requestBody'>".$row["request"]."</p>";

    			    echo "<span class='shortenedRequest'>".substr($row["request"], 0, 20)."......"."</span>";
    			    if ($row["answer"]!=null)
    			    {	
    			    	 echo "<span class='answeredStatusY'>Вы ответили</span>";
    			    }
    			    else
    			    {
    			    	echo "<span class='answeredStatusN'>Вы не ответили</span>";
    			    }
    			    echo "<div  class='answerDiv'>";
    			    if ($row["answer"]!=null)
    			    {
    			    	
    			    	echo "<h2 class='answerHeading'>Ответ</h2>";
    			    	echo "<p class='answerBody'>".$row["answer"]."</p>";
    			    	
    			    }
    			    else
    			    {
    			    	echo "<button class='answerBtn'>Ответить</button>";
    			    }
    			    echo "</div>";
    			    echo "<button class='showReqBtn'>Просмотреть</button>";
    			    echo "<button class='hideReqBtn'>Свернуть</button>";
    			    echo "</article>";
    			}
    			
    		}

		?>
		<div class="requestAnswerDiv">
			<form class="requestSendForm" method="post" action="requestAnswer.php" enctype="multipart/form-data">

					<input type="text" name="managerName" class="loginInput" value=<?php echo $_POST['login'];?> >
					<input type="text" name="id" class="idInput">
					<textarea name="answer" class="answerInput" placeholder="Ваш ответ" cols="45" rows="10" required></textarea>
									
					<input type="submit" name="submit" class="submit" value="Отправить">
					

			</form>
		</div>	
	</section>
		
</body>
</html>



