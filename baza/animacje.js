	function wyswietl() // łaczenie z php dbselect.php bedzie pobierała dane 
	{
		
	}
	function dodaj()
	{
		let data = document.querySelectorAll(".data"); //chcemy pobrac value zwraca tablice wartości query selector all 
		
	//	to samo co nizej  dla ograniczonej liczby elementów 
	//for(let i=0; i<3; i++)
	//{
		
	//console.log(data[i].value);//idziemy po consol.logu 
	//}
	let tab = new Array();
	let tab2 = [];
		data.forEach(dataS => {
			tab.push(dataS.value);
			tab2.push(data.value);
			
			});
		//console.log(dataS.value)
		//wchodze do pierwszego slementu dataS pobierz z niego value wchodzi do drugiego i tez nazywa sie dataS i pobierz z niego value
		tab.forEach(jd =>{
				console.log(jd)
		
		});
		//POŁACZENIE W SAMYM CZYSTYM JS 
		fetch('insert.php',{
			method: 'GET',
			body: JSON.stringify(tab), headers:{'Content-Type':'application/json'}
		}
		)//przekonwertuj tab na przed JSON [];[];[]; PO JSON {{imie}{nazwisko}{dataur}}
		.then(response => response.text())
		.then(data => console.log(data))
		.catch(error => console.error('Error', error));
		 //catch ma złapać błąd i wyswietlić w consoli 
		//POŁACZENIE W JS.AJAX asynchroniczne pobieranie baz danych  wiele wątko jednocześnie 
		
		/*$ajax({
			url: 'insert.php',
			type: GET,
			contentType: 'application/json',
			data: JSON.stringify(tab),
			success:function(response){
				console.log("ajax jest fajny:)");		
		};
		error:function(error){
			console.log('Error: ', error)//ajax wyłapie błąd czy php dobrze przesłał
		}
	});*/
		wyswietl();
	}