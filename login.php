<?php include 'doc_start.php'; ?>
<?php include 'header.php'; ?>
<?php include 'core/User.php';

    $user = new User();
?>

<div class="container p-5 d-flex justify-content-center">
    <div class="login ">
    <h1 class="text-center">
        Login
    </h1>

    <?php
        if(isset($_POST['submit'])){
            if(!empty($_POST['username']) && !empty($_POST['password'])){
                $response = $user->loginCheck($_POST['username'],$_POST['password']);

                if (count($response) == 1){
                   session_start();
                   $_SESSION['user_id'] = $response[0] ['id'];
                   $_SESSION['username'] = $response[0] ['username'];

                   header('location:dashbord.php');
                }
                else{
                    echo "<li class='alert alert-danger'>Wrong Email or password</li>";
                }
            }else{
                echo "<li class='alert alert-danger'>All Field Required</li>";
            }
        }
    
    ?>

    <form action="" method="POST" class="form-group" style="width:100%" >
            
            <label>User Namme </label>
            <input type="text" class="form-control" name="username" placeholder="User Name" style="width:100%">
            <label>Password </label>
            <input type="password" class="form-control" name="password" placeholder="Password" style="width:100%">

            <input type="submit" class="btn btn-success mt-3" name="submit" value="Log in">
     </form>
    </div>
</div>

<?php include 'footer.php'; ?>
<?php include 'doc_end.php'; ?>