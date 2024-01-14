<?php
include_once('Da.php');

$id = $_POST['id'];
$name = $_POST['name'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$salary = $_POST['salary'];
$tp_number = $_POST['tp_number'];
$status = $_POST['status'];

if($id != ""){
  $sql = "UPDATE employee SET name='$name', birthday='$birthday', address='$address', salary='$salary', tp_number='$tp_number', status='$status' WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
      echo "<script>location.href = 'index.php';</script>";
  } else {
      echo "Error updating record: " . $conn->error;
  }
}
else{

$sql = "INSERT INTO employee (name, birthday, address, salary, tp_number, status) VALUES ('$name', '$birthday', '$address', '$salary', '$tp_number', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "<script>location.href = 'index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();

?>



