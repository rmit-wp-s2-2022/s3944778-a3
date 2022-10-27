<!DOCTYPE html>
<html lang="en">
    <head>
        <title>s3944778 - a3</title>
        <meta charset="utf-8">
        <meta name="author" content="Michael">
        <meta name="description" content="home page">

        <link rel="stylesheet" type="text/css" href="a3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>  
        <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

        <noscript>This web browser does not support Javascript</noscript>
    </head>
    <main>
    <body> 
    <h1>create</h1>

        

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

            <h2>Book An Apointment</h2>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <p>Student ID: <input id="sid" name="sid" value="<?php echo $sid;?>" type="text" required><span class="error">* <?php echo $sidErr;?></span></p>
                            <p>First Name: <input id="fname" name="fname" value="<?php echo $fname;?>" type="text"  required><span class="error">* <?php echo $fnameErr;?></span></p>
                            <p>Last Name: <input id="lname" name="lname" value="<?php echo $lname;?>" type="text"  required><span class="error">* <?php echo $lnameErr;?></span></p>
                            <p>Mobile: <input id="mobile" name="mobile" value="<?php echo $mobile;?>" type="text"  required><span class="error">* <?php echo $mobileErr;?></span></p>
                            
                            <p><button formnovalidate>Submit </button> 
                                <input type="reset" name="reset">
                            </p>
                        </form>


        </main>
    </body>

    <footer>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="create.php">Create</a></li>
        </ul>
    </footer>

</html>