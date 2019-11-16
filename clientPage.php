<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">

	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				 <div class="bg-primary col-lg-12">
				 	<p>
						<?php echo $_POST['login']?>
					</p>
				 </div>
			</div>
	 	</div>
	</header> 
	<section>
		<h1 class="requestsHeading">Ваши Запросы</h1>
		<?php 
			if(mysqli_num_rows($query) == 0)
    		{	
    			echo "<p>У вас нет запросов</p>";
    		}
    		else
    		{	
    			echo "<article>"; 
    			while ($row = mysqli_fetch_assoc($query)) 
    			{
    				echo "<h2 class='theme'>".$row["theme"]."</h2>";
    			    echo "<p class='requestBody'>".$row["request"]."</p>";
    			}
    			echo "</article>";
    		}

		?>
		
	</section>
</body>
</html>



