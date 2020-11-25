

<?php
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "project-food"; /* Database name */

$con = mysqli_connect($host, $user, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$fname = $_POST['field1'];
$address = $_POST['field2'];
$email = $_POST['field3'];
$phone = $_POST['field4'];
$food = $_POST['field5'];
$date = $_POST['field6'];
$payment = $_POST['payment'];



if (isset($_POST['submit'])) {
    $insert_query = "INSERT INTO `user`(`fname`, `address`, `email`, `phone`, `item`, `date`, `payment`) VALUES ('$fname','$address','$email','$phone','$food','$date','$payment')";
    
    mysqli_query($con, $insert_query);
    echo "<script>
  alert('Submitted Succesfully');
  window.location.href='form.html';
  </script>";
}
?>

