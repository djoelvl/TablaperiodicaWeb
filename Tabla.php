<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="js/index/index.js" defer></script>

 <style>
     .card{
        border-style: hidden;

     }
 </style>
</head>

<body>
<div class="principal">

    <div class="col-md-6"></div>
    <div class="col-md-6">
<div class="card clase1">

    <?php
        $x = 0;
$f=1;
    $file1 = array("H", "LI", "Na", "K", "Rb", "Cs", "Fr"); 

do {
  if ($f == 1){
    echo "<div  class='elem' id='elemento1' onclick='color(elemento$f)' style='background-color: #89B886; '>$file1[$x] </div>";
  }
  else{
  echo "<div  class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #BEA0C6;'>$file1[$x] </div>";
}
  $x++;
$f++;
} while ($x < 7);

?>
    
    
    </div>
</div>

<div class="card clase1">
    
    
<?php
    $y = 0;
    $f=8;

$file2 = array("Be", "Mg", "Ca", "Sr", "Ba", "Ra"); 
echo "<div class='blank'>   </div>";
do {
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D7A0C3';>$file2[$y] </div>";
  $y++;
} while ($y < 6);
?>


</div>
<div class="card clase1">
<?php
    $y = 0;
    $f=14;
$file2 = array("Sc", "Y", "La-Lu", "Ac-Lr"); 
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
do {
  if($f == 14){
  echo "<div class='elem'id='elemento$f' onclick='color('elemento$f')'  style='background-color: #E6BA55'>$file2[$y] </div>";
}
else if($f == 15){
  echo "<div class='elem'id='elemento$f' onclick='color('elemento$f')'  style='background-color: #E6BA55'>$file2[$y] </div>";
}
else if($f == 16){
  echo "<div class='elem'id='elemento$f' onclick='color('elemento$f')'  style='background-color: #DD9554'>$file2[$y] </div>";

}
else if($f == 17){
  echo "<div class='elem'id='elemento$f' onclick='color('elemento$f')'  style='background-color: #D89381'>$file2[$y] </div>";

}  
$y++;
  $f++;
} while ($y < 4);
?>
</div>

<div class="card clase1">
<?php
    $y = 0;
    $f=18;
$file2 = array("Ti", "Zr", "Hf", "Rf"); 
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
do {
  echo "<div class='elem'id='elemento$f' onclick='color('elemento$f')' style='background-color: #E6BA55'>$file2[$y] </div>";
  $y++;
} while ($y < 4);
?>
</div>

<div class="card clase1">
<?php
    $y = 0;
    $f=22;
$file2 = array("V", "Nb", "Ta", "Db"); 
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
do {
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #E6BA55'>$file2[$y] </div>";
  $y++;
  $f++;

} while ($y < 4);
?>
</div>
<div class="card clase1">
<?php
    $y = 0;
    $f=26;
$file2 = array("Cr", "Mo", "W", "Sg"); 
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
do {
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #E6BA55'>$file2[$y] </div>";
  $y++;
  $f++;
} while ($y < 4);
?>
</div>
<div class="card clase1">
<?php
    $y = 0;
    $f=30;
$file2 = array("Mn", "Mo", "W", "Sg"); 
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
do {
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #E6BA55'>$file2[$y] </div>";
  $y++;
  $f++;

} while ($y < 4);
?>
</div>
<div class="card clase1">
<?php
    $y = 0;
    $f=34;
$file2 = array("Sc", "Y", "La-Lu", "Ac-Lr"); 
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
do {
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #E6BA55'>$file2[$y] </div>";
  $y++;
  $f++;

} while ($y < 4);
?>
</div>
<div class="card clase1">
<?php
    $y = 0;
    $f=38;
$file2 = array("Sc", "Y", "La-Lu", "Ac-Lr"); 
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
do {
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #E6BA55'>$file2[$y] </div>";
  $y++;
  $f++;

} while ($y < 4);
?>
</div>
<div class="card clase1">
<?php
    $y = 0;
    $f=42;
$file2 = array("Sc", "Y", "La-Lu", "Ac-Lr"); 
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
do {
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #E6BA55'>$file2[$y] </div>";
  $y++;
  $f++;

} while ($y < 4);
?>
</div>
<div class="card clase1">
<?php
    $y = 0;
    $f=46;
$file2 = array("Sc", "Y", "La-Lu", "Ac-Lr"); 
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
do {
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #E6BA55'>$file2[$y] </div>";
  $y++;
  $f++;

} while ($y < 4);
?>
</div>
<div class="card clase1">
<?php
    $y = 0;
    $f=50;
$file2 = array("Sc", "Y", "La-Lu", "Ac-Lr"); 
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
echo "<div class='blank'>   </div>";
do {
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #E6BA55'>$file2[$y] </div>";
  $y++;
  $f++;

} while ($y < 4);
?>
</div>
<div class="card clase1">
<?php
    $y = 0;
    $f=54;
$file2 = array("Be", "Mg", "Ca", "Sr", "Ba", "Ra"); 
echo "<div class='blank'>   </div>";

do {
  if($f==54){
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D6DA60'>$file2[$y] </div>";
}
else{
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #F4DA3D'>$file2[$y] </div>";
}
  $y++;
  $f++;
} while ($y < 6);
?>


</div>
<div class="card clase1">
<?php
    $y = 0;
    $f=60;
$file2 = array("Be", "Mg", "Ca", "Sr", "Ba", "Ra"); 
echo "<div class='blank'>   </div>";

do {
  if($f == 60){echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #8FB78B'>$file2[$y] </div>";
  }
  
  else if ($f == 61){
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D6DA60'>$file2[$y] </div>";

  }
  else if ($f == 62){
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D6DA60'>$file2[$y] </div>";

  }
  else if ($f >= 63){
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #F4DA3D'>$file2[$y] </div>";

  }
  $y++;
  $f++;
} while ($y < 6);
?>


</div>
<div class="card clase1">
<?php
    $y = 0;
    $f=66;
$file2 = array("Be", "Mg", "Ca", "Sr", "Ba", "Ra"); 
echo "<div class='blank'>   </div>";

do {
  if($f<= 67){

  
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #8FB78B'>$file2[$y] </div>";
}
else if ($f == 68 ){
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D6DA60'>$file2[$y] </div>";
  }
  else if ($f == 69 ){
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D6DA60'>$file2[$y] </div>";
}
else if ($f == 70){
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #F4DA3D'>$file2[$y] </div>";

}
else if ($f == 71){
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #F4DA3D'>$file2[$y] </div>";

}
  $y++;
  $f++; 
} while ($y < 6);
?>


</div>
<div class="card clase1">
<?php
    $y = 0;
    $f=72;
$file2 = array("Be", "Mg", "Ca", "Sr", "Ba", "Ra"); 
echo "<div class='blank'>   </div>";

do {
  if($f<= 74 ){

  
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #8FB78B'>$file2[$y] </div>";
}

if($f== 75){

  
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D6DA60'>$file2[$y] </div>";
}
if($f== 76){

  
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D6DA60'>$file2[$y] </div>";
}

if($f == 77){

  
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #F4DA3D'>$file2[$y] </div>";
}
  
  $y++;
  $f++;
} while ($y < 6);
?>


</div>
<div class="card clase1">
<?php
    $y = 0;
    $f=78;
$file2 = array("Be", "Mg", "Ca", "Sr", "Ba", "Ra"); 
echo "<div class='blank'>   </div>";

do {
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #A1C9C9'>$file2[$y] </div>";
  $y++;
  $f++;
} while ($y < 6);
?>


</div>
<div class="card" style= "float: inherit;">

    <?php
        $x = 0;
        $f=84;
    $file1 = array("H", "LI", "NA", "K", "Rb", "Cs", "Fr"); 

do {
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #A8C9EC'>$file1[$x] </div>";
  $x++;
  $f++;
} while ($x < 7);

?>
    
    


    </div>



    

</div>
    </div>
    </div>
    <div></div>


<div class="secundaria">
  <div class="card clase2">
    <div class="col-md-6"></div>
    
    <div class="col-md-6">
    <?php
  $k=0;
        $x = 0;
        $f=91;
    $file1 = array("LA", "AC"); 
    do {
      echo "<div class='blank'>   </div>";;
      $k++;
      
    } while ($k < 1);
    
do {

  if($f ==91){
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #DD9554'>$file1[$x] </div>";
}
else{
  echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D89381'>$file1[$x] </div>";

}
  $x++;
  $f++;
} while ($x < 2);

?>
</div>
</div>

 
  <div class="card clase1">
    <div class="col-md-6"></div>
    <?php
  $k=0;
        $x = 0;
        $f=93;
    $file1 = array("LA", "AC"); 
    do {
      echo "<div class='blank'>   </div>";;
      $k++;
    } while ($k < 1);
    
do {
  if($f ==93){
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #DD9554'>$file1[$x] </div>";
  }
  else{
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D89381'>$file1[$x] </div>";
  
  }
  $x++;
  $f++;
} while ($x < 2);

?>
</div>


<div class="card clase1">
    <div class="col-md-6"></div>
    <?php
  $k=0;
        $x = 0;
        $f=95;
    $file1 = array("LA", "AC"); 
    do {
      echo "<div class='blank'>   </div>";;
      $k++;
    } while ($k < 1);
    
do {
  if($f ==95){
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #DD9554'>$file1[$x] </div>";
  }
  else{
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D89381'>$file1[$x] </div>";
  
  }
  $x++;
  $f++;
} while ($x < 2);

?>
</div>

<div class="card clase1">
    <div class="col-md-6"></div>
    <?php
  $k=0;
        $x = 0;
        $f=97;
    $file1 = array("LA", "AC"); 
    do {
      echo "<div class='blank'>   </div>";;
      $k++;
    } while ($k < 1);
    
do {
 if($f ==97){
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #DD9554'>$file1[$x] </div>";
  }
  else{
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D89381'>$file1[$x] </div>";
  
  }
  $x++;
  $f++;
  
} while ($x < 2);

?>
</div>

<div class="card clase1">
    <div class="col-md-6"></div>
    <?php
  $k=0;
        $x = 0;
        $f=99;
    $file1 = array("LA", "AC"); 
    do {
      echo "<div class='blank'>   </div>";;
      $k++;
    } while ($k < 1);
    
do {
 if($f ==99){
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #DD9554'>$file1[$x] </div>";
  }
  else{
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D89381'>$file1[$x] </div>";
  
  }
  $x++;
  $f++;
  
} while ($x < 2);

?>
</div>

<div class="card clase1">
    <div class="col-md-6"></div>
    <?php
  $k=0;
        $x = 0;
        $f=101;
    $file1 = array("LA", "AC"); 
    do {
      echo "<div class='blank'>   </div>";;
      $k++;
    } while ($k < 1);
    
do {
 if($f ==101){
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #DD9554'>$file1[$x] </div>";
  }
  else{
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D89381'>$file1[$x] </div>";
  
  }
  $x++;
  $f++;
  
} while ($x < 2);

?>
</div>

<div class="card clase1">
    <div class="col-md-6"></div>
    <?php
  $k=0;
        $x = 0;
        $f=103;
    $file1 = array("LA", "AC"); 
    do {
      echo "<div class='blank'>   </div>";;
      $k++;
    } while ($k < 1);
    
do {
 if($f ==103){
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #DD9554'>$file1[$x] </div>";
  }
  else{
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D89381'>$file1[$x] </div>";
  
  }
  $x++;
  $f++;
  
} while ($x < 2);

?>
</div>

<div class="card clase1">
    <div class="col-md-6"></div>
    <?php
  $k=0;
        $x = 0;
        $f=105;
    $file1 = array("LA", "AC"); 
    do {
      echo "<div class='blank'>   </div>";;
      $k++;
    } while ($k < 1);
    
do {
 if($f ==105){
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #DD9554'>$file1[$x] </div>";
  }
  else{
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D89381'>$file1[$x] </div>";
  
  }
  $x++;
  $f++;
  
} while ($x < 2);

?>
</div>

<div class="card clase1">
    <div class="col-md-6"></div>
    <?php
  $k=0;
        $x = 0;
        $f=107;
    $file1 = array("LA", "AC"); 
    do {
      echo "<div class='blank'>   </div>";;
      $k++;
    } while ($k < 1);
    
do {
 if($f ==107){
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #DD9554'>$file1[$x] </div>";
  }
  else{
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D89381'>$file1[$x] </div>";
  
  }
  $x++;
  $f++;
  
} while ($x < 2);

?>
</div>

<div class="card clase1">
    <div class="col-md-6"></div>
    <?php
  $k=0;
        $x = 0;
        $f=109;
    $file1 = array("LA", "AC"); 
    do {
      echo "<div class='blank'>   </div>";;
      $k++;
    } while ($k < 1);
    
do {
 if($f ==109){
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #DD9554'>$file1[$x] </div>";
  }
  else{
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D89381'>$file1[$x] </div>";
  
  }
  $x++;
  $f++;
  
} while ($x < 2);

?>
</div>

<div class="card clase1">
    <div class="col-md-6"></div>
    <?php
  $k=0;
        $x = 0;
        $f=111;
    $file1 = array("LA", "AC"); 
    do {
      echo "<div class='blank'>   </div>";;
      $k++;
    } while ($k < 1);
    
do {
 if($f ==111){
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #DD9554'>$file1[$x] </div>";
  }
  else{
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D89381'>$file1[$x] </div>";
  
  }
  $x++;
  $f++;
  
} while ($x < 2);

?>
</div>

<div class="card clase1">
    <div class="col-md-6"></div>
    <?php
  $k=0;
        $x = 0;
        $f=113;
    $file1 = array("LA", "AC"); 
    do {
      echo "<div class='blank'>   </div>";;
      $k++;
    } while ($k < 1);
    
do {
 if($f ==113){
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #DD9554'>$file1[$x] </div>";
  }
  else{
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D89381'>$file1[$x] </div>";
  
  }
  $x++;
  $f++;
} while ($x < 2);

?>
</div>

<div class="card clase1">
    <div class="col-md-6"></div>
    <?php
  $k=0;
        $x = 0;
        $f=115;
    $file1 = array("LA", "AC"); 
    do {
      echo "<div class='blank'>   </div>";;
      $k++;
    } while ($k < 1);
    
do {
 if($f ==115){
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #DD9554'>$file1[$x] </div>";
  }
  else{
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D89381'>$file1[$x] </div>";
  
  }
  $x++;
  $f++;
} while ($x < 2);

?>
</div>

<div class="card clase1">
    <div class="col-md-6"></div>
    <?php
  $k=0;
        $x = 0;
        $f=117;
    $file1 = array("LA", "AC"); 
    do {
      echo "<div class='blank'>   </div>";;
      $k++;
    } while ($k < 1);
    
do {
 if($f ==117){
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #DD9554'>$file1[$x] </div>";
  }
  else{
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D89381'>$file1[$x] </div>";
  
  }
  $x++;
  $f++;
  
} while ($x < 2);

?>
</div>

<div class="card clase2">
    <div class="col-md-6"></div>
    <?php
  $k=0;
        $x = 0;
        $f=119;
    $file1 = array("LA", "AC"); 
    do {
      echo "<div class='blank'>   </div>";;
      $k++;
    } while ($k < 1);
    
do {
 if($f ==119){
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #DD9554'>$file1[$x] </div>";
  }
  else{
    echo "<div class='elem' id='elemento$f' onclick='color('elemento$f')' style='background-color: #D89381'>$file1[$x] </div>";
  
  }
  $x++;
  $f++;
  
} while ($x < 2);

?>
</div>
</div>
<br><br><br><br><br><br><br><br><br>
<div class="col-md-6"></div>
<div class="clase1">
<div class="col-md-6">
<?php

echo"
<table border='2'>
<tr>
  <th style ='background-color:#D7D5D6;'>Metales</th>
  <th style ='background-color:#D7D5D6;'>No Metales</th>
  <th style ='background-color:#D5DB61;'>Metaloides</th>
</tr>
<tr>
  <td style ='background-color:#BFA1C7;'>Alcalinos</td>
  <td style ='background-color:#8EB888;'>Otros no Metales</td>
</tr>

<tr>
  <td style ='background-color:#D7A1C5;'>Alcalinoterros</td>
  <td style ='background-color:#A0CAC9;'>Halogenos</td>
</tr>

<tr>
  <td style ='background-color:#E5BE51;'>Metales de Transicion</td>
  <td style ='background-color:#9DC3E8;'>Gases Nobles</td>
</tr>

<tr>
  <td style ='background-color:#DE9C60;'>Lantanidos</td>
  
</tr>

<tr>
  <td style ='background-color:#D99381;'>Actinidos</td>
  
</tr>

<tr>
  <td style ='background-color:#F7DB3C;'>Otros Metales</td>
  
</tr>

</table>";
?>

</div>
</div>
</center>
</body>

</html>