<?php

$server_name = "localhost";
$username = "root";
$password = "root";
$database_name = "test_db";

$conn = mysqli_connect($server_name, $username, $password, $database_name);

if (!$conn) {

    echo "Connection failed!";
}

if (isset($_POST['save'])) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];


    $sql_query = "INSERT INTO entry_details (user_name,password)
	 VALUES ('$user_name','$password')";

    if (mysqli_query($conn, $sql_query)) {
        echo "Successfully logged in !";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
