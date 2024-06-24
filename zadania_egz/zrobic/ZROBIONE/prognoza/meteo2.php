<!DOCTYPE html>
<html>
<head>
<meta chatset="utf-8">
<title>
Prognoza pogody Poznań
</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
	<section id="lewy">
		<p>Maj,2019r.</p>
	</section>
	
	<section id="srodek">
		<h2>Prognoza pogody dla Poznania</h2>
	</section>
	
	<section id="prawy">
		<img src="logo.png" alt="prognoza">
	</section>
</header>

<aside id="lewy2">
	<a href="kwerendy.txt" >Kwerendy</a>
</aside>

<aside id="prawy2">
	<img src="obraz.jpg" alt="Polska, Poznań">
</aside>
<main id="glowny">
	<table>
		<tr>
			<th>Lp.</th>
			<th>DATA</th>
			<th>NOC - TEMPERATURA</th>
			<th>DZIEŃ - TEMPERATURA</th>
			<th>OPADY [mm/h]</th>
			<th>CIŚNIENIE [hPa]</th>
		</tr>
		<?php
			$polaczenie=mysqli_connect('localhost', 'root','','prognoza');
			$zapytanie="SELECT id, miasta_id, data_prognozy, temperatura_noc, temperatura_dzien,opady, cisnienie FROM pogoda WHERE miasta_id=2 ORDER by data_prognozy DESC;";
			
			$result=mysqli_query($polaczenie,$zapytanie);
			
			while($row=mysqli_fetch_array($result))
			{
				echo '<tr>';
				echo '<td>'.$row['id'];
				
				echo '<td>'.$row['data_prognozy'];
				echo '<td>'.$row['temperatura_noc'];
				echo '<td>'.$row['temperatura_dzien'];
				echo '<td>'.$row['opady'];
				echo '<td>'.$row['cisnienie'];
				echo '</tr>';
			}
			mysqli_close($polaczenie);
		?>
	</table>
</main>
<footer id="stopka"> <p>stronę wykonała : Katarzyna Śmierzchalska</p>
</footer>
</body>
</html>