<?php
  require_once("../../connection/connectdb.php");
?>
<?php
    if(isset($_POST['login'])) {
        try {
            $sql = "select * from customer where Email = ? and Password = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $_POST['Email']);
            $stmt->bindParam(2, $_POST['Password']);
            $stmt->execute();
            $row = $stmt->fetch();
            if($row == FALSE)
              echo "Tên người dùng hoặc mật khẩu không đúng";
              else {
                session_start();
                $_SESSION['Id'] = $row['Id'];
                $_SESSION['Email'] = $row['Email'];
                $_SESSION['Name'] = $row['Name'];
                $_SESSION['Phone'] = $row['Phone'];
                header("Location: ../index.php");
              }
          }catch(PDOException $ex) {
              echo 'Lỗi: ' . $ex->getMessage();
          }
      }  
  ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Trang đăng nhập</title>
  <link rel="stylesheet" href="customer/login/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login">
  <div class="heading">
    <h2> Đăng nhập</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa-solid fa-users"></i></span>
        <input type="text" class="form-control" name="Email" placeholder="Tên người dùng">
      </div>
      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
        <input type="password" class="form-control" name="Password" placeholder="Mật khẩu">
      </div>
      <button type="submit" class="float" name="login">Đăng nhập</button>
    </form>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
