<?php
session_start();
session_unset();
header("refresh:2; url=HOME.html");
?>