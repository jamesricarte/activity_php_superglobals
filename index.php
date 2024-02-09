<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2: SuperGlobals</title>

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        form {
            display: flex;
            flex-direction: column;
            border: 1px solid rgb(53, 178, 255);
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .age {
            width: 70px;
        }

        input[type=submit] {
            width: 60px;
            margin-top: 10px;

            background-color: rgb(53, 178, 255);
            color: white;
            padding: 5px;
            border-radius: 8px;
        }

        #course, #year {
            width: 70px;
        }

        input, select {
            border: 1px solid rgb(53, 178, 255);
            border-radius: 4px;
        }

        table {
        border-collapse: collapse;
        width: 80%;
        margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        td {
            font-size: 14px;
        }

        th {
            font-size: 15px;
        }

        th {
            background-color: rgb(233, 233, 233);
        }

        .fill-warning {
            background-color: rgb(146, 213, 255);
            padding: 10px;
            color: white;
            border-radius: 8px;
        }

    </style>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
        <label for="">First Name:</label>
        <input type="text" name="fname"> 
        <label for="">Middle Name:</label>
        <input type="text" name="mname">
        <label for="">Last Name:</label>
        <input type="text" name="lname">
        <label for="">Age:</label>
        <input type="number" class="age" name="age">
        <label for="">Course</label>
        <select id="course" name="course">
            <option value="BSIT">BSIT</option>
            <option value="BSCS">BSCS</option>
        </select>
        <label for="">Year</label>
        <select id="year" name="year">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <div>
            <label for="">Enrolled:</label>
            <input type="radio" id="1" name="enrolled" value="1">
            <label for="1">Yes</label>
            <input type="radio" id="2" name="enrolled" value="2">
            <label for="2">No</label>
        </div>
        <label for="">Subject:</label>
        <select name="subject" id="subject">
            <option value="Object oriented programming using PHP">Object oriented programming using PHP</option>
        </select>
        <input type="submit">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST["fname"]) && $_REQUEST["fname"] != "" && isset($_REQUEST["lname"]) && $_REQUEST["lname"] != "" && isset($_REQUEST["mname"]) && $_REQUEST["mname"] != "" && isset($_REQUEST["age"]) && $_REQUEST["age"] != "" && isset($_REQUEST["course"]) && $_REQUEST["course"] != "" && isset($_REQUEST["year"]) && $_REQUEST["year"] != "" && isset($_REQUEST["enrolled"]) && isset($_REQUEST["subject"])  && $_REQUEST["subject"] != "") {
        $fname = $_REQUEST["fname"];
        $lname = $_REQUEST["lname"];
        $mname = $_REQUEST["mname"];
        $age = $_REQUEST["age"];
        $course = $_REQUEST["course"];
        $year = $_REQUEST["year"];
        $enrolled = $_REQUEST["enrolled"];
        $subject = $_REQUEST["subject"];

        if ($enrolled === "1") {
          $enrolledStatus = "yes";
        } else if ($enrolled === "2") {
            $enrolledStatus = "no";
        }

        $grade = 92.1;

        echo "<h4>Student Information:</h4>
            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Course and Year</th>
                        <th>Enrolled</th>
                        <th>Subject</th>
                        <th>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>" . $fname. "</td>
                        <td>" . $mname. "</td>
                        <td>" . $lname. "</td>
                        <td>" . $age. " years old </td>
                        <td>" . $course . "-" . $year . "</td>
                        <td>" . $enrolledStatus . "</td>
                        <td>" . $subject. "</td>
                        <td>" . $grade . "
                    </tr>
                </tbody>
            </table>";
    } else {
        echo "<p class='fill-warning'>Please fill all the fields!</p>";
    }
    ?>
</body>
</html>