<html>
    <head> <title> Registration </title> 
    <link rel="stylesheet" href="3-register.css">
</head>

    <body>

    <div class="profile"> 
        <H1>Registration</H1>

        <form action="1-insertreg.php" method="post">
            
    <div class="flname">
    <input type="text" placeholder=" Last name" id="lname" name="lname" required>
    <input type="text" placeholder=" First name" id="fname" name="fname" required>
     </div>

    <input type="text" placeholder=" Middle name" id="mname" name="mname" required>
    <input type="text" placeholder=" Sex" id="sex" name="sex" required>
    <input type="number" placeholder=" Student ID" id="studentid" name="studentid" required>

    <p> Contact </p>
    <input type="text" placeholder="email/ number/ FB-account" id="contact" name="contact" required>
    <p> Birthday </p>
    <input type="date" id="dob" name="dob">
    <p>Profile photo</p>
    <input type="file" name="user" id="user" >

    <input type="submit" value="Register" id="register">
    <button id="backbtn"> <a href="1-log-in.php"> Log In </a></button>

</form>

</div>
<img src="logo.png" alt="logo">
</body>
</html>