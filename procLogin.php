<?php
session_start();

include ('dbConnection.php');

//Handle user data [submitted via form]
//Retrieve values through POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_name = $_POST["uname"];
    $login_passwd = $_POST["passwd"];
     
} else {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Data has not been submitted")';  
    echo '</script>';  
}

//formulate the query for org reps
$sqlOrgRepQuery = "select * from orgrep where username = '$login_name' AND password = '$login_passwd'";

//execute the query for org reps
$resultOrgRep = $con->query($sqlOrgRepQuery);

//formulate the query for applicants
$sqlAppQuery = "select * from applicant where username = '$login_name' AND password = '$login_passwd'";

//execute the query for applicants
$resultApp = $con->query($sqlAppQuery);

//process
if ($resultOrgRep -> num_rows > 0) {
    while ($row = $resultOrgRep->fetch_assoc()) { 
        $_SESSION["username"] = $row["username"];
        $_SESSION["fullName"] = $row["fullName"];  
        $_SESSION["mobileNo"] = $row["mobileNo"];            
        $_SESSION["title"] = $row["jobTitle"];
        $_SESSION["orgID"] = $row["orgID"]; 
        $_SESSION["orgName"] = $row["orgName"]; 
        $_SESSION['admin'] = $row['admin'];
        if ($_SESSION['admin'] == 1) {
            header('Location:adminDashboard.php');
        } else {
            $_SESSION["applicant"] = false;
            header('Location:orgRepDashboard.php');
        }
    }
} elseif ($resultApp -> num_rows > 0) {
    while ($row = $resultApp->fetch_assoc()) {  
        $_SESSION["orgName"] = $row["orgName"]; 
        $_SESSION["fullName"] = $row["fullName"]; 
        $_SESSION["idNo"] = $row["idNo"]; 
        $_SESSION["income"] = $row["householdIncome"]; 
        $_SESSION["address1"] = $row["address1"]; 
        $_SESSION["address2"] = $row["address2"]; 
        $_SESSION["city"] = $row["city"]; 
        $_SESSION["state"] = $row["state"]; 
        $_SESSION["zip"] = $row["zip"]; 
        $_SESSION["orgID"] = $row["orgID"]; 
        $_SESSION["username"] = $row["username"]; 
        $_SESSION["applicant"] = true;
        header('Location:applicantDashboard.php');
    }
} else {
    $_SESSION['message'] = 'invalid-login';
    header('Location:login.php');
}
    
$con->close();
?>