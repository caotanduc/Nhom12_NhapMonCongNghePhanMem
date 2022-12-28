<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Thông tin cá nhân</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet"/>
    
    <?php 
        echo '<style>.nav-item.profile{ background-color: #cde0ff !important; }</style>';
        include "./NavBar.html"; 
      ?>
    <link href="../../public/css/ProfilePage.css" rel="stylesheet" />
  </head>
  <body>

    <div class="container-fluid h-100">
      <div class="row h-100">
        <div class="col-3 bg-primary">
          <img src="../../public/img/avatar_Profile.png" class="avatar"/>  

          <h2 class="text-center MSSV">MSSV</h2>
          <h3 class="text-center StName">Student Name</h3>

          <hr class="split-line" />
          <!-- Information in sidebar-->
          <div class="container info-container">
            <span class="info-title">Ngày sinh: </span>
            <span class="info">dd/mm/yy</span>
            <br /><br />
            <span class="info-title">Nơi sinh: </span>
            <span class="info">Ho Chi Minh City</span>
            <br /><br />
            <span class="info-title">Bậc Đào Tạo: </span>
            <span class="info">Cử nhân</span><br /><br />
            <span class="info-title">Loại hình Đào Tạo: </span>
            <span class="info">Chính Quy</span>
            <br /><br />
            <span class="info-title">Ngành: </span>
            <span class="info">Công nghệ thông tin</span>
            <br /><br />
            <span class="info-title">Chuyên ngành: </span>
            <span class="info">KTPM</span>
            <br /><br />
            <span class="info-title">Tình trạng: </span>
            <span class="info">Đang học</span>
            <br /><br />
          </div>
        </div>

        <!--Contains the main content of the webpage-->
        <div class="col-9">
          <div class="container-schedule" style="max-height: calc(100vh-7rem);">

            <h2 class="schedule-heading">THỜI KHOÁ BIỂU</h2>
            <div class="schedule" aria-labelledby="schedule-heading">
              <!-- Weekday title -->
              <span
                class="track-slot-empty"
                aria-hidden="true"
                style="grid-row: tracks"
              ></span>
              <span
                class="track-slot1"
                aria-hidden="true"
                style="grid-column: track-1; grid-row: tracks"
                >Thứ 2</span
              >
              <span
                class="track-slot2"
                aria-hidden="true"
                style="grid-column: track-2; grid-row: tracks"
                >Thứ 3</span
              >
              <span
                class="track-slot3"
                aria-hidden="true"
                style="grid-column: track-3; grid-row: tracks"
                >Thứ 4</span
              >
              <span
                class="track-slot4"
                aria-hidden="true"
                style="grid-column: track-4; grid-row: tracks"
                >Thứ 5</span
              >
              <span
                class="track-slot5"
                aria-hidden="true"
                style="grid-column: track-5; grid-row: tracks"
                >Thứ 6</span
              >
              <span
                class="track-slot6"
                aria-hidden="true"
                style="grid-column: track-6; grid-row: tracks"
                >Thứ 7</span
              >
  
              <!-- Time title -->
              <img src="../../public/img/Tiet1.png" alt="" class="time-slot" style="grid-row: time-0730">
              <img src="../../public/img/Tiet2.png" alt="" class="time-slot" style="grid-row: time-0830">
              <img src="../../public/img/Tiet3.png" alt="" class="time-slot" style="grid-row: time-0920">
              <img src="../../public/img/Tiet4.png" alt="" class="time-slot" style="grid-row: time-1020">
              <img src="../../public/img/Tiet5.png" alt="" class="time-slot" style="grid-row: time-1110">
              <img src="../../public/img/Tiet6.png" alt="" class="time-slot" style="grid-row: time-1230">
              <img src="../../public/img/Tiet7.png" alt="" class="time-slot" style="grid-row: time-1320">
              <img src="../../public/img/Tiet8.png" alt="" class="time-slot" style="grid-row: time-1420">
              <img src="../../public/img/Tiet9.png" alt="" class="time-slot" style="grid-row: time-1510">
              <img src="../../public/img/Tiet10.png" alt="" class="time-slot" style="grid-row: time-1610">
              <!-- Dashed backgound -->
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-0730 / time-0830;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-0830 / time-0920;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-0920 / time-1020;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-1020 / time-1110;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-1110 / time-1230;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-1230 / time-1320;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-1320 / time-1420;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-1420 / time-1510;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-1510 / time-1610;
                "
              ></div>
              <div
                class="session track-bg"
                style="
                  grid-column: track-1-start / track-6-end;
                  grid-row: time-1610;
                "
              ></div>
              <!-- Data -->
              <!-- T2 -->
              <div
                class="session session-1 track-1"
                style="grid-column: track-1; grid-row: time-0730 / time-1110"
              >
                <h3 class="session-title">Lập trình Windows</h3>
                <span class="session-time">Thứ 2: 7:30 - 11:10</span>
                <span class="session-room">D106</span>
              </div>
  
              <div
                class="session session-2 track-1"
                style="grid-column: track-1; grid-row: time-1230 / time-1320"
              ></div>
  
              <!-- T3 -->
              <div
                class="session session-3 track-2"
                style="grid-column: track-2; grid-row: time-0730 / time-1110"
              >
                <h3 class="session-title">Cơ sở trí tuệ nhân tạo</h3>
                <span class="session-time">Thứ 3: 7:30 - 11:10</span>
                <span class="session-room">G202</span>
              </div>
  
              <div
                class="session session-4 track-2"
                style="grid-column: track-2; grid-row: time-1230 / time-1610"
              >
                <h3 class="session-title">
                  Phát triển phần mềm cho thiết bị di động
                </h3>
                <span class="session-time">Thứ 3: 12:30 - 16:00</span>
                <span class="session-room">F301</span>
              </div>
  
              <!-- T4 -->
              <div
                class="session session-5 track-3"
                style="grid-column: track-3; grid-row: time-0730 / time-1110"
              >
                <h3 class="session-title">Hệ Điều Hành</h3>
                <span class="session-time">Thứ 4: 7:30 - 11:10</span>
                <span class="session-room">E202</span>
              </div>
  
              <div
                class="session session-6 track-3"
                style="grid-column: track-3; grid-row: time-1230 / time-1610"
              >
                <h3 class="session-title">Nhập môn công nghệ phần mềm</h3>
                <span class="session-time">Thứ 4: 12:30 - 16:00</span>
                <span class="session-room">G202</span>
              </div>
  
              <!-- T5 -->
              <div
                class="session session-7 track-4"
                style="grid-column: track-4; grid-row: time-0730 / time-0830"
              ></div>
  
              <div
                class="session session-8 track-4"
                style="grid-column: track-4; grid-row: time-1230 / time-1320"
              ></div>
  
              <!-- T6 -->
              <div
                class="session session-9 track-5"
                style="grid-column: track-5; grid-row: time-0730 / time-0830"
              ></div>
  
              <div
                class="session session-10 track-5"
                style="grid-column: track-5; grid-row: time-1230 / time-1320"
              ></div>
  
              <!-- T7 -->
              <div
                class="session session-11 track-6"
                style="grid-column: track-6; grid-row: time-0730 / time-0830"
              ></div>
  
              <div
                class="session session-12 track-6"
                style="grid-column: track-6; grid-row: time-1230 / time-1320"
              ></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
