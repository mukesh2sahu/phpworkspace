

<?php

include 'connectphp.php'

// $customer_id = '';
// if (isset($_GET['id'])) {
//     $customer_id = $_GET['id'];

//     // get the student detail for id rquested

//     $student_fetch_query = "select * from registration where  = $customer_id";

//     $result_student = mysqli_query($conn, $student_fetch_query);
//     $student_romother_name = mysqli_fetch_array($result_student);

//     $sqlcat = 'select * from interest_master';
//     $resultcat = mysqli_query($conn, $sqlcat);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-color:darkturquoise;">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"><p align="center"><b>Registration Form</b></p></h3>
            <form action="connect.php" method="post">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" name="firstName"/>
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" name="lastName"/>
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="Date of Birth" name="dateOfBirth"/>
                    <label for="birthdayDate" class="form-label">Date Of Birth</label>
                  </div>
                  
                 </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="Gender"
                      value="female" checked />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="Gender" 
                      value="male" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="Gender" 
                      value="other" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div> 

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" class="form-control form-control-lg" name="email" required/>
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" name="phoneNumber" required/>
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="country" class="form-control form-control-lg" name="country" required/>
                    <label class="form-label" for="country">Country</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="state" class="form-control form-control-lg" name="state" required/>
                    <label class="form-label" for="city">State</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">
                  <input class="form-control" id="address" name="address" required/>
                  <label class="form-label" for="address">Address</label>
                  </div>

                
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <input class="form-control" id="pincode" name="pincode" required/>
                    <label class="form-label" for="pincode">Pin Code</label>
                  </div>

                </div>
              </div>

                  <fieldset id="interest">
                    <legend>Choose your interests</legend>

                    <?php

                    $sqlfa = mysqli_query($conn,"SELECT * FROM interest_master");
                    while($qryfa=mysqli_fetch_array($sqlfa)){
                      
                    ?>
                    <?php echo  $qryfa['interest_name'];?> 
                    <input type="checkbox" name="interest[]"  value="<?php echo $qryfa['interest_id']?>">&nbsp;&nbsp;&nbsp;
                    <?php } ?>
                    
                    <!-- <div>
                      <input type="checkbox" id="electronicsitems" name="interest" value="electronic" name="interest" checked>
                      <label for="electronicsitems">Electronics</label>
                    </div>
                    <div>
                      <input type="checkbox" id="clothitems" name="interest" value="clothings" name="interest">
                      <label for="clothingitems">Clothings</label>
                      <div>
                        <input type="checkbox" id="personalcareitems" name="interest" value="personalcare" name="interest">
                        <label for="personalcareitems">Personal Care</label>
                    </div> -->
                    
                  </fieldset>
                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>