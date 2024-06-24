
function wybOpcje(element, value)
{

	let opcja = element.textContent.trim();
	$('.opcje').each(function(){
		$(this).removeClass('on');
	});
	$(element).addClass('on');
	
	wyswietlView(value);
	
}
function wyswietlView(value){
	document.getElementById("view").innerHTML = value;
	$.ajax({
		type:"get",
		url:"./php/getData.php",
		dataType:"json",
		// typ zapisu danych z duza iloscia nazwisów wysyla napis jako nawias . 
		data:{
			value:value
		},
	//połaczenie zastanie odbrane bez error 	
	success: function(response){
		console.log("xd");
	document.getElementById("view").innerHTML = null;
	document.getElementById("view").innerHTML += `${response.dane[0].id} ${response.dane[0].imie}`;
	
		}
	})
}

