<?php
session_start();
if(empty($_SESSION["ID"])){
     header("location:login.php");
   }
?>

<?php
	// define variables and set to empty values
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$MYR_rev1 = test_input($_POST["MYR_rev1"]);
		$MYR_rev2 = test_input($_POST["MYR_rev2"]);
		$MYR_rev3 = test_input($_POST["MYR_rev3"]);
		$MYR_rev4 = test_input($_POST["MYR_rev4"]);
		$MYR_rev5 = test_input($_POST["MYR_rev5"]);
		$MYR_rev6 = test_input($_POST["MYR_rev6"]);
		
		$YER_rev1 = test_input($_POST["YER_rev1"]);
		$YER_rev2 = test_input($_POST["YER_rev2"]);
		$YER_rev3 = test_input($_POST["YER_rev3"]);
		$YER_rev4 = test_input($_POST["YER_rev4"]);
		$YER_rev5 = test_input($_POST["YER_rev5"]);
		$YER_rev6 = test_input($_POST["YER_rev6"]);

		$YER_ma1 = test_input($_POST["YER_ma1"]);
		$YER_ma2 = test_input($_POST["YER_ma2"]);
		$YER_ma3 = test_input($_POST["YER_ma3"]);
		$YER_ma4 = test_input($_POST["YER_ma4"]);
		$YER_ma5 = test_input($_POST["YER_ma5"]);
		$YER_ma6 = test_input($_POST["YER_ma6"]);
		
		$p2c_1 = test_input($_POST["p2c_1"]);
	    $p2c_2 = test_input($_POST["p2c_2"]);
		$p2c_3 = test_input($_POST["p2c_3"]);
		$p2c_4 = test_input($_POST["p2c_4"]);
		$p2c_5 = test_input($_POST["p2c_5"]);
		$p2c_6 = test_input($_POST["p2c_6"]);
		$p2c_7 = test_input($_POST["p2c_7"]);
		$p2c_8 = test_input($_POST["p2c_8"]);
		$p2c_9 = test_input($_POST["p2c_9"]);

		$p3v_1= test_input($_POST["p3v_1"]);
		$p3v_2= test_input($_POST["p3v_2"]);
		$p3v_3= test_input($_POST["p3v_3"]);
		$p3v_4= test_input($_POST["p3v_4"]);
		$p3v_5= test_input($_POST["p3v_5"]);
		$p3v_6= test_input($_POST["p3v_6"]);
		$p3v_7= test_input($_POST["p3v_7"]);
		$p3v_8= test_input($_POST["p3v_8"]);
		$p3v_9= test_input($_POST["p3v_9"]);
		$p3v_10= test_input($_POST["p3v_10"]);
		
		$p4p_1= test_input($_POST["p4p_1"]);
		$p4p_2= test_input($_POST["p4p_2"]);
		$p4p_3= test_input($_POST["p4p_3"]);
		$p4p_4= test_input($_POST["p4p_4"]);
		$p4p_5= test_input($_POST["p4p_5"]);
		
		$ndIA= test_input($_POST["ndIA"]);
		$ndRA= test_input($_POST["ndRA"]);
		$cRA= test_input($_POST["cRA"]);
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
	$total1=$_SESSION['total1'];
	$total2=$_SESSION['total2'];
	$total3=$_SESSION['total3'];
	$total0=$_SESSION['total0'];
	$totalsum=$_SESSION['totalsum'];
	?>
<?php
    
	$username = 'root';
	$password = '';
	$dbname = 'appraisal';
	$db = new mysqli('localhost', $username, $password, $dbname) or die("Unable to connect");
	$one=1;
	$q=$_SESSION["FormId"];
	$ID=$_SESSION["ID"];
	mysqli_query($db,"UPDATE initiating SET FormStatus='{$one}' WHERE EmpId='{$q}' and InitId='{$ID}'");
	mysqli_query($db,"UPDATE application SET MYR_rev1='{$MYR_rev1}',MYR_rev2='{$MYR_rev2}',MYR_rev3='{$MYR_rev3}',MYR_rev4='{$MYR_rev4}',MYR_rev5='{$MYR_rev5}',MYR_rev6='{$MYR_rev6}',YER_rev1='{$YER_rev1}',YER_rev2='{$YER_rev2}',YER_rev3='{$YER_rev3}',YER_rev4='{$YER_rev4}',YER_rev5='{$YER_rev5}',YER_rev6='{$YER_rev6}',YER_ma1='{$YER_ma1}',YER_ma2='{$YER_ma2}',YER_ma3='{$YER_ma3}',YER_ma4='{$YER_ma4}',YER_ma5='{$YER_ma5}',YER_ma6='{$YER_ma6}',total0='{$total0}',p2c_1='{$p2c_1}',p2c_2='{$p2c_2}',p2c_3='{$p2c_3}',p2c_4='{$p2c_4}',p2c_5='{$p2c_5}',p2c_6='{$p2c_6}',p2c_7='{$p2c_7}',p2c_8='{$p2c_8}',p2c_9='{$p2c_9}',total1='{$total1}',p3v_1='{$p3v_1}',p3v_2='{$p3v_2}',p3v_3='{$p3v_3}',p3v_4='{$p3v_4}',p3v_5='{$p3v_5}',p3v_6='{$p3v_6}',p3v_7='{$p3v_7}',p3v_8='{$p3v_8}',p3v_9='{$p3v_9}',p3v_10='{$p3v_10}',total2='{$total2}',p4p_1='{$p4p_1}',p4p_2='{$p4p_2}',p4p_3='{$p4p_3}',p4p_4='{$p4p_4}',p4p_5='{$p4p_5}',total3='{$total3}',totalsum='{$totalsum}',ndIA='{$ndIA}',ndRA='{$ndRA}',cRA='{$cRA}',ndAA='{$ndAA}',cAA='{$cAA}',cop='{$cop}' WHERE ID='{$q}'");
	echo "Form has been submitted Successfully. <br>";
	?>
	<form id="afterloginform">
     <div class="form-group">
      <label for="pwd">Review as:</label>
	  <button  class="btn btn-default"><a href="afterlogin.php">Go back to portal<a/></button>
    </div>
   </form>