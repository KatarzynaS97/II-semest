function oblicz()
{
	let rodzaj = document.getElementById("rodzaj").value;
	let ile_litrow = document.getElementById("ile_litrow").value;
	let wynik = document.getElementById("wynik");
	let cena = '';
	if(rodzaj==1)
	{
		cena=4;
		
	}
		else if(rodzaj == 2)
		{
			cena=3.5;
		
		}
			else
				{
					cena=0;
				}
					wynik.innerHTML = "Koszt paliwa:" + (cena * ile_litrow )+ 'zł';
}