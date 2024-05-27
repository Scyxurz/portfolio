<?php
    $page = "home";
    $path = './';
    include($path.'assets/inc/header.php');
    include($path.'assets/inc/nav.php');
?>

<header>
    <h1>Tel Aviv</h1>
    <hr>
</header>
<div class="wrapper">
        <figure>
            <img src="<?php $path;?>assets/images/tel_aviv.jpg" alt="Tel Aviv buildings" id="TAskyline" onclick="toggleImageSize('TAskyline')" />
            <figcaption class="caption">Tel Aviv Skyline</figcaption>
        </figure>
        <figure>
            <img src="<?php $path;?>assets/images/tel_aviv2.jpg" alt="Tel Aviv buildings" id="TAbuildings" onclick="toggleImageSize('TAbuildings')"/>
            <figcaption class="caption">Givon Square</figcaption>
        </figure>
        <article>
            <p>
                After completing high school and before attending college, I took a gap year in Israel. I shared an
                apartment in Tel Aviv and had an internship where I helped create a mobile game while learning on the
                job.
                Although the entire country of Israel is about the size of New Jersey, and about half of it is just
                desert, there was still a lot to see and do throughout the year. On this website I'll show you some of
                the many places I've visited and enjoyed, and provide a brief description of the area.
            </p>
        </article>
    </div>
    <hr>
    <footer>
<?php
    include($path.'assets/inc/footer.php');
?>