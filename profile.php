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
            <h1 class="title-font" id="user-name">Name</h1>
        </div>

        <div id="information-container">
            <!-- Admin Render -->
            <!-- <section id="user-details">
                <h2>User Details</h2>
                <h3>ID</h3>
                <p>123456</p>
                <h3>Role</h3>
                <p>Admin</p>
                <h3>Email</h3>
                <p>123456@admin.mmu.edu.my</p>
            </section>

            <section id="student-proposal-approved">
                <h2>Student's Proposal Approved</h2>
                <ul>
                    <li>121311715 - Jayden</li>
                    <li>121589244 - Bob</li>
                    <li>120145841 - Max</li>
                    <li>1211311480 - Jhon</li>
                </ul>
            </section> -->

            <!-- Supervisor Render -->
            <!-- <section id="user-details">
                <h2>User Details</h2>
                <h3>ID</h3>
                <p>123456</p>
                <h3>Role</h3>
                <p>Supervisor</p>
                <h3>Email</h3>
                <p>123456@supervisor.mmu.edu.my</p>
            </section>

            <section id="in-charge-details">
                <h2>Supervised Student</h2>
                <ul>
                    <li>121311715 - Jayden</li>
                    <li>121589244 - Bob</li>
                    <li>120145841 - Max</li>
                    <li>1211311480 - Jhon</li>
                </ul>
            </section> -->

            <!-- Student Render -->
            <section id="user-details">
                <h2>User Details</h2>
                <h3>ID</h3>
                <p>123456</p>
                <h3>Role</h3>
                <p>Student</p>
                <h3>Specialization</h3>
                <p>Software Engineering</p>
                <h3>Email</h3>
                <p>123456@student.mmu.edu.my</p>
            </section>

            <section id="fyp-details">
                <h2>FYP Details</h2>
                <h3>Title Name</h3>
                <p>E-commerce with Aritificial Intelligence</p>
                <h3>Title Status</h3>
                <p>Approved</p>
                <h3>Supervisor In Charge</h3>
                <p>Mr. ABC</p>
                <h3>My Proposal</h3>
                <p>Proposol.pdf</p>
            </section>

            <section id="reference-details">
                <h2>Reference</h2>
                <ul>
                    <li><a href="#">My Meeting Logs</a></li>
                    <li><a href="#">My Goal and Progress</a></li>
                </ul>
            </section>
        </div>
    </div>

    <?php
        include "template/footer.php";
    ?> 

</body>

</html>