<?php
include_once('Da.php');

 $id = $_GET['id']; 


$sql = "DELETE FROM employee WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<script>location.href = 'index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>