<?php
     $conn=mysqli_connect("localhost","root","root","blog_uneti");
       if($conn){
           mysqli_set_charset($conn,"utf-8");
       }else{
          die(" Không kết nối được cớ sở dữ liệu").mysqli_error($conn);

       }
?>

<?php 
    $id=$_GET['post'];
    $sql="SELECT * FROM post WHERE id='{$id}'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query,MYSQLI_ASSOC);

    if(empty($row)){
        echo "Bài viết không tồn tại or đã bị xóa bởi trang chủ !!!";
    }else{
        if(isset($_POST["add-post"])){
            $title=$_POST["tenbaiviet"];
            $content=$_POST["noidung"];
            $excerpt=$_POST["tomtat"];
            $images=$_POST["hinhanh"];
            $thongbao=array(); 
            if(empty($title)){
                $thongbao['title']="Mời bạn nhập tên bài viết !!!";
              }
            if(empty($excerpt)){
                $thongbao["excerpt"]="Mòi nhập nội dung tóm tắt !!!";
              }
            if(empty($content)){
                $thongbao["content"]="MƠì nhập nội dung bài viết !!!";
              }
            if(empty($thongbao)){
                $sql="UPDATE post SET title='{$title}',content='{$content}',excerpt='{$excerpt}',
                images='{$images}' WHERE id='{$id}'
                ";
                $query=mysqli_query($conn,$sql);
                if($query){
                    $thongbao["messages"]="Sửa bài viết thành công !!!";
                }else{
                    $thongbao["messages"]="Sửa bài viết thất bại !!! ".mysqli_error($conn);
                }

            }

        }
    }

?>

<!DOCTYPE html>
<html>
      <head>
            <title>Sửa bài viết</title>
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
                           <li><a href="">Đăng nhập</a></li>
                           <li><a href="#">Đăng ký</a></li>
                           <li> <a href="index.php">Vào admin</a></li>
                       </ul>
                  </div><!--menu-->


        <div style="clear:left;"/>  
                  <div class="main">
                        <h1 style="text-align:center;height:40px;line-height:40px;margin:10px 0 10px 0;">
                              Sửa bài viết: <?php echo $row["title"]; ?>
                        </h1>
                        <div class="form">

                          
                            <?php 
                                if(!empty($thongbao["messages"])){
                                  echo '<div class="message">';
                                  echo $thongbao["messages"];
                                  echo " </div>";
                                }

                             ?>
                        
                          <form method='post' action="">
                              <table> 
                                  <tr>
                                      <td class="td-title">Tên bài viết</td>
                                       <td>
                                         <input type="text" name="tenbaiviet" value="<?php echo $row["title"]; ?>"/>
                                      </td>
                                  </tr>

                                  <tr>
                                    <td></td>
                                    <td>
                                      <?php 
                                          if(!empty($thongbao["title"])){
                                            echo $thongbao["title"];
                                          }
                                       ?>
                                    </td>
                                  </tr>


                                   <tr>
                                      <td class="td-title">Nội dung tóm tắt</td>
                                      <td>
                                        <textarea name="tomtat"><?php echo $row["excerpt"]; ?></textarea>
                                      </td>
                                   </tr>
                                    <tr>
                                      <td></td>
                                      <td>
                                        <?php 
                                            if(!empty($thongbao["excerpt"])){
                                              echo $thongbao["excerpt"];
                                            }
                                         ?>
                                      </td>
                                    </tr>

                                   <tr>
                                      <td class="td-title">Nội dung</td>
                                      <td>
                                        <textarea name="noidung"><?php echo $row["content"]; ?></textarea>
                                      </td>
                                   </tr>
                                  <tr>
                                    <td></td>
                                    <td>
                                      <?php 
                                          if(!empty($thongbao["content"])){
                                            echo $thongbao["content"];
                                          }
                                       ?>
                                    </td>
                                  </tr>
                                   <tr>
                                      <td class="td-title">Hình ảnh</td>
                                       <td>
                                         <input type="file" name="hinhanh"/>
                                      </td>
                                  </tr>
                                  <tr>
                                    <td></td>
                                    <td>
                                      <button type="submit" name="add-post">Sửa bài viết</button>
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