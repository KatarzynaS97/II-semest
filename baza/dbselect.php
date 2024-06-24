<?Php
	require_once 'config.php';
	

	$sql = "SELECT id, imie, nazwisko, wiek FROM test001;";
	
	$result = $conn ->query($sql); 
	
	if($result -> num_rows >0)
	{
		while($row = $result -> fetch_assoc()){
			echo "id: ".$row["id"]."- Imie: ".$row["imie"]."- Nazwisko: ".$row["nazwisko"]."- data: ".$row["wiek"]."<br>";
		}
		
	}else{
		echo "0 wyników "
	}
	
	foreach()
?>