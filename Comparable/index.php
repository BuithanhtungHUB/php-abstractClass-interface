<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//include "ComparableCircle.php";
//
//$circleOne = new ComparableCircle('circleOne', 8);
//$circleTwo = new ComparableCircle('circleTwo', 2);
//$circleThree = new ComparableCircle('circleThree', 4);
//
//$test = $circleOne->compareTo($circleTwo);
//echo('Comparable: <br>');
//echo $test;
include "CircleComparator.php";

$circleOne =new Circle("CircleOne", 6);
$circleTwo =new Circle("CircleTwo", 4);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne,$circleTwo));
?>
</body>
</html>
