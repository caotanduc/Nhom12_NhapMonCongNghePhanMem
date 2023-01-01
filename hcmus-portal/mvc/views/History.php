<?php
session_start();
include "../config/db_connect.php";

$sql = "SELECT co.ID, co.name, c.name as class_name, co.credits, aci.room, en.period_id, en.class_id, stu.fullname
from enrollment en inner join class c on en.class_id = c.ID
inner join course co on en.course_id = co.ID
inner join available_course_info aci on en.period_id = aci.period_id and en.course_id = aci.course_id and en.class_id = aci.class_id
inner join student stu on stu.id = en.student_id
where en.student_id = " . $_SESSION['student_id'];

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Lịch sử đăng ký học phần</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <?php
  echo '<style>.nav-item.register{ background-color: #cde0ff !important; }</style>';
  include "./NavBar.html";
  ?>
  <link rel="stylesheet" href="../../public/css/History.css" />
</head>

<body>
  <!-- Filter bar -->
  <nav class="navbar navbar-expand-sm bg-primary navbar-light filter-bar">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item bg-primary">
        <span class="navtext label">Năm học:</span>
      </li>
      <li class="nav-item bg-primary">
        <select class="form-select nav-namhoc">
          <option value="2022-2023">2022-2023</option>
          <option value="2021-2022">2021-2022</option>
          <option value="2020-2021">2020-2021</option>
        </select>
      </li>
      <li class="nav-item bg-primary">
        <span class="navtext label">Học kì:</span>
      </li>
      <li class="nav-item bg-primary">
        <select class="form-select nav-hk">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </li>
      <li class="nav-item bg-primary">
        <button type="button" class="btn nav-item-button">Xem
        </button>
      </li>
    </ul>
  </nav>
  <div class="container-fluid" style="padding: 0 !important">
    <div class="row h-100" style="margin: 0!important">
      <div class="col-2 bg-primary pane">
        <div class="list-group-flush">
          <a href="./Register.php" class="list-group-item list-group-item-action left-register">Đăng ký học phần</a>
          <a href="./Result.php" class="list-group-item list-group-item-action left-result">Kết quả đăng ký</a>
          <a href="./History.php" class="list-group-item list-group-item-action left-history">Lịch sử đăng ký</a>
        </div>
      </div>
      <div class="col-10" style="padding: 0px !important">
        <div class="container-fluid" style="padding: 5rem 6rem 6rem 6rem!important;">
          <div class="container-table" style="height: calc(100vh - 23rem)">
            <div class="table-responsive" style="width: 100%; height: 100%">
              <h2 class="table-label">Lịch sử đăng ký học phần</h2>
              <table class="table table-responsive table-hover">
                <thead>
                  <tr>
                    <th style="width: 8%">Mã<br>Môn Học</th>
                    <th style="width: 24%">
                      <div style="display:flex; align-items:center; justify-content: center">
                        <div style="margin-left: 0;">Tên Môn Học</div>
                        <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                      </div>
                    </th>
                    <th style="width: 11%">
                      <div style="display:flex; align-items:center; justify-content: center">
                        <div style="margin-left: auto">Tên Lớp</div>
                        <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                      </div>
                    </th>
                    <th style="width: 11%">
                      <div style="display:flex; align-items:center; justify-content: center">
                        <div style="margin-left: auto">Thao tác</div>
                        <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                      </div>
                    </th>
                    <th style="width: 11%">
                      <div style="display:flex; align-items:center; justify-content: center">
                        <div style="margin-left: auto">Thực hiện</div>
                        <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                      </div>
                    </th>
                    <th style="width: 35%"></th>
                  </tr>
                </thead>
                <tbody>
                  <!--Data-->
                  <?php
                  while ($row = $query->fetch()) { ?>
                    <tr>
                      <td><?php echo $row['ID']; ?></td>
                      <td style="text-align: left;">
                        <?php echo $row['name']; ?>
                      </td>
                      <td><?php echo $row['class_name']; ?></td>
                      <td>ĐKHP</td>
                      <td>
                        <?php echo $row['fullname']; ?>
                      </td>
                      <td></td>
                    </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
