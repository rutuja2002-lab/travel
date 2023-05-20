<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" integrity="sha512-+EY0fToRDbzM7LUvphiWAG9HizDyvHzgI409LoekdEyEzr79hI1Qy1hkou2nM4ylCSuyaP8m+Dm0ji/3yJROSA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="header">
    <a href="home.php" class="logo" style="font-size: 2.5rem; color: black;">Travel.</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a> 
        <a href="book.php">Book</a>
        
    </nav>
    <div class="icons">
      <i class="fas fas-search" id="search-btn"></i>
      <i class="fas fas-user" id="login-btn"></i>
    </div>
    <div id="menu-btn"class="fas fa-bars"></div>
</section>

<!-- <header section ends> -->

<!-- home section starts -->
<section class="home">

   <div class="swiper home-slider">

     <div class="swiper-wrapper">

      <div class="swiper-slide slide" style="background:url(h1.jpg) no-repeat">

        <div class="content" >
          <span>Explore, Discover, Travel</span>
          <h3>Travel around the World!</h3>
          <a href="package.php" class="btn">Discover more</a>
        </div>

      </div>

      <div class="swiper-slide slide" style="background:url(couple.jpg) no-repeat"> 

        <div class="content">
          <span>Explore, Discover, Travel</span>
          <h3>Discover New places</h3>
          <a href="package.php" class="btn">Discover more</a>
        </div>

      </div>

      <div class="swiper-slide slide" style="background:url(culture.jpg) no-repeat">

        <div class="content">
          <span>Explore, Discover, Travel</span>
          <h3>Experience culture</h3>
          <a href="package.php" class="btn">Discover more</a>
        </div>

      </div>
      <div class="swiper-slide slide" style="background:url(hom.jpg) no-repeat">

        <div class="content">
          <span>Explore, Discover, Travel</span>
          <h3>Make your worthwhile</h3>
          <a href="package.php" class="btn">Discover more</a>
        </div>

      </div>
      
    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    
   </div>
</section>

  <!-- service section -->

  <section class="services">
    <h1 class="heading-title" >Our Services</h1><br><br>
    <div class="box-container">
      <div class="box">
        <img src="ad.png" class="adventure">
        <h3>Adventure</h3><br>
      </div>

      <div class="box">
        <img src="guide.png" class="adventure" >
        <h3>tour guide</h3><br>
      </div>

      <div class="box">
        <img src="trek.png"  class="adventure">
        <h3>trekking</h3><br>
      </div>
      <div class="box">
        <img src="fire.png"  class="adventure">
        <h3>camp fire</h3><br>
      </div>
      <div class="box">
        <img src="road.png"  class="adventure">
        <h3>off road</h3><br>
      </div>

      <div class="box">
        <img src="camp.png"  class="camp">
        <h3>camping</h3><br>
      </div>

    </div>
      
   
</section>
<!-- service section ends -->
<!-- about section starts -->
<section class="home-about">
  <div class="image">
    <img src="travel.jpg" alt="">
  </div>
  <div class="content">
    <h3>About us</h3>
    <p>Traveling is important in life because it will open you up to a new way of living and being. 
      You will experience new connections with people and places and immerse in different cultures, 
      which can help widen your perspective. So much learning and personal growth can come from traveling.</p>
      <a href="about.php" class="btn">Read more</a>
  </div>
</section>







<!-- about section ends -->
<!--  package section starts -->
<section class="home-package">
   <h1 class="heading-title">Our packages</h1>
    <div class="box-container">
      <div class="box">
      <div class="image">
        <img src="place1.jpg ">

      </div>
      <div class="content">
        <h3>Adventure & tour</h3>
        <p>Adventure travel is a type of niche tourism,
           involving exploration or travel with a certain degree of risk </p>
           <a href="book.php" class="btn">Book now</a>
      </div>
    </div>


      <div class="box">
      <div class="image">
        <img src="place2.jpg ">

      </div>
      <div class="content">
        <h3>Adventure & tour</h3>
        <p>Adventure travel is a type of niche tourism,
           involving exploration or travel with a certain degree of risk </p>
           <a href="book.php" class="btn">Book now</a>
      </div>
    </div>

      <div class="box">
      <div class="image">
        <img src="place3.jpg ">

      </div>
      <div class="content">
        <h3>Adventure & tour</h3>
        <p>Adventure travel is a type of niche tourism,
           involving exploration or travel with a certain degree of risk </p>
           <a href="book.php" class="btn">Book now</a>
      </div>
    </div>

  </div>
  <div class="load-more" ><span class="btn"><a href="package.php">Load more</a></span></div>

</section>

<!--  package section ends -->
<!-- offer section starts-->
<section class="home-offer">
  <div class="content">
    <h3>Upto 50% off</h3>
    <p>Travelling is an amazing way to learn a lot of things in life. 
      A lot of people around the world travel every year to many places. 
      Moreover, it is important to travel to humans. Some travel to learn more while some travel to take a break from their life. 
      No matter the reason, travelling opens a big door for us to explore the world beyond our imagination and indulge in many things. </p>
      <a href="book.php" class="btn">Book now</a>
  </div>
</section>



<!-- offer section ends-->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>Package</a> 
        <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>Privacy policy</a> 
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>
        <div class="box">
          <h3>contact info</h3>
          <a href="#"><i class="fas fa-phone"></i>+123-456-8789</a>
          <a href="#"><i class="fas fa-phone"></i>+123-678-4568</a>
          <a href="#"><i class="fas fa-envelope"></i>hemantshinde29@gmail.com</a> 
          <a href="#"><i class="fas fa-map"></i>pune,india-400104</a>
        </div>
        <div class="box">
        <h3>follow us</h3>
        <a href="#">
            <i class="fab fa-facebook-f"></i>  Facebook
                  </a>
                  <a href="#" >
                    <i class="fab fa-twitter"></i> Twitter
                  </a>
                  <a href="#" >
                    <i class="fab fa-instagram"></i>Instagram
                  </a>
                  <a href="#">
                    <i class="fab fa-linkdln"></i> Linkdln
                  </a>
                </div>
            </div>
            <div class="credit">Created by <span> Mr. Web Designer</span>| All rights reserved!|</div>
</section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>