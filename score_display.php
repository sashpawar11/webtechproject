<html>
<head>
<title>
score display screen
</title>
<link rel="stylesheet" href="score_display_style.css">
</head>
<?php
  include_once 'connect.php';
  session_start();
  $_SESSION['score']=0;
  $fetchqry3 = "SELECT `user_ans`, `correct_option` FROM `question_solution` WHERE(category_id =".$_SESSION['catg']."); "; //this
              $result3 = mysqli_query($con,$fetchqry3);
              $storeArray = Array();
              while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
                  if($row3['user_ans']==$row3['correct_option']){
                      $_SESSION['score'] += 1 ;
                  }
                }

  $userid=$_SESSION['user_id'];
  $username=$_SESSION['username'];
  $categoryid=$_SESSION['catg'];
  $quesno=$_SESSION['score'];
  $score=$quesno*5;
  $checkqry = "SELECT * FROM `scores` WHERE `user_id` = '$userid' AND `category_id`='$categoryid';";
  $resultchk = mysqli_query($con,$checkqry);
  if(mysqli_num_rows($resultchk) > 0){
    $fetchqry6 = "UPDATE `scores` SET `username`='$username',`category_id`='$categoryid',`score`='$score' WHERE `user_id`='$userid' AND `category_id`='$categoryid'";
    $result6 = mysqli_query($con,$fetchqry6);
  }
  else {
    $fetchqry5 = "INSERT INTO `scores` (`user_id`,`username`,`category_id`,`score`) VALUES ('$userid','$username','$categoryid','$score');";
    $result5 = mysqli_query($con,$fetchqry5);
  }


?>

<body>
<div class="main_div">
<br><br>
<h2>The total number of questions answered correctly are: 
</h2>
<h2 align="center"> 
  <?php echo $no = $_SESSION['score']; 
        
    ?>/10 </h2>
<br>
<h1>The score is <?php echo $no*5; ?>
</h1>
<br>
<?php
echo "<table border='1px solid black'>
<tr><td><b>Question no.</b></td>
<td><b>Correct Answer</b></td>
<td><b>Your Answer</b></td>
</tr>";
$fetchqry4 = "SELECT `ques_id`,`user_ans`, `correct_option` FROM `question_solution` WHERE(category_id =".$_SESSION['catg']."); "; //this
             $result4 = mysqli_query($con,$fetchqry4);
             $storeArray = Array();
             while ($row4 = mysqli_fetch_array($result4, MYSQLI_ASSOC)) {

echo "<tr>";
echo "<td>" . $row4['ques_id'] . "</td>";
echo "<td>" . $row4['correct_option'] . "</td>";
echo "<td>" . $row4['user_ans'] . "</td>";
echo "</tr>";
}
echo "</table>";
//session_unset(); 
?>
<div id="home_btn_div">
<a href="category.php"><button type="button" id="home">Category Select</button></a> 
<a href="dashboard.php"><button type="button" id="home">Dashboard</button></a> 
</div>
</div>

</body>
</html>