<?php
session_start();
if(empty($_SESSION["ID"])){
     header("location:login.php");
   }
?>

<?php
	// define variables and set to empty values
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		
		$ndIA= test_input($_POST["ndIA"]);

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
	$one=4;
	$q=$_SESSION["FormId"];
	$ID=$_SESSION["ID"];
	echo $ndIA;
	echo $ID;
	echo $q;
	mysqli_query($db,"UPDATE initiating SET FormStatus='{$one}' WHERE EmpId='{$q}' and InitId='{$ID}'");
	mysqli_query($db,"UPDATE reviewing SET FormStatus='{$one}' WHERE EmpId='{$q}' and ReviewId='{$ID}'");
	mysqli_query($db,"UPDATE accepting SET FormStatus='{$one}' WHERE EmpId='{$q}' and AcceptId='{$ID}'");
	mysqli_query($db,"UPDATE application SET ndIA='{$ndIA}' WHERE ID='{$q}' ");
	echo "Form has been submitted Successfully. <br>";
	?>
	<form id="afterloginform">
     <div class="form-group">
      <label for="pwd">Review as:</label>
	  <button  class="btn btn-default"><a href="afterlogin.php">Go back to portal<a/></button>
    </div>
   </form>