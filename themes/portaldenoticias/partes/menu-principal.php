<nav class="navbar navbar-default principal">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php
            wp_nav_menu(
                    [
                        'theme-location' => 'menu-principal',
                        'container_id' => 'navbar',
                        'container_class' => 'navbar-collapse collapse',
                        'menu_class' => 'nav navbar-nav nav-principal',
                        'walker' => new PortalDeNoticiasBootstrapNavWalker(),
                    ]
            )
            ?>
    </div>
    </div>
</nav>