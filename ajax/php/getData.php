<?php
$polaczenie = mysqli_connect('localhost','root','', 'infprog22');

//zmienna 
$elemnet= $_GET['value'];

//zapytanie
$sql = "SELECT id, IMIE from imiona where id= ".$elemnet.";";

//odbieranie 

$que =mysqli_query($polaczenie, $sql);
//przetworzenie
$answer["dane"]=[];
$i=0;
foreach($que as $quev){
	$answer["dane"][$i]['id']= ($quev['id']);
	$answer["dane"][$i]['imie']= ($quev['IMIE']);
	$i++;
}
//przesyłanie do js 
$j = json_encode($answer, JSON_PRETTY_PRINT);
echo $j;
//echo json_encode($answer, JSON_PRETTY_PRINT| JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>