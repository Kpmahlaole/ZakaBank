<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    
	<form action="phpSearchOption.php" method="post"><br>
<input type="text" name="search" placeholder="Search Customer" autocomplete="off" required="yes"><br>

Search Option: <select name="column"><br><br>
    <option value="UserId">User ID</option>
    <option value="CustomersID">Customers ID</option>
    <option value="FirstName">First Name</option>
    <option value="LastName">Last Name</option>
    <option value="PhoneNumber">Phone Number</option>
    <option value="Email">Email</option><br>
    <option value="Gender">Gender</option><br>
    <option value="PhysicalAddress">Physical Address</option><br>
    <option value="Employer">Employer</option><br>
<input type ="submit">
	
	
	<p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>