<html>
<head>


</head>
<body>
<button onClick="silnia()">przycisk</button>
<div id="petla"></div>
<button onClick="silnia2()">przycisk</button>


<?php

	
	$sum2 = 1;

	for($i = 1; $i <=3; $i++)
	{
		for( $j = 1; $j<=3 ; $j++)
			
		{
			for($k= 1; $k<=3 ; $k++)
			{
				$sumM2=$sum2;//niezminiona wartosc przez petle
				$sum2= $sum2+ $i +$j+$k;//zmieniam wartosc na aktualna 
				
				echo $sumM2." + ".$i." + ".$j." + ".$k." = ".$sum2 ."<br>";	
				
				
				//to co w srodku pętli wykona się pierwsze.
				
			}
		}
	}



?>

<script src="nowy.js"></script>
</body>
</html>