<html>
<head>
<title>ENCODING AND DECODING</title>
</head>
<body>

<?php 
// file_get_contents() returns the file in a and parse to string $readFile
$readFile = file_get_contents("hello.txt");

// Encoding and decoding are done by the same function str_rot13()
$decoded = str_rot13(str_rot13($readFile));

$encoded = str_rot13($readFile);

echo $decoded . "<br><br>\n";
echo $encoded ."<br>\n";
?>
</body>
</html>