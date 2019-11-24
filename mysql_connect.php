<?php
$name = filter_input(INPUT_POST, 'name');
$email= filter_input(INPUT_POST, 'email');
$contact= filter_input(INPUT_POST, 'contact');
$address= filter_input(INPUT_POST, 'address');

if (!empty($name)){
if (!empty($email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "colleges";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}
else{
$sql = "INSERT INTO students (student_name,student_email,student_contact,student_address )
values ('$name','$email','$contact','$address')";


if ($conn->query($sql))
{
echo "data succesfully inserted";
}
else{
echo "Error: ". $sql ." ". $conn->error;
}
$conn->close();
}
}
else{
echo "Insertion Failed";
die();
}
}
else{
echo " Some Fields are Blank....!!";
die();
}
?>