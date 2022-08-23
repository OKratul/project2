<?php include 'doc_start.php'; ?>
<?php include 'header.php'; ?>
<?php include 'core/User.php'; ?>
<?php
    $user = new User();

?>


<div class="form-container">
    <h1 style="color:#efcb10; font-size:45px">Registration</h1>
           <?php
                if(isset($_POST['submit'])){
                    if(!empty($_POST['username']) && ($_POST['email']) && ($_POST['password']) )     
                    {
                        $user->saveUser($_POST['username'],md5($_POST['password']),$_POST['email']);

                        echo "<li class='alert alert-success'>Registration Complete</li>";
                    }else{
                        echo "<li class='alert alert-danger'>All Fields  Are Required</li>";
                    }
                }
           ?> 
            <form action="" method="POST" class="form-group">
            
                <label>User Namme </label>
                <input type="text" class="form-control" name="username" placeholder="User Name">
                <label>E-mail</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
                <label>Password </label>
                <input type="password" class="form-control" name="password" placeholder="Password">

                <input type="submit" class="btn btn-success mt-3" name="submit" value="Submit">
            </form>
         </div>
         
         <?php include 'footer.php'; ?>
         <?php include 'doc_end.php'; ?>