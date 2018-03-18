<?php 
session_start();
$menu= 1;
//include("header.php");
include("dbconnection.php");
if(isset($_GET["docid"]))
{
	$_SESSION["appdocid"] = $_GET["docid"]; 
	$_SESSION["appdocname"] = $_GET["docname"];
	$_SESSION["appdocsptype"] = $_GET["sptype"];
	//header("Location: success.php");
}

if(isset($_POST["btnapp"]))
{
$sql="INSERT INTO appointment(patid,atime,adate,docid,status) VALUES ('$_SESSION[patid]','$_POST[radio]','$_POST[appdate]','$_SESSION[appdocid]','Pending)";
header("Location: success.php");
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
}

?>
<div id="container">
  <div class="wrapper">
    <div id="content">
      <h2>Appointment Time</h2>
     <?php
$result1 = mysqli_query($con,"SELECT * FROM timings where docid='$_SESSION[appdocid]' AND tstatus='Enabled' AND session='Morning'");
	//time loops starts here
	while($row1 = mysqli_fetch_array($result1))
  {
	 // docid 	fromtime 	totime 	session 	tstatus
	$start = $row1[fromtime];
	$endDate = $row1[totime];
  }
  //echo "Appointment Date : ".$_POST[dateofbirth]. "<br>";
  ?>
      <form id="form1" name="form1" method="post" action="">
      <table width="734" border="1">
  <tr>
    <th width="253" align="center"><strong>Morning</strong></th>
    <th width="186" align="center"><strong>Afternoon</strong></th>
    <th width="273" align="center"><strong>Evening</strong></th>
   </tr>
  <tr>
    <th align="center">
    <input type="hidden" name="appdate" value="$_POST[dateofbirth]" />
    <input type="hidden" name="appcomment" value="$_POST[comment]" />
    <input type="radio" name="radio" id="radio" value="09:00:00" />
      09.00

        <label for="radio"></label> 
        AM
</th>
    <th align="center"><input type="radio" name="radio" id="09:15:00" value="09:15:00" />
      12.00 PM</th>
    <th align="center"><input type="radio" name="radio" id="09:15:00" value="09:30:00" />
      04.00 PM</th>
    </tr>
  <tr>
    <th align="center"><input type="radio" name="radio" id="09:45:00" value="09:45:00" />
09.30

        <label for="radio2"></label>
AM</th>
    <th align="center"><input type="radio" name="radio" id="10:00:00" value="10:00:00" />
      12.15 PM</th>
    <th align="center"><input type="radio" name="radio" id="10:15:00" value="10:15:00" />
      04.15 PM</th>
    </tr>
  <tr>
    <th align="center"><input type="radio" name="radio" id="10:30:00" value="10:30:00" />
09.45

        <label for="radio3"></label>
AM</th>
    <th align="center"><input type="radio" name="radio" id="10:45:00" value="10:45:00" />
      12.30 PM</th>
    <th align="center"><input type="radio" name="radio" id="11:00:00" value="11:00:00" />
      04.30 PM</th>
    </tr>
  <tr>
    <th align="center"><input type="radio" name="radio" id="11:15:00" value="11:15:00" />
      10.00

        <label for="radio4"></label>
AM</th>
    <th align="center"><input type="radio" name="radio" id="11:30:00" value="11:30:00" />
      12.45 PM</th>
    <th align="center"><input type="radio" name="radio" id="11:45:00" value="11:45:00" />
      04.45 PM</th>
    </tr>
  <tr>
    <th align="center"><input type="radio" name="radio" id="12:00:00" value="12:00:00" />
      10.15

        <label for="radio5"></label>
AM</th>
    <th align="center"><input type="radio" name="radio" id="12:15:00" value="12:15:00" />
      01.00 PM</th>
    <th align="center"><input type="radio" name="radio" id="12:30:00" value="12:30:00" />
      05.00 PM</th>
    </tr>
  <tr>
    <th align="center"><input type="radio" name="radio" id="radio6" value="12:45:00" />
      10.30

        <label for="radio6"></label>
AM</th>
    <th align="center"><input type="radio" name="radio" id="radio18" value="01:00:00" />
      01.15 PM</th>
    <th align="center"><input type="radio" name="radio" id="radio18" value="01:15:00" />
      05.15 PM</th>
    </tr>
  <tr>
    <th align="center"><input type="radio" name="radio" id="radio7" value="11:00:00" /> 
      10.45


        <label for="radio7"></label>
AM</th>
    <th align="center"><input type="radio" name="radio" id="radio19" value="radio" />
      01.30 PM</th>
    <th align="center"><input type="radio" name="radio" id="radio19" value="radio" />
      05.30 PM</th>
    </tr>
  <tr>
    <th align="center"><input type="radio" name="radio" id="radio8" value="radio" />
11.00 

        <label for="radio8"></label>
AM</th>
    <th align="center"><input type="radio" name="radio" id="radio20" value="radio" />
      01.45 PM</th>
    <th align="center"><input type="radio" name="radio" id="radio20" value="radio" />
      05.45 PM</th>
    </tr>
  <tr>
    <th align="center"><input type="radio" name="radio" id="radio9" value="radio" />
11.15 

        <label for="radio9"></label>
AM</th>
    <th align="center"><input type="radio" name="radio" id="radio21" value="radio" />
      02.00 PM</th>
    <th align="center"><input type="radio" name="radio" id="radio21" value="radio" />
      06.00 PM</th>
    </tr>
  <tr>
    <th align="center"><input type="radio" name="radio" id="radio10" value="radio" /> 
      11.30


        <label for="radio10"></label>
AM</th>
    <th align="center"><input type="radio" name="radio" id="radio22" value="radio" />
      02.15 PM</th>
    <th align="center"><input type="radio" name="radio" id="radio22" value="radio" />
      06.15 PM</th>
    </tr>
  <tr>
    <th align="center"><input type="radio" name="radio" id="radio11" value="radio" />
11.45 

        <label for="radio11"></label>
AM</th>
    <th align="center"><input type="radio" name="radio" id="radio23" value="radio" />
      02.30 PM</th>
    <th align="center"><input type="radio" name="radio" id="radio23" value="radio" />
      06.30 PM</th>
    </tr>
  <tr>
    <th align="center">&nbsp;</th>
    <th align="center"><input type="radio" name="radio" id="radio24" value="radio" />
      02.45 PM</th>
    <th align="center"><input type="radio" name="radio" id="radio24" value="radio" />
    06.45 PM</th>
    </tr>
  <tr>
    <th align="center">&nbsp;</th>
    <th align="center"><input type="radio" name="radio" id="radio25" value="radio" />
      03.00 PM</th>
    <th align="center"><input type="radio" name="radio" id="radio25" value="radio" />
      07.00 PM</th>
    </tr>
  <tr>
    <th align="center">&nbsp;</th>
    <th align="center"><input type="radio" name="radio" id="radio26" value="radio" />
      03.15 PM</th>
    <th align="center"><input type="radio" name="radio" id="radio26" value="radio" />
      07.15 PM</th>
    </tr>
  <tr>
    <th align="center">&nbsp;</th>
    <th align="center"><input type="radio" name="radio" id="radio27" value="radio" />
      03.30PM</th>
    <th align="center"><input type="radio" name="radio" id="radio27" value="radio" />
      07.30PM</th>
    </tr>
  <tr>
    <th align="center">&nbsp;</th>
    <th align="center"><input type="radio" name="radio" id="radio28" value="radio" />
      03.45 PM</th>
    <th align="center"><input type="radio" name="radio" id="radio16" value="radio" />
07.45PM</th>
    </tr>
  <tr>
    <th colspan="3" align="center"><input type="submit" name="btnapp"  method="post" id="btnapp" value="Click Here to Continue" /></th>
    </tr>
      </table>
    </form>
  </div>
</div>
<!-- ####################################################################################################### -->

</body>
</html>
