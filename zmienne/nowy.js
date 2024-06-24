function silnia()
{
	
	var sum = 1;
	sumM ="";
	for(let i = 1; i <=3; i++)
	{
		for(let j = 1; j<=3 ; j++)
			
		{
			sumM=sum;
			console.log(sum.toString());
			sum= sum * i *j;
			console.log("sum="+ sumM+"*"+i+"*"+j+"="+sum);
		}
	}
}
//9 wyników  
function silnia2()
{
	
	var sum2 = 1;
	sumM2 ="";
	for(let i = 1; i <=3; i++)
	{
		for(let j = 1; j<=3 ; j++)
			
		{
			for(let k= 1; k<=3 ; k++)
			{
				sumM2=sum2;//niezminiona wartosc przez petle
				sum2= sum2+ i +j+k;//zmieniam wartosc na aktualna 
				
				console.log("sum="+ sumM2 +"+"+i+"+"+j+"+"+k+"="+sum2);
				
				//to co w srodku pętli wykona się pierwsze.
				console.log(sum2);
			}
		}
	}
}
//z każdej petli beda 3 wyniki 3*3*3 =27 wyników 