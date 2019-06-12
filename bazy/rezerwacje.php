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

	<style>
			table, th, td {
			  border: 3px solid #a6a6a6;
			  border-collapse: collapse;
			  text_align: center;
			}
	</style>

	
</head>
<body>

	<div class="wrapper">
		<div class="header">
            <div class="logo">
                <div id="clock"></div>
                <span>Rezerwacje</span>
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
			  
			   $username = "kamild160";
			   $password = "aidaiY6aeyah";
			   $dbname = "kamild160_projekt";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if($conn -> connect_error) {
                    die("Connection failed: " . $conn -> connect_error);
                }
                echo "<center> Connected successfully </br></br></br></br></center>";
				$conn->set_charset("utf8"); 
				
               	$imie = $_REQUEST['imie']; 
				$nazwisko = $_REQUEST['nazwisko'];
				$telefon = $_REQUEST['tel'];
				$rezerwacja = $_REQUEST['nrrezerwacj'];


				$imiein = $_REQUEST['imiein']; 
				$nazwiskoin = $_REQUEST['nazwiskoin'];
				$telefonin = $_REQUEST['telin'];
				

				$sql = "SELECT * from gosc join pobyt on idg=g_id where imie like '%".$imie."%' OR nazwisko like '%".$nazwisko."%'
				or nrrezerwacja like '%".$rezerwacja."%' or telefon like '%".$telefon."%';";
			
			
				
				
				$result = mysqli_query($conn,$sql);
				
				if (mysqli_num_rows($result) > 0) {
    
				while($row = mysqli_fetch_assoc($result)) {
				echo $row["imie"]. " " . $row["nazwisko"]."  -  Nr.rezerwacji: \n". $row["nrrezerwacja"]. " Data rezerwacji: ". 
				$row["datapocz"]. "    do     ". $row["datakon"]."<br>";
				
				}
				} else {
				echo "Brak danych";
				}

				
			
			

			
	
				
                mysqli_close($conn);
            ?>
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
