<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php

      $entry_no = $_GET['entry_no'];

      include('connect.php');

      $query = "SELECT * FROM record WHERE entry_no='$entry_no'";

      $result = mysqli_query($conn,$query);
    ?>

    <div class="imglogo">
        <img src="psu logo.png" alt="">
    </div>
    
    <div class="psu">
        <h2>Welcome To Psu</h2>
    </div>

    <div class="container">

    <div class="links">
        <h3><a href="home.html" class="link">Home</a></h3>
        <h3><a href="register.php" class="link">Register</a></h3>
        <h3><a href="view.php" class="link">List of Student</a></h3>
    </div>

    <h3 class="formreq">Updating Information</h3>

        <form action="edit.php" method="get">
        <?php

        while($row = mysqli_fetch_assoc($result))
        {
        ?>  
            <input type="hidden" name="entry_no" value="<?php echo $row['entry_no']; ?>">
            
            <div class="register">
                <input type="text" name="stud_no" value="<?php echo $row['stud_no']; ?>">
                <input type="text" name="fname" value="<?php echo $row['fname']; ?>">
            </div> 

            <div class="register2">
                <input type="text" name="mname" value="<?php echo $row['mname']; ?>">
                <input type="text" name="lname" value="<?php echo $row['lname']; ?>">
            </div> 
            

            
            <select class="btncourse" name="course">
                <option><?php echo $row['course']; ?></option>
                <option value="BS Information Technology">BS Information Technology</option>
                <option value="BS Computer Science">BS Computer Science</option>
                <option value="BS Mathematics">BS Mathematics</option>
                <option value="BS Hospitality Management">BS Hospitality Management</option>
                <option value="BS Tourism Management">BS Tourism Management</option>
                <option value="BS Biology">BS Biology</option>
                <option value="BS Business Administration">BS Business Administration</option>
                <option value="Bachelor in Industrial Technology">Bachelor in Industrial Technology</option>
                <option value="Bachelor in Public Administration">Bachelor in Public Administration</option>
                <option value="AB English">AB English</option>
                <option value="AB Economics">AB Economics</option>
                <option value="BS Social Work">BS Social Work</option>
            </select>
            <input type="submit" class="submit" name="sumbit">
        </form>

        <?php
          }
          mysqli_close($conn);
        ?>
    </div>
</body>
</html>