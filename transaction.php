<?php
include 'head.php';
include 'connection.php';
include 'transferdesign.php';
error_reporting(0);
?>
<?php
$from_account_num = ""; 
$to_account_num = "";
$transfer_amount=""; 
if (isset($_POST['transferfund'])) 
{
    //get the account numbers and amount
    $from_account_num = $_POST['account1']; 
    $to_account_num = $_POST['account2']; 
    $transfer_amount = $_POST['amount'];  
    //search for account existance and balance
     $search = "SELECT currentbalance FROM `customer` WHERE accountnumber=$from_account_num";
     $search_result = mysqli_query($conn,$search);
     $row = mysqli_num_rows($search_result);
    $result = mysqli_fetch_assoc($search_result);
    #if account is found
     if ($row > 0) 
     {
        #echo "account found";
        //Check for insufficient balance or 0 balance
        
         if(($result['currentbalance'] == 0) OR ($result['currentbalance'] <= $transfer_amount)) 
     {
         echo "<script> alert('Insufficient Balance!'); </script>";
                   
     }
     else
     {
      #Send if sufficient money is present
      $find_to_account = "SELECT * FROM `customer` WHERE accountnumber='$to_account_num' LIMIT 1"; 
      $search_acc = mysqli_query($conn,$find_to_account);
      $to_result = mysqli_fetch_assoc($search_acc);
      #if e get values successfully
      if ($to_result) 
          {
            #adding money
            $total_amount_after_add = $to_result['currentbalance'] + $transfer_amount;
            #funds are added query
            $add_fund = "UPDATE customer SET currentbalance='$total_amount_after_add' WHERE accountnumber='$to_account_num'";
            $done_adding_fund = mysqli_query($conn,$add_fund);
            #subtracting money
            $total_amount_after_subtract = $result['currentbalance'] - $transfer_amount;
            #funds are subtracted query
            $subtract_fund = "UPDATE customer SET currentbalance='$total_amount_after_subtract' WHERE accountnumber='$from_account_num'";
            $done_subtracting_fund = mysqli_query($conn,$subtract_fund);
            //ADD RECORD TO THE TRANSACTION HISTORY TABLE
            date_default_timezone_set('Asia/Kolkata');
            $current_time = date("Y-m-d");
            $add_trans_record = "INSERT INTO `transaction_history` (`from_account`, `to_account`, `transfer_amount`, `date`) VALUES ('$from_account_num', '$to_account_num', '$transfer_amount', '$current_time')";
            mysqli_query($conn,$add_trans_record);
     //IF FUND ADDED SUCCESSFULLY
            if ($done_adding_fund && $done_subtracting_fund)
            {
             echo "<script> alert('Fund Transfered Successfully!'); </script>";
             //REDIRECT TO THE RESPECTED DASHBOARD IS SESSION ARE SET
            }
            else
           {
            echo "<script>alert('Fund Transfered Failed!');
            </script>";
                                   
           }
   }
}
}
}
?>
