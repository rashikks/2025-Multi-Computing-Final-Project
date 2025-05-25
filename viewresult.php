<?php include "header.php"; ?>
<div id="bodycontainer">
		<div id="leftcontainer">
			<div id="welcomezone">
<h1><span>View Result</span></h1>


          <div>
				<input type="button" value="Save PDF Result " onclick="printDiv()" class="button" >
				<section id="GFG">
		  
<?php
$uname=$_SESSION['uname'];
if($_SESSION['cluname']!='') 
{
	 $j=mysql_query("select * from result");
}
else
{
	 $j=mysql_query("select * from result where usid='$uname'");
}
			 
  while($t=mysql_fetch_array($j))
			  {
			  $uname=$t['usid'];
			  $rtype=$t['rtype'];
echo '<table align="left" cellpadding="10" cellspacing="0" border="1" width="100%">';			  
echo "<thead><tr><td>Name</td><td colspan='2'>$uname</td></tr>";			  
echo "<tr><td>Result type</td><td  colspan='2'>$rtype</td></tr>";		
echo "<tr><td>Subject</td><td>Mark</td><td>Result</td></tr></thead> <tbody>";			  


$sname1=$t['sname1'];
$smark1=$t['smark1'];
$sresult1=$t['sresult1'];

if($smark1>39)
{
$sresult1="PASS";
}
else
{
$sresult1="FAIL";
}

$sname2=$t['sname2'];
$smark2=$t['smark2'];
$sresult2=$t['sresult2'];

if($smark2>39)
{
$sresult2="PASS";
}
else
{
$sresult2="FAIL";
}

$sname3=$t['sname3'];
$smark3=$t['smark3'];
$sresult3=$t['sresult3'];
if($smark3>39)
{
$sresult3="PASS";
}
else
{
$sresult3="FAIL";
}

$sname4=$t['sname4'];
$smark4=$t['smark4'];
$sresult4=$t['sresult4'];
if($smark4>39)
{
$sresult4="PASS";
}
else
{
$sresult4="FAIL";
}

$sname5=$t['sname5'];
$smark5=$t['smark5'];
$sresult5=$t['sresult5'];	
if($smark5>39)
{
$sresult5="PASS";
}
else
{
$sresult5="FAIL";
}		 
			 
echo "<tr><td>$sname1</td><td>$smark1</td><td>$sresult1</td></tr>";
echo "<tr><td>$sname2</td><td>$smark2</td><td>$sresult2</td></tr>";
echo "<tr><td>$sname3</td><td>$smark3</td><td>$sresult3</td></tr>";
echo "<tr><td>$sname4</td><td>$smark4</td><td>$sresult4</td></tr>";
echo "<tr><td>$sname5</td><td>$smark5</td><td>$sresult5</td></tr>";
			  
			  }
echo '</tbody></table>'; 
?>
  </section>

          </div>


				</div>
			</div>
			
		
	</div>
		<div class="clear"></div>

<?php 
include "footer.php"; ?>
	