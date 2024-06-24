function dodaj()
{
   // let val = document.querySelectorAll("input");
    let valID= document.getElementById("wartosc").value;

    document.getElementById("wartosc").value = ""; //czyścimy wartośc 
    document.getElementById("wynik").innerHTML+=`
    <div>

    <span>`+valID+` </span>

    <button onClick =" usun(this)">usun</button>

    <button onClick = "zrobione(this)" class="off"></button>

    </div>
    `
}

/*
function usun(element)//ten element odpowiada w button usun this
{
    var rodzic = element.parentNode;
    rodzic.remove();

}*/
/*
function zrobione(element)//ten element odpwoiada w button zroione this
{
    //dodac klase do elementu 
    // element.classList.add("on");

    //usunąć klasę kiedy chcemy odznaczyć 
    //element.classList.toggle('on') ; na off dziala na on nie 
    if( element.classList.contains("on")) //czty w elemencie znajduje sie klasa 
        {
            element.classList.remove("on") //jesli tak to usówa 
        }else{
            element.classList.add("on")//jesli nie to dodaje 
        }
    
}
*/

    
/*
function pentla()
{

let viev = "";//zdefinuj mnienna view jako pusty ciag znaków 


    for(let i=1; i<=3; i++)
    {
        viev = viev + "<div class ='kwadrat'></div>";
        
    }
    let suma= 0;
    let cyfra = 0;
    for(let j=1;j<=30;j++)
    {
        cyfra = Math.floor(Math.random()*10);

        suma = suma+ cyfra;

        console.log(cyfra);
        console.log(suma);
    }







    document.getElementById("kwadraty").innerHTML=viev;
}
    //wywołaj funkcję pentla po załadowaniu strony 
    window.onload=pentla();*/

/*
function suma()
{
    let liczba = document.querySelectorAll(".liczba");
    let sum =0;
    liczba.forEach(element => { //element tymaczasowa reorezentacja wszystkie co interpretujemy w kazdej petli cos innego pierwszy elemenet albo drugi albo trzeci 
        console.log(element.value);
        sum = sum + parseInt(element.value);
    });
    document.getElementById("wynik").innerHTML= sum;
}

let pokaz = document.getElementById("pokaz");


function losuj()
{
    let liczba = document.querySelectorAll(".liczba");
    liczba.forEach(element => {
        element.value = Math.floor(Math.random()*10); 
        
    });
}*/


/*
//silnia wynik w consoli 120
function silnia()
{
    var sum = 1;
    for(let i=1; i<=5 ; i++)
    {
       sum = sum*i 
    }
     console.log(sum);
}window.onload= silnia();


*/



















