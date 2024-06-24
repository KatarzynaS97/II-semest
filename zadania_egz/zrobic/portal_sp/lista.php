<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Lista przyjaciół </title>
<link rel="stylesheet" href="style.css">
<header id="baner">
	<h1>Portal Społecznościowy - moje konto</h1>
<header/>

<main id="glowny">
	<h2>Moje zainteresownia</h2>
	<ul>
		<li>Muzyka</li>
		<li>Film</li>
		<li>Komputery</li>
	</ul>
	<h2>Moi znajomi</h2>
	<?php
		$polaczenie= mysqli_connect('localhost','root','','dane1');
		
		$zapytanie = "SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id = 1 OR Hobby_id=2 or Hobby_id=6;";
		
		$result=mysqli_query($polaczenie, $zapytanie);
		
		while($row =mysqli_fetch_array($result)){
			
		echo <<<cmt
		<section class="osoba">
		<section class="zdjecie"><img src=" $row[3] " alt="przyjaciel"></section>
		<section class="opis"><b><h3>$row[0] $row[1]</h3></b><p>ostatni wpis :$row[2]"</p></section><br>
		<section class="lina"></section>
		</section>
		<hr>
		cmt;
		}
		mysqli_close($polaczenie);
	
	?>

</main>

<footer id="stopka1">
<p>Stronę wykonała: katarzyna śmierzchalska</p>
</footer>

<footer id="stopka2">
	<a href="mailto:ja@portal.pl">napisz do mnie</a>
</footer>

</head>
<body>


</body>
</html>