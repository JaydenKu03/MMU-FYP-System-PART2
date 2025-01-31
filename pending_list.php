<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending FYP Titles</title>
    <link rel="stylesheet" href="static/base.css">
    <link rel="stylesheet" href="static/table.css">
    <link rel="stylesheet" href="static/reusable.css">
</head>

<body>
    <?php
        include "template/navbar.php";
    ?>

    <div class="content-container">
        <div class="filter-container">
        <h2>Filters: </h2>
            <form method="GET" action="pending_list.php">
                <label for="searchName">Name:</label>
                <input type="search" id="searchName" name="searchName" placeholder="Search Name...">
                <label for="searchSupervisor">Supervisor:</label>
                <input type="search" id="searchSupervisor" name="searchSupervisor" placeholder="Search Supervisor...">
                <label for="specialization">Specialization:</label>
                <select id="specialization" name="specialization">
                    <option value="all-specializations">All Specializations</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="CyberSecurity">Cybersecurity</option>
                    <option value="Game Development">Game Development</option>
                    <option value="Data Science">Data Science</option>
                    <option value="Software Engineering">Software Engineering</option>
                    <option value="Information System">Information System</option>
                </select>

                <button type="submit" class="modern-button">Apply Filter</button>
            </form>
        </div>

        <div class="table-container">
            <h1>Pending FYP Title List</h1>
            <table id="pending-table" class="modern-table">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Title</th>
                        <th>Specialization</th>
                        <th>Propose By</th>
                        <th>Supervisor</th>
                        <th>Proposal</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require "function/pending.php";
                    viewPending();
                    ?>
                </tbody>
            </table>
    
            <!-- <div id="button-container">
                <button type="button" class="modern-button">Approve</button>
                <button type="button" class="modern-button">Reject</button>
                <button type="button" class="modern-button">Clear</button>
            </div> -->
        </div>
    </div>

    <?php
        include "template/footer.php";
    ?> 

</body>

</html>