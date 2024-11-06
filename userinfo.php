
 

 <?php 

$con = mysqli_connect('localhost', 'root'); // Add your MySQL password

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful";
}

if (!mysqli_select_db($con, 'fullstackproject1data')) {
    die('Database selection failed: ' . mysqli_error($con));
}

$user = mysqli_real_escape_string($con, $_POST['user']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
$comment = mysqli_real_escape_string($con, $_POST['comment']);

$query = "INSERT INTO userinfo (user, email, mobile, comment) VALUES ('$user','$email','$mobile','$comment')";

if (mysqli_query($con, $query)) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_error($con);
}

mysqli_close($con);
?>
