<?php

// if($_SERVER["REQUEST_METHOD"] == "GET"){
//    // we are to connect once to our database 
      
    require_once "connect.notpdo.php";

    $query = "SELECT * FROM user_info";
    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>NAME</th><th>USERNAME</th><th>EMAIL</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["name_now"]. "</td><td>".$row["username"]. "</td><td>".$row["email"]. "</td>";       }
        echo "</table>";
    }
    else {
        echo "0 results";
    }
    $conn->close();
 
// }
