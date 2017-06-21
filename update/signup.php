
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">-->
    <style type="text/css">
      #mainbody{
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;

      }
      .bg-1{
        background-color: #981a66;
        color: white;
      }
      .img-responsive{
        margin: 0 auto;
      }
      #signupform{
        padding-top: 75px;
        margin: 0 auto;
        width: 25%;
      }
    </style>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
  </head>
  <body id="mainbody">
   <img class ="img-responsive" src="ntc-logo.png" i>
   <div class="container-fluid bg-1 text-center">
   <h3 class="margin"><bold>PERFORMANCE MANAGEMENT SYSTEM</bold></h3>
   </div>

   <form id="signupform" method="post" action="signup1.php">
    <div class="form-group">
      <label for="signupName">Name:</label>
      <input type="name" name="Name" class="form-control" id="signupName"><br>
	  <label for="signupName">Email:</label>
      <input type="email" name="Email" class="form-control" id="Email"><br>
	  <label for="">Password:</label>
      <input type="password" name="Password" class="form-control" id=""><br>
    
      <label for="signupDob">Date Of Birth:</label>
      <input type="date" name="DOB" class="form-control" id="signupDob"><br>
    
      <label for="pwd">Date Of Joining:</label>
      <input type="date" name="DOJ" class="form-control" id="pwd"><br>
    
      <label for="">Qualification:</label>
      <input type="text" name="Qualification" class="form-control" id=""><br>
    
      <label for="">Department:</label>
      <select name="Department" class="form-control" required>
			<option selected disabled value="">Select Department</option>
			<option value="HR" name="Department">HR</option>
			<option value="Technical" name="Department">Technical</option>
			<option value="IT" name="Department">IT</option>
			<option value="Finance" name="Department">Finance</option>
			<option value="Marketing" name="Department">Marketing</option>
	  </select><br>
      
	  <label for="">Designation:</label>
      <input type="text" name="Designation" class="form-control" id=""><br>
	  
	  <label for="">Place of Posting:</label>
      <select name="PlaceOfPosting" class="form-control" required>
			<option selected disabled value="">Select Location</option>
			<option value="Delhi" name="PlaceOfPosting">Delhi</option>
			<option value="Mumbai" name="PlaceOfPosting">Mumbai</option>
			<option value="Coimbatore" name="PlaceOfPosting">Coimbatore</option>
	  </select><br>
    
      <label for="">Pay Scale:</label>
      <select name="PayScale" class="form-control" required>
			<option selected disabled value="">Select Pay Scale</option>
			<option value="62,200-80,000" name="PayScale">Rs. 62,200-80,000</option>
			<option value="51,300-73,000" name="PayScale">Rs. 51,300-73,000</option>
			<option value="43,200-66,000" name="PayScale">Rs. 43,200-66,000</option>
			<option value="36,600-62,000" name="PayScale">Rs. 36,600-62,000</option>
			<option value="32,900-58,000" name="PayScale">Rs. 32,900-58,000</option>
			<option value="29,100-54,500" name="PayScale">Rs. 29,100-54,500</option>
			<option value="24,900-50,500" name="PayScale">Rs. 24,900-50,500</option>
			<option value="20,600-46,500" name="PayScale">Rs. 20,600-46,500</option>
			<option value="16,400-40,500" name="PayScale">Rs. 16,400-40,500</option>
			<option value="12,600-32,500" name="PayScale">Rs. 12,600-32,500</option>
			<option value="11,600-26,000" name="PayScale">Rs. 11,600-26,000</option>
			<option value="10,000-23,000" name="PayScale">Rs. 10,000-23,000</option>
			<option value="9,000-22,000" name="PayScale">Rs. 9,000-22,000</option>
			<option value="8,600-21,000" name="PayScale">Rs. 8,600-21,000</option>
			<option value="8,400-20,200" name="PayScale">Rs. 8,400-20,200</option>
			<option value="8,200-19,000" name="PayScale">Rs. 8,200-19,000</option>
			<option value="7,000-17,000" name="PayScale">Rs. 7,000-17,000</option>
	  </select><br>
    
      <label for="">BasicPay:</label>
      <input type="text" name="BasicPay" class="form-control" id=""><br>
    
      <label for="">GradePay:</label>
      <input type="text" name="GradePay" class="form-control" id=""><br>
    
	<button  class="btn btn-default btn-primary">Sign Up</button>
    </div>
   </form>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>