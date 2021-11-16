<!DOCTYPE html>
<html>
<head>
<title>ZakaSoft : Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
   table, th, td {
    border: 1px solid red;
    width: 80%;
    border-collapse: collapse;
    text-align: center;
    padding: 15px;
    border-bottom: 1px solid #ddd;
    tr:hover {background-color: yellow;}
    background-color: #04AA6D;

}
</style>
</head>
<body>

<div class="sidebar">
        <a class="active" href="homepage.html">Home</a>
        <a href="NewCustomer.html">New Customer</a>
        <a href="editcustomer.html">Edit Customer</a>
        <a href="deletecustomer.html">Delete Customer</a>
        <a href="newaccount.html">New Account</a>
        <a href="editaccount.html">Edit Account</a></a>
        <a href="deleteaccount.html">Delete Account</a>
        <a href="deposit.html">Deposit</a>
        <a href="withdrawal.html">Withdrawal</a>
        <a href="transferfunds.html">Transfer Funds</a>
        <a href="changepasswords.html">Change Passwords</a>
        <a href="balanceenquiry.html">Balance Enquiry</a>
        <a href="ministatement.html">Mini Statement</a>
        <a href="customisedstatements.html">Customised Statements</a>
        <a href="logout.html">Log out</a>
</div>

<div class="content-homepage">
        <h2>Welcome to ZakaSoft Bank System</h2>

<?php

$search = $_POST['search'];
$column = $_POST['column'];

$search = $_POST['search'];
$servername = "localhost";
$username = "zakabak-admin";
$password = "";
$dbname = "Zakabank";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * FROM customers where $column like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
echo "<table>
<tr>
<th>User Id</th>
<th>Customers ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Phone Number</th>
<th>Email</th
</tr>";

while($row = $result->fetch_assoc() ){
    echo "<tr>";
    echo "<td>" . $row['UserId'] . "</td>";
    echo "<td>" . $row['CustomersID'] . "</td>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['PhoneNumber'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "</tr>";
    }

echo "</table>";


} else {
        echo "Search record not found, Please search again";
}

$conn->close();

?>
    </div>
</body>
</html>
