<?php
    $page = "israel_map";
    $globalPage = "maps";
    $path = './';
    include($path.'assets/inc/header.php');
    include($path.'assets/inc/nav.php');
?>


    <h1>Map of Israel</h1>
    <hr>
    <div class="wrapper">
        <figure>
            <img src="<?php echo $path ?>assets/images/israel_map.jpg" alt="Map of Israel" usemap="#israelmap" />
            <figcaption class="caption">Clickable map of Israel</figcaption>
        </figure>
        <map name="israelmap">
            <area shape="circle" coords="108,213,20" alt="Tel Aviv" href="index.php" />
            <area shape="circle" coords="176,265,20" alt="Jerusalem" href="jerusalem.php" />
            <area shape="circle" coords="194,357,20" alt="Masada" href="masada.php" />
            <area shape="circle" coords="124,465,20" alt="Ramon Crater" href="crater.php" />
            <area shape="circle" coords="197,320,20" alt="Ein Gedi" href="ein_gedi.php" />
        </map>
        <article>
            <p>
                Above is a map encapsulating the 5 places in Israel mentioned on this site: Tel Aviv, Jerusalem, Masada,
                the Ramon Crater, and Ein Gedi. If you hover the mouse near the blue waypoints you
                can click and be brought to the page talking about those places.
            </p>
        </article>
    </div>
    <hr>
    <footer>
<?php
    include($path.'assets/inc/footer.php');
?>