<nav class="navbar navbar-light navbar-expand-md text-sm-center text-md-center navigation-clean">
    <div class="container-fluid">
        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
            <span class="sr-only"><?php _e( 'Toggle navigation', 'sanbartolome_theme' ); ?></span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1" style="font-family: gothic;color: rgb(27,20,100);">
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <?php
                    PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="nav-item {CLASSES}" id="{ID}">
                                                    <a class="nav-link border-left" style="color: #1B1464;" {ATTRS}>{TITLE}</a>
                                                </li>';
                    wp_nav_menu( array(
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul class="%2$s ml-auto navbar-nav" id="%1$s">%3$s</ul>',
                        'walker' => new PG_Smart_Walker_Nav_Menu()
                ) ); ?>
            <?php endif; ?>
        </div>
    </div>
</nav>