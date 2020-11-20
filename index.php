<!DOCTYPE html>
<html>
	<head>
		<?php
		if($_REQUEST['page']=="")
		{
			echo("<meta http-equiv='refresh' content='0;URL=index.php?page=main'>");
			exit(0);
		}
		?>
		<link rel='stylesheet' type='text/css' href='style.css'>
		<meta charset='utf-8'>
		<title>сайтик</title>
	</head>
		<header>	
				<a class='header' id='main' href='index.php?page=main'>Главная</a>
				<a class='header' href='index.php?page=artists'>Художники</a>
		</header>					
			<div id='content'>
<?php
				switch($_REQUEST['page'])
				{
					case "artists":
					{
						echo
						("
						<p>artists</p>
						<form action='index.php' method='GET'>
							<input name='page' type='hidden' value='main'>	
							<input name='v' type='text'>
							<input type='submit'>
						</form>
						");
						break;
					}
					
					case "main":
					{
						if ( isset( $_REQUEST['v']))
						{
							echo
							("
							<p>main1</p>
							".$_REQUEST['v']."
							");
						}
						break;
					}
						
					default:
					{
						echo
						("
						<div style='background-color:rgba(225,220,220, .6); text-align:center;'>
							<p style='font-size:50px ; color:#555555;'>Ошибка 404</p>
							<p style='font-size:50px ; color:#555555;'>Такойстраницы не существует!</p>
						</div>
						");
					}
				}

?>
			</div>
		<footer>
			<p>Разработано Амиром.Все права защищены.</p>
		</footer>
	</body>
</html>