<?php
include 'head.php';
?>
<div id="main-content">
<h2>All Records</h2>
<?php
  $conn=mysqli_connect("localhost","root","","dataweb")or die("connection failed");
  $sql="select customerid,name,accountnumber,emailid,dateofbirth,mobilenumber,gender from customer ";
  $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
?>
  <table cellpadding="7px">
    <thead>
      <th>Customerid</th>
      <th>Name</th>
      <th>AccountNumber</th>
      <th>Emailid</th>
      <th>DOB</th><th>MobileNo</th><th>Gender</th>
     </thead>
      <tbody>
      <?php
             while($row=mysqli_fetch_assoc($result)){
        ?>
      <tr>
      <td><?php echo $row['customerid']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['accountnumber'];?></td>   
<td><?php echo $row['emailid'];?></td>   
<td><?php echo $row['dateofbirth'];?></td>   
<td><?php echo $row['mobilenumber'];?></td>   
<td><?php echo $row['gender'];?></td>   
  
</tr>
<?php }  ?>           

  </tbody>
 
  </table>
<?php mysqli_close($conn); ?>
</div>
</div>
</body>
</html>
