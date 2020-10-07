<!DOCTYPE html>
<html>
<body>

//contoh dari php dasar
<?php 
echo "Hello World";
?> //INI SCRIP HTML

//BAGIAN A. tipe data pada php
<?php
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
print_r($cars)
?>

<?php
class car {
    function car(){
        $this->model = "VW";
    }
}
//create an object
$herbie = new Car(); 
// show object properties 
echo $herbie->model; 
?>


//BAGIAN B. Kondisi If Else
<?php
$t = date("H"); 
if ($t < "10") { 
 echo "Have a good morning!"; 
} elseif ($t < "20") { 
 echo "Have a good day!"; 
} else { 
 echo "Have a good night!"; 
} 
?>

<?php
$favcolor = "red"; 
switch ($favcolor) { 
 case "red": 
 echo "Your favorite color is red!"; 
 break; 
case "blue": 
 echo "Your favorite color is blue!"; 
 break; 
case "green": 
 echo "Your favorite color is green!"; 
 break; 
default: 
 echo "Your favorite color is neither red, blue, nor green!"; 
} 
?>


//BAGIAN C. Kondisi Looping
while (condition is true) { 
 code to be executed; 
} 
<?php
$x = 1; 
while($x <= 5) { 
 echo "The number is: $x <br>"; 
 $x++; 
} 
?>
do { 
 code to be executed; 
} while (condition is true); 
<?php
$x = 1; 
do { 
 echo "The number is: $x <br>"; 
 $x++; 
} while ($x <= 5); 
?> 
for (init counter; test counter; increment counter) { 
 code to be executed for each iteration;
} 

<?php
for ($x = 0; $x <= 10; $x++) { 
 echo "The number is: $x <br>"; 
} 
?> 
foreach ($array as $value) { 
 code to be executed;
} 
contoh 1 (foreach) 
<?php
$colors = array("red", "green", "blue", "yellow"); 
foreach ($colors as $value) { 
 echo "$value <br>"; 
} 
?> 
//contoh 2 (foreach)
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); 
foreach($age as $x => $val) { 
 echo "$x = $val<br>"; 
} 
?>


//Break dan Continue
<?php
for ($x = 0; $x < 10; $x+=3) { 
 if ($x == 4 || $x == 7 ) { 
 break; 
 } 
 echo "The number is: $x <br>"; 
} 
?>
<?php
$x = 0; 
while($x < 10) { 
 if ($x == 4) { 
 $x++; 
 continue; 
 } 
 echo "The number is: $x <br>"; 
 $x++; 
} 
?>

//BAGIAN D. Fungsi pada PHP'
<?php
function writeMsg() { 
 echo "Hello world!"; 
} 
function kalikan3Bilangan($a,$b,$c){
    return $a*$b*$c;
}
function f2($x,$y){
   return kalikan3Bilangan($x,$y,$x+$y);
}
echo f2(5,6);
?>

<html> <body> <h1>Welcome to my home page!</h1> <p>Some text.</p> <p>Some more text.</p>
<?php include 'footer.php';?>
</body>

</html> 
<html> <body> <h1>Welcome to my home page!</h1>
<?php require 'noFileExists.php'; 
echo "I have a $color $car."; 
?>

</body>
</html>