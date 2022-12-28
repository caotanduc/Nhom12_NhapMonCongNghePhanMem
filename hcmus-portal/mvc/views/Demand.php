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
          <form action="" class="form-exchange" method="post" style="white-space: nowrap; width: 100%; margin-bottom: 3rem;">
            <label class="form-label" for="exchange-course">Môn muốn trao đổi:</label>
            <input type="text" id="exchange-course" style="font-weight: 500; font-size: 2rem; height: 4.6rem; position: absolute; width: 60vw;">
          </form>

          <div class="container-table" style="height: 28vh">
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
                    <th style="width: 16%"></th> <!-- blank-->
                  </tr>
                </thead>
                <!--Data-->
                <tbody>
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13002</td>
                    <td style="text-align: left; padding-left: 1rem !important">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>4</td>
                    <td>T4 (6-9)</td>
                    <td></td>
                    <td>LT-G202</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13007</td>
                    <td style="text-align: left; padding-left: 1rem !important">Hệ Điều Hành</td>
                    <td>20_4</td>
                    <td>4</td>
                    <td>T4 (1-4)</td>
                    <td></td>
                    <td>LT-E202</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13002</td>
                    <td style="text-align: left; padding-left: 1rem !important">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>4</td>
                    <td>T4 (6-9)</td>
                    <td></td>
                    <td>LT-G202</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13007</td>
                    <td style="text-align: left; padding-left: 1rem !important">Hệ Điều Hành</td>
                    <td>20_4</td>
                    <td>4</td>
                    <td>T4 (1-4)</td>
                    <td></td>
                    <td>LT-E202</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13002</td>
                    <td style="text-align: left; padding-left: 1rem !important">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>4</td>
                    <td>T4 (6-9)</td>
                    <td></td>
                    <td>LT-G202</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13007</td>
                    <td style="text-align: left; padding-left: 1rem !important">Hệ Điều Hành</td>
                    <td>20_4</td>
                    <td>4</td>
                    <td>T4 (1-4)</td>
                    <td></td>
                    <td>LT-E202</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13002</td>
                    <td style="text-align: left; padding-left: 1rem !important">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>4</td>
                    <td>T4 (6-9)</td>
                    <td></td>
                    <td>LT-G202</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13007</td>
                    <td style="text-align: left; padding-left: 1rem !important">Hệ Điều Hành</td>
                    <td>20_4</td>
                    <td>4</td>
                    <td>T4 (1-4)</td>
                    <td></td>
                    <td>LT-E202</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13002</td>
                    <td style="text-align: left; padding-left: 1rem !important">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>4</td>
                    <td>T4 (6-9)</td>
                    <td></td>
                    <td>LT-G202</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13007</td>
                    <td style="text-align: left; padding-left: 1rem !important">Hệ Điều Hành</td>
                    <td>20_4</td>
                    <td>4</td>
                    <td>T4 (1-4)</td>
                    <td></td>
                    <td>LT-E202</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <form action="" class="form-exchange" method="post" style="white-space: nowrap; width: 100%; margin-bottom: 3rem; margin-top: 3rem;">
            <label class="form-label" for="exchange-course">Môn muốn trao đổi:</label>
            <input type="text" id="exchange-course" style="font-weight: 500; font-size: 2rem; height: 4.6rem; position: absolute; width: 60vw;">
          </form>

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
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13002</td>
                    <td style="text-align: left; padding-left: 1rem !important">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>4</td>
                    <td>2020</td>
                    <td>T4 (6-9)</td>
                    <td></td>
                    <td>LT-G202</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13002</td>
                    <td style="text-align: left; padding-left: 1rem !important">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>4</td>
                    <td>2020</td>
                    <td>T4 (6-9)</td>
                    <td></td>
                    <td>LT-G202</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13002</td>
                    <td style="text-align: left; padding-left: 1rem !important">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>4</td>
                    <td>2020</td>
                    <td>T4 (6-9)</td>
                    <td></td>
                    <td>LT-G202</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13002</td>
                    <td style="text-align: left; padding-left: 1rem !important">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>4</td>
                    <td>2020</td>
                    <td>T4 (6-9)</td>
                    <td></td>
                    <td>LT-G202</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row"><input class="form-check-input" type="checkbox"></th>
                    <td>CSC13002</td>
                    <td style="text-align: left; padding-left: 1rem !important">Nhập môn công nghệ phần mềm</td>
                    <td>20_3</td>
                    <td>4</td>
                    <td>2020</td>
                    <td>T4 (6-9)</td>
                    <td></td>
                    <td>LT-G202</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <form action="" class="register" method="post">
              <button type="submit" class="btn-register">Đăng ký</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>