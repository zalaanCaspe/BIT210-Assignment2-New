<?php

include ('dbConnection.php');

//Handle user data [submitted via form]
//Retrieve values through POST


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$new_outcome = $_POST["outcome"];


} else {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Data has not been submitted")';  
    echo '</script>';  
}



//formulate the query
//need to retrieve appealID also by Z
$sqlQuery = "update appeal set outcome = '$new_outcome' where appealID = 'appealID'";

//execute the query
$ret = $con->query($sqlQuery);

if ($ret == TRUE)
echo "<script>
alert('Appeal outcome changed successfully');
window.location.href='shelterHomeAppeals.php';
</script>";
else
echo "<script>
alert('Appeal outcome not changed, please try again');
window.location.href='shelterHomeAppeals.php';
</script>";

$con->close();
?>