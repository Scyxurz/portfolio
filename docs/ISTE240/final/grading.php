<?php
    $page = "about";
    $path = './';
    include($path.'assets/inc/header.php');
    include($path.'assets/inc/nav.php');
?>

    <h1>About</h1>
    <hr>
    <div class="wrapper">
        <article>
            <ol>
                <li>
                Implemented a semi-working hamburger menu that gets the job done for mobile. On desktop,
                the nav bar now has a dropdown menu that scales according to the size of elements on the navbar
                (dropdown elements are no longer bigger than their parent elements) and elements will highlight
                depending on what page the user is on.
                </li>
                <li>
                For DHTML and Javascript, images will now scale up in size when clicked, and scale back down
                when clicked again. Javascript is also used to create a trail of breadcrumbs showing the user
                where on the site they are by keeping elements of the nav bar highlighted. Unfortunately,
                I still haven't figured out a way around the image maps not working correctly when resized, as the clickable
                zones remain the same while the number of pixels decreases, meaning some zones disappear.
                </li>
                <li>
                There is now a comment section replacing the sources page, as sources have been relegated to the
                footer of each page. To leave a comment, Javascript and PHP are used to ensure that there is both a username 
                and a comment filled out before any comment can be posted, and that it doesn't have unwanted characters.
                </li>
            </ol>
        </article>
    </div>
    <hr>
    <footer>
<?php
    include($path.'assets/inc/footer.php');
?>