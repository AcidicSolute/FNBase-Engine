<?php
    if(empty($_POST['id'])){ //ip 기반
        require './setting.php';
        $sql = "SELECT `isAdmin` FROM `_account` WHERE `id` = \"".$_SESSION['fnUserId'].'"';
        $result = mysqli_query($conn, $sql);
        $target = $_POST['ip'];
        $iA = mysqli_fetch_assoc($result);
            if($iA['isAdmin']){
                $sql = "INSERT INTO `_ipban` (`ip`) VALUES ('$target')";
                $result = mysqli_query($conn, $sql);
                $sql = "UPDATE `_content` SET `board` = 'trash' WHERE `ip` = '$target';";
                $result = mysqli_query($conn, $sql);
                $sql = "DELETE FROM `_comment` WHERE `ip` = '$target';";
                $result = mysqli_query($conn, $sql);
                die('<script>alert("\"'.$target.'\" - 격리 완료");history.back()</script>');
            }
    }else{
        require './setting.php';
        $sql = "SELECT `isAdmin` FROM `_account` WHERE `id` = \"".$_SESSION['fnUserId'].'"';
        $result = mysqli_query($conn, $sql);
        $target = $_POST['id'];
        $iA = mysqli_fetch_assoc($result);
            if($iA['isAdmin']){
                $sql = "UPDATE `_account` SET `siteBan` = '2', `point` = '-1' WHERE `id` = '$target';";
                $result = mysqli_query($conn, $sql);
                $sql = "UPDATE `_content` SET `board` = 'trash' WHERE `id` = '$target';";
                $result = mysqli_query($conn, $sql);
                $sql = "DELETE FROM `_comment` WHERE `id` = '$target';";
                $result = mysqli_query($conn, $sql);
                die('<script>alert("\"'.$target.'\" - 격리 완료");history.back()</script>');
            }
    }
?>