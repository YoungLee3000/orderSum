<?php 

    define('PROJECT_NAME', '/orderSum/');

    /**
    define the file name list
    **/
    //full path name, used to redirect
    define('A_FILENAME_INDEX', PROJECT_NAME . 'index.php');

    define('A_FILENAME_LOGIN', PROJECT_NAME . 'login.php');

    define('A_FILENAME_CHANGE_PASS', PROJECT_NAME . 'change_pass.php' );

    define('A_FILENAME_ADD_USER', PROJECT_NAME . 'add_user.php' );

    define('A_FILENAME_ADD_SITE', PROJECT_NAME . 'add_site.php' );

    define('A_FILENAME_QUERY_ORDERS', PROJECT_NAME . 'query_orders.php' );

    define('A_FILENAME_QUERY_CUSTOMERS', PROJECT_NAME . 'query_customers.php' );

    define('A_FILENAME_EDIT_ORDER', PROJECT_NAME . 'edit_order.php' );

    define('A_FILENAME_EDIT_CUSTOMER', PROJECT_NAME . 'edit_customer.php' );



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