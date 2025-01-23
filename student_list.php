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
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Specialization</th>
                            <th>Supervisor</th>
                            <th>Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="#">Camellya</a></td>
                            <td>012</td>
                            <td>Game Development</td>
                            <td><a href="#">Ms.Joe</a></td>
                            <td>AI in Gaming Field</td>
                        </tr>
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