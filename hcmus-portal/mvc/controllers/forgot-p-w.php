<?php
    include "../config/db_connect.php";

	$username = $_POST["username"];
	
	$sql = "SELECT password FROM `student` WHERE `username` = '$username'";
	$query = $conn->query($sql);

    $query->setFetchMode(PDO::FETCH_ASSOC);
    if ($query->rowCount() == 1){
        $row = $query->fetch();
		$password = $row['password'];
        echo "<script type='text/javascript'>alert(" . "$password" . ");</script>";
    } else {
        header("Location: ../views/ForgotPassword.php?Error=User not exists");
        exit();
    }

?>