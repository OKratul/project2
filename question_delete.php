<?php session_start();?>
<?php include 'core/User.php';?>
<?php include 'core/Questions.php';?>

<?php 
     if(!isset($_SESSION['user_id'])){
        echo "<h3 class='alert alert-danger'>INVALID REQUEST</h3>";
        header ("location: login.php");     
    }
    $user = new User();
    $questions = new Questions();
   

     $singleQues = $questions->singleQusestion($_GET['qid']); 

    if (isset($_GET['qid'])){
        if($singleQues['user_id'] == $_SESSION['user_id']){
            $questions->deleteQues($_GET['qid']);
            header ('location: dashbord.php');
        }
    }
?>