
<?php
session_start();
if(empty($_SESSION["ID"])){
     header("location:login.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
   <title>Intitiating Officer Score</title>
   <head>
      <script >

        function TC() {
        
        var tc=0;
        tc= tc + parseInt(document.getElementById("c1").value);
        tc= tc + parseInt(document.getElementById("c2").value);
        tc= tc + parseInt(document.getElementById("c3").value);
        tc= tc + parseInt(document.getElementById("c4").value);
        tc= tc + parseInt(document.getElementById("c5").value);
        tc= tc + parseInt(document.getElementById("c6").value);
        tc= tc + parseInt(document.getElementById("c7").value);
        tc= tc + parseInt(document.getElementById("c8").value);
        tc= tc + parseInt(document.getElementById("c9").value);

         document.getElementById("demo1").innerHTML = tc*20/45;
      }
      

    function TV() {

      var tv=0;
        tv= tv+parseInt(document.getElementById("v1").value);
        tv= tv+parseInt(document.getElementById("v2").value);
        tv= tv+parseInt(document.getElementById("v3").value);
        tv= tv+parseInt(document.getElementById("v4").value);
        tv= tv+parseInt(document.getElementById("v5").value);
        tv= tv+parseInt(document.getElementById("v6").value);
        tv= tv+parseInt(document.getElementById("v7").value);
        tv= tv+parseInt(document.getElementById("v8").value);
        tv= tv+parseInt(document.getElementById("v9").value);
        tv= tv+parseInt(document.getElementById("v10").value);
        document.getElementById("demo2").innerHTML = tv*15/50;
    }

    function TGA() {
      
      var tga=0;
        tga= tga+parseInt(document.getElementById("ga1").value);
        tga= tga+parseInt(document.getElementById("ga2").value);
        tga= tga+parseInt(document.getElementById("ga3").value);
        tga= tga+parseInt(document.getElementById("ga4").value);
        tga= tga+parseInt(document.getElementById("ga5").value);
        
        document.getElementById("demo3").innerHTML = tga*15/25;
      }
    
      </script>
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
         #formpg114{
            padding-top: 50px;
            margin: 0 auto;
            width: 85%;
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

      <div class="container-fluid text-center">
         <h4 class="margin"><bold>Some heading</bold></h4>
         <section class="panel">
         <div class="panel-body">
    
            <div class="form">
               <div class="form-group">
      
      <table class="table-bordered" style="width:100%">
        <tr>
          <th class="text-center">Serial No.</th>
          <th class="text-center">COMPETENCIES</th>
          <th>RATINGS (1-5)</th>
        </tr>
        <tr>
           <td>1.</td>
           <td><b>Business Environment Knowledge</b> : Knowledge and understanding of economic, legal, socio-political trends</td>
           <td><input id="c1"  /></td>
        </tr>
        <tr>
           <td>2.</td>
           <td><b>Profession Specific Knowledge</b> : knowledge related to profession as a whole. Knowledge which is determined by authority and responsibility of other positions; knowledge of mission, values and standard operating procedures, policies</td>
           <td><input id = "c2" ></td>
        </tr>
        <tr>
           <td>3.</td>
           <td><b>Making Business Decisions</b> : *Use business related data to support effective and timely business decisions by systematically *gathering relevant business information *identifying the strengths and weaknesses of a particular business line *recognising opportunities or threats and acting on them rapidly *using business facts collected in daily decision making</td>
           <td><input id = "c3" ></td>
        </tr>
        <tr>
           <td>4.</td>
           <td><b>Vision</b> : Develop a vision for the future of the Organisation by, grasping the meaning of trends and inter-relationships between the Organisation and its environment at the local, national and international level; identifying fundamental values and beliefs to guide the Organisation into future</td>
           <td><input id = "c4" ></td>
        </tr>
        <tr>
           <td>5.</td>
           <td><b>Systematic Thinking</b> : Identifying connections between situations that are not obviously related, using common senses, past experiences and basic rules to identify key underlying issues, generating and testing hunched which may explain complex situations and problems</td>
           <td><input id = "c5" ></td>
        </tr>
        <tr>
           <td>6.</td>
           <td><b>Networking</b> : To cultivate and informal network which may help to get things done through, developing contacts with people outside of the immediate work unit, using network as source of information and support</td>
           <td><input id = "c6" ></td>
        </tr>
        <tr>
           <td>7.</td>
           <td><b>Organising resources</b> : Ensure that all financial, personnel  and/or other resources are in place to meet needs by, identifying and acquiring the resources allocating and utilizing the resources in a timely and cost effective way, monitoring and controlling all resources required to maintain the efficiency of operations</td>
           <td><input id = "c7" ></td>
        </tr>
        <tr>
           <td>8.</td>
           <td><b>Inspire people</b> : To generate a sense of purpose for the work done by the organisation through instilling enthusiasm, loyalty and commitment among team member at  all levels of the organisation, inspiring, motivating and guiding others towards organisational goals and objectives, setting an example for others by behaving in ways that are consistent with espoused beliefs and values and the organisation’s vision and direction</td>
           <td><input id = "c8" ></td>
        </tr>
        <tr>
           <td>9.</td>
           <td><b>Team Player</b> : To contribute to group objectives in a environment through, cooperating and interacting with others, contributing actively and fully to team projects, working cooperatively as opposed to competitively with others, acknowledging diverse opinions, addressing relevant concerns and working towards consensual solutions that enhance the output of the team</td>
           <td><input id = "c9" ></td>
        </tr>
      </table>

      <br>

      <label  class="control-label col-lg-6">Rating of competencies=((Total of all attributes)*20/45):
      </label>
        <div class="col-lg-6">
        <button onclick="TC()">Generate Total</button>
		<p id="demo1"></p>
		</div>
        <br><br><br>
       
	  
      <table class="table-bordered" style="width:100%">
        <tr>
          <th class="text-center">Serial No.</th>
          <th class="text-center">VALUES</th>
          <th class="text-center">RATINGS (1-5)</th>
        </tr>
        <tr>
           <td>1.</td>
           <td><b>Fairness</b> : Decisions are made objectively, free from patronage and reflect the just treatment of employees and applicants.</td>
           <td><input id = "v1" type="text" class="form-control" /></td>
        </tr>
        <tr>
           <td>2.</td>
           <td><b>Transparency</b> : There is open communication about every aspect of managerial decisions which concern people</td>
           <td><input id = "v2" type="text" class="form-control" /></td>
        </tr>
        <tr>
           <td>3.</td>
           <td><b>Trust</b> : *Trustworthiness leading to confidence *Allow staff the freedom to grow and develop *Relate to others on basis of mutual respect *Courage to stand by your convictions</td>
           <td><input id = "v3" type="text" class="form-control" /></td>
        </tr>
        <tr>
           <td>4.</td>
           <td><b>Candour</b> : *Frank and forthright *Give and receive constructive criticism/suggestions *Openly discuss performance deficiencies and take corrective action *Appreciate good performance *Be consistent in words and deeds *Face up to your mistakes</td>
           <td><input id = "v4" type="text" class="form-control" /></td>
        </tr>
        <tr>
           <td>5.</td>
           <td><b>Collaboration</b> : *Working in tandem *Be open in sharing information and in seeking suggestions/opinion *Be sensitive to concerns of others, honour your commitment *Encourage team work across departments/functions</td>
           <td><input id = "v5" type="text" class="form-control" /></td>
        </tr>
        <tr>
           <td>6.</td>
           <td><b>Involvement</b> : Total commitment; be dedicated and committed to work, build commitment by encouraging wide participation in decision making process to the maximum extent possible.</td>
           <td><input id = "v6" type="text" class="form-control" /></td>
        </tr>
        <tr>
           <td>7.</td>
           <td><b>Flexibility</b> : *Ability to participate and adapt to changing circumstances using sound judgement *Be open to accepting new ideas *Be willing to learn from anyone and to do things differently *Be prepared to operate and adapt to different environments</td>
           <td><input id = "v7" type="text" class="form-control" /></td>
        </tr>
        <tr>
           <td>8.</td>
           <td><b>Willingness</b> : *As to accept challenge *Be willing to experiment *Allow for freedom to fail, but learn from it too</td>
           <td><input id = "v8" type="text" class="form-control" /></td>
        </tr>
        <tr>
           <td>9.</td>
           <td><b>Discipline</b> : *Adherence to accept norms *Honour the promises, and adhere to agreed system *Respect for others time and space *Exercise self control</td>
           <td><input id = "v9" type="text" class="form-control" /></td>
        </tr>
        <tr>
           <td>10.</td>
           <td><b>Ethical behaviour</b> : *Demonstrate honestly and sincerity in every action *Apply sound business and professional ethics *Shows consistency with principles, values and behaviours</td>
           <td><input id = "v10" type="text" class="form-control" /></td>
        </tr>
      </table>
      <br>
      <label  class="control-label col-lg-6">Rating of values=((Total of all attributes)*15/50):</label>
	  <div class="col-lg-6">
        <button onclick="TV()">Generate Total</button><p>  </p>
		<p id="demo2"></p>
        </div>
        <br><br><br>
        
      <table class="table-bordered" style="width:100%">
        <tr>
          <th class="text-center">Serial No.</th>
          <th class="text-center">GENERIC ATTRIBUTE</th>
          <th class="text-center">RATINGS (1-5)</th>
        </tr>
        <tr>
           <td>1.</td>
           <td><b>Leadership Abilities</b> : *Demonstrates ability for guiding collective decision making *Demonstrates ability for succession planning *Demonstrates ability for crisis management *Demonstrates ability to take risks</td>
           <td><input id = "ga1" ></td>
        </tr>
        <tr>
           <td>2.</td>
           <td><b>Team building</b> : *Demonstrates effectiveness in reorganizing his/her own department *Manage diverse and divergent views and group processes without losing sight of objectives</td>
           <td><input id = "ga2" ></td>
        </tr>
        <tr>
           <td>3.</td>
           <td><b>Ability to build a strategic vision</b> : *Demonstrates change to management change *Focus on long term issues *Strategic thinking *Translates visions into goals</td>
           <td><input id = "ga3" ></td>
        </tr>
        <tr>
           <td>4.</td>
           <td><b>Business sense</b> : *Commitment to bottom line results by enhancing revenue generation by addressing interest of customers and stakeholders *Balancing need for viable short and long term performance *Optimizing unit / organization’s contribution while supporting corporate objectives *Spotting and pursuing new business opportunities wherever possible</td>
           <td><input id = "ga4" ></td>
        </tr>
        <tr>
           <td>5.</td>
           <td><b>Communication skills</b> : *Communicate ideas and information effectively and market key points effectively through public speaking and presentation *Ability to convert ideas through action plan and ensure acceptability within the organization and performance at Board meetings</td>
           <td><input id = "ga5" ></td>
        </tr>
      </table>
      <br>
      <label  class="control-label col-lg-6">Rating of potential=((Total of all attributes)*15/25):</label>
      <div class="col-lg-6">
        <button onclick="TGA()">Generate Total</button>
		<p id="demo3"></p>
        </div>
        <br><br><br>
    </div>
            </div>
         </div>
      </section>

      <p><h4><b>INTEGRITY(choose any one of the below)</b></h4></p>
      <div class="container-fluid  text-left">
      <form>
          <input type="radio" name="Integrity" >  Beyond doubt.<br><br>
          <input type="radio" name="Integrity" >  Integrity of the officer is doubtful.A separate secret note is attached.<br><br>
          <input type="radio" name="Integrity" >  Nothing adverse has been received about the Officer.
      </form>
      </div>
      <br>
      <br>
      <h4><b>PERFORMANCE AND POTENTIAL PROFILE</b></h4><br>
      <h5>FINAL MARKS SCORED</h5>
      <form>
      <div>
        <table class="table-bordered" style="width:100%">
          <tr>
            <th></th>
            <th></th>
            <th>TOTAL MARKS</th>
            <th>MARKS SCORED</th>
          </tr>

          <tr>
            <td><b>PART I</b></td>
            <td><b>PERFORMANCE</b></td>
            <td><b>50</b></td>
            <td><input type="text" class="form-control"></td>
          </tr>

          <tr>
            <td><b>PART II</b></td>
            <td><b>COMPETENCIES</b></td>
            <td><b>20</b></td>
            <td><input type="text" class="form-control"></td>
          </tr>

          <tr>
            <td><b>PART III</b></td>
            <td><b>VALUES</b></td>
            <td><b>15</b></td>
            <td><input type="text" class="form-control"></td>
          </tr>

          <tr>
            <td><b>PART IV</b></td>
            <td><b>POTENTIAL</b></td>
            <td><b>15</b></td>
            <td><input type="text" class="form-control"></td>
          </tr>

          <tr>
            <td></td>
            <td><b>TOTAL</b></td>
            <td><b>100</b></td>
            <td><input type="text" class="form-control"></td>
          </tr>
        </table>
      </div>
      </form>
      <br><br>
      <!--<form>
        <label>NAME & DESIGNATION OF INITIATING AUTHORITY</label>
        <input type="text" class="form-control">

        <label>NAME & DESIGNATION OF REVIEWING AUTHORITY</label>
        <input type="text" class="form-control">
        <label>COMMENTS OF REVIEWING AUTHORITY</label>
        <input type="text" class="form-control">

        <label>NAME & DESIGNATION OF ACCEPTING AUTHORITY</label>
        <input type="text" class="form-control">
        <label>COMMENTS OF ACCEPTING AUTHORITY</label>
        <input type="text" class="form-control">

      </form>-->
      <form id="formpg114" class="form-validate form-horizontal">
        <div class="form-group ">
        <label  class="control-label col-lg-3">NAME & DESIGNATION OF INITIATING AUTHORITY</label>
        <div class="col-lg-9">
        <input class="form-control " type="text" />
        </div>
        </div>
        <br><br>
        <div class="form-group ">
        <label  class="control-label col-lg-3">NAME & DESIGNATION OF REVIEWING AUTHORITY</label>
        <div class="col-lg-9">
        <input class="form-control " type="text" />
        </div>
        </div>

        <div class="form-group ">
        <label  class="control-label col-lg-3">COMMENTS OF REVIEWING AUTHORITY</label>
        <div class="col-lg-9">
        <input class="form-control " type="text" />
        </div>
        </div>
        <br><br>
        <div class="form-group ">
        <label  class="control-label col-lg-3">NAME & DESIGNATION OF ACCEPTING AUTHORITY</label>
        <div class="col-lg-9">
        <input class="form-control " type="text" />
        </div>
        </div>

        <div class="form-group ">
        <label  class="control-label col-lg-3">COMMENTS OF ACCEPTING AUTHORITY</label>
        <div class="col-lg-9">
        <input class="form-control " type="text" />
        </div>
        </div>
      </form>

      <br><br>
      <table class="table-bordered" style="width:100%" centre>
        <tr>
          <th>S.NO</th>
          <th>MARKS</th>
          <th>GRADE</th>
        </tr>

        <tr>
          <td>1.</td>
          <td>81-100</td>
          <td>OUTSTANDING</td>
        </tr>

        <tr>
          <td>2.</td>
          <td>61-80</td>
          <td>VERY GOOD</td>
        </tr>

        <tr>
          <td>3.</td>
          <td>41-60</td>
          <td>GOOD</td>
        </tr>

        <tr>
          <td>4.</td>
          <td>21-40</td>
          <td>AVERAGE</td>
        </tr>

        <tr>
          <td>5.</td>
          <td>0-20</td>
          <td>POOR</td>
        </tr>


      </table>
      <br><br><br>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>