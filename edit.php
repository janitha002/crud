<?php
include_once('Da.php');
$id = $_GET['id']; 

          
          $sql = "SELECT * FROM employee WHERE id='$id'" ;
		  
          $result = $conn->query($sql);
         
          $row = $result->fetch_assoc(); 
           $id = $row["id"];
           $name = $row["name"];
           $birthday = $row["birthday"];
           $address = $row["address"];
           $salary = $row["salary"];
           $tp_number = $row["tp_number"];



           
		  
        ?>
        <body style="margin: 50px;">
<form action="insert.php" method="post">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <label>ID:</label>
  <input type="text" id="id" name="id" value="<?php echo $id;?>"><br><br>
  

  <label for="name">Name:</label>
  <input type="text" id="name" name="name" value="<?php echo $name;?>"><br><br>

  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday" value="<?php echo $birthday;?>"><br><br>

  <label for="address">Address:</label>
  <input type="text" id="address" name="address" value="<?php echo $address;?>"><br><br>
  
  <label for="salary">Salary:</label>
  <input type="text" id="salary" name="salary" value="<?php echo $salary;?>"><br><br>
  
  <label for="tp_number">TP Number:</label>
  <input type="text" id="tp_number" name="tp_number" value="<?php echo $tp_number;?>"><br><br>

  

  <form action="your-form-handler.php" method="post">
  <input type="radio" name="status" value="active" checked> Active<br>
  <input type="radio" name="status" value="not active"> Not Active<br><br>
  


  <input type="submit" value="Update">

  
  

</form>
<body>
