<html>
<head>



</head>
<body>
	<input type="number" id="liczba1">
	<input type="number" id="liczba2">
	<button id="oblicz" onClick="oblicz()">oblicz </button>
	<div id="wynik"></div>
<script>
function oblicz()
{
	console.log('aaa')
	var a=document.getElementById("liczba1").value;
	var b= document.getElementById("liczba2").value;
//	var wynik = document.getElementById("wynik");
	
	if((a%1==0)&&(b%1==0))//czy mamy liczby całkowite 
	{
		let x = true;//dopóki x bedzie prawdziwe 
		while(x)
		{
			if(a!==b)
			{
				if(a>b)
				{
					a=a/(a-b);
				}
				else
				{
					b=b/(b-a);
				}
				
			}
			else{
				alert("wynik"+a);
				x=false;
			
			}
		}
	}
	else
	{
		alert('błąd');
	}
}

/*function oblicz()
{
	
	var a=document.getElementById("liczba1").value;
	var b= document.getElementById("liczba2").value;
	var wynik = document.getElementById("wynik");
	
	let x=1;
	
	for(let i=0; i<x; i++)
	{
	if(a!==b)
		{
			if(a>b)
			{
				a=a/(a-b);
			}
			else
				{
				b=b/(b-a);
				}
				x++;
		}
	else
			{
				alert(a)
			}
}
}

*/


</script>

</body>
</html>