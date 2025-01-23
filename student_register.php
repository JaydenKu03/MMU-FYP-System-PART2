<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FYP Student Registration</title>
    <link rel="stylesheet" href="static/base.css">
    <link rel="stylesheet" href="static/registration.css">
    <link rel="stylesheet" href="static/reusable.css">
</head>

<body>
    <div class="container">
        <h1 class="title-font">FYP Student Account Registration</h1>
        <form action="/register.php" method="get">
            <label for="name">Student Name</label>
            <input type="text" id="name" name="name" placeholder="John Smith" required />

            <label for="id">Student ID</label>
            <input type="text" id="id" name="id" placeholder="0123456789" required />

            <label for="email">Password</label>
            <input type="password" id="password" name="password" required />

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="0123456789@student.mmu.edu.my" required />

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="012-3456789" required />

            <label for="specialization">Specialization</label>
            <select name="speacilization" id="specialization" required>
                <option value="computerScience">Computer Science</option>
                <option value="cyberSecurity">Cybersecurity</option>
                <option value="gameDevelopment">Game Development</option>
                <option value="dataScience">Data Science</option>
                <option value="softwareEnginering">Software Enginering</option>
                <option value="informationSystem">Information System</option>
            </select>

            <div class="button-container">
                <button type="submit" class="modern-button">Register</button>
                <button type="reset" class="modern-button">Reset</button>
            </div>
        </form>
    </div>
</body>

</html>