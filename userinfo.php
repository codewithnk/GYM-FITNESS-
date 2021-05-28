<?php
$servername="localhost";
$username="root";
$password="";
$database_name="gymfitness";


$conn = mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}

if(isset($_POST['save']));
{
    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile= $_POST['mobile'];
    $comment= $_POST['comment'];

    $sql_query = "INSERT INTO userinfodata (user,email,mobile,comment)
    VALUES ('$user','$email','$mobile','$comment')";

    if(mysqli_query($conn,$sql_query))
    {
    echo "New Details Entry inserted successfully !";
    }
    else
    {
    echo "Error: " .$sql ."" .mysqli_error($conn);
    }
    
    $sql_query = "DELET INTO userinfodata (user,email,mobile,comment)
    VALUES ('$user','$email','$mobile','$comment')";

    mysqli_close($conn);
}
?>