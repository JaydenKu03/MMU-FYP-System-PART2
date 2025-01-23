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
            <h1>Pending FYP Title List</h1>
            <table id="pending-table" class="modern-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Title</th>
                        <th>Specialization</th>
                        <th>Propose By</th>
                        <th>Supervisor</th>
                        <th>Proposal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" id="l1">
                            <label for="l1">1</label>
                        </td>
                        <td>0123456789</td>
                        <td>Billy</td>
                        <td>Image Steganography: A Review of the Recent Advances</td>
                        <td>Cybersecurity</td>
                        <td>Student</td>
                        <td>lecturer A</td>
                        <td>doc 1</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="l2">
                            <label for="l2">2</label>
                        </td>
                        <td>0103339998</td>
                        <td>Ali</td>
                        <td>A Robust Generative Image Steganography Method based on Guidance Features in Image Synthesis</td>
                        <td>Cybersecurity</td>
                        <td>Student</td>
                        <td>lecturer B</td>
                        <td>doc 2</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="l3">
                            <label for="l3">3</label>
                        </td>
                        <td>0123987654</td>
                        <td>Alice</td>
                        <td>title 3</td>
                        <td>Cybersecurity</td>
                        <td>Student</td>
                        <td>lecturer C</td>
                        <td>doc 3</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="l4">
                            <label for="l4">4</label>
                        </td>
                        <td>0123456789</td>
                        <td>Jayden</td>
                        <td>title 4</td>
                        <td>Cybersecurity</td>
                        <td>Student</td>
                        <td>lecturer A</td>
                        <td>doc 4</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="l5">
                            <label for="l5">5</label>
                        </td>
                        <td>0123456789</td>
                        <td>John</td>
                        <td>title 5</td>
                        <td>Cybersecurity</td>
                        <td>Student</td>
                        <td>lecturer A</td>
                        <td>doc 5</td>
                    </tr>
                </tbody>
            </table>
    
            <div id="button-container">
                <button type="button" class="modern-button">Approve</button>
                <button type="button" class="modern-button">Reject</button>
                <button type="button" class="modern-button">Clear</button>
            </div>
        </div>
    </div>

    <?php
        include "template/footer.php";
    ?> 

</body>

</html>