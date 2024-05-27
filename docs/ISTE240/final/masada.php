<?php
    $page = "masada";
    $globalPage = "places";
    $path = './';
    include($path.'assets/inc/header.php');
    include($path.'assets/inc/nav.php');
?>

    <h1>Masada</h1>
    <hr>
    <div class="wrapper">
        <figure>
            <img src="<?php echo $path ?>assets/images/masada.jpg" alt="Masada" id="masadaImg" onclick="toggleImageSize('masadaImg')"/>
            <figcaption class="caption">Masada</figcaption>
        </figure>
        <figure>
            <img src="<?php echo $path ?>assets/images/masada2.jpg" alt="View of sunrise from Masada" id="masadaSunrise" onclick="toggleImageSize('masadaSunrise')"/>
            <figcaption class="caption">View of sunrise from Masada</figcaption>
        </figure>
        <article>
            <p>
                Masada is a pleateau in the Negev overlooking the Dead Sea just to the east. After the fall of Jerusalem
                to the romans about 2,000 years ago, Masada was the last Jewish bastion in Israel at the time. The
                Romans laid siege to the village, as even with a larger force, fighting uphill in the desert heat could
                prove deadly on its own.
                They started building a ramp up to the top of the plateau made of dirt and stone so that they wouldn't
                have to climb the winding path. When they reached the top, they found that there was almost no one left
                alive in the village, as most had turned to suicide rather than be killed or captured by the Romans.
                Later, Herod the Great would end up building a palace there.
            </p>
        </article>
    </div>
    <hr>
    <footer>
        <p>Photo Credit: <a href="https://www.history.com/topics/ancient-middle-east/masada" target="_blank">
            https://www.history.com/topics/ancient-middle-east/masada</a>
        </p>
<?php
    include($path.'assets/inc/footer.php');
?>