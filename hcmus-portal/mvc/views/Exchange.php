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
        <!-- Table-->
        <div class="table-responsive" style="min-width: 700px; height: calc(100vh - 22rem)">
          <table class="table table-responsive table-hover">
            <thead style="background-color: #F0F4F8; border-bottom: 1px solid #8B8A98;">
              <tr>
                <th style="width: 4%"></th>
                <th style="width: 8.5%">Mã MH<br>Nhận</th>
                <th style="width: 19.5%">
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
                <th style="width: 8.5%">
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
                <th style="width: 8.5%">
                  <div style="display:flex; align-items:center; justify-content: center">
                    <div style="margin-left: auto">Lịch học</div>
                    <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox"></th>
                <td>CSC13002</td>
                <td style="text-align: left; padding-left: 1rem">Nhập môn công nghệ phần mềm</td>
                <td>20_3</td>
                <td>4</td>
                <td>T4 (6-9)</td>
                <td>CSC13001</td>
                <td>Lập trình Windows</td>
                <td>20_3</td>
                <td>4</td>
                <td>T2 (1-4)</td>
              </tr>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox"></th>
                <td>CSC13002</td>
                <td style="text-align: left; padding-left: 1rem">Nhập môn công nghệ phần mềm</td>
                <td>20_3</td>
                <td>4</td>
                <td>T4 (6-9)</td>
                <td>CSC13001</td>
                <td>Lập trình Windows</td>
                <td>20_3</td>
                <td>4</td>
                <td>T2 (1-4)</td>
              </tr>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox"></th>
                <td>CSC13002</td>
                <td style="text-align: left; padding-left: 1rem">Nhập môn công nghệ phần mềm</td>
                <td>20_3</td>
                <td>4</td>
                <td>T4 (6-9)</td>
                <td>CSC13001</td>
                <td>Lập trình Windows</td>
                <td>20_3</td>
                <td>4</td>
                <td>T2 (1-4)</td>
              </tr>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox"></th>
                <td>CSC13002</td>
                <td style="text-align: left; padding-left: 1rem">Nhập môn công nghệ phần mềm</td>
                <td>20_3</td>
                <td>4</td>
                <td>T4 (6-9)</td>
                <td>CSC13001</td>
                <td>Lập trình Windows</td>
                <td>20_3</td>
                <td>4</td>
                <td>T2 (1-4)</td>
              </tr>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox"></th>
                <td>CSC13002</td>
                <td style="text-align: left; padding-left: 1rem">Nhập môn công nghệ phần mềm</td>
                <td>20_3</td>
                <td>4</td>
                <td>T4 (6-9)</td>
                <td>CSC13001</td>
                <td>Lập trình Windows</td>
                <td>20_3</td>
                <td>4</td>
                <td>T2 (1-4)</td>
              </tr>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox"></th>
                <td>CSC13002</td>
                <td style="text-align: left; padding-left: 1rem">Nhập môn công nghệ phần mềm</td>
                <td>20_3</td>
                <td>4</td>
                <td>T4 (6-9)</td>
                <td>CSC13001</td>
                <td>Lập trình Windows</td>
                <td>20_3</td>
                <td>4</td>
                <td>T2 (1-4)</td>
              </tr>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox"></th>
                <td>CSC13002</td>
                <td style="text-align: left; padding-left: 1rem">Nhập môn công nghệ phần mềm</td>
                <td>20_3</td>
                <td>4</td>
                <td>T4 (6-9)</td>
                <td>CSC13001</td>
                <td>Lập trình Windows</td>
                <td>20_3</td>
                <td>4</td>
                <td>T2 (1-4)</td>
              </tr>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox"></th>
                <td>CSC13002</td>
                <td style="text-align: left; padding-left: 1rem">Nhập môn công nghệ phần mềm</td>
                <td>20_3</td>
                <td>4</td>
                <td>T4 (6-9)</td>
                <td>CSC13001</td>
                <td>Lập trình Windows</td>
                <td>20_3</td>
                <td>4</td>
                <td>T2 (1-4)</td>
              </tr>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox"></th>
                <td>CSC13002</td>
                <td style="text-align: left; padding-left: 1rem">Nhập môn công nghệ phần mềm</td>
                <td>20_3</td>
                <td>4</td>
                <td>T4 (6-9)</td>
                <td>CSC13001</td>
                <td>Lập trình Windows</td>
                <td>20_3</td>
                <td>4</td>
                <td>T2 (1-4)</td>
              </tr>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox"></th>
                <td>CSC13002</td>
                <td style="text-align: left; padding-left: 1rem">Nhập môn công nghệ phần mềm</td>
                <td>20_3</td>
                <td>4</td>
                <td>T4 (6-9)</td>
                <td>CSC13001</td>
                <td>Lập trình Windows</td>
                <td>20_3</td>
                <td>4</td>
                <td>T2 (1-4)</td>
              </tr>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox"></th>
                <td>CSC13002</td>
                <td style="text-align: left; padding-left: 1rem">Nhập môn công nghệ phần mềm</td>
                <td>20_3</td>
                <td>4</td>
                <td>T4 (6-9)</td>
                <td>CSC13001</td>
                <td>Lập trình Windows</td>
                <td>20_3</td>
                <td>4</td>
                <td>T2 (1-4)</td>
              </tr>
              <tr>
                <th scope="row"><input class="form-check-input" type="checkbox"></th>
                <td>CSC13002</td>
                <td style="text-align: left; padding-left: 1rem">Nhập môn công nghệ phần mềm</td>
                <td>20_3</td>
                <td>4</td>
                <td>T4 (6-9)</td>
                <td>CSC13001</td>
                <td>Lập trình Windows</td>
                <td>20_3</td>
                <td>4</td>
                <td>T2 (1-4)</td>
              </tr>
            </tbody>
          </table>
        </div>
        <form action="" class="trade" method="post">
          <button type="submit" class="btn-trade">Trao đổi</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>