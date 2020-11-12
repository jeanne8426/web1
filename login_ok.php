<?php

  $id = $_POST['id'];
  $pw = $_POST['pw'];
  $check = $_POST['radio'];

  if ($check == 0)
  {
      $con = mysqli_connect("localhost","root","111111","libse");
      $sql = "select * from users where user_id = '$id'";
      $result = mysqli_query($con, $sql);

      $num_match = mysqli_num_rows($result);
      
      if (!$num_match)
      {
        echo("
            <script>
                window.alert('등록되지 않은 아이디입니다.')
                history.go(-1)
            </script>
        ");
      }
      else {
          $row = mysqli_fetch_array($result);
          $db_pw = $row["user_pw"];

          mysqli_close($con);

          if ($pw != $db_pw)
          {
              echo("
              <script>
                window.alert('비밀번호가 틀립니다!')
                history.go(-1)
              </script>
              ");
              exit;
          }
          else {
              session_start();
              $_SESSION["userid"] = $row["user_id"];
              $_SESSION["username"] = $row["user_name"];
              $_SESSION["usermajor"] = $row["user_major"];
          
              echo("
              <script>
                location.href = 'menu.php';
              </script>
              ");
          }
      }
  }

  else
  {
      $con = mysqli_connect("localhost", "root", "111111", "libse");
      $sql = "select * from admin where admin_id = '$id'";
      $result = mysqli_query($con, $sql);

      $num_match = mysqli_num_rows($result);
      
      if (!$num_match)
      {
        echo("
            <script>
                window.alert('등록되지 않은 아이디입니다.')
                history.go(-1)
            </script>
        ");
      }
      else {
          $row = mysqli_fetch_array($result);
          $db_pw = $row["admin_pw"];

          mysqli_close($con);

          if ($pw != $db_pw)
          {
              echo("
              <script>
                window.alert('비밀번호가 틀립니다!')
                history.go(-1)
              </script>
              ");
              exit;
          }
          else {
              session_start();
              $_SESSION["adminid"] = $row["admin_id"];
              $_SESSION["adminname"] = $row["admin_name"];
          
              echo("
              <script>
                location.href = 'admin_menu.php';
              </script>
              ");
          }
      }
  }
 

 ?>



