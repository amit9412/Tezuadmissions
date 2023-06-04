<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['uid']==0)) {
  header('location:logout.php');
  } else{
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>

  <title>Tezpur University Online Admission Portal|| Addmission Form</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

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
          Select Your Programme
          </h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
                </li>
            
                </li>
                <li class="breadcrumb-item active">Select A Programme</li>
              </ol>
            </div>
          </div>
        </div>
   </div>
      <div class="content-body">
        <!-- Input Mask start -->
   
        <!-- Formatter start -->

<form name="course" method="post" >        
        <section class="formatter" id="formatter">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"> Select Your Progrmme</h4>
 
                
                </div>
                <div class="card-content">
                  <div class="card-body">
                    

  <div class="row">
                      <div class="col-xl-6 col-lg-12">
                      <fieldset> 
                     <h5>Programme Type</h5>
                     <div class="form-group">
                    <select class="form-control white_bg col-md-6" name="prg-type" id="prg-type">
                        <option value="">---Select---</option>
                        <option value="UG">UG</option>
                        <option value="PG">PG</option>
                        <option value="PHD">PhD</option>
                    </select>
                    </div>
                   
                     <div class="help-block font-small-3"></div>
                   </fieldset>
                   <fieldset>
                    <h5>Courses</h5>
                    <div class="form-group">
                    <select class="form-control white-bg col-md-6" name="prg-type" id="prg">
                        <option value="">---Select---</option>
                    </select>
                    </div>
                   
                     <div class="help-block font-small-3"></div>
                   </fieldset>
                   <fieldset>
                     <div class="row">
                      
                    <div class="col-xl-6 col-lg-12">
                       <button type="submit" name="login" class="btn btn-info btn-min-width mr-1 mb-1"><i class="ft-user"></i> Proceed</button>
                      </div>
                    </div>
                    </fieldset>
                    <div class="col-6 col-sm-6 col-md-6">
                       <p><a href="dashboard.php">Go Back</a></p>
                     </div>
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
   </div>
 </div>

 <script type="text/javascript">

// Assuming you have included the jQuery library

$('#prg-type').change(function (){
    let selectedItem = $('#prg-type').children("option:selected").val();
    $.ajax({
        type: "GET",
        url: "fetch_courses.php",
        data: {prg: selectedItem},
        dataType: "html",
        success: function (data){
            // echo(data);
            $('#prg').html(data);
        }
    });
})


 </script>

 
</body>
<?php } ?>