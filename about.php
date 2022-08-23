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
    <div class="container-fluid text-center p-5 bg-dark text-light">
        <h2>About Us</h2>
        <hr>

        <div class="row">
            
            <div class="col-6 border-right">
                <div>
                    <div>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis, necessitatibus? Modi pariatur sint molestias reprehenderit. Dolor impedit, error quis sapiente labore ipsum, voluptatem eaque ex, accusamus necessitatibus temporibus obcaecati veniam facilis animi molestiae omnis dolorum! Assumenda quis corrupti dolorem reiciendis eveniet nulla eaque alias magnam maxime ea. Nisi, pariatur possimus ea exercitationem inventore iste nobis eum laborum nam! Nemo eaque dolor id, impedit, aut, minima officia ipsum tempore voluptate molestiae quas accusantium dolore dicta. Eos, accusamus libero. Doloremque, perferendis culpa! Est fuga quas necessitatibus expedita aliquam, sequi fugit. Temporibus molestiae magni impedit dolor nostrum dolorem. Maiores aperiam nisi voluptate est!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="social d-flex justify-content-center ">
                    <div>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>
<?php include 'doc_end.php'; ?>

