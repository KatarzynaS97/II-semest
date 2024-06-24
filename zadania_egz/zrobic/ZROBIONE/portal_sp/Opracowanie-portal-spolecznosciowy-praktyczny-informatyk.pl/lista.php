<!-- Pamiętaj w Visual Studio Code, aby stworzyć ramy dokumentu html wystarczy wpisać na początku tylko ! i kliknąć TAB-->
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head> 
    <!-- ustawienie kodowania dla polskich znaków -->
    <meta charset="utf-8">
    <!-- Tytuł strony -->
    <title>Lista przyjaciół</title> 
    <!-- Dołączenie pliku css -->
    <link rel="stylesheet" href="styl.css">
  </head>
  <body>
    <!-- Sekcja banner -->
    <section class="baner">
      <!-- Nagłówek o wielkości h1 -->
      <h1>Portal Społecznościowy - moje konto</h1> 
    </section>
    <!-- Sekcja główny -->
    <section class="glowny">
      <!-- Nagłówek o wielkości h2 -->
      <h2>Moje zainteresowania</h2>
      <!-- Lista nieuporządkowana -->
      <ul>
        <!-- Element listy -->
        <li>muzyka</li>
        <!-- Element listy -->
        <li>film</li>
        <!-- Element listy -->
        <li>komputery</li>
      </ul>
      <!-- Nagłówek o wielkości h2 -->
      <h2>Moi znajomi</h2>
<!-- Skrypt 1 w języku php -->
<?php // rozpoczęcie skryptu php

$conn = mysqli_connect("localhost", "root", "", "dane"); // ustanowienie zmiennej $conn, która posłuży do połączenia z bazą danych
$sql = "SELECT imie, nazwisko, opis, zdjecie from osoby where Hobby_id=1 or Hobby_id=2 or Hobby_id=6"; // ustawienie zmiennej $sql, która zawiera zapytanie do bazy danych
$result = mysqli_query($conn, $sql); // ustawienie zmiennej $result, która wyśle zapytanie do bazy danych składające się ze zmiennych $conn i $sql


while($row = mysqli_fetch_row($result)) { // pętla while (dopóki), która wyświetla wyniki zapytania do bazy danych jako rząd, wyniki zapytania są zapisywane w zmiennej $row 
// ⬇⬇⬇ wyświetlenie wyników zapytania do bazy danych, echo - wyświetla tekst, <<<cmt - początek komentarza, cmt - nazwa komentarza, ; - kończy instrukcję
// dolar $row[0] - wyświetla pierwszy wynik zapytania do bazy danych, dolar $row[1] - wyświetla drugi wynik zapytania do bazy danych, dolar $row[2] - wyświetla trzeci wynik zapytania do bazy danych, dolar $row[3] - wyświetla czwarty wynik zapytania do bazy danych
  echo <<<cmt
  <section class="osoba">
  <section class="zdjecie"><img src=" $row[3] " alt="przyjaciel"></section>
  <section class="opis"><b> $row[1]  </b></section><br>
  <section class="linia"> Ostatni wpis: $row[2]</section>

  </section>
  <hr>
 cmt;
} // znacznik hr - pozioma linia
  
  mysqli_close($conn); // zamknięcie połączenia z bazą danych, zmienna $conn wskazuje jakie połączenie ma być zamknięte

?><!-- Koniec skryptu 1 w języku php --> 
    <!-- zamknięcie sekcji głównej -->
    </section>
    <!-- Sekcja stopka część 1 -->
    <section class="s1">
      <!-- Tekst nie wymagający definiowania takiego jak h1, a, p itp. -->
      Stronę wykonał: ESSA^2
    </section>
    <!-- Sekcja stopka część 2 -->
    <section class="s2">
      <!-- Tekst wymagający załączenia linku musi być w elemencie a z hiperłączem href="link", mailto:adresemail - funkcja w linku służąca do przekierowaia do tworzenia e-maila w aplikacji systemowej -->
      <a href="mailto:ja@portal.pl">napisz do mnie</a>
    </section>

  </body>
</html>
