<?php
    $page = "waffle";
    $globalPage = "places";
    $path = './';
    include($path.'assets/inc/header.php');
    include($path.'assets/inc/nav.php');
?>

    <h1>Waffle Bar</h1>
    <hr>
    <div class="wrapper">
        <figure>
            <img src="<?php echo $path ?>assets/images/waffle.jpg" alt="Waffle Bar" id="waffleImg" onclick="toggleImageSize('waffleImg')"/>
            <figcaption class="caption">Waffle Bar</figcaption>
        </figure>
        <article>
            <p>
                Waffle Bar is a small restaurant in Tel Aviv known for their desserts. The store's color palette
                reminds me of a 1950's/60's aesthetic, making it stand out.Although they also serve other
                breakfast-type foods, the sweets are where they really shine. I would occassionally go to Waffle Bar
                with some friends when we were looking to have dessert as a full meal. Although the prices are a little
                steep, this is still a great place to visit once in a while as a special treat!
            </p>
        </article>
    </div>
    <hr>
    <footer>
<?php
    include($path.'assets/inc/footer.php');
?>