<!DOCTYPE html>
<html>
<body>
<?php 
$dblocation='localhost';
$dbfname = '';
$dblname = '';
$dbuser = "root";	// Username 
$dbpasswd = "";	// Password 
$dbgrade = "";
$dbcountry = "";
$dbcnx = @mysql_connect($dblocation,$dbfname, $dblname, $dbuser,$dbpasswd, $dbgrade, $dbcountry,); 
if (!$dbcnx) // If the handle is 0, the connection is not established 
{ 
echo("<P> At the moment, the database server is not available, so the correct page display is not possible.</P>"); 
exit(); 
} 
 ?>
</body>
</html>