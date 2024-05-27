<?php
    $page = "azrieli";
    $globalPage = "places";
    $path = './';
    include($path.'assets/inc/header.php');
    include($path.'assets/inc/nav.php');
?>

    <h1>Azrieli Center</h1>
    <hr>
    <div class="wrapper">
        <figure>
            <img src="<?php echo $path ?>assets/images/azrieli.jpg" alt="Azrieli Center" id="AzCenter" onclick="toggleImageSize('AzCenter')"/>
            <figcaption class="caption">Azrieli Center</figcaption>
        </figure>
        <figure>
            <img src="<?php echo $path ?>assets/images/azrieli2.jpg" alt="Azrieli Center Mall" id="AzMall" onclick="toggleImageSize('AzMall')"/>
            <figcaption class="caption">Azrieli Center Mall</figcaption>
        </figure>
        <article>
            <p>
                Not far from the Tel Aviv Mall, the Azrieli Center is comprised of 3 similarly styled but differently
                shaped towers, with a mall between them. The towers look rather plain, but considering they're some of
                the tallest towers in the area at around 600 feet tall, they still attract attention. Another aspect of
                them that catches the eye is their shape. One of the towers is round, another is triangular, and the
                last one is square.<br><br>
                While the towers themselves are just office buildings, the Azrieli Center still contains a larger mall
                than the fashion mall, and is located conveniently near a train station. As big as the center is, it's
                still not done growing as there are plans for a new skyscraper to be built, which has the potential to
                wind up being the tallest building in Israel.
            </p>
        </article>
    </div>
    <hr>
    <footer>
        <p>Photo Credit: 
            <a href="https://en.wikipedia.org/wiki/Azrieli_Center#/media/File:Azrieli_Center_From_ToHa_2019-12.jpg" target="_blank">
                https://en.wikipedia.org/wiki/Azrieli_Center#/media/File:Azrieli_Center_From_ToHa_2019-12.jpg
            </a>
        </p>
<?php
    include($path.'assets/inc/footer.php');
?>