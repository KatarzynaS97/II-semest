<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal społecznościowy</title>
    <link rel="stylesheet" href="styl5.css" type="text/css">
</head>
<body>
    <header>
        <section class = "b_left">
            <h2>Nasze osiedle</h2>
        </section>
        <section class = "b_right">
            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'portal');
                $query1 = "SELECT COUNT(*) from dane";
                $result1 = mysqli_fetch_row(mysqli_query($conn, $query1));
                echo '<h5>Liczba użytkowników portalu: ' . $result1[0] . '</h5>';
            ?>
        </section>
    </header>
    <main>
        <section class = "m_left">
            <h3>Logowanie</h3>
            <form action = "uzytkownicy.php" method = "POST">
                login <br><input type="text" name="login"><br>
                hasło <br><input type="password" name="pass"><br>
                <input type = "submit" value="Zaloguj">
            </form>
        </section>
        <section class = "m_right">
            <h3>Wizytówka</h3>
            <?php
                if(!empty($_POST['login']) && !empty($_POST['pass'])){
                    $login = $_POST['login'];
                    $query2 = "select haslo from uzytkownicy where login = '$login'";
                    $result2 = mysqli_query($conn, $query2);
                    $rowcount = mysqli_num_rows($result2);
                    if(!$result2 || $rowcount == 0){
                        echo 'login nie istnieje';
                        mysqli_close($conn);
                    }
                    else{
                        $pass = $_POST['pass'];
                        $passch = sha1($pass);
                        $query3 = "select * from uzytkownicy where haslo = '$passch'";
                        $result3 = mysqli_query($conn, $query3);
                        if(mysqli_num_rows($result3) == 0){
                            echo 'hasło nieprawidłowe';
                            mysqli_close($conn);
                        }
                        else{
                            $login = $_POST['login'];
                            $query4 = "SELECT uzytkownicy.login, dane.rok_urodz, dane.przyjaciol, dane.hobby,dane.zdjecie from uzytkownicy join dane on uzytkownicy.id = dane.id where uzytkownicy.login = '$login'";
                            $result4 = mysqli_fetch_row(mysqli_query($conn, $query4));
                            echo '<section class="data">
                                <img src = "' . $result4[4] . '" alt = "osoba">
                                <h4>' . $login . ' (' . $result4[1] . ')</h4>
                                <p>hobby: ' . $result4[3] . '</p>
                                <h1><img src="icon-on.png" alt=""> ' . $result4[2] . '</h1>
                                <a href = "dane.html"><button>Więcej informacji</button><a>
                            </section>';
                            mysqli_close($conn);
                        }
                    }

                }
            ?>
        </section>
    </main>
    <footer>
        Stronę wykonał: 00000000000
    </footer>
</body>
</html>