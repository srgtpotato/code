<?php

session_start();

if(isset($_SESSION['id']) && isset($_SESSION['lname'])){

    $id=$_SESSION['id'];
    $lname = $_SESSION['lname'];
    $fname = $_SESSION['fname'];
    $mname = $_SESSION['mname'];
    $img = $_SESSION['img'];
    $sex = $_SESSION['sex'];
}
?>
<html>
    <head> <title> set </title>

    <link rel="stylesheet" href="3-enroll.css">

    <script src="jquery-3.7.1.min.js"></script>

</head>
    <body>

        <div class="right">
                <img src="<?php echo $img; ?>" alt="" id="user">
            </div>
        
        <div class="popup">

        <html>
        <?php
        echo "Last name: " .$lname;
        echo "<br>First name: " .$fname;
        echo "<br>Middle name: " .$mname;
        echo "<br>Sex: " .$sex;
        ?>
        
        <button id="logout"> <a href="1-log-in.php"> Log out </a></button>
</html>
        </div>


        <div class="enroll">

            
            <p>
            NOTE: <br> section: first come, first serve <br>
    slot limit: 30 students per section.</p>

    <form action="1-insertenroll.php" method="post">
    <input type="text" placeholder=" Last name" id="lname" name="lname" required>
    <input type="text" placeholder=" First name" id="fname" name="fname" required>
    <input type="text" placeholder=" Middle name" id="mname" name="mname" required>

            <input type="text" placeholder=" Academic year (20xx-20xx)" id="ay" name="ay">
            <input type="number" placeholder=" Semester" id="semester" name="semester">
            <input type="number" placeholder=" College Year (2, 3, 4)" id="cy" name="cy" required>

            <div class="slotcourse">
            <label>Course: </label>
            <select id="course" name="course">
                <option > BSIT </option>
                <option > BEED </option>
                <option > BSED </option>
                <option > BSBA </option>
            </select>
        
            <input type="text" placeholder="Major" id="major" name="major" >
        
        </div>

        <input type="submit" id="enrollbtn" value="Enroll">
    </form>
        </div>
        
        <img src="logo.png" alt="logo">
        <script src="event.js"></script>
    </body>
</html>