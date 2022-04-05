<?php

include ('dbConnection.php');

//Handle user data [submitted via form]
//Retrieve values through POST


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$new_goodsType = $_POST["goodsType"];
$new_otherType = $_POST["otherType"];
$new_quantity = $_POST["quantity"];
$new_goodsDesc = $_POST["goodsDesc"];
$new_value = $_POST["value"];
$new_paymentMethod = $_POST["paymentMethod"];
$new_cashAmount = $_POST["cashAmount"];
$new_bankName = $_POST["bankName"];
$new_bankNo = $_POST["bankNo"];
$new_refNo = $_POST["refNo"];
$new_cardName = $_POST["cardName"];
$new_cardNo = $_POST["cardNo"];
$new_expDate = $_POST["expDate"];
$new_cvv = $_POST["cvv"];


} else {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Data has not been submitted")';  
    echo '</script>';  
}


//formulate the query
//contributionID and receivedDate needs to be generated here by Z
//need to retrieve appealID also by Z
$sqlQuery = "insert into contribution values ('contributionID', 'appealID', '$new_goodsType', 
'$new_otherType', '$new_quantity', '$new_goodsDesc',
'$new_value', '$new_paymentMethod', '$new_cashAmount', '$new_bankName', 
'$new_bankNo', '$new_refNo', '$new_cardName', '$new_cardNo', 
'$new_expDate', '$new_cvv', 'receivedDate')";

//execute the query
$ret = $con->query($sqlQuery);

if ($ret == TRUE)
echo "<script>
alert('Contribution added successfully');
window.location.href='shelterHomeAppeals.php';
</script>";
else
echo "<script>
alert('Contribution not added, please try again');
window.location.href='contribute.php';
</script>";

$con->close();
?>