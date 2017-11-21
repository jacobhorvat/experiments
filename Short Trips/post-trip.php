<?php

include("inc/connect.php");

$sql = "INSERT INTO recipes (name, ingredients, directions)
VALUES ('Hot and sour', 'This is how to hot and sour', 'boil water')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
