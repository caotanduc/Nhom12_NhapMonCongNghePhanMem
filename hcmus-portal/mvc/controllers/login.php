<?php
ob_start();
session_start();
include "../config/db_connect.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // PDO
    $sql = "SELECT * FROM `student` WHERE `username` like '$username'";

    $query = $conn->query($sql);

    $query->setFetchMode(PDO::FETCH_ASSOC);
    if ($query->rowCount() == 1){
        $row = $query->fetch();
        if (password_verify($password, $row['PASSWORD']) || $password == $row['password']) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['student_id'] = $row['ID'];
            header("Location: ../views/Home.php");
            exit();
        } else {
            header("Location: ../../index.php?Error=Incorrect password");
            exit();
        }
    } else {
        header("Location: ../../index.php?Error=User not exists");
        exit();
    }
} else {
    header("Location: ../../index.php");
    exit();
}
