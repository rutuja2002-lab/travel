<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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
    <div id="menu-btn"class="fas fa-bars"></div>
</section>

<div class="heading" style="background:url(book.jpg) no-repeat">
<h1>Book now</h1>
</div>



<section class="booking">
  <h1 class="heading-title">Book your Trip</h1>
  <form action="book_form.php" method="post" class="book-form">
    <div class="flex">
      <div class="inputBox">
        <span>Name :</span>
        <input type="text" placeholder="  Enter your name" name="name">
      </div>

      <div class="inputBox">
        <span>Email :</span>
        <input type="email" placeholder="  Enter your email" name="email">
      </div>

      <div class="inputBox">
        <span>Phone :</span>
        <input type="number" placeholder="  Enter your number" name="phone">
      </div>
 
    
      <div class="inputBox">
        <span>Address :</span>
        <input type="text" placeholder="  Enter your address" name="address">
      </div>
    
    
      <div class="inputBox">
        <span>Where to :</span>
        <input type="text" placeholder=" place you want to visit" name="location">
      </div>
 
    
      <div class="inputBox">
        <span>how many :</span>
        <input type="number" placeholder=" Number of guests" name="guests">
      </div>
    

      <div class="inputBox">
        <span>arrivals :</span>
        <input type="date" name="arrivals">
      </div>
 
    
      <div class="inputBox">
        <span>leaving :</span>
        <input type="date" name="leaving">

      </div>
    </div>
    
    <input type="submit" value="submit" class="btn" name="send" >



  </form>



</section>









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
        <a href="#" >
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
