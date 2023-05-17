<?php
error_reporting(0);

require '../keyauth.php';
require '../credentials.php';

session_start();

if (!isset($_SESSION['user_data'])) // if user not logged in
{
    header("Location: ../");
    exit();
}

$KeyAuthApp = new KeyAuth\api($name, $ownerid);

function findSubscription($name, $list)
{
    for ($i = 0; $i < count($list); $i++) {
        if ($list[$i]->subscription == $name) {
            return true;
        }
    }
    return false;
}

$username = $_SESSION["user_data"]["username"];
$subscriptions = $_SESSION["user_data"]["subscriptions"];
$subscription = $_SESSION["user_data"]["subscriptions"][0]->subscription;
$expiry = $_SESSION["user_data"]["subscriptions"][0]->expiry;

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: ../");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home | Schoology</title>
<style>
    body{
        margin: 0; /* Remove default margin */
    }
    iframe{      
        display: block;  /* iframes are inline by default */   
        height: 100vh;  /* Set height to 100% of the viewport height */   
        width: 100vw;  /* Set width to 100% of the viewport width */     
        border: none; /* Remove default border */
        background: lightyellow; /* Just for styling */
    }
</style>
</head>
<body>
    <iframe src="https://html5.gamedistribution.com/01d015cb7fb24816a20f912e5ebcca85/?gd_sdk_referrer_url=https://fortnitefajita.tk/games/cash-gun-rush.php"></iframe>
</body>
</html>