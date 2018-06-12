
<?php  
    //echo json_encode($_GET);
    //echo json_encode($_POST);
    require_once("../core/bootstrap.php");

    if(!isset($GLOBALS["found"])) {
        $badview = new View("404", []);
        $badview->get();
    }

    
?>
