<?php
session_start();
include "../config/db_connect.php";

if (isset($_POST['register-button'])) {
    $send = $_POST['select-send'];
    $receive = $_POST['select-receive'];

    if (!$send or !$receive) {
        $_SESSION['status'] = "Chưa có mục nào được chọn";
        header("Location: ../views/Demand.php");
    }

    else {
        $extract_send = explode(',', $send);
        $period_id_send = $extract_send[0];
        $course_id_send = $extract_send[1];
        $class_id_send = $extract_send[2];

        $extract_recv = explode(',', $receive);
        $course_id_recv = $extract_recv[1];
        $class_id_recv = $extract_recv[2];

        $student_id = $_SESSION['student_id'];

        // Check if there is already a matching row in the trade table
        $exists = $conn->query(
            "SELECT 1 FROM trade t 
            WHERE t.course_id = '$course_id_send'
            AND t.class_id = '$class_id_send'
            AND t.target_course_id = '$course_id_recv' 
            AND t.target_class_id = '$class_id_recv' 
            AND t.student_id = '$student_id' 
            LIMIT 1");
        $exists->setFetchMode(PDO::FETCH_ASSOC);
        
        if (!$exists->fetch()) {
            // There is not a matching row, so insert a new row
            $conn->exec("INSERT INTO trade (period_id, course_id, class_id,student_id, target_course_id, target_class_id) 
                        VALUES ($period_id_send, $course_id_send, $class_id_send, $student_id, $course_id_recv, $class_id_recv)");
            $_SESSION['status'] = "Đăng ký trao đổi thành công!";
            header("Location: ../views/Demand.php");
        }
        else {
            $_SESSION['status'] = "Yêu cầu trao đổi đã đăng ký trước đó!";
            header("Location: ../views/Demand.php");
        } 
    }
}
?>