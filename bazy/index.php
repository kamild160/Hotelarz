<!DOCTYPE html>
<html>
<head>

</head>
<body>


<?php 



error_reporting(E_ALL);
ini_set('display_errors', 1);


$mysqli = new mysqli('localhost', 'kamild160', 'aidaiY6aeyah', 'kamild160_projekt');




$res = $mysqli->query("select * from gosc;");




        echo "<table >";
    
        echo "<tr><th>ID</th>". "<th>Telefon</th>". "<th>Imię</th>". "<th>Nazwisko</th>". "<th>Pesel</th></tr>";
        
     
        while ($row = $res->fetch_array()) {
       
       echo  "<tr>";
        echo "<td>". $row["idg"]. "&nbsp". "</td>";
      
        echo "<td>". $row["telefon"]. "&nbsp". "</td>";
        
        echo "<td>".$row["imie"]. "&nbsp". "</td>";
       
        echo "<td>". $row["nazwisko"]. "&nbsp". "</td>";
      
        echo "<td>".$row["pesel"]. "&nbsp". "</td>";
       
        }
		echo "</table>";
?>
</body>
</html>