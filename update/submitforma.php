<?php
session_start();
if(empty($_SESSION["ID"])){
     header("location:login.php");
   }
?>

<?php
	// define variables and set to empty values
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$ndAA= test_input($_POST["ndAA"]);
		$cAA= test_input($_POST["cAA"]);
		$cop= test_input($_POST["cop"]);

	}
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	?>
<?php
    
	$username = 'root';
	$password = '';
	$dbname = 'appraisal';
	$db = new mysqli('localhost', $username, $password, $dbname) or die("Unable to connect");
	$one=1;
	$q=$_SESSION["FormId"];
	$ID=$_SESSION["ID"];

	mysqli_query($db,"UPDATE accepting SET FormStatus='{$one}' WHERE EmpId='{$q}' and AcceptId='{$ID}'");
	mysqli_query($db,"UPDATE application SET ndAA='{$ndAA}',cAA='{$cAA}',cop='{$cop}' WHERE ID='{$q}'");
	echo "Form has been submitted Successfully. <br>";
	?>
	<form id="afterloginform">
     <div class="form-group">
      <label for="pwd">Review as:</label>
	  <button  class="btn btn-default"><a href="afterlogin.php">Go back to portal<a/></button>
    </div>
   </form>