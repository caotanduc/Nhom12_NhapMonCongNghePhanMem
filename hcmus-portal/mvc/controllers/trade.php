<?php
session_start();
include "../config/db_connect.php";

// Establishing MySQLi connection for DELETE query
// instead of using PDO connection
$sqli = mysqli_connect($server, $username, $password, $dbname);

// For catching mysqli_sql_exception
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);

if (isset($_POST['trade'])) {
    $trade_id = $_POST['select-demand'];

    if (!$trade_id) {
        $_SESSION['status'] = "Chưa có mục nào được chọn";
        header("Location: ../views/Exchange.php");
    } else {
        $student2_id = $_SESSION['student_id'];

        $query = "SELECT 1 FROM trade t, enrollment e
            WHERE t.trade_id IN ($trade_id) 
            AND t.period_id = e.period_id
            AND t.target_course_id = e.course_id
            AND t.target_class_id = e.class_id
            AND $student2_id = e.student_id"; # student 2 have registed this course

        $result = $sqli->query($query);

        if (mysqli_num_rows($result) == 0) {
            $_SESSION['status'] = "Bạn chưa đăng ký môn học yêu cầu!";
        } else {
            $query = "UPDATE enrollment e
                    SET e.student_id = (
                    SELECT t.student2_id
                        FROM trade t 
                        WHERE t.trade_id IN ($trade_id) 
                        AND t.period_id = e.period_id
                        AND t.course_id = e.course_id
                        AND t.class_id = e.class_id);
                        UPDATE enrollment e
                    SET e.student_id = (
                    SELECT t.student_id
                        FROM trade t 
                        WHERE t.trade_id IN ($trade_id) 
                        AND t.period_id = e.period_id
                        AND t.target_course_id = e.course_id
                        AND t.target_class_id = e.class_id);
                    UPDATE trade t
                    SET t.student2_id = $student2_id
                    WHERE t.trade_id IN ($trade_id);
                    UPDATE trade t
                    SET t.state = 1
                    WHERE t.trade_id IN ($trade_id)";

            try {
                $sqli->query($query) === TRUE;
                $_SESSION['status'] = "Trao đổi thành công!";
                header("Location: ../views/Exchange.php");
            } catch (Exception $e) {
                if ($e->getCode() == 1451) {
                    $_SESSION['status'] = "Không thể thực hiện trao đổi!";
                    header("Location: ../views/Exchange.php");
                }
            }
        }
    }
}
