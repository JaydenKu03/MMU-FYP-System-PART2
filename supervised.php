<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supervised Student</title>
    <link rel="stylesheet" href="static/supervised.css">
    <link rel="stylesheet" href="static/base.css">
    <link rel="stylesheet" href="static/reusable.css">
</head>

<body>
    <?php
        include "template/navbar.php";
    ?>

    <h1 class="title-font">Supervised Student</h1>
    <div class="containerwrapper">
        <div class="supervisor-container">
            <img src="images/file.png" alt="profile picture" title="user profile picture">
            <ul>
                <li>Supervisor Name:</li>
                <li>MUHAMMAD Al-Amin</li>
            </ul>
            <ul>
                <li>Total supervised Student:</li>
                <li>3</li>
            </ul>
        </div>

        <div class="supervised-container">
            <div class="student-info">
                <ul>
                    <li>Student Name:</li>
                    <li>Deka</li>
                </ul>
                <ul>
                    <li>Project Title:</li>
                    <li>Beli TRX</li>
                </ul>
                <ul>
                    <li>Student ID:</li>
                    <li>12XXXXXX</li>
                </ul>
                <ul>
                    <li>Assessment Status:</li>
                    <li>Pending</li>
                </ul>
            </div>
            <div class="student-info">
                <ul>
                    <li>Student Name:</li>
                    <li>Donald Trump</li>
                </ul>
                <ul>
                    <li>Project Title:</li>
                    <li>Become president</li>
                </ul>
                <ul>
                    <li>Student ID:</li>
                    <li>12XXXXXX</li>
                </ul>
                <ul>
                    <li>Assessment Status:</li>
                    <li>Pending</li>
                </ul>
            </div>
            <div class="student-info"> 
            <a href="student-bio.html">
                <ul>
                    <li>Student Name:</li>
                    <li>Elon Musk</li>
                </ul>
                <ul>
                    <li>Project Title:</li>
                    <li>Buy Plenet Mars</li>
                </ul>
                <ul>
                    <li>Student ID:</li>
                    <li>12XXXXXX</li>
                </ul>
                <ul>
                    <li>Assessment Status:</li>
                    <li>Pending</li>
                </ul>
            </a>
            </div>
        </div>
    </div>

    <?php
        include "template/footer.php";
    ?>  
</body>

</html>