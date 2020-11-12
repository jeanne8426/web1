<?php

    $con = mysqli_connect("localhost","root","111111","libse");
    $sql = "select * from users where user_id";
    $result = mysqli_query($con, $sql);

    session_start();

    if(!isset($_SESSION['userid']) || !isset($_SESSION['username']) || !isset($_SESSION['usermajor'])) {
	   echo "<meta http-equiv='refresh' content='0;url=login.php'>";
	   exit;
    } else {
        $userid = $_SESSION["userid"];
        $username = $_SESSION["username"];
        $usermajor = $_SESSION["usermajor"];
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="list.css">
        <meta name="viewpoert" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>My Seat</title>
        
        <style>

        </style>
    </head>
    <body>
        <div>
            <header>
                <div id="my_seat">
                    <a href="menu.php">
                        <div id="my_seat_text">&lt; 나의 좌석</div>
                    </a>

                    <div id="re_info">
                            <div id="re_info_text">*일반* 예약 정보</div>
                            <div id="room">열람실</div>
                            <div id="room_detail">*창의*</div>
                            <div id="room_line"></div>

                            <table class="table">
                                <tr>
                                    <div>
                                        <td>좌석정보</td>
                                        <td>사용시작시간</td>
                                    </div>
                                </tr>
                                <tr>
                                    <div>
                                        <td id="info_da">*2-2*</td>
                                        <td id="info_da">*17:00~*</td>
                                    </div>
                                </tr>
                                <tr>
                                    <div>
                                        <td id="info_bl"></td>
                                        <td id="info_bl"></td>
                                    </div>
                                </tr>
                            </table>
                        </div>

                        <div id="btn_can">
                            <button id="btn_cancel">예약취소</button>
                        </div>
                    </div>
            </header>
            
            <main>
                <section>
                    <div id="re_list">좌석예약내역</div>
                </section>
                
                <section>
                    <div id="re_list_title">일반열람실</div>
                    <div id="re_line"></div>
                </section>
            </main>
            
        </div>
    </body>
</html>