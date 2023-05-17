<?php
error_reporting(0);

require '../keyauth.php';
require '../credentials.php';

session_start();

if (!isset($_SESSION['user_data'])) // if user not logged in
{
    header("Location: /games/defthebypass.php");
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
<html>
<title>Home | Schoology</title>
  <link href="../assets/images/branding/favicon/favicon.png" rel="icon" type="image/x-icon" />
<b>LTMeat GoGuardian Method</b> (Originally LTBeef/Ingot)
<br>
<b>STEP 1: </b>Copy and paste this link into a new tab: chrome-extension://haldlgldplgnggkjaafhelgiaglafanh/manifest.json
<br>
<b>STEP 2: </b>Create a bookmark for both of the following links: chrome://kill and chrome://hang
<br>
<b>STEP 3: </b>Press the chrome://kill bookmark
<br>
<b>STEP 4: </b>Spam press the chrome://hang bookmark for 1-2 seconds, then press the reload button located above the 4.
<br>
<b>STEP 5: </b>If the page loads, you need to retry it.  If not, congratulations, you have successfully temporarily turned off GoGuardian! Try going to GeForce Now, and if it doesn't load, then restart GoGuardian.
<b>HOW TO RESTART/ENABLE GOGUARDIAN: </b> Press the 3 dots in the top right of your browser, then go to more tools, then go to Task manager. From there, scroll until you find "Extension: GoGuardian". Click on it, then press "End Process" That should restart/enable GoGuardian again.
<br>
  <b>BABY METHOD</b>
  <br>
<b>FOR THE TECHNOLOGICALLY CHALLENGED</b>
<br>
---
<br>
1. Visit that chrome-extension:// page, then type chrome://hang in the URL bar of that tab. It should start loading infinitely.
<br>
2. Right-click the tab and duplicate it. Don't close anything.
<br>
3. Go to the chrome://extensions page for the extension you want to disable.
<br>
4. If that page has any sort of switch, such as "Allow access to file URLs", click that switch. If there are no clickable switches, cry in a corner or something.
<br>
The extension should now be broken, assuming you clicked the switch! Only one of the two duplicate tabs should be left standing. You can close your tabs now. Refer to the help section for more help.

</html>