<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
 
    <title>OBLICZANIE BMI</title>

</head>
<body>
    <div id="logo"> Obliczanie BMI</div>
    <div id="container">
        <div id="tresc1">Kalkulator BMI – co to jest?</div>
        <HR  style="width: 300px; margin-left:50px;">
            <p>Kalkulator BMI  jest narzędziem, które mówi, czy ważymy odpowiednio do swojego wzrostu. Jest bardzo prosty w obsłudze, a normy pozwalają na jednoznaczną interpretację wyników. W czasach, gdy nadmierna troska o sylwetkę staje się problemem społecznym, kalkulator BMI jest wiarygodnym wyznacznikiem prawidłowej wagi.
            </p>
            <p id="tresc2">Wskaźnik BMI </p>
            <HR  style="width: 300px; margin-left:50px;">
            <p>Wskaźnik BMI  to stosunek masy ciała (wagi) do wzrostu. Niskie wartości mówią o tym, że ważmy za mało, wysokie – że za dużo.
            Im wyższy współczynnik BMI, tym wyższe ryzyko wystąpienia chorób związanych z nadmierną masą ciała. Są to choroby serca, cukrzyca typu 2, nadciśnienie, miażdżyca, kamicy żółciowej, zapalenia kości i stawów, bezdechów sennych, a nawet niektórych nowotworów (np. jelita grubego, piersi, endometrium czy pęcherzyka żółciowego).</p>
            <p>Normy BMI</p>
            <HR  style="width: 300px; margin-left:50px;">
            <p>Zdrowy dorosły człowiek o prawidłowym stosunku wagi do wzrostu ma wskaźnik w granicach 18,5–24,9. BMI poniżej 18,5 informuje o niedowadze. Osoby ze wskaźnikiem BMI 25,0-29,9 cierpią na nadwagę. Współczynnik BMI powyżej 30,0 to już otyłość.

Sprawdź, co oznacza wskaźnik BMI</p>
<table>
    <tr class="tlo">
        <th class="naglowek naglowek2"> BMI</th><th class="naglowek ">interpretacja wyniku</th>
         </tr>
         <tr>
            <td class="wiersz">mniej niż 18</td><td class="wiersz_prawy">wychudzony</td>
         </tr>
         <tr>
            <td class="wiersz">od 18.5 do 25</td><td class="wiersz_prawy">prawdłowa masa ciała</td>
         </tr>
         <tr>
            <td class="wiersz">od 25.5 do 29 </td><td class="wiersz_prawy">nadwaga</td>
         </tr>
         <tr>
            <td class="wiersz">od 29 do 34 </td><td class="wiersz_prawy">otyłość Istopnia</td>
         </tr>
         <tr>
            <td class="wiersz">od 34 do 39 </td><td class="wiersz_prawy">otyłość IIstopnia</td>
         </tr>
         <tr>
            <td class="wiersz"> więcej niż 40</td><td class="wiersz_prawy">otyłość III stopnia</td>
         </tr>
</table>

<p>Korzyści z utrzymywania prawidłowego wskaźnika BMI</p>
<HR  style="width: 300px; margin-left:50px;">
<p>BMI w normie to nie tylko ładna sylwetka. Wiąże się także z naszym zdrowiem. Prawidłowe BMI to m.in.:</p>
<ul>
    <li>lepsze ciśnienie krwi</li>
    <li>mniejsze bóle mięśni i stawów</li>
    <li>mniejsze obciążenie serca i układu krązenia </li>
    <li>zmniejszenie stężenia trójglicerydów i glukozy we krwi</li>
</ul>


<p>Oblicz i sprawdź swoje BMI.</p>
<a href="https://www.medicover.pl/kalkulator/bmi/"> Kalkulator </a><br/>
<label for="waga">Waga w kg:</label><br/>
<input type="number" id="waga" placeholder="podaj wagę w [kg]"> <br/>
<label for="wzrost">Wzrost w cm:</label><br/>
<input type="number" id="wzrost" placeholder="podaj wzrost w [cm]"><br/>
<input type="button" id="oblicz " onClick="ObliczBMI()" value="Oblicz">
<div id="wynik"></div>


</div>
    <div id="stopka">Wykonała Katarzyna Śmierzchalska </div>

</body>
<script src="oblicz.js"></script>
</html>