function szukaj()
{
	let i1=document.getElementById("i1")
	let i2=document.getElementById("i2")
	let i3=document.getElementById("i3")
	
	$.ajax({
		type:"post",
		url:"php/test.php",
		dataType:"json",
		data:{
			i1:i1,
			i2:i2,
			i3:i3
			
		}
		success: function(resp){
			console.log("działa")
		}
})
}