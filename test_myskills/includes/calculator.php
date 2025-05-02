<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="num01"
         placeholder="Number One"><br>
        <select name="operator" required>
            <option value="add">+</option>
            <option value="substract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>

        </select><br>
        <input type="number" name="num02" 
        placeholder="Number two" required>
        <button >Calculate</button>

    </form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $num01= $_POST["num01"];
    $num01= filter_input(INPUT_POST,"num01",
        FILTER_SANITIZE_NUMBER_FLOAT);
    $num02=filter_input(INPUT_POST,"num02",FILTER_SANITIZE_NUMBER_FLOAT);
    $operator=htmlspecialchars($_POST["operator"]);
//error handlers
    $errors=false;

    if(empty($num01) || empty($num02) || empty($operator)){
        echo "<p class='calc-error'>Fill in all Fields!</p>";
        $errors=true;
 
    }
    if(!is_numeric($num01)|| !is_numeric($num02)){
        echo "<p class='calc-error'>Only write numbers!</p>";
        $errors=true;
    }

    //Calculate the numbers if no errors
    if(!$errors){

        $value=0;

        switch($operator){
            case "add":
                $value=$num01+$num02;
                break;
            case "substract":
                $value=$num01-$num02;
                break;
            case "multiply":
                $value=$num01*$num02;
                break;
            case "Division":
                $value=$num01/$num02;
                break;
            default:
            echo  "<p calss='calc-error'>Something Horribly Wrong!></p>";

        }
        echo "<p calss='calc-result'>Result={$value}</p>";
    }
}
?>
    </body>
</body>
</html>