<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">

	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/clientPageStyle.css">
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				 <div class="userName col-lg-12">
				 	<p>
						<?php echo $_POST['login'];?>
					</p>
				 </div>
			</div>
	 	</div>
	</header> 
	<section>
		<h1 class="requestsHeading">Ваши запросы</h1>
		<?php 
			if(mysqli_num_rows($query) == 0)
    		{	
    			echo "<p>У вас нет запросов</p>";
    		}
    		else
    		{	
    			
    			while ($row = mysqli_fetch_assoc($requestsQuery)) 
    			{
    				echo "<article>"; 
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
	<section>
		<h2 class="contactHeading">Обратная связь</h2>
		<form class="requestSendForm" method="post" action="requestReceive.php" enctype="multipart/form-data">

				<input type="text" name="login" class="loginInput" value=<?php echo $_POST['login'];?> >
				<input type="text" name="theme" class="themeInput" placeholder="Введите тему" required>
				<textarea name="request" class="requestInput" placeholder="Ваш запрос" cols="45" rows="10" required></textarea>
								
				<input type="submit" name="submit" class="submit" value="Отправить">


		</form>
	</section>
</body>
</html>



