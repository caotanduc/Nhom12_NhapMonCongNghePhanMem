<?php
session_start();
include "../config/db_connect.php";

$sql = "SELECT s.fullname, s.school_year, s.email, s.address, s.date_of_birth, f.name AS f_name, c.name AS cl_name
FROM student s INNER JOIN faculty f ON s.faculty = f.ID
INNER JOIN class c ON s.class = c.ID
where s.ID = " . $_SESSION['student_id'];

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

$row = $query->fetch();


$sql2 = "SELECT c.name AS name, aci.day, aci.start_period, aci.end_period ,hour(sc1.start_time) sh, minute(sc1.start_time) sm, hour(sc2.end_time) eh, minute(sc2.end_time) em, aci.room
FROM enrollment e INNER JOIN available_course_info aci ON e.period_id = aci.period_id AND e.course_id = aci.course_id AND e.class_id = aci.class_id
INNER JOIN course c ON e.course_id = c.ID
INNER JOIN schedule sc1 ON aci.start_period = sc1.period
INNER JOIN schedule sc2 ON aci.end_period = sc2.period
where e.period_id = 1 AND e.student_id = " . $_SESSION['student_id'] . " order by aci.day asc";

function visualize_schedule($rowdata, $day) {
  $n = count($rowdata);
  $cc = 1;
  for ($i = 0; $i < $n; $i++) {
    if ($rowdata[$i]['day'] == $day) {
      echo '
        <div
          class="session session-'.(string)(($day - 2) * 2 + $cc++ ). ' track-'. (string)($day - 1 ).'"
          style="grid-column: track-' . (string)($day - 1 ). '; grid-row: time-'. (string)($rowdata[$i]["start_period"]) .' / time-'.(string)($rowdata[$i]["end_period"] + 1 ).'
          ">
        <h3 class="session-title">'. $rowdata[$i]["name"] . '</h3>
        <span class="session-time">Thứ '. $rowdata[$i]["day"] .': ' .sprintf("%02d", $rowdata[$i]["sh"]) .':' . sprintf("%02d", $rowdata[$i]["sm"]) .' - '. sprintf("%02d", $rowdata[$i]["eh"]) .':' . sprintf("%02d", $rowdata[$i]["em"]) .'</span>
        <span class="session-room">Phòng '. $rowdata[$i]["room"] .' </span>
      </div>
      ';
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Thông tin cá nhân</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet"/>
    
    <?php 
        echo '<style>.nav-item.profile{ background-color: #cde0ff !important; }</style>';
        include "./NavBar.html"; 
      ?>
    <link href="../../public/css/ProfilePage.css" rel="stylesheet" />
  </head>
  <body>

    <div class="container-fluid h-100">
      <div class="row h-100">
        <div class="col-3 bg-primary">
          <img src="../../public/img/avatar_Profile.png" class="avatar"/>  

          <h2 class="text-center MSSV"><?php echo $_SESSION['student_id']; ?></h2>
          <h3 class="text-center StName"><?php echo $row['fullname'];?></h3>

          <hr class="split-line" />
          <!-- Information in sidebar-->
          <div class="container info-container">
            <span class="info-title">Ngày sinh: </span>
            <span class="info"><?php echo $row['date_of_birth'];?></span>
            <br /><br />
            <span class="info-title">Địa chỉ: </span>
            <span class="info"><?php echo $row['address'] ;?></span>
            <br /><br />
            <span class="info-title">Email: </span>
            <span class="info"><?php echo $row['email'] ;?></span>
            <br /><br />
            <span class="info-title">Khoa: </span>
            <span class="info"><?php echo $row['f_name'] ;?></span>
            <br /><br />
            <span class="info-title">Lớp: </span>
            <span class="info"><?php echo $row['cl_name'] ;?></span>
            <br /><br />
            <span class="info-title">Khóa: </span>
            <span class="info"><?php echo $row['school_year'] ;?></span>
            <br /><br />
          </div>
        </div>

        <?php 
          $query = $conn->query($sql2);
          $query->setFetchMode(PDO::FETCH_ASSOC);
          
          $row = $query->fetchAll();
          ?>
        <!--Contains the main content of the webpage-->
        <div class="col-9">
          <div class="container-schedule" style="max-height: calc(100vh-7rem);">

            <h2 class="schedule-heading">THỜI KHOÁ BIỂU</h2>
            <div class="schedule" aria-labelledby="schedule-heading">
              <!-- Weekday title -->
              <span
                class="track-slot-empty"
                aria-hidden="true"
                style="grid-row: tracks"
              ></span>
              <span
                class="track-slot1"
                aria-hidden="true"
                style="grid-column: track-1; grid-row: tracks"
                >Thứ 2</span
              >
              <span
                class="track-slot2"
                aria-hidden="true"
                style="grid-column: track-2; grid-row: tracks"
                >Thứ 3</span
              >
              <span
                class="track-slot3"
                aria-hidden="true"
                style="grid-column: track-3; grid-row: tracks"
                >Thứ 4</span
              >
              <span
                class="track-slot4"
                aria-hidden="true"
                style="grid-column: track-4; grid-row: tracks"
                >Thứ 5</span
              >
              <span
                class="track-slot5"
                aria-hidden="true"
                style="grid-column: track-5; grid-row: tracks"
                >Thứ 6</span
              >
              <span
                class="track-slot6"
                aria-hidden="true"
                style="grid-column: track-6; grid-row: tracks"
                >Thứ 7</span
              >
  
              <!-- Time title -->
              <img src="../../public/img/Tiet1.png" alt="" class="time-slot" style="grid-row: time-1">
              <img src="../../public/img/Tiet2.png" alt="" class="time-slot" style="grid-row: time-2">
              <img src="../../public/img/Tiet3.png" alt="" class="time-slot" style="grid-row: time-3">
              <img src="../../public/img/Tiet4.png" alt="" class="time-slot" style="grid-row: time-4">
              <img src="../../public/img/Tiet5.png" alt="" class="time-slot" style="grid-row: time-5">
              <img src="../../public/img/Tiet6.png" alt="" class="time-slot" style="grid-row: time-6">
              <img src="../../public/img/Tiet7.png" alt="" class="time-slot" style="grid-row: time-7">
              <img src="../../public/img/Tiet8.png" alt="" class="time-slot" style="grid-row: time-8">
              <img src="../../public/img/Tiet9.png" alt="" class="time-slot" style="grid-row: time-9">
              <img src="../../public/img/Tiet10.png" alt="" class="time-slot" style="grid-row: time-10">
              <!-- Dashed backgound -->
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-1 / time-2;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-2 / time-3;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-3 / time-4;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-4 / time-5;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-5 / time-6;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-6 / time-7;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-7 / time-8;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-8 / time-9;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-9 / time-10;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-10;
                "
              ></div>
              <!-- Data -->
              <!-- T2 -->
              <?php visualize_schedule($row, 2);?>
  
              <!-- T3 -->
              <?php visualize_schedule($row, 3);?>
  
              <!-- T4 -->
              <?php visualize_schedule($row, 4);?>

              <!-- T5 -->
              <?php visualize_schedule($row, 5);?>

              <!-- T6 -->
              <?php visualize_schedule($row, 6);?>
  
              <!-- T7 -->
              <?php visualize_schedule($row, 7);?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
