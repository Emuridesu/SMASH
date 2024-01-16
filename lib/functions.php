<?php
define("SESSION_ACCOUNT", "SESSION_ACCOUNT");
define("SESSION_MESSAGE", "SESSION_MESSAGE");
define("SESSION_CSRF_TOKEN", "SESSION_CSRF_TOKEN");

define("MESSAGE_SIGNIN_SUCCESS", "Sign in successful.");
define("MESSAGE_SIGNIN_ERROR", "Sign in error.");
define("MESSAGE_SIGNUP_SUCCESS", "Sign up successful.");
define("MESSAGE_SIGNUP_ERROR", "Sign up error.");
define("MESSAGE_SIGNUP_ERROR_NOT_AVAILABLE_NAME", "Sign up error. This name is not available.");
define("MESSAGE_FINISH_SECTION", "Learning completed.");
define("MESSAGE_NO_LEARNING_HISTORY", "No learning history.");

session_start();



function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

function new_PDO()
{
    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ];
    $pdo = new PDO("mysql:host=localhost:3306;dbname=smash;charset=utf8", "root", "", $options);
    return $pdo;
}

function sign_in($account)
{
    session_regenerate_id();
    //session_regenerate_idは現在のセッションを置き換える
    $_SESSION[SESSION_ACCOUNT] = $account;

    //$SESSIONはdataを格納できる
    //値を保存しているかも
}

function is_sign_in()
{
    //issetは値が無いとfalseを返す
    return isset($_SESSION[SESSION_ACCOUNT]);
}

function sign_out()
{
    if (is_sign_in() === false) {
        return false;
    }

    $_SESSION = [];
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
    session_destroy();
}

function get_account()
{
    if (is_sign_in() === false) {
        return false;
    }
    return $_SESSION[SESSION_ACCOUNT];
}

function get_account_id()
{
    $account = get_account();
    if ($account === false) {
        return false;
    }
    //account[id]はsessionの中にある値（id）を取り出している。困ったらsign_in($account)を見る
    return $account["id"];
}

function get_account_name()
{
    $account = get_account();
    if ($account === false) {
        return false;
    }
    return $account["name"];
}

function set_message($message)
{
    $_SESSION[SESSION_MESSAGE] = $message;
}

function get_message()
{
    if (isset($_SESSION[SESSION_MESSAGE]) === false) {
        return false;
    }
    $message = $_SESSION[SESSION_MESSAGE];
    unset($_SESSION[SESSION_MESSAGE]);
    return $message;
}

function generate_csrf_token()
{
    $bytes = random_bytes(32);
    $token = bin2hex($bytes);
    $_SESSION[SESSION_CSRF_TOKEN] = $token;
    return $token;
}

function validate_csrf_token($token)
{
    if (isset($_SESSION[SESSION_CSRF_TOKEN]) === false) {
        return false;
    }
    $result = $_SESSION[SESSION_CSRF_TOKEN] === $token;
    unset($_SESSION[SESSION_CSRF_TOKEN]);
    return $result;
}
?>