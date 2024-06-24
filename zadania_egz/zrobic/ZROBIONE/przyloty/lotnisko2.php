<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Port Lotniczy</title>
	<link rel="stylesheet" href="styl5.css">
	
</head>
<body>
<header id="baner">
	<section id="baner_1"><img src="samolot.png" alt="logo lotnisko">
	</section>
	<section id="baner_2">
		<h1>Przyloty</h1>
	</section>
	<section id="baner_3">
	<h3>przydatne linki</h3>
	<a href="kwerendy.txt" target="_blank">Pobierz</a>
	</section>
</header>

<main id="glowny">
	<table>
		<tr>
			<th>czas</th>
			<th>kierunek</th>
			<th>numer rejsu</th>
			<th>ststus</th>
		</tr>
		<?php
		$polaczenie = mysqli_connect('localhost','root','','egzamin');
		$zapytanie = 'SELECT czas, kierunek, nr_rejsu,status_lotu FROM przyloty ORDER BY czas ;';
		$result = mysqli_query($polaczenie, $zapytanie);
		while($row= mysqli_fetch_array($result))
		{
			echo
			'<tr>
				<td>'.$row[0].'</td> <td>'.$row[1].'</td>
			<td>'.$row[2].'</td>
			<td>'.$row[3].'</td>
			</tr>'
			
			;
		}
		mysqli_close($polaczenie);
		?>
	</table>
</main>

<footer id="stopka1">
<?php
if(!empty($_COOKIE["ciasteczko"])){
	echo "<p><i>Witaj ponownie na naszej stronie lotniska</i></p>";
} else{
	echo "<p><b>Dzień dobry! Strona lotniska uzywa ciasteczek</b></p>";
	setcookie("ciasteczko", 1, time()+ 7200);
}
?>
</footer>

<footer id="stopka2">
	<span>Autor:00000000000</span>
</footer>
</body>
</html>