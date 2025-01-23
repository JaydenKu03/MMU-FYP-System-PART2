<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting Management</title>
    <link rel="stylesheet" href="static/meeting.css">
    <link rel="stylesheet" href="static/base.css">
</head>

<body>
    <?php
        include "template/navbar.php";
    ?>

    <h1><b>Meeting Management</b></h1>
    <br />
    <div class="meeting-container">
        <div class="booking-cointainer">
            <h2>Appointment Booking</h2>
            <br />
            <form id="meeting-details" class="active-form">
                <h3><b>Appointment Details</b></h3>
                <br />

                <label for="meeting-title">Title:</label>
                <input type="text" id="meeting-title" name="meeting-title" placeholder="Enter Title">

                <label for="meeting-description">Description:</label>
                <textarea id="meeting-description" name="meeting-description" maxlength="350" rows="4"
                    placeholder="Enter Description"></textarea>

                <label for="meeting-date">Date:</label>
                <input type="date" id="meeting-date" name="meeting-date">

                <label for="meeting-time">Time:</label>
                <input type="time" id="meeting-time" name="meeting-time">

                <button type="submit">Submit Booking</button>
            </form>
        </div>

        <div class="status-cointainer">
            <h3><b>Appointment Status</b></h3>
            <br />
            <table id="meeting-status">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>First Meeting</td>
                        <td>Discuss Chapter 1</td>
                        <td>19/12/2024</td>
                        <td>3.00 PM</td>
                        <td>Done</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Second Meeting</td>
                        <td>Refine Chapter 1</td>
                        <td>20/12/2024</td>
                        <td>3.00 PM</td>
                        <td>No</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Second Meeting</td>
                        <td>Refine Chapter 1</td>
                        <td>20/12/2024</td>
                        <td>4.00 PM</td>
                        <td>Pending</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="logs-container">
            <h2><b>Meeting Logs</b></h2>
            <br />
            <ol>
                <li><a href="#">weeklylog1.pdf</a></li>
                <li><a href="#">weeklylog2.pdf</a></li>
                <li><a href="#">weeklylog3.pdf</a></li>
                <li><a href="#">weeklylog4.pdf</a></li>
            </ol>
            <form id="logs" method="post" enctype="multipart/form-data" class="active-form">
                <input type="file" name="file">
                <button type="submit">Submit Logs</button>
            </form>
        </div>
    </div>

        
    <?php
        include "template/footer.php";
    ?>  
</body>

</html>