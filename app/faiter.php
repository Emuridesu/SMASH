<?php
require_once("../lib/functions.php");
require_once("../lib/CharaDAO.php");

try{
    $pdo = new_PDO();
    $charaDAO = new CharaDAO($pdo);
    $charaids = $charaDAO->charaId();


    require("../views/faiter_view.php");
    
}catch(PDOException $e){
    echo $e->getMessage();

exit();

}
?>