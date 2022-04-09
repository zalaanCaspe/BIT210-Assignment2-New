<?php
session_start();
include ('dbConnection.php');

//Handle user data [submitted via form]
//Retrieve values through POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_orgID = $_POST["org-id"];
    $new_orgName = $_POST["org-name"];
    $new_title = $_POST["title"];
    $new_fromDate = $_POST["fromDate"];
    $new_toDate = $_POST["toDate"];
    $new_desc = $_POST["desc"];
} else {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Data has not been submitted")';  
    echo '</script>';  
}

// get the integer part of maximum ID number
$queryMaxID = "SELECT MAX(SUBSTRING(appealID, 2, LENGTH(appealID) - 1)) AS id FROM appeal";
$resMaxID = $con->query($queryMaxID);
while ($row = $resMaxID->fetch_assoc()) {
    $maxID = $row['id'];
}

// incremented new ID
$new_ID = "A".sprintf('%05d', (int) $maxID + 1);

// formulate query
$queryCreateAppeal = "INSERT INTO appeal VALUES ('$new_ID', '$new_orgID', '$new_orgName', '$new_title', 
'$new_fromDate', '$new_toDate', '$new_desc', 'Incomplete')";

//execute the query
$ret = $con->query($queryCreateAppeal);

if ($ret == TRUE) {
    $_SESSION['message'] = "success"; // message to show
    header('Location:orgRepDashboard.php');
}
else {
    $_SESSION['message'] = "failed";
    header('Location:orgRepDashboard.php');
}

$con->close();
?>