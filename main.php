<?php

// module 1-2///////////////////////////////////////////
echo 90;
echo "<br>";
echo 'This is PHP';
echo "<br><br>";

// module 3 Const define///////////////////////////////////////////
define('Pi',3.1416);
define('number',112);
define('Name','PHP');

echo Pi;
echo "<br>";
echo number;
echo "<br>";
echo 'Name';
echo "<br><br>";

// Module 4 Arithmetic operators ////////////////////////////////////////////
$number1 = 20;
$number2 = 10;

echo $number1 + $number2;
echo "<br>";
echo $number1 - $number2;
echo "<br>";
echo $number1 * $number2;
echo "<br>";
echo $number1 / $number2;
echo "<br>";
echo $number1 % $number2;
echo "<br>";
echo $number1 ** $number2;
echo "<br><br>";

// Module 5 Conditional operators ////////////////////////////////////////////
var_dump( 4 < 5);
echo "<br>";
var_dump( 4 > 5);
echo "<br>";
var_dump( 4 <= 5);
echo "<br>";
var_dump( 4 >= 5);
echo "<br>";
var_dump( 4 > 5);
echo "<br>";
var_dump( 5 > 5);
echo "<br>";
var_dump(  4 != 7);
echo "<br>";
var_dump( 4 == 5);
echo "<br>";
var_dump( 4 !== 5);
echo "<br>";
var_dump( 4 === 5);
echo "<br><br>";

// Module 6 conditions//////////////////////////

$day = "Friday";
$today = "sunday";

if ($day == "Friday3"){
    echo "Hello World!";
}elseif($today == "Sunday"){
    echo "Hello Earth";
}else{
    echo "Something is wrong!";
}
echo "<br><br>";

// Module 7 Array//////////////////////////

$array = ["hello" , 'World', 2023];

echo $array[0];
echo "<br><br>";
// Module 7 Associative Array//////////////////////////

$form = [
    'Name' => 'Rimon',
    'Mail' => 'rimon@mail.com',
    'Age' => 20,
];

echo $form ["Age"];
echo "<br><br>";
// Module 8 Multidimensional Array//////////////////////////


$multi = [
    'Name' => 'Jahid',
    'Mail' => 'jahid@mail.com',
    'Age' => 20,

    'Address' => [
        'city' => 'Bogura',
        'Postcode' => 5600,

        'Country' => [
            'my' => 'BD',
            'your' => 'US',
        ]
    ]
        ];

echo $multi ['Mail'];
// echo $multi ['my']; *********ERROR***********

echo "<br><br>";

// Module 10 While and do while loop//////////////////////////

$i = 1;


while ($i <= 10) {
   echo $i . 'x3 = ' . $i*3 . '<br>';
   $i++;
}

echo "<br><br>";

$a = 1;
do {
    echo $a . 'x5 = ' . $a * 5 . '<br>';
    $a++;
} while ($a <= 10);
echo "<br><br>";

// Module 12 for and do for each loop//////////////////////

for ($z=1; $z <= 10 ; $z++) { 
    echo $z . 'x12 = ' . $z * 12 . '<br>';
}

$array = [
    1,2,3,4,5,6,7,8,9,10
];

// echo "<br><br>";



foreach ($array as $value) {
    echo $value . '<br>';
}

echo "<br><br>";
// /////////////////////
foreach ($array as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}

echo "<br><br>";
// /////////////////////

foreach ($array as $value) {
   echo $value . 'x2 = '. $value*2 . '<br>';
}

echo "<br><br>";



// Module 14 function//////////////////////

function sum($d, $v){
  return  $d + $v;
}

echo sum(80, 10) * 10;
echo "<br>";

echo sum(10, 10) / 10;
echo "<br>";

echo sum(80, 30) - 10;
echo "<br>";

echo sum(80, 100) + 10;

echo "<br><br>";

// Module 15 function//////////////////////

$mango = [
    10, 20, 30, 40, 50, 10, 40
];

$show = array_unique($mango);

var_dump($show);
?>