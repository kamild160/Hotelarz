<!DOCTYPE html>
<html lang="pl">
<head>
	
	<meta charset="utf-8"/>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<title>Hotelarz</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Lato|Pangolin" rel="stylesheet">
	<script src="jquery-3.2.1.min.js"></script>
	<script src="galleria/galleria-1.5.1.min.js"></script>
	<script type="text/javascript" src="JS/timer.js"></script>

	
</head>
<body >

	<div class="wrapper">
		<div class="header">
            <div class="logo">
                <div id="clock"></div>
                <span >Dodaaj </span> <span>usługę</span>
            </div>
		</div>
		<div class="nav">
			<ol>
			<li><a href="index.html">Strona Główna</a></li>
				<li><a href="dodaj.html">Dodaj usługę</a></li>
				<li><a href="rezerwacje.html">Rezerwacje</a></li>
				<li><a href="#"><i class="icon-mail"></i>Kontakt</a></li>
			</ol>
		</div>
		<div class="content">
			<br />
			<div style="clear: both;"></div>
			<p>
            <?php
                $servername = "localhost";
                $username = "kamild160";
                $password = "aidaiY6aeyah";
                $dbname = "kamild160_projekt";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if($conn -> connect_error) {
                    die("Connection failed: " . $conn -> connect_error);
                }
				echo "<center> Connected successfully </center>";
				

				

                mysqli_close($conn);
				
            ?>

               <center>Aby wrócić do dodawania kliknij <a href="dodaj.html"> tutaj.</a> </center>
			</p>
		</div>
		<div class="footer">
			<div id="stopki">
				<div class="stopka1">
					hotel_support.pl &copy;
				</div>
			
				<div class="stopka3">
					Tel: 123-456-789
				</div>
				<div class="stopka4">
					Karmazynowa 155/2 
				</div>
				<div style="clear: both;"></div>
			</div>
			
		</div>
		
	</div>
	
	
	<script>

	$(document).ready(function() {
	var NavY = $('.nav').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.nav').addClass('sticky');
	} else {
		$('.nav').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
	</script>
</body>
</html>
