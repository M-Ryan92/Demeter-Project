<?php
session_start();
session_destroy();
header("Location: http://demetervoeding.nl");
die();

?>