<html>
<?php
include_once 'connect.php';
session_start(); 
if(isset($_POST['submit'])) {
    $username = ($_POST['username']);
    $email = ($_POST['email']);
    $passwd =($_POST['passwd']);
    if (empty($username)||empty($email)|| empty($passwd)) {
        header("Location: register.php?error='Please enter all the details'");
        exit();
    }else{
        $fetchqry4 = "INSERT INTO `users` (`username`,`email`,`password`) VALUES('$username','$email','$passwd')";
        $result4 = mysqli_query($con,$fetchqry4);
 
        header("Location: login.php");
        exit();
    }
}
?>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css"/>
    <link href="css/font.css" type="text/css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="login.css">
</head>
    <body class="bg">
    <button type="button" class="backbtn" onclick="window.location.href='index.html'"><<<</button>

      </div>
        <div class="form">
          <form action="register.php" method="post"> 
            <h1>Register</h1>
            <div class="content">
            <?php if (isset($_GET['error'])) { ?>
            <p><?php echo $_GET['error']; ?></p>

<?php } ?>
            <div class="input-field">
                <input type="text" name="username" placeholder="Username" autocomplete="off">
              </div>
              <div class="input-field">
                <input type="email" name="email" placeholder="Email" autocomplete="off">
              </div>
              <div class="input-field">
                <input type="password" name="passwd" placeholder="Password" autocomplete="current-password">
              </div>
            </div>
            <div class="action">
              <input type="submit" name="submit" value="Submit">
            </div>
    </form>
</div>
    </body>
</html>