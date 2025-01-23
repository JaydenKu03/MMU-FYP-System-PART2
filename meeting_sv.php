<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meeting Management</title>
        <link rel="stylesheet" href="static/meeting.css">
        <link rel="stylesheet" href="static/base.css">
        <link rel="stylesheet" href="static/table.css">
    </head>

    <body>
        <?php
            include "template/navbar.php";
        ?>

        <h1><b>Meeting Management</b></h1>
        <br />
            <div class="meeting-container">
                <div class="request-cointainer">
                    <h2>Appointment Request</h2>
                    <table id="meeting-status">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Student ID</th>
                                <th>Name</th>
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
                                <td>1211306413</td>
                                <td>Mohamed Arique bin Mohamed Aziyen</td>
                                <td>First Meeting</td>
                                <td>Discuss Chapter 1</td>
                                <td>19/12/2024</td>
                                <td>3.00 PM</td>
                                <td>
                                    <select name="status" id="status">
                                        <option value="Pending">Pending</option>
                                        <option value="Accept">Accept</option>
                                        <option value="Cancel">Cancel</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>1211306411</td>
                                <td>Mohamed Arique </td>
                                <td>Second Meeting</td>
                                <td>Refine Chapter 1</td>
                                <td>20/12/2024</td>
                                <td>3.00 PM</td>
                                <td>
                                    <select name="status" id="status">
                                        <option value="Pending">Pending</option>
                                        <option value="Accept">Accept</option>
                                        <option value="Cancel">Cancel</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>1211306412</td>
                                <td>Arique</td>
                                <td>Second Meeting</td>
                                <td>Refine Chapter 1</td>
                                <td>20/12/2024</td>
                                <td>4.00 PM</td>
                                <td>
                                    <select name="status" id="status">
                                        <option value="Pending">Pending</option>
                                        <option value="Accept">Accept</option>
                                        <option value="Cancel">Cancel</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit">Submit</button>
                </div>

            </div>

            
            <?php
                include "template/footer.php";
            ?>  
    </body>
</html>
