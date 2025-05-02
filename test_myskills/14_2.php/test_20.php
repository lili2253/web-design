<?php
//no1-B

//no2-A

//no3-A

//no4-A
$name="thet";
class A{
    protected $name;
}
class B extends A{
    

}

//no5-A

//coding exercises
class Vehicle{
   public $brand;

   public function __construct($brand){
    $this->brand=$brand;
   }

  public function getBrand(){
    return $this->brand;
   }
}

Class Car extends Vehicle{
    public $model;

    public function __construct($brand,$model){
        parent::__construct($brand);
        $this->model=$model;
    }

    public function getModel(){
       return $this->model;
    }
}
$car = new Car("Lambogini",2024);
echo "Brand:" . $car->getBrand() ."<br>";
echo "Model:" . $car->getModel() . "<br>";

//Implement an interface
interface Shape{
    public function calculateArea();
       

}
class Rectangle  implements Shape{
    public $length;
    public $width;

    public function __construct($length,$width){
        $this->length=$length;
        $this->width=$width;
    }
    public function calculateArea(){
        return $this->length * $this->width;
    }
}

class Circle implements Shape{
    public $radius;


    public function __construct($radius){
        $this->radius=$radius;
    }
 public function calculateArea(){
    return round(pi() * pow($this->radius,2));
 }
}
$rectangle=new Rectangle(10,5);
$circle = new Circle(3);

echo "Rectangle Area:" . $rectangle->calculateArea()."<br>";
echo "Circle Area:". $circle->calculateArea() . "<br>";
?>