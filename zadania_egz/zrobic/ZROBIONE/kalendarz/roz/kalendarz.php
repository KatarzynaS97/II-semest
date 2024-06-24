<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title>
    <link rel = "stylesheet" type = "text/css" href = "styl5.css">
</head>
<body>
    <header class = "banner1">
        <img src = "logo1.png" alt = "Mój kalendarz">
    </header>
    <header class = "banner2">
        <h1>KALENDARZ</h1>
        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'egzamin5');
            $query1 = 'SELECT miesiąc, rok FROM zadania where dataZadania = "2020-08-01"';
            $result1 = mysqli_fetch_row(mysqli_query($conn, $query1));
            echo '<h3>miesiąc: ' . $result1[0] . ', rok ' . $result1[1] . '</h3>';
        ?>
        <?php
            if(!empty($_POST['wpis'])){
            $wpis = $_POST['wpis'];
            $query3 = "UPDATE `zadania` SET `wpis` = '$wpis' WHERE `zadania`.`id` = 60";
            mysqli_query($conn, $query3);
           
            }
        ?>
    </header>
    <main>
        <?php
            $query2 = 'SELECT dataZadania, wpis FROM zadania where miesiąc = "lipiec"';
            $result2 = mysqli_query($conn, $query2);
            while($row = mysqli_fetch_row($result2)){
                echo '<section class = "dane">
                        <h5>' . $row[0] . '</h5>
                        <p>' . $row[1] . '</p>
                    </section>';
            }
             mysqli_close($conn);
        ?>
    </main>
    <footer>
        <form action = "kalendarz.php" method = "POST">
            dodaj wpis: <input type = "text" name = "wpis" id = "wpis">
            <input type = "submit" value = "DODAJ">
        </form>
        
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>