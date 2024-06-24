<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="checkliststyle.css">

</head>
<body>
    <input type="text" id="wartosc">
    <button onClick="dodaj()">+</button>

    <div id="wynik"></div>



    <!--pętle -->

    <div id="kwadraty"></div>
    <br/>
    <br/>
    <button id="dodaj" onClick="suma()">dodaj</button>
    <button id="losuj" onClick="losuj()">losuj</button><br/>

    <input type="text" class="liczba" readonly ><!--tylko do odczytu -->
   
    <input type="text"class="liczba" readonly >

    <input type="text" class="liczba"  readonly>

    <div id="pokaż"></div>


    
    <script src="checklista.js"></script>
</body>
</html>