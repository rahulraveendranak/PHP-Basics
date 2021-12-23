<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
<?php 
 
$txt = "Hello World!";
$x = 5;
$y = 5.4;

echo $txt ." $y ". $x;
echo "<br>";
echo $x + $y;


function demo() {
    global $x;
    echo "<p> variable x is inside the function is : $x </p>";
}

demo();


function newTest(){
    static $val = 0;
    echo $val."<br>";
    $val++;
}

newTest();
newTest();
newTest();
?>   
</body>
</html>