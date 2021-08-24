<?php
    include("configkiemtra/config.php");
    
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
</head>
<body>

<div class="container">
  <div class="header">
    <br>
      <h2 class="">Tra Cứu Thông tin Cán Bộ Trường Đại Học Thuỷ Lợi</h2>
  </div> 
  <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="nhập tên cán bộ cần tìm..." >
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
      </div>
    <br>
</div>

<!-- đây là body -->
<div class="container">

    
    <form action="">
        <table class="table">
        <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Họ Tên</th>
                <th scope="col">Chức Vụ</th>
                <th scope="col">Đơn Vị</th>
                <th scope="col">SĐT Cơ Quan</th>
                <th scope="col">Emai</th>
                <th scope="col">SĐT Cá Nhân</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Nguyễn Văn A</td>
                <td>Trưởng Khoa</td>
                <td>Khoa Công Nghệ Thông Tin</td>
                <td>19001000</td>
                <td>Avannguyen@gmai.com</td>
                <td>0123456789</td>
                
              </tr>
              
              
            </tbody>
          </table>
    </form>
</div>

<!-- JavaScript Bundle with Popper -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>