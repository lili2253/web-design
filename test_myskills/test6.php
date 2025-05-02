<?php
//no1
for($i=2;$i<10;$i++){
 $isPrime=true;
 for($j=2;$j<$i;$j++){
    if($i%$j==0){
        $isPrime=false;
        break;
    }
 }


if($isPrime){
    echo "{$i} is the prime number.<br>"; 
}else
{
    echo "{$i} is not the prime number.<br>";
}
}

//no2 Fibonacci Series
//this one is I do not know so i search in chat gpt
$n=3;
function fibonacci($n){
    if($n==0) return 0;
    if($n==1) return 1;
    return fibonacci($n-1)+fibonacci($n-2);
}
function generateFibonacci($n){
    $fibSeries =[];
    for ($i=0;$i<$n;$i++){
        $fibSeries[]=
        fibonacci($i);
    }
    return $fibSeries;
}

print_r(generateFibonacci($n));

//no3 Reverse the string



//no4
$j=NULL;
function factorial($num){
     for($i=1;$i<$num;$i++){
       
        $j=$i*1;


    }
    return factorial($num);

}
$num=4;

//no5 
function isPalindrome($string){
    isPalindrome("true"){
return strrev($string);
    }else {echo "this is not the plaindrome";}
   
}//i know that is wrong

//no6
$arr=[1,2,3,4,5,6,7,8,9,10];
array_count_values($arr);
array_all($arr);
function secLarget($arr){

}

//no7
echo SORT_ASC($arr);

//no8
//what it mean duplicate

//no9
$int=8;
$sum+=$int;
echo $sum;

//no10
//i do know
?>