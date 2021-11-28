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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. welcome to GenesisPro.</h1>
    

<div class="container">
    <form action="phpSearchOption.php" method="post">
      <div class="input-group mb-3">
      <label class="input-group-text" for="inputGroupSelect01">Search by:</label> 
      <select class="form-select" id="inputGroupSelect01" name="column">
        <option value="CustomersID">Customers ID</option>
        <option value="FirstName">First Name</option>
        <option value="LastName">Last Name</option>
        <option value="PhoneNumber">Phone Number</option>
        <option value="Email">Email</option>
      </select>
      <br/>
	  </div>
	  
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="search" placeholder="Search Customer" autocomplete="off" required="yes"
        aria-describedby="button-addon2" pattern=".{5,}" title="5 or more characters"/>
        <br />
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" class="btn btn-success">Search Customer</button>
      </div>
    </form>
	
	<p>
        <a href="new_policy.php" class="btn btn-success">Capture New Policy</a>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>