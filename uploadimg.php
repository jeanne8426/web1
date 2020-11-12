<?php
/*** check if a file was submitted ***/
if(!isset($_FILES['userqr']))
{
    echo '<p>Please select a file</p>';
}
else
{
    try    {
        upload();
        /*** give praise and thanks to the php gods ***/
        echo ("
        <script>
            window.alert('Thank you for submitting');
            location.href = 'menu.php';
        </script>
        ");
    }
    catch(Exception $e)
    {
        echo '<h4>'.$e->getMessage().'</h4>';
    }
}

function upload(){
    /*** check if a file was uploaded ***/
    if(is_uploaded_file($_FILES['userqr']['tmp_name']) && getimagesize($_FILES['userqr']['tmp_name']) != false)
    {
        $host = 'localhost';
        $username = 'root';
        $userpw = '111111';
        $dbname = 'libse';

        $con = mysqli_connect($host, $username, $userpw, $dbname);
        $sql = "select * from users where user_id";
        $result = mysqli_query($con, $sql);
        
        $row = mysqli_fetch_array($result);
        mysqli_close($con);
        
        session_start();
        $userid = $_SESSION["userid"];
        
        /***  get the image info. ***/
        $size = getimagesize($_FILES['userqr']['tmp_name']);
        /*** assign our variables ***/
        $type = $size['mime'];
        $imgfp = fopen($_FILES['userqr']['tmp_name'], 'rb');
        $size = $size[3];
        $name = $_FILES['userqr']['name'];
        $maxsize = 99999999;


        /***  check the file is less than the maximum file size ***/
        if($_FILES['userqr']['size'] < $maxsize )
        {
            
            /*** connect to db ***/
            $dbh = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $userpw);

            /*** set the error mode ***/
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            /*** our sql query ***/
            $stmt = $dbh->prepare("INSERT INTO qrimg (qr_type ,qr, qr_size, qr_name, user_id) VALUES (? ,?, ?, ?,?)");

            /*** bind the params ***/
            $stmt->bindParam(1, $type);
            $stmt->bindParam(2, $imgfp, PDO::PARAM_LOB);
            $stmt->bindParam(3, $size);
            $stmt->bindParam(4, $name);
            $stmt->bindParam(5, $userid);

            /*** execute the query ***/
            $stmt->execute();
        }
        else
        {
            /*** throw an exception is image is not of type ***/
            throw new Exception("File Size Error");
        }
    }
    else
    {
        // if the file is not less than the maximum allowed, print an error
        throw new Exception("Unsupported Image Format!");
    }
}
?>