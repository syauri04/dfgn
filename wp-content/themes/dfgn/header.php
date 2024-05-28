<?php
include 'library/Render/index.php';
?>

<?php session_start(); ?>

<?= MinifyHtml::startMinifyHTML() ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/assets/img/assets/favicon.png'; ?>">
    <!-- Bootstrap CSS -->
    <?php wp_head(); ?>
    <title>DFGN</title>
    <script>
        theme_directory = "<?php echo get_template_directory_uri() ?>";
    </script>

</head>

<body>
    <!-- header-area -->
    <header>

        <div id="sticky-header-none" class="menu-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                        <div class="logo">
                            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/logo.png'; ?>" class="img-logo" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6 text-center">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <?php
                                wp_nav_menu([
                                    'thme_location' => 'main_menu ',
                                    'container' => false,
                                    'show_home' => false
                                ])
                                ?>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 d-none d-lg-flex head-side justify-content-end">
                        <a href="#" data-toggle="modal" data-target="#p-member" class="menu-services show" id="show">Member area</a>

                    </div>

                    <!-- Modal Search -->
                    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form>
                                    <input type="text" placeholder="Search here...">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
            <!-- <div class="offcanvas-menu">
                    <span class="menu-close"><i class="fas fa-times"></i></span>
                    <form action="#">
                        <input type="text" placeholder="Search..">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                    <ul>
                        <li><a href="factory.html">The network</a></li>
                        <li><a href="insight.html">Insight</a></li>
                        <li><a href="event.html">Events and trainings</a></li>
                        <li><a href="team.html">The DFGN team</a></li>
                        
                    </ul>
                    <div class="side-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="offcanvas-overly"></div> -->
        </div>
        </div>
    </header>