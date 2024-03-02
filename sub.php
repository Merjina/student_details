<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $stu_name = $_POST["stu_name"];
  $dob = $_POST["dob"];
  $email = $_POST["email"];
  $phone=$_POST["phone"];
  $gender = $_POST["gender"];
  $languages = implode(", ", $_POST["languages"]);
}
$sql = "INSERT INTO students(stu_name, dob, email, phone, gender, languages) VALUES ('$stu_name', '$dob', '$email', '$phone', '$gender', '$languages')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>