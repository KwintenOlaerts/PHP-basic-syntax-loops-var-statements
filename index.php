<?php

/* include en require
Include & Require
They both do essentiely same thing but react to errors differently
require different file ;

syntax:
include('name of file you include');
require does exactly same thing

include carries on with the code if there is an error, require does'nt thats the difference

you see these kind of code in wordpress themes to load in different parts of a template


*/

include ('ninjas.php');
require('ninjas.php')




// Loops

// Forloop
// voor deze condities wil ik deze code uitvoeren die in de block zit
// For Loop

// $footballers = ['Neymar', 'Messi', 'Hazard'];
// // for ($i = 0; $i < count($footballers); $i++)

// // echo $footballers[1]

// foreach ($footballers as $footballer){
//     echo $footballer . '<br />';
// }

// $products = [
//     ['name'=>'Purple Haze', 'price'=> 9],
//     ['name'=>'Lemon Haze', 'price'=> 11],
//     ['name'=>'Amnesia', 'price'=> 10],
//     ['name'=>'Jack Herrer', 'price'=> 7],
//     ['name'=>'Skunk', 'price'=> 6],
//     ['name'=>'Blueberry Cheese', 'price'=> 12],
// ];

// $i = 0;

// //while
// while($i < count($products)){
//     echo $products[$i]['name'];
//     echo '<br />';
//     $i++; 
// }

// Booleans & Comparisions

// echo 5 > 10;
// echo 5 == 5;
// echo 5 != 10;
// echo 5 <= 5;
// echo 5 >= 5;

// strings 

// echo 'sean' < 'yoshi';

// loose vs strict equal comparison
// echo 5 == '5';

// echo true == "1";
// echo false == "";
//browers denkt, ze lijken deels op mekaar, dus hij herkent ze toch als gelijk,
// al is ene een nummer en de andere een string.

// Conditional Statements 
// A big part of programming, 
// if a certain condition is true, then perform this block of code.
// Else this one...

// $price = 20;
// if ($price < 10){
//     echo 'Condition met';
// } elseif ($price < 300){
//     echo '2nd condition met';
// } else {
//     echo 'condition not met';
// }

// $products = [
//     ['name'=>'Purple Haze', 'price'=> 9],
//     ['name'=>'Lemon Haze', 'price'=> 11],
//     ['name'=>'Amnesia', 'price'=> 10],
//     ['name'=>'Jack Herrer', 'price'=> 7],
//     ['name'=>'Skunk', 'price'=> 6],
//     ['name'=>'Blueberry Cheese', 'price'=> 12],
// ];

// foreach[$products as product]{
//     if($product['name'] === 'Amnesia'){
//         break;
//     }
//     if($product['price'] >10){
//         continue;
//     }
//     echo $product['name'] . < />;
// }

// foreach ($products as $product){

    // if($product['price'] < 13 && $product['price'] > 7){
    //     echo $product['name'] . '<br />';
    // }
    
//     if($product['price'] < 10 || $product['price'] > 8){
//         echo $product['name'] . '<br />';
//     }
    
// }






//

// Multidimensional arr 
// = an array inside an array

// $blogs = [['eerste EP'=>'II','Tweede EP'=>'IV', 'derde EP' => 'VIII','likes' => 48],
// ['eerste EP'=>'Twee','Tweede EP'=> 'Vier', 'derde EP'=>'Acht','likes' => 24],
// ['eerste EP'=>'Lyricaal','Tweede EP'=> 'Mystiek', 'derde EP'=>'Inspirerend','likes' => 248]
// ];

// // echo $blogs[2]['Tweede EP'];
// echo count ($blogs);
// $blogs[] = ['Naam'=>'Kwinten', 'Achternaam'=>'Olaerts', 'Woonplaats'=>'Gent'];

// $popped = array_pop($blogs);

// print_r($blogs);

// print_r($blogs[1][1]);

// each value is an array itself
// Indexed arrays
// $peopleOne = ['Lander', 'Boasske', 'Deo'];

// $peopleTwo = array('Laxmi', 'Mark', 'Magda');

// echo $peopleOne[2];

// echo $peopleTwo[1];

// $ages = [20, 24, 28, 50];
// // print_r($ages);

// $ages[1] = 25;
// // print_r($ages);

// $ages[] = 60;
// // print_r($ages);

// array_push($ages, 70);
// // 


// // zo voeg je 2 arrays tesamen
// $peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);

// // tellen van alle arrays
// echo count($ages);

// // associative arrays (key & value pairs)

// $kwintenOne = ['Lander' => 'beast', 'Deo' =>'lyrics'];
// print_r($kwintenOne);

// $kwintenTwo = ['peach'] = 'pink';
// print_r($kwintenTwo);




// $radius = 25;
// $pi = 3.14;

// basic operators - *, /, +, -, **

// order of operation ( B I D M A S)

// echo 2 *(4 + 9) / 3;

// $age = 20;
// $age *= 2;
// echo $age;

// echo pi();

// $stringOne = 'Mijn emailadres is ';
// $stringTwo = 'kwintenolaerts@hotmail.com';

// echo $stringOne.$stringTwo;

// $name = 'biestje';

// echo 'Hey, my name is ' . $name;

// echo "Hallo my name is $name";
// echo 'the ninja screamed "whaaaaazup nigga"';

// // echo $name [2]

// echo strlen($name);
// echo strtoupper($name);
// echo str_replace('b', 'f', $name);

// functions
// function formatProduct($product){
//     echo "{$product['name']}"{$product['price]} to buy <br />"
// }

// Opmerking: als je uw variabelen in uw {} zet dan kan je die functie alleen dan oproepen, same 
//     as in javascript
// je kan een functie schrijven, genaamd global $naamvariabele en als je 
// die aanroept zal het de variabele buiten de functie aanroepen.

// variable scope
// function myfunc(){
//     $price = 10;
//     echo $price;
// }

// myfunc();




?>



