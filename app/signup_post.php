<?php
require_once("../lib/functions.php");
require_once("../lib/AccountDAO.php");
$csrf_token = filter_input(INPUT_POST,"csrf_token");

var_dump($csrf_token);

if(validate_csrf_token($csrf_token === false)){
    header("Location:signup.php");
    exit();
}
$name = filter_input(INPUT_POST,"name");

if($name === ""){
    set_message(MESSAGE_SIGNUP_ERROR);
    //header("Location:signup.php");
    exit();
}
elseif(mb_strlen($name) > 20){
    set_message(MESSAGE_SIGNUP_ERROR);
    //header("Location:signup.php");
    exit();
}

$password = filter_input(INPUT_POST,"password");

if($password === ""){
    set_message(MESSAGE_SIGNUP_ERROR);
    //header("Location:signup.php");
    exit();
}
elseif(mb_strlen($password) > 20){
    set_message(MESSAGE_SIGNUP_ERROR);
    //header("Location:signup.php");
    exit();
}
$hashed_password = password_hash($password,PASSWORD_DEFAULT);

try{
    $pdo = new_PDO();
    $account_dao = new AccountDAO($pdo);
    $account = $account_dao->insert($name,$hashed_password);
    
    set_message(MESSAGE_SIGNUP_SUCCESS);
    header("Location: signin.php");
}catch(PDOException $e){
    
    if($e->getCode() == 23000)
    {
      set_message(MESSAGE_SIGNUP_ERROR_NOT_AVAILABLE_NAME);
        header("location: signup.php");
        exit();
    }
    error_log($e->getMessage());
    
}













// try{

//     $pdo = new_PDO();

//     $account_dao = new AccountDAO($pdo);
//     $account_dao->insert($name,$hashed_password);

//     set_message(MESSAGE_SIGNUP_SUCCESS);

//     header("location: signin.php");

// }catch(PDOException $e){
    
//     if($e->getCode() == 23000)
//     {
//       set_message(MESSAGE_SIGNUP_ERROR_NOT_AVAILABLE_NAME);
//         header("location: signup.php");
//         exit();
//     }
//     error_log($e->getMessage());
//     header("location: error.php");
// }
// ?>