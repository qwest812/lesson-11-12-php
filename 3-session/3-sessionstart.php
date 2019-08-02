<?php
session_start();


$_SESSION['my-session']="test";

echo $_SESSION['my-session'];
