<?php

include ('dbConnection.php');

//Handle user data [submitted via form]
//Retrieve values through POST


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$new_orgID = $_POST["orgID"];
$new_orgName = $_POST["orgName"];
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
$sqlQuery = "select mobileNo from orgrep";

//execute the query
$ret = $con->query($sqlQuery);

$flag = 0;
if ($ret == TRUE) {
    while ($row = $ret->fetch_assoc() )
    {
        if ($new_mobileNo == $row["mobileNo"])
            $flag = 1; //organization rep alrd exists
    }

}
else
echo "<br>Query execution not successful";

if ($flag ==1) {
    echo "<script>
    alert('Organization representative is already registered!');
    window.location.href='add-org-rep-form.php';
    </script>";

} else {
    //formulate the query
    //password need to be generated here by Z
    $sqlQuery = "insert into orgrep values ('$new_username', 'password', '$new_fullName',
    '$new_mobileNo', '$new_jobTitle', '$new_orgID', '$new_orgName')";

    //execute the query
    $ret = $con->query($sqlQuery);

    if ($ret == TRUE)
    echo "<script>
    alert('Organization representative added successfully');
    window.location.href='organizations/kementerian-kesihatan-malaysia.php';
    </script>";
    else
    echo "<script>
    alert('Organization representative not added, please try again');
    window.location.href='add-org-rep-form.php';
    </script>";
}
$con->close();
?>