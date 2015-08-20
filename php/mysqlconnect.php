<html>
<head>
</head>
<body>
<?php
if (isset($_POST['submit'])){

$dbcon = mysql_connect("localhost","root", "");
   if (!$dbcon) {
die( "Unable to connect to the " . mysql_error() );
}
else{
mysql_select_db("companydb", $dbcon);

$sql = "INSERT INTO CompanyDetaills IF NOT EXISTS (name, company, address, telephone, email, Notes) VALUES ('$_POST[txtname]', '$_POST[txtcompany]', '$_POST[txtaddress]', '$_POST[txtphone]', '$_POST[txtemail]', '$_POST[txtnote]')";

mysql_query($sql,$dbcon);	
}
mysql_close($dbcon);
}
?>

</body>
</html>