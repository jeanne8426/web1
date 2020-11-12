<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="list.css">
        <script type="text/javascript" src="./js/login.js"></script>
        <meta name="viewpoert" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Login Page</title>
        
        <style></style>
    </head>

    <body>
        <div id="login">
            
            <div id="logo">
                <img id="logo_img" src="icon/logo.png">
            </div>
            
            <form name="login" method="post" action="login_ok.php">
                <div class="container">
                    <input id="id" type="text" placeholder="아이디" name="id">
                    <input id="pw" type="password" placeholder="비밀번호" name="pw">
                </div>

                <div class="checkcontainer">
                    <label class="choice">
                        <input id="student" class="radio" type="radio" checked="checked" name="radio" value="0">
                        <span>학생</span>
                    </label>
                
                    <label class="choice">
                        <input id="admin" class="radio" type="radio" name="radio" value="1">
                        <span>관리자</span>
                    </label>
                
                </div>
            
                <div class="login_btn">
                    <a href="#">
                        <img src="icon/logbtn.PNG" id="login_btn" onclick="check_input()">
                    </a>
                </div>
            </form>
            
        </div>
    </body>
</html>