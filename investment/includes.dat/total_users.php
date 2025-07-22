<?php 

if($_SERVER["REQUEST_METHOD"] == "GET"){
   // we are to connect once to our database 
      
    require_once "connect.notpdo.php";

    $query = "SELECT * FROM user_info";
    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
        echo $result->num_rows;
    } else {
        echo "0 results";
    }
    $conn->close();
 
}
