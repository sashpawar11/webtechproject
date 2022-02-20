<html>
<?php
include_once 'connect.php';
session_start(); 
if(isset($_POST['submit'])) {
    $username = ($_POST['username']);
    $email = ($_POST['email']);
    $passwd =($_POST['passwd']);
    if (empty($email)|| empty($passwd)) {
        header("Location: login.php?error='Please enter all the details'");
        exit();
    }else{
        $qry1 = "SELECT * FROM users WHERE email='$email' AND password='$passwd'  ";
        $result1 = mysqli_query($con, $qry1);
        $num1=mysqli_num_rows($result1);
	    $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
            if ($row1['email'] === $email && $row1['password'] === $passwd) {
                echo "Logged in!";
                $_SESSION['username'] = $row1['username'];
                $_SESSION['email'] = $row1['email'];
                $_SESSION['user_id'] = $row1['user_id'];
                header("Location: dashboard.php");
                exit();
            }else{
                header("Location: login.php?error=Incorect Email or Password");
                exit();
            }
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

        <div class="form">
          <form action="login.php" method="post">
            <h1>Login</h1>
            <div class="content">
            <?php if (isset($_GET['error'])) { ?>
            <p><?php echo $_GET['error']; ?></p>

<?php } ?>
              <div class="input-field">
                <input type="email" name="email" placeholder="Email" autocomplete="off">
              </div>
              <div class="input-field">
                <input type="password" name="passwd" placeholder="Password" autocomplete="current-password">
              </div>
            </div>
            <div class="action">
             <a href="register.php"><button type="button">Register</button></a>
              <input type="submit" name="submit" value="Sign In">
            </div>
    </form>
</div>
    </body>
</html>