
<head>
<link rel="stylesheet" type="text/css" href="../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/icheck/custom.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/login-register.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>

    <div class="app-content content">
        <div class="content-wrapper">
   <div class="content-header row">
   </div>
   <div class="content-body">
       <section class="flexbox-container">
           <div class="col-12 d-flex align-items-center justify-content-center">
               <div class="col-md-4 col-10 box-shadow-2 p-0">
           <div class="card border-grey border-lighten-3 m-0">
             <div class="card-header border-0 pb-0">
               <div class="card-title text-center">
           <h4 style="font-weight: bold"> Select Your Progrmme</h4>
               </div>
             </div>
             <div class="card-content">
               <div class="card-body">
                 
                 <form class="form-horizontal" action="addmission-form.php" name="login"  method="post"> 
                    <div style="text-align: center;font-size: 20px;"> 
                   <fieldset class="form-group position-relative row g-10">
                    <label for="prg-type">Programme Type</label>
                   <select class="col-md-12" name="prg-type" id="prg-type">
                        <option value="UG">UG</option>
                        <option value="PG">PG</option>
                        <option value="PHD">PhD</option>
                    </select>
                     <div class="help-block font-small-3"></div>
                   </fieldset>
                </div>
                        <div style="text-align: center;font-size: 20px;"> 
                   <fieldset class="form-group position-relative row g-10">
                    <label for="prg-type">Courses</label>
                   <select class="col-md-12" name="prg-type" id="prg">
                        <option value="PG">Select a Programme First</option>
                    </select>
                    <p>
                         Your value <span id="changed"></span>
                    </p>
                     <div class="help-block font-small-3"></div>
                   </fieldset>
                </div>
                   <div class="row">
                     <div class="col-6 col-sm-6 col-md-6">
                       <button type="submit" name="login" class="btn btn-info btn-lg btn-block"><i class="ft-user"></i> Proceed</button>
                     </div>
                     <!-- <div class="col-6 col-sm-6 col-md-6">
                       <a href="signup.php" class="btn btn-danger btn-lg btn-block" name="login" type="text"><i class="ft-unlock"></i> Register</a>
                     </div> -->
                   </div>
                   <br>
                    <!-- <div class="col-6 col-sm-6 col-md-6">
                       <p><a href="forget-password.php">Forgot password?</a></p>
                     </div> -->
                     <div class="col-6 col-sm-6 col-md-6">
                       <p><a href="dashboard.php">Go Back</a></p>
                     </div>
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
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