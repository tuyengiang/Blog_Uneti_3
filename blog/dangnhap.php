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
            <title>Đăng Nhập</title>
            <meta charset="utf-8"/>
            <link rel="stylesheet" type="text/css" href="css/style.css"
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
                           <li><a href="">Đăng nhập</a></li>
                           <li><a href="#">Đăng ký</a></li>
                       </ul>
                  </div><!--menu-->


        <div style="clear:left;"/>  
                  <div class="main">
                        <h1 style="text-align:center;height:40px;line-height:40px;margin:10px 0 10px 0;">
                              Đăng nhập
                        </h1>
                        <div class="form">
                          <form method='post' action="">
                              <table> 
                                  <tr>
                                      <td class="td-title">Tên đăng nhập</td>
                                       <td>
                                         <input type="text" name="tenbaiviet" placeholder="Nhập tên đăng nhập" />
                                      </td>
                                  </tr>
                                   <tr>
                                      <td class="td-title">Mật khẩu</td>
                                      <td>
                                         <input type="password" name="tenbaiviet" placeholder="Nhập mật khẩu" />
                                      </td>
                                   </tr>
                                   
                                  <tr>
                                    <td></td>
                                    <td>
                                      <button type="submit" name="add-post">Đăng Nhập</button>
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