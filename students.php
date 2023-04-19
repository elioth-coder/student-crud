<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENTS</title>
</head>
<body>
<?php include_once "menu.php"; ?>
    <form action="add-students.php">
        <h1>ENTER STUDENT DETAILS</h1>
        <label for="">
            ENTER FIRST NAME:
            <input type="text">
        </label><br>
        <label for="">
            ENTER LAST NAME:
            <input type="text">
        </label><br>
        <div>
            <label for="">MALE <input type="radio" name="gender" id=""></label>
            <label for="">FEMALE <input type="radio" name="gender" id=""></label>
        </div>
        <label for="">
            YEAR LEVEL: 
            <select name="" id="">
                <option value="">1ST YEAR</option>
                <option value="">2ND YEAR</option>
                <option value="">3RD YEAR</option>
                <option value="">4TH YEAR</option>
            </select>
        </label><br>
        <label for="">
            COURSE: 
            <select name="" id="">
                <option value="">BSIT</option>
                <option value="">BSED</option>
                <option value="">BSBA</option>
                <option value="">BEED</option>
            </select>
        </label><br>
        <label for="">
            SEMESTER: 
            <select name="" id="">
                <option value="">1ST</option>
                <option value="">2ND</option>
            </select>
        </label>
        <hr>
        <button type="submit">Submit</button>
    </form>
    <div>
    <table border="1">
    <thead>
    <tr>
    <th>ID</th>
    <th>STUDENT NAME</th>
    <th>GENDER</th>
    <th>YEAR</th>
    <th>COURSE</th>
    <th>SEMESTER</th>
    <th>ACTION</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <th>1</th>
    <th>JUAN DELA CRUZ</th>
    <th>MALE</th>
    <th>2ND</th>
    <th>BSIT</th>
    <th>
        <a href=""><button>EDIT</button></a>
        <a href=""><button>DELETE</button></a>
        <a href="student-subjects.php"><button>ADD SUBJECTS</button></a>
    </th>
    </tr>    
    </tbody>
    </table>
    </div>
</body>
</html>