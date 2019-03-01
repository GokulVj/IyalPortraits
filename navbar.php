<div class="bar">
    <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-recalc="false" data-target=".navmenu" data-canvas=".canvas">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>
<div class="navmenu navmenu-default navmenu-fixed-left">
    <ul class="nav navmenu-nav">
        <?php
            if($_SERVER['HTTP_HOST'] == "localhost") {
                $iyal = "/iyal/";
            }
            else {
                $iyal = "/";
            }
            $host = "http://".$_SERVER['HTTP_HOST'].$iyal;
            $url = $_SERVER['REQUEST_URI'];
            $home = '';
            $gallery = '';
            $works = '';
            $blog = '';
            $contact = '';
            $class_active = ' class="active"';

            switch ($url) {
                case $iyal:
                    $home = $class_active;
                    break;
                case $iyal . "gallery/":
                    $gallery = $class_active;
                    break;
                case $iyal . "works/":
                    $works = $class_active;
                    break;
                case $iyal . "blog/":
                    $blog = $class_active;
                    break;
                case $iyal . "contact/":
                    $contact = $class_active;
                    break;
            }

            echo '<li'.$home.'><a href="'.$host.'">Home</a></li>';
            echo '<li'.$gallery.'><a href="'.$host.'gallery/">Gallery</a></li>';
            echo '<li'.$works.'><a href="'.$host.'works/">Works</a></li>';
            echo '<li'.$blog.'><a href="'.$host.'blog/">Blog</a></li>';
            echo '<li'.$contact.'><a href="'.$host.'contact/">Contact</a></li>';
        ?>
    </ul>
    <a class="navmenu-brand" href=""><img src="<?php echo $host; ?>img/logo.png" width="160"></a>
    <div class="social">
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-skype"></i></a>
    </div>
    <!-- <div class="copyright-text">© Copyright <a href=""> Iyal Portraits</a> 2018 </div> -->
    <div class="copyright-text">Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href=""> Ceeyes</a></div>
</div>