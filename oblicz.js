function obliczBMI()
{
    var waga=document.getElementById("waga").value;
    var wzrost=document.getElementById("wzrost").value;
    var oblicz=document.getElementById("oblicz");

    var wynik= document.getElementById("wynik");
   var bmi=Math.round((waga/(wzrost*wzrost)));

   if(bmi<=18)
   {
    wynik.innerHTML="Twoje BMI wynosi:"+ bmi + "- Jesteś wychudzony";
   }
   else if(bmi>=18.5 && bmi<=25)
   {
    wynik.innerHTML="twoje BMI wynosi: "+ bmi +"- Prawidłowa masa ciała";
   }
   else
   {

   }

}
