<?php
    $page = "crater";
    $globalPage = "places";
    $path = './';
    include($path.'assets/inc/header.php');
    include($path.'assets/inc/nav.php');
?>

    <h1>Ramon Crater</h1>
    <hr>
    <div class="wrapper">
        <figure>
            <img src="<?php echo $path ?>assets/images/crater.jpg" alt="Ramon Crater" id="RC" onclick="toggleImageSize('RC')"/>
            <figcaption class="caption">Ramon Crater</figcaption>
        </figure>
        <figure>
            <img src="<?php echo $path ?>assets/images/crater2.jpg" alt="Ridge of Ramon Crater" id="RRC" onclick="toggleImageSize('RRC')"/>
            <figcaption class="caption">Ridge of Ramon Crater</figcaption>
        </figure>
        <article>
            <p>
                Ramon Crater, also known as Makhtesh Ramon, is a large crater caused by erosion. Located in the
                Negev, the Ramon Crater is Israel's largest national park at nearly 25 miles long and ranging from 1 to
                6 miles wide.<br><br>
                The forming of the crater is pretty interesting. Long ago the area was flooaded, bringing in layers of
                limestone rock. As the water receded, the mountain of rock started to erode. Since the rock layers were
                deposited by the water, the layers were actually covering sand, which was dragged away with the water
                when it receded.<br><br>
                This caused the top of the mountain to cave in, leaving the still standing walls surrounding what is now
                a crater. You can easily see the individual layers of rock which were originally stacked into a
                mountain, which are now just pushed up ridges surrounding the
                crater.
            </p>
        </article>
    </div>
    <hr>
    <footer>
<?php
    include($path.'assets/inc/footer.php');
?>