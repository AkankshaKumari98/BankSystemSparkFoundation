<?php
include 'head.php';
?>
<html>
<head>
<title>singldatafetch</title>
<style>
table,th,td{
border:2px solid black;
width:1100px;
background-color:lightgreen;
}
.btn{
width:10%;
height:10%;
font-size:22px;
padding:0px;
background-color:ffffcc;
}
</style>
</head>
<body >
<center>
<div class="container">
<form action="" method="post">
  <br>
<input type="text" name="customerid" class="btn" placeholder="Enter Id"/>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" name="search" class="btn" value="Search By Id"/>
</form></br></br></br>
<table>
<tr>
<th>Customerid</th>

        <th>Name</th>
          <th>AccountNumber</th>
         <th>Emailid</th>
          <th>DOB</th><th>MobileNo</th>
          <th>gender</th>
</tr><br>
<?php 
 $conn=mysqli_connect("localhost","root","","dataweb")or die("connection failed");
if(isset($_POST['search']))
{
$customerid = $_POST['customerid'];
$sql = "select customerid,name,accountnumber,emailid,dateofbirth,mobilenumber,gender from customer where customerid='$customerid'";
$query_run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query_run))
{
?>
<tr>
             
<td><?php echo $row['customerid']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['accountnumber'];?></td>   
<td><?php echo $row['emailid'];?></td>   
<td><?php echo $row['dateofbirth'];?></td>   
<td><?php echo $row['mobilenumber'];?></td> 
<td><?php echo $row['gender']; ?></td>
    
</tr>
<?php
}
}
?>
</table>
</div>
</body>
</html>
