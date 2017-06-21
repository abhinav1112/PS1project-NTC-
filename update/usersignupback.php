
<?php
// define variables and set to empty values
session_start();
$flag = 0;
$link = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
      echo "
  	<script language='javascript'>
  		alert('UserName is Required!');
  	</script>
  	";
	exit();
    $flag = 1;
  } else {
    $_SESSION["name"] = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$_SESSION["name"])) {
        echo "
    	<script language='javascript'>
    		alert('UserName should contain letters and Spaces Only!');
    	</script>
    	";
		exit();
      $flag = 1;
  }}

  if (empty($_POST["dob"])) {
      $flag = 1;
      echo "
      <script language='javascript'>
          alert('Password is Required!');
      </script>
      ";
	  exit();
  } else {
    $_SESSION["dob"] = test_input($_POST["dob"]);
}
  if (empty($_POST["doj"])) {
      $flag = 1;
      echo "
      <script language='javascript'>
          alert('Password is Required!');
      </script>
      ";
	  exit();
  } else {
    $_SESSION["doj"] = test_input($_POST["doj"]);
}
  
  if (empty($_POST["qualification"])) {
      $flag = 1;
      echo "
      <script language='javascript'>
          alert('Password is Required!');
      </script>
      ";
	  exit();
  } else {
    $_SESSION["qualification"] = test_input($_POST["qualification"]);
}

  if (empty($_POST["designation"])) {
      $flag = 1;
      echo "
      <script language='javascript'>
          alert('Password is Required!');
      </script>
      ";
	  exit();
  } else {
    $_SESSION["designation"] = test_input($_POST["designation"]);
}

  if (empty($_POST["dep"])) {
      $flag = 1;
      echo "
      <script language='javascript'>
          alert('Password is Required!');
      </script>
      ";
	  exit();
  } else {
    $_SESSION["dep"] = test_input($_POST["dep"]);
}
  if (empty($_POST["pop"])) {
      $flag = 1;
      echo "
      <script language='javascript'>
          alert('Password is Required!');
      </script>
      ";
	  exit();
  } else {
    $_SESSION["pop"] = test_input($_POST["pop"]);
}
  
  if (empty($_POST["ps"])) {
      $flag = 1;
      echo "
      <script language='javascript'>
          alert('Password is Required!');
      </script>
      ";
	  exit();
  } else {
    $_SESSION["ps"] = test_input($_POST["ps"]);
}

  if (empty($_POST["bp"])) {
      $flag = 1;
      echo "
      <script language='javascript'>
          alert('Password is Required!');
      </script>
      ";
	  exit();
  } else {
    $_SESSION["bp"] = test_input($_POST["bp"]);
}
  
  if (empty($_POST["gp"])) {
      $flag = 1;
      echo "
      <script language='javascript'>
          alert('Password is Required!');
      </script>
      ";
	  exit();
  } else {
    $_SESSION["gp"] = test_input($_POST["gp"]);
}
  
  if (empty($_POST["psw"])) {
      $flag = 1;
      echo "
      <script language='javascript'>
          alert('Password is Required!');
      </script>
      ";
      exit();
  } else {
    $_SESSION['psw'] = test_input($_POST["psw"]);
    $_SESSION['psw'] = sha1($_SESSION['psw']);
}

if($flag == 1)
{
    header("Location: userloginback.php");
    exit();
}}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "useradd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
	{
    die("Connection failed: " . $conn->connect_error);
}

$q1=$_SESSION["name"]; $q2=$_SESSION["dob"]; $q3=$_SESSION["doj"]; $q4=$_SESSION["psw"];  $q5=$_SESSION["designation"]; $q6=$_SESSION["dep"]; $q7=$_SESSION["pop"]; $q8=$_SESSION["ps"]; $q9=$_SESSION["bp"]; $q10=$_SESSION["gp"]; $q11=$_SESSION["qualification"]; 
$sql = "INSERT INTO user ( Name, DateOfBirth , DateOfJoining , Password , Designation , Department , PlaceOfPosting , Payscale , Basicpay , Gradepay , Qualification )
VALUES ('$q1', '$q2' , '$q3' , '$q4' , '$q5' , '$q6' , '$q7', '$q8' , '$q9' , '$q10' , '$q11' )";
//$sql = "INSERT INTO user ( DateOfJoining  )
//VALUES ('$q3'  )";
if ($conn->query($sql) === TRUE) {
    echo "
	<script language='javascript'>
		window.alert('Hurray!You have been registered.Login to continue');
        window.location ='userloginfront.php';
	</script>
    ";
} else {
    echo "
	<script language='javascript'>
		window.alert('User already exists!');
        window.location ='userloginfront.php';
	</script>
	";
	//exit();
    //$_SESSION["email2"] = "";
}
$conn->close();
?>
