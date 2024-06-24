<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grzybobranie</title>
    <link rel="stylesheet" href="styl5.css">
  </head>
  <body>
<section class="obraz">
<a href="borowik.jpg">  <img src="borowik-miniatura.jpg" alt="Grzybobranie" class="borowik"></a>
</section>
  <section class="tytul">
    <h1>Idziemy na grzyby!</h1>
  </section>

<section class="lewy">
<?php

$conn = mysqli_connect("localhost", "root", "", "dane2");
$sql = "SELECT nazwa_pliku, potoczna FROM grzyby";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
echo '<img src="' . $row["nazwa_pliku"] . '" title="' . $row["potoczna"] . '">';
}
 ?>
</section>

<section class="prawy">
<h2>Grzyby jadalne</h2>
<?php
$sql = "SELECT nazwa, potoczna FROM grzyby where jadalny=1";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
echo '<a class="li1">' . $row["nazwa"] . '(' . $row["potoczna"] . ')</a><br>';
}

 ?>
<h2>Polecamy do sosiw</h2>
<?php
$sql = "SELECT grzyby.nazwa, grzyby.potoczna, rodzina.nazwa FROM `grzyby` INNER JOIN rodzina ON grzyby.rodzina_id=rodzina.id WHERE grzyby.potrawy_id=1";
$result = $conn->query($sql);
echo '<ol>';
while($row=$result->fetch_assoc()){
  echo '<li>' . $row["nazwa"] . '(' . $row["potoczna"] . '), rodzina: ' . $row["nazwa"] . '</li>';
}
echo '</ol>';
$conn->close();
 ?>
</section>

<footer>
<p>Autor 0000000000000</p>
<footer>
  </body>
</html>
