<?php
    require_once('conn.php');
    // fetch data from the db

    $queryFetch = "SELECT *  FROM `employees`;";

    if($result = mysqli_query($conn,$queryFetch)){
        while($row = mysqli_fetch_assoc($result)){
            echo "Username: " . $row['Username'] . " " .  "Job Number: " .  $row['Job Number'] . " " . "Department: "  . " " . "Gender: " . 
                $row['Gender'] . " " . "Age: " . " " . $row['Age'] . " " . "Password: " . $row['Password'] . "<br>";
        }
    }
    mysqli_close($conn);

?>