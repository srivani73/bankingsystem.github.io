<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">   
<style>


</style>
</head> 
<body> 

<ul>
  <li><a class="headname"  href="index.html"><b>Banking System</b></a></li> 
  <li style="float:right"><a  href="payment.php">Make Payment</a></li>
  <li style="float:right"><a  href="transaction.php">Transactions</a></li>
  <li style="float:right"><a   href="customer.php">Customers</a></li>
  <li style="float:right"><a  href="index.html">Home</a></li>
</ul>
<br><br>
<h2> <center>User Details</center></h2>
<table align="center"  style="width:30%; padding: left 25px;">
<?php 
  $Id=$_GET['id'];
  



  $con= new mysqli("localhost","root","password","bank");
  if(mysqli_connect_error())
  {
      echo"Failed to connect".mysqli_connect_error(); 
  }
  else
  {
      $query="SELECT * FROM users where email='$Id'";
      if($res=mysqli_query($con,$query))
      {
          while($row =mysqli_fetch_row($res))
          {
              echo"
              <tr><td>User Id:</td>
              <td>".$row[0]."</td></tr>
              <tr><td>User Name</td><td>".$row[1]."</td></tr>
              <tr> <td>Email</td><td>".$row[2]."</td></tr>
              <tr> <td>Balance</td><td>".$row[3]."</td></tr>";
                 
          }
      } 
  }
  mysqli_close($con); 
 
 




?>




</table>

<br><br><br>
<h2>Previous Transactions</h2>
<table border="2" class="gg">
        <tr>
            <th>ID</th>
            <th>Sender Name</th>
            <th>Sender Email</th>
            <th>Receiver Name</th>
            <th>Receiver Email</th>
            <th>Amount</th>
            
        </tr>



<?php 
  $Id=$_GET['id'];
  



  $con= new mysqli("localhost","root","password","bank");
  if(mysqli_connect_error())
  {
      echo"Failed to connect".mysqli_connect_error();
  }
  else
  {
      $query="SELECT * FROM trans where smail='$Id'";
      if($res=mysqli_query($con,$query))
      {
          while($row =mysqli_fetch_row($res))
          {
              echo"
              <tr>
              <td>".$row[0]."</td>
              <td>".$row[1]."</td>
              <td>".$row[2]."</td>
              <td>".$row[3]."</td>
              <td>".$row[4]."</td>
              <td>".$row[5]."</td></tr>";   
          }
      } 
  }
  mysqli_close($con); 
 
 




?>
</body>
</html>