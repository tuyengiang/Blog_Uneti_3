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
            <title>Blog Uneti</title>
            <meta charset="utf-8"/>
            <link rel="stylesheet" type="text/css" href="css/style.css"
      </head>
      <body>
           <div class="website">

                  <div class="header">
                      <a href="index.php"><h1>Bloguneti</h1> </a>
                      <p>Blog cá nhân đơn giản</p>
                  </div><!--header-->

                   <div class="menu">
                       <ul>
                           <li><a href="index.php">Trang chủ</a></li>
                           <li><a href="#">Bài viết</a></li>
                           <li><a href="dangnhap.php">Đăng nhập</a></li>
                           <li><a href="#">Đăng ký</a></li>
                           <li> <a href="admin/index.php">Vào admin</a></li>
                       </ul>
                  </div><!--menu-->


        <div style="clear:left;"/>  
                  <div class="main">
                      <div id="main-left">
                            <?php
                                $sql="SELECT * FROM post";
                                $query=mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
                            ?>
                            <div class="main-content">
                                  <div class="main-content-images">
                                              <img src="img/<?php echo $row['images']; ?>">
                                  </div><!--main-content-images-->
                                  <div class="main-content-excerpt">
                                      <div class="main-title">
                                          <a href="#"><?php echo $row["title"]; ?></a>
                                      </div><!--main-title-->
                                      <div class="main-nd">
                                        <?php echo $row["excerpt"]; ?>
                                      </div><!--main-nd-->
                                  </div><!--man-content-excerpt-->
                            </div><!--main-content-->
                                <?php endwhile;?>

                            <div style="clear:left;"></div>
                        </div><!--main-left-->

                      <div class="main-right">
                            <div class="title">
                                Bài viết hot nhất tháng
  
                            </div><!--title-->

                             <div class="main-right-content">
                                  <div class="main-right-content-images">
                                              <img src="img/32.PNG">
                                  </div><!--main-content-images-->
                                  <div class="main-right-content-excerpt">
                                      <div class="main-right-title">
                                          <a href="#">Bài viết mới</a>
                                      </div><!--main-title-->
                                  </div><!--man-content-excerpt-->
                            </div><!--main-right-content-->

                             <div class="main-right-content">
                                  <div class="main-right-content-images">
                                              <img src="img/32.PNG">
                                  </div><!--main-content-images-->
                                  <div class="main-right-content-excerpt">
                                      <div class="main-right-title">
                                          <a href="#">Bài viết mới</a>
                                      </div><!--main-title-->
                                  </div><!--man-content-excerpt-->
                            </div><!--main-right-content-->

                             <div class="main-right-content">
                                  <div class="main-right-content-images">
                                              <img src="img/32.PNG">
                                  </div><!--main-content-images-->
                                  <div class="main-right-content-excerpt">
                                      <div class="main-right-title">
                                          <a href="#">Bài viết mới</a>
                                      </div><!--main-title-->
                                  </div><!--man-content-excerpt-->
                            </div><!--main-right-content-->
                            <div style="clear:left;"></div>
                      </div><!--main-right-->

                    <div style="clear:both;"></div>
                  </div><!--main-->
                  <div style="clear:left;"></div>
                  <div class="footer">
                        Copyright &copy; <?php echo DATE('Y'); ?> - BLoguneti
                  </div><!--footer-->
          <div style="clear:left;"></div>
         
           </div><!--website-->
      </body>
</html>