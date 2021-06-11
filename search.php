<?php
include 'connection.php';


include 'o.php';
if (isset($_POST['transferfund']))   
//search for account existance and balance
    
$search = "SELECT `accountno` FROM `customer` WHERE accountno='$from_account_num' LIMIT 1";

   
$search_result = mysqli_query($conn,$search);

   
$row = mysqli_num_rows($search_result);

    
$result = mysqli_fetch_assoc($search_result);
?>
