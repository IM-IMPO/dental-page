<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$service = $_POST['service'];

//Data base connection
$conn = new mysqli('localhost', 'root', ' ', 'appointments');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into appointments(name, email, phone, date, time, service)
    values(?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sssiss",$name, $email, $phone, $date, $time, $service);
  $stmt->execute();
  echo "registration sucessful";
  $stmt->close();
  $conn->close();
}

?>
