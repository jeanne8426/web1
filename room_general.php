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
        <title>General Room</title>
    </head>

    <body>
        <div>
            <header>
                <a href="menu.php">
                    <div id="top">&lt; 일반열람실</div>
                </a>
            </header>
            
            <main>
                <section>
                    <div id="size">
                        <table id="ge_room">
                            <tr onClick="location.href='#'">
                                <div>
                                    <td id="ge_room_detail" class="ge_room_line">
                                        <div id="ge_posi_seat"><b>*58*</b></div>
                                        <div id="ge_total_seat">/ 110</div>
                                    </td>

                                    <td id="ge_room_detail" class="ge_room_line">
                                        <div id="ge_room_text">창의열람실</div>
                                    </td>

                                    <td id="ge_room_detail" class="ge_room_line">
                                        <div id="ge_icon">&gt;</div>
                                    </td>
                                </div>
                            </tr>

                            <tr onClick="location.href='#'">
                                <div>
                                    <td id="ge_room_detail" class="ge_room_line">
                                        <div id="ge_posi_seat"><b>*32*</b></div>
                                        <div id="ge_total_seat">/ 126</div>
                                    </td>

                                    <td id="ge_room_detail" class="ge_room_line">
                                        <div id="ge_room_text">i-창작실</div>
                                    </td>

                                    <td id="ge_room_detail" class="ge_room_line">
                                        <div id="ge_icon">&gt;</div>
                                    </td>
                                </div>
                            </tr>

                            <tr onClick="location.href='#'">
                                <div>
                                    <td id="ge_room_detail" class="ge_room_line">
                                        <div id="ge_posi_seat"><b>*10*</b></div>
                                        <div id="ge_total_seat">/ 89</div>
                                    </td>

                                    <td id="ge_room_detail" class="ge_room_line">
                                        <div id="ge_room_text">4층</div>
                                    </td>

                                    <td id="ge_room_detail" class="ge_room_line">
                                        <div id="ge_icon">&gt;</div>
                                    </td>
                                </div>
                            </tr>

                            <tr onClick="location.href='#'">
                                <div>
                                    <td id="ge_room_detail" class="ge_room_line">
                                        <div id="ge_posi_seat"><b>*03*</b></div>
                                        <div id="ge_total_seat">/ 72</div>
                                    </td>

                                    <td id="ge_room_detail" class="ge_room_line">
                                        <div id="ge_room_text">5층</div>
                                    </td>

                                    <td id="ge_room_detail" class="ge_room_line">
                                        <div id="ge_icon">&gt;</div>
                                    </td>
                                </div>
                            </tr>

                            <tr onClick="location.href='6floor.html'">
                                <div>
                                    <td id="ge_room_detail" class="ge_room_line">
                                        <div id="ge_posi_seat"><b>*40*</b></div>
                                        <div id="ge_total_seat">/ 93</div>
                                    </td>


                                    <td id="ge_room_detail" class="ge_room_line">
                                        <div id="ge_room_text">6층</div>
                                    </td>

                                    <td id="ge_room_detail" class="ge_room_line">
                                        <div id="ge_icon">&gt;</div>
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
