<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved FYP Titles</title>
    <link rel="stylesheet" href="static/base.css">
    <link rel="stylesheet" href="static/table.css">
</head>

<body>
    <?php
        include "template/navbar.php";
    ?>

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

        <div class="table-container">
            <h1>Approved FYP Title List</h1>
            <table id="approved-table" class="modern-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Title</th>
                        <th>Specialization</th>
                        <th>Propose By</th>
                        <th>Supervisor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>0123456789</td>
                        <td>Billy</td>
                        <td>Image Encryption and Decryption using Chaotic Key</td>
                        <td>Cybersecurity</td>
                        <td>Student</td>
                        <td>lecturer A</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>0103339998</td>
                        <td>Ali</td>
                        <td>title 2</td>
                        <td>-</td>
                        <td>Student</td>
                        <td>lecturer B</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>0123987654</td>
                        <td>Alice</td>
                        <td>title 3</td>
                        <td>-</td>
                        <td>Student</td>
                        <td>lecturer C</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>0123456789</td>
                        <td>Jayden</td>
                        <td>title 4</td>
                        <td>-</td>
                        <td>Student</td>
                        <td>lecturer A</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>0123456789</td>
                        <td>John</td>
                        <td>title 5</td>
                        <td>-</td>
                        <td>Student</td>
                        <td>lecturer A</td>
                    </tr>
                </tbody>
            </table>
        </div>     
    </div>

    <?php
        include "template/footer.php";
    ?>   


</body>

</html>