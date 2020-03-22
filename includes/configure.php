<?php 

    define('PROJECT_NAME', '/orderSum/');

    /**
    define the file name list
    **/
    //full path name, used to redirect
    define('A_FILENAME_INDEX', PROJECT_NAME . 'index.php');

    define('A_FILENAME_LOGIN', PROJECT_NAME . 'login.php');



    //reference file name , used to require
    define('COMMON_DIR', 'common/');

    define('FILENAME_COMON_HEADER',  COMMON_DIR . 'header.php');

    define('FILENAME_COMON_SIDE_MENU',  COMMON_DIR . 'side_menu.php');

    define('FILENAME_COMON_FOOTER',  COMMON_DIR . 'footer.php');



    /**
    define the users directory
    **/

    define('USERS_DIR','users/');
    define('FILENAME_PASSWORD','password.txt');

?>