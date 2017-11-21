<?php

include("inc/connect.php");


$sql = "SELECT name, ingredients, directions FROM recipes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name " . $row["name"]. "ingredients" . $row["ingredients"]. " " . $row["directions"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
