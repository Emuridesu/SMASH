<?php 
require_once("../lib/functions.php");
require_once("../lib/PersonDAO.php");
require_once("../lib/CharaDAO.php");

$chara_id = (string)filter_input(INPUT_GET,"id");
if($chara_id === "" && filter_var($chara_id,FILTER_VALIDATE_INT) === false){
    echo "ばか";
}
require("../views/detail_view.php");


?>