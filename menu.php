<?php

    $host = 'localhost';
    $username = 'root';
    $userpw = '111111';
    $dbname = 'libse';

    $con = mysqli_connect($host, $username, $userpw, $dbname);
    $sql = "select * from users where user_id";
    $result = mysqli_query($con, $sql);

    $q_sql = "select qr_name, qr from qrimg where user_id = $userid";
    $q_result = mysqli_query($con, $q_sql);

    session_start();

    if(!isset($_SESSION['userid']) || !isset($_SESSION['username']) || !isset($_SESSION['usermajor'])) {
	   echo "<meta http-equiv='refresh' content='0;url=login.php'>";
	   exit;
    } else {
        $userid = $_SESSION["userid"];
        $username = $_SESSION["username"];
        $usermajor = $_SESSION["usermajor"];
        
        $qrname = $_SESSION['qrname'];
        $qr = $_SESSION['qr'];

    }

?>

<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" href="list.css">
      <meta charset="utf-8">
      <meta name="viewpoert" content="width=device-width, initial-scale=1.0">
      <script></script>
      <title>Main Page</title>
      
  </head>
    
  <body>
      <div>
          <div id="my_info">
              <table>
                  <tr>
                      <div>
                          <td class="my_info_detail">
                              <div id="my_info_text">
                                  <?php
                                    echo "$userid";
                                  ?>
                              </div>
                              <div id="my_info_text">
                                  <?php
                                    echo "$usermajor";
                                  ?>
                              </div>
                              <div id="my_info_text">
                                  <?php
                                    echo "$username";
                                  ?>
                              </div>
                          </td>
                          
                          <td class="my_info_detail">
                              
                              <div>
                                  <?php
                                      echo "<img src = '$qrname' />";
                                  ?>
                              </div>
                                  
                              <form action="uploadimg.php" method="POST" enctype="multipart/form-data">
                                  <div>
                                    <input type="file" name="userqr" />
                                  </div>
                                  <div>
                                    <input type="submit" name="submit" value="QR Upload" />
                                  </div>
                              </form>
                              
                              <!--
                              <div class="img">
                                  <div id="img_preview">
                                      <img id="my_info_qr" src="icon/0.png">
                                  </div>
                                  <div id="f_box">
                                      <label for="img">QR첨부</label>
                                      <input type="file" id="img" name="bf_file[]">
                                  </div>
                              </div>
                              -->
                              
                              <!--
                              <script>
                                  // 이미지 업로드
                                  $('#img').on('change', function() {
                                      ext = $(this).val().split('.').pop().toLowerCase(); //확장자
    
                                      //배열에 추출한 확장자가 존재하는지 체크
                                      if($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                                          resetFormElement($(this)); //폼 초기화
                                          window.alert('이미지 파일이 아닙니다! (gif, png, jpg, jpeg 만 업로드 가능)');
                                      } else {
                                          file = $('#img').prop("files")[0];
                                          blobURL = window.URL.createObjectURL(file);
                                          $('#img_preview img').attr('src', blobURL);
                                          $('#img_preview').slideDown(); //업로드한 이미지 미리보기 
                                          $(this).slideUp(); //파일 양식 감춤
                                      }
                                  });
                              </script>
                              -->

                              <!--
                                  <form method="post", action="js/uploadimg.js" enctype="multipart/form-data"></form>
                              <button onclick="uploadFile();">파일 업로드</button>
                              
                              <img id="my_info_qr" src="icon/0.png">
                              -->

                          </td>
                      </div>
                  </tr>
              </table>
          </div>

          <div id="size">
              <table id="menu">
                  <tr>
                      <div>
                          <td id="menu_detail" class="menu_line_ribo">
                              <a href="my_seat.php">
                                    <img id="icon" src="icon/1.png" style="width:50%;"><br>
                                    <div>나의 좌석</div>
                              </a>
                          </td>

                          <td id="menu_detail" class="menu_line_bo">
                              <a href="room_general.php">
                                  <img id="icon" src="icon/2.png" style="width:50%;"><br>
                                  <div>일반열람실</div>
                              </a>
                          </td>
                      </div>
                  </tr>

                  <tr>
                      <div>
                          <td id="menu_detail" class="menu_line_ribo">
                              <a href="room_group.php">
                                  <img id="icon" src="icon/3.png" style="width:50%;"><br>
                                  <div>그룹스터디룸 </div>
                              </a>
                          </td>

                          <td id="menu_detail" class="menu_line_bo">
                              <a href="/libse/board_list.php">
                                  <img id="icon" src="icon/4.png" style="width:50%;"><br>
                                  <div> 문의게시판 </div>
                              </a>
                          </td>
                      </div>
                  </tr>

                  <tr>
                      <div>
                          <td id="menu_detail" class="menu_line_ri">
                              <a href="https://library.hywoman.ac.kr/">
                                  <img id="icon" src="icon/5.png" style="width:50%;"><br>
                                  <div> 도서관 홈페이지 </div>
                              </a>
                          </td>

                          <td id="menu_detail">
                              <a href="logout.php">
                                  <img id="icon" src="icon/6.png" style="width:50%;"><br>
                                  <div> 로그아웃 </div>
                              </a>
                          </td>
                      </div>
                  </tr>
              </table> 
          </div>
      </div>
  </body>
</html>