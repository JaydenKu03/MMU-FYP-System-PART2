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
        include "template/navbar.php";
    ?>

    <main>
        <h1 class="title-font">FYP PORTAL</h1>
        <div id="container">
            <aside id="side-bar-panel">
                <div id="user-info">
                    <div id="picture-content">
                        <img id="user_picture" src="images/user_profile2.png" alt="user_img">
                        <h3 id="user-name">User</h3>
                    </div>
                    <p id="user-id">User12345</p>      
                    <p id="user-role">Admin</p>             
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
                            <a href="login.php">
                                <img src="images/logout.png" alt="logout">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            <div id="center-panel">
                <div id="operation-content">
                    <!-- Admin  -->
                    <div class="operation-task">
                        <a href="approved_list.php">
                            <img src="images/approved.png" alt="approved_list">
                            <p>Approved Project</p>
                        </a>
                    </div>
                    <div class="operation-task">
                        <a href="pending_list.php">
                            <img src="images/pending.png" alt="pending_list">
                            <p>Pending Project</p>
                        </a>
                    </div>
                    <div class="operation-task">
                        <a href="student_list.php">
                            <img src="images/student.png" alt="student_list">
                            <p>Student List</p>
                        </a>
                    </div>
                    <div class="operation-task">
                        <a href="admin_register.php"><img src="images/register.png" alt="registration">
                            <p>Account Registration</p>
                        </a>
                    </div>
                    <div class="operation-task">
                        <a href="announcement.php"><img src="images/announcement.png" alt="registration">
                            <p>Announcement & Event</p>
                        </a>
                    </div>

                    <!-- Supervisor -->
                    <!-- <div class="operation-task">
                        <a href="approved_list.php">
                            <img src="images/approved.png" alt="approved_list">
                            <p>Approved Project</p>
                        </a>
                    </div>
                    <div class="operation-task">
                        <a href="supervised.php">
                            <img src="images/supervised.png" alt="pending_list">
                            <p>Supervised Student</p>
                        </a>
                    </div>
                    <div class="operation-task">
                        <a href="meeting_sv.php">
                            <img src="images/submit_meeting.png" alt="pending_list">
                            <p>Meeting Management</p>
                        </a>
                    </div>
                    <div class="operation-task">
                        <a href="goals_sv.php">
                            <img src="images/goal_and_progress.png" alt="student_list">
                            <p>Goal and Progress</p>
                        </a>
                    </div>
                    <div class="operation-task">
                        <a href="proposal_submission.php">
                            <img src="images/submit_proposal.png" alt="registration">
                            <p>Proposal Submission</p>
                        </a>
                    </div>
                    <div class="operation-task">
                        <a href="assessment.php">
                            <img src="images/submit_assesstment.png" alt="registration">
                            <p>Assesstment Submission</p>
                        </a>
                    </div> -->
                    
                    <!-- Student -->
                    <!-- <div class="operation-task">
                        <a href="approved_list.php">
                            <img src="images/approved.png" alt="approved_list">
                            <p>Approved Project</p>
                        </a>
                    </div>
                    <div class="operation-task">
                        <a href="meeting.php">
                            <img src="images/submit_meeting.png" alt="pending_list">
                            <p>Meeting Management</p>
                        </a>
                    </div>
                    <div class="operation-task">
                        <a href="goals.php">
                            <img src="images/goal_and_progress.png" alt="student_list">
                            <p>Goal and Progress</p>
                        </a>
                    </div>
                    <div class="operation-task">
                        <a href="proposal_submission.php"><img src="images/submit_proposal.png" alt="registration">
                            <p>Proposal Submission</p>
                        </a>
                    </div> -->
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


