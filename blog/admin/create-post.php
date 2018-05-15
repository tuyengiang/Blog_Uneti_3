<?php
     $conn=mysqli_connect("localhost","root","root","blog_uneti");
       if($conn){
           mysqli_set_charset($conn,"utf-8");
       }else{
          die(" Không kết nối được cớ sở dữ liệu").mysqli_error($conn);

       }

       if(isset($_POST["add-post"])){
          $title=$_POST["tenbaiviet"];
          $content=$_POST["noidung"];
          $excerpt=$_POST["tomtat"];
          $images=$_POST["hinhanh"];
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
                      <a href="index.php"><h1>bloguneti</h1> </a>
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
                        <h1 style="text-align:center;height:40px;line-height:40px;margin:10px 0 10px 0;">
                              Tạo bài viết mới
                        </h1>
                        <div class="form">
                          <form method='pót' action="">
                              <table> 
                                  <tr>
                                      <td class="td-title">Tên bài viết</td>
                                       <td>
                                         <input type="text" name="tenbaiviet" placeholder="Nhập tên bài viết" required="" />
                                      </td>
                                  </tr>
                                   <tr>
                                      <td class="td-title">Nội dung tóm tắt</td>
                                      <td>
                                        <textarea name="tomtat" placeholder="Nhập nội dung tóm tắt" required=""/></textarea>
                                      </td>
                                   </tr>

                                   <tr>
                                      <td class="td-title">Nội dung</td>
                                      <td>
                                        <textarea name="noidung" placeholder="Nhập nội dung" required=""/></textarea>
                                      </td>
                                   </tr>
                                   <tr>
                                      <td class="td-title">Hình ảnh</td>
                                       <td>
                                         <input type="file" name="hinhanh" required="" />
                                      </td>
                                  </tr>
                                  <tr>
                                    <td></td>
                                    <td>
                                      <button type="submit" name="add-pót">Tạo bài viết</button>
                                    </td>
                                  </tr>
                                    


                              </table>


                          </form>
                        </div><!--form-->


                  </div><!--main-->
                  <div style="clear:left;"></div>
                  <div class="footer">
                        Copyright &copy; <?php echo DATE('Y'); ?> - BLoguneti
                  </div><!--footer-->
          <div style="clear:left;"></div>
         
           </div><!--website-->
      </body>
</html>