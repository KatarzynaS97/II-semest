<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title> Wędkowanie </title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>

	<section id="baner" class="ban_stopka">
		<h1>Portal dla wędkarzy</h1>
	</section>
	<section id="pierwszy_blok">
		<h3>Ryby zamieszkujące rzeki</h3>
		<ol>
			<?php
				$polaczenie = mysqli_connect('localhost', 'root','','wendkowanie');
				
				$zapytanie = 'SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo from ryby , lowisko where ryby.id=lowisko.Ryby_id and rodzaj = "3";';
				
				$results = mysqli_query($polaczenie, $zapytanie );
				while($row = mysqli_fetch_array($results))
					echo "<li>$row[0] pływa w rzece $row[1] $row[2]</li>";
					
				
				
				
				
				?>
		</ol>
	</section>
	
	<section id="fotka">
		<img src="ryba2.jpg" alt="Sum"></br>
		<a href="kwerendy.txt">Pobierz kwerendy</a>
	</section>
	
	<section id="drugi_blok">
		<h3>Ryby drapieżne naszych wód</h3>
		<table>
			<tr>
				<th>L.p.</th>
				<th>Gatunek</th>
				<th>Wystepowanie</th>
			</tr>
			<?php
			
			
			$zapytanie2 = ' SELECT id, nazwa, wystepowanie FROM ryby Where styl_zycia="1";';
			
			$results2 = mysqli_query($polaczenie ,$zapytanie2);
			while($row = mysqli_fetch_array($results2)){
			
			echo"<tr><td>$row[0] </td><td>$row[1]</td> <td>$row[2]</td></tr>";
			
			}
			mysqli_close($polaczenie);
			
			?>
		</table>
	</section>
	
	<section id="stopka" class="ban_stopka">
		<p>Stronę wykonał : </p>
	</section>
<?php
 




?>


</body>
</html>