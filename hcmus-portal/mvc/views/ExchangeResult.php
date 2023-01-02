<?php
session_start();
include "../config/db_connect.php";

$student_id = $_SESSION['student_id'];

$sql = "SELECT t.trade_id, co1.ID AS course1_id, co1.name AS course1_name, cl1.name AS class_name1, co1.credits AS course1_cre, d1.name AS day_name1, aci1.start_period AS course1_start, aci1.end_period AS course1_end,
        co2.ID AS course2_id, co2.name AS course2_name, cl2.name AS class_name2, co2.credits AS course2_cre, d2.name AS day_name2, aci2.start_period AS course2_start, aci2.end_period AS course2_end
FROM trade t 
INNER JOIN course co1 ON t.course_id = co1.ID
INNER JOIN available_course_info aci1 ON t.period_id = aci1.period_id AND t.course_id = aci1.course_id AND t.class_id = aci1.class_id
INNER JOIN class cl1 ON cl1.ID = aci1.class_id
INNER JOIN day d1 on d1.num = aci1.day
INNER JOIN course co2 ON t.target_course_id = co2.ID
INNER JOIN available_course_info aci2 ON t.period_id = aci2.period_id AND t.target_course_id = aci2.course_id AND t.target_class_id = aci2.class_id
INNER JOIN class cl2 ON cl2.ID = aci2.class_id
INNER JOIN day d2 on d2.num = aci2.day
WHERE t.state IS NULL AND t.student_id = " . $student_id;

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

$sql2 = $sql = "SELECT t.trade_id, t.student_id, t.student2_id, co1.ID AS course1_id, co1.name AS course1_name, cl1.name AS class_name1, co1.credits AS course1_cre, d1.name AS day_name1, aci1.start_period AS course1_start, aci1.end_period AS course1_end,
co2.ID AS course2_id, co2.name AS course2_name, cl2.name AS class_name2, co2.credits AS course2_cre, d2.name AS day_name2, aci2.start_period AS course2_start, aci2.end_period AS course2_end
FROM trade t 
INNER JOIN course co1 ON t.course_id = co1.ID
INNER JOIN available_course_info aci1 ON t.period_id = aci1.period_id AND t.course_id = aci1.course_id AND t.class_id = aci1.class_id
INNER JOIN class cl1 ON cl1.ID = aci1.class_id
INNER JOIN day d1 on d1.num = aci1.day
INNER JOIN course co2 ON t.target_course_id = co2.ID
INNER JOIN available_course_info aci2 ON t.period_id = aci2.period_id AND t.target_course_id = aci2.course_id AND t.target_class_id = aci2.class_id
INNER JOIN class cl2 ON cl2.ID = aci2.class_id
INNER JOIN day d2 on d2.num = aci2.day
WHERE t.state IS NOT NULL AND (t.student2_id = $student_id OR t.student_id = $student_id)";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Kết quả trao đổi</title>

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
  <link rel="stylesheet" href="../../public/css/ExchangeResult.css" />
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
        <div class="container-fluid" style="padding: 5rem 8rem 4rem 6rem!important;">
          <form action="../controllers/demand-cancel.php" class="trade" method="post">
            <div class="container-table" style="height: 32vh">
              <div class="table-responsive" style="width: 100%; height: 100%">
                <h2 class="table-label1">Các yêu cầu trao đổi</h2>
                <table class="table table-responsive table-hover">
                  <thead>
                    <tr>
                      <th style="width: 3%"></th>
                      <th style="width: 9%">Mã MH<br>Nhận</th>
                      <th style="width: 21%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: 0;">Tên Môn Học Nhận</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
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
                          <div style="margin-left: auto">Lịch học</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 9%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Mã MH<br>Yêu Cầu</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      <th style="width: 12%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Tên MH<br>Yêu Cầu</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 9%">
                        <div style="display: flex; align-items: center; justify-content: center">
                          <div style="margin-left: auto">Tên Lớp</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 9%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Lịch học</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                      <th style="width: 10%">
                        <div style="display:flex; align-items:center; justify-content: center">
                          <div style="margin-left: auto">Tình trạng</div>
                          <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                        </div>
                      </th>
                    </tr>
                  </thead>
                  <!--Data-->
                  <tbody>
                    <?php 
                      $i = 1;
                      while ($row = $query->fetch()) { ?>
                      <tr>
                        <td><input class="form-check-input" id="trade-<?php echo $i; $i += 1; ?>" type="checkbox" name="select-cancel[]" value=<?php echo $row['trade_id']; ?> />&nbsp</td>
                        <td><?php echo $row['course1_id']; ?></td>
                        <td style="text-align: left">
                          <?php echo $row['course1_name']; ?></td>
                          <td><?php echo $row['class_name1']; ?></td>
                          <td><?php echo $row['day_name1'] . ' (' . $row['course1_start'] . ' - ' . $row['course1_end'] . ')'; ?></td>
                          <td><?php echo $row['course2_id']; ?></td>
                          <td style="text-align: left">
                            <?php echo $row['course2_name']; ?></td>
                          <td><?php echo $row['class_name2']; ?></td>
                          <td><?php echo $row['day_name2'] . ' (' . $row['course2_start'] . ' - ' . $row['course2_end'] . ')'; ?></td>
                        <td style="color: #FF6666">Đang đợi</td>;
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <button type="submit" name="cancel" class="btn-cancel">Huỷ ĐK</button>
            <?php
            if (isset($_SESSION['status'])) {
              echo '<div class="alert alert-success alert-dismissible" style="position: absolute; margin-top: 1rem; padding-left: 5rem; width: 62vw; font-size: 2rem">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>' . $_SESSION['status'] . '</strong></div>';
              unset($_SESSION['status']);
            }
            ?>
          </form>
          <div class="container-table" style="height: 32vh; margin-top: 9rem">
            <div class="table-responsive" style="width: 100%; height: 100%">
              <h2 class="table-label2">Các yêu cầu trao đổi đã hoàn thành</h2>
              <table class="table table-responsive table-hover">
                <thead>
                  <tr>
                    <th style="width: 9%">Mã MH<br>Nhận</th>
                    <th style="width: 21%">
                      <div style="display:flex; align-items:center; justify-content: center">
                        <div style="margin-left: 0;">Tên Môn Học Nhận</div>
                        <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
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
                        <div style="margin-left: auto">Lịch học</div>
                        <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                      </div>
                    </th>
                    <th style="width: 9%">
                      <div style="display:flex; align-items:center; justify-content: center">
                        <div style="margin-left: auto">Mã MH<br>Yêu Cầu</div>
                        <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                      </div>
                    <th style="width: 12%">
                      <div style="display:flex; align-items:center; justify-content: center">
                        <div style="margin-left: auto">Tên MH<br>Yêu Cầu</div>
                        <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                      </div>
                    </th>
                    <th style="width: 9%">
                      <div style="display: flex; align-items: center; justify-content: center">
                        <div style="margin-left: auto">Tên Lớp</div>
                        <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                      </div>
                    </th>
                    <th style="width: 9%">
                      <div style="display:flex; align-items:center; justify-content: center">
                        <div style="margin-left: auto">Lịch học</div>
                        <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                      </div>
                    </th>
                    <th style="width: 10%">
                      <div style="display:flex; align-items:center; justify-content: center">
                        <div style="margin-left: auto">Tình trạng</div>
                        <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                      </div>
                    </th>
                    <th style="width: 3%"></th> <!-- blank -->
                  </tr>
                </thead>
                <!--Data-->
                <tbody>
                  <?php
                  $query = $conn->query($sql2);
                  $query->setFetchMode(PDO::FETCH_ASSOC);

                  while ($row = $query->fetch()) { ?>
                    <tr>
                      <?php if ($row['student_id'] == $_SESSION['student_id']) { ?>
                            <td><?php echo $row['course2_id']; ?></td>
                            <td style="text-align: left">
                              <?php echo $row['course2_name']; ?></td>
                            <td><?php echo $row['class_name2']; ?></td>
                            <td><?php echo $row['day_name2'] . ' (' . $row['course2_start'] . ' - ' . $row['course2_end'] . ')'; ?></td>
                            <td><?php echo $row['course1_id']; ?></td>
                            <td style="text-align: left">
                              <?php echo $row['course1_name']; ?></td>
                            <td><?php echo $row['class_name1']; ?></td>
                            <td><?php echo $row['day_name1'] . ' (' . $row['course1_start'] . ' - ' . $row['course1_end'] . ')'; ?></td>
                      <?php } else { ?>
                            <td><?php echo $row['course1_id']; ?></td>
                            <td style="text-align: left">
                              <?php echo $row['course1_name']; ?></td>
                            <td><?php echo $row['class_name1']; ?></td>
                            <td><?php echo $row['day_name1'] . ' (' . $row['course1_start'] . ' - ' . $row['course1_end'] . ')'; ?></td>
                            <td><?php echo $row['course2_id']; ?></td>
                            <td style="text-align: left">
                              <?php echo $row['course2_name']; ?></td>
                            <td><?php echo $row['class_name2']; ?></td>
                            <td><?php echo $row['day_name2'] . ' (' . $row['course2_start'] . ' - ' . $row['course2_end'] . ')'; ?></td>
                      <?php } ?>
                      <td style="color: #14AE5C">Hoàn thành</td>;
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