<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Student List</title>
    <style>
        *
        {
            margin: 0px;
            padding: 0px;
        }
        body
        {
            margin: 20px;
            padding: 20px;
        }
        .filter
        {
            width: 984px;
            margin: 0px auto;
        }
        .text
        {
            text-align: center;
        }
        .logout_button
        {
            text-align: right;
        }
    </style>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
</head>
<body>
    <div class='logout_button'>
        <a href='index.php?mod=student&view=logout'><button class='btn btn-danger'>Logout</button></a>
    </div>
    <h1 class='text'>Welcome <?php echo $_SESSION["Name"] ?></h1><br>
    <h3>Filters</h3><br>
    <div class='filter'>
            <form method="post" action="index.php?mod=student&view=studentList">
                <div class='form-group'>
                            <label><b>
                                    Department :
                                </b>
                            </label>
                            <input type='text' name='dept_filter'>
                            <label><b>
                                    Blood Group :
                                </b>
                            </label>
                            <input type='text' name='blood_group_filter'>
                            <label><b>
                                    Passedout Year :
                                </b>
                            </label>
                            <input type='number' name='passedout_year_filter'>
                            <input type='submit' class='btn btn-primary' name='submit'>
                </div>
            </form>
    </div><br>
    <table cellspacing='0' cellpadding='20' border='1' width='800' class='table table-bordered table-hover table-secondary'>
        <tr class='table-dark'>
            <td align="center"><b>Name</b></td>
            <td align="center"><b>Department</b></td>
            <td align="center"><b>Number</b></td>
            <td align="center"><b>Blood Group</b></td>
            <td align="center"><b>Location</b></td>
            <td align="center"><b>Passedout Year</b></td>
            <td align="center"><b>Actions</b></td>
        </tr>
        <?php
        foreach ($rows as $row) 
        {
            echo "<tr>
                        <td align='center'>{$row['first_name']} {$row['last_name']}</td>
                        <td align='center'>{$row['department']}</td>
                        <td align='center'>{$row['number']}</td>
                        <td align='center'>{$row['blood_group']}</td>
                        <td align='center'>{$row['location']}</td>
                        <td align='center'>{$row['passedout_year']}</td>
                        <td align='center'><a href=index.php?mod=student&view=getStudentDetails&id={$row['student_id']}><button class='btn btn-secondary'>Update</button></a> 
                        <a href=index.php?mod=student&view=deleteStudent&id={$row['student_id']}><button class='btn btn-danger'>Delete</button></a>
                        <a href=index.php?mod=student&view=viewStudent&id={$row['student_id']}><button class='btn btn-success'>View</button></a>
                        </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>