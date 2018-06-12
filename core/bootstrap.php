<?php
    //Core files
    require_once('SqlBuilder.php');
    require_once('Utils.php');
    require_once('Router.php');
    require_once('View.php');
    require_once('Model.php');

    //Controllers
    require_once('../controller/PagesController.php');
    require_once('../controller/ApiController.php');

    //Models
    require_once('../model/PagesModel.php');

    //Routes <- started File
    require_once('../routes/map.php');
?>