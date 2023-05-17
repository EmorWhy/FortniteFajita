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
  <link href="../assets/images/branding/favicon/favicon.png" rel="icon" type="image/x-icon" />
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
    <iframe src="https://1183520a-1ec4-4f33-a7ce-7673c60f912c.poki-gdn.com/1e91ea24-aa6c-4eff-8049-42f56c2ec118/index.html?country=US&ccpaApplies=0&url_referrer=https%3A%2F%2Fpoki.com%2F&tag=pg-v3.90.1&site_id=3&iso_lang=en&poki_url=https%3A%2F%2Fpoki.com%2Fen%2Fg%2Fmonkey-mart&categories=4%2C52%2C64%2C69%2C91%2C103%2C118%2C414%2C929%2C1014%2C1140%2C1141%2C1163&game_id=1183520a-1ec4-4f33-a7ce-7673c60f912c&game_version_id=1e91ea24-aa6c-4eff-8049-42f56c2ec118"></iframe>
</body>
</html>