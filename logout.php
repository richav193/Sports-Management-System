<?php
session_start();
session_destroy();
echo "<script>";
echo "(window.location.assign('index.php')) </script>";
exit();

?>
