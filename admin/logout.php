<?php
session_start();
session_destroy();
echo "<script>window.location.href = 'index.php?page=login';</script>";
exit();
?>
