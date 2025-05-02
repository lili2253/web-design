<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial scale=1.0">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">
        <title>Document</title>
    </head>

    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
         <input type="number" name="num01" placeholder="Number one">
         <select name="operator">
            <option value="add">+</option>
            <option value="abstract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
         </select>

         <input type="number" name="num02" placeholder="Number two">
         <br><button>Calculate</button></br>

        </form>

        <?php
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            //grab data from inputs
            $num01=filter_input(INPUT_GET,"num01",FILTER_SANITIZE_NUMBER_FLOAT);
            $num02=filter_input(INPUT_GET,"num02",FILTER_SANITIZE_NUMBER_FLOAT);
            $operator=htmlspecialchars($_GET["operator"]);

            //error handlers
            $errors=false;

            if( empty($num01)|| empty($num02)|| empty($operator)) {
                echo"<p class='calc-error'>Fill in all fields!</p>";
                $errors=true;

            }
            if(!is_numeric($num01)|| !is_numeric($num02)){
                echo "<p class='calc-error'>Only write numbers!</p>";
                $errors=true;

            }
            //calculate the numbers if no errors 
            if (!$errors){
                $value=0;

                switch($operator){
                    case "add":
                        $value=$num01+$num02;
                        break;
                    case "subtract":
                        $value=$num01-$num02;
                        break;
                    case "multiply":
                        $value=$num01*$num02;
                        break;
                    case "divide":
                        $value=$num01/$num02;
                    default:
                    echo "<p class='calc-error'>Something went HORRIBLY wrong!</p>";
                }
                echo "<p class='calc-result'>Result=". $value . "</p>";

            }
        }
        ?>
    </body>
</html>