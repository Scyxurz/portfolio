<?php
    $page = "jerusalem";
    $globalPage = "places";
    $path = './';
    include($path.'assets/inc/header.php');
    include($path.'assets/inc/nav.php');
?>

    <h1>Jerusalem</h1>
    <hr>
    <div class="wrapper">
        <figure>
            <img src="<?php echo $path ?>assets/images/jerusalem.jpg" alt="Jerusalem" id="jerusalemImg" onclick="toggleImageSize('jerusalemImg')"/>
            <figcaption class="caption">Jerusalem</figcaption>
        </figure>
        <figure>
            <img src="<?php echo $path ?>assets/images/jerusalem2.jpg" alt="Alley in the old city" id="alley" onclick="toggleImageSize('alley')"/>
            <figcaption class="caption">Alley in the old city</figcaption>
        </figure>
        <article>
            <p>
                Full of important religious locations for various religions, the topic of who Jerusalem truly belongs to
                is a hotly debated topic. Regardless of that, it's still an interesting place that mixes modern
                technology with the old aesthetic of the city built thousands of years ago. New buildings must keep the
                same external style of Jerusalem Stone, a beige-white rock that makes up most of the city. Hidden in the
                small streets and alleyways is a ton of history that can be seen at the surface level, with even more
                below the ground still being uncovered by archeologists.
            </p>
        </article>
    </div>
    <hr>
    <footer>
    <p>Photo Credit: 
        <a href="https://theculturetrip.com/middle-east/israel/articles/the-best-things-to-do-in-jerusalem/" target="_blank">
            https://theculturetrip.com/middle-east/israel/articles/the-best-things-to-do-in-jerusalem/
        </a>
    </p>
<?php
    include($path.'assets/inc/footer.php');
?>