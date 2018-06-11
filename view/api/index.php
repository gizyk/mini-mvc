<?php     
    require_once(Utils::resolvePathIssue("../template/header.php", __FILE__));
    echo json_encode($_POST);
    require_once(Utils::resolvePathIssue("../template/footer.php", __FILE__));
?>