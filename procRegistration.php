<?php

include ('dbConnection.php');

//Handle user data [submitted via form]
//Retrieve values through POST


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$new_orgName = $_POST["org-name"];
$new_fullName = $_POST["fullName"];
$new_idNo = $_POST["idNo"];
$new_householdIncome = $_POST["householdIncome"];
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


//do not register if user already exists
//process all the rows

//formulate the query for applicant idNo
$sqlQuery = "select idNo from applicant";

//execute the query
$ret = $con->query($sqlQuery);

//formulate the query for orgID
$sqlOrgQuery = "select * from organization where orgName = '$new_orgName'";

//execute the query for orgID
$resultOrg = $con->query($sqlOrgQuery);

$rowOrg = mysqli_fetch_array($resultOrg);
$new_orgID = $rowOrg['orgID'];

$flag = 0;
if ($ret == TRUE) {
    while ($row = $ret->fetch_assoc() )
    {
        if ($new_idNo == $row["idNo"])
            $flag = 1; //applicant alrd exists
    }

}
else
echo "<br>Query execution not successful";

if ($flag ==1) {
    echo "<script>
    alert('Account already exists, try logging in instead!');
    window.location.href='login.php';
    </script>";

} else {
    //formulate the query
    //username and passwd need to be generated here by Z
    $sqlQuery = "insert into applicant values ('$new_orgName', '$new_fullName', '$new_idNo', '$new_householdIncome', 
    '$new_address1', '$new_address2', '$new_city', '$new_states', '$new_zipCode', '$new_orgID', 'uname', 'passwd')";

    //execute the query
    $ret = $con->query($sqlQuery);

    if ($ret == TRUE)
    echo "<script>
    alert('Applicant registration successful');
    window.location.href='users/syed.jahari0749.php';
    </script>";
    else
    echo "<script>
    alert('Applicant registration failed, please try again');
    window.location.href='register.php';
    </script>";
}
$con->close();
?>