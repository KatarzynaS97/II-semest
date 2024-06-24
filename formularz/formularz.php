<html>
<head>


</head>
<body>

<!--<form action="polaczenie.php" method="post">  zmieniamy na -->
<form id="mojForm1">
	<label for="login">login:</label>
	<input name="login"type="text" id="login" >
	<label for="haslo">haslo:</label>
	<input name="haslo"type="text"  id="haslo" ><br>
	
	<input type="submit" value ="zaloguj"><!--tego nie ma w prostszej wersji-->
	<button onClick="dane()">ok</button>
	
	
</form>
</body>
<script>
//prostszy sposób 

function dane()
{
	var L = document.getElementById("login").value;
	var H = document.getElementById("haslo").value;
	
	const data = new URLSearchParams();//wyszukamy parametry (aby sledzic który uzytkownik )
	data.append('L',L); //doklejam do stałej . tworzymy tablice pojedyńcze cudzysłowy musza byc L w cudzyslowiu nazwa w tablicy a L po przecinku to ziemnna L czyli pobrane dane .
	
	data.append('H',H);//doklejam do stałej. tworzymy tablice pojedyńcze cudzysłowy musza byc
	
	//połaczenie z php
	fetch('polaczenie.php', //do jakiego pliku 
	{
		method: 'post',// tworze obiekt w obiekcie podjae metode post 
		body: data//ciało które bede przesyłać  
	})
	.then(response =>response.text())//wysyłamy dane do php . jak odbierzesz te dane zawsze jest then dane sa odpowiedzią 
	.then(data => console.log(data)) 
	.catch(error => console.error('błąd:', error));//jesli cos sie nie uda wyswietl w consoli jaki bład . dajemy zawsze  
}



/*bez <button onClick="zaloguj()">ok</button>
{
	
	//biore obiekt z html  nasłuchuj tego obiektu (addEventListener) w przypadku gdy ktos kliknie submit wykonaj funkcje e 
	document.getElementById("mojForm1").addEventListener('submit', function(e){
		e.preventDefeult();//uzyj funkcji domyslnie 
		
		const formData = new FromData(this);//definiujemy ziemnna pobieramy obiekt w document 
		//this odnosi sie do obiektu "mojForm1" 
	fetch('polaczenie.php',
	{
		method: 'post',
		body:formData//przesył definiowany w JS. połaczenie z php
	})
	.then(response => response.text()) // nastpenmie przekonwertuj odpowiedz na text 
	.then(data =>
	{
		//odpowiedz którą dostaniesz wyswietl w consol.log
		console.log(data)
	})
	.catch(error =>{ 
		console.error("błąd", error);
	
	
	}
*/
</script>

</html>