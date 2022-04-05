<?php

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

/*
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
            $flag = 1; //orgrep alrd exists
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
    //password needs to be generated here by Z
    $sqlQuery = "insert into orgrep values ('$new_username', 'password', '$new_fullName', '$new_mobileNo', 
    '$new_jobTitle', '$new_orgID')";

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
    window.location.href='organizations/kementerian-kesihatan-malaysia.php';
    </script>";
*/

//formulate the query
//appealID needs to be generated here by Z
$sqlQuery = "insert into appeal values ('appealID', '$new_orgID', '$new_orgName', '$new_title', '$new_fromDate', 
'$new_toDate', '$new_desc', 'Incomplete')";

//execute the query
$ret = $con->query($sqlQuery);

if ($ret == TRUE)
echo "<script>
alert('Appeal added successfully');
window.location.href='shelterHomeAppeals.php';
</script>";
else
echo "<script>
alert('Appeal not added, please try again');
window.location.href='shelterHomeAppeals.php';
</script>";
$con->close();
?>