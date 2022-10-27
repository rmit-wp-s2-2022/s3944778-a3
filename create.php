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
    <h1>Create</h1>

    <?php include_once "functions.php";?>  


            <h2>Student Enrolment</h2>
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