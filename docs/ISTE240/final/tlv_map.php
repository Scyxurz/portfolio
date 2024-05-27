<?php
    $page = "tlv_map";
    $globalPage = "maps";
    $path = './';
    include($path.'assets/inc/header.php');
    include($path.'assets/inc/nav.php');
?>

    <h1>Map of Tel Aviv</h1>
    <hr>
    <div class="wrapper">
        <figure>
            <img src="<?php echo $path ?>assets/images/tel_aviv_map.JPG" alt="Map of Tel Aviv" usemap="#tlvmap" />
            <figcaption class="caption">Clickable map of Tel Aviv</figcaption>
        </figure>
        <map name="tlvmap">
            <area shape="circle" coords="185,591,30" alt="Tel Aviv Fashion Mall" href="tlv_mall.php" />
            <area shape="circle" coords="585,283,30" alt="Azrieli Center" href="azrieli.php" />
            <area shape="circle" coords="70,30,30" alt="Waffle Bar" href="waffle.php" />
        </map>
        <article>
            <p>
                Above is a map encapsulating the 3 places in Tel Aviv mentioned on this site: the Azrieli Center, Waffle
                Bar, and the Tel Aviv Fashion Mall. If you hover the mouse near the red circles with stars in them you
                can click and be brought to the page talking about those places.
            </p>
        </article>
    </div>
    <hr>
    <footer>
<?php
    include($path.'assets/inc/footer.php');
?>