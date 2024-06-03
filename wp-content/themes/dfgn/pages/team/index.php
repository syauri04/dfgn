<main>
    <?php include 'slider-scroll.php' ?>
    <?php include 'service-area.php' ?>

    <!-- <section class="service-area">
        <div class="container-history pteam">
            <div class="r-team">
                <div class="part-history">
                    <div class="imageh" style="background: linear-gradient(0deg, rgba(24, 34, 36, 0.4) 0%, rgba(24, 34, 36, 0.4) 100%), url(<?php the_field('background_image'); ?>) lightgray 50% / cover no-repeat;">
                        <div class="overly">

                        </div>
                        <div class="txt-history">
                            <div class="title">
                                <?php the_field('title_history'); ?>
                            </div>
                            <div class="summary">
                                <?php the_field('desc_history'); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section> -->


    <section class="section-area pt-120">
        <div class="container mb-30">
            <div class="row border-head-team">
                <div class="col-xl-12 js-center">
                    <div class="col-xl-5 col-md-5 pl-0">
                        <h1><?php the_field('title_breadcumb'); ?></h1>

                    </div>

                    <div class="col-xl-5 col-md-5">
                        <p>
                            <?php the_field('summary_breadcumb'); ?>
                        </p>
                    </div>
                </div>

            </div>
            <div class="row pt-30">
                <?php
                if (have_rows('who_runs')) :
                    while (have_rows('who_runs')) : the_row();
                ?>
                        <div class="col-xl-6 col-md-6">
                            <div class="boxies-team">

                                <div class="img-team">
                                    <div class="gradient-overlay"></div>

                                    <img class="pro" src="<?php echo get_sub_field('picture'); ?>" alt="">
                                    <div class="user-in">
                                        <div class="nm">
                                            <?php echo get_sub_field('name_profile'); ?>
                                        </div>
                                        <div>
                                            <a href="mailto:<?php echo get_sub_field('email'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/icw_email.png'; ?>" alt=""></a>
                                            <a href="<?php echo get_sub_field('link_linkedin'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/icw_linkedin.png'; ?>" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-team">
                                    <p>
                                        <?php echo get_sub_field('desc_profile'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>





            </div>
        </div>
    </section>



</main>
<?php RenderJS::start(); ?>
<script>
    $(document).ready(function() {
        $('#select-primer').awselect({
            background: "#182224", //the dark blue background
            active_background: "#182224", // the light blue background
            placeholder_color: "#FFFFFF", // the light blue placeholder color
            placeholder_active_color: "#FFFFFF", // the dark blue placeholder color
            option_color: "#FFFFFF", // the option colors

            horizontal_padding: "40px", // left and right padding,
            immersive: false // immersive option, demonstrated at the next example
        });
    });
</script>
<script>
    // // TweenMax for GSAP 3
    // var tl = gsap.timeline({
    //     scrollTrigger: {
    //         trigger: ".container-history",
    //         scrub: 1,
    //         pin: true,
    //         // markers: true,
    //         start: "top top",
    //         end: "+=100%",
    //         // toggleActions: "play pause play reset",
    //     },
    // });
    // tl.to(".r-team", {
    //     width: "100%",

    //     height: "800",
    //     borderRadius: "0",
    //     duration: 1,
    //     ease: "Power0.easeNone",

    // });

    // var tl2 = gsap.timeline({
    //     scrollTrigger: {
    //         trigger: ".container-history",
    //         scrub: 1,
    //         // markers: true,
    //         start: "top top",
    //         end: "+=100%",
    //         // toggleActions: "play pause play reset",
    //     },
    // });
    // tl2.to(".imageh", {
    //     // background: "linear-gradient(0deg, rgba(24, 34, 36, 0.2) 0%, rgba(24, 34, 36, 0.2) 100%), , url(img/assets/team-background.png) lightgray 50% / cover no-repeat",
    //     opacity: 0.2,
    //     width: "55%",
    //     height: "799",
    //     borderRadius: "0",
    //     opacity: 1,
    //     border: "0",
    //     duration: 1,
    //     ease: "Power0.easeNone",

    // });

    // gsap.set(".txt-history", {

    //     right: "130px",
    // });
    // var tl3 = gsap.timeline({
    //     scrollTrigger: {
    //         trigger: ".container-history",
    //         scrub: 1,
    //         // markers: true,
    //         start: "top top",
    //         end: "+=100%",
    //         // toggleActions: "play pause play reset",
    //     },
    // });
    // tl3.to(".txt-history", {
    //     right: "200px",
    //     duration: 1,
    //     ease: "Power0.easeNone",

    // });
    // // gsap.to('.imageh', {
    // //     backgroundSize: '150%', // Change background size to cover full screen
    // //     ease: 'none',
    // //     scrollTrigger: {
    // //         trigger: '.pteam',
    // //         start: 'top top', // Trigger animation when top of container reaches top of viewport
    // //         end: '+=100%', // Extend animation beyond container height
    // //         scrub: 1 // Smooth animation based on scroll
    // //     }
    // // });
</script>
<?php RenderJS::end(); ?>