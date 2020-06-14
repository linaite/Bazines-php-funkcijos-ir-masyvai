<?php
//1.Write a script which will display the following string -"The memory of that scene for me is like a frame of film forever frozen at that
//moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
//and the words 'red', 'green' and 'white' will come from $color.

$colors = ['white', 'green', 'red', 'blue', 'black'];

print "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon" . '<br><br>';

//2.Write a PHP script which will display the colors in the following way :

$colors = ['white', 'green', 'red'];
foreach ($colors as $color) {
    print $color . ', ';
}
print '<br><br>';

sort($colors);
var_dump($colors);
//Output :
//green
//red
//white
print "<br>";

//3. Create a PHP script which displays the capital and country name from the above array $ceu.
//    Sort the list by the capital of the country.

$ceu = [
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw",
];
//isrusiuoja sostines pagal abecele//
asort($ceu);

foreach ($ceu as $country => $capital) {
    print "The capital of $country is $capital" . '<br>';
}
print '<br>';

//4.Delete an element from the above PHP array. After deleting the element,
//integer keys must be normalized.
//Sample Output :
//array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
//array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }

$x = array(1, 2, 3, 4, 5);

unset($x[3]);
$x = array_values($x);
var_dump($x);

print '<br>';

//5. Write a PHP script to get the first element of the above array.
// Expected result : white
$color = [
    4 => 'white',
    6 => 'green',
    11 => 'red'
];
print reset($color);

print '<br>';
print '<br>';

//6. Write a PHP script which decodes the following JSON string.
//Expected Output :
//Title : The Cuckoos Calling
//Author : Robert Galbraith
//Publisher : Little Brown


$jarray = '{
    "Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
        "Publisher": "Little Brown"
}}';

$json = json_decode($jarray, true);
//var_dump($json);
foreach ($json as $item) {
    if (is_string(($item))) {
        print $item . '<br>';
    } elseif (is_array($item)) {
        foreach ($item as $value) {
            print $value . '<br>';
        }
    }
}
//7. Write a PHP script that inserts a new item in an array in any position.
//Expected Output :
//Original array :
//1 2 3 4 5
//After inserting '$' the array is :
//1 2 3 $ 4 5

$a = [1, 2, 3, 4, 5];
$inserted = '$';
array_splice($a, 3, 0, $inserted);
var_dump($a);

//8. Write a PHP script to sort the following associative array :

$people = [
    "Alfred" => "31",
    "Blake" => "41",
    "Cester" => "39",
    "Ramesh" => "40",
];
//a) ascending order sort by value
asort($people);
var_dump($people);

//b) ascending order sort by Key
ksort($people);
var_dump($people);

//c) descending order sorting by Value
arsort($people);
var_dump($people);

//d) descending order sorting by Key
krsort($people);
var_dump($people);

//9. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.

$temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

//$average = round(array_sum($temperatures) / count($temperatures));
//print $average;

//// 2. variantas su foreach apskaiciuoti average number//
$sum=0;
foreach ($temperatures as $temperature){
    $sum+=$temperature;
}
print $sum;

print '<br>';
print '<br>';

$count=count($temperatures);
$average_number=$sum/$count;
print $average_number;

print "<br>";
print "<br>";

////sort the temperatures in ascending order
$from_lowest_temp = sort($temperatures);
foreach ($temperatures as $temperature) {
    print $temperature . ' ';
}
print "<br>";
print "<br>";

print "List of five lowest temperatures : ";
for ($i = 0; $i < 5; $i++) {
    print $temperatures[$i] . ' ';
}
print "<br>";
print "<br>";

$highest_temp = arsort($temperatures);
foreach ($temperatures as $temperature) {
    print $temperature . ' ';
}
print "<br>";
print "<br>";

print "List of five highest temperatures : ";
for ($i = 0; $i < 5; $i++) {
    print $temperatures[$i] .  ' ';
}
print "<br>";
print "<br>";


//10. Write a PHP program to sort an array of positive integers using the Bead-Sort Algorithm.
//According to Wikipedia "Bead-sort is a natural sorting algorithm, developed by Joshua J. Arulanandham, Cristian S.
// Calude and Michael J. Dinneen in 2002. Both digital and analog hardware implementations of bead sort can achieve
// a sorting time of O(n); however, the implementation of this algorithm tends to be significantly slower in software
// and can only be used to sort lists of positive integers".

$array = [5, 3, 1, 3, 8, 7, 4, 1, 1, 3];
print 'Išsivardampinam masyva';
var_dump($array);
//eiles tvarka pasidarom array keys
$array_keys = array_keys($array);
$array_value = $array;
//issirusiuojam array values nuo max iki min
arsort($array_value);
//sukomplektuojam array_keys su array_value
$new_array = array_combine($array_keys, $array_value);

var_dump($array_keys);
var_dump($array_value);
var_dump($new_array);


//11. Write a PHP program to merge (by index) the following two arrays.

$array1 = [
    [77, 87],
    [23, 45],
];
var_dump($array1);

$array2 = array("w3resource", "com");
var_dump($array2);

$i = 0;
foreach ($array1 as $array) {
    array_unshift($array, $array2[$i]);
    $i++;
    $array3[] = $array;
}
var_dump($array3);


//12. Write a PHP function to change the following array's all values to upper or lower case.
$Colors = [
    'A' => 'Blue',
    'B' => 'Green',
    'c' => 'Red',
];
$Colors = array_map('strtolower', $Colors);
var_dump($Colors);

$Colors = array_map('strtoupper', $Colors);
var_dump($Colors);

//13. Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.

for ($x = 200; $x <= 250; $x += 4) {
    print $x . ', ';
}

//14. Write a PHP script to get the shortest/longest string length from an array.

$strings = ["abcd", "abc", "de", "hjjj", "g", "wer"];
var_dump($strings);

$lengths = array_map('strlen', $strings);
var_dump($lengths);

// Show min and max string length
echo "The shortest is " . min($lengths) . ". The longest is " . max($lengths);

print '<br>';
print '<br>';

//15. Write a PHP script to generate unique random numbers within a range
//Sample Range : (11, 20)

$n = range(11, 20);
shuffle($n);

for ($x = 0; $x < 10; $x++) {
    echo $n[$x] . ', ';
}
print '<br>';
print '<br>';

//16. Write a PHP script to get the largest key in an array.

$test = [
    "1" => "test",
    "5" => "bla",
    "3" => "blubb",
];

echo max(array_keys($test));

print '<br>';
print '<br>';


//17. Write a PHP function that returns the lowest integer that is not 0.

$temp = [-1, 0, 1, 12, -100, 1];
$min_value = min($temp);
print $min_value;

print '<br>';
print '<br>';

foreach ($temp as $item) {
    if ($item !== 0) {
        print $item . ', ';
    }
}
print '<br>';
print '<br>';


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Uzduotys</title>
</head>
<body>
<!--    islistina su buletais- 2 uzduotis-->
<ul>
    <?php foreach ($colors as $color): ?>
        <li><?php print $color; ?></li>
    <?php endforeach; ?>
</ul>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>
