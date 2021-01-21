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
				<main class="slider">
				<section class="slider__container">
				  <button
					class="slider__button slider__button--prev"
					data-button-prev
				  ></button>
				  <figure class="slide" data-slide></figure>
				  <button
					class="slider__button slider__button--next"
					data-button-next
				  ></button>
				</section>
				</main>
			
			  <script src="public/js/slide.js"></script>
			  <script>
				const imageArr = [
				  '/public/img/1.jpg',
				  '/public/img/2.jpg',
				  '/public/img/3.jpg',
				  '/public/img/4.jpg',
				  '/public/img/5.jpg',
				];
		  
				const slider = new Slider(imageArr);
				slider.initializeSlider();
			  </script>		
			</div>	
		</div>
	</body>
</html>