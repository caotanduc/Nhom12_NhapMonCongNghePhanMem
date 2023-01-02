<?php
session_start();
include "../config/db_connect.php";

$sql = "SELECT co.ID, co.name, c.name AS class_name, co.credits, aci.room, en.period_id, en.class_id, d.name as day_name, aci.start_period, aci.end_period
FROM enrollment en INNER JOIN class c ON en.class_id = c.ID
INNER JOIN course co ON en.course_id = co.ID
INNER JOIN available_course_info aci ON en.period_id = aci.period_id AND en.course_id = aci.course_id AND en.class_id = aci.class_id
INNER JOIN day d on d.num = aci.day
WHERE en.student_id = " . $_SESSION['student_id'];


$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

$sql2 = "SELECT co.ID, co.name, cl.name AS class_name, co.credits, cl.school_year, aci.room, aci.period_id, aci.class_id, d.name AS day_name, aci.start_period, aci.end_period
FROM available_course_info aci INNER JOIN course co ON aci.course_id  = co.ID
INNER JOIN class cl ON aci.class_id = cl.ID
INNER JOIN available_course ac ON aci.period_id = ac.period_id AND aci.course_id = ac.course_id
INNER JOIN day d ON d.num = aci.day
WHERE aci.class_id NOT IN (SELECT en.class_id FROM enrollment en WHERE en.student_id = '" . $_SESSION['student_id'] . "')";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Yêu cầu trao đổi</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <?php
  echo '<style>.nav-item.exchange{ background-color: #cde0ff !important; }</style>';
  include "./NavBar.html";
  ?>
  <link rel="stylesheet" href="../../public/css/Demand.css" />
</head>

<body>
  <!---->
  <div class="container-fluid" style="padding: 0 !important">
    <div id="rectangle" style="width:100%; height:4.8rem; background-color: #CDE0FF"></div>
    <div class="row h-100" style="margin: 0!important">
      <div class="col-2 bg-primary" style="padding: 0px !important">
        <div class="list-group-flush">
          <a href="./Exchange.php" class="list-group-item list-group-item-action left-exchange">Diễn đàn trao đổi</a>
          <a href="./Demand.php" class="list-group-item list-group-item-action left-demand">Yêu cầu trao đổi</a>
          <a href="./ExchangeResult.php" class="list-group-item list-group-item-action left-result">Kết quả trao đổi</a>
        </div>
      </div>
      <div class="col-10 pane" style="padding: 0px !important">
        <div class="container-fluid" style="padding: 3rem 8rem 4rem 6rem!important;">

          <form action="../controllers/demand-reg.php" class="demand" method="post">

            <div class="form-exchange" style="display: flex; width: 100%">
              <label class="form-label">Môn muốn trao đổi:</label>
              <input type="text" id="course-send" style="font-weight: 500; font-size: 2rem; height: 4.6rem; position: inline-block; width: calc( 100% - 35.25rem)">
            </div>

            <div class="container-table" style="height: 28vh; margin-top: 3rem">
              <div class="table-responsive" style="width: 100%; height: 100%">
                <h2 class="table-label1">Danh sách môn học đã đăng ký</h2>
                <table class="table table-responsive table-hover">
                  <thead style="background-color: #F0F4F8; border-bottom: 1px solid #8B8A98;">
                    <tr>
                      <th style="width: 6%"></th>
                      <th style="width: 8%">Mã<br>Môn Học</th>
                      <th style="width: 21%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: 1rem;">Tên Môn Học</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 10%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Tên Lớp</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 10%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Số tín chỉ</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 14%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Lịch học</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 10%">
                        <div style="display: flex; align-items: center; justify-content: center">
                          <div style="margin-left: auto">Nhóm TH</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 10%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Địa điểm</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 12%"></th> <!-- blank-->
                    </tr>
                  </thead>
                  <!--Data-->
                  <tbody>
                    <?php
                    $i = 1;
                    while ($row = $query->fetch()) { ?>
                      <tr>
                        <td><input class="form-check-input" id="send-<?php echo $i; $i += 1; ?>" type="radio" name="select-send" value="<?php echo $row['period_id'] . "," . $row['ID'] . "," . $row['class_id']; ?>" onclick="selectSend(this)"></td>
                        <td><?php echo $row['ID']; ?></td>
                        <td style="text-align: left">
                          <?php echo $row['name']; ?></td>
                        <td><?php echo $row['class_name']; ?></td>
                        <td><?php echo $row['credits']; ?></td>
                        <td><?php echo $row['day_name'] . ' (' . $row['start_period'] . ' - ' . $row['end_period'] . ')'; ?></td>
                        <td></td>
                        <td><?php echo $row['room']; ?></td>
                        <td></td>
                        <td></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="form-exchange" style="display: flex; width: 100%; margin-top: 2rem; margin-bottom: 3rem">
              <label class="form-label">Môn muốn nhận được:</label>
              <input type="text" id="course-receive" style="font-weight: 500; font-size: 2rem; height: 4.6rem; position: inline-block; width: calc( 100% - 35rem)">
            </div>

            <div class="container-table" style="height: 24vh">
              <div class="table-responsive" style="width: 100%; height: 100%">
                <h2 class="table-label2">Danh sách môn học</h2>
                <table class="table table-responsive table-hover">
                  <thead style="background-color: #F0F4F8; border-bottom: 1px solid #8B8A98;">
                    <tr>
                      <th style="width: 6%"></th>
                      <th style="width: 8%">Mã<br>Môn Học</th>
                      <th style="width: 21%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: 1rem;">Tên Môn Học</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 10%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Tên Lớp</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 10%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Khoá</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 10%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Số tín chỉ</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 10%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Lịch học</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 10%">
                        <div style="display: flex; align-items: center; justify-content: center">
                          <div style="margin-left: auto">Nhóm TH</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 10%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Địa điểm</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 6%"></th> <!-- blank-->
                    </tr>
                  </thead>
                  <!--Data-->
                  <tbody>
                    <?php
                    $query = $conn->query($sql2);
                    $query->setFetchMode(PDO::FETCH_ASSOC);
                    $i = 1;
                    while ($row = $query->fetch()) { ?>
                      <tr>
                        <td><input class="form-check-input" id="recv-<?php echo $i; $i += 1; ?>" type="radio" name="select-receive" value="<?php echo $row['period_id'] . "," . $row['ID'] . "," . $row['class_id']; ?>" onclick="selectReceive(this)"></td>
                        <td><?php echo $row['ID']; ?></td>
                        <td style="text-align: left;">
                          <?php echo $row['name']; ?></td>
                        <td><?php echo $row['class_name']; ?></td>
                        <td><?php echo $row['school_year']; ?></td>
                        <td><?php echo $row['credits']; ?></td>
                        <td><?php echo $row['day_name'] . ' (' . $row['start_period'] . ' - ' . $row['end_period'] . ')'; ?></td>
                        <td></td>
                        <td><?php echo $row['room']; ?></td>
                        <td></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>

            <button type="submit" name="register-button" class="demand btn-register">Đăng ký</button>
            <?php
              if (isset($_SESSION['status'])) {
                echo '<div class="alert alert-success alert-dismissible" style="position: absolute; margin-top: 1rem; padding-left: 5rem; width: 62vw; font-size: 2rem">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                  <strong>' . $_SESSION['status'] . '</strong></div>';
                unset($_SESSION['status']);
            }
            ?>
          </form>
        </div>
      </div>
    </div>

    <!-- Include the demand-script.js file -->
    <script type="text/javascript" src="../../public/js/demand-script.js"></script>
</body>

</html>