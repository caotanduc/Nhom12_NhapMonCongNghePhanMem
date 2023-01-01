<?php
session_start();
include "../config/db_connect.php";

$sql = "SELECT co.ID, co.name, c.name as class_name, co.credits, aci.room, en.period_id, en.class_id
from enrollment en inner join class c on en.class_id = c.ID
inner join course co on en.course_id = co.ID
inner join available_course_info aci on en.period_id = aci.period_id and en.course_id = aci.course_id and en.class_id = aci.class_id
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

  <title>Kết quả đăng ký học phần</title>

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
  <link rel="stylesheet" href="../../public/css/Result.css" />
</head>

<body>
  <!---->
  <div class="container-fluid" style="padding: 0 !important">
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

    <div class="row h-100" style="margin: 0!important">
      <div class="col-2 bg-primary" style="padding: 0px !important">
        <div class="list-group-flush">
          <a href="./Register.php" class="list-group-item list-group-item-action left-register">Đăng ký học phần</a>
          <a href="./Result.php" class="list-group-item list-group-item-action left-result">Kết quả đăng ký</a>
          <a href="./History.php" class="list-group-item list-group-item-action left-history">Lịch sử đăng ký</a>
        </div>
      </div>

      <div class="col-10 pane" style="padding: 0px !important">
        <div class="container-fluid" style="padding: 4rem 8rem 0 6rem!important;">

          <div class="container-table" style="height: 32vh">
            <div class="table-responsive" style="width: 100%; height: 100%">
              <h2 class="table-label1">Danh sách môn học đã đăng ký</h2>
              <table class="table table-responsive table-hover">
                <thead>
                  <tr>
                    <th style="width: 8%">Mã<br>Môn Học</th>
                    <th style="width: 21%">
                      <div style="display:flex; align-items:center; justify-content: center">
                        <div style="margin-left: 1rem">Tên Môn Học</div>
                        <div style="margin-left: auto; margin-right: 5rem"><i class="fa fa-chevron-down"></i></div>
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
                    <th style="width: 31%"></th> <!-- blank -->
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
                      <td>
                        <?php echo $row['credits']; ?>
                      </td>
                      <td></td>
                      <td>
                        <?php echo $row['room']; ?>
                      </td>
                      <td></td>
                    </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
          </div>

          <div class="container-table" style="height: 32vh; margin-top: 5rem">
            <div class="table-responsive" style="width: 100%; height: 100%">
              <h2 class="table-label2">Danh sách môn học đã vào hàng đợi</h2>
              <table class="table table-responsive table-hover">
                <thead>
                  <tr>
                    <th style="width: 8%">Mã<br>Môn Học</th>

                    <th style="width: 12%">
                      <div style="display:flex; align-items:center; justify-content: center">
                        <div style="margin-left: auto;">Tên<br>Môn Học</div>
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
                        <div style="margin-left: auto">Sĩ số</div>
                        <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                      </div>
                    </th>
                    <th style="width: 10%">
                      <div style="display:flex; align-items:center; justify-content: center">
                        <div style="margin-left: auto">Đã đăng ký</div>
                        <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                      </div>
                    <th style="width: 10%">
                      <div style="display:flex; align-items:center; justify-content: center">
                        <div style="margin-left: auto">Khoá</div>
                        <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                      </div>
                    </th>
                    <th style="width: 10%">
                      <div style="display: flex; align-items: center; justify-content: center">
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
                      <div style="display: flex; align-items: center; justify-content: center">
                        <div style="margin-left: auto">Địa điểm</div>
                        <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                      </div>
                    </th>
                    <th style="width: 10%">
                      <div style="display: flex; align-items: center; justify-content: center">
                        <div style="margin-left: auto">Vị trí<br>hàng đợi</div>
                        <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                      </div>
                    </th>
                  </tr>
                </thead>
                <!--Data-->
                <tbody>
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
