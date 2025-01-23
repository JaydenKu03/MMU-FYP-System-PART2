<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Goals and Progress</title>
        <link rel="stylesheet" href="static/goals.css">
        <link rel="stylesheet" href="static/base.css">
        <link rel="stylesheet" href="static/table.css">
    </head>

    <body>
        <?php
            include "template/navbar.php";
        ?>

        <h1>Goals and Progress</h1>
        <h2 id="student-name">Supervised Student Name: ------</h2>
        <div class="goals-container">
            <div class="progress-container">
                <h2>Progress Table</h2>
                <br />
                <table id="tracker">
                    <br />
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Progress</th>
                            <th>Next Goal</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12/12/2024</td>
                            <td>Done Intoduction. Continuing with Literature Review</td>
                            <td>Literature Review</td>
                            <td>Give general overview for introduction</td>
                        </tr>
                        <tr>
                            <td>18/12/2024</td>
                            <td>Literature Review</td>
                            <td>5 more Literature Review</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>    
            </div>

            <div class="update-container">
                    <h2>Comment Form</h2>
                    <form id="comment-form" class="active-form">

                        <label for="update-comment">Comment:</label>
                        <textarea id="update-comment" name="update-comment" maxlength="350" rows="4" placeholder="Enter Comment"></textarea>
                        
                        <button type="submit">Submit Update</button>
                    </form>
            </div>
        </div>

        <?php
            include "template/footer.php";
        ?>   

    </body>
</html>
