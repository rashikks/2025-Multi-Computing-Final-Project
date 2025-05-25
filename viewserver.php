<?php include "header.php"; ?>
<div id="bodycontainer">
		<div id="leftcontainer">
			<div id="welcomezone">
<h1><span>View server</span></h1>

<div style="padding:10px">
          <div>
		  <?php if($_SESSION['cluname']!='') { ?>

            <table align="left" cellpadding="10" cellspacing="0" border="1" width="100%">
			<tr><td>S.no</td><td>Server</td></tr>
			<?php
			$g=mysql_query("select * from server");

			while($t=mysql_fetch_array($g))
			{
			$hour=$t['servername'];
			$hid=$t['srid'];
			$user=$t['user'];
			echo "<tr><td>$hid</td><td>$hour</td></tr>";
			}
			?>
			</table>
			

			<?php
			}
			?>
          </div>
			
			</div>
			
			
				<div class="clear"></div>
				</div>
			</div>
			
		
		<div class="clear"></div>
	</div>
<?php 

include "footer.php"; ?>
	