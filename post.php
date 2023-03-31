
<?php
$hostname  = "localhost";
$user     = "root";
$pass     = "";
$databasename = "whatsapp";
// Create connection
$conn = mysqli_connect($hostname, $user, $pass,$databasename);
// Check connection
if (!$conn) {
    die("Unable to Connect database: " . mysqli_connect_error());
}
?>

<?php
// if(isset($_POST['login'])){
// $name = mysqli_real_escape_string($conn, $_POST['name']);
// $phone = mysqli_real_escape_string($conn, $_POST['phone']);
// $plan = mysqli_real_escape_string($conn, $_POST['plan']);


// $sql = "INSERT INTO contact (name, phone, plan)
// VALUES ('$name', '$phone', '$plan')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
//}


if(isset($_POST['login'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    
    
    $sql = "INSERT INTO test (name, phone)
    VALUES ('$name', '$phone')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    }




?>

<form action="" method="post">

<input type="text" name="name">
<input type="text" name="phone">
<button name="login" type="submit">send</button>
</form>




