<?php
    require "connection.php";
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to retrieve data from product table
    $sql = "select * from product where proStatus='N'";

    $result = $conn->query($sql);

    // Check if there are any results
    if ($result->num_rows > 0) {
        // Create an array to hold the data
        $data = array();

        // Loop through the results and add them to the data array
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        // Return the data as a JSON string
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
    } else {
        echo "No results found";
    }

    $conn->close();
?>
