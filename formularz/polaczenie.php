<html>
<head>


</head>
<body>
<?php

//po stronie php bedzie 
	if($_SERVER["REQUEST_METOD"]=="POST")
	{
		$l = $_POST['login'] ?? '';
		$h = $_POST['haslo'] ?? '';
		
		echo "login".htmlspecialchars($l)."haslo".htmlspecialchars($h);
	}




?>

</body>
</html>