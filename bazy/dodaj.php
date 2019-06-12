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
                <span >Dodaj </span> <span>usługę</span>
            </div>
		</div>
		<div class="nav">
			<ol>
			
			<li><a href="index.html">Strona Główna</a></li>
			<li><a href="dodaj.html">Dodaj Rezerwację</a></li>
				<li><a href="rezerwacje.html"> Znajdź rezerwację</a></li>
				<li><a href="edytuj.html"> Edytuj rezerwację</a></li>
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
				
				$imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $Pesel = $_POST['pesel'];
                $datapocz = $_POST['datapocz'];
				$datakon = $_POST['datakon'];
				$tel = $_POST['tel'];
				$idg = $_POST['idg'];
				$nrpokoj = $_POST['nrpokoj'];
				$losob = $_POST['losob'];
				$rezerwacja = $_POST['rezerwacja'];
				$oplacono = $_POST['oplacono'];
				$idp = $_POST['idp'];
				

					$sql = "INSERT INTO gosc(idg,imie,nazwisko,pesel,telefon)
					VALUES
					('$idg','$imie','$nazwisko','$Pesel','$tel')";

						if ($conn->query($sql) === TRUE) {
							echo "Dodano nowego gościa";
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}


					$sql2 = "INSERT INTO pobyt(idp,g_id,datapocz,datakon,nrpokoj,liczba_osob,oplacono,nrrezerwacja)
					VALUES
					('$idg','$idg','$datapocz','$datakon','$nrpokoj','$losob','$oplacono','$rezerwacja')";


					if ($conn->query($sql2) === TRUE) {
							echo " i datę rezerwacji ";
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}
			
					
					
					
				
					
					
				
					
					

                mysqli_close($conn);
				
            ?>

               <center>Aby wrócić do dodawania kliknij <a href="dodaj.html"> tutaj.</a> </center>
			</p>
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
