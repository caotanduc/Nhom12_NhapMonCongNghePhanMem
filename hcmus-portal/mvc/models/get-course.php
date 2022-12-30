<?php
session_start();
include "../config/db_connect.php";

// Retrieve the period_id and class_id values from the form
$period_id = $_POST['period_id'];
$class_id = $_POST['class_id'];
$course_id = $_POST['course_id'];

$sql = "SELECT co.ID, co.name, cl.name AS class_name, co.credits, d.name AS day_name, aci.start_period, aci.end_period, aci.room
FROM available_course_info aci 
INNER JOIN course co ON aci.course_id  = co.ID
INNER JOIN class cl ON aci.class_id = cl.ID
INNER JOIN day d ON d.num = aci.day
WHERE aci.period_id = '$period_id' and aci.class_id = '$class_id' and aci.course_id = '$course_id'";


// Execute the SELECT statement
$query = $conn->query($sql);

// Check if the SELECT statement returned any rows
$query->setFetchMode(PDO::FETCH_ASSOC);

// Retrieve the first row from the result set
$row = $query->fetch();
echo json_encode($row, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
// Close connection in PDO.
$conn=null;
?>