<!DOCTYPE html>
<html>
    <head>
        <title>Dynamic Table</title>
        <style></style>
    </head>
    <body>
        <table>
    
<?php
$num=1;
for ($i=0;$i<5;$i++)
{
    echo "<tr>";
for ($j=0;$j<3;$j++)
{
    echo "<td>$num</td>";
    $num++;
}
echo "</tr>";
}

?>

        </table>
    
<!--this is test 1-->

<!--This is test 2-->
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username=="admin" && $password=="1234"){
        echo "<p style='color:green;'>Login Successful</p>";
    }else{
        echo "<p style='color:red;'>Incorrect Credentials.</p>";
    }
}
?>

<form method="POST">
    Username:<input type="text" name ="username" required><br>
    Password:<input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>

<!--create the tasks-->
<?php 
session_start();

if (!isset($_SESSION['task'])){
    $_SESSION['tasks']=[];
}
?>
</body>

</html>