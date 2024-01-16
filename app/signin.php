<?php
require_once("../lib/functions.php");
$csrf_token = generate_csrf_token();
require("../views/signin_view.php");
?>