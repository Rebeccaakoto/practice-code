
<?php

$email = '';
if (isset($_POST['email'])){
    $email = $_POST['email'];
   
}else{
    echo 'input invalid';
    exit();
}

$servername = 'localhost';
$dbname = 'attendancedb';
$username= 'root';
$password = '';

$myconn = mysqli_connect($servername, $username, $password, $dbname);
if ($myconn){
    echo 'connected successfully';
}else{
    die ('connected failed: '). mysqli_connect_error();
};

$sql = "INSERT INTO forms (email) VALUES ('$email')";
if (mysqli_query($myconn, $sql)) {
    echo 'Data inserted successfully';
} else {
    echo 'Data not inserted';
};

mysqli_close($myconn);


?>