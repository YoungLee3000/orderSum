<?php 
require('includes/configure.php');
$g_hostName = $_SERVER['HTTP_HOST'];
$array_self = explode('/', $_SERVER['PHP_SELF']);
$title = substr($array_self[2], 0,strlen($array_self[2]) -4);

?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8" />
    <meta name="author" content="@liyong">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">  
    <script type="text/javascript" src="js/jquery.min.js"></script>
    
    <?php 
        if (! isset($_COOKIE['user_name'])  ||  ! file_exists(USERS_DIR . $_COOKIE['user_name'] . '/') ){ //判定是否设置cookie以及是否存在当前用户的文件夹
            $url = 'http://' . $g_hostName . A_FILENAME_LOGIN;    //跳转到登录页面
            echo '<script language="javascript" type="text/javascript">' .  'window.location.href="' . $url . '"</script>' ; 
        } 





    ?>


</head>