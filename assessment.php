<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Submission Page</title>
    <link rel="stylesheet" href="static/assessment.css">
    <link rel="stylesheet" href="static/base.css">
    <link rel="stylesheet" href="static/table.css">
</head>

<body>
    <?php
        include "template/navbar.php";
    ?>

    <h1><b>Final Year Project Student Assessment</b></h1>
    <br />
    <div class="container">
        <form name="Assessment" action="">
            <h3>Please fill in the following Assessment</h3>
            <br />
            <p class="col-45">
                SUPERVISOR ID :
            </p>
            <br />
            <p class="col-65">
                <input type="text" name="Student_Name">
            </p>
            <br />
            <p class="col-45">
                SUPERVISED STUDENT NAME:
            </p>
            <br />
            <p class="col-65">
                <input type="text" name="Student_Name">
            </p>
            <br />
            <p class="col-45">
                SUPERVISED STUDENT ID:
            </p>
            <br />
            <p class="col-65">
                <input type="text" name="Student_ID">
            </p>
            <br />
            <p class="col-45">
                Project Title:
            </p>
            <br />
            <p class="col-65">
                <input type="text" name="Title">
            </p>
            <br />
            <p class="col-45">
                Assessment Date:
            </p>
            <br />
            <p class="col-65">
                <input type="date" name="AssDate" id="AssDate">
            </p>
            <br />
            <p class="col-45">
                Program Name:
            </p>
            <br />
            <p class="col-65">
                <input type="text" name="AssDate" id="AssDate">
            </p>
            <br />
        </form>
        <br />
        <h3>Evaluation Criteria</h3>
        <br />
        <table id="evaluation">
            <thead>
                <tr>
                    <th>Criteria</th>
                    <th>Marks</th>
                    <th>Maximum Mark</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Clarity and Objectives</td>
                    <td>0</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Understanding of the problem</td>
                    <td>0</td>
                    <td>10</td>
                </tr>
            </tbody>
        </table>
        <br />
        <h3>Project Execution</h3>
        <br />
        <table id="Execution">
            <thead>
                <tr>
                    <th>Criteria</th>
                    <th>Marks</th>
                    <th>Maximum Mark</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Quality of methodology</td>
                    <td>0</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Technical Implementation</td>
                    <td>0</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Innovation</td>
                    <td>0</td>
                    <td>10</td>
                </tr>
            </tbody>
        </table>
        <br />
        <h3>Presentation</h3>
        <br />
        <table id="presentation">
            <thead>
                <tr>
                    <th>Criteria</th>
                    <th>Marks</th>
                    <th>Maximum Mark</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Quality of report</td>
                    <td>0</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>presentation skills</td>
                    <td>0</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>ability to answer question</td>
                    <td>0</td>
                    <td>10</td>
                </tr>
            </tbody>
        </table>
        <br />
        <h3>Upload Assessment</h3>
        <br>
        <input type="file">
        <br><br />
        <ul>
            <li>Supervisors signature: </li>
            <textarea name="text" id="sign" cols="20" rows="7"></textarea>
        </ul>
    </div>
    <br />

    <?php
        include "template/footer.php";
    ?>    
</body>

</html>