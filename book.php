<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

    <!--swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- header section-->  
  <section class="header">
      <a href="home.php" class="logo">Travel.</a>
      <nav class="navbar">
        <a href="home.php" class="btn">HOME</a>
        <a href="about.php" class="btn">ABOUT</a>
        <a href="package.php" class="btn">PACKAGES</a>
        <a href="book.php" class="btn">Book</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
   </section>
  <!-- header section-->  



<!-- Book-->
  <div class="heading" style="background:url(images/book.jpg) no-repeat">
    <h1>Book</h1>
</div>

<!--Booking section-->

    <section class="booking">
      <h1 class="heading-title">Book your trip</h1>
      <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
        <div class="inputBox">
          <span>name:</span>
          <input type="text" placeholder="enter your name" name="name" required>
        </div>

        <div class="inputBox">
          <span>email:</span>
          <input type="text" placeholder="enter your email" name="email" required>
        </div>

        <div class="inputBox">
          <span>phone:</span>
          <input type="number" placeholder="enter your number" name="phone" required>
        </div>

        <div class="inputBox">
          <span>address:</span>
          <input type="text" placeholder="enter your address" name="address" required>
        </div>

        <div class="inputBox">
          <span>where to:</span>
          <input type="text" placeholder="enter your visit place" name="location" required>
        </div>

        <div class="inputBox">
          <span>How many:</span>
          <input type="number" placeholder="how many guests" name="guests" required>
        </div>

        <div class="inputBox">
          <span>arrivals:</span>
          <input type="date" name="arrivals" required>
        </div>

        <div class="inputBox">
          <span>leaving:</span>
          <input type="date" name="leaving" required>
        </div>

      </div>

      <input type="submit" value="submit" class="btn" name="send">


        </form>
    </section>



<!--Booking section-->





  <!-- Footer section -->
  <section class="footer">

  <div class="box-container">
    <div class="box">
      <h3> Quick links </h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>About us</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
    </div>

    <div class="box">
      <h3> Extra links </h3>
        <a href="#"><i class="fas fa-angle-right"></i>Ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>About us</a>
        <a href="#"><i class="fas fa-angle-right"></i>Privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
    </div>

    <div class="box">
      <h3> Contact info </h3>
        <a href="#"><i class="fas fa-angle-phone"></i>+123 236 764 332</a>
        <a href="#"><i class="fas fa-angle-phone"></i>+123 236 764 332</a>
        <a href="#"><i class="fas fa-angle-phone"></i>+123 236 764 332</a>
        <a href="#"><i class="fas fa-angle-email"></i>siya@gmail.com</a>
        <a href="#"><i class="fas fa-angle-location"></i> WCE SANGLI </a>

    </div>

    <div class="box">
      <h3>Follow us</h3>
      <a href="#"><i class="fab fa-facebook-f"></i>facebook </a>
      <a href="#"><i class="fab fa-instagram"></i>Instagram </a>
      <a href="#"><i class="fab fa-twitter"></i>Twitter </a>
      <a href="#"><i class="fab fa-linkedin"></i>Linkedin </a>
    </div>

  </div>

  <div class="credit">Created by <span>Ms.Siya Pondkule</span>Web Developer</div>

  </section>


  <!-- footer section end-->









<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="script.js"></script>
</body>
</html>