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
				<img src="img/strona_gl.jpg" alt="Zdjecie głowne" width= "1150px" style="padding: 20px;">
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
					<h1>Wygrana z  Orłem Ryczów</h1>
						<div class="post">
						<text>
						Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.<br><br>
						</text>
						<h3>Komentarze</h3><br>

						<?php
							$file = fopen("public/komentarze/mecz2.txt","r");
							$zawartosc = '';

							while(!feof($file))
							{
							$linia = fgets($file);
							echo $linia;
							echo "<br>";
							$linia = '';
							}							
						?>

						<br>
						<form class="koment" action="komentarz.php" method="POST">
							<h3 width="80">komentarz:</h3>
							<textarea name="koment" rows=1 cols=30></textarea>
							<button type="submit">Dodaj</button>
						</form>
			</div>
		</div>
	</body>
</html>