<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<h1><?php echo $props["pages"]["title"]; ?></h1>
<small><?php echo $props["pages"]["created_at"]; ?></small>
<div>
    <?php echo $props["pages"]["body"]; ?>
</div>
<?php include("template/footer.php"); ?>