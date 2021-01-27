<!--start footer-->
<footer class="container-fluid bg-danger text-center p-2">
  <small class="text-white">Copyright &copy; 2020 <a href="adminlog1.php" class="text-white" >Admin Login</a></small>
</footer>

<!--end footer-->

<!--start student reg-->

<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

  <!-- start Registration form-->
  <form action="reg2.php" method="post">
  <div class="form-group">
  <i class="far fa-user"></i><label for="stuname" class="font-weight-bold">Name</label>
    <input type="text" class="form-control" name="stuname" id="stuname" placeholder="Enter your name">
  </div>
  <div class="form-group">
  <i class="far fa-envelope"></i><label for="stuemail" class="font-weight-bold">Email</label>
    <input type="email" class="form-control" name="stuemail" id="stuemail" placeholder="Enter your email">
  </div>
  <div class="form-group">
  <i class="fas fa-phone-square-alt"></i><label for="phone" class="font-weight-bold">Phone Number</label>
    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your phone number">
  </div>
  <div class="form-group">
  <i class="fas fa-key"></i><label for="password" class="font-weight-bold">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
  </div>
  <div class="form-group">
  <i class="fas fa-user-friends"></i><label for="gender" class="font-weight-bold">Gender</label> <br>
    <input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="female"> Female<br>
  </div>
 

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">signup</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- end Registration form-->
<!--end stu reg-->

<!--start stu login-->

<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

  <!-- start login form-->
  <form action="validate.php" method="post">
  
  <div class="form-group">
  <i class="far fa-envelope"></i><label for="stuLogemail" class="font-weight-bold">Email</label>
    <input type="email" class="form-control" name="stuLogemail" id="stuLogemail" placeholder="Enter your email">
  </div>
  
  <div class="form-group">
  <i class="fas fa-key"></i><label for="stuLogpassword" class="font-weight-bold">Password</label>
    <input type="password" class="form-control" name="stuLogpassword" id="stuLogpassword" placeholder="Enter your password">
  </div>
  
 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="stuLoginBtn" >Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end login form-->
<!--end stu login-->

<!--start admin login-->

<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

  <!-- start login form-->
  <form id="adminLoginForm">
  
  <div class="form-group">
  <i class="far fa-envelope"></i><label for="adminLogemail" class="font-weight-bold">Email</label>
    <input type="email" class="form-control" name="adminLogemail" id="adminLogemail" placeholder="Enter your email">
  </div>
  
  <div class="form-group">
  <i class="fas fa-key"></i><label for="adminLogpassword" class="font-weight-bold">Password</label>
    <input type="password" class="form-control" name="adminLogpassword" id="adminLogpassword" placeholder="Enter your password">
  </div>
  
 
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="adminLoginBtn" >Admin Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- end login form-->
<!--end admin login-->





  <script src="js/popper.min.js"></script>  
  <script src="js/bootstarp.min.js"></script>
  <script src="js/all.min.js"></script>
</body>
</html>