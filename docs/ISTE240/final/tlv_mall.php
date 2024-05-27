<?php
    $page = "mall";
    $globalPage = "places";
    $path = './';
    include($path.'assets/inc/header.php');
    include($path.'assets/inc/nav.php');
?>

    <h1>Tel Aviv Fashion Mall</h1>
    <hr>
    <div class="wrapper">
        <figure>
            <img src="assets/images/fashion_mall.jpg" alt="Tel Aviv Fashion Mall" id="TLVmall" onclick="toggleImageSize('TLVmall')"/>
            <figcaption class="caption">Tel Aviv Fashion Mall</figcaption>
        </figure>
        <figure>
            <img src="assets/images/fashion_mall2.jpg" alt="Tel Aviv Fashion Mall Internal View" id="mallInternal" onclick="toggleImageSize('mallInternal')"/>
            <figcaption class="caption">Inside Tel Aviv Fashion Mall</figcaption>
        </figure>
        <article>
            <p>
                Sitting in the heart of Tel Aviv, the Tel Aviv Fashion Mall has a lot to offer, albeit at slightly
                exorbitant prices. Besides just places to shop for clothes as the name implies, there are also places to
                eat and play, including a VR setup for the public to try out.
                The most interesting part about the mall to me is that part of it is underground but still gets natural
                light through windows on the cieling. The building goes back into a hill in a park right behind the
                mall, and large clear panes allow for people in the mall to see outside, and vice versa.
            </p>
        </article>
    </div>
    <hr>
    <footer>
        <p>Photo Credit: 
            <a href="https://www.tripadvisor.com/Attraction_Review-g293984-d12708608-Reviews-TLV_Fashion_Mall-Tel_Aviv_Tel_Aviv_District.html" target="_blank">
                https://www.tripadvisor.com/Attraction_Review-g293984-d12708608-Reviews-TLV_Fashion_Mall-Tel_Aviv_Tel_Aviv_District.html
            </a>
            </p>
<?php
    include($path.'assets/inc/footer.php');
?>