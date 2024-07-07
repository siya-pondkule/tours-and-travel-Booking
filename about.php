<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

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



 <!-- <div class="heading" style="background:url(images/aboutus.jpg) no-repeat">
    <h1>About us</h1>
</div>-->

<div class="heading">
    <video autoplay muted loop class="background-video">
        <source src="videos/video7.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <h1>Packages</h1>
</div>

<!--About section -->

   <section class="about">
    <div class="image"></div>
         <img src="images/icon-9.jpeg" alt="">
    </div>
    <div class="content">
      <h3>Why choose us?</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda voluptatum libero vero numquam, 
        obcaecati inventore sequi voluptatibus alias rerum, 
        quaerat amet at labore commodi perferendis sit harum. Eos, enim et.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda voluptatum libero vero numquam, 
        obcaecati inventore sequi voluptatibus alias rerum, 
        quaerat amet at labore commodi perferendis sit harum. Eos, enim et.</p>

        <div class="icons-container">

          <div class="icons">
            <i class="fas fa-map"></i>
            <span>Top Destinations</span>
          </div>

          <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Affordable Prices</span>
          </div>

          <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 Services</span>
          </div>

        </div>
    </div>
   </section>







 <!--Review section --> 


 <section class="reviews">
    <div class="swiper-container">
      <div class="swiper-wrapper">
      <div class="swiper-slide slide">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, ad deleniti assumenda, debitis eveniet maiores natus laboriosam sit dolor fugit hic eos libero animi iusto molestiae porro ea rerum doloremque!</p>
          <h3>hdhd due</h3>
          <span>traveler</span>
          <img src="images/review1.jpeg" alt="">
        </div>

      <div class="swiper-slide slide">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, ad deleniti assumenda, debitis eveniet maiores natus laboriosam sit dolor fugit hic eos libero animi iusto molestiae porro ea rerum doloremque!</p>
          <h3>hdhd due</h3>
          <span>traveler</span>
          <img src="images/review2.jpeg" alt="">
        </div>

      <div class="swiper-slide slide">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, ad deleniti assumenda, debitis eveniet maiores natus laboriosam sit dolor fugit hic eos libero animi iusto molestiae porro ea rerum doloremque!</p>
          <h3>hdhd due</h3>
          <span>traveler</span>
          <img src="images/review3.jpeg" alt="">
        </div>

        <div class="swiper-slide slide">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, ad deleniti assumenda, debitis eveniet maiores natus laboriosam sit dolor fugit hic eos libero animi iusto molestiae porro ea rerum doloremque!</p>
          <h3>hdhd due</h3>
          <span>traveler</span>
          <img src="images/review4.jpeg" alt="">
        </div>
        <div class="swiper-slide slide">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, ad deleniti assumenda, debitis eveniet maiores natus laboriosam sit dolor fugit hic eos libero animi iusto molestiae porro ea rerum doloremque!</p>
          <h3>hdhd due</h3>
          <span>traveler</span>
          <img src="images/review5.jpeg" alt="">
        </div>

        </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Navigation -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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