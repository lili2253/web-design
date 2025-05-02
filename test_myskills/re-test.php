<?php
//no2
//Fibonacci Series
$n=3;
function fibonacci($n){
    if($n==0 ) return 0;
    if($n==1 ) return 1;
    return fibonacci($n-1)+fibonacci($n-2);
}
function generateFibonacci($n){
    $fibSeries=[];
    for($i=0;$i< $n;$i++){
        $fibSeries[]=fibonacci($i);


    }
    return $fibSeries;
}
echo implode(", ", generateFibonacci($n));

//no3
$value="Hello LiLi";
function reverseString($str){
    return strrev($str);
}
echo reverseString($value)."<br>";

//no4 factorial
//Recursive
function factorial($num){
    if($num==0) return 1;
    return $num * factorial($num-1);
}
//Iterative
function factorial_iterative($num){
    $result=1;
    for ($i=1;$i<=$num;$i++){
        $result*=$i;
    }
    return $result;
}
$num=4;
echo factorial($num);

//no5 plaindrome
function isPalindrome($string){
    return strtolower($string)==strrev(strtolower($string));

}
$name="dad,mom,dad";
echo isPalindrome($name)?"Palindrome":"Not a palindrome";

//no6 second largest number
function secLargest($arr){
    rsort($arr);
    return $arr[1];
}
$arr=[1,2,3,4,5,6,7,8,9,10];
echo secLargest($arr);

//no7 Sorting
sort($arr);
print_r($arr);

//no8 duplicate
function findDuplicate($arr){
    $counts=array_count_values($arr);
    return array_keys(array_filter($counts,fn($count)=>$count>1));
}
$arr=[1,1,2,2,3,4,5,6,6,6,7,8,9,10,9];
print_r(findDuplicate($arr));

//no9 sum of digits
function sumOfDigits($num){
    $sum=0;
    while($num>0){
        $sum+=$num%10;
        $num=(int)($num/10);
    }
    return $sum;
}
echo sumOfDigits(123);

//no10Armstrong Number
function isArmStrong($num){
    $sum=0;
    $temp=$num;
    $digits=strlen((string)$num);

    while ($temp>0){
        $sum+= pow($temp % 10,$digits);
        $temp=(int)($temp/10);
    }
    return $sum==$num;
}
echo isArmStrong(153)? "Armstrong":"Not Armstrong";


?>