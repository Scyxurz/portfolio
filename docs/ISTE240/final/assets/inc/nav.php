<body>
    <nav>
        <!--The start of implementing an on-click hamburger menu for mobile-->
        <button id="hamburger_menu" onclick="
            var x = document.getElementById('navBar');
            if(x.style.display === 'block'){x.style.display = 'none';}
            else{x.style.display = 'block';}">  
            <img src="<?php echo $path?>assets/images/menu.png" alt="hamburger menu icon" />
        </button>
        <ul id="navBar">
            <li class="bar">
                <a href="<?php echo $path; ?>index.php" 
                    <?php echo (isset($page) && $page=='home') ? ' class="active" ' :'';?>>
                    Home
                </a>
            </li>
            <li class="bar">
                <a href="#" <?php echo (isset($globalPage) && $globalPage=="places") ? ' class="active" ' : 'class="bar"';?> 
                id="placeBar" onclick='dropdown("placeDropdown");'>
                Places
                </a>
                <ul class="dropdown" id="placeDropdown">
                    <li>
                        <a href="<?php echo $path; ?>tlv_mall.php"
                        <?php echo (isset($page) && $page=='mall') ? ' class="active" ' : '';?>>
                        TLV Fashion Mall
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $path; ?>azrieli.php"
                        <?php echo (isset($page) && $page=='azrieli') ? ' class="active" ' : '';?>>
                        Azrieli Center
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $path; ?>waffle.php"
                        <?php echo (isset($page) && $page=='waffle') ? ' class="active" ' : '';?>>
                        Waffle Bar
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $path; ?>masada.php"
                        <?php echo (isset($page) && $page=='masada') ? ' class="active" ' : '';?>>
                        Masada
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $path; ?>jerusalem.php"
                        <?php echo (isset($page) && $page=='jerusalem') ? ' class="active" ' : '';?>>
                        Jerusalem
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $path; ?>crater.php"
                        <?php echo (isset($page) && $page=='crater') ? ' class="active" ' : '';?>>
                        Ramon Crater
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $path; ?>ein_gedi.php"
                        <?php echo (isset($page) && $page=='ein_gedi') ? ' class="active" ' : '';?>>
                        Ein Gedi
                        </a>
                    </li>
                </ul>
            </li>
            <li class="bar">
                <a href="#" <?php echo (isset($globalPage) && $globalPage=="maps") ? ' class="active" ' : 'class="bar"';?> onclick='dropdown("mapDropdown");'>
                Maps
                </a>
                <ul class="dropdown" id="mapDropdown">
                    <li>
                        <a href="<?php echo $path; ?>israel_map.php"
                        <?php echo (isset($page) && $page=='israel_map') ?
                            ' class="active" ': '';
                        ?>>
                        Israel Map
                        </a>
                    </li>
                    <li><a href="<?php echo $path; ?>tlv_map.php"
                        <?php echo (isset($page) && $page=='tlv_map') ?
                            ' class="active" ': '';
                        ?>>
                        Tel Aviv Map
                        </a>
                    </li>
                </ul>
            </li>
            <li class="bar">
                <a href="<?php echo $path; ?>about.php"
                    <?php echo (isset($page) && $page=='about') ?
                        ' class="active" ': '';
                    ?>>
                    About
                </a>
            </li>
            <li class="bar">
                <a href="<?php echo $path; ?>comments.php"
                <?php echo (isset($page) && $page=='comments') ?
                    'class="active"' : '';
                ?>>
                Comments
                </a>
            </li>
        </ul>
    </nav>