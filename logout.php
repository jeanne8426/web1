<?php
    session_start();
    unset($_SESSION["userid"]);
    unset($_SESSION["username"]);
    unset($_SESSION["usermajor"]);

    echo("
        <script>
            location.href = 'login.php';
        </script>
    ")
?>