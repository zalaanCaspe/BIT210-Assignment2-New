<?php
session_start();
include ('dbConnection.php');

//Handle user data [submitted via form]
//Retrieve values through POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$new_orgID = explode(",", $_POST["org"])[0];
$new_orgName = explode(",", $_POST["org"])[1];
$new_username = $_POST["username"];
$new_fullName = $_POST["fullName"];
$new_mobileNo = $_POST["mobileNo"];
$new_jobTitle = $_POST["jobTitle"];

} else {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Data has not been submitted")';  
    echo '</script>';  
}


//do not register if user already exists
//process all the rows
//formulate 
$sqlQuery = "SELECT * FROM orgrep WHERE username = '$new_username' OR mobileNo = '$new_mobileNo'";
//execute the query
$ret = $con->query($sqlQuery);


$flag = "";
if ($ret == true) {
    while ($row = $ret->fetch_assoc() ) {
        if ($new_username == $row['username'])
            $flag = "username-taken";
        elseif ($new_mobileNo == $row["mobileNo"])
            $flag = "mobile-exists";
    }

}
else
    echo "<br>Query execution not successful";

if ($flag) {
    $_SESSION['message'] = $flag;
    echo "<script>history.back(-1)</script>";
} else {
    //formulate the query
    $sqlQuery = "insert into orgrep values ('$new_username', 'Welcome123', '$new_fullName',
    '$new_mobileNo', '$new_jobTitle', '$new_orgID', '$new_orgName', 0)";

    //execute the query
    $ret = $con->query($sqlQuery);

    if ($ret == TRUE)
        header('Location:email.php');
    else  {
        $_SESSION['message'] = "unknown";
        header('Location:add-org-rep-form.php');
    }
}
$con->close();
?>