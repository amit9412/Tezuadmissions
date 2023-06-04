<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $departmentName=$_POST['deptname'];
     $departmentID=$_POST['deptid'];
     $departmentPassword=md5($_POST['deptpass']);
     $departmentUserID=$_POST['deptuname'];
    $query=mysqli_query($con, "insert into  tbldepartment(DepartmentID,name,UserName,Password) value('$departmentID','$departmentName','$departmentUserID','$departmentPassword')");
    if ($query) {
    echo '<script>alert("Department has been added.")</script>';
    echo "<script>window.location.href ='add-department.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }

  
}
  ?>
  <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

  <title>Tezpur University Online Admission Portal| Add Department</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

     <style>
    .errorWrap {
    padding: 10px;
    margin: 20px 0 0px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>


</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
<?php include('includes/header.php');?>
<?php include('includes/leftbar.php');?>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">
           Add Department
          </h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                </li>
            
                </li>
                <li class="breadcrumb-item active">Department</li>
              </ol>
            </div>
          </div>
        </div>
   
      </div>
      <div class="content-body">
        <!-- Input Mask start -->
   
        <!-- Formatter start -->

<form name="department" method="post" >        
        <section class="formatter" id="formatter">
          <div class="row">
            <div class="col-10">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Add The Department</h4>
 
                
                </div>
                <div class="card-content">
                  <div class="card-body">
                    

  <div class="row">
                      <div class="col-xl-6 col-lg-12">
                        <fieldset>
                          <h5>Department Name
                          </h5>
                          <div class="form-group">
  <input class="form-control white_bg" id="deptname" placeholder="Department Name" type="text" name="deptname" required>
                          </div>
                        </fieldset>
                        <h5>Department ID
                          </h5>
                <fieldset class="form-group position-relative">
                        <input type="text" name="deptid" id="deptid" class="form-control input-lg" placeholder="Department ID" required="true">
                        <div class="form-control-position">
                        </div>
                        <div class="help-block font-small-3"></div>
                      </fieldset>
                      <h5>Department User ID
                          </h5>
                <fieldset class="form-group position-relative has-icon-left">
                        <input type="text" name="deptuname" id="deptid" class="form-control input-lg" placeholder="Department User ID" required="true">
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                        <div class="help-block font-small-3"></div>
                      </fieldset>
                      <h5>Department Password
                          </h5>
            <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" name="deptpass" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" required>
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                        <div class="help-block font-small-3"></div>
                      </fieldset>
                       
                      </div>
                    </div>
<div class="row">
<div class="col-xl-6 col-lg-12">
<button type="submit" name="submit" class="btn btn-info btn-min-width mr-1 mb-1">ADD</button>
</div>
</div>



 </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Formatter end -->
      </form>  
     

      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include('includes/footer.php');?>
  <!-- BEGIN VENDOR JS-->
 

</body>
</html>
<?php }  ?>