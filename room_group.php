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
        <meta charset="UTF-8">
        <title>Group Room</title>
    </head>

    <body>
        <div>
            <header>
                <a href="menu.php">
                    <div id="top">&lt; 그룹스터디룸</div>
                </a>
            </header>
            
            <main>
                <section>
                    <div id="size">
                        <table id="gr_room">
                            <tr onClick="location.href='#'">
                                <div>
                                    <td id="gr_room_detail" class="gr_room_line">
                                        <div id="gr_posi_seat"><b>*예약가능*</b></div>
                                    </td>

                                    <td id="gr_room_detail" class="gr_room_line">
                                        <div id="gr_room_text">4-1</div>
                                    </td>

                                    <td id="gr_room_detail" class="gr_room_line">
                                        <div id="gr_icon">&gt;</div>
                                    </td>
                                </div>
                            </tr>

                            <tr onClick="location.href='#'">
                                <div>
                                    <td id="gr_room_detail" class="gr_room_line">
                                        <div id="gr_imposi_seat"><b>*이용중*</b></div>
                                    </td>

                                    <td id="gr_room_detail" class="gr_room_line">
                                        <div id="gr_room_text">4-2</div>
                                    </td>

                                    <td id="gr_room_detail" class="gr_room_line">
                                        <div id="gr_icon">&gt;</div>
                                    </td>
                                </div>
                            </tr>

                            <tr onClick="location.href='#'">
                                <div>
                                    <td id="gr_room_detail" class="gr_room_line">
                                        <div id="gr_posi_seat"><b>*예약가능*</b></div>
                                    </td>

                                    <td id="ge_room_detail" class="gr_room_line">
                                        <div id="gr_room_text">4-3</div>
                                    </td>

                                    <td id="gr_room_detail" class="gr_room_line">
                                        <div id="gr_icon">&gt;</div>
                                    </td>
                                </div>
                            </tr>

                            <tr onClick="location.href='#'">
                                <div>
                                    <td id="gr_room_detail" class="gr_room_line">
                                        <div id="gr_posi_seat"><b>*예약가능*</b></div>
                                    </td>

                                    <td id="gr_room_detail" class="gr_room_line">
                                        <div id="gr_room_text">6-1</div>
                                    </td>

                                    <td id="gr_room_detail" class="gr_room_line">
                                        <div id="gr_icon">&gt;</div>
                                    </td>
                                </div>
                            </tr>

                            <tr onClick="location.href='#'">
                                <div>
                                    <td id="gr_room_detail" class="gr_room_line">
                                        <div id="gr_imposi_seat"><b>*이용중*</b></div>
                                    </td>

                                    <td id="gr_room_detail" class="gr_room_line">
                                        <div id="gr_room_text">6-2</div>
                                    </td>

                                    <td id="gr_room_detail" class="gr_room_line">
                                        <div id="gr_icon">&gt;</div>
                                    </td>
                                </div>
                            </tr>
                            
                            <tr onClick="location.href='#'">
                                <div>
                                    <td id="gr_room_detail" class="gr_room_line">
                                        <div id="gr_imposi_seat"><b>*이용중*</b></div>
                                    </td>

                                    <td id="gr_room_detail" class="gr_room_line">
                                        <div id="gr_room_text">6-3</div>
                                    </td>

                                    <td id="gr_room_detail" class="gr_room_line">
                                        <div id="gr_icon">&gt;</div>
                                    </td>
                                </div>
                            </tr>
                        </table>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>
