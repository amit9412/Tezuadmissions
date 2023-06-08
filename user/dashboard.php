<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['uid']) == 0) {
  header('location:logout.php');
} else {
?>
  <!DOCTYPE html>
  <html class="loading" lang="en" data-textdirection="ltr">

  <head>
    <title>Tezpur University Online Admission Portal | Dashboard</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

  </head>

  <body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <!-- fixed-top-->
    <?php include_once('includes/header.php'); ?>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <?php include_once('includes/leftbar.php'); ?>
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
        
          <?php
          $uid = $_SESSION['uid'];
          $ret = mysqli_query($con, "select FirstName from tbluser where ID='$uid'");
          $row = mysqli_fetch_array($ret);
          $name = $row['FirstName'];

          ?>
          <h3>
            <font color="red">Welcome Back :</font> <?php echo $name; ?>
          </h3>
          <hr />
          <div class="row">
            <div class="card col-xl-12 col-lg-12 col-12" style='height: 60vh; width: 78vw; overflow: auto'>
              <div class="card-body">
                <div>
                  <div class="row">
                    <div class="col-xl-9  col-lg-9 col-9">
                      Welcome to Tezpur University Admission Portal 2023
                    </div>
                    <div class="col-xl-3 col-lg-3 col-3">
                      <button type="button" class="btn btn-primary" onclick="applictionStatus()">Apply a New Appliaction</button>
                    </div>
                  </div>
                  <hr>
                  <div class='row pl-2 pb-1 '>
                    You are logged in!
                  </div>
                </div>
                <div>
                  <table class="table table-stripped">
                    <tr>
                      <th colspan="1">#</th>
                      <th colspan="2">Registration Number</th>
                      <th colspan="2">Application Number</th>
                      <th colspan="2">Program Applied</th>
                      <th colspan="1">Catagory</th>
                      <th colspan="1">Gender</th>
                      <th colspan="2">Action</th>
                    </tr>

                    <tr>
                      <td colspan="1">1</td>
                      <td colspan="2">464564654654</td>
                      <td colspan="2">1</td>
                      <td colspan="2">464564654654</td>
                      <td colspan="1">1</td>
                      <td colspan="1">464564654654</td>
                      <td colspan="2"><button type="button" class="btn btn-secondary" onclick="callmodal()">View</button></td>
                    </tr>
                  </table>
                  </div>
                </div>
              </div>
            </div>
            <?php
            $uid = $_SESSION['uid'];
            $rtp = mysqli_query($con, "SELECT AdminStatus from tbladmapplications where UserID='$uid'");
            $row = mysqli_fetch_array($rtp);
            $adsts = $row['AdminStatus'];
            if ($row > 0) {

            ?>

              <div class="row">
                <div class="col-xl-10 col-lg-6 col-12">
                  <div class="card pull-up">
                    <div class="card-content">
                      <a href="addmission-form.php">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="media-body text-left">



                              <?php if ($adsts == 1) { ?>
                                <h4 align="center">Your Application has been selected</h4>
                              <?php } else if ($adsts == 2) { ?>
                                <h4 align="center">Your Application has been rejected</h4>
                              <?php } else { ?>
                                <h4 align="center">Your Application has been pending with admin for review</h4>
                              <?php } ?>

                            </div>
                            <div>
                              <i class="icon-file success font-large-2 float-right"></i>
                            </div>
                          </div>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">

                            <?php if ($adsts == "") { ?>
                              <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>
                            <?php if ($adsts == "2") { ?>
                              <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>
                            <?php if ($adsts == "1") { ?>
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div> <?php } ?>

                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            <?php } else { ?>

              <div class="row">
                <div class="col-xl-10 col-lg-6 col-12">
                  <div class="card pull-up">
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex">
                          <div class="media-body text-left">
                            <h4 align="center">You have not applied for addmision. Please fill the admission form. <section>
                                <h3><b><a href="programme-type.php">Go to Admission Portal</a></b></h3>
                              </section>
                            </h4>
                          </div>
                          <div>
                            <i class="icon-file success font-large-2 float-right"></i>
                          </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                          <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>



            <?php
            if ($adsts == 1) :
              $ret = mysqli_query($con, "select ID from  tblfees where tblfees.UserID='$uid'");
              $num = mysqli_num_rows($ret);
              if ($num > 0) { ?>

                <div class="row">
                  <div class="col-xl-10 col-lg-6 col-12">
                    <div class="card pull-up">
                      <div class="card-content">
                        <a href="submit-fees.php">
                          <div class="card-body">
                            <div class="media d-flex">
                              <div class="media-body text-left">

                                <h4 align="center">Your Application has been selected.Fee is also submitted</h4>


                              </div>
                              <div>
                                <i class="icon-file success font-large-2 float-right"></i>
                              </div>
                            </div>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                              <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>

                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } else { ?>
                <div class="row">
                  <div class="col-xl-10 col-lg-6 col-12">
                    <div class="card pull-up">
                      <div class="card-content">
                        <a href="submit-fees.php">
                          <div class="card-body">
                            <div class="media d-flex">
                              <div class="media-body text-left">




                                <h4 align="center">Your Application has been selected and Please Submit your fee.</h4>


                              </div>
                              <div>
                                <i class="icon-file success font-large-2 float-right"></i>
                              </div>
                            </div>
                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">


                              <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>


                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>



            <?php }
            endif;
            ?>


          </div>
        </div>
      </div>
    </div>
    <?php include('includes/footer.php'); ?>
    <!-- BEGIN VENDOR JS-->


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script type="text/javascript">
    function callmodal() {
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Your Application has been selected.Fee is also submitted',
  footer: '<a href="">Why do I have this issue?</a>'
})
    };
  </script>


  </body>

  </html>
<?php } ?>