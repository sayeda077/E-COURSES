<?php
include('./header4.php');
?>

<!--start video bg-->
<div class="container-fluid remove-vid-marg">
  <div class="vid-parent">
    <video playsinline autoplay muted loop>
      <source src="video/home.mp4">
    </video>
    <div class="vid-overlay"></div>
  </div>
<div class="vid-content">
  <h1 class="my-content">Welcome to our website</h1>
  <small class="my-content">Enhance your knowledge</small><br>
  <a href="menu.php" class="btn btn-primary" >ADMIN MENU</a>
  
</div>
</div>
<!--end video bg-->

<!--start text banner-->
<div class="container-fluid bg-primary txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class="fas fa-book-open mr-3"></i>50+ Online Courses</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-users mr-3"></i>Expert Instructor</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-chalkboard mr-3"></i>Learn Basic</h5>
    </div>

  </div>

</div>
<!--end text banner-->

<!--start popular course-->
<!--start course banner-->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/books.jpg" alt="courses" style="height: 500px; width:100%; object-fit:cover; box-shadow:10px;">

    </div>
</div>

<!--end course banner-->

<!--end popular course-->


<!--start social-->
<div class="container-fluid bg-primary">

  <div class="row text-white text-center p-1">
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-facebook"></i> Facebook</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> Whatsapp</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
    </div>

  </div>

</div>
<!--end social-->

<!--start about-->
<div class="container-fluid p-4" style="background-color: #E9ECEF;">
<div class="container" style="background-color: #E9ECEF;">
    <div class="row text-center">
      <div class="col-sm">
        <h5>About Us</h5>
        <p>Learn new course is a platform where you can learn some new courses and enhance your knowlwdge</p>
      </div>
      <div class="col-sm">
        <h5>Category</h5>
        <a class="test-dark" href="#">Data Analysis</a><br>
        <a class="test-dark" href="#">Deep Learning</a><br>
        <a class="test-dark" href="#">Web Designing</a><br>
        <a class="test-dark" href="#">Web Development</a><br>
        <a class="test-dark" href="#">Android App</a><br>
      </div>
      <div class="col-sm">
        <h5>Contact Us</h5>
        <p>Shahjahanpur,
        Dhaka <br>
        Phone: +88017198768901 <br>
        learn@gmail.com <br>
        www.learn.com</p>
      </div>

    </div>
 </div>
</div>

<!--end about-->

<!-- start including footer-->
<?php
include('./footer.php');
?>
<!--end including footer-->