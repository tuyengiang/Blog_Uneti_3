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
            <title>blog ca nhan</title>
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
                      <h1> Đây là trang admin</h1>


                  </div><!--main-->
                  <div style="clear:left;"></div>
                  <div class="footer">
                        Copyright &copy; <?php echo DATE('Y'); ?> - BLoguneti
                  </div><!--footer-->
          <div style="clear:left;"></div>
         
           </div><!--website-->
      </body>
</html>