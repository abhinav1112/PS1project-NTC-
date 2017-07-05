<?php
session_start();
if(empty($_SESSION["IDhr"])){
     header("location:login.php");
   }
?>


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
       <?php
		$_SESSION["init"] =  $_SESSION["accept"] = $_SESSION["review"] = $_SESSION["EmpId"] = '';

?>
   <img class ="img-responsive" src="ntc-logo.png" i>
   <div class="container-fluid bg-1 text-center">
   <h3 class="margin"><bold>PERFORMANCE MANAGEMENT SYSTEM</bold></h3>
   </div>
   <a href = "ViewEmployeeDatabase.php"><button type=""  class="btn btn-default btn-primary" style="position: relative; right: 0; float: right">View Employee Database</button></a>
   <a href = "ViewEmployeeApplicationDatabase.php"><button type=""  class="btn btn-default btn-success" style="position: relative; right: 0; float: right;">View Employee Application Database</button></a>
   <a href = "login.php"><button type=""  class="btn btn-default btn-danger" style="position: relative; right: 0; float: right">Logout</button></a>

   
            
            <?php
			$nn=0;
            function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "appraisal";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM application ";
            $result = $conn->query($sql);
            echo "<h2 class = 'opo'>List of Employees</h2>";
            echo "<ul class=\"list-group\">";
	        echo "<div class=\"form-group\">";
			echo "<table class=\"table-bordered\" style=\"width:100%\">";
			echo	"<tr>";
			echo	  "<th>S.NO.</th>";
			echo	  "<th>Employee Name</th>";
			echo	  "<th>Employee Id</th>";
			echo	  "<th>Employee Application</th>";
			echo	  "<th>Employe's Initiating Officer</th>";
			echo	  "<th>Employe's Accepting Officer</th>";
			echo	  "<th>Employe's Reviewing Officer</th>";
			echo	  "<th>Status of Initiating Officer</th>";
			echo	  "<th>Status of Accepting Officer</th>";
			echo	  "<th>Status of Reviewing Officer</th>";
			echo	"</tr>";
            while($row = mysqli_fetch_array($result))
            {
                $q3 = $row["ID"];
			    $nn++;
                $sql2 = "SELECT Name,ID FROM employee where ID = '$q3'";
                $result2 = $conn->query($sql2);
                $row2 = $result2->fetch_assoc();
				$qqq=$row2['ID'];
				$sql3 = "SELECT InitId,FormStatus FROM initiating where EmpId = '$q3'";
                $result3 = $conn->query($sql3);
                $row3 = $result3->fetch_assoc();
				$sql4 = "SELECT AcceptId,FormStatus FROM accepting where EmpId = '$q3'";
                $result4 = $conn->query($sql4);
                $row4 = $result4->fetch_assoc();
				$sql5 = "SELECT ReviewId,FormStatus FROM reviewing where EmpId = '$q3'";
                $result5 = $conn->query($sql5);
                $row5 = $result5->fetch_assoc();
				$i=$row3['InitId'];
				$a=$row4['AcceptId'];
				$r=$row5['ReviewId'];
				echo "<tr>";
				echo   "<td>".$nn."</td>";
				echo   "<td>".$row2['Name']."</td>";
				if($row4['FormStatus'])
				echo   "<form role=\"form\" method=\"post\" action=\"fullforma.php\">";
			    else if($row5['FormStatus'])
				echo   "<form role=\"form\" method=\"post\" action=\"fullformr.php\">";
			    else if($row3['FormStatus'])
				echo   "<form role=\"form\" method=\"post\" action=\"fullformi.php\">";
			    else
				echo   "<form role=\"form\" method=\"post\" action=\"fullform.php\">";
			    echo   "<td><input type=\"text\"  value=\"$qqq\" name='qid' readonly/> </td>";
			    echo   "<td><button  type='submit' name='viewapp'  >View Application</button></td>";
				echo   "</form>";
				echo   "<form role=\"form\" method=\"post\" action=\"hrback.php\">";
				echo   "<td><input  type='text' value=\"$i\" name='init'  ></td>";
				echo   "<td><input  type='text' value=\"$a\" name='accept'  ></td>";
				echo   "<td><input  type='text' value=\"$r\" name='review'  ></td>";
				if($row3['FormStatus'])
				echo   "<td><div class=\"btn-group\" data-toggle=\"buttons\"><label class=\"btn btn-success active\"><input type=\"checkbox\" autocomplete=\"off\" checked><span class=\"glyphicon glyphicon-ok\"></span></label></div></td>";
				else
				echo   "<td>Not Submitted</td>";
                if($row4['FormStatus'])
				echo   "<td><div class=\"btn-group\" data-toggle=\"buttons\"><label class=\"btn btn-success active\"><input type=\"checkbox\" autocomplete=\"off\" checked><span class=\"glyphicon glyphicon-ok\"></span></label></div></td>";
				else
				echo   "<td>Not Submitted</td>";
                if($row5['FormStatus'])
				echo   "<td><div class=\"btn-group\" data-toggle=\"buttons\"><label class=\"btn btn-success active\"><input type=\"checkbox\" autocomplete=\"off\" checked><span class=\"glyphicon glyphicon-ok\"></span></label></div></td>";
				else
				echo   "<td>Not Submitted</td>";
				echo   "<input type='hidden'  value=\"$qqq\" name='qid' /> ";
				echo   "<td><button type=\"submit\"  \"> Finalize</button></td>";
				
                echo   "</form>";
				echo "</tr>";
			}
            echo "</div>";
            echo "</form>";
			echo "</table>";
		    echo "</div>";
            $conn->close();
            ?>
</body>

</html>
