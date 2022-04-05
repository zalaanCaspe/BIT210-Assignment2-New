<?php

include ('dbConnection.php');

//Handle user data [submitted via form]
//Retrieve values through POST


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$new_orgName = $_POST["org-name"];
$new_address1 = $_POST["address1"];
$new_address2 = $_POST["address2"];
$new_city = $_POST["city"];
$new_states = $_POST["org-state"];
$new_zipCode = $_POST["zipCode"];


} else {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Data has not been submitted")';  
    echo '</script>';  
}


//do not register if user already exists
//process all the rows

//formulate 
$sqlQuery = "select orgName from organization";

//execute the query
$ret = $con->query($sqlQuery);

$flag = 0;
if ($ret == TRUE) {
    while ($row = $ret->fetch_assoc() )
    {
        if ($new_orgName == $row["orgName"])
            $flag = 1; //organization alrd exists
    }

}
else
echo "<br>Query execution not successful";

if ($flag ==1) {
    echo "<script>
    alert('Organization is already registered!');
    window.location.href='organizations.php';
    </script>";

} else {
    //formulate the query
    //orgID need to be generated here by Z
    $sqlQuery = "insert into organization values ('orgID', '$new_orgName', '$new_address1', '$new_address2', 
    '$new_city', '$new_states', '$new_zipCode')";

    //execute the query
    $ret = $con->query($sqlQuery);

    if ($ret == TRUE)
    echo "<script>
    alert('Organization added successfully');
    window.location.href='organizations/mercy-malaysia.php';
    </script>";
    else
    echo "<script>
    alert('Organization not added, please try again');
    window.location.href='organizations.php';
    </script>";
}
$con->close();
?>