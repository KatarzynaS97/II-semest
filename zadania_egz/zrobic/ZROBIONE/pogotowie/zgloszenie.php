<?php

if(isset($_POST['numer_zespolu']) && isset($_POST['numer_dyspo']) && isset($_POST['adres'])){
	
	$numer_zespolu = $_POST['numer_zespolu'];
	$numer_dyspo = $_POST['numer_dyspo'];
	$adres = $_POST['adres'];
	$polaczenie = mysqli_connect('localhost','root','','ratownctwo');
	$data=date('H:i');
	$zapytanie= "INSERT INTO zgloszenia VALUES(NULL,'$numer_zespolu ', '$numer_dyspo' , '$adres' ,'0' , '$data');";
	mysqli_query($polaczenie, $zapytanie);
	
	
}mysqli_close($polaczenie);



?>