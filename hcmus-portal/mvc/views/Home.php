<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chủ</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="../../public/css/Home.css">

</head>

<body>
  <header>
    <div class="logo">
      <img src="../../public/img/img_LandingGr12.png" alt="" class="header-logo">
    </div>
    <input type="checkbox" id="menu-bar">
    <label for="menu-bar" class="fas fa-bars"></label>

    <nav class="navbar">
      <a href="./Home.php">HOME</a>
      <a href="#features">ABOUT US</a>
      <a href="../controllers/logout.php">
        <button type="button" class="btn-logout">Đăng xuất</button>
      </a>
    </nav>
  </header>
  <div class="main">
    <div class="decoration">
      <h3>HCMUS PORTAL</h3>
      <div class="title">
        <p>Một website đăng ký học phần tiện lợi của trường đại học, </p>
        <p>với những tính năng đặc biệt và hữu ích dành cho sinh viên.</p>
      </div>

    </div>
    <div class="image">
      <img src="../../public/img/BG_Book_Landing.png" alt="">
    </div>
  </div>

  <div class="footer">
    <form method="post">
      <div class="Profile">
        <a href="./ProfilePage.php"><img src="../../public/img/img_Landing1.png" alt=""></a>
        <a href="./ProfilePage.php" class="text">THÔNG TIN<br>CÁ NHÂN</a>
      </div>

      <div class="Profile">
        <a href="./Course.php"><img src="../../public/img/img_Landing2.png" alt=""></a>
        <a href="./Course.php" class="text">DANH SÁCH<br>LỚP MỞ</a>
      </div>

      <div class="Profile">
        <a href="./Register.php"><img src="../../public/img/img_Landing3.png" alt=""></a>
        <a href="./Register.php" class="text">ĐĂNG KÝ<br>HỌC PHẦN</a>
      </div>

      <div class="Profile">
        <a href="./Exchange.php"><img src="../../public/img/img_Landing4.png" alt=""></a>
        <a href="./Exchange.php" class="text">TRAO ĐỔI<br>HỌC PHẦN</a>
      </div>
    </form>
  </div>
</body>

</html>