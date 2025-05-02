<?php
header("Content-Type:application/json");
$conn=new mysqli("localhost","root","","student_api");

if($conn->connect_error){
    die(json_encode(["error"=>"Database connection failed"]));
}

$request_method=$_SERVER["REQUEST_METHOD"];

if($request_method == "GET") {
    if(isset($GET["id"])){
        $id=intval($_GET["id"]);
        $result=$conn->query("SELECT * FROM students WHERE id=$id");
        echo json_encode($result->fetch_assoc()?:["error"=>"Student not found"]);

    }else {
        $result=$conn->query("SELECT * FROM students");
        echo json_encode($result->fetch_all(MYSQLI_ASSOC));
    }
}

if($request_method=="POST"){
    $data=json_decode(file_get_contents("php://input"),true);
    if(!isset($data["name"],$data["email"],$data["age"])){
        echo json_encode(["error"=>"Missing fields"]);
        exit;
    }
    $stmt=$conn->prepare("INSERT INTO students(name,email,age) VALUES(?,?,?)");
    $stmt->bind_param("ssi",$data["name"],$data["email"],$data["age"]);
    echo json_encode($stmt->execute()? ["success"=>"student added"]:["error"=>"Failed to add student"]);

}

if($request_method=="PUT"){
    $data=json_decode(file_get_contents("php://input"),true);
    if(!isset($data["id"],$data["name"],$data["email"],$data["age"])){
        echo json_encode(["error"=>"Missing fields"]);
        exit;
    }
    $stmt=$conn->prepare("UPDATE students SET name=?,email=?,age=? WHERE id=?");
    $stmt->bind_param("ssis", $data["name"],$data["email"],$data["age"],$data["id"]);
    echo json_encode($stmt->execute() ? ["success"=> "Student updated"]:["error"=> "Failed to update student"]);
}

if ($request_method=="DELETE"){
    if(!isset($_GET["id"])){
        echo json_encode(["error"=>"Provide student ID" ]);
        exit;
    }
    $id=intval($GET["id"]);
    $stmt=$conn->prepare("DELETE FROM students WHERE id=?");
    $stmt->bind_param("i",$id);
    echo json_encode($stmt->execute() ? [ "success"=>"Student deleted"]:["error"=>"Failed to delete student"]);

}
$conn->close();
?>