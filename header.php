
     <header class="header">
     <nav class="navbar navbar-expand-lg">

       <div class="logo">
         <a class="navbar-brand" href="home.php">
             <img src="Assets/image/logo.png" class="img-fluid" style="max-width:80px ;" alt="">
         </a>
       </div>

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-label="Toggle navigation" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <i class="fa-solid fa-bars"></i>
         </button>

         <div class="collapse navbar-collapse nav" id="navbarNav">
           <ul class="navbar-nav">
             
             <?php if (!isset($_SESSION['user_id'])): ?> 
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
             <li class="nav-item">
               <a class="nav-link" href="register.php">Register</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="login.php">Login</a>
             </li>

            <?php else: ?>
              <li class="nav-item">
               <a class="nav-link" href="home.php">Home </a>
             </li>
              <li class="nav-item">
               <a class="nav-link" href="courses.php">Courses</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="about.php">About</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="dashbord.php">Profile</a>
             </li> 
           </ul>
         </div>
        
         <div class="social">
             <ul>
               
                 <li>
                     <a href="#">
                         <i class="fa-brands fa-instagram"></i>
                     </a>
                 </li>
                 <li>
                     <a href="#">
                         <i class="fa-brands fa-facebook"></i>
                     </a>
                 </li>
                 <li>
                     <a href="#">
                         <i class="fa-brands fa-twitter"></i>
                     </a>
                 </li>
                 <li>
                     <a href="#">
                         <i class="fa-brands fa-whatsapp"></i>
                     </a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="login.php">Log out</a>
                  </li>
                <?php endif; ?>
             </ul>
         </div>

       </nav>

 </header>


