<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // hiển thị dữ liệu cũ để sửa
        $sidCategory = " select * from categories where id = $id ";
        $querySid = mysqli_query($conn, $sidCategory);
      }
      if (isset($_POST['submit-update'])) {
        $id = $_GET['id'];
        $name = $_POST['names'];
      
        $sUpdate = " UPDATE categories SET name = '$name' WHERE id = $id ";
        mysqli_query($conn, $sUpdate);
        mysqli_close($conn);
        header('location: category.php');
      }
?>