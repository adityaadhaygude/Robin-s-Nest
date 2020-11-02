<?php
require_once 'header.php';
if($_SESSION['logged_in'] == True)
{
    if(isset($_POST["submit"])) 
    {
        $targetDir = "img/";
        $file = basename($_FILES["image"]["name"]);
        echo  $file;
        $caption = $_POST['caption'];
        $user = $_SESSION['user'];
        $targetFilePath = $targetDir . $file;
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
        $sql = "INSERT INTO `posts` (`img`, `caption`, `timestamp`, `post_user`) VALUES ('$targetFilePath','$caption',current_timestamp(),'$user')";
        $result = mysqli_query($connection,$sql);
        echo '<script>alert("Post uploaded successfully")</script>';
        // header("Location: index.php");
        // exit();
    }
}

?>