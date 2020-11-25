
<!DOCTYPE html>
<html>
<title>
       <head>Fetch data from Database</head>
</title>
<div>
<head>
<h2 style="text-align:center;">FOOD ORDERS</h2>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color: sexy ;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #3399FF;
  color: white;
  border: black;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>FName</th>
    <th>Address</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Item</th>
    <th>Date</th>
    <th>Payment</th>
    <th>Delete</th>
    <th>Modify</th>
  </tr>
		<?php
		 $host = "localhost"; 
                            $user = "root";
                            $password = ""; 
                            $dbname = "project-food"; 

                            $con = mysqli_connect($host, $user, $password, $dbname);
                            $select ="SELECT `ID`, `fname`, `address`, `email`, `phone`, `item`, `date`, `payment` FROM `user`";
                            $run = mysqli_query($con, $select);
		 while ($rows=mysqli_fetch_array($run))
		  {
		 ?>
		  <tr>
                  <td> <?php echo $rows['ID']; ?></td>
                  <td> <?php echo $rows['fname']; ?></td>
                  <td> <?php echo $rows['address']; ?></td>
                  <td> <?php echo $rows['email']; ?></td>
                  <td> <?php echo $rows['phone']; ?></td>
                  <td> <?php echo $rows['item']; ?></td>
                  <td> <?php echo $rows['date']; ?></td>
                  <td> <?php echo $rows['payment']; ?></td>
                  <td> <?php echo  "<a href='delete.php?id=" . $rows['ID'] . "'>DELETE</a>";?></td>
                  <td> <?php echo  "<a href='update.php?id=" . $rows['ID'] . "'>UPDATE</a>";?></td> 

		  </tr>
		  <?php
		 }
		 ?>
	</table>
</body>
</div>
</html>