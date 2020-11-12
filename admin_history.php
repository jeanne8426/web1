<?php

    $con = mysqli_connect("localhost","root","111111","libse");
    $sql = "select * from admin where admin_id";
    $result = mysqli_query($con, $sql);

    session_start();

    if(!isset($_SESSION['adminid']) || !isset($_SESSION['adminname'])) {
	   echo "<meta http-equiv='refresh' content='0;url=login.php'>";
	   exit;
    } else {
        $adminid = $_SESSION["adminid"];
        $adminname = $_SESSION["adminname"];
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="list.css">
        <meta name="viewpoert" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Admin Reservation History Page</title>
    </head>
    
    <body>
        <div>
            <header>
                <a href="admin_menu.php">
                    <div>
                        <div id="admin_title">&lt; 예약내역</div>
                        <div id="admin_title_line"></div>
                    </div>
                </a>
            </header>
            
            <main>
                <section>
                    <div id="size">
                        <table id="admin_history">
                            <tr>
                                <div>
                                    <th id="his_detail">
                                        <div id="his_text">날짜</div>
                                    </th>
                                        
                                    <th id="his_detail">
                                        <div id="his_text">열람실</div>
                                    </th>
                                    
                                    <th id="his_detail">
                                        <div id="his_text">좌석정보</div>
                                    </th>
                                        
                                    <th id="his_detail">
                                        <div id="his_text">시작시간</div>
                                    </th>
                                    
                                    <th id="his_detail">
                                        <div id="his_text">학번</div>
                                    </th>
                                        
                                    <th id="his_detail">
                                        <div id="his_text">이름</div>
                                    </th>
                                    
                                </div>
                            </tr>

                            <tr>
                                <div>
                                    <td id="his_detail">
                                        <div id="his_text_td">*2020.09.18*</div>
                                    </td>
                                        
                                    <td id="his_detail">
                                        <div id="his_text_td">*창의열람실*</div>
                                    </td>
                                    
                                    <td id="his_detail">
                                        <div id="his_text_td">*2-8*</div>
                                    </td>
                                        
                                    <td id="his_detail">
                                        <div id="his_text_td">*16:00*</div>
                                    </td>
                                    
                                    <td id="his_detail">
                                        <div id="his_text_td">*218230045*</div>
                                    </td>
                                        
                                    <td id="his_detail">
                                        <div id="his_text_td">*길예진*</div>
                                    </td>
                                </div>
                            </tr>

                            <tr>
                                <div>
                                    <td id="his_detail">
                                        <div id="his_text_td">*2020.09.18*</div>
                                    </td>
                                        
                                    <td id="his_detail">
                                        <div id="his_text_td">*창의열람실*</div>
                                    </td>
                                    
                                    <td id="his_detail">
                                        <div id="his_text_td">*2-8*</div>
                                    </td>
                                        
                                    <td id="his_detail">
                                        <div id="his_text_td">*16:00*</div>
                                    </td>
                                    
                                    <td id="his_detail">
                                        <div id="his_text_td">*218230045*</div>
                                    </td>
                                        
                                    <td id="his_detail">
                                        <div id="his_text_td">*길예진*</div>
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