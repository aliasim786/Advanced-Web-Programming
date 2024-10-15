<!DOCTYPE HTML>
<html>
<head>
<title>Introduction to PHP</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link href="/styles.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/style.css" type="text/css" rel="stylesheet">
</head>

<body>


</body>
<?php

// b) Modify the message so that it appears as a <h1> heading.
echo "<h1>Welcome to my website</h1>";

// 2. Uncomment the following three PHP variables.
// a) Using these variables and a PHP echo statement output the message 'Hi Fred. Your favourite colour is red. Your favourite website is http://www.hud.ac.uk.'
// b) Use HTML <em> tags to italicise the word Fred.
// c) Use an HTML anchor element to make the text http://www.hud.ac.uk into an actual hyperlink that links to the University homepage. Again, this should all be done using a PHP echo statement.


 $name = "Fred";
 $colour = "red";
 $url="http://www.hud.ac.uk";

 echo "<p>Hi <em>{$name}</em>. Your Fav {$colour} is Red. Your fav Website is <a href='www.hud.ac.uk'>{$url}</a>.</p>";


// 3. Uncomment following two PHP variables.
// a) Create a third variable, name it $total. $total should be assigned a value that is the sum of $num1 and $num2. Using these variables and a PHP echo, output the value of $total e.g. '10 + 20 = 30'
// b) Create another variable, call it $average. $average should be assigned a value that is the mean average of $num1 and $num2. Again, use a PHP echo statement to output the value of $average.


 $num1=10;
 $num2=20;
$total= $num1 + $num2;
$average= $total / 2;

echo "<p>{$num1} + {$num2} is equal to {$total}</p>";
echo "<p>The average of the 2 number is {$average}</p>";

// 4. Uncomment following three PHP variables.
// The variables $assign1, $assign2 and $assign3 store the marks out of 100 for a student for three different assignments. Assignment 1 has a weighting of 40%, Assignment 2 has a weighting of 25% and Assignment 3 has a weighting of 35%. Create another PHP variable called $overall. Using PHP mathematical operators,
// calculate an overall mark for the student and assign this value to the variable $overall. Use an echo statement to print this mark into the HTML page.

$assign1 = 27;
$assign2 = 38;
$assign3 = 67;
$overall = (0.4 * $assign1) + (0.25 * $assign2) + (0.35 * $assign3);

echo "<p> the overall mark for this student is {$overall}</p>";

// a) In order to pass a module students must get an overall mark that is greater than or equal to 40. Write a PHP if statement that will test if $overall is greater than or equal to 40. If it is, use an echo statement to output "passed". If it isn't use an echo statement to output "failed"

if ($overall >= 40) {
    echo "<p> You have passed</p>";
}
else {
    echo "<p>You have failed</p>";
}


// b) Write another if statement. This time it should test the value of $overall and output if the student has an A, B, C, D etc.

 if ($overall >= 75){
    echo "<p> You got an A</p>";
}
else if ($overall > 50){
echo "<p> You got an B</p>";
}
else if ($overall > 25){
    echo "<p> You got an C</p>";
 }
else{
    echo "<p> You got an F</p>";
 }

// The Kaboom Gas company charge their customers for gas as follows:
// Units of Gas Used Cost(£)
// Units of Gas:0 to 500 Cost:£10
// Units of Gas:501 to 1000 Cost:£10 + 5p for each unit over 500
// Units of Gas:Over 1000 Cost:£35 + 3p for each unit over 1000
// The following PHP code assigns a random number value to the variable $units. Uncomment the code and write some additional PHP code that will calculate and output the cost of a gas bill based on the value of $units.

$units = rand(0,2000);
echo "<p>Units has a value of {$units}.</p>";

$cost = 0;
if($units > 1000){
    $cost = 35;
    for($i = 1000 ; $i < $units; $i += 1){
        $cost = $cost + 0.03;
    }
}
else if ($units >= 501){
    $cost = 10;
    for($i = 500; $i < $units; $i += 1){
        $cost = $cost + 0.05;
    }
}
else {
    $cost = 10;
}

echo $cost;

// 7.
// Uncomment the following code
// a) Modify the following code so that the loop outputs the numbers 5-15.
// b) Re-write the loop as a while loop.

echo "<br>";

for($i=5;$i<=15;$i++)
{
    echo "{$i}";
}
echo "<br>";

$i = 5;

while ($i <= 15 ){
    echo "{$i}";
    $i++;
}

do{
    
}while($i <= 15);


// 8. Arrays
// a) Output the entire contents of the $countries array using a var_dump() or print_r() statement.
// b) Using this array, write a single echo statement that outputs 'USA is in North America'.
// c) Using this array, write a single echo statement that outputs 'China, India, Indonesia and Pakistan are all in Asia'.
// d) Output the entire contents of the array as an HTML list using a foreach loop.
// e) Uncomment the line that declares the $moreCountries array. Join the two arrays together  Do some research using php.net.
// http://php.net/manual/en/function.array-merge.php. Output the joined array using a var_dump() or print_r() statement.
// f) Sort this larger list of countries into reverse alphabetical order (do some research into sorting functions) and output the result using a foreach loop.

echo "<br>";
$countries=["China","India","USA","Indonesia","Brazil","Pakistan"];

$moreCountries=["Nigeria","Bangladesh","Russia","Japan"];

print_r($countries);

echo "<p> the country {$countries[2]} is in North America</p>";
echo "<p> the countries {$countries[0]}, {$countries[1]}, {$countries[3]},  {$countries[5]} are in Asia</p>";

echo "<br>";
echo "<ul>";
foreach ($countries as $mulak){
    echo "<li>{$mulak}</li>";
}
echo "</ul>";

$merge = array_merge($countries, $moreCountries);
rsort($merge);
print_r($merge);

echo "<br>";

// 9. Associative Arrays
// a) Using the $films array, write an echo statement that outputs 'Spirited Away was released in 2001'
// b) Add another film to the array, using an echo statement, output some of new the film's details
// c) Using a foreach loop display the details for all the films
// d) Output the data from (c) using an HTML table.


$films=[
    ["title"=>"Jaws", "year"=>"1975", "duration"=>124,"certificate"=>"15"],
    ["title"=>"Spirited Away", "year"=>"2001", "duration"=>124,"certificate"=>"PG"],
    ["title"=>"Winter's Bone", "year"=>"2010", "duration"=>100,"certificate"=>"15"],
];

var_dump($films[1]);

// 10. Strings
// a) Using the following string, write an echo statement that outputs the fifth character in the string
// b) Use the strlen() (http://php.net/manual/en/function.strlen.php) function to output the length of the string
// c) Convert the string to lowercase (http://php.net/manual/en/function.strtolower.php) and output it.
// d) Use the substr() (http://php.net/manual/en/function.substr.php) function to output the word 'Web'


$moduleStr="CHT2520 Advanced Web Programming";

?>
</body>
</html>