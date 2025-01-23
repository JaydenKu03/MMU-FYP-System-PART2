<?php
    require ('function/session.php');
    require ('function/db_connect.php');

    $name = $_SESSION["user_name"];
    $ID = $_SESSION["user_ID"];
    $role = ucfirst($_SESSION["user_role"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/reusable.css">
    <link rel="stylesheet" href="static/base.css">
    <link rel="stylesheet" href="static/index.css">
    <link rel="stylesheet" href="static/calender.css">
    <title>MMU FYP System</title>
</head>

<body>
    <?php
        require "template/navbar.php";
    ?>

    <main>
        <h1 class="title-font">FYP PORTAL</h1>
        <div id="container">
            <aside id="side-bar-panel">
                <div id="user-info">
                    <div id="picture-content">
                        <img id="user_picture" src="images/user_profile2.png" alt="user_img">
                        <h3 id="user-name"><?php echo $name; ?></h3>
                    </div>
                    <p id="user-id"><?php echo $ID; ?></p>      
                    <p id="user-role"><?php echo $role; ?></p>             
                </div>
                
                <div id="user-navigation">
                    <h3>Navigation</h3>
                    <ul>
                        <li>
                            <a href="profile.php">
                                <img src="images/my_profile.png" alt="my_profile">
                                My Profile
                            </a>
                        </li>
                        <li>
                            <a href="https://online.mmu.edu.my/" target="_blank">
                                <img src="images/internet.png" alt="student_portal">
                                MMU Portal
                          </a>                 
                        </li>
                        <li>
                            <a href="https://clic.mmu.edu.my/" target="_blank">
                                <img src="images/clic_system.png" alt="clic">
                                CLIC
                            </a>                  
                        </li>
                        <li>
                            <a href="https://ebwise.mmu.edu.my/" target="_blank">
                                <img src="images/book.png" alt="ebwise">
                                Ebwise
                            </a>                  
                        </li>
                        <li>
                            <a href="https://mmuexpert.mmu.edu.my/" target="_blank">
                                <img src="images/lecture.png" alt="lecture_list">
                                Lecture List
                            </a>                   
                        </li>
                        <li>
                            <a href="function/session_end.php">
                                <img src="images/logout.png" alt="logout">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            <div id="center-panel">
                <div id="operation-content">

                    <?php
                        if($role == "Admin"){
                            include("template/main_admin.php");
                        }
                        elseif($role == "Supervisor"){
                            include("template/main_supervisor.php");
                        }
                        else{
                            include("template/main_student.php");
                        }
                    ?>
                </div>

                <h2>Annoucement Board</h2>
                <div id="announcement-board">
                    <div id="announcement-content">
                        <div class="annoucement-text">
                            <span class="title">Title</span>
                            <span class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet vero suscipit odio magnam, voluptatum ipsam sint quas, laborum aliquam blanditiis repellat veniam est iure cumque necessitatibus repellendus ad consequatur sed? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad nobis quisquam, rerum repudiandae cum aperiam odio quibusdam nisi quam, fuga totam amet! Quam tenetur provident neque nostrum recusandae! Dolorum, consequatur.</span>
                            <span class="author">By Jay</span>
                        </div>
                        <div class="annoucement-text">
                            <span class="title">Title</span>
                            <span class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet vero suscipit odio magnam, voluptatum ipsam sint quas, laborum aliquam blanditiis repellat veniam est iure cumque necessitatibus repellendus ad consequatur sed? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad nobis quisquam, rerum repudiandae cum aperiam odio quibusdam nisi quam, fuga totam amet! Quam tenetur provident neque nostrum recusandae! Dolorum, consequatur.</span>
                            <span class="author">By Jay</span>
                        </div>
                        <div class="annoucement-text">
                            <span class="title">Title</span>
                            <span class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet vero suscipit odio magnam, voluptatum ipsam sint quas, laborum aliquam blanditiis repellat veniam est iure cumque necessitatibus repellendus ad consequatur sed? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad nobis quisquam, rerum repudiandae cum aperiam odio quibusdam nisi quam, fuga totam amet! Quam tenetur provident neque nostrum recusandae! Dolorum, consequatur.</span>
                            <span class="author">By Jay</span>
                        </div>
                    </div>
                </div>

            </div>

            <div id="activity-bar-panel">
                <div id="calendar-container">
                    <h2>Calendar</h2>
                    
                    <table id="calendar">
                        <caption id="calendar-caption"></caption>
                        <thead>
                            <tr>
                                <th>S</th>
                                <th>M</th>
                                <th>T</th>
                                <th>W</th>
                                <th>T</th>
                                <th>F</th>
                                <th>S</th>                       
                            </tr>
                        </thead>
                        <tbody id="calendar-data"></tbody>
                    </table>
                </div>

                <div id="event-container">
                    <h2>Event</h2>
                    <div>
                        <div class="event-details">
                            <h3>1 November 2024</h3>
                            <p>Proposal wirtting workshop</p>
                        </div>
                        <div class="event-details">
                            <h3>10 December 2024</h3>
                            <p>Guide on Literature Review</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
        include "template/footer.php";
    ?>    

    <script src="static/index.js"></script>

</body>

</html>


