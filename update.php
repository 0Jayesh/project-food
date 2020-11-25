

<?php

$link = mysqli_connect("localhost", "root", "", "project-food");
$id = $_GET['id']; 
$setting = "select * from user where ID='$id'";
$qry = mysqli_query($link, $setting); 


$jk = mysqli_fetch_array($qry);

if (isset($_POST['update'])) 
{
    $fullname= $_POST['fullname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $item = $_POST['item'];

    $edit = mysqli_query($link, "update user set fname='$fullname', address='$address',email='$email',phone='$phone',item='$item' where ID='$id'");

    if ($edit) {
        mysqli_close($link); 
        header("location:view.php"); 
        exit;
    } else {
        echo "error";
    }
}
?>




<html>
<head>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #3399FF;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<div class="container">
<form  method="POST">
F Name <input type ="text" name="fullname" value="<?php echo $jk['fname'];  ?>"/><br><br>
Address<input type ="text" name="address" value="<?php echo $jk['address'];  ?>"/><br><br>
Email<input type ="text" name="email" value="<?php echo $jk['email']; ?>"/><br><br>
Phone<input type ="text" name="phone" value="<?php echo $jk['phone']; ?>"/><br><br>
Item<input type ="text" name="item" value="<?php echo $jk['item']; ?>"/><br><br>
<input type ="submit" name="update" value="Update"/>
</form>
</div>

</body>
</html>