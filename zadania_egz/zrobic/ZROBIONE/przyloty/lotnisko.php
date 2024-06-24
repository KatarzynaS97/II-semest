<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port lotniczy</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
    <section class="banner1">
        <img src="zad5.png" alt="logo lotnisko">
    </section>
    <section class="banner2">
        <h1>Przyloty</h1>
    </section>
    <section class="banner3">
        <h3>przydatne linki</h3>
        <a href="kwerendy.txt" target="_blank">Pobierz...</a>
    </section>
    <section class="glowny">
        <table>
            <tr>
                <th>czas</th>
                <th>kierunek</th>
                <th>numer rejsu</th>
                <th>status</th>
            </tr>
            <?php 
            $conn = mysqli_connect("localhost", "root", "", "egzamin");
            $sql = "SELECT czas, kierunek, nr_rejsu, status_lotu from przyloty order by czas asc";
            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_row($result)){
                echo '<tr>';
                echo '<td>' . $row[0] . '</td>';
                echo '<td>' . $row[1] . '</td>';
                echo '<td>' . $row[2] . '</td>';
                echo '<td>' . $row[3] . '</td>';
                echo '</tr>';
            }

            mysqli_close($conn);


            ?>

        </table>
    </section>
    <section class="footer1">
        <?php 
        
        if (!empty($_COOKIE["ciasteczko"])) {
            echo "<p><i>Witaj ponownie na naszej stronie lotniska</i></p>";
        }   else {
            echo "<p><b>Dzień dobry! Strona lotniska używa ciasteczek</b></p>";
            setcookie("ciasteczko", 1, time() + 7200);
        }

        ?>
    </section>
    <section class="footer2">Autor: 00000000</section>
</body>
</html>