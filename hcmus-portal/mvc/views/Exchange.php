<?php
session_start();
include "../config/db_connect.php";

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
WHERE t.state IS NULL";


$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Diễn đàn trao đổi</title>

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
  <link rel="stylesheet" href="../../public/css/Exchange.css" />
</head>

<body>
  <!---->
  <div class="container-fluid" style="padding: 0 !important">
    <div id="rectangle" style="width:100%; height:4.8rem; background-color: #CDE0FF"></div>
    <div class="row h-100" style="margin: 0!important">
      <div class="col-2 bg-primary pane">
        <div class="list-group-flush">
          <a href="./Exchange.php" class="list-group-item list-group-item-action left-exchange">Diễn đàn trao đổi</a>
          <a href="./Demand.php" class="list-group-item list-group-item-action left-demand">Yêu cầu trao đổi</a>
          <a href="./ExchangeResult.php" class="list-group-item list-group-item-action left-result">Kết quả trao đổi</a>
        </div>
      </div>
      <div class="col-10" style="padding: 0px !important">
        <form action="../controllers/trade.php" class="demand" method="post">
          <!-- Table-->
          <div class="table-responsive" style="min-width: 700px; height: calc(100vh - 22rem)">
            <table class="table table-responsive table-hover">
              <thead style="background-color: #F0F4F8; border-bottom: 1px solid #8B8A98;">
                <tr>
                  <th style="width: 4%"></th>
                  <th style="width: 8.5%">Mã MH<br>Nhận</th>
                  <th style="width: 15.5%">
                    <div style="display:flex; align-items:center; justify-content: center">
                      <div style="margin-left: 0;">Tên Môn Học Nhận</div>
                      <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                    </div>
                  </th>
                  <th style="width: 8.5%">
                    <div style="display:flex; align-items:center; justify-content: center">
                      <div style="margin-left: auto">Tên Lớp</div>
                      <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                    </div>
                  </th>
                  <th style="width: 8.5%">
                    <div style="display:flex; align-items:center; justify-content: center">
                      <div style="margin-left: auto">Số tín chỉ</div>
                      <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                    </div>
                  </th>
                  <th style="width: 10.5%">
                    <div style="display:flex; align-items:center; justify-content: center">
                      <div style="margin-left: auto">Lịch học</div>
                      <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                    </div>
                  </th>
                  <th style="width: 8.5%">
                    <div style="display: flex; align-items: center; justify-content: center">
                      <div style="margin-left: auto">Mã MH<br>Yêu Cầu</div>
                      <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                    </div>
                  </th>
                  <th style="width: 8.5%">
                    <div style="display:flex; align-items:center; justify-content: center">
                      <div style="margin-left: auto">Tên MH<br>Yêu Cầu</div>
                      <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                    </div>
                  </th>
                  <th style="width: 8.5%">
                    <div style="display:flex; align-items:center; justify-content: center">
                      <div style="margin-left: auto">Tên Lớp</div>
                      <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                    </div>
                  </th>
                  <th style="width: 8.5%">
                    <div style="display:flex; align-items:center; justify-content: center">
                      <div style="margin-left: auto">Số tín chỉ</div>
                      <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                    </div>
                  </th>
                  <th style="width: 10.5%">
                    <div style="display:flex; align-items:center; justify-content: center">
                      <div style="margin-left: auto">Lịch học</div>
                      <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                    </div>
                  </th>
                </tr>
              </thead>
              <tbody>

                <?php
                $i = 1;
                while ($row = $query->fetch()) { ?>
                  <tr>
                    <td><input class="form-check-input" id="trade-<?php echo $i; $i += 1; ?>" type="radio" name="select-demand" value="<?php echo $row['trade_id']; ?>"></td>
                    <td><?php echo $row['course1_id']; ?></td>
                    <td style="text-align: left">
                      <?php echo $row['course1_name']; ?></td>
                    <td><?php echo $row['class_name1']; ?></td>
                    <td><?php echo $row['course1_cre']; ?></td>
                    <td><?php echo $row['day_name1'] . ' (' . $row['course1_start'] . ' - ' . $row['course1_end'] . ')'; ?></td>
                    <td><?php echo $row['course2_id']; ?></td>
                    <td style="text-align: left">
                      <?php echo $row['course2_name']; ?></td>
                    <td><?php echo $row['class_name2']; ?></td>
                    <td><?php echo $row['course2_cre']; ?></td>
                    <td><?php echo $row['day_name2'] . ' (' . $row['course2_start'] . ' - ' . $row['course2_end'] . ')'; ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <button type="submit" name="trade" class="btn-trade">Trao đổi</button>
          <?php
            if (isset($_SESSION['status'])) {
              echo '<div class="alert alert-success alert-dismissible" style="position: absolute; margin-top: 1rem; margin-left: 5rem; padding-left: 5rem; width: 62vw; font-size: 2rem">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>' . $_SESSION['status'] . '</strong></div>';
              unset($_SESSION['status']);
            }
            ?>
        </form>
      </div>
    </div>
  </div>
</body>

</html>