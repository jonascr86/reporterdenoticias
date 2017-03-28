<!-- navigation mobile version -->
<div id="mobile-nav-bar" class="mobile-nav-bar">
    <div class="container">
        <div class="row">
            <div class="visible-sm visible-xs col-sm-12">
                <div id="logo" class="mobile-logo pull-left">
                    <a href="index.html"></a>
                </div>
                <a id="offcanvas-toggler" class="pull-right" href="#"><i class="fa fa-bars"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- navigation -->
<nav id="navigation-bar" class="navigation hidden-sm hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="list-inline megamenu-parent">
                    <?php
                        getMenu();
                    ?>
                </ul>
            </div> <!-- col-sm-12 -->
        </div> <!-- //row -->
    </div> <!-- //container -->
</nav> <!-- //navigation -->