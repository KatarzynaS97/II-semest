<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Organizer</title>
	<link rel="stylesheet" href="style.css">
	
	
</head>
<body>
	<header>
		<section id="pierwszy">
			<h2>MÓJ ORGANIZER </h2>
		</section>
		<section id="drugi">
			<form action="organizer.php" method="post">
				<label for="pole">Wpis wydarzenia:</label>
				<input type="text" id="pole" name="pole" >
				<button id="przycisk" name="dodaj">DODAJ</button> <!-- lub -->
			<!--	<input type="submit" id="przycisk" name="przycisk" value="ZAPISZ"> -->
		
				
			</form>
							<?php
		$polaczenie= mysqli_connect('localhost', 'root', '', 'egzamin6');
		
		if(isset($_POST['pole']))
		{
			$pole=$_POST['pole'];
			$zapytanie = "UPDATE zadania SET wpis='$pole' WHERE dataZadania='2020-08-27';";
			$result=mysqli_query($polaczenie, $zapytanie);
		}
		
		?>
			
		</section>
		<section id="trzeci">
			<img src="logo2.png" alt="Mój organizer">
		
		</section>
	</header>
	<main>
		<?php
		$zapytanie2="SELECT dataZadania, miesiac, wpis FROM zadania WHERE miesiac='sierpien';";
		$result2=mysqli_query($polaczenie, $zapytanie2);
		while($row = mysqli_fetch_array($result2))
		{
			echo "<section id='dane'>
			<h6>$row[0] $row[1]</h6>
			<p>$row[2]</p>
			</section>";
		}
		
		?>
	
	</main>
	<footer>
	<?php
	$zapyatnie3= " SELECT miesiac, rok from zadania WHERE dataZadania='2020-08-01';";
	$result3=mysqli_query($polaczenie, $zapyatnie3);
	while ($row2= mysqli_fetch_array($result3))
	{
		echo "<h1>miesiąc:$row2[0] rok: $row2[1]</h1>";
	}
	mysqli_close($polaczenie);
	?>
	<br />
	<p>Stronę wykonała : katarzyna śmierzchalska</p>
	</footer>


</body>
</html>