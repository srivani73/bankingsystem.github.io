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
  <li style="float:right"><a  class="active" href="customer.php">Customers</a></li>
  <li style="float:right"><a  href="index.html">Home</a></li>
</ul>
<br><br>
<table border="2" class="gg">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Amount</th>
            <th>View Customer</th>
        </tr>
        
    <?php
     
     $con= new mysqli("localhost","root","password","bank");
     if(mysqli_connect_error())
     {
         echo"Failed to connect".mysqli_connect_error();
     }
     else
     {
         $query="SELECT * FROM users";
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
                 <td><a href='viewuser.php?id=$row[2]'>View User</a></td>
                 </tr>";  
             }
         } 
     }
     mysqli_close($con); 
    
    ?>



</body>
</html>