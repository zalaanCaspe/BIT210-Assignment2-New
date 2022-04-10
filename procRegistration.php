<?php
session_start();
include ('dbConnection.php');

//Handle user data [submitted via form]
//Retrieve values through POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_orgID = explode(",", $_POST["org"], 2)[0];
    $new_orgName = explode(",", $_POST["org"], 2)[1];
    $new_fullName = $_POST["fullName"];
    $new_idNo = $_POST["idNo"];
    $new_householdIncome = $_POST["householdIncome"];
    $new_address1 = $_POST["address1"];
    $new_address2 = $_POST["address2"];
    $new_city = $_POST["city"];
    $new_states = $_POST["state"];
    $new_zipCode = $_POST["zipCode"];


} else {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Data has not been submitted")';  
    echo '</script>';  
}


//do not register if id already exists
//process all the rows

//formulate the query for applicant idNo
$queryIDNo = "SELECT * FROM applicant WHERE idNo = '$new_idNo'";
// execute
$ret = $con->query($queryIDNo);

// check if id exists
$flag = "";
if($ret == true) {
    while ($row = $ret->fetch_assoc()) {
        if($new_idNo == $row['idNo'])
            $flag = 'id-exists';
    }
}
else
    echo "<br>Query execution not successful";

// notify if id taken, continue otherwise
if ($flag) {
    $_SESSION['message'] = $flag;
    echo "<script>history.back(-1)</script>";
} else {
    // Username generation
    // username = U + incremented number
    // get the integer part of maximum number
    $queryMaxNum = "SELECT MAX(SUBSTRING(username, 2, LENGTH(username) - 1)) AS num FROM applicant";
    $resMaxNum = $con->query($queryMaxNum);
    while ($row = $resMaxNum->fetch_assoc()) {
        $maxNum = $row['num'];
    }
    // incremented new num
    $new_username = "U".sprintf('%03d', (int) $maxNum + 1);

    $sqlQuery = "INSERT INTO applicant VALUES ('$new_orgName', '$new_fullName', '$new_idNo', '$new_householdIncome', 
    '$new_address1', '$new_address2', '$new_city', '$new_states', '$new_zipCode', '$new_orgID', '$new_username', 'Welcome123')";

    //execute the query
    $ret = $con->query($sqlQuery);

    if ($ret == TRUE)
        header("Location:applicantDashboard.php");
    else {
        $_SESSION['message'] = 'unknown';
        echo "<script>history.back(-1)</script>";
    }
}
$con->close();
?>