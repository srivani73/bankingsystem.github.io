<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style2.css">   
<style>


</style>
</head> 
<body>
    

<ul>
  <li><a class="headname"  href="index.html"><b>Banking System</b></a></li>
  <li style="float:right"><a class="active" href="payment.php">Make Payment</a></li>
  <li style="float:right"><a  href="transaction.php">Transactions</a></li>
  <li style="float:right"><a   href="customer.php">Customers</a></li>
  <li style="float:right"><a  href="index.html">Home</a></li>
</ul> 
<br>

<br><br><br><h2><center>Payment </center>
<form action="" method="POST">
   <table align="center" cellspacing="20"  bgcolor="#8ba391">
       <tr><td>Sender Name</td><td><input type="text" id="sname" name="sender" ></td></tr>
       

       <tr><td>Sender Email</td><td><input type="text" id="smail" name="sendermail"></td></tr>
       <tr><td>Receiver Name</td><td><input type="text" name="receiver"></td></tr>
       <tr><td>Receiver Email</td><td><input type="text" name="rmail"></td></tr>
       <tr><td>Amount</td><td><input type="text" name="amount"></td></tr>
       <tr><td align="center" colspan="2"><input type="submit" class="button" value="Transfer"  name="submt1"  ></td></tr></table>


  </form> 
</div> 
<?php 
   if(isset($_POST['submt1']))
   {
       $sname=$_POST['sender'];
       $smail=$_POST['sendermail'];
       $rname=$_POST['receiver'];
       $rmail=$_POST['rmail'];
       $amount=$_POST['amount'];

       $con= new mysqli("localhost","root","password","bank");
       if(mysqli_connect_error())
       {
           echo"Failed to connect".mysqli_connect_error();
       } 
       else
       {
           $query="INSERT into trans values('','$sname','$smail','$rname','$rmail','$amount')";
           if($res=mysqli_query($con,$query))
           {
      
            $q2="UPDATE users set balance=balance-'$amount' where  email='$smail'";
            $q3 ="UPDATE users set balance=balance+'$amount' where email='$rmail'";
            if(($res2=mysqli_query($con,$q2))  && ($res3=mysqli_query($con,$q3))) 
            {
              echo '<script type="text/javascript">
              alert("Payment is successful...");
              window.location.href="index.html";
              </script>';
              
            }
  
          }
          else
          {
            echo"failure";
          }
      }
      mysqli_close($con);    
  }


?>
 

</body>
</html>