<?php
//no1
$name="Thet Yadanar Htwe";
$date=date("Y-m-d");
echo $name ."<br>and<br>". $date."<br>";

//no2
$num=[1,2,3,4,5,6,7,8,9,10];
echo max($num)."<br>";

//no3
$value="Hello World";
//reversestring does not exist
function reverseString($str){
    return strrev($str);

}
echo reverseString($value)."<br>";


//no4
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    echo "Hello,". $name;
}
session_start();
$_SESSION['name']="Thet Yadanar Htwe";
echo $_SESSION['name'];
$_SESSION['age']="22";
echo $_SESSION['age']."<br>";

//next session 
//no1
$arr=[0,1,2,3,4,5,6,7,8,9,10];
for($a=0;$a<10;$a++){
    for($b=1;$b<5;$b++){
        $num=$a+$b;
    }

}
echo $num ."<br>";


//no2
$factorial=1;
for($num=5;$num>1;$num--){
    $factorial*=$num;
}
echo $factorial ."<br>";

//no3
//occurrences of the character in the string
$char="Thet Yadanar Htwe";
echo substr_count("$char","e")."<br>";

//no4
//that is if divide 2 no remainder that is not prime number 
$prime=NULL;
for($i=2;$i<10;$i++){

    if($prime==0){
        $prime=$i%2;
        echo "{$i} is the prime number<br>";
    }
    else{
       echo "{$i} is not prime number<br>";
    }
  
   
}

//no5
$arr=[1,2,3,4,5];
 $reverse=array_reverse($arr);
 print_r($reverse)."<br>";
 
 



//no6
//palindrome check
$song="wow , 121 , 2002";

echo strrev($song)."<br>";

//no7
//bonus challenge
$num=5;
for($i=1;$i<10;$i++){
    $mult=$i*$num;
    echo "This is multiplication table {$mult}<br>";
}



//re-4
for($i=2;$i<10;$i++){
    $isPrime=true;

    for($j=2;$j<$i;$j++){
        if($i%$j==0){
            $isPrime=false;
            break;
        }
    }
    if($isPrime){
        echo "{$i} is a prime number<br>";

    }else{
        echo"{$i} is not  prime number<br>";
    }
}

?>