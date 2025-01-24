<?php
    require ("function/session.php");
    require ('function/db_connect.php');

    $conn = openCon();
    $sql = "SELECT 
                stu.student_ID ,
                u.user_name AS student_name,
                u.user_email AS student_email,
                u.user_phone AS student_phone,
                stu.specialization,
                IFNULL(us.user_name, 'N/A') AS supervisor_name
            FROM user u
            JOIN student stu ON u.user_ID = stu.user_ID
            LEFT JOIN proposal p ON stu.student_ID = p.student_ID
            LEFT JOIN supervisor s ON p.supervisor_ID = s.supervisor_ID
            LEFT JOIN user us ON s.user_ID = us.user_ID";
            
    $result = $conn->query($sql)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/base.css">
    <link rel="stylesheet" href="static/reusable.css">
    <link rel="stylesheet" href="static/table.css">
    <title>Student List</title>
</head>

<body>
    <?php
        include "template/navbar.php";
    ?>

    <main>
        <div class="content-container">
            <div class="filter-container">
                <h2>Filters: </h2>
                <label for="searchName">Name:</label>
                <input type="search" id="searchName" name="search" placeholder="Search Name...">
                <label for="speacilization">Specialization:</label>
                <select id="speacilization" name="speacilization">
                    <option value="all-specializations">All Specializations</option>
                    <option value="computerScience">Computer Science</option>
                    <option value="cyberSecurity">Cybersecurity</option>
                    <option value="gameDevelopment">Game Development</option>
                    <option value="dataScience">Data Science</option>
                    <option value="softwareEnginering">Software Enginering</option>
                    <option value="informationSystem">Information System</option>
                </select>
            </div>

            <div id="studList-table-container" class="table-container">
                <h1>Student List</h1>
                <table id="student-list-table" class="modern-table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Specialization</th>
                            <th>Supervisor</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            if(mysqli_num_rows($result) >= 1) {
                                $count = 1;
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr onclick=\"window.location.href=
                                            'view_profile.php?id=".$row['student_ID']."&name=".$row['student_name']."&role=student';\" 
                                            style='cursor: pointer;'>
                                          <td>$count</td>
                                          <td>".$row['student_ID']."</td>
                                          <td>".$row['student_name']."</td>
                                          <td>".$row['student_email']."</td>
                                          <td>".$row['student_phone']."</td>
                                          <td>".$row['specialization']."</td>
                                          <td> Dr. ".$row['supervisor_name']."</td>
                                          </tr>";
                                    $count+=1;
                                }
                            }
                            else {
                                echo "<td colspan=7>No Students Available</td>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <?php
        include "template/footer.php";
    ?>  
</body>
</html>