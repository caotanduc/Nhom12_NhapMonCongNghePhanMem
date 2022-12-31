<?php
session_start();
include "../config/db_connect.php";

// Establishing MySQLi connection for DELETE query
// instead of using PDO connection
$sqli = mysqli_connect($server, $username, $password, $dbname);

// For catching mysqli_sql_exception
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);

if (isset($_POST['cancel'])) {
    $all_trade_id = $_POST['select-cancel'];

    if (!$all_trade_id) {
        $_SESSION['status'] = "Chưa có mục nào được chọn";
        header("Location: ../views/ExchangeResult.php");
    }

    foreach ($all_trade_id as $trade) {
        $student_id = $_SESSION['student_id'];
        
        $query = "DELETE FROM trade
        WHERE trade_id IN ($trade)
        AND state IS NULL
        AND student_id IN ($student_id);";

        try {
            $sqli->query($query) === TRUE;
            $_SESSION['status'] = "Hủy yêu cầu trao đổi thành công!";
            header("Location: ../views/ExchangeResult.php");
        } catch (Exception $e) {
            if ($e->getCode() == 1451) {
                $_SESSION['status'] = "Yêu cầu trao đổi đang được sử dụng với mục đích khác, không thể xóa!";
                header("Location: ../views/ExchangeResult.php");
            }
        }
    }
}
?>
