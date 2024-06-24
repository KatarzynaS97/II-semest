<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Planer</title>
    <link rel="stylesheet" href="./style/styl5.css">
	<link rel="shortcut icon" href="kalendarzico.jpg">
</head>

<body>
    <header>
       <section id="lewy">
		<img src="kalendarz.png" alt="mój kalendarz" class="zdjecie">
		
       </section>   
	   
	   <section id="prawy">
		<h1>Planer</h1>

			<?php
			$polaczenie= mysqli_connect("localhost","root","","egzamin5");
			$zapyatnie = "SELECT miesiąc, rok FROM zadania WHERE dataZadania='2024-03-01; '";
			$result=mysqli_query($polaczenie, $zapyatnie);
			
			while($row=mysqli_fetch_row($result))
			{
				echo "<h3 class='miesiac'> MIESIĄC: $row[0]</h3><br/> <h3 class='rok'> ROK : $row[1] </h3>";
			}
			
			
			?>
			<?php
			
			if(isset($_POST['wpis']) && (isset($_POST['data'])))
			{
				
				$wpis = $_POST['wpis'];
				$data = $_POST['data'];
				
				$zapytanie3 = "update zadania SET wpis = ' $wpis' where dataZadania='$data';";
								
				$result3 = mysqli_query($polaczenie, $zapytanie3);
				
			}
			
			
			?>
       </section>
    </header>
    <main> 
    <?php
	
		$zapyatnie2 = "SELECT dataZadania, wpis FROM zadania where miesiąc LIKE 'marzec';";
				$result2 =mysqli_query($polaczenie, $zapyatnie2);
				
					while($row2 = mysqli_fetch_row($result2))
					{
						
						echo '<section class="dane">
								<h5>'.$row2[0].'</h5>
								
							<p class = "notatka"> '.$row2[1].'</p>';
							
				if($row2[5]= 1)
				{
					echo '<input type="checkbox" name="checkbox">';
				}else 
				{
					echo'<input type="checkbox" name="checkbox">';
				}
							echo'</section>';
					
					}
					
					mysqli_close($polaczenie);
	
	
	?>

	<div id="wynik"></div>
    </main>
    <footer>
		<form action="kalendarz.php" method="post">
		<label class="labele" 	for="data">DATA</label>
			<input type="data" id="data" name="data">
			<label class="labele"for="pole">WPIS:</label>
			<input type="text" id="pole" name="wpis"><br/>
			<button id="przycisk" class="przyciski"name="dodaj">DODAJ</button>
	</form>

        <p>Stronę przygotowała: KATARZYNA ŚMIERZCHALSKA</p>
    </footer>
  <script src="./js/main.js"></script>
</body>

</html>