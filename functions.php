<?php
// define variables and set to empty values
$sidErr = $fnameErr = $lnameErr = $mobileErr = "";
$sid = $fname = $lname =  $mobile = "";
$d = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  


    
  
  
    if (empty($_POST["sid"])) {
    $sidErr = "Student ID is required";
  } elseif (!preg_match("/^s+[1-9]{7}$/", ($_POST["sid"]) )) {
    $sidErr = "Student ID is wrong format, s folowed by 7 numbers.";
  }
  else {
    $sid = test_input($_POST["sid"]);
  }
  
  if (empty($_POST["fname"])) {
    $fnameErr = "First Name is required";
  } elseif (!preg_match("/[A-Z]{1}+[A-Za-z]{1,}$/", ($_POST["fname"]) )) {
    $fnameErr = "First Name is wrong format, First Letter Capital followed by letters.";
  }
  else {
    $fname = test_input($_POST["fname"]);
  }
  
  if (empty($_POST["lname"])) {
    $lnameErr = "Last Name is required";
  } elseif (!preg_match("/[A-Z]{1}+[A-Za-z]{1,}$/", ($_POST["lname"]) )) {
    $lnameErr = "Last Name is wrong format, First Letter Capital followed by letters.";
  }
  else {
    $lname = test_input($_POST["lname"]);
  }
  
  if (empty($_POST["mobile"])) {
    $mobileErr = "Mobile is required";
  } elseif (!preg_match("/[0]{1}+[4]{1}+[0-9]{8}$/", ($_POST["mobile"]) )) {
    $mobileErr = "Mobile is wrong format, 04 followed by 8 numbers.";
  }
  else {
    $mobile = test_input($_POST["mobile"]);
  }
  

  if ($sidErr =="" && $fnameErr=="" && $lnameErr=="" && $mobileErr==""){
    
    echo "<script>alert('Booking created successfully! you will now be redirected to the home page');document.location='index.php'</script>";
  }
  
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>
