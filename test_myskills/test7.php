<?php
//11 stack implementation
$array=[1,2,3,4,5];
echo array_push($array,10)."<br>";
array_pop($array)."<br>";
$peek=end($array);
echo "{$peek} is the last element<br>";

//no12 Queue Implementation
echo array_push($array,11,12,13);//enqueue
echo array_shift($array);//dequeue
echo $array."<br>";

//no13Linked lists
class Node{
    public $data;
    public $next;

    public function __construct($data){
        $this->data=$data;
        $this->next=NULL;
    }
}

class LinkedList{
    private $head;

    public function __construct(){
        $this->head = null;
    }
    public function insert($data){
        $newNode = new Node($data);

        if($this->head===null){
            $this->head= $newNode;
            return;
        }
        $current =$this->head;
        while($current->next !==null){
            $current=$current->next;
        }
        
        $current->next=$newNode;
        }

        //delete function
        public function delete($data){
            if($this->head===null)
            return;

            //if head needs to be removed
            if ($this->head->data==$data){
                $this->head=$this->head->next;
                return;
            }

            $current=$this->head;
            while ($current->next !== null && $current->next->data !=$data){
                $current=$current->next;
            }

            //if found,remove it
            if ($current ->next !==null){
                $current->next=$current->next->next;
            }
        }

        //Display the linked lists
        public function display(){
            $current=$this->head;
            while($current!==null){
                echo $current->data ."->";

                $current=$current->next;
            }
            echo "NULL\n";
        }
       
    }
    //example
    $ll=new LinkedList();

    $ll->insert(10);
    $ll->insert(20);

    echo "Linked list after insertions:\n";
    $ll->display();

    $ll->delete(20);
    echo "Linked List after deletion 20:\n";
    $ll->display();
//14 Binary Search
function BinarySearch($array,$target){
sort($array);
$left=0;
$right=count($array)-1;

while($left<=$right){
    $mid=floor(($left+$right)/2);
    if($array[$mid]==$target)return $mid;
    if ($array[$mid]<$target)$left=$mid+1;
    else $right=$mid-1;

}
return-1;
}
$arr=[3,1,2,6,5,4];
$target=5;
$result=BinarySearch($arr,$target);
echo($result!=-1)? "Found at index $result": "Not Found";

//15 Merge Two Sorted Arrays
function mergeSortedArrays($arr1,$arr2){
    $merged=array_merge($arr1,$arr2);
    sort($merged);
    return $merged;
}
$arr1=[1,2,3];
$arr2=[4,5,6];

$mergedArray=mergeSortedArrays($arr1,$arr2);
echo "Merged sorted array:" .implode(",",$mergeArray). "<br>";

?>
