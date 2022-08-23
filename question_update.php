<?php session_start() ?>
<?php include 'doc_start.php'; ?>
<?php include 'header.php'; ?>
<?php include 'core/User.php';

    $user = new User();
    
    if(!isset($_SESSION['user_id'])){
        echo "<h3 class='alert alert-danger'>INVALID REQUEST</h3>";
        header ("location: login.php");     
    }
    
?>
<?php 
    include 'core/Questions.php';

    $questions = new Questions();
?>
 

<div class="dashbord text-center ">
    <div class="container-fluid pt-5 bg-dark text-light pb-5">
        <h1>Update Question</h1>
    
        <div class="container text-left">
           <div class="row">
                <div class="col-8 border-right border-left pt-4 p-0">
                        <?php 
                            if (isset ($_GET['qid'])){
                                  $questionData = $questions->singleQusestion($_GET['qid']);
                                  if($questionData['user_id'] != $_SESSION['user_id']){
                                    echo "<script>
                                        alert('Unauthorized');
                                    </script>";
                                    die();
                                  }
                            }
                            if(isset($_POST['submit'])){
                                $questions->updateQues($_POST['title'],$_POST['details'],$_GET['qid'],$questionData['user_id']);
                               
                               
                            }
                            
                        ?>
                    <form action="" method="POST" class="form-group">
                            
                            <label>Your question ?</label>
                            <input type="text" class="form-control" name="title" placeholder="Question?" value="<?= $questionData['title']?>">
                            <label>Describe your problem</label>
                            <textarea id="mytextarea" name="details" ><?= $questionData['details']?></textarea>
                            

                            <input type="submit" class="btn btn-success mt-3" name="submit" value="Update">
                    </form>
                </div>

                <div class="col-4">
                    <div class="profile text-center">
                        <h3>Profile</h3> 
                    </div>
                    <hr style="height:1px;color:gray;background-color:gray">
                    <div class="profile">
                            <div class="profile1 text-center">
                                <img src="Assets/image/profile.jpg" class="img-fluid profile-pic" alt=""> 
                                <h5>
                                    <?= $_SESSION['username']?>
                                </h5>
                            </div>
                    
                </div>
           </div>

        </div>
        <hr style="height:1px;color:gray;background-color:gray">
    </div>
</div>

<!-- tinyMCE -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
                <script>
                tinymce.init({
                    selector: '#mytextarea'
                });
                </script>

<?php include 'footer.php'; ?> 
<?php include 'doc_end.php'; ?>