<?php
session_start();
include ('dbConnection.php');

//Handle user data [submitted via form]
//Retrieve values through POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['paymentMethod'] == "bank") {
        echo '<script type ="text/JavaScript">';  
        echo "alert('".$_POST['cashAmount']."')";  
        echo '</script>'; 
        $new_paymentMethod = $_POST["paymentMethod"];
        $new_cashAmount = $_POST["cashAmount"];
        $new_bankName = $_POST["bankName"];
        $new_bankNo = $_POST["bankNo"];
        $new_refNo = $_POST["refNo"];
    } elseif ($_POST['paymentMethod'] == "credit" || $_POST['paymentMethod'] == "debit") {
        $new_paymentMethod = $_POST["paymentMethod"];
        $new_cashAmount = $_POST["cashAmount"];
        $new_cardName = $_POST["cardName"];
        $new_cardNo = $_POST["cardNo"];
        $new_expDate = $_POST["expDate"];
        $new_cvv = $_POST["cvv"];
    } else {
        $new_goodsType = $_POST["goodsType"];
        $new_otherType = $_POST["otherType"];
        $new_quantity = $_POST["quantity"];
        $new_goodsDesc = $_POST["goodsDesc"];
        $new_value = $_POST["value"];
    }
} else {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Data has not been submitted")';  
    echo '</script>';  
}


//formulate the query
// get the integer part of maximum ID
$queryMaxID = "SELECT MAX(SUBSTRING(contributionID, 2, LENGTH(contributionID) - 1)) AS id FROM contribution";
$resMaxID = $con->query($queryMaxID);
while ($row = $resMaxID->fetch_assoc()) {
    $maxID = $row['id'];
}
// incremented new num
$new_contID = "C".sprintf('%05d', (int) $maxID + 1);
// get appeal ID
$new_contAppealID = $_SESSION['appealID'];


if ($_POST['paymentMethod'] == "bank") {
    $sqlQuery = "INSERT INTO contribution (contributionID, appealID, paymentChannel, cashAmount, bankName, bankNo, refNo, receivedDate) 
        VALUES ('$new_contID', '$new_contAppealID', '$new_paymentMethod', '$new_cashAmount', '$new_bankName', '$new_bankNo', '$new_refNo', '".date('Y-m-d')."')";
} elseif ($_POST['paymentMethod'] == "credit" || $_POST['paymentMethod'] == "debit") {
    $sqlQuery = "INSERT INTO contribution (contributionID, appealID, paymentChannel, cashAmount, cardName, cardNo, expDate, cvv, receivedDate) 
        VALUES ('$new_contID', '$new_contAppealID', '$new_paymentMethod', '$new_cashAmount', '$new_cardName', '$new_cardNo', '$new_expDate', '$new_cvv', '".date('Y-m-d')."')";
} else {
    $sqlQuery = "INSERT INTO contribution (contributionID, appealID, goodsType, otherGoodsType, quantity, goodsDescription, estimatedValue, receivedDate) 
        VALUES ('$new_contID', '$new_contAppealID', '$new_goodsType', '$new_otherType', '$new_quantity', '$new_goodsDesc', '$new_value', '".date('Y-m-d')."')";
}

//execute the query
$ret = $con->query($sqlQuery);

if ($ret == TRUE)
    if (isset($_SESSION['admin']))
        header('Location:orgRepDashboard.php');
    else
        header('Location:index.php');
else  {
    $_SESSION['message'] = "unknown";
    header('Location:contribute.php');
}

$con->close();
?>