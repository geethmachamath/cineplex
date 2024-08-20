

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cineplex</title>
    <link rel="stylesheet" href="style.css">
     <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
     <!-- Link Swiper's CSS  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />  
</head>
<body>
    <!-- Navbar  -->
    <header>
        <a href="#home" class="logo">
            <i class='bx bxs-movie'></i>CINEPLEX
        </a> 

        <div class="bx bx-menu" id="menu-icon"></div> 
        <!-- menu  -->
        <ul class="navbar">
            <li><a href="#home" class="home-active">Home</a></li>
            <li><a href="#movies">Now Showing</a></li>
            <li><a href="#coming">Coming Soon</a></li>
            <li><a href="#search">Search</a></li>
            <li><a href="#deals">Deals And Exclusive</a></li>
        </ul>
        
<div class="item"><i class="fas fa-sign-out-alt"></i><a href="../logout.php" class="logoutlink"><span><i class="bx bx-user" style="font-size: 27px;"></i></span></a></div>

    </header>

 

   
   
   <!-- Home  -->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
        <div class="swiper-slide container">
                <img src="./img/home3.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Spider-Man <br>No Way Home</h1>
                    <a href="../movies/SpiderMan.php" class="btn">Book Now</a>
                    <!--<a href="" class="play">
                        <i class='bx bx-play' ></i>
                    </a>-->
                </div>
            </div>
            <div class="swiper-slide container">
                <img src="./img/home1.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Guardians of the Galaxy <br>Volume 2</h1>
                    <a href="../movies/GuardiansoftheGalaxy.php" class="btn">Book Now</a>
                    <!--<a href="" class="play">
                        <i class='bx bx-play' ></i>
                    </a>-->
                </div>
            </div>
            <div class="swiper-slide container">
                <img src="./img/home2.png" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Thor: <br>Love and Thunder</h1>
                    <a href="../movies/Thor.php" class="btn">Book Now</a>
                   <!-- <a href="" class="play">
                        <i class='bx bx-play' ></i>
                    </a>-->
                </div>
            </div>
            
            <div class="swiper-slide container">
                <img src="./img/home4.png" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Avengers: <br>End Game</h1>
                    <a href="../movies/Avengers.php" class="btn">Book Now</a>
                   <!-- <a href="" class="play">
                        <i class='bx bx-play' ></i>
                    </a>-->
                </div>
            </div>
            
          </div>
          <div class="swiper-pagination"></div>
    </section>

    <!-- Movies  -->
    <div class="movies" id="movies">
        <h2 class="heading">Now Showing</h2>
        <!-- Movies container  -->
        <div class="movies-container">
            <!-- box-1  -->
            <div class="box">
                <div class="box-img">
                <a href="../movies/DrStrange.php"><img src="./img/m1.jpg" alt=""></a>
                </div>
                <h3>Dr.Strange</h3>
                <span>120 min | Action</span>
            </div>
            <!-- box-2  -->
            <div class="box">
                <div class="box-img">
                <a href="../movies/Pathan.php"><img src="./img/m2.jpg" alt=""></a>
                </div>
                <h3>Pathan</h3>
                <span>120 min | Action</span>
            </div>
            <!-- box-3  -->
            <div class="box">
                <div class="box-img">
                <a href="../movies/BatmanvsSuperman.php"> <img src="./img/m3.jpg" alt=""></a>
                </div>
                <h3>Batman vs Superman</h3>
                <span>120 min | Thriller</span>
            </div>
            <!-- box-4  -->
            <div class="box">
                <div class="box-img">
                <a href="../movies/JohnWick.php"> <img src="./img/m4.jpg" alt=""></a>
                </div>
                <h3>John Wick 2</h3>
                <span>120 min | Action</span>
            </div>
            <!-- box-5  -->
            <div class="box">
                <div class="box-img">
                <a href="../movies/Aquaman.php"> <img src="./img/m5.jpg" alt=""></a>
                </div>
                <h3>Aquaman</h3>
                <span>120 min | Adventure</span>
            </div>
            <!-- box-6  -->
            <div class="box">
                <div class="box-img">
                <a href="../movies/BlackPanther.php"> <img src="./img/m6.jpg" alt=""></a>
                </div>
                <h3>Black Panther</h3>
                <span>120 min | Thriller</span>
            </div>
            <!-- box-7  -->
            <div class="box">
                <div class="box-img">
                <a href="../movies/Uncharted.php"> <img src="./img/m7.jpg" alt=""></a>
                </div>
                <h3>Uncharted</h3>
                <span>120 min | Adventure</span>
            </div>
            <!-- box-8  -->
            <div class="box">
                <div class="box-img">
                <a href="../movies/Brahmastra.php"><img src="./img/m8.jpg" alt=""></a>
                </div>
                <h3>Brahmastra</h3>
                <span>120 min | Action</span>
            </div>
            <!-- box-9  -->
            <div class="box">
                <div class="box-img">
                <a href="../movies/MortalEngines.php"> <img src="./img/m9.jpg" alt=""></a>
                </div>
                <h3>Mortal-Engines</h3>
                <span>120 min | Action</span>
            </div>
            <!-- box-10  -->
            <div class="box">
                <div class="box-img">
                <a href="../movies/UnderWorldBloodWars.php">  <img src="./img/m10.jpg" alt=""></a>
                </div>
                <h3>UnderWorld Blood Wars</h3>
                <span>120 min | Action</span>
            </div>
        </div>
    </div>

    <!-- coming  -->
    <section class="coming" id="coming">
        <h2 class="heading">Coming Soon</h2>
        <!-- coming contanier  -->
        <div class="coming-container swiper">
            <div class="swiper-wrapper">
                <!-- box-1  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c1.jpg" alt="">
                    </div>
                    <h3>Ant-Man and the Wasp:Quantumania</h3>
                </div>
                <!-- box-2  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c2.jpg" alt="">
                    </div>
                    <h3>The Flash</h3>
                </div>
                <!-- box-3  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c3.jpg" alt="">
                    </div>
                    <h3>Guardians of the Galaxy Vol.3</h3>
                </div>
                <!-- box-4  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c4.jpg" alt="">
                    </div>
                    <h3>Shazam! Fury of the Gods</h3>
                </div>
                <!-- box-5  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c5.jpg" alt="">
                    </div>
                    <h3>Aquaman and the Lost Kingdom</h3>
                </div>
                <!-- box-6  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c6.jpg" alt="">
                    </div>
                    <h3>John Wick:Chapter 4</h3>
                </div>
                <!-- box-7 -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c7.jpg" alt="">
                    </div>
                    <h3>Transformer rise of the beasts</h3>
                </div>
                <!-- box-8  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c8.jpg" alt="">
                    </div>
                    <h3>Mission: Impossible 7</h3>
                </div>
                <!-- box-9  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c9.png" alt="">
                    </div>
                    <h3>Deadpool 3</h3>
                </div>
                <!-- box-10  -->
                <div class="swiper-slide box">
                    <div class="box-img">
                        <img src="./img/c10.jpg" alt="">
                    </div>
                    <h3>Dune: Part two</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Feedbacks  -->
    <section class="newsletter" id="search">
        <h2>Explore What Are You <br>Looking For...</h2>
        <form action="search_results.php" method="get">
            <input type="text" name="title" id="title" placeholder="Search Movie..." required>
            
            
            <input type="submit" value="Search" class="btn">
        </form>

       
   
    </section>

  <!-- coming  -->
  <section class="deals" id="deals">
    <h2 class="heading" >DEALS & EXCLUSIVE</h2>
    <!-- coming contanier  -->
    <div class="coming-container swiper">
        <div class="swiper-wrapper">
            <!-- box-1  -->
            <div class="swiper-slide box">
                <div class="box-img">
                <a href="deals.php"><img src="./img/1.png" alt=""></a>
                </div>
                <h3>Watch & Drop</h3>
            </div>
            <!-- box-2  -->
            <div class="swiper-slide box">
                <div class="box-img">
                <a href="deals.php"><img src="./img/11.jpg" alt=""></a>
                </div>
                <h3>New Theatre-New Movie</h3>
            </div>
            <!-- box-3  -->
            <div class="swiper-slide box">
                <div class="box-img">
                <a href="deals.php"><img src="./img/3.png" alt=""></a>
                </div>
                <h3>Exclusive Mini Poster</h3>
            </div>
            <!-- box-4  -->
            <div class="swiper-slide box">
                <div class="box-img">
                <a href="deals.php"><img src="./img/4.png" alt=""></a>
                </div>
                <h3>Concession Offer</h3>
            </div>
            <!-- box-5  -->
            <div class="swiper-slide box">
                <div class="box-img">
                <a href="deals.php"><img src="./img/10.jpg" alt=""></a>
                </div>
                <h3>Stubs Rewards</h3>
            </div>
            <!-- box-6  -->
            <div class="swiper-slide box">
                <div class="box-img">
                <a href="deals.php"><img src="./img/6.png" alt=""></a>
                </div>
                <h3>Private Theatre Rental</h3>
            </div>
            <!-- box-7 -->
            <div class="swiper-slide box">
                <div class="box-img">
                <a href="deals.php"><img src="./img/7.png" alt=""></a>
                </div>
                <h3>Discount Tuesday</h3>
            </div>
            <!-- box-8  -->
            <div class="swiper-slide box">
                <div class="box-img">
                <a href="deals.php"><img src="./img/8.png" alt=""></a>
                </div>
                <h3>Exclusive Pixar Combo Pack</h3>
            </div>
            
        </div>
    </div>
</section>

 <!-- Newsletter /\ -->
 <section class="newsletter" id="newsletter">
    <h2 >Write your Question or Feedback Here...</h2>
    <form method="POST"  >
        <input type="text" class="input" name="feedback" placeholder="I highly Recommend...." required>
        
        
        
        <input type="submit" value="SUBMIT HERE" class="btn" onclick="myFunction()">
    </form>
   
</section>


 <!-- footer  -->
 <section class="footer">
        <a href="index.php#home" class="logo">
            <i class="bx bxs-movie"></i>CINEPLEX
        </a>


        <ul class="navbar">
           
            <li><a href="footerdetails.php#about">ABOUT US</a></li>
            <li><a href="footerdetails.php#policy">PRIVACY POLICY</a></li>
            <li><a href="footerdetails.php#terms">TERMS & CONDITIONS</a></li>
            
        </ul>
        <div class="social">

            <a href="footerdetails.php"><i class='bx bxl-facebook'></i></a>
            <a href="footerdetails.php"><i class='bx bxl-twitter'></i></a>
            <a href="footerdetails.php"><i class='bx bxl-instagram'></i></a>
            
        </div>
        
       
    </section>

    <!-- Copyright  -->
    <div class="copyright">
        <p>&#169; CINEPLEX All Right Reserved</p>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
    <script>
function myFunction() {
  alert("Your Feedback sent successfully!");
}
</script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish database connection
    $conn = new mysqli("localhost", "arun", "mypasswd", "dreamworld");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch username and password from the form
    $feedback=$_POST["feedback"];
    

    // Insert data into the login table
    $sql = "INSERT INTO feedback (feedback) VALUES ('$feedback')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to login.php after successful insertion
        
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}

?>