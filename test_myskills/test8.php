<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test8.php" method="POST">
        <label>x:</label>
        <input type="text" name="x"><br>
        <label>y:</label>
        <input type="text" name="y"><br>
        <label>z</label>
        <input type="text" name="z">
        <input type ="submit" value="total">

    </form>

</body>
</html>
<?php
/*$item ="pizza";
$price= 5.9;
$quantity=$_POST["quantity"];
$total=null;

$total=$quantity * $price;

echo "You have ordered {$quantity} x {$item}";
echo "your total is {$total}<br>";*/

/*$x=$_POST["x"];
$y=$_POST["y"];
$z=$_POST["z"];
$total=null;

//$total=abs($x);<!--negative to positive-->
//$total=round($x);<!-- full int-->
//$total =floor($x);<!--least full int-->
//$total=ceil($x);<!--change the highest num int-->
//$total=pow($x, $y); //this is power function
//$total=sqrt($x);//root function 
//$total=max($x,$y,$z);//min
//$total=pi();
//$total=rand(80,90);//random

//echo $total."<br>";*/

$hours=50;
$rate=15;
$weekly_pay=null;
if($hours<=0){
    $weekly_pay=0;
}
elseif($hours <= 40){
     $weekly_pay=$hours * $rate;
}
else{
    $weekly_pay=($rate*40)+(($hours-40)* ($rate));
}
echo "You made \${$weekly_pay}this week";

?>