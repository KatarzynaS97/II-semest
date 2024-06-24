<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Sekretariat</title>
<link rel="stylesheet" href="styl.css" />
</head>
<body>
<aside id="lewy">
	<h1>Akta pracownicze</h1>
	<?php
		$polaczenie=mysqli_connect('localhost','root','','firma');
		
		$zapytanie="SELECT id, imie, nazwisko, adres, miasto, czyRODO, czyBadania FROM pracownicy WHERE id=2;";
		
		$result=mysqli_query($polaczenie, $zapytanie);
		
		while($row= mysqli_fetch_array($result)){
		if($row[5]==1){
			$rodo = 'podpisano';
		}else$rodo = 'niepodpisano';
		
		if($row[6]==1){
			$badania= 'aktualne';
		}else 
		$badania= 'nieaktualne';
		
		echo "
            <h3>dane</h3>
            <p>$row[1] $row[2]</p>
        <hr/>
        <h3>adres</h3>
        <p>$row[3]</p>
        <p>$row[4]</p>
        <hr/>
        <p>RODO: $rodo</p>
        <p>Badania: $badania</p>";
		}
		
	?>
	
	<h3>Dokumenty prcownika</h3>
	<a href="cv.txt">Pobierz</a>
	<h1>Liczba zatrudnionych pracowników</h1>
	<?php
	$zapytanie= " SELECT COUNT(id) from pracownicy;";
	$result = mysqli_query($polaczenie, $zapytanie);
	$row= mysqli_fetch_array($result);
	echo "<p>$row[0]</p>";
	
	
	
	?>
	
	</h1>
	
</aside>
<aside id="prawy">
<?php
	$zapytanie = "SELECT id, imie, nazwisko FROM `pracownicy` WHERE id=2;";
	$result = mysqli_query($polaczenie, $zapytanie);
	while($row = mysqli_fetch_array($result))
	{
		echo "<img src='$row[0].jpg' alt='pracownik'>
		<h2>$row[1] $row[2]</h2>
		";
	}
	
	$zapytanie4="SELECT pracownicy.id, nazwa , opis FROM pracownicy , stanowiska WHERE pracownicy.stanowiska_id= stanowiska.id AND pracownicy.id=2;";
	$result4=mysqli_query($polaczenie, $zapytanie4);
	while($row=mysqli_fetch_array($result4)){
		echo "<h4>$row[1]</h4>";
		echo "<h5>$row[2]</h5>";
	}
	

mysqli_close($polaczenie);
?>
</aside >

<footer id="stopka">
<p>Autorem aplikacji jest:Katarzyna Śmierzchalska</p>
	<ul>
		<li>skontaktuj się </li>
		<li>Poznaj naszą firmę</li>
	</ul>
</footer>

</body>
</html>