<?php
 include("configadmin/configad.php");

 $id_can_xoa = $_GET['id'];
    
    //Bước 02: Thực hiện câu truy vấn
    $sql = "DELETE FROM tbl_admin WHERE id=$id_can_xoa";
    $result = mysqli_query($conn,$sql);

    //Bước 03: Xử lý kết quả nếu mysqli_query xóa thành công > trả về true
    if($result == true){
        header('location:'.SITEURL.'/admin/trangchu.php');
    }
?>