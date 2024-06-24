<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Planer</title>
    <link rel="stylesheet" href="./style/styl5.css">
	<link rel="shortcut icon" href="kalendarzico.jpg">
    <?php
    function usun(){
    
      
    }
    
    
    ?>
    <style>
    .linki{
        text-decoration:none;
    }
    .complete
    {
        text-decoration:line-through;
    }
    </style>
</head>

<body>
    <header>
       <section id="lewy">
		<img src="kalendarz.png" alt="mój kalendarz" class="zdjecie">
		
       </section>   
	   
	   <section id="prawy">
		<h1>Planer</h1>

			<?php
			$db= new mysqli("localhost","root","","egzamin5");
         $zapyatnie = "SELECT miesiąc, rok FROM zadania WHERE dataZadania='2024-03-01; '";
			$result=mysqli_query($db, $zapyatnie);
			
			while($row=mysqli_fetch_row($result))
			{
				echo "<h3 class='miesiac'> MIESIĄC: $row[0]</h3><br/> <h3 class='rok'> ROK : $row[1] </h3>";
			}
			// $q="SELECT dataZadania, wpis FROM zadania where miesiąc LIKE 'marzec'";
  
   

			?>
			 </section>
    </header>
    <main> 

    <?php
      if(isset($_REQUEST['removeThing']))
      {
        //DELETE FROM zadania WHERE id=?
          $q =$db->prepare("UPDATE zadania SET wpis='' WHERE id=?");
          $q->bind_param('i', $_REQUEST['removeThing']);
          $q->execute();
      }
      
      if(isset($_REQUEST['completeThing']) )
      {
       
          $q =$db->prepare("UPDATE zadania SET complete=1 WHERE id=?");
          $q->bind_param('i', $_REQUEST['completeThing']);
          $q->execute();
      }
	      
           if(isset($_REQUEST['wpis']) && $_REQUEST['data'] && $_REQUEST['wpis']!="")
    {
        //
      //  INSERT INTO zadania VALUES(NULL,'',?,'marzec','2024',0)
        $q =$db->prepare("UPDATE zadania SET wpis = ? WHERE dataZadania=?");
        $q->bind_param('ss',$_REQUEST['wpis'] , $_REQUEST['data']);
        $q->execute();

       
    }
    $q="SELECT *FROM zadania";
    $result = $db->query($q);
  
     
    while($row = $result->fetch_assoc())
{           echo'<section class="dane" > <ul>';
if(isset($_REQUEST['wpis'])){
            echo '<li id"wyswietlanie" class="wyswietlanie" >'.$row['wpis']. "<button id='usun'name='usun' onClick='usun()'>Usuń</button> <button id='zrobione' onclick='zrobione()'>Skreśl</button>";
            //echo '<a href="kalendarz_nowy.php?removeThing='.$row['id'].'" class="linki link_usun"> X </a>';
}
      
       /* else
        {
            //start list item 
            echo'<li>'.$row['wpis'];
        }*/
       
            //wygeneruj link do wywpołania kodu usuwajacego 
  

            //wygeneruj link do wywpołania kodu skreslajacego 
           // echo '<a href="kalendarz_nowy.php?completeThing='.$row['id'].'" class="linki link_skresl"> &#x2714 </a>';
        // if($row['wpis']=" ")
           // echo '<style> .link_usun{display:none;}  </style>';
          //  elseif($row['wpis']!=" ")
           // echo  '<style> .link_usun{display:flex;}  </style>';
     

            echo'</li>';
   
           echo '</ul> ';
           
        echo  '<h5>'.$row["dataZadania"].' </h5>';
        echo  ' </section>';
     //end list item 
   
}
//if(isset($_REQUEST['dodaj']))
   
    
/*elseif($row['wpis']!=""){
    echo "<style> 
    .linki{display:flex;}
</style>";
}*/


//echo '<pre>';
//var_dump($_REQUEST);
	?>

	<div id="wynik"></div>
    </main>
    <footer>
		<form action="kalendarz_nowy.php" method="post">
		<label class="labele" 	for="data">DATA</label>
			<input type="data" id="data" name="data">
			<label class="labele"for="pole">WPIS:</label>
			<input type="text" id="pole" name="wpis"><br/>
			<input type="submit"class="przyciski"name="dodaj" value="DODAJ">
	</form>

        <p>Stronę przygotowała: KATARZYNA ŚMIERZCHALSKA</p>
    </footer>
  <script src="./js/main.js"></script>
</body>

</html>