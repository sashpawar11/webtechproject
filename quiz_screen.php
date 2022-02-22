<html>
<?php
	include_once 'connect.php';
    session_start();
    if (isset($_GET['category'])) 
    {
        $category= $_GET['category'];
        $_SESSION['catg']= $category ;
    }
    if(!isset($_SESSION['current_id'])) { 
        $_SESSION['current_id'] = 1; 
    } 
    else { 
        if($_SESSION['current_id']<=10) 
        { 
                if(isset($_POST['submit'])) {
                    
                     @$userselected = $_POST['radioOption'];
                     $fetchqry4 = "UPDATE `question_solution` SET `user_ans`='$userselected' WHERE ques_id =".$_SESSION['current_id']." AND category_id=".$_SESSION['catg'].";"; 
                     $result4 = mysqli_query($con,$fetchqry4);
                     $_SESSION['current_id'] ++;
                     
            }
        }
        while($_SESSION['current_id']>10)  
        {
           $_SESSION['current_id']=1;
             
        echo "<script type='text/javascript'>location.href='score_display.php'</script>";
        }
    }
    $fetchqry1 = " SELECT * FROM `questions1` WHERE ques_id =".$_SESSION['current_id']." AND category_id= ".$_SESSION['catg']."; "; 
	$result1=mysqli_query($con,$fetchqry1);
	$num1=mysqli_num_rows($result1);
	$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);

?>

<head>
<title>Trivia Screen</title>
<link rel="stylesheet" href="quizscreen_style.css"></link>
</head>

<body>
<main>
 <div class="main_div">
<div class="quiz_header">
<h1 id="question-number"> Question : <?php echo $_SESSION['current_id']; ?> /10</h1>
</div>
<div class="questions">
<h1>
<?php echo @$row1['question']; ?>
</h1>

</div>
<form action="quiz_screen.php" method="post"> 
<div class="radio-toolbar">
    <input type="radio" id="option1" name="radioOption"  value="<?php echo $row1['option1']; ?>" >
    A.<label for="option1" name="user_ans"  value="<?php echo $row1['option1']; ?>"> 
    <?php echo $row1['option1']; ?>
    </label>
    <br><br><br>
    <input type="radio" id="option2" name="radioOption"  value="<?php echo $row1['option2']; ?>">
    B.<label for="option2" name="user_ans"  value="<?php echo $row1['option2']; ?>"><?php echo $row1['option2']; ?></label>
    <br><br><br>
    C.<input type="radio" id="option3" name="radioOption"  value="<?php echo $row1['option3']; ?>">
    <label for="option3" name="user_ans" value="<?php echo $row1['option3']; ?>"><?php echo $row1['option3']; ?></label> 
    <br><br><br>
    D.<input type="radio" id="option4" name="radioOption" value="<?php echo $row1['option4']; ?>">
    <label for="option4" name="user_ans"  value="<?php echo $row1['option4']; ?>"><?php echo $row1['option4']; ?></label> 
    <br><br><br><br><br>
</div>

<div class="exit_btn">
<a href="category.php"><button type="button">Exit</button></a> 
</div>
<div class="next_btn">
<input type="submit" name="submit" value="Next" class="action">
</div>
</form>
</div>

</main>
</body>
</html>
