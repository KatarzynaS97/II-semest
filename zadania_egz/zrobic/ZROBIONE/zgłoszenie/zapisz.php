<?php
    if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['address'])){
        $conn = mysqli_connect('localhost', 'root', '', 'wedkowanie');
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $query = "INSERT into Karty_wedkarskie (imie, nazwisko, adres, data_zezwolenia, punkty) values ('$first_name', '$last_name', '$address', NULL, NULL)";
        mysqli_query($conn, $query);
        mysqli_close($conn);
        header("location:karta.html");
        unset($_POST);
    }
    else{header("location:karta.html");}
?>