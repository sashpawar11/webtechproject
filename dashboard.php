<?php
    session_start();
    $username = $_SESSION['username'];
    // $email = ($_POST['email']);
    // $passwd =($_POST['passwd']);
    include_once 'connect.php';

?>

<html>
<head>
    <meta charset="UTF-8">
	<meta http-equiv="Cache-control" content="no-cache">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css"/>
    <link href="css/font.css" type="text/css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="dashstyle.css">
</head>

<body class="bg">
    <section class="hero-banner bg-light py-5 mt-5" >
		<div class="container">
			<div class="row row align-items-center">
                <div class="col-lg-3"></div>
				<div class="col-lg-6">
					<h1 class="mt-2" style="color: white; font-size: 55px;">Welcome, <span style="background-color: #FFFF00; color:black;"><?php echo $username ?></span></h1>
					<p class="lead text-secondary my-5" style="color: yellow;">Your Top Scores among the Categories are: </p>

                    <?php
                        echo "<table border='1px solid black'>
                        <tr class='hder'><td><b>Category</b></td>
                        <td><b>Your Top Score</b></td>
                        </tr>";
                        $fetchqry4 = "SELECT `category_id`,`score` FROM `scores` WHERE(username ='$username'); "; //this
                                    $result4 = mysqli_query($con,$fetchqry4);
                                    $storeArray = Array();
                                    while ($row4 = mysqli_fetch_array($result4, MYSQLI_ASSOC)) {

                                    echo "<tr>";
                                    // echo "<td>" . $row4['category_id'] . "</td>";
                                    // echo "<td>" . $row4['score'] . "</td>";
                                    switch ($row4['category_id']) {
                                        case 1:
                                            echo "<td>Space</td>";
                                            echo "<td>" . $row4['score'] . "</td>";
                                          break;

                                        case 2:
                                            echo "<td>Geography</td>";
                                            echo "<td>" . $row4['score'] . "</td>";
                                          break;

                                        case 3:
                                            echo "<td>History</td>";
                                            echo "<td>" . $row4['score'] . "</td>";
                                          break;

                                        case 4:
                                            echo "<td>Random</td>";
                                            echo "<td>" . $row4['score'] . "</td>";
                                          break;

                                        default:
                                          echo "Error";
                                 }
                                echo "</tr>";
                                
                            }
                            echo "</table>";

                    ?>
					<!-- <a href="register.php" class="btn btn-outline-secondary btn-lg border" style="z-index: 0;">Register</a>
					<a href="login.php" class="btn btn-outline-secondary btn-lg border" style="z-index: 0;">Login</a> -->
				</div>
                       
            </div>
		</div>
        <button class="startbtn" type="button" onclick="window.location.href='category.php'">Start Trivia!</button>   
        <button class="exitbtn" type="button" onclick="window.location.href='logout.php'">Logout</button>   
	</section>
   


</body>
</html>