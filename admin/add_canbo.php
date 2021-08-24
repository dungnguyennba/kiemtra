<?php
    include("configadmin/configad.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Thông Tin Giảng Viên</title>
    <style>
    .form-control{
        width: 50%;
    }
</style>
</head>
<body>
    <img src="3094350.png" alt="">
    <h2>bc</h2>
<div class="container">
  <div class="header">
    <br>
      <h2 class="">Trang Admin Tra Cứu Thông tin Cán Bộ Trường Đại Học Thuỷ Lợi</h2>
  </div> 
  <hr>
</div>
<div class="container">
    <h4>Thêm Cán Bộ Mới</h4>
    <form method="POST" active="">
        <div class="form-group">
            <label for="exampleInputEmail1">Họ Tên</label>
            <input type="text" class="form-control " name="txt_hoten" placeholder="họ và tên">
        </div>
        <br>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Chức Vụ</label>
            <input type="text" class="form-control" name="txt_chucvu" placeholder="chức vụ">
        </div>
        <br>
        
        <div class="form-group">
            <label for="exampleInputPassword1">SĐT Cơ Quan</label>
            <input type="password" class="form-control" name="txt_sdtcoquan" placeholder="số điện thoại cơ quan">
        </div>
        <br>

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" name="txt_email" placeholder="email">
        </div>
        <br>

        <div class="form-group">
            <label for="exampleInputPassword1">SĐT Cá Nhân</label>
            <input type="password" class="form-control" name="txt_sdtcanhan" placeholder="Số điện thoại cá nhân">
        </div>
        <br>
        <button type="submit" class="btn btn-success" name="add_canbo">Thêm Cán Bộ</button>
    </form>
        <!--  xử lý backend-->
        <?php
                if(isset($_POST['adduser'])){
                    $fullName   = $_POST['txt_fullname'];
                    $userName   = $_POST['txt_username'];
                    $pass       = $_POST['txt_password'];
                // truy vấn csdl
                    $sql = "INSERT INTO tbl_admin (full_name, user_name, password)
                    VALUES ('$fullName','$userName',' $pass')";
                    if(mysqli_query($conn,$sql)){
                        header('location:'.SITEURL.'/admin/trangchu.php');
                    }
                    
                }
         ?>       
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>