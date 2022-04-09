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
        $_SESSION["fullName"] = $row["fullName"];  
        $_SESSION["username"] = $row["username"];
        $_SESSION["mobileNo"] = $row["mobileNo"];            
        $_SESSION["title"] = $row["jobTitle"];
        $_SESSION["orgID"] = $row["orgID"]; 
        $_SESSION['admin'] = $row['admin'];
        if ($_SESSION['admin'] == 1) {
            header('Location:adminDashboard.php');
        } else {
            header('Location:orgRepDashboard.php');
        }
    }
} elseif ($resultApp -> num_rows > 0) {
    while ($row = $resultOrgRep->fetch_assoc()) {               
        $_SESSION["title"] = $row["jobTitle"];} 
    echo "<script>
         alert('Applicant login successful!');
         window.location.href='users/syed.jahari0749.php';
         </script>";
} else {
    echo "<script>
         alert('Login failed, please try again!');
         window.location.href='login.php';
         </script>";
}
    
$con->close();
?>