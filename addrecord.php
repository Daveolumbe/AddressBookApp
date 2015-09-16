<html>
<head>
<meta charset="UTF-8">
<title>Add</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">

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
<div class="well well-sm"> <h1 class="text-center">Add New Contact</h1> </div>
<div class="container"><!-- /.This is the main DIV tag -->

<ul class="breadcrumb">
    <li><a href="index.html">Home</a></li>
    <li><a href="#">Add</a></li>
   
</ul>

<div class="row">
<div class="col-md-6 col-sm-offset-3">
<form id="myForm" action="<?=$_SERVER['PHP_SELF']?>" onsubmit="return validateForm()" method="post" name="myForm">
 
 <div class="form-group">
  <label class="control-label" for="name">Name: <span id="nameDetails" class="text-danger">(*)</span></label>
  <input id="txtname" name="txtname" type="text" placeholder="Enter Your Name" class="form-control">
  <span id="namex" class="text-danger"> </span>
</div>
 <div class="form-group">
  <label class="control-label" for="inputSuccess1">Company:</label>
  <input type="text" class="form-control" placeholder="Enter Company Name" name="txtcompany">
</div>
 <div class="form-group">
  <label class="control-label" for="inputSuccess1">Address:</label>
  <input type="text" class="form-control" placeholder="Enter Company Address" name="txtaddress" >
</div>
 <div class="form-group">
  <label class="control-label" for="telephone">Telephone: <span id="phoneDetails" class="text-danger">(*)</span></label>
  <input id="txtphone" type="text" placeholder="Enter Telephone Number" class="form-control" name="txtphone" ><span id="phonex" class="text-danger"> </span>
</div>
<div class="form-group">
  <label class="control-label" for="inputSuccess1">Email:</label>
  <input type="email" class="form-control" placeholder="Enter Your Email" name="txtemail" >
</div>
<div class="form-group">
  <label class="control-label" for="inputSuccess1">Notes:</label>
 <textarea class="form-control" rows="3" placeholder="Notes" name="txtnote"></textarea>
</div>
  <div class="form-group">
        <div class="col-xs-9 col-xs-offset-3">
            <div id="messages"></div>
        </div>
    </div>
<div class="form-group">
<input type="submit" name="submit" value="ADD CONTACT" class="btn btn-primary">

</div>
<div id="ack"></div>

</form>
<?php
if (isset($_POST['submit'])){
$dbhost  = 'localhost';
$dbname  = 'companydb';
$dbuser  = 'root';
$dbpass  = '';
$dbcon = mysql_connect($dbhost, $dbuser, $dbpass);
   if (!$dbcon) {
die( 'Unable to connect to the ' . mysql_error() );
}
	
mysql_select_db($dbname, $dbcon);

$sql = "INSERT INTO CompanyDetails (name, company, address, telephone, email, Notes) VALUES ('$_POST[txtname]', '$_POST[txtcompany]', '$_POST[txtaddress]', '$_POST[txtphone]', '$_POST[txtemail]', '$_POST[txtnote]')";

if (!mysql_query($sql,$dbcon))
{
    die('Error: ' . mysql_error());
}
else{
echo "Congratulations your record has been registered";
}
}
?>

</div>
</div>
</div>
 

     <footer class="footer"><!-- /.This is the Fixed Footer Section -->
      <div class="container">
        <p class="text-muted text-center">ADDRESS BOOK APP</p>
      </div>
    </footer>
    

</body>

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Form Validation -->
<script src="css/assets/js/jquery.validate.js"></script> 

<script src="css/assets/js/jquery.validate.js"></script>
<script>
function validateForm() {
    var name = document.forms["myForm"]["txtname"].value;
	 var phone = document.forms["myForm"]["txtphone"].value;
    if (name == null || name == "") {
		var error = document.getElementById("namex");
	    error.innerHTML = "Name is required";
        return false;
    }
	
	 if (phone == null || phone == "") {
        var error = document.getElementById("phonex");
	    error.innerHTML = "Telephone is required";
        return false;
    }
}
</script> 
        
</html>
