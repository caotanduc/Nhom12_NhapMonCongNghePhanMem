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
    } 
    else {
        $student2_id = $_SESSION['student_id'];
        $query = "SELECT 1 FROM trade t 
            INNER JOIN enrollment en 
            ON t.period_id = en.period_id
            AND t.target_course_id = en.course_id
            AND t.target_class_id = en.class_id
            WHERE t.trade_id = $trade_id
            AND  en.student_id = $student2_id # student 2 have registed this course ?
            AND t.student_id != $student2_id"; # student 1 != student 2
        $result = mysqli_query($sqli, $query);
        if (mysqli_num_rows($result) == 0) {
            $_SESSION['status'] = "Không đạt điều kiện trao đổi!";
            header("Location: ../views/Exchange.php");
        }
        else {
            $student2_id = $_SESSION['student_id'];

            $del1 = "DELETE en1 FROM enrollment en1 
            INNER JOIN trade t ON en1.period_id = t.period_id AND en1.course_id = t.course_id AND en1.class_id = t.class_id AND en1.student_id = t.student_id
            WHERE t.trade_id = $trade_id";

            $del2 = "DELETE en2 FROM enrollment en2
            INNER JOIN trade t ON en2.period_id = t.period_id AND en2.course_id = t.target_course_id AND en2.class_id = t.target_class_id AND en2.student_id = $student2_id
            WHERE t.trade_id = $trade_id";

            $ins1 = "INSERT INTO enrollment (period_id, course_id, student_id, class_id) 
            SELECT t.period_id, t.target_course_id, t.student_id, t.target_class_id
            FROM trade t
            WHERE t.trade_id = $trade_id";

            $ins2 = "INSERT INTO enrollment (period_id, course_id, student_id, class_id) 
            SELECT t.period_id, t.course_id, $student2_id, t.class_id
            FROM trade t
            WHERE t.trade_id = $trade_id";

            $update_trade = "UPDATE trade t
            SET t.student2_id = $student2_id, t.state = 1
            WHERE t.trade_id = $trade_id";

            try {
                if ($sqli->query($del1) === TRUE 
                && $sqli->query($del2) === TRUE
                && $sqli->query($ins1) === TRUE
                && $sqli->query($ins2) === TRUE
                && $sqli->query($update_trade) === TRUE) {
                $_SESSION['status'] = "Trao đổi thành công!";
                header("Location: ../views/Exchange.php");
                }
            } catch (Exception $e) {
                $_SESSION['status'] = "Lỗi '".$e->getMessage()."': Không thể thực hiện trao đổi!";
                header("Location: ../views/Exchange.php");
            }
        }
    }
}
