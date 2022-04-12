<?php
session_start();
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
$sqlQuery = "UPDATE appeal SET outcome = '$new_outcome' WHERE appealID = '".$_SESSION['appealID']."'";

//execute the query
$ret = $con->query($sqlQuery);

if ($ret == TRUE) {
    unset($_SESSION['update-outcome']);
    header('Location:appeal.php?id='.$_SESSION['appealID']);
}
else
echo "<script>
alert('Appeal outcome not changed, please try again');
window.location.href='history.back(-1)';
</script>";

$con->close();
?>