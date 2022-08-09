<?php
if(isset($_POST['submitRecord']))
{
$first_Name=$_POST['first_Name'];
$last_Name=$_POST['last_Name'];
$birth_Date=$_POST['birth_Date'];
$gender=$_POST['gender'];
$username=$_POST['username'];
$password=$_POST['password'];
$phone_Number=$_POST['phone_Number'];
$subject=$_POST['subject'];
// echo $password."<br/>";
$encryptPassword=password_hash($password, PASSWORD_DEFAULT);
// echo $encryptPassword;
 
$server="localhost";
$databaseName="islingtoncollegedatabase";
$user="root";
$pass="";


$pdo=new PDO("mysql:host=$server;dbname=$databaseName",$user,$pass);

try{

    if($pdo)
    {
        echo "Database is successfully connected. ";
        echo "<br>";
    }
    $insertQuery="insert into student_registerc11(first_Name,last_Name,birth_Date,gender,username,password,phone_Number,subject) values(:first_Name
    ,:last_Name,:birth_Date,:gender,:username,:password,:phone_Number,:subject)";

    $statement=$pdo->prepare($insertQuery);
    $statement->execute([
    ':first_Name'=>$first_Name,
    ':last_Name'=>$last_Name,
    ':birth_Date'=>$birth_Date,
    ':gender'=>$gender,
    ':username'=>$username,
    ':password'=>$encryptPassword,
    ':phone_Number'=>$phone_Number,
    ':subject'=>$subject
    ]);

    // echo "Data is inserted.";
    header('Location:login.html');
    exit();
}

catch(PDOException $e)
{
    echo $e->getMessage();
}
finally
{
    unset($pdo);
    unset($statement);
}




}

// echo $first_Name."<br/>";
// echo $last_Name."<br/>";
// echo $birth_Date."<br/>";
// echo $gender."<br/>";
// echo $username."<br/>";

// echo $phone_Number."<br/>";
// echo $subject."<br/>";

//mampakha





?> 