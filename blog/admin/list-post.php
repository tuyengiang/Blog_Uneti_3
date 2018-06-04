<?php
     $conn=mysqli_connect("localhost","root","root","blog_uneti");
       if($conn){
           mysqli_set_charset($conn,"utf-8");
       }else{
          die(" Không kết nối được cớ sở dữ liệu").mysqli_error($conn);

       }
?>

<!DOCTYPE html>
<html>
      <head>
            <title>Trang quản trị</title>
            <meta charset="utf-8"/>
            <link rel="stylesheet" type="text/css" href="../css/style.css"
      </head>
      <body>
           <div class="website">

                  <div class="header">
                      <a href="index.php"><h1>Bloguneti</h1> </a>
                      <p>Blog cá nhân đơn giản</p>
                  </div><!--header-->

                   <div class="menu">
                       <ul>
                           <li><a href="../index.php">Trang chủ</a></li>
                           <li><a href="create-post.php">Tạo bài viết</a></li>
                           <li><a href="#">Đăng nhập</a></li>
                           <li><a href="#">Đăng ký</a></li>
                           <li> <a href="index.php">Vào admin</a></li>
                       </ul>
                  </div><!--menu-->


        <div style="clear:left;"/>  
                  <div class="main">
                    <h1 style="text-align:center;margin-bottom:20px;">Danh sách bài viết</h1>
                    <table>
                        <thead>
                              <th>ID</th>
                              <th>Tên bài viết</th>
                              <th>Nội dung tóm tắt</th>
                              <th>Hình ảnh</th>
                              <th>Tùy chọn</th>
                        </thead>
                        <tbody>
                            <?php
                                $sql="SELECT * FROM post";
                                $query=mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
                                    
                            ?>
                                <tr>
                                    <td class="td-content"><?php echo $row["id"]; ?></td>
                                    <td class="td-content"><?php echo $row["title"]; ?></td>
                                    <td class="td-content"><?php echo $row["excerpt"]; ?></td>
                                    <td class="td-content"><img src="../img/<?php echo $row['images']; ?>"></td>
                                    <td class="td-content">
                                        <a href="edit-post.php?post=<?php echo $row['id']; ?>">Sửa</a>
                                        <button type="submit" onclick="return confirm('Bạn muốn xóa bài viết không !!!'); ">
                                            Xóa</button>
                                    </td>

                                </tr>

                            <?php } ?>
                        </tbody>
  
                    </table>

                  </div><!--main-->
                  <div style="clear:left;"></div>
                  <div class="footer">
                        Copyright &copy; <?php echo DATE('Y'); ?> - BLoguneti
                  </div><!--footer-->
          <div style="clear:left;"></div>
         
           </div><!--website-->
      </body>
</html>