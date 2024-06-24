<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista przyjaciół</title>
    <link rel="stylesheet" href="styl.css">
  </head>
  <body>
    <section class="baner">
      <h1>Portal Społecznościowy - moje konto</h1>
    </section>
    <section class="glowny">

      <h2>Moje zainteresowania</h2>
      <ul>
        <li>muzyka</li>
        <li>film</li>
        <li>komputery</li>
      </ul>
      <h2>Moi znajomi</h2>

<?php

$conn = mysqli_connect("localhost", "root", "", "dane");
$sql = "SELECT imie, nazwisko, opis, zdjecie from osoby where Hobby_id=1 or Hobby_id=2 or Hobby_id=6";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_row($result)) {
  echo <<<cmt
  <section class="osoba">
  <section class="zdjecie"><img src=" $row[3] " alt="przyjaciel"></section>
  <section class="opis"><b> $row[1]  </b></section><br>
  <section class="linia"> Ostatni wpis: $row[2]</section>

  </section>
  <hr>
 cmt;
}

mysqli_close($conn);

 ?>
    </section>
    <section class="s1">
      Stronę wykonał: ESSA^2
    </section>
    <section class="s2">
      <a href="mailto:ja@portal.pl">napisz do mnie</a>
    </section>

  </body>
</html>
