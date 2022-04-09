<?php
session_start();
include ('dbConnection.php');

//Handle user data [submitted via form]
//Retrieve values through POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_orgName = $_POST["org-name"];
    $new_address1 = $_POST["address1"];
    $new_address2 = $_POST["address2"];
    $new_city = $_POST["city"];
    $new_states = $_POST["states"];
    $new_zipCode = $_POST["zipCode"];
    
} else {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Data has not been submitted")';  
    echo '</script>';  
}

// get the integer part of maximum ID number
$queryMaxID = "SELECT MAX(SUBSTRING(orgID, 4, LENGTH(orgID) - 3)) AS id FROM organization WHERE orgID LIKE 'ORG%'";
$resMaxID = $con->query($queryMaxID);
while ($row = $resMaxID->fetch_assoc()) {
    $maxID = $row['id'];
}

// incremented new ID
$newID = "ORG".sprintf('%03d', (int) $maxID + 1);

// create org
$sqlQuery = "INSERT INTO organization VALUES ('$newID', '$new_orgName', '$new_address1', '$new_address2', 
'$new_city', '$new_states', '$new_zipCode')";

//execute the query
$ret = $con->query($sqlQuery);

if ($ret == TRUE) {
    $_SESSION['message'] = "success"; // message to show
    header('Location:adminDashboard.php');
}
else {
    $_SESSION['message'] = "failed";
    header('Location:adminDashboard.php');
}

$con->close();
?>