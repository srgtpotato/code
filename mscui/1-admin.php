
<html>
    <head> <title> admin </title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            height: auto;
            width: 99%;
        }
        #adminout{
            margin: 25px 0 0 20px;
            position:absolute;
            right: 10px;
            top:-10px;
            background-color: rgb(75 31 153);
            border-style: none;
            height: 35px;
            width: 100px;
            border-radius: 10px;
        }
        a{
            color:white;
            text-decoration:none;
        }
        .titles{
            display:flex;
            justify-content:space-between;
        }
        h5{
            font-weight:500;
            font-size: larger;
            margin: 5% 10% 0 15%;
        }
        p{
            position:absolute;
            left:10px;
            top:10px;
        }
        .data{
            display:flex;
            justify-content:space-between;
            height: 100vh;
            width: 100%;
        }
        table{
            width:auto;
            height: 100px;
            margin:30px 50px 0 50px;
        }
        #table1{
            margin-left:90px;
        }
        tr{
            border:none;
        }
        td,th{
            padding:5px;
        }

    </style>

</head>
<body>

    <button id="adminout"> <a href="1-log-in.php"> Log Out</a></button>

<div class="titles">
<p>Note: atleast 2 data to view</p>
<h5>Student's Data sorted by Last name</h5> <h5>List of Students sorted by Course and Last name</h5>

</div>
<div class="data">

<table border="1" id="table1">
    
<tr>
    <th>Last name</th>
    <th>First name</th>
    <th>Middle name</th>
    <th>Student ID</th>
    <th>Contact</th>
    <th>Sex</th>
    <th>Date of Birth</th>
</tr>

<?php

include "1-conn.php";

$studnt ="SELECT * FROM student order by lname asc";
$stud = $conn->query($studnt);
if($stud->num_rows>1){
    while($row=$stud->fetch_assoc()){
        echo "<tr><td>" .$row ['lname'] . "<td>" .$row ['fname'] . "<td>" .$row ['mname'] . "<td>" .$row ['studentid'] . "<td>" .$row ['contact'] ."<td>" .$row ['sex'] . "<td>" .$row ['DOB'];
    }
}

?>

</table>
<table border="1">
    
<tr>
    <th>Last name</th>
    <th>First name</th>
    <th>Middle name</th>
    <th>Academic year</th>
    <th>Semester</th>
    <th>course</th>
    <th>major</th>

</tr>

<?php

include "1-conn.php";

$enroll ="SELECT * FROM enrollee order by course,lname asc";
$rollee = $conn->query($enroll);
if($rollee->num_rows>1){
    while($row=$rollee->fetch_assoc()){
        echo "<tr><td>" .$row ['lname'] . "<td>" .$row ['fname'] . "<td>" .$row ['mname'] . "<td>" .$row ['ay'] . "<td>" .$row ['semester'] . "<td>" .$row ['course'] . "<td>" .$row ['major'];
    }
}

?>

</table>
</div>
</body>
</html>