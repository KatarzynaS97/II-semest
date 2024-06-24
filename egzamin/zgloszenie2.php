<?php
	$polaczenie=mysqli_connect('localhost', "root", '',"wedkarstwo1");

		if($polaczenie -> connect_error){
		die("nie udalo sie połączyć z bazą: ".$polaczenie-> connect_error);
	}
	if(isset($_POST['lowisko'])&& ((isset($_POST['data'])&&(isset($_POST['sedzia'])))))
	{
		
	$lowisko = $_POST['lowisko'];
	$data = $_POST['data'];
	$sedzia = $_POST['sedzia'];
	$zapytanie = "INSERT INTO zawody_wedkarskie(id,Karty_wedkarskie_id,lowisko_id,data_zawodow,sedzia) VALUES(NOT NULL, 0, '$lowisko','$data','$sedzia');";
	
	mysqli_query($polaczenie,$zapytanie);
}


mysqli_close($polaczenie);

?>
<?php
/*
	$polaczenie= mysqli_connect('localhost', 'root', '','wedkarstwo');

	if(isset($_POST['dodaj']))
	{
	$lowisko = $_POST['lowisko'];
	$data = $_POST['data'];
	$sedzia = $_POST['sedzia'];
	$zapytanie = "INSERT INTO zawody_wedkarskie(id,Karty_wedkarskie_id,lowisko_id,data_zawodow,sedzia) VALUES(NOT NULL, 0, '$lowisko','$data','$sedzia');";
	
	mysqli_query($polaczenie,$zapytanie);
}


mysqli_close($polaczenie);
*/
?>