<?php
session_start();
include ('dbConnection.php');

//Handle user data [submitted via form]
//Retrieve values through POST


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_disDate = $_POST["disDate"];
    $new_cashAmount = $_POST["cashAmount"];
    $new_goodsType = $_POST["goodsType"];
    $new_otherType = $_POST["otherType"];
    $new_quantity = $_POST["quantity"];
    $new_goodsDesc = $_POST["goodsDesc"];
    $new_address1 = $_POST["address1"];
    $new_address2 = $_POST["address2"];
} else {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Data has not been submitted")';  
    echo '</script>';  
}


//formulate the query
$sqlQuery = "INSERT INTO disbursement VALUES ('".$_SESSION['appealID']."', '".$_SESSION['applicant-id']."', '$new_disDate', '$new_cashAmount',
'$new_goodsType', '$new_otherType', '$new_quantity', '$new_goodsDesc', '$new_address1', '$new_address2')";

//execute the query
$ret = $con->query($sqlQuery);

if ($ret == TRUE) {
    $_SESSION['update-outcome'] = true;
    header("Location:appeal.php?id=".$_SESSION['appealID']);
}
else
    echo "<script>
    alert('Disbursement not added, please try again');
    window.location.href='disbursement.php';
    </script>";
$con->close();
?>