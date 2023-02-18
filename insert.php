<?php
$con = mysqli_connect('localhost','root','');

if(!$con) {
    echo 'Not connected to server!';
}

if(!mysqli_select_db($con,'user_info')) {
    echo 'Database not selected!';
}

$tel = $_POST['tel'];


$sql = "INSERT INTO phone_numbers (Name,Email) VALUES ('$Name','$Email')";
if(!mysqli_query($con,$sql)) {
    echo 'Data not inserted';
} else {
    echo 'Data inserted';
}
//header("refresh:2; url=form.html");
?>