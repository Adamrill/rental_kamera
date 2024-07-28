<?php 
if (isset($_GET['dash'])) {
    switch ($_GET['dash']) {
        case 'dashboard':
            include "dashboard.php";
            break;
        
        case 'cus_dash':
            include "cus_dash.php";
            break;

        case 'order':
            include "order.php";
            break;
        
        case 'k_dash':
            include "k_dash.php";
            break;

        case 'logout':
            include "logout.php";
            break;
    }
}
?>