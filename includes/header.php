<!-- Top Menu 1 -->
<section class="w3l-top-menu-1">
  <div class="top-hd">
    <div class="container">
  <header class="row top-menu-top">
    <div class="accounts col-md-9 col-6">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
        <li class="top_li"><span class="fa fa-phone"></span>+91-<?php  echo $row['MobileNumber'];?></li>
        <li class="top_li1"><span class="fa fa-envelope-o"></span> <?php  echo $row['Email'];?> </li>
    </div><?php } ?>
    <div class="social-top col-md-3 col-6">
      <a href="contact.php" class="btn btn-secondary btn-theme4">Contact Now</a>
    </div>
  </header>
</div>
</div>
</section>
<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="./assets/images/kmclu.png" alt="" height="45px" width="45px" class="logo"> Tezpur University
      </a>
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="courses.php">Courses</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notice-details.php">Public Notice</a>
          </li>
          
          <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Login
  </a>
  <ul class="dropdown-menu" aria-labelledby="loginDropdown">
    <li>
      <a class="dropdown-item" href="admin/login.php">Admin</a>
    </li>
    <li>
      <a class="dropdown-item" href="department/login.php">Department Login</a>
    </li>
    <li>
      <a class="dropdown-item" href="user/login.php">Users</a>
    </li>
  </ul>
</li>


        </ul>
       
      </div>
    </div>
  </nav>
</section>

<script>
  // Add the following code after including the necessary Bootstrap JS file
  
  // Initialize the dropdown menu
  var dropdownMenu = document.querySelector('.dropdown');
  dropdownMenu.addEventListener('mouseenter', function() {
    this.classList.add('show');
  });
  dropdownMenu.addEventListener('mouseleave', function() {
    this.classList.remove('show');
  });
</script>