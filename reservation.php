
[.ShellClassInfo]
LocalizedResourceName=@%SystemRoot%\system32\shell32.dll,-21769
IconResource=%SystemRoot%\system32\imageres.dll,-183
<html>
<meta charset="UTF-8" />
<head>

</head>
<?php


$email = $_POST["email"];
$id = $_POST["id"];
$password=$_POST["password"]



$servername = "localhost";
$username = "root";
$password = "";
$dbname="Library";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " );
} 

$sql = "INSERT INTO users (email,id,password ) VALUES ('$user_name','$email ','$password')";

if ($conn->query($sql) == TRUE) {
  echo "welcome to our library"; 


  }
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); 


?>
</body>
</html>