<?php
session_start();
include "../config/db_connect.php";

if (isset($_POST['cancel-button'])) {
    $all_id = $_POST['select-cancel'];

    if (!$all_id) {
        $_SESSION['status'] = "Chưa có mục nào được chọn";
        header("Location: ../views/Register.php");
    }

    foreach ($all_id as $arr) {
        $extract = explode(',', $arr);

        $period_id = $extract[0];
        $course_id = $extract[1];
        $class_id = $extract[2];
        $student_id = $_SESSION['student_id'];

        $query = "DELETE FROM enrollment en
        WHERE en.period_id = \"$period_id\" 
        AND en.course_id = \"$course_id\" 
        AND en.class_id = \"$class_id\"
        AND en.student_id = \"$student_id\"";

        // Check query
        try {
            $conn->exec($query);
            $_SESSION['status'] = "Hủy học phần thành công!";
            header("Location: ../views/Register.php");
        } catch (PDOException $e) {
            if ($e->getCode() == '23000') {
                $_SESSION['status'] = "Học phần đang được sử dụng với mục đích khác, không thể xóa!";
                header("Location: ../views/Register.php");
            }
        }
    }
}
?>