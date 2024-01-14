<?php
include_once('Da.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Employee Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
  </head>
  <body style="margin: 50px;">
  <button><a href="Employe.php">Add Employee</a></button>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Birthday</th>
          <th>Address</th>
          <th>Salary</th>
          <th>TP Number</th>
          <th>Status</th>
          <th>Delete</th>
          <th>Edit</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
          
          $sql = "SELECT * FROM employee";
          $result = $conn->query($sql);
         
          while($row = $result->fetch_assoc()) {
           $uid = $row["id"]; 
        ?>
             
            <tr>
                <td><?php echo $row["id"];  ?></td>
                <td><?php echo $row["name"];  ?></td>
                <td><?php echo $row["birthday"];  ?></td>
                <td><?php echo $row["address"];  ?></td>
                <td><?php echo $row["salary"]; ?></td>
                <td><?php echo $row["tp_number"];  ?></td>
                <td><?php echo $row["status"]; ?></td>

                
                
                <td><button><a href="delete.php?id=<?php echo $uid; ?>">Delete</a></button></td>
                <td><button><a href="edit.php?id=<?php echo $uid; ?>">Edit</a></button></td>
                
            </tr>

        <?php
          }

        ?>
      </tbody>
    </table>
  </body>
</html>

