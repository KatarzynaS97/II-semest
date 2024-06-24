<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<style type="text/css">
body{
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:11px;
font-weight:normal;
}
th.a{
font-weight:normal;
font-size:11px;
}
td.a{
font-size:11px;
font-weight:bold;
}
td.wyd{
padding-top:10px;
font-weight:bold;
font-size:11px;
}
td.tit{
padding-top:5px;
font-weight:bold;
font-size:11px;
color:#A60000;
}
td.opi{
padding-top:5px;
font-size:11px;
}
td.b{
font-size:11px;
font-weight:bold;
}
td.t{
font-size:11px;
}
td.mon{
font-size:12px;
text-align:center;
padding-top:10px;
padding-bottom:10px;
font-weight:bold;
}
.kom{
border:#CCCCCC solid 1px;
text-align:center;
width:30px;
height:20px;
font-size:11px;
padding-top:3px;
background:#FFD9D9;
}
.komN{
border:#CCCCCC solid 1px;
text-align:center;
width:30px;
height:20px;
font-size:11px;
padding-top:3px;
}
.komA{
font-size:11px;
border:#CCCCCC solid 1px;
text-align:center;
width:30px;
height:20px;
background:#DAE9F3;
padding-top:3px;
}

</style>
<body>
<?php
// funkcja do połącznia z bazą danych
function lacz_bd()
{
   $db = new mysqli('localhost', 'root', '', 'testowa');  
 
   if (! $db)
      return false;
   $db->autocommit(TRUE);
   return $db;
}


$totalHtml = ''; // ta zmienna bedzie zawierać cały nasz kod kalendarza

$NumMonthsToDisplay = 1; // Ile kalendarzy ma zostac wyswietlonych na stronie
$DayWeekStarts = 2;       // od ktrego dnia zaczac 1=Nd,2=PN,3=Wt,4=Sr,5=Cz,6=Pt,7=So
$NumMonthsPerRow = 3;     // ile kalendarzy ma byc w jednej lini
/*===== Laczymy sie z baza i pobiueramy do tablicy $daty wszystkie daty w bazie =========================*/
$db = lacz_bd();

if (!$db)
{
echo "brak połączenia";
return;
}

$zapytanie = "select data from event";
$wynik = $db->query($zapytanie);
$ile_znalezionych = $wynik->num_rows;
			for ($i=0; $i <$ile_znalezionych; $i++)
                {
                        $wiersz = $wynik->fetch_assoc();
                        $daty[] = $wiersz['data'];

                                               
                                               
                                               
                                               
                                               
                                               



                                                }



//populate MonthNames & DayNames tablica nazw
$MonthNames = array(1=>'Styczen','Luty','Marzec','Kwiecien','Maj','Czerwiec','Lipiec','Sierpien','Wrzesien','Pazdziernik','Listopad','Grudzien');
$DayNames = array(1=>'ND','PN','TW','SR','CZ','PT','SO');


$CurDate = getdate();


//Inicjalizujemy zmienne

if( isset($_GET['data'])  and ($_GET['data']) )
{
   $q = explode("/", $_GET['data']);
   $CurrentMonth = $q[1];
   $CurrentYear  = $q[2];  
}
else
{
   $CurrentYear = $CurDate['year'];
   $CurrentMonth = $CurDate['mon'];
}





$MonthLoop = $CurrentMonth;
$YearLoop = $CurrentYear;
$MonthsPerRowCounter = 1;
$NumRowsInMainTable = $NumMonthsToDisplay/3;


$totalHtml .= '<table border="1" align="center" cellpadding="0" cellspacing="0">';


for ($j=1; $j<=$NumMonthsToDisplay; $j++) {     // Glowna petla , 1 iteracja na kazdy miesiac
//====================================================================================

//sprawdzamy, kiedy rozpoczyna sie nowy wiersz
if($MonthsPerRowCounter == 0){$beginnewline=1;} else {$beginnewline=0;}
if($MonthsPerRowCounter == $NumMonthsPerRow){$endline=1;} else {$endline=0;}
if ($beginnewline == 1){print "<tr>";}

//obliczamy liczbe dni w tym miesiacu/roku
$NumberOfDays = date("t",mktime(0,0,0,$MonthLoop+1,$YearLoop,-1));

//obliczamy pierwszy dzien tygodnia
$FirstDayOfWeek = date("l",mktime(0,0,0,$MonthLoop,1,$YearLoop));

//obliczamy liczbe dni ile jest pustych przed pierwszym
switch ($FirstDayOfWeek) {
        case 'Monday':
                $DayOfWeekNum = 2;
                switch ($DayWeekStarts) {
                        case '1': $offset=1; break;
                        case '2': $offset=0; break;
                        case '3': $offset=6; break;
                        case '4': $offset=5; break;
                        case '5': $offset=4; break;
                        case '6': $offset=3; break;
                        case '7': $offset=2; break;
                }
        break;
        case 'Tuesday':
                $DayOfWeekNum = 3;  
                switch ($DayWeekStarts) {
                        case '1': $offset=2; break;
                        case '2': $offset=1; break;
                        case '3': $offset=0; break;
                        case '4': $offset=6; break;
                        case '5': $offset=5; break;
                        case '6': $offset=4; break;
                        case '7': $offset=3; break;
                }
        break;
        case 'Wednesday':
                $DayOfWeekNum = 4;  
                switch ($DayWeekStarts) {
                        case '1': $offset=3; break;
                        case '2': $offset=2; break;
                        case '3': $offset=1; break;
                        case '4': $offset=0; break;
                        case '5': $offset=6; break;
                        case '6': $offset=5; break;
                        case '7': $offset=4; break;
                }
        break;
        case 'Thursday':
                $DayOfWeekNum = 5;
                switch ($DayWeekStarts) {
                        case '1': $offset=4; break;
                        case '2': $offset=3; break;
                        case '3': $offset=2; break;
                        case '4': $offset=1; break;
                        case '5': $offset=0; break;
                        case '6': $offset=6; break;
                        case '7': $offset=5; break;
                }
        break;
        case 'Friday':  
                $DayOfWeekNum = 6;
                switch ($DayWeekStarts) {
                        case '1': $offset=5; break;
                        case '2': $offset=4; break;
                        case '3': $offset=3; break;
                        case '4': $offset=2; break;
                        case '5': $offset=1; break;
                        case '6': $offset=0; break;
                        case '7': $offset=6; break;
                }
        break;
        case 'Saturday':
                $DayOfWeekNum = 7;  
                switch ($DayWeekStarts) {
                        case '1': $offset=6; break;
                        case '2': $offset=5; break;
                        case '3': $offset=4; break;
                        case '4': $offset=3; break;
                        case '5': $offset=2; break;
                        case '6': $offset=1; break;
                        case '7': $offset=0; break;
                }
        break;
                default:
                $DayOfWeekNum = 1;
                switch ($DayWeekStarts) {
                        case '1': $offset=0; break;
                        case '2': $offset=6; break;
                        case '3': $offset=5; break;
                        case '4': $offset=4; break;
                        case '5': $offset=3; break;
                        case '6': $offset=2; break;
                        case '7': $offset=1; break;
                }
}

//$temp = fmod($MonthLoop,3);

//rozpczynamy wyswietlanie kalendarza

$totalHtml .= '<td>';
$totalHtml .= '<table border="0" cellpadding="1" cellspacing="0" width="190" >';
$totalHtml .= '<tr><td class="mon" colspan="7">'.$MonthNames[$MonthLoop].' '.$YearLoop.'</td></tr>';
$totalHtml .= '<tr>';


//Wyswietlamy dni tygodnia, uzyjemy $DayWeekStarts jako pierwszy dzien
$i=0;
for ($i=1; $i<=7; $i++){
        $thisDay = $i-1 + $DayWeekStarts;
        if ($thisDay>7){$thisDay=$thisDay-7;}
        $totalHtml .= '<th class="a">'.$DayNames[$thisDay].'</th>';
}
$totalHtml .= '</tr>';
$totalHtml .= '<tr>';

//wyswietlamy puste pola tabeli
if ($offset > 0) {
        $totalHtml .= str_repeat('<td class="n">&nbsp;</td>',$offset);
}
$D = date("j");
$M = date("n");
$Y = date("Y");
//wyswietlamy dni tygodnia, Day1-$NumberOfDays
$i=0;
for ($i=1; $i <= $NumberOfDays; $i++) {
        $aktual = $i.'/'.$MonthLoop.'/'.$YearLoop;
        $now = $D.'/'.$M.'/'.$Y;
        $DayOfWeek = date("l",mktime(0,0,0,$MonthLoop,$i,$YearLoop));
        if($DayOfWeekNum == $DayWeekStarts) {
                $totalHtml .= '<tr>';
        }
        if ($aktual==$now){
                if(in_array($aktual,$daty)){
                $totalHtml .= '<td class="b"><div class="kom"><a href="5_3.php?data='.$aktual.'">'.$i.'</a></div></td>';
                }else{
                $totalHtml .= '<td class="b"><div class="kom">'.$i.'</div></td>';
                }
        }else if(in_array($aktual,$daty)) { //jesli data jest w tablicy kolorujemy i linkujemy dany dzien
                $totalHtml .= '<td class="a"><div class="komA"><a href="5_3.php?data='.$aktual.'">'.$i.'</a></div></td>';
        } else {
                $totalHtml .= '<td class="t" style="color:#000000;"><div class="komN">'.$i.'</div></td>';
        }
        if($DayOfWeekNum == ($DayWeekStarts-1)) {
                $totalHtml .= '</tr>';
        }
        if($DayOfWeekNum == 7){$DayOfWeekNum=1;} else{$DayOfWeekNum++;}
}

//wyswietlamy puste kolumny ka koncu miesiaca
if ( ( ($offset == 5) && ($NumberOfDays > 30) ) || ( ($offset == 6) && ($NumberOfDays > 29) ) ) {
        if (42-$NumberOfDays-$offset > 0) {
                $totalHtml .= str_repeat('<td class="n">&nbsp;</td>',42-$NumberOfDays-$offset);
        }
        $totalHtml .= '</tr>';
} elseif ( ($NumberOfDays != 28) || ($offset > 0) ) {
        if (35-$NumberOfDays-$offset > 0) {
                $totalHtml .= str_repeat('<td class="n">&nbsp;</td>',35-$NumberOfDays-$offset);
        $totalHtml .= '</tr>';
        }
}

//koniec wyswiatlania kalendarza

$totalHtml .= '</table></td>';


//increase Month count each time through the loop, reset to Jan if this iteration is Dec
if ($MonthLoop == 12){$MonthLoop = 1; $YearLoop++;} else{$MonthLoop++;}
if ($MonthsPerRowCounter == $NumMonthsPerRow) {$MonthsPerRowCounter = 1;} else{$MonthsPerRowCounter++;}

if ($endline == 1){
$totalHtml .= '</tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
}
//====================================================================================
}




$totalHtml .= '</td></tr>';


/*===== Jeśli przekazany został parametr data wyświetlamy wydarzenia w danym dniu =========================*/
//if($_GET['data'])
if( isset($_GET['data'])  and ($_GET['data']) )
{
$dataSelect = $_GET['data'];
$zapytanie = "select data, title, opis from event where data='$dataSelect'";
$wynik = $db->query($zapytanie);
$ile_znalezionych = $wynik->num_rows;
if($ile_znalezionych>0){
$totalHtml .='<tr><td class="wyd" colspan="7">Wydarzenia z '.$dataSelect.'</td></tr>';
        for ($i=0; $i <$ile_znalezionych; $i++)
                {
                        $wiersz = $wynik->fetch_assoc();
                        $totalHtml .='<tr><td class="tit" colspan="7">'.$wiersz['title'].'</td></tr>';
                        $totalHtml .='<tr><td class="opi" colspan="7">'.$wiersz['opis'].'</td></tr>';
                }
}
}
$totalHtml .= '</table>';
$totalHtml .= '</body>';
$totalHtml .= '</html>';

echo $totalHtml;
?>

</body>
</html>