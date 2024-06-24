<?php

require_once 'forlularz_dane.php';

$polaczenie = ($serwer, $uzytkownik, $haslo, $baza);
if($polaczenie)
	echo "polaczono z bazą </br>";
else "brak polaczenie z bazą";
if(isset($_POST['dodaj'])){
	$imie = $_POST['imie'];
	$nazwisko = $_POST['nazwisko'];
	$adres = $_POST['adres'];
	$e_mail = $_POST['e_mail'];
	$zapytanie = "INSERT INTO uzytkownicy ( imie, nazwisko,adres,email) VALUES( '$imie','$nazwisko',' $adres',' $e_mail');";

mysqli_query($polaczenie, $zapytanie)
}


mysqli_close($polaczenie);
?>