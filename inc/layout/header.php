<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="logo-wrapper">
                <a href="index.php" style="text-decoration:none">
                    <h3 class="logo-header">
                        <span class="header-name"> <span class="domain"></span> | </span><span class="logo-color"><?php echo $pages[$file] ?></span>
                    </h3>
                </a>
            </div>
            <div class="nav-wrapper nav-wrapper-d">
                <div class="nav-content">
                    <ul class="nav">
                        <?php foreach ($pagesHeader as $key => $value) {   ?>
                        <?php $mapWeb = str_replace(".php", "", $key); ?> 
                            <li class="<?php if ($mapWeb == $page) echo 'active'; ?>"><a href="<?php echo $key ?>"><?php echo $value ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="mobile-nav-trigger"><span class="material-icons-two-tone">menu</span></div>
        </div>
    </div>
</header>