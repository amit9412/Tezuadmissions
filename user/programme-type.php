
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
                        <option value="UG">Btech</option>
                        <option value="PG">Integrated MA</option>
                        <option value="PHD">Integrated MSc</option>
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
     var changedText = document.getElementById('changed');
     var prg = document.getElementById('prg');
     function listQ(){
        changedText.textContent = this.value;
    }
    function addCourses() {
        var x = document.getElementById("prg");
        x.innerHTML = "<option value='1'> Kuch bhi </option>";
    }
document.getElementById("prg-type").onchange = addCourses;

// Assuming you have included the jQuery library

// Function to make the AJAX request
function fetchCoursesByLevel(courseLevel) {
  // AJAX request
  $.ajax({
    url: 'fetch_courses.php', // Replace with the actual URL to your server-side script
    method: 'POST',
    data: { level: courseLevel }, // Sending the selected course level as data
    success: function(response) {
      // Process the response
      var courses = JSON.parse(response);
      
      // Use the fetched courses as per your requirements
      // For example, you can iterate through the courses and display them on the webpage
      courses.forEach(function(course) {
        console.log(course.ID, course.Name, course.Description);
        // Perform your desired actions with the course data
      });
    },
    error: function(xhr, status, error) {
      // Handle the error if the AJAX request fails
      console.log(error);
    }
  });
}

// Example usage: Fetch courses for UG level
fetchCoursesByLevel('UG');


 </script>

 
</body>