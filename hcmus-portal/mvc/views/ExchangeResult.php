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
                    <th style="width: 10%">
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
                    <th style="width: 10%">
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
                    <th style="width: 10%">
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
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13002</td>
                    <td style="text-align: left;">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>T4 (6-9)</td>
                    <td>CSC13001</td>
                    <td>Lập trình Windows</td>
                    <td>20_3</td>
                    <td>T2 (1-4)</td>
                    <td style="color: #FF6666">Đang đợi</td>
                  </tr>
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13002</td>
                    <td style="text-align: left;">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>T4 (6-9)</td>
                    <td>CSC13001</td>
                    <td>Lập trình Windows</td>
                    <td>20_3</td>
                    <td>T2 (1-4)</td>
                    <td style="color: #FF6666">Đang đợi</td>
                  </tr>
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13002</td>
                    <td style="text-align: left;">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>T4 (6-9)</td>
                    <td>CSC13001</td>
                    <td>Lập trình Windows</td>
                    <td>20_3</td>
                    <td>T2 (1-4)</td>
                    <td style="color: #FF6666">Đang đợi</td>
                  </tr>
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13002</td>
                    <td style="text-align: left;">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>T4 (6-9)</td>
                    <td>CSC13001</td>
                    <td>Lập trình Windows</td>
                    <td>20_3</td>
                    <td>T2 (1-4)</td>
                    <td style="color: #FF6666">Đang đợi</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <form action="" class="cancel" method="post">
            <button type="submit" class="btn-cancel">Huỷ ĐK</button>
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
                    <th style="width: 10%">
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
                    <th style="width: 10%">
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
                    <th style="width: 10%">
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
                  <tr>
                    <td>CSC13002</td>
                    <td style="text-align: left;">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>T4 (6-9)</td>
                    <td>CSC13001</td>
                    <td>Lập trình Windows</td>
                    <td>20_3</td>
                    <td>T2 (1-4)</td>
                    <td style="color: #14AE5C">Hoàn thành</td>
                    <td></td> <!-- blank -->
                  </tr>
                  <tr>
                    <td>CSC13002</td>
                    <td style="text-align: left;">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>T4 (6-9)</td>
                    <td>CSC13001</td>
                    <td>Lập trình Windows</td>
                    <td>20_3</td>
                    <td>T2 (1-4)</td>
                    <td style="color: #14AE5C">Hoàn thành</td>
                    <td></td> <!-- blank -->
                  </tr>
                  <tr>
                    <td>CSC13002</td>
                    <td style="text-align: left;">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>T4 (6-9)</td>
                    <td>CSC13001</td>
                    <td>Lập trình Windows</td>
                    <td>20_3</td>
                    <td>T2 (1-4)</td>
                    <td style="color: #14AE5C">Hoàn thành</td>
                    <td></td> <!-- blank -->
                  </tr>
                  <tr>
                    <td>CSC13002</td>
                    <td style="text-align: left;">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>T4 (6-9)</td>
                    <td>CSC13001</td>
                    <td>Lập trình Windows</td>
                    <td>20_3</td>
                    <td>T2 (1-4)</td>
                    <td style="color: #14AE5C">Hoàn thành</td>
                    <td></td> <!-- blank -->
                  </tr>
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