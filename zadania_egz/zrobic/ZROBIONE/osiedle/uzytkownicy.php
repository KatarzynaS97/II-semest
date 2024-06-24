<!DOCTTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styl5.css" />
<title>Portal społecznościowy</title>
</head>
<body>
<header>
	<section id="lewy_baner">
		<h1>Nasze osiedle</h1>
	</section>
	<section id="prawy_baner">
		<?php
			$polaczenie=mysqli_connect('localhost', 'root','','portal');
			$zapytanie="SELECT count(id) FROM dane;";
			
			$result = mysqli_query($polaczenie, $zapytanie);
			while($row=mysqli_fetch_array($result)){
				echo "<h5>Liczba użytkowników portalu:$row[0]</h5>";
			}
		?>
	</section>
</header>
<aside id="lewy">
	<h3>Logowanie</h3>
		<form action="" method="post">
			<label for="login">login:</label><br>
			<input type="text" id="login" name="login"><br />
		<label for="haslo">haslo:</label><br>
		<input type="password" id="haslo" name="haslo"><br />
		
		<input type="submit" id="przycisk" value="zaloguj">
		</form>
</aside>

<aside id="prawy">
	<h3>Wizytówka</h3>
	<?php
	
	
	if(!empty($_POST['login'])&& !empty($_POST['haslo']))
	{
		$login= $_POST['login'];
		$zapytanie1="SELECT haslo FROM uzytkownicy WHERE login='$login';";
		$result1= mysqli_query($polaczenie, $zapytanie1);
		$rowliczba = mysqli_num_rows($result1);
			if(!$result || $rowliczba ==0)
			{
				echo "login nie istnieje";
			mysqli_close($polaczenie);
			}
		else {
		$haslo = $_POST['haslo'];
		$hasloch = sha1($haslo);
		$zapytanie2 = "SELECT * FROM uzytkownicy WHERE haslo='$hasloch';";
		$result2= mysqli_query($polaczenie, $zapytanie2);
				if(mysqli_num_rows($result2)==0)
				{
					echo "hasło nieprawidłowe";
					mysqli_close($polaczenie);
			}
			else {
				$login=$_POST['login'];
				$zapytanie3 = "SELECT login, rok_urodz, przyjaciol, hobby, zdjecie from uzytkownicy JOIN dane ON uzytkownicy.id= dane.id WHERE login='$login';";
				$result3 = mysqli_fetch_row(mysqli_query($polaczenie,$zapytanie3));
				echo "<section id='dane'>
					<img src='$result3[4] 'alt='osoba'>
					<h4>$login ($result3[1])</h4>
					<p>hobby : $result3[3]</p>
					<img src='icon-on.png'alt='' > $result3[2]
					<a href='dane.html'><button>Więcej informacji</button></a>
				</section>";
				mysqli_close($polaczenie);
			}
			
		}
	}
	?>
</aside>
<footer>
	<p>Stronę wykonała: katarzyna śmierzchaslak</p>
</footer>

</body>
</html>