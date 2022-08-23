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

<div class="container-fluid">
      <div class="p-5 position-relative">
        <div class="home-img-1 d-flex justify-content-center ">
            <img src="Assets/image/image-1.png" class="img-fluid mt-5" style="width:70%;" alt="">
        </div>
        <div  class="home-text-1">
            <h1 >KIDS <br>SPORT</h1>
            <p>BACK TO SCHOOL</p>
        </div>
        <img src="Assets/image/Rectangle.png" class="img-fluid rectangle" alt="">
        <img src="Assets/image/tryangle.png" class="tryangle img-fluid" alt="">
        <img src="Assets/image/circle.png" class="circle img-fluid" alt="">
        <img src="Assets/image/Rectangle.png" class="img-fluid rectangle-2" alt="">
      </div>
       
  
    
    <div>
        <div class="search-img d-flex justify-content-center mt-5">
            <img src="Assets/image/logo.png" style="width:250px;" class="img-fluid" alt="">
        </div>
        <div class="d-flex justify-content-center p-5">
            <div class="search-text home-text-2">
                <h1 class="">
                    BACK TO SCHOOL
                </h1>
                <p>
                Lorem ipsum dolor sit amet, consectetur adip-
                isicing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua.
                </p>
                <h3 class="mt-5">Search any book you want</h3>
                <input placeholder="Search Any Book" type="text" class="form-control border border-right-0  d-inline position-relative " style="width:80%;" id="book"> 
                <button onclick="getbook()" id="search-book" class="btn position-absolute border border-left-0 " type="button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>
        
    </div>

    <div class="books p-5">
        <script type="text/javascript">
            let getbook = () => {
                    let search =  document.getElementById('book');

                    let searchText = search.value;

                    search.value="";
                    
                    if (searchText==''){
                        let error = document.getElementById('error');
                        error.innerHTML="Please Type Book Name";
                    }
                    let url = `https://www.googleapis.com/books/v1/volumes?q=${searchText}`;
                    fetch(url)
                    .then(res => res.json())
                    .then(data => bookData(data.items))
                }

                let bookData =(items) =>{
                    let container = document.querySelector('.books');
                    container.innerHTML="";
                    
                   console.log(items);

                items.forEach (item => {
                    let description = item.volumeInfo.description;
                    let div = document.createElement('div');
                    div.innerHTML=`
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="${item.volumeInfo.imageLinks.smallThumbnail}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Book Name:${item.volumeInfo.title}</h4>
                            <h5 class="author mt-5">
                                 Author: ${item.volumeInfo.authors}
                            </h5>
                            <h5 class="mt-3">
                                Publisher: ${item.volumeInfo.publisher}
                            </h5>
                            <p class="mt-5">
                                ${description.slice(0,150)}
                            </p>
                            <p>Page: ${item.volumeInfo.pageCount}</p>
                            
                        </div>
                    </div>
                          `;

                container.appendChild(div)

                })

                }
        </script>
    </div>
                <hr>
    <div class="section-3">
        <div class="row">
           <div class="col-6">
                <div class="home-shape-2"> 
                    <img src="Assets/image/shape-2.png" class="img-fluid" style="width:100%" alt="">
                    <div class="home-img-2">
                        <img src="Assets/image/image-2.png" class="img-fluid" alt="">
                    </div>
                </div>
           </div>
           <div class="col-6 home-text-3">
               <div style="height:300px; width:60%;">
                    <h2>
                        Ready?
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.
                    </p>
               </div>
           </div>
        </div>
    </div>

    <div class="section-4">
        <div class="row">
            <div class="col-12">
                <div class="home-img-4">
                    <img src="Assets/image/image-3.png" class="img-fluid" alt="">
                        <div class="home-text-4">
                            <h2>
                                We who are?
                            </h2>
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.
                            </p>
                            <button class="btn btn-success" type="button">
                                Read More
                            </button>
                        </div>
                </div>
            </div>
            
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>
<?php include 'doc_end.php'; ?>