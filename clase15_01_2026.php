<?php
 
 $num1=28;
 $num2=15;
 //condicionales 

  //condicional if simple 
  if($num1 > $num2){
    echo "$num1 El numero $num1 es mayor que $num2 </p> <br>";
  }else{
    echo "$num2 El numero $num2 es mayor que $num1 </p> <br>";
  }

  //condicional if - elseif - else
  if($num1 > $num2){
    echo "$num1 El numero $num1 es el menor que $num2<br>";
  }elseif($num2 > $num1 && $num2 > $num3){
    echo "$num2 El numero $num2 es el mayor de los tres </p> <br>";

  switch($dia){
    case 1:
      echo "Lunes </p> <br>";
      break;
    case 2:
      echo "Martes </p> <br>";
      break;
    case 3:
      echo "Miercoles </p> <br>";
      break;
    case 4:
      echo "Jueves </p> <br>";
      break;
    case 5:
      echo "Viernes </p> <br>";
      break;
    case 6:
      echo "Sabado </p> <br>";
      break;
    case 7:
      echo "Domingo </p> <br>";
      break;
    default:
      echo "Dia no valido </p> <br>";
      break;
  }

  // bucles 
