<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Frank Diaz Test 2</title>
</head>
<body>
<h1>Frank Diaz Test 2</h1>
<h2>PHP Grade Results</h2>
<p>This website is going to be the same as my Javascript Grades website, only this time it's in PHP for my PHP class. So yeah, you already get the idea.</p>
<br>
<p>I sadly don't know how to style a PHP document the same way as an HTML document so I can make this site look similar to my Javascript Grades site. Oh well...   :~(</p>
<h3>My Grades</h3>
    
<?php

// Set up the arrays containing the grade and assignment values
$earned = array(5, 5, 3, 5, 17, 5, 5, 5);
$possible = array(5, 5, 3, 5, 15, 5, 5, 5);
$assignments = array("Discussion 1 ", "Discussion 2 ", "Homework 1", "Discussion 3", "Test 1", "Discussion 4", "Discussion 5", "Discussion 6");
    
// Set up the length of the arrays
$earnedlength = count($earned);
$posslength = count($possible);
$assilength = count($assignments);

// Use for loops to display the arrays separately onto the DOM
    echo "<h3>Assignments</h3>";
for($x = 0; $x < $assilength; $x++) {
    echo $assignments[$x];
    echo "<br>";
}
echo "<br>";
echo "<h3>Earned Grades</h3>";    
    
for($x = 0; $x < $earnedlength; $x++) {
    echo $earned[$x];
    echo "<br>";
}
    
echo "<br>";
echo "<h3>Possible Grades</h3>";

for($x = 0; $x < $posslength; $x++) {
    echo $possible[$x];
    echo "<br>";
}
    
// Set up loops to sum the total number of earned and possible grades separately
$esum = 0;
$psum = 0;

echo "<br>";
    
// Use foreach loops to get the sum of grades
foreach ($earned as $e){
    $esum=$esum+$e;
}
    echo "Total Earned Grades: ".$esum;

    
foreach ($possible as $p){
    $psum=$psum+$p;
}
    echo "<br>";
    echo "Total Possible Grades: ".$psum;
    echo "<br>";
    
// Divide the two variables to get the total class grade
$gdiv = $esum / $psum * 100;
    
// Print the results onto the DOM
echo "<br>";
echo "Total Class Grade: "; 
echo round($gdiv);
echo "% A";

?>
</body>
</html>