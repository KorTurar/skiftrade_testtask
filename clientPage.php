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
		<div class="requestsDiv">
		<?php 
			if(mysqli_num_rows($query) == 0)
    		{	
    			echo "<p>У вас нет запросов</p>";
    		}
    		else
    		{	
    			echo "<ul>"; 
    			while ($row = mysqli_fetch_assoc($query)) 
    			{
    			    echo "<li>".$row["request"]."</li>";
    			}
    			echo "</ul>";
    		}

		?>
		</div>
	</section>
</body>
</html>



