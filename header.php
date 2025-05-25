<?php
date_default_timezone_set('Asia/Kolkata');
ob_start();
error_reporting(0);
session_start();
include "config.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>MultiCloud</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="files/style.css" rel="stylesheet" type="text/css">
<script>
        function printDiv() {
            let divContents = document.getElementById("GFG").innerHTML;
            let printWindow = window.open('', '', 'height=500, width=500');
            printWindow.document.open();
            printWindow.document.write(`
                <html>
                <head>
                    <title>Save Reult</title>
                    <style>
                        body { font-family: Arial, sans-serif; }
                        h1 { color: #333; }
						table {
                    width: 100%;
                    border-collapse: collapse;
                }
                table, th, td {
                    border: 1px solid black;
                }
                th, td {
                    padding: 8px;
                    text-align: left;
                }

                    </style>
                </head>
                <body>
                    ${divContents}
                </body>
                </html>
            `);
            printWindow.document.close();
            printWindow.print();
        }
    </script>
	
</head>
<body>
<div id="layout">
<div id="topzone">
		<div id="logo">
			<a href="#">Multicloud</a>
		</div>
	</div>
	
	<div id="bannerzone">
	</div>
	<div id="topmenu">
		<ul>
		<?php
		if(($_SESSION['uname']=='')&&($_SESSION['cluname']==''))
		{
		echo '<li><a href="user-register.php" class="current">User Register</a></li>
        <li><a href="index.php" class="current">User Login</a></li>
        <li><a href="csp-register.php" class="current">CSP Register</a></li>
        <li><a href="csp-login.php" class="current">CSP Login</a></li>';
		}
		else if($_SESSION['uname']!='')
		{
		echo '<li><a href="viewresult.php" class="current">View Result</a></li>';
		echo '<li><a href="view_syllabus.php" class="current">View Syllabus</a></li>';
		echo '<li><a href="add_hours.php" class="current">Add Cloud working hours</a></li>';
		echo '<li><a href="view_working_hours.php" class="current">View Cloud working hours</a></li>';
		echo '<li><a href="logout.php" class="current">Logout</a></li>';
		}
		else if($_SESSION['cluname']!='')
		{
		echo '<li><a href="addserver.php" class="current">Add Server</a></li>';
		echo '<li><a href="viewserver.php" class="current">View Server</a></li>';
		echo '<li><a href="addresult.php" class="current">Add Result</a></li>';
		echo '<li><a href="viewresult.php" class="current">View Result</a></li>';
		echo '<li><a href="dresult.php" class="current">Department Result</a></li>';
		echo '<li><a href="upload_file.php" class="current">Upload File</a></li>';
		echo '<li><a href="view_working_hours.php" class="current">View Cloud working hours</a></li>';
		echo '<li><a href="view_traffic.php" class="current">View traffic</a></li>';
		echo '<li><a href="graph.php" class="current">Graph</a></li>';
		echo '<li><a href="logout.php" class="current">Logout</a></li>';
		}
		?>
		
			<div class="clear"></div>
		</ul>
	</div>