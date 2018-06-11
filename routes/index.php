
<?php  
    //echo json_encode($_GET);
    //echo json_encode($_POST);
    require_once('../core/utils.php');
    require_once('../controller/pagesController.php');
    require_once('../controller/apiController.php');
    require_once('../core/router.php');
    require_once('../core/view.php');
    require_once('../core/model.php');
    require_once('../model/pagesModel.php');
    require_once('map.php');
    if(!isset($GLOBALS["found"])) {
        $badview = new View("404", []);
        $badview->get();
    }

    
?>
