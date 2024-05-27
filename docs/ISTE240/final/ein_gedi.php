<?php
    $page = "ein_gedi";
    $globalPage = "places";
    $path = './';
    include($path.'assets/inc/header.php');
    include($path.'assets/inc/nav.php');
?>

    <h1>Ein Gedi</h1>
    <hr>
    <div class="wrapper">
        <figure>
            <img src="<?php echo $path ?>assets/images/goat.jpg" alt="Goat" id="goat" onclick="toggleImageSize('goat')"/>
            <figcaption class="caption">Goat at Ein Gedi</figcaption>
        </figure>
        <figure>
            <img src="<?php echo $path ?>assets/images/hyrax.jpg" alt="Hyrax" id="hyrax" onclick="toggleImageSize('hyrax')"/>
            <figcaption class="caption">Hyrax</figcaption>
        </figure>
        <article>
            <p>
                Ein Gedi is a nature reserve in the desert of Israel. Unfortunately there wasn't much greenery to take
                pictures of when I visited it, but there was still a decent amount of wildlife that I was able to
                photograph. Some of the animals didn't seem too frightened of people, probably because they're used to
                seeing a lot of tourists as Ein Gedi is a pretty popular travel destination in Israel. It would seem
                that some tourists feed the wild animals, as the Hyrax in the second image appears to be eating a piece
                of sliced melon.
            </p>>
        </article>
    </div>
    <hr>
    <footer>
<?php
    include($path.'assets/inc/footer.php');
?>