<?php
require_once APP_ROOT . '/app/models/News.php';
$id = $_GET['id'];
News::delete($id);
header("Location: dashboard.php");
exit();
?>
