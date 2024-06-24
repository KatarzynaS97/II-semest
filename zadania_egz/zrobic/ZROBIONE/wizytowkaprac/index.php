<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>oWizytówki</title>
    <link rel="stylesheet" href="style.css">
	
  </head>
  <body>
	<header>
		<h1>wizytówki pracowników</h1>
		<form action="index.php" method="post">
			<input type="number" name="liczba" min="1" max="9" >
			<button name="wyswietl">WYŚWIETL</button>
		</form>
	</header>
	<main>
	<?php
	
	$polaczenie = mysqli_connect('localhost','root','','firma');
	
	$liczba = $_POST['liczba'] ?? 1; // pierwsze zdjecie przy wejsciu na stronę 
		$zaptanie2= "SELECT id, imie, nazwisko, adres, miasto FROM pracownicy WHERE id = $liczba";
		$result2= mysqli_query($polaczenie,$zaptanie2);
	while($row2=mysqli_fetch_array($result2)){
		echo "<img src='$row2[0].jpg' alt='pracownik'>
		<h2>$row2[1] $row2[2]</h2>
		<h4>Adres:</h4>
		<p>$row2[3] $row2[4]</p>";
	
	}
	
	?>
	</main>
	<footer>
		<section id="lewy">
			<img src="obraz.jpg" alt="pracownicy firmy">
			
		</section>
		<section id="srodkowy">
		<p>autorem wizytownika jest : katarzyna śmierzchalska</p>
		<a href="http://agencjareklamowa543.pl/" target="_blank">Zobacz nasze realizacje</a>
		</section>
		<section id="prawy">
			<p>Osoby proszące o podpisanie rodo</p>
			<ul>
				<?php
				$zapyatanie = "SELECT imie, nazwisko FROM pracownicy WHERE czyRODO = 0";
				$result=mysqli_query($polaczenie,$zapyatanie);
				while($row=mysqli_fetch_array($result)){
					echo "<li>$row[0] $row[1]</li>";
				}
				
				?>
			</ul>
		</section>
	</footer>
  </body>
</html>
