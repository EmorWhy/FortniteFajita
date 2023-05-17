<?php
error_reporting(0);

require 'keyauth.php';
require 'credentials.php';

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
<html lang="en" class="dark" style="overflow: auto; color-scheme: dark;">
<head>
  <title>Home | Schoology</title>
  <link rel="icon" type="image/x-icon" href="assets/images/branding/favicon/favicon.png">
  <meta name="description" content="From studio portraits to epic alpine landscapes, browse the best photography, retouching and photojournalism today."/>
  <style>
@import url('https://fonts.googleapis.com/css2?family=Unbounded:wght@700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Unbounded:wght@300&display=swap');
@import "https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap";



h3{
  font-size: 30px;
  color: ;
  font-family: 'Unbounded', cursive;
}
h1, h2{
  font-size: 25px;
  font-weight: ;
  font-family: 'Unbounded', cursive;
}
li, p {
  font-size: 15px;
  font-weight: light;
  font-family: 'Unbounded', cursive;
}
.space{
  margin-bottom: 1px;
}
    .float{
      float: left;
      margin-top: -60px;
      margin-left: 60px;
}
body {
  color: #fff;
  overflow-x: hidden;
  font-family: poppins, sans-serif;
}
nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem 2rem;
  padding-bottom: -100px;
  margin-top:-30px;
}
nav ul {
  display: flex;
  list-style: none;
}
nav li {
  padding-left: 1rem;
}
nav a {
  text-decoration: none;
  color: #fff;
}
nav a:visited {
  color: #fff;
  text-decoration: none;
}
nav a:hover {
  color: #ffffff98;
  text-decoration: none;
}
html {
background-color: #000
}
  </style>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6840529569014734"></script>
    <script src="assets/js/panic.js"></script>
</head>
<body class="dark:bg-dark-400;">
<nav>
    <h2>Fortnite Fajita</h2>
    <ul>
        <li>
            <a href="/play">Games</a>
  </li>
  </ul>
  </nav>
  <div class="float">
    <h3 class="space">Changelog</h3>
    <p style="padding-top: 1%; margin-top: -10px;">Stay up to date with all the latest changes happening.</p>
    <br>
    <h2 class="space" style="margin-top: -10px; margin-bottom: -11px;">2023</h2>
    <p>Posted 5/8/2023
    <p>
      <hr>
    <h2 class="space">Updates</h2>
    <li>Added this page </li>
      <li> Added Shell Shockers, Deep.io, Diep.io </li>
      <li>Fixed tab icons.</li>
  </div>
  </div>
  </div>
