function tlo(kolor)
{
	var prawy=document.getElementById("prawy");
	prawy.style.background= kolor;
}

function colorfont()
{
	var prawy=document.getElementById("prawy");
	var color = document.getElementById("color");
	prawy.style.color= color.value;
	
}
function rozmiarFont()
{
	var prawy = document.getElementById("prawy");
	var rozmiar = document.getElementById("rozmiar").value;
	prawy.style = "font-size:"+ rozmiar + "%";
}
function ramka()
{
	var obraz = document.getElementById("obraz");
	var czyRamka = document.getElementById("ramka").checked;
	if(czyRamka)
	{
		obraz.style.border = "1px solid white";
	}else obraz.style.border = "none";
}

	function punktor(typ)
	{
		var lista=document.getElementById("lista");
		lista.style.listStyleType = typ;
	}
