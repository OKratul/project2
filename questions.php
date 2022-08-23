<?php session_start() ?>
<?php include 'doc_start.php'; ?>
<?php include 'header.php'; ?>

<?php include 'core/User.php';

    $user = new User();
   
?>
<?php 
    include 'core/Questions.php';

    $questions = new Questions();

    if(!isset($_GET['id'])){
        echo "<h3 class='alert alert-danger'>INVALID REQUEST</h3>";
        die();
    }
   $singleQues = $questions->singleQusestion($_GET['id']); 
  
?>

<div class="container-fluid text-light p-5 bg-dark">
    <div class="row">
        <div class="col-12">
                <h3>
                Title:- <?= $singleQues['title']?>
                </h3>
                <hr style="height:1px;color:gray;background-color:gray">

                <h5>
                    Title:-<?= $singleQues['title'] ?>
                </h5>
                <?php 
                    if($singleQues['user_id'] == $_SESSION['user_id']){
                        $qid= $singleQues['id'];
                        echo "<a href='question_update.php?qid=$qid'>Edit</a> |";

                        $deleteBtn = " <a onclick='return confirm(`Are you Sure`)' href='question_delete.php?qid=$qid'>Delete</a>";
                        echo $deleteBtn;
                    }
                ?>
                <p>
                Details:-<?= $singleQues['details'] ?>
                </p>
            <div>
                <?php 
                    if(isset($_POST['post'])){
                        if(!empty($_POST['answer'])){
                            $questions->creatAnswer($_POST['answer'],$_SESSION['user_id'],$_GET['id']);
                        }
                        else{
                            echo "<li class='alert alert-danger'>Write Your Answer</li>";
                        }
                    }
                ?>
                <form action="" method="POST" class="form-group">     
                    <input type="text" class="form-control" name="answer" placeholder="You'r Comment"> 
                    <input type="submit" class="btn btn-success mt-3" name="post" value="Post">
                </form>
                <hr style="height:2px;color:gray;background-color:gray">
                <!-- <pre>
                    <?php
                      print_r ($questions->getAnswer($_GET['id']))
                    ?>
                </pre> -->
            </div>
                <?php 
                    $answers = $questions->getAnswer($_GET['id'])
                 ?>
                <?php foreach($answers as $answer): ?>
            <div class="col-12">
                    
                <div class=p-2>
                    <h5><?= $answer['username']?></h5>
                    <p><?= $answer['ansdetails'] ?></p>
                </div>
                <hr style="height:2px;color:gray;background-color:gray">
            </div>
                <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
<?php include 'doc_end.php'; ?>