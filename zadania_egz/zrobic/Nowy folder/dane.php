<!doctype html>
<html>
<head>

<meta charcet="utf-8">
<title></title>
<link rel="stylesheet" href="styl.css">



</head>
<body>







<form action="dane.php" method="post">
<label for="pole">Usuń film nr.:</label>
<input type="number" id="pole" name="numer_filmu">
<button>Usuń film </button>
</form>
<?php
$polaczenie = mysqli_connect('localhost','root','','dane3');
	if(isset($_POST['numer_filmu'])){
		
		$numer_filmu= $_POST['numer_filmu'];
		$zapytanie="DELETE FROM produkty WHERE Id=$numer_filmu;";
		$result=mysqli_query($polaczenie,$zapytanie);
	}

?>
<?php
	
	$zapytanie= "SELECT id, nazwa,opis, zdjecie FROM produkty WHERE id=18 OR id=22 or id= 23 or id=25;";
	
	$result=mysqli_query($polaczenie,$zapytanie);
	while($row=mysqli_fetch_array($result)){
	
	echo "<section id='film'>
	<h4>$row[0] $row[1]</h4>
	<img src='$row[3]' alt='film'>
	<p>$row[2]</p>
	</section>";
	}
?>
<?php


$zapytanie2= "SELECT id, nazwa,opis, zdjecie FROM produkty WHERE Rodzaje_id=12;";
	
	$result2=mysqli_query($polaczenie,$zapytanie2);
	while($row=mysqli_fetch_array($result2)){
	
	echo "<section id='film'>
	<h4>$row[0] $row[1]</h4>
	<img src='$row[3]' alt='film'>
	<p>$row[2]</p>
	</section>";

	}
	mysqli_close($polaczenie);
?>
</body>
</html>