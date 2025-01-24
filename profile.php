<?php
    require ('function/session.php');
    require ('function/db_connect.php');

    $conn = OpenCon();
    $ID = $_SESSION["user_ID"];
    $name = $_SESSION["user_name"];
    $role = $_SESSION["user_role"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/base.css">
    <link rel="stylesheet" href="static/profile.css">
    <link rel="stylesheet" href="static/reusable.css">
    <title>Profile - MMU FYP Sytstem</title>
</head>

<body>
    <?php
        include "template/navbar.php";
    ?>
    
    <div id="content-container">
        <div id="my-profile">
            <img src="images/user_profile.png">
            <h1 class="title-font" id="user-name"> <?php echo $name; ?> </h1>
        </div>

        <div id="information-container">
            <!-- Genreal Render -->
            <?php
                if($role == "admin") {
                    $sql = "SELECT a.admin_ID, u.user_name, u.user_email, u.user_phone FROM user u
                            JOIN admin a ON u.user_ID = a.user_ID
                            WHERE a.admin_ID = '$ID'";
                }
                else if($role == "supervisor") {
                    $sql = "SELECT s.supervisor_ID, u.user_name, u.user_email, u.user_phone FROM user u
                            JOIN supervisor s ON u.user_ID = s.user_ID
                            WHERE s.supervisor_ID = '$ID'";
                }
                else {
                    $sql = "SELECT s.student_ID, s.specialization, u.user_name, u.user_email, u.user_phone FROM user u
                            JOIN student s ON u.user_ID = s.user_ID
                            WHERE s.student_ID = '$ID'";
                }

                $result = $conn->query($sql);
                $rowcount = mysqli_num_rows($result);
                $row = mysqli_fetch_array($result);

                if($rowcount == 1){
                    $email = $row['user_email'];
                    $phone = $row['user_phone'];

                    if($role == "student") {
                        $specialization = $row['specialization'];
                    }

                }else{
                    echo "<script>alert('Information retrieve error');</script>";
                }

            ?>
            <section id="user-details">
                <h2>User Details</h2>
                <h3>ID</h3>
                <p> <?php echo $ID; ?> </p>
                <h3>Role</h3>
                <p> <?php echo ucfirst($role); ?> </p>
                <?php
                    if($role == "student"){
                        echo "<h3>Specialization</h3>
                              <p>$specialization</p>";
                    }
                ?>
                <h3>Email</h3>
                <p> <?php echo $email; ?> </p>
                <h3>Phone</h3>
                <p> <?php echo $phone; ?> </p>
            </section>

            <!-- Supervisor Render -->
            <?php
                if($role == "supervisor"){
                    $sql = "SELECT s.student_ID, u.user_name FROM user u
                    JOIN student s ON u.user_ID = s.user_ID
                    JOIN proposal p ON s.student_ID = p.student_ID
                    WHERE p.supervisor_ID = '$ID' AND p.proposal_status = 'approve' ";

                    $result = $conn->query($sql);
                    $rowcount = mysqli_num_rows($result);
                    echo '<section id="in-charge-details">';
                    echo '<h2>Supervised Student</h2>';
                    echo '<ul>';
                    if($rowcount >= 1) {
                        while($row = $result->fetch_assoc()){
                            $student_ID = $row['student_ID'];
                            $student_name = $row['user_name'];
                            echo "<li>$student_ID - $student_name</li>";
                        }
                    }else {
                        echo "<li>No student is under your supervision currently</li>";
                    }
                    echo '</ul>';
                    echo '</section>';
                }
            ?>

            <!-- Student Render -->
            <?php
                if($role == "student"){
                    $sql = "SELECT p.project_title, p.proposal_status, u.user_name AS supervisor_name FROM proposal p
                            JOIN supervisor s ON p.supervisor_ID = s.supervisor_ID 
                            JOIN user u ON u.user_ID = s.user_ID
                            WHERE p.student_ID = '$ID'";

                    $result = $conn->query($sql);
                    $rowcount = mysqli_num_rows($result);
                    $row = mysqli_fetch_array($result);

                    echo '<section id="fyp-details">';
                    echo '<h2>FYP Details</h2>';
                    if($rowcount == 1) {
                        $title = $row['project_title'];
                        $status = $row['proposal_status'];
                        $supervisor_name = $row['supervisor_name'];

                        echo "<h3>Title Name</h3>
                            <p>$title</p>  
                            <h3>Title Status</h3>
                            <p>$status</p>
                            <h3>Supervisor In Charge</h3>
                            <p>Mr/Ms. $supervisor_name</p>";
                    }else {
                        echo "You haven't submit any proposal yet";
                    }
                    echo '</section>';
                }
            ?>

            <!-- <section id="reference-details">
                <h2>Reference</h2>
                <ul>
                    <li><a href="">My Meeting Logs</a></li>
                    <li><a href="#">My Goal and Progress</a></li>
                </ul>
            </section> -->
        </div>
    </div>

    <?php
        include "template/footer.php";
    ?> 

</body>

</html>