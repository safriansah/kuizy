<?php
session_start();
session_destroy();
session_start();
session_destroy();
header('Location: ../');
?>
