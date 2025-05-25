<?php include "header.php"; ?>
<div id="bodycontainer">
		<div id="leftcontainer">
			<div id="welcomezone">
			
<h1><span>Add Server</span></h1>
<div style="padding:10px">
          <div> <br>
            <form action="" method="post">
              <table width="97%" cellpadding="7" cellspacing="0">
                <tbody>
				
				 <tr>
                  <td class="body" id="Address" valign="top" align="left"><strong>Server name : </strong></td>
                  <td valign="top" align="left"><input name="server" size="30" type="text" required></td>
                </tr>
			   
                <tr>
                  <td></td>
                  <td><input name="submit" class="button" value="Add Server" type="submit"></td>
                </tr>
              </tbody></table>
            </form>
          </div>
			
			</div>
			
			
				<div class="clear"></div>
				</div>
			</div>
			
		
		<div class="clear"></div>
	</div>
	<?php
if(isset($_POST['submit']))
{
$server=$_POST['server'];

mysql_query("insert into server(servername)values('$server')");
if (!file_exists("$server")) {
    mkdir("$server", 0777, true);
}
echo "<script type='text/javascript'>alert('Server added');</script>";
}
	include "footer.php"; ?>
	