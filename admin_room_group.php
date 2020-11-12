<?php

    $con = mysqli_connect('localhost', 'root', '111111', 'libse');
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
        <title>Admin Group Room Page</title>
    </head>

    <body>
        <div>
            <header>
                <a href="admin_status.php">
                    <div>
                        <div id="admin_title">&lt; 그룹열람실</div>
                        <div id="admin_title_line"></div>
                    </div>
                </a>
            </header>
            
            <main>
                <section>
                    <div id="size">
                        <table id="admin_home">
                            <tr onClick="location.href='#'">
                                <div>
                                    <td id="ad_detail" class="ad_line">
                                        <div id="ad_text">4-1</div>
                                    </td>
                                        
                                    <td id="ad_detail" class="ad_line">
                                        <div id="ad_syl">&gt;</div>
                                    </td>
                                </div>
                            </tr>

                            <tr onClick="location.href='#'">
                                <div>
                                    <td id="ad_detail" class="ad_line">
                                        <div id="ad_text">4-2</div>
                                    </td>
                                        
                                    <td id="ad_detail" class="ad_line">
                                        <div id="ad_syl">&gt;</div>
                                    </td>
                                </div>
                            </tr>

                            <tr onClick="location.href='#'">
                                <div>
                                    <td id="ad_detail" class="ad_line">
                                        <div id="ad_text">4-3</div>
                                    </td>
                                        
                                    <td id="ad_detail" class="ad_line">
                                        <div id="ad_syl">&gt;</div>
                                    </td>
                                </div>
                            </tr>
                            
                            <tr onClick="location.href='#'">
                                <div>
                                    <td id="ad_detail" class="ad_line">
                                        <div id="ad_text">6-1</div>
                                    </td>
                                        
                                    <td id="ad_detail" class="ad_line">
                                        <div id="ad_syl">&gt;</div>
                                    </td>
                                </div>
                            </tr>
                            
                            <tr onClick="location.href='#'">
                                <div>
                                    <td id="ad_detail" class="ad_line">
                                        <div id="ad_text">6-2</div>
                                    </td>
                                        
                                    <td id="ad_detail" class="ad_line">
                                        <div id="ad_syl">&gt;</div>
                                    </td>
                                </div>
                            </tr>
                            
                            <tr onClick="location.href='#'">
                                <div>
                                    <td id="ad_detail" class="ad_line">
                                        <div id="ad_text">6-3</div>
                                    </td>
                                        
                                    <td id="ad_detail" class="ad_line">
                                        <div id="ad_syl">&gt;</div>
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
