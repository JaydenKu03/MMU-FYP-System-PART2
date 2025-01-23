<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposal Submission</title>
    <link rel="stylesheet" href="static/base.css">
    <link rel="stylesheet" href="static/registration.css">
    <link rel="stylesheet" href="static/reusable.css">
</head>

<body>
    <?php
        include "template/navbar.php";
    ?>

    <div class="container">
        <h1 class="title-font">Proposal Submission</h1>
        <form action="/register.php" method="get">
            <label for="name">Student Name</label>
            <input type="text" id="name" name="name" placeholder="John Smith" required />

            <label for="id">Student ID</label>
            <input type="text" id="id" name="id" placeholder="0123456789" required />

            <label for="specialization">Specialization</label>
            <select name="speacilization" id="specialization" required>
                <option value="computerScience">Computer Science</option>
                <option value="cyberSecurity">Cybersecurity</option>
                <option value="gameDevelopment">Game Development</option>
                <option value="dataScience">Data Science</option>
                <option value="softwareEnginering">Software Enginering</option>
                <option value="informationSystem">Information System</option>
            </select>

            <label for="title">Project Title</label>
            <input type="text" id="title" name="title" required />

            <label for="supervisor">Supervisor Name</label>
            <input type="text" id="supervisor" name="supervisor" required />

            <label for="cosupervisor">Co-Supervisor Name</label>
            <input type="text" id="cosupervisor" name="cosupervisor" />

            <label for="status">Proposed By:</label>
            <select id="status" name="status" required>
                <option value="student-propose">Student-proposed</option>
                <option value="lecture-propose">Lecture-proposed</option>
                <option value="industry-propose">Industry-proposed</option>
            </select>

            <label for="type">Project Type</label>
            <select name="type" id="type" required>
                <option value="application-based">Application-based</option>
                <option value="research-based">Research-based</option>
                <option value="applicationNreseach-based">Application and Reseach-based</option>
            </select>

            <label for="specialization">Project Specialization</label>
            <select name="speacilization" id="specialization" required>
                <option value="computerScience">Computer Science</option>
                <option value="cyberSecurity">Cybersecurity</option>
                <option value="gameDevelopment">Game Development</option>
                <option value="dataScience">Data Science</option>
                <option value="softwareEnginering">Software Enginering</option>
                <option value="informationSystem">Information System</option>
            </select>

            <label for="category">Project Category</label>
            <select name="category" id="category" required>
                <option value="CriticalSystem">Critical System</option>
                <option value="">Application Software</option>
                <option value="">Software Tools & Utilities</option>
                <option value="">Service Oriented Computing</option>
                <option value="">Data Engineering</option>
                <option value="">Data Analytics</option>
                <option value="">Cryptography and Data Security</option>
                <option value="">Investigation and Analysis</option>
                <option value="">Security and Defence</option>
                <option value="">Game Software Development (GSD)</option>
                <option value="">Game Algorithm Research (GAR)</option>
                <option value="">Game Design Prototyping (GDP)</option>
                <option value="">IT Infrastructure</option>
                <option value="">Transaction Processing Systems</option>
                <option value="">Intelligent Systems</option>
            </select>

            <label for="industry">Industry Collaboration</label>
            <select id="industry" name="industry">
                <option value="no">No</option>
                <option value="yes">Yes</option>
            </select>

            <label for="Proposal">Proposal Document</label>
            <input type="file" id="Proposal" name="Proposal" required />

            <div class="button-container">
                <button type="submit" class="modern-button">Submit</button>
                <button type="reset" class="modern-button">Reset</button>
            </div>
        </form>
    </div>

    <?php
        include "template/footer.php";
    ?>

</body>

</html>