<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>View</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.js"></script>

<!-- FONT AWESOME -->
<link rel="stylesheet" href="font-awesome/css/font-awesome.css" />

</head>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><img src="img/cbk.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Address Book<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="addrecord.php">Add <span class="glyphicon glyphicon-pencil pull-right"></span> </a></li>
            <li><a href="editrecord.php">Edit <span class="glyphicon glyphicon-edit pull-right"></span></a></li>
            <li><a href="viewrecord.php">View <span class="glyphicon glyphicon-book pull-right"></span></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="delete.php">Delete <span class="glyphicon glyphicon-trash pull-right"></span></a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="well well-sm"> <h1 class="text-center">View Contacts</h1> </div>
<div class="container"><!-- /.This is the main DIV tag -->
<ul class="breadcrumb">
    <li><a href="index.html">Home</a></li>
    <li><a href="#">View</a></li>
   
</ul>

<?php

$dbhost  = 'localhost';
$dbname  = 'companydb';
$dbuser  = 'root';
$dbpass  = '';

$dbcon = mysql_connect($dbhost, $dbuser, $dbpass);
   if (!$dbcon) {
      die( 'Unable to connect to the ' . mysql_error() );
        }
	
mysql_select_db($dbname, $dbcon);
$sql = "SELECT * FROM CompanyDetails";
$myquery = mysql_query($sql,$dbcon);
if($myquery === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}


echo "<div class='table-responsive'><table class='table'>
<tr>
<th>Name</th>
<th>Company</th>
<th>Address</th>
<th>Telephone</th>
<th>Email</th>
<th>Notes</th>
</tr>";

while($records = mysql_fetch_array($myquery)){
	echo "<tr>";
	echo "<td>" . $records['name'] . "</td>";
	echo "<td>" . $records['company'] . "</td>";
	echo "<td>" . $records['address'] . "</td>";
	echo "<td>" . $records['telephone'] . "</td>";
	echo "<td>" . $records['email'] . "</td>";
	echo "<td>" . $records['Notes'] . "</td>";
	echo "</tr>";
	}
	
	echo "</table></div>";

mysql_close($dbcon);

?>
</div>
     <footer class="footer"><!-- /.This is the Fixed Footer Section -->
      <div class="container">
        <p class="text-muted text-center">ADDRESS BOOK APP</p>
      </div>
    </footer>
</body>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</html>
