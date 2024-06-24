<!DOCTYPE>
<html>
<head>
<script src="./js/jquery3.7.1.js" defer></script>
<script src="./js/animacje.js" defer></script>
<title>test</title>
<link rel="stylesheet" href="./css/style.css">

</head>
<body>
	<nav>
	Strona podstawowa
	</nav>
	<div id="menu">
		<?php
	$tab=["menu", "konto", "ustawienia", "wyloguj"];
		$i=1;
		foreach($tab as $tabV){
			
			echo('<div class="opcje" onclick=wybOpcje(this,"'.$i.'")>'.$tabV.'</div>');
			$i++;
		};
		?>
		
		</div>
		<div id="view">witaj
		</div>
		
		<footer>
		info
		</footer>

</body>
</html>