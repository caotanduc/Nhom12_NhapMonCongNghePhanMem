<?php
session_start();
include "../config/db_connect.php";

// Establishing MySQLi connection for DELETE query
// instead of using PDO connection
$sqli = mysqli_connect($server, $username, $password, $dbname);

// For catching mysqli_sql_exception
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);

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

        $query = "DELETE FROM enrollment
        WHERE period_id IN ($period_id)
        AND course_id IN ($course_id)
        AND class_id IN ($class_id)
        AND student_id IN ($student_id);";

        try {
            $sqli->query($query) === TRUE;
            $_SESSION['status'] = "Hủy học phần thành công!";
            header("Location: ../views/Register.php");
        } catch (Exception $e) {
            if ($e->getCode() == 1451) {
                $_SESSION['status'] = "Học phần đang được sử dụng với mục đích khác, không thể xóa!";
                header("Location: ../views/Register.php");
            }
        }
        
        //Fallback options
        
        // if (!($res->execute())) {
        //     $_SESSION['status'] = "Học phần đang được sử dụng với mục đích khác, không thể xóa!";
        //     header("Location: ../views/Register.php");
        // } else {
        //     $_SESSION['status'] = "Hủy học phần thành công!";
        //     header("Location: ../views/Register.php");
        // }

        // Check query
        // try {

        //     $_SESSION['status'] = "Hủy học phần thành công!";
        //     header("Location: ../views/Register.php");
        // } catch (PDOException $e) {
        //     if ($e->getCode() == '23000') {
        //         $_SESSION['status'] = "Học phần đang được sử dụng với mục đích khác, không thể xóa!";
        //         header("Location: ../views/Register.php");
        //     }
        // }
    }
}
?>
