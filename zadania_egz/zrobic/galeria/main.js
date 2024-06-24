function zmien(img)
{
	let zdj_glowne= document.getElementById("zdj_glowne");
	zdj_glowne.src=img;
}

let zmiana=0;
function zamienPolub()
{
	zmiana++
	const polub=document.getElementById("polub");
	if(zmiana%2==0)
	{
		polub.src="icon-off.png";
		
	}
	else {
		polub.src ="icon-on.png";
	}
}

