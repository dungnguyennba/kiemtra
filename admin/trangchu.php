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
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Thông Tin Giảng Viên</title>
</head>
<body>

<div class="container">
  <div class="header">
    <br>
      <h2 class="">Trang Admin Tra Cứu Thông tin Cán Bộ Trường Đại Học Thuỷ Lợi</h2>
  </div> 
  <hr>
</div>
<!-- đây là body -->
<div class="container">
      <h4>Thông Tin Cán Bộ Của Trường  </h4><br>   
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="nhập tên cán bộ cần tìm..." >
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
      </div>
    <br>
    <a href="add_canbo.php" class="btn btn-success" >Thêm Cán Bộ</a>  
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
                <th scope="col">Chỉnh Sửa</th>
                <th scope="col">Xoá Cán Bộ</th>
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
                <td><a href=""><i class="bi bi-pencil-square"></i></a></td>
                <td><a href=""><i class="bi bi-archive-fill"></i></a></td>
                
              </tr>
              
              
            </tbody>
          </table>
    </form>
</div>
<br>
<hr>
<div class="container">
      <h4>Quản Lý Tài Khoản Admin</h4><br>
      <a href="adduser.php" class="btn btn-success">Thêm Phòng Ban</a>
      <form action="">
        <table class="table">
          <thead>
              <tr>
                
                <th scope="col">Mã Đơn Vị</th>
                <th scope="col">Tên Đơn Vị</th>
                <th scope="col">Địa Chỉ</th>
                <th scope="col">Số Điện Thoại</th>
                <th scope="col">website</th>
              </tr>
          </thead>

          <?php
                $sql = "SELECT * FROM tbl_donvi";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                $i=1;
                while($row = mysqli_fetch_assoc($result)){
        ?>
                                <tr>
                                    <th scope="row "><?php echo $i; ?></th>
                                    <td> <?php echo $row['ten_don_vi']; ?> </td>
                                    <td> <?php echo $row['dia_chi']; ?></td>
                                    <td> <?php echo $row['so_dien_thoai']; ?></td>
                                    <td> <?php echo $row['email']; ?></td>
                                    <td> <?php echo $row['website']; ?></td>
                                    
                                </tr>
                    <?php
                            $i++;
                            }
                        }
                    ?>
        </table>
    </form>
</div>
<br>
<hr>
<div class="container">
      <h4>Quản Lý Tài Khoản Admin</h4><br>
      <a href="adduser.php" class="btn btn-success">Thêm Tài Khoản</a> 
    <form action="">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Full_name</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Chỉnh Tài Khoản</th>
                <th scope="col">Xoá Tài Khoản</th>
              </tr>
            </thead>
            <?php
                $sql = "SELECT * FROM tbl_admin";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                $i=1;
                while($row = mysqli_fetch_assoc($result)){
        ?>
                                <tr>
                                    <th scope="row "><?php echo $i; ?></th>
                                    <td> <?php echo $row['full_name']; ?> </td>
                                    <td> <?php echo $row['user_name']; ?></td>
                                    <td> <?php echo $row['password']; ?></td>
                                    <td><a href="editUser.php?myid=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="delete_user.php?myid=<?php echo $row['id']; ?>"><i class="bi bi-archive-fill"></i></a></td>
                                </tr>
                    <?php
                            $i++;
                            }
                        }
                    ?>
          </table>
    </form>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>