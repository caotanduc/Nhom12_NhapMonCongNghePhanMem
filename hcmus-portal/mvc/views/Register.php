<?php
session_start();
include "../config/db_connect.php";

$sql = "SELECT aci.course_id, c.name, 
cl.name as class_name, c.credits, aci.max_student, 
count(distinct en.student_id) as registered, ac.school_year, 
d.name as day_name, aci.start_period, aci.end_period, aci.room, aci.period_id, aci.class_id
from available_course_info aci inner join course c on aci.course_id  = c.ID
inner join class cl on aci.class_id = cl.ID
left join enrollment en on aci.period_id = en.period_id and aci.course_id = en.course_id and aci.class_id = en.class_id 
inner join available_course ac on aci.period_id = ac.period_id and aci.course_id = ac.course_id
inner join day d on d.num = aci.day
group by aci.period_id, aci.course_id, aci.class_id";


$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

$sql2 = "SELECT co.ID, co.name, c.name as class_name, co.credits, aci.room, en.period_id, en.class_id
from enrollment en inner join class c on en.class_id = c.ID
inner join course co on en.course_id = co.ID
inner join available_course_info aci on en.period_id = aci.period_id and en.course_id = aci.course_id and en.class_id = aci.class_id
where en.student_id = " . $_SESSION['student_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Đăng ký học phần</title>

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
  <link rel="stylesheet" href="../../public/css/Register.css" />
</head>

<body>
  <!---->
  <div class="container-fluid" style="padding: 0 !important">
    <div id="rectangle" style="width:100%; height:4.8rem; background-color: #CDE0FF"></div>
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

          <form action="../controllers/course-reg.php" class="register" method="post">
            <div class="container-table" style="height: 33vh">
              <div class="table-responsive" style="width: 100%; height: 100%">
                <h2 class="table-label1">Danh sách lớp mở</h2>

                <table class="table table-responsive table-hover">
                  <thead>
                    <tr>
                      <th style="width: 5%"></th>
                      <th style="width: 8%">Mã<br>Môn Học</th>
                      <th style="width: 12%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Tên<br>Môn Học</div>
                          <div style="margin-left: auto; margin-right: 5rem"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 9%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Tên Lớp</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 9%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Số tín chỉ</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 9%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Sĩ Số</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 9%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Đã đăng ký</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      <th style="width: 9%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Khoá</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 12%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Lịch học</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 9%">
                        <div style="display: flex; align-items: center; justify-content: center">
                          <div style="margin-left: auto">Nhóm TH</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 9%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Địa điểm</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                    </tr>
                  </thead>

                  <tbody>
                    <!--Data-->
                    <?php while ($row = $query->fetch()) { ?>
                    <tr>
                      <td>
                        <input class="form-check-input" type="checkbox" name="select-register[]" 
                        value=<?php echo $row['period_id'] . "," . $row['course_id'] . "," . $row['class_id'];?> />&nbsp
                      </td>

                      <td><?php echo $row['course_id']; ?></td>
                      <td style="text-align: left;">
                        <?php echo $row['name']; ?></td>
                      <td><?php echo $row['class_name']; ?></td>
                      <td><?php echo $row['credits']; ?></td>
                      <td><?php echo $row['max_student']; ?></td>
                      <td><?php echo $row['registered']; ?></td>
                      <td><?php echo $row['school_year']; ?></td>
                      <td><?php echo $row['day_name'] . ' (' . $row['start_period'] . ' - ' . $row['end_period'] . ')'; ?>
                      </td>
                      <td></td>
                      <td><?php echo $row['room']; ?></td>
                    </tr>
                    <?php } ?>

                  </tbody>
                </table>

              </div>
            </div>

            <button type="submit" name="register-button" class="btn-register">Đăng ký</button>

            <?php
            if (isset($_SESSION['status1'])) {
              echo '<div class="alert alert-success alert-dismissible" style="position: absolute; margin-top: 1rem; padding-left: 5rem; width: 62vw; font-size: 2rem">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>' . $_SESSION['status1'] . '</strong></div>';
              unset($_SESSION['status1']);
            }
            ?>
          </form>


          <form action="../controllers/cancel.php" class="cancel" method="post">
            <div class="container-table" style="height: 32vh; margin-top: 8rem">
              <div class="table-responsive" style="width: 100%; height: 100%">
                <h2 class="table-label2">Danh sách môn học đã đăng ký</h2>


                <table class="table table-responsive table-hover">
                  <thead style="background-color: #F0F4F8; border-bottom: 1px solid #8B8A98;">
                    <tr>
                      <th style="width: 5%"></th>
                      <th style="width: 9%">Mã<br>Môn Học</th>
                      <th style="width: 22%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: 2rem;">Tên Môn Học</div>
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
                      <th style="width: 10%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Nhóm TH</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      <th style="width: 10%">
                        <div style="display:flex; align-items:center; justify-content: center">
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
                      <th style="width: 14%"></th> <!-- blank -->
                    </tr>
                  </thead>
                  <!--Data-->
                  <tbody>
                    <?php
                    $query = $conn->query($sql2);
                    $query->setFetchMode(PDO::FETCH_ASSOC);

                    while ($row = $query->fetch()) { ?>
                    <tr>
                      <td><input class="form-check-input" type="checkbox" name="select-cancel[]" value="
                      <?php echo $row['period_id'] . "," . $row['ID'] . "," . $row['class_id'];?>" />&nbsp</td>
                      <td><?php echo $row['ID']; ?></td>
                      <td style="text-align: left;">
                        <?php echo $row['name']; ?></td>
                      <td><?php echo $row['class_name']; ?></td>
                      <td><?php echo $row['credits']; ?></td>
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
            <button type="submit" name="cancel-button" class="btn-cancel">Huỷ HP</button>

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
  </div>
</body>

</html>