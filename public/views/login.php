<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<title>Clepardia</title>
		<meta name="description" content="Clepardia Kraków" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
			
		<link rel="stylesheet" href="public/css/style.css" type="text/css" />

		<link href="https://fonts.googleapis.com/css?family=Lato:400,700&amp;subset=latin-ext" rel="stylesheet"> 
	</head>

	<body>
		<div id="container">
		
			<div id="title">
				<img src="public/img/strona_gl.jpg" alt="Zdjecie głowne" width= "1150px" style="padding: 20px;">
			</div>
			
			<div class="menu">
				<ol class="menuu">
					<li><a href="main">Aktualności</a></li>
					<li><a href="seniorzy">Seniorzy</a></li>
					<li><a href="inne_sekcje">Pozostałe sekcje</a></li>
					<li><a href="basen">Basen</a></li>			
					<li><a href="Kontakt">Kontakt</a></li>
					<li><a href="login">Zaloguj się</a></li>
				</ol>
			</div>
			
			<div id="content">
			<br>
				<div class="login-container">
					<form class="login" action="login" method="POST">
						<?php
								if(isset($messages))
								{
									foreach($messages as $message) 
									{
										echo $message;
									}
									exit;
								}
						?>
						<input name="email" type="text" placeholder="email@email.com">
						<input name="password" type="password" placeholder="password">
						<a href="register">Nie masz konta? Zarejestruj się</a>
						<button type="submit">LOGIN</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html> 
