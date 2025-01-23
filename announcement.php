<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/base.css">
    <link rel="stylesheet" href="static/announcement.css">
    <title>Annoucement and Event</title>
</head>

<body>
    <?php
        include "template/navbar.php";
    ?>
    
    <div class="form-container">
        <div class="tabs">
            <div class="active-tab tab" id="announcement-tab">Announcement</div>
            <div class="tab" id="event-tab">Event</div>
        </div>

        <form id="announcement-form" class="active-form">
            <label for="announcement-by">Post By:</label>
            <input type="text" id="announcement-by" name="announcement-by" placeholder="Your Name">

            <label for="announcement-title">Announcement Title:</label>
            <input type="text" id="announcement-title" name="announcement-title" placeholder="Enter Title">

            <label for="announcement-content">Announcement Content:</label>
            <textarea id="announcement-content" name="announcement-content" maxlength="350" rows="4" placeholder="Write your announcement..."></textarea>

            <button type="submit">Post Announcement</button>
        </form>

        <form id="event-form">
            <label for="event-by">Post By:</label>
            <input type="text" id="event-by" name="event-by" placeholder="Your Name">

            <label for="event-date">Event Date:</label>
            <input type="date" id="event-date" name="event-date">

            <label for="event-title">Event Title:</label>
            <input type="text" id="event-title" name="event-title" placeholder="Enter Event Title">

            <button type="submit">Post Event</button>
        </form>
    </div>

    <?php
        include "template/footer.php";
    ?>    

    <script src="static/function.js"></script>

</body>

</html>