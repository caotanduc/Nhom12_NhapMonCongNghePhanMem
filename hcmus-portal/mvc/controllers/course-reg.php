<?php
session_start();
include "../config/db_connect.php";

if (isset($_POST['register-button'])) {
    $all_id = $_POST['select-register'];

    if (!$all_id) {
        $_SESSION['status1'] = "Chưa có mục nào được chọn";
        header("Location: ../views/Register.php");
    }

    foreach ($all_id as $arr) {
        $extract = explode(',', $arr);

        $period_id = $extract[0];
        $course_id = $extract[1];
        $class_id = $extract[2];
        $student_id = $_SESSION['student_id'];

        $query = "INSERT INTO enrollment
        VALUES (\"$period_id\", \"$course_id\", \"$student_id\", 0, \"$class_id\")";

        // Check query
        try {
            $conn->exec($query);
            $_SESSION['status1'] = "Đăng ký học phần thành công!";
            header("Location: ../views/Register.php");
        } catch (PDOException $e) {
            if ($e->getCode() == '23000') {
                $_SESSION['status1'] = "Học phần đã đăng ký!";
                header("Location: ../views/Register.php");
            } 
        }
    }
}
?>