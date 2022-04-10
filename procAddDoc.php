<?php
session_start();
include ('dbConnection.php');

//Handle user data [submitted via form]
//Retrieve values through POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_filename = $_POST["filename"];
    $new_description = $_POST["description"];
} else {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Data has not been submitted")';  
    echo '</script>';  
}

// get the integer part of maximum ID
$queryMaxID = "SELECT MAX(SUBSTRING(documentID, 2, LENGTH(documentID) - 1)) AS id FROM document";
$resMaxID = $con->query($queryMaxID);
while ($row = $resMaxID->fetch_assoc()) {
    $maxID = $row['id'];
}
// incremented new num
$new_docID = "D".sprintf('%03d', (int) $maxID + 1);

$sqlQuery = "INSERT INTO document VALUES ('$new_docID', '$new_filename', '$new_description', '".$_SESSION['idNo']."')";

//execute the query
$ret = $con->query($sqlQuery);

if ($ret == TRUE) {
    $_SESSION['message'] = 'success';
    if ($_SESSION['applicant'] == false)
        header("Location:applicantDashboard.php?applicant=".$_SESSION['applicant-id']);
    header("Location:applicantDashboard.php");
}
else {
    $_SESSION['message'] = 'failed';
    echo "<script>history.back(-1)</script>";
}
$con->close();
?>