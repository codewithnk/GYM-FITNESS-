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
else{
    echo "";
}

// Attempt select query execution
$sql = "SELECT * FROM userinfodata";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>user</th>";
                echo "<th>email</th>";
                echo "<th>mobile</th>";
                echo "<th>comment</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['user'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['mobile'] . "</td>";
                echo "<td>" . $row['comment'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($conn);



?>