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
<html lang="en">
  <head>
    <title>Home | Schoology</title>
    <meta name="description" content="No description is available for this page."/>
    <link href="assets/images/branding/favicon/favicon.png" rel="icon" type="image/x-icon" />
    <!-- Main Scripts-->
    <script src="resources/js/index.js"></script>
    <script src="resources/js/visit.js"></script>
    <link rel="stylesheet" href="resources/css/main.css"/>
    <!-- Extra Scripts-->
    <script src="assets/js/panic.js"></script>
    <script src="assets/js/search.js"></script>
    <script src="/assets/js/themecontrol.js"></script>
    <link href="assets/css/settings/main.css" rel="stylesheet" />
    <link href="assets/css/nav.css" rel="stylesheet" />
    <link href="assets/css/apps.css" rel="stylesheet" />
    <link href="assets/css/searchbar.css" rel="stylesheet" />
  <body>
        <!-- Nav Bar Start-->
        <div class="header2">
          <br>
          <a href="/../" class="logo">Fortnite Fajita</a>
          <div class="header2-right">
            <a href="changelog.php">Changelogs</a>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <!-- Nav Bar End-->
    <br>
    <div>
      <input class="searchbar" id="searchbar" name="search" onkeyup="search_animal()" placeholder="Search.." tag="searchbar" type="text" />
    </div>
    <script>
      const searchbar = document.getElementById("searchbar");
      searchbar.addEventListener("input", function() {
        if (searchbar.value === '') {
          // Code to execute if input field is empty
          searchbar.style.width = "25%";
          searchbar.style.height = "60px";
        } else {
          // Code to execute if input field is not empty
          searchbar.style.width = "70%";
          searchbar.style.height = "60px";
        }
      });
    </script>
    <br>
    <br>
    <h2> hey </h2>
    <!-- Advertisement Start-->
    <!-- Advertisement End-->
    <br>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="https://forms.gle/bzP4qkiNcJ171wkF8">
            <img loading="lazy" src="/assets/images/icons/request.webp" style="border-radius: 25px;" />
          </a>
          <p3> Request A Game! </p3>
        </div>
      </div>
    </div>
              <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/gg.php">
            <img loading="lazy" src="/images/goguardian.png" style="border-radius: 25px;" />
          </a>
          <p3> GoGuardian Disabler </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/slope.php">
            <img loading="lazy" src="/images/slope.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Slope </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/pixel-speedrun.php">
            <img loading="lazy" src="/images/pixelspeedrun.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Pixel Speedrun </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/skribbl.php">
            <img loading="lazy" src="/images/skribbl.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Skribbl.io </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/Vex1.php">
            <img loading="lazy" src="/images/vex1.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Vex 1 </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/vex2.php">
            <img loading="lazy" src="/images/vex2.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Vex 2 </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/vex3.php">
            <img loading="lazy" src="/images/vex3.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Vex 3 </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/vex4.php">
            <img loading="lazy" src="/images/vex4.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Vex 4 </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/vex5.php">
            <img loading="lazy" src="/images/vex5.png" style="border-radius: 25px;" />
          </a>
          <p3> Vex 5 </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/vex6.php">
            <img loading="lazy" src="/images/vex6.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Vex 6 </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/vex7.php">
            <img loading="lazy" src="/images/vex7.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Vex 7 </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/rooftopsnipers.php">
            <img loading="lazy" src="/images/rooftopsnipers.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Rooftop Snipers </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/punchout.php">
            <img loading="lazy" src="/images/punchout.webp" style="border-radius: 25px;" />
          </a>
          <p3> Punch-Out </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/run3.php">
            <img loading="lazy" src="/images/run3.png" style="border-radius: 25px;" />
          </a>
          <p3> Run 3 </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/eggycar.php">
            <img loading="lazy" src="/images/eggycar.png" style="border-radius: 25px;" />
          </a>
          <p3> Eggy Car </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/basketrandom.php">
            <img loading="lazy" src="/images/basketrandom.png" style="border-radius: 25px;" />
          </a>
          <p3> Basket Random </p3>
        </div>
      </div>
    </div>
            <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/rgbidle.php">
            <img loading="lazy" src="/images/rgbidle.jpg" style="border-radius: 25px;" />
          </a>
          <p3> RGB Idle </p3>
        </div>
      </div>
    </div>
            <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/ocarina.php">
            <img loading="lazy" src="/images/ocarina.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Ocarina of Time </p3>
        </div>
      </div>
    </div>
            <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/sm64.php">
            <img loading="lazy" src="/images/sm64.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Super Mario 64 </p3>
        </div>
      </div>
    </div>
            <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/minecraft.php">
            <img loading="lazy" src="/images/minecraft.png" style="border-radius: 25px;" />
          </a>
          <p3> Minecraft </p3>
        </div>
      </div>
    </div>
                <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/xracer.php">
            <img loading="lazy" src="/images/xracer.jpg" style="border-radius: 25px;" />
          </a>
          <p3> X-Racer </p3>
        </div>
      </div>
    </div>
                <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/snake.php">
            <img loading="lazy" src="/images/snake.webp" style="border-radius: 25px;" />
          </a>
          <p3> Snake </p3>
        </div>
      </div>
    </div>
                <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/littlealchemy.php">
            <img loading="lazy" src="/images/littlealchemy.png" style="border-radius: 25px;" />
          </a>
          <p3> Little Alchemy </p3>
        </div>
      </div>
    </div>
                <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/littlealchemy2.php">
            <img loading="lazy" src="/images/littlealchemy2.webp" style="border-radius: 25px;" />
          </a>
          <p3> Little Alchemy 2 </p3>
        </div>
      </div>
    </div>
                <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/idledice.php">
            <img loading="lazy" src="/images/idledice.png" style="border-radius: 25px;" />
          </a>
          <p3> Idle Dice </p3>
        </div>
      </div>
    </div>
                <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/blackjack.php">
            <img loading="lazy" src="/images/blackjack.png" style="border-radius: 25px;" />
          </a>
          <p3> Blackjack </p3>
        </div>
      </div>
    </div>
                <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/1v1lol.php">
            <img loading="lazy" src="/images/1v1lol.png" style="border-radius: 25px;" />
          </a>
          <p3> 1v1.lol </p3>
        </div>
      </div>
    </div>
                <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/cardzmania.php">
            <img loading="lazy" src="/images/cardzmania.webp" style="border-radius: 25px;" />
          </a>
          <p3> Cardz Mania </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/nealfun.php">
            <img loading="lazy" src="/images/nealfun.webp" style="border-radius: 25px;" />
          </a>
          <p3> Neal.fun </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/bonkio.php">
            <img loading="lazy" src="/images/bonkio.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Bonk.io </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/pkmruby.php">
            <img loading="lazy" src="/images/pkmruby.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Pokémon Ruby </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/pkmemerald.php">
            <img loading="lazy" src="/images/pkmemerald.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Pokémon Emerald </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/tallmanevolution.php">
            <img loading="lazy" src="/images/tallmanevolution.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Tall Man Evolution </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/agent-fight-3d.php">
            <img loading="lazy" src="/images/agent-fight-3d.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Agent Fight 3D </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/zombie-survivor-fight.php">
            <img loading="lazy" src="/images/zombie-survivor-fight.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Zombie Survivor Fight </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/dodge-hero.php">
            <img loading="lazy" src="/images/dodge-hero.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Dodge Hero </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/cash-gun-rush.php">
            <img loading="lazy" src="/images/cash-gun-rush.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Cash Gun Rush </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/my-mini-city.php">
            <img loading="lazy" src="/images/my-mini-city.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> My Mini City </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/demolish-derby.php">
            <img loading="lazy" src="/images/demolish-derby.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Demolish Derby </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/basket-bros.php">
            <img loading="lazy" src="/images/basket-bros.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Basket Bros </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/drunkenboxing.php">
            <img loading="lazy" src="/images/drunkenboxing.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Drunken Boxing </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/majora.php">
            <img loading="lazy" src="/images/majora.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Zelda: Majora's Mask </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/retrobowl.php">
            <img loading="lazy" src="/images/retrobowl.png" style="border-radius: 25px;" />
          </a>
          <p3> Retro Bowl </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/pkmfirered.php">
            <img loading="lazy" src="/images/pkmfirered.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Pokémon Fire Red </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/jellytruck.php">
            <img loading="lazy" src="/images/jellytruck.png" style="border-radius: 25px;" />
          </a>
          <p3> Jelly Truck </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/keepout.php">
            <img loading="lazy" src="/images/keepout.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Keep Out! </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/cookieclicker.php">
            <img loading="lazy" src="/images/cookieclicker.png" style="border-radius: 25px;" />
          </a>
          <p3> Cookie Clicker </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/subwaysurfers.php">
            <img loading="lazy" src="/images/subwaysurfers.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Subway Surfers </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/pkmfireredrandom.php">
            <img loading="lazy" src="/images/pkmfireredrandom.webp" style="border-radius: 25px;" />
          </a>
          <p3> Fire Red Randomized </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/evoworld.php">
            <img loading="lazy" src="/images/evoworld.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> EvoWorld.io </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/mariobros.php">
            <img loading="lazy" src="/images/mariobros.webp" style="border-radius: 25px;" />
          </a>
          <p3> Mario Bros </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/superheroio.php">
            <img loading="lazy" src="/images/superheroio.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> SuperHero.io </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/knock-em-all.php">
            <img loading="lazy" src="/images/knock-em-all.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Knock 'em All </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/tiles-hop-ball-master.php">
            <img loading="lazy" src="/images/tiles-hop-ball-master.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Tiles Hop Ball Master </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/what-a-leg.php">
            <img loading="lazy" src="/images/what-a-leg.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> What a Leg </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/money-rush-3d.php">
            <img loading="lazy" src="/images/money-rush-3d.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Money Rush 3D </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/dino-grass-island.php">
            <img loading="lazy" src="/images/dino-grass-island.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Dino Grass Island </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/idle-fashion-shop.php">
            <img loading="lazy" src="/images/idle-fashion-shop.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Idle Fashion Shop </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/phone-transform.php">
            <img loading="lazy" src="/images/phone-transform.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Phone Transform </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/squidly-game-hide-and-seek.php">
            <img loading="lazy" src="/images/squidly-game-hide-and-seek.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Squid Game H&S </p3>
        </div>
      </div>
    </div>
            <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/fight-simulator-3d.php">
            <img loading="lazy" src="/images/fight-simulator-3d.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Fight Simulator 3D </p3>
        </div>
      </div>
    </div>
            <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/state.io-conquer-the-world.php">
            <img loading="lazy" src="/images/state.io-conquer-the-world.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> State.io </p3>
        </div>
      </div>
    </div>
            <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/smashkarts.php">
            <img loading="lazy" src="/images/smashkarts.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Smashkarts.io </p3>
        </div>
      </div>
    </div>
            <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/crazy-laundry.php">
            <img loading="lazy" src="/images/crazy-laundry.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Crazy Laundry </p3>
        </div>
      </div>
    </div>
            <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/noob-and-pro-skateboarding.php">
            <img loading="lazy" src="/images/noob-and-pro-skateboarding.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Noob & Pro Skateboarding </p3>
        </div>
      </div>
    </div>
            <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/stickman-parkour-2-lucky-block.php">
            <img loading="lazy" src="/images/stickman-parkour-2-lucky-block.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Stickman Parkour </p3>
        </div>
      </div>
    </div>
            <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/zombies-royale-impostor-drive.php">
            <img loading="lazy" src="/images/zombies-royale-impostor-drive.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Zombies Royale </p3>
        </div>
      </div>
    </div>
            <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/gas-station-arcade.php">
            <img loading="lazy" src="/images/gas-station-arcade.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Gas Station Arcade </p3>
        </div>
      </div>
    </div>
            <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/paused.php">
            <img loading="lazy" src="/images/paused.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Paused </p3>
        </div>
      </div>
    </div>
            <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/tallman-dunk-rush.php">
            <img loading="lazy" src="/images/tallman-dunk-rush.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Tall Man Dunk Rush </p3>
        </div>
      </div>
    </div>
                <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/unfair-mario.php">
            <img loading="lazy" src="/images/unfair-mario.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Unfair Mario </p3>
        </div>
      </div>
    </div>
                <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/jelly-mario.php">
            <img loading="lazy" src="/images/jelly-mario.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Jelly Mario </p3>
        </div>
      </div>
    </div>
                <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/lordzio.php">
            <img loading="lazy" src="/images/lordzio.png" style="border-radius: 25px;" />
          </a>
          <p3> Lordz.io </p3>
        </div>
      </div>
    </div>
                <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/lordzio2.php">
            <img loading="lazy" src="/images/lordzio2.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Lordz2.io </p3>
        </div>
      </div>
    </div>
                <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/subway-fps.php">
            <img loading="lazy" src="/images/subway-fps.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Subway FPS </p3>
        </div>
      </div>
    </div>
                <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/dumb-ways-to-die-2-the-games.php">
            <img loading="lazy" src="/images/dumb-ways-to-die-2-the-games.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Dumb Ways to Die </p3>
        </div>
      </div>
    </div>
                <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/stick-duel-the-war.php">
            <img loading="lazy" src="/images/stick-duel-the-war.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Stick Duel </p3>
        </div>
      </div>
    </div>
                    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/supermarioworld.php">
            <img loading="lazy" src="/images/supermarioworld.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Super Mario World </p3>
        </div>
      </div>
    </div>
                        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/shellshockers.php">
            <img loading="lazy" src="/images/shellshockers.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Shell Shockers </p3>
        </div>
      </div>
    </div>
  <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/deepio.php">
            <img loading="lazy" src="/images/deepio.webp" style="border-radius: 25px;" />
          </a>
          <p3> Deep.io </p3>
        </div>
      </div>
    </div>
      <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/diepio.php">
            <img loading="lazy" src="/images/diepio.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Diep.io </p3>
        </div>
      </div>
    </div>
      <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/slimy-platforms.php">
            <img loading="lazy" src="/images/slimy-platforms.png" style="border-radius: 25px;" />
          </a>
          <p3> Slimy Platforms </p3>
        </div>
      </div>
    </div>
          <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/buildroyale.php">
            <img loading="lazy" src="/images/buildroyale.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Build Royale </p3>
        </div>
      </div>
    </div>
              <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/3goblets.php">
            <img loading="lazy" src="/images/3goblets.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Three Goblets </p3>
        </div>
      </div>
    </div>
  <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/superpunchout.php">
            <img loading="lazy" src="/images/superpunchout.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Super Punchout!! </p3>
        </div>
      </div>
    </div>
      <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/monkeymart.php">
            <img loading="lazy" src="/images/monkeymart.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Monkey Mart </p3>
        </div>
      </div>
    </div>
      <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/baldis-basics.php">
            <img loading="lazy" src="/images/baldis-basics.png" style="border-radius: 25px;" />
          </a>
          <p3> Baldi's Basics </p3>
        </div>
      </div>
    </div>
      <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/bitlife.php">
            <img loading="lazy" src="/images/bitlife.png" style="border-radius: 25px;" />
          </a>
          <p3> Bitlife </p3>
        </div>
      </div>
    </div>
             <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/bob-the-robber.php">
            <img loading="lazy" src="/images/bob-the-robber.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Bob the Robber </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/bobtherobber2.php">
            <img loading="lazy" src="/images/bobtherobber2.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Bob the Robber 2 </p3>
        </div>
      </div>
    </div>
        <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/Bob-the-Robber-3.php">
            <img loading="lazy" src="/images/Bob-the-Robber-3.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Bob the Robber 3 </p3>
        </div>
      </div>
    </div>
            <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/Bob-the-Robber-4.php">
            <img loading="lazy" src="/images/Bob-The-Robber-4.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Bob the Robber 4 </p3>
        </div>
      </div>
    </div>
               <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/bob-the-robber-4-season-2-russia.php">
            <img loading="lazy" src="/images/bob-the-robber-4-season-2-russia.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Bob the Robber 4.2 </p3>
        </div>
      </div>
    </div>
                  <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/bob-the-robber-4-season-3-japan.php ">
            <img loading="lazy" src="/images/bob-the-robber-4-season-3-japan.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Bob the Robber 4.3 </p3>
        </div>
      </div>
    </div>
                      <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/bob-the-robber-5-temple-adventure.php">
            <img loading="lazy" src="/images/bob-the-robber-5-temple-adventure.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Bob the Robber 5 </p3>
        </div>
      </div>
    </div>
              <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/zombsroyale.php">
            <img loading="lazy" src="/images/zombsroyale.png" style="border-radius: 25px;" />
          </a>
          <p3> Zombs Royale </p3>
        </div>
      </div>
    </div>
                  <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/stabfish.php">
            <img loading="lazy" src="/images/stabfish.webp" style="border-radius: 25px;" />
          </a>
          <p3> Stabfish.io </p3>
        </div>
      </div>
    </div>
                     <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/btd4.php">
            <img loading="lazy" src="/images/btd4.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Bloons 4 </p3>
        </div>
      </div>
    </div>
 <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/crossyroad.php">
            <img loading="lazy" src="/images/crossyroad.png" style="border-radius: 25px;" />
          </a>
          <p3> Crossy Road </p3>
        </div>
      </div>
    </div>
     <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/drivemad.php">
            <img loading="lazy" src="/images/drivemad.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Drive Mad </p3>
        </div>
      </div>
    </div>
         <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/paperio2.php">
            <img loading="lazy" src="/images/paperio2.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Paper.io 2 </p3>
        </div>
      </div>
    </div>
             <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/1v1lolnew.php">
            <img loading="lazy" src="/images/1v1lolnew.png" style="border-radius: 25px;" />
          </a>
          <p3> 1v1.lol New </p3>
        </div>
      </div>
    </div>
                 <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/warbotio.php">
            <img loading="lazy" src="/images/warbotio.jpg" style="border-radius: 25px;" />
          </a>
          <p3> WarBot.io </p3>
        </div>
      </div>
    </div>
                     <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/awesometanks2.php">
            <img loading="lazy" src="/images/awesometanks2.png" style="border-radius: 25px;" />
          </a>
          <p3> Awesome Tanks 2 </p3>
        </div>
      </div>
    </div>
<div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/tunnelrush.php">
            <img loading="lazy" src="/images/tunnelrush.jpeg" style="border-radius: 25px;" />
          </a>
          <p3> Tunnel Rush </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/linktothepast.php">
            <img loading="lazy" src="/images/linktothepast.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Link to the Past </p3>
        </div>
      </div>
    </div>
       <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/fryingnemo.php">
            <img loading="lazy" src="/images/fryingnemo.png" style="border-radius: 25px;" />
          </a>
          <p3> Frying Nemo </p3>
        </div>
      </div>
    </div>
           <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/jetpackjoyride.php">
            <img loading="lazy" src="/images/jetpackjoyride.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Jetpack Joyride </p3>
        </div>
      </div>
    </div>
               <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/stack.php">
            <img loading="lazy" src="/images/stack.png" style="border-radius: 25px;" />
          </a>
          <p3> Stack </p3>
        </div>
      </div>
    </div>
                   <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/amp-pl.php">
            <img loading="lazy" src="/images/amp-pl.png" style="border-radius: 25px;" />
          </a>
          <p3> Amp Platforming 2 </p3>
        </div>
      </div>
    </div>
<div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/bloonstd.php">
            <img loading="lazy" src="/images/bloonstd.jpg" style="border-radius: 25px;" />
          </a>
          <p3> Bloons TD </p3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span1">
        <div class="card animals" loading="lazy" style="padding-top: 5px;">
          <a onclick= href="/games/bloonstd2.php">
            <img loading="lazy" src="/images/bloonstd2.png" style="border-radius: 25px;" />
          </a>
          <p3> Bloons TD 2 </p3>
        </div>
      </div>
    </div>
    <!-- Advertisement Start-->
    <!-- Advertisement End-->
    <script>
      function load() {
        alert('This game takes a while to load, It is working though!');
      }

      function mouse() {
        alert('This game only works with a mouse.');
      }

      function ab() {
        alert('This game does not work in about:blank.');
      }

      function gfn() {
        alert('Geforce NOW is currently having some issues for some users, we are aware of this issue and are working to fix it.')
      }
    </script>
  </body>
</html>