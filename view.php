<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information System</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<div class="imglogo">
        <img src="psu logo.png" alt="">
    </div>
    
    <div class="psu">
        <h2>List Of Student</h2>
    </div>

    <nav>
        <div class="container2">

            <div class="links">
                <h3><a href="home.html" class="link">Home</a></h3>
                <h3><a href="register.php" class="link">Register</a></h3>
                <h3><a href="view.php" class="link">List of Student</a></h3>
            </div>
        
            <div class="list">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Stud_no</th>
                            <th>FirstName</th>
                            <th>MiddleName</th>
                            <th>LastName</th>
                            <th>Course</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("connect.php");
                            $sql = "SELECT * FROM record";
                            $result = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($result))
                            {
                        ?>
                        <tr>
                            <td><?php echo $row['entry_no']?></td>
                            <td><?php echo $row['stud_no']?></td>
                            <td><?php echo $row['fname']?></td>
                            <td><?php echo $row['mname']?></td>
                            <td><?php echo $row['lname']?></td>
                            <td><?php echo $row['course']?></td>
                            <td>
                                <a href="editsub.php?entry_no=<?php echo $row['entry_no']; ?>" class="update" >Edit</a>
                                <a href="delete.php?entry_no=<?php echo $row['entry_no']; ?>" class="delete"  onClick="return confirm('Are You Sure You Want to Delete This Record?')">Delete</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </nav>
</body>
</html>