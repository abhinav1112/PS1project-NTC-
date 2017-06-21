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

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class = "active"><a href="ViewEmployeeDatabase.php">View Employee Database</a></li>
                    <li><a href="ViewEmployeeApplicationDatabase.php">View Employee Application Database</a></li>
					<li><a href="hrlogin.php">LogOut</a></li>
                </ul>
            </div>
   
   </div>
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
			echo	"</tr>";
            while($row = mysqli_fetch_array($result))
            {
                $q3 = $row["ID"];
				$_SESSION["EmpId"] = $row["ID"];
			    $nn++;
                $sql2 = "SELECT Name,ID FROM employee where ID = '$q3'";
                $result2 = $conn->query($sql2);
                $row2 = $result2->fetch_assoc();

				echo "<tr>";
				echo   "<td>".$nn."</td>";
				echo   "<td>".$row2['Name']."</td>";
				echo   "<td>".$row2['ID']."</td>";
				echo   "<td><button  type='submit' name='viewapp'  ><a href='fullform.php'>View Application</a></button></td>";
				echo   "<form role=\"form\" method=\"post\" action=\"hrback.php\">";
				echo   "<td><input  type='text' name='init'  ></td>";
				echo   "<td><input  type='text' name='accept'  ></td>";
				echo   "<td><input  type='text' name='review'  ></td>";
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
