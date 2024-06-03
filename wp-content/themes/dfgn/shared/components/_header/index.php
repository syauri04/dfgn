<?php
include 'style.css.php';
?>

<header>
    <div id="sticky-header-none" class="menu-area">
        <div class="container">

            <div class="wrapper">
                <div>
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/logo.png'; ?>" class="img-logo" alt="logo"></a>
                </div>
                <div class="menu-navigation d-lg-flex d-none">
                    <?php
                    $menuLocations = get_nav_menu_locations();
                    $menuID = $menuLocations['main_menu'];
                    $menuData = wp_get_nav_menu_items($menuID);
                    ?>

                    <?php foreach ($menuData as $menu) : ?>

                        <a href="<?= $menu->url ?>">
                            <?= $menu->title ?>
                        </a>

                        <!-- 
                            #notes :
                            echo $menu->title;
                            echo $menu->url;
                            // menu_item_parent
                            // ID 
                        -->
                    <?php endforeach ?>
                </div>
                <div class="d-lg-flex d-none">
                    <a href="#" data-toggle="modal" data-target="#p-member" class="menu-services show" id="show">Member area</a>
                </div>

                <div class="navigation-toggle d-lg-none d-block navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style=" padding: 0; ">
                    <div class="btn btn-gradient-red">
                        <svg xmlns="http://www.w3.org/2000/svg" style="width: 100%;" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="d-lg-none d-block">
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <?php foreach ($menuData as $menu) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= $menu->url ?>">
                                    <?= $menu->title ?>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>

            </div>

        </div>

    </div>
</header>