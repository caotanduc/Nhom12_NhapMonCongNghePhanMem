<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Danh sách lớp mở</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <?php
    echo '<style>.nav-item.course{ background-color: #cde0ff !important; }</style>';
    include "./NavBar.html"; 
  ?> 
  <link rel="stylesheet" href="../../public/css/Course.css">
</head>

<body>
 <!-- Filter bar -->
 <nav class="navbar navbar-expand-sm bg-primary navbar-light filter-bar">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item bg-primary">
                <span class="navtext label">Năm học:</span>
            </li>
            <li class="nav-item bg-primary">
                <select class="form-select nav-namhoc" >
                    <option value="2022-2023">2022-2023</option>
                    <option value="2021-2022">2021-2022</option>
                    <option value="2020-2021">2020-2021</option>
                </select>
            </li>
            <li class="nav-item bg-primary">
                <span class="navtext label">Học kì:</span>
            </li>
            <li class="nav-item bg-primary">
                <select class="form-select nav-hk" >
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
  <!-- Table -->
  <div class="container-fluid" style="padding: 0 !important">
    <div class="text-center heading">Danh sách lớp mở</div>
    
    <div class="row h-100" style="margin: 0!important">
      <div class="container-fluid" style="padding: 1rem 7rem 4rem 7rem!important;">
        <div class="table-responsive table-course">
          <table class="table table-responsive table-hover">
            <thead style="background-color: #F0F4F8; border-bottom: 1px solid #8B8A98;">
              <tr>
                <th style="width: 6.7%">Mã<br>Môn Học</th>
                <th style="width: 10.4%">
                  <div style="display:flex; align-items:center; justify-content: center">
                    <div style="margin-left: 1rem;">Tên Môn Học</div>
                    <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                  </div>
                </th>
                <th style="width: 9.4%">
                  <div style="display:flex; align-items:center; justify-content: center">
                    <div style="margin-left: auto">Tên Lớp</div>
                    <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                  </div>
                </th>
                <th style="width:8.5%">
                  <div style="display:flex; align-items:center; justify-content: center">
                    <div style="margin-left: auto">Số tín chỉ</div>
                    <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                  </div>
                </th>
                <th style="width: 8.5%">
                  <div style="display:flex; align-items:center; justify-content: center">
                    <div style="margin-left: auto">Sĩ số</div>
                    <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                  </div>
                <th style="width: 8.5%">
                  <div style="display:flex; align-items:center; justify-content: center">
                    <div style="margin-left: auto">Đã đăng ký</div>
                    <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                  </div>
                <th style="width: 8.5%">
                  <div style="display:flex; align-items:center; justify-content: center">
                    <div style="margin-left: auto">Khóa</div>
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
                  <div style="display:flex; align-items:center; justify-content: center">
                    <div style="margin-left: auto">Nhóm TH</div>
                    <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                  </div>
                </th>
                <th style="width: 8.5%">
                  <div style="display:flex; align-items:center; justify-content: center">
                    <div style="margin-left: auto">Địa điểm</div>
                    <div style="margin-left: auto"><i class="fa fa-chevron-down"></i></div>
                  </div>
                </th>
                <th style="width: 14%"></th>
              </tr>
            </thead>
            <!-- Data -->
            <tbody>
              <tr>
                <td>CSC13002</td>
                <td style="text-align: left; padding-left: 1rem !important">Nhập môn công nghệ phần mềm</td>
                <td>20_3</td>
                <td>4</td>
                <td>120</td>
                <td>120</td>
                <td>2020</td>
                <td>T4(6-9)</td>
                <td></td>
                <td>LT-G202</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</body>

</html>