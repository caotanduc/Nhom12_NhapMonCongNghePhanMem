<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="./index.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
</head>

<body>
  <div class="container">

    <div class="man">
      <img src="./public/img/img_Login1.png" />
    </div>
    <img src="./public/img/img_Login2.png" />
    <!-- Error log -->
    <?php if (isset($_GET['Error'])) {
      echo '<div class="error">';
      echo $_GET['Error'];
      echo '</div>';
    } ?>


    <form action="./mvc/controllers/login.php" method="post">
      <div class="user_field">
        <label>Tên đăng nhập</label>
        <i class="fa-solid fa-user"></i>
        <input name="username" type="text" id="typeEmailX-2" required>
        <span></span>

      </div>
      <div class="pass_field">
        <label>Mật khẩu</label>
        <i class="fa-solid fa-key"></i>

        <input name="password" type="password" id="typePasswordX-2" required>
        <span></span>

      </div>
      <div class="inputBox">
        <a href="./mvc/views/ForgotPassword.php">Quên mật khẩu</a>
        <input type="submit" value="Đăng nhập">

      </div>

    </form>
  </div>

</body>

</html>