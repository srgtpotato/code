<html>
    <head>
        <title>Enrollment</title>
        <link rel="stylesheet" href="3-login.css">
</head>

<body>    
    <h1> ENROLLMENT ACCOUNT </h1>

    <div class="container">
        
        <form action="2-verify.php" method="post">

    <p>NOTE: Register only once!</p>
    <input type="number" placeholder=" Student ID" name="studentid" id="studentid" required>

    <div class="button">

    <input type="submit" id="btn" value="Log In">
    <button id="btn2"> <a href="1-register.php">  Register </a></button>
</form>

</div>

<button id="btn3">Admin</button>

</div>
</body>
</html>


<html>
<script src="jquery-3.7.1.min.js"></script>
<script>
  $(document).ready(function() {
    $('#btn3').click(function() {
      $('#loginForm').toggleClass('hidden');
    });
  });
</script>

</head>
<body>



<div id="loginForm" class="hidden">
  <form action="2-verifyadmin.php" method="post">
    <p>ADMIN</p> <br>
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <button type="submit">Login</button>
  </form>
</div>
</html>
