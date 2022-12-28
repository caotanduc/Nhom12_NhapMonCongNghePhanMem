<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Quên mật khẩu</title>
  <link rel="stylesheet" href="../../public/css/ForgotPassword.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
</head>

<body>

  <div class="container">
    <!-- Error log -->
    <?php if (isset($_GET['Error'])) {
      echo '<div class="error">';
      echo $_GET['Error'];
      echo '</div>';
    } ?>
    <div class="man">
      <img src="../../public/img/img_Login1.png" />
    </div>
    <img src="../../public/img/img_Login2.png" />
    <form action="../controllers/forgot-p-w.php" method="post">
      <div class="user_field">
        <label>Tên đăng nhập</label>
        <i class="fa-solid fa-user"></i>
        <input name="username" type="text" id="typeEmailX-2" required>
        <span></span>
      </div>

      <div class="inputBox">
        <a href="../../index.php">Trở về trang đăng nhập</a>
        <input type="submit" value="Thực hiện">
      </div>
    </form>
  </div>
</body>

</html>