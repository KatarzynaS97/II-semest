<!DOCTYPE html>
<html>
<head>


</head>
<body>
	<form action="formularz.php" method="post">
		<label for="imie">Imię:</label></br>
		<input type="text" name="imie" ></br>
		<label for="nazwisko">Nazwisko:</label></br>
		<input type="text" name="nazwisko" ></br>
		<label for="adres">Adres:</label></br>
		<input type="text" name="adres" >	</br>
		<label for="adres">e-mail:</label></br>
		<input type="text" name="e_mail" ></br>
		
		<button type="submit" name="dodaj">dodaj</button>
	</form>
	<?php
//insert dbo (id)values ((Max(id)+1)) jesli nie jest wlaczone auoincrement 
//coalesce ((max(id)0)+1) zabezpieczy jesli id bedzie 0 
$polaczenie = mysqli_connect('localhost', 'root', '', 'dane');
if($polaczenie)
	if($polaczenie->connect_error){
		die("nie udalo sie polaczyc :".$polaczenie->connect_error);
	}


if(isset($_POST['imie'])&& ((isset($_POST['nazwisko'])&&(isset($_POST['adres'])&&(isset($_POST['e_mail']))))))
{
	$imie = $_POST['imie'];
	$nazwisko = $_POST['nazwisko'];
	$adres = $_POST['adres'];
	$e_mail = $_POST['e_mail'];
	$zapytanie = "INSERT INTO uzytkownicy (id, imie, nazwisko,adres,email) VALUES(NOT NULL, '$imie','$nazwisko',' $adres',' $e_mail');";

mysqli_query($polaczenie, $zapytanie);

}

?>
</body>
</html>