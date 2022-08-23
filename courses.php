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

<div class="container-fluiid text-light p-5 bg-dark">
        <div class="courses text-center">
            <h2 class="p-4">Courses</h2>
                <div class="owl-carousel owl-theme ">
                    <div class="item m-2 ">
                        <img src="Assets/image/angular.jpg" alt="">
                        <h4>complete Angular Course</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, </p>
                        <span>$12.00</span>
                    </div>
                    <div class="item m-2">
                        <img src="Assets/image/graphic-designer-job-description.jpg" class="img-fluid" alt="">
                        <h4>Graphic Design Course</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, </p>
                        <span>$12.00</span>
                    </div>
                    
                    <div class="item m-2">
                        <img src="Assets/image/Java-Developer-Skills.jpg" class="img-fluid" alt="">
                        <h4>complete Java Course</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis,</p>
                        <span>$12.00</span>
                    </div>
                    
                    <div class="item m-2">
                        <img src="Assets/image/javascript.jpg" class="img-fluid" alt="">
                        <h4>complete Javascript Course</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, </p>
                        <span>$12.00</span>
                    </div>
                   
                    <div class="item m-2">
                        <img src="Assets/image/php-framework.jpg" class="img-fluid" alt="">
                        <h4>PHP laravel Course</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, </p>
                        <span>$12.00</span>
                    </div>
                   
                    <div class="item m-2">
                        <img src="Assets/image/SEO.png" class="img-fluid" alt="">
                        <h4>complete SEO Course</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, </p>
                        <span>$12.00</span>
                    </div>
                    
                    <div class="item m-2">
                        <img src="Assets/image/python2.jpg" class="img-fluid" alt="">    
                        <h4>Python for beginner</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, </p>
                        <span>$12.00</span>
                    </div>
                    
                    <div class="item m-2">
                        <img src="Assets/image/SEO.jpg" class="img-fluid" alt="">
                        <h4>complete SEO Course</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, </p>
                        <span>$12.00</span>
                    </div>
                    
                    <div class="item m-2">
                        <img src="Assets/image/react.png" class="img-fluid" alt="">
                        <h4>complete React Course</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, </p>
                        <span>$12.00</span>
                    </div>
                    
                </div>
            
            <hr>
            <div class="container text-light">
                <h2>Top Catagories</h2>
                <div class="catagories text-dark">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top img-fluid" src="Assets/image/web-design.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Web Design</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">See Details</a>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top img-fluid" src="Assets/image/web-development.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Web Deverlopment</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">See Details</a>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top img-fluid" src="Assets/image/graphic design.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Graphic Design</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">See Details</a>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top img-fluid" src="Assets/image/digital marketing.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Digital Marketing</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">See Details</a>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top img-fluid" src="Assets/image/Iinformation-technology.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">It and Softower</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">See Details</a>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top img-fluid" src="Assets/image/business.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Business</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">See Details</a>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php include 'footer.php'; ?>
<?php include 'doc_end.php'; ?>

<script type="text/javascript">
                    $('.owl-carousel').owlCarousel({
                        loop:true,
                        margin:10,
                        nav:true,
                        autoplay:true,
                        autoplayTimeout:2000,
                        autoplayHoverPause:true,
                        responsive:{
                            0:{
                                items:1
                            },
                            600:{
                                items:2
                            },
                            1000:{
                                items:4
                            }
                        }
                    })
                </script>