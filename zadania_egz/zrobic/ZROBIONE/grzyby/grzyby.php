<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>Grzybobranie</title>
	<link rel="stylesheet" href="style5.css">
	


</head>
<body>
	<header>
		<section id="miniatura">
			<img src="borowik-miniatura.jpg" alt="Grzybobranie">
		</section>
		<section id="tytul">
			<h1>Idziemy na grzyby!</h1>
		</section>
	</header>
	<main>
		<section id="lewy">
		<?php
		$polaczenie = mysqli_connect('localhost','root','','dane2');
		$zapytanie= "SELECT nazwa_pliku , potoczna FROM grzyby;";
		$result= mysqli_query($polaczenie,$zapytanie);
		while($row = mysqli_fetch_array($result))
		{
			echo <<<cmt
			<img src="$row[0]" title="$row[1]">
		cmt;
		}
		
		?>
		</section>
		<section id="prawy">
		<h2>Grzyby jadalne</h2>
		<?php
		$zapytanie2="SELECT nazwa, potoczna FROM grzyby WHERE jadalny=1;";
		$result2= mysqli_query($polaczenie, $zapytanie2);
		while($row2= mysqli_fetch_array($result2))
		{
			echo <<<cmt
			<p>$row2[0] ($row2[1])</p>
			
			cmt;
		}
		?>
		<h2>Polecamy do sosów </h2>
		<?php
		$zapytanie3='SELECT grzyby.nazwa, potoczna , rodzina.nazwa from grzyby JOIN rodzina ON rodzina.id= grzyby.rodzina_id JOIN potrawy ON potrawy.id= grzyby.potrawy_id WHERE potrawy.nazwa = "sos";';
		$result3= mysqli_query($polaczenie,$zapytanie3);
		echo '<ol>';
		while ($row3 = mysqli_fetch_array($result3))
		{
			echo '<li>' .$row3[0].' ('.$row3[1].'), rodzina: '.$row3[2].'</li>';
		}
		echo '</ol>';
		mysqli_close($polaczenie);
		?>
		</section>
	</main>
<footer id="stopka1">
	<p>Autor 00000000</p>
</footer>

</body>

</html>