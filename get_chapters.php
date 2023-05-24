<?php

$connection=new mysqli('localhost', 'root', '', 'notebook_db');

if(!$connection){
    die(mysqli_error($connection));
}

$query = "SELECT * FROM reader where course_id = ".$_REQUEST['course_id'];

// Execute the query
$result = $connection->query($query);

// Check if the query was successful
if ($result) {
    // Fetch the record as an associative array
    // $courses = $result->fetch_assoc();
    $chapters = [];

    if ($result->num_rows > 0) {
        // Iterate over the result set
        while ($record = $result->fetch_assoc()) {
            // Access record fields
            $chapters[] = [
                'id' => $record['id'],
                'title' => $record['title']
            ];
            // $field2 = $record['field2'];
            // ...and so on

            // Output or use the record data as needed
            // echo "Field 1: $field1<br>";
            // echo "Field 2: $field2<br>";
            // ...and so on
        }
    } else {
        // echo "No records found.";
    }

    // Free the result set
    $result->free();
} else {
    echo "Query error: " . $connection->error;
}

// Close the database connection
$connection->close();
?>
