<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="witryna.css">
    <title>Restauracja Wszystkie Smaki</title>
</head>
<body>
<div id="logo"><b>Witamy w restauracji "Wszystkie Smaki"</b></div>

<div id="menu">
   <div>
<img src="pierogi.jpg" id="fota">
</div>
    <ul>
    <p class="naglowek">U nas dobrze zjesz</p>
        <li>1.Obiady od 40 zł </li>
        <li> 2.Przekąski od 10 zł </li>
        <li> 3.Kolacje od 20 zł </li>
    </ul>
   
</div>
<div id="formularz">
    <p class="naglowek">Zarezerwuj stolik on-line.</p>
    <label for="data">Data(format rrrr-mm-dd):</label>
    <input type="text" id="data">

    <label for="ile_osob">Ile osób:</label>
    <input type="number" id="ile_osob">

    <label for="Nr_tel">Twój numer telefonu: </label>
    <input type="number" id="Nr_tel">

    <div id="checkbo ">
    <input type="checkbox" id="zgoda"> <label for ="zgoda">Zgadzam sie na przetwarzanie moich danych osobowych</label>
</div>
   <div id="przycisk">
    <button id="wyczysc" class="przyciski" >Wyczyść</button>
    <button id="rezerwuj" class="przyciski" >Rezerwuj</button></div>
    
</div>
<div id="stopka">Stronę internetowa opracowała : Katarzyna Śmierzchalska
     </div>
    
</body>
</html>