<?php
include 'header-content.css.php'
?>

<section class="head-animation">
    <div class="slider-scroll">
        <div class="wrapper" style="padding: 50px 0;">
            <div class="container" style="position: relative;">
                <div class="slide-content">
                    <div class="text-wrapper">
                        <h1 class="title">
                            <?php the_field('title_reguler'); ?><br>
                            <span><?php the_field('title_span'); ?></span>
                        </h1>
                        <p class="desc">
                            <?php the_field('summary_hero'); ?>
                        </p>
                    </div>
                </div>
                <div class="slide-first">
                    <div class="shape">
                        <div class="background-animate-image">

                            <svg style="display:none" width="192" height="192" viewBox="0 0 192 192" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="96" cy="96" r="96" fill="white" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" id="shape-1" fill="none" viewBox="0 0 462.82 215.807" width="100%" height="100%">
                                <path id="shape-1" opacity="0.7" d="M0.288624 113.821C-3.03235 51.5402 46.5086 0 108.102 0C147.058 0 181.151 20.6484 200.119 51.5651C206.09 61.2863 216.451 67.4398 227.856 67.4398H231.252C242.658 67.4398 253.031 61.2863 258.989 51.5651C277.97 20.6484 312.062 0 351.019 0C412.6 0 462.153 51.5402 458.82 113.821C455.785 170.707 407.301 216.18 350.31 215.807C311.689 215.559 277.932 195.022 259.064 164.342C253.068 154.583 242.707 148.368 231.252 148.368H227.881C216.426 148.368 206.065 154.583 200.07 164.342C181.201 195.022 147.432 215.559 108.824 215.807C51.8322 216.168 3.34843 170.707 0.313525 113.821H0.288624Z" fill="#119DA4" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" id="shape-2" width="438" height="216" viewBox="0 0 459 218" fill="none">
                                <path id="shape-2" d="M350.884 0.0761719H107.964C48.3372 0.0761719 0 48.3868 0 107.981C0 167.575 48.3372 215.886 107.964 215.886H350.884C410.511 215.886 458.848 167.575 458.848 107.981C458.848 48.3868 410.511 0.0761719 350.884 0.0761719Z" fill="#119DA4" />
                            </svg>

                            <svg id="shape" viewBox="0 0 1431 822" preserveAspectRatio="xMidYMid slice">
                                <mask id="mask" viewBox="0 0 1431 822">
                                    <path id="inspat1" d="M731.184 113.904C727.862 51.5778 777.416 0 839.014 0C877.98 0 912.082 20.6635 931.055 51.6027C937.027 61.331 947.391 67.489 958.799 67.489H962.196C973.605 67.489 983.981 61.331 989.94 51.6027C1008.91 20.651 1043.02 0 1081.98 0C1143.58 0 1193.15 51.5778 1189.81 113.904C1186.78 170.831 1138.28 216.338 1081.27 215.965C1042.64 215.716 1008.88 195.165 990.002 164.462C984.006 154.696 973.642 148.476 962.183 148.476H958.812C947.353 148.476 936.99 154.696 930.993 164.462C912.119 195.165 878.341 215.716 839.723 215.965C782.716 216.326 734.22 170.831 731.184 113.904ZM1323.01 0C1263.36 0 1215.02 48.3433 1215.02 107.982C1215.02 182.525 1154.58 242.96 1080.03 242.96H839.026C779.382 242.96 731.035 291.304 731.035 350.943V377.939C731.035 437.578 682.688 485.921 623.043 485.921H594.067C534.423 485.921 486.076 534.264 486.076 593.903C486.076 653.543 534.423 701.886 594.067 701.886H1323.01C1382.65 701.886 1431 653.543 1431 593.903V107.982C1431 48.3433 1382.65 0 1323.01 0Z" fill="#fff" />
                                </mask>
                                <image href="<?php the_field('image_hero'); ?>" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" mask="url(#mask)" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php RenderJS::start(); ?>
<script>
    gsap.registerPlugin(ScrollTrigger, MorphSVGPlugin);

    var timeline = gsap.timeline({
        scrollTrigger: {
            trigger: ".slider-scroll",
            scrub: 1,
            pin: true,
            start: "top top",
            end: "+=100%",
        },
    });


    if (window.innerWidth <= 900) {
        // Animation for mobile devices
        timeline.to("#shape-1", {
            morphSVG: "circle",
            x: "17.9%",
            width: "191.87%",
            height: "29.2%",
            ease: "power1.out",
            duration: 3,
        });

        timeline.to("#shape-2", {
            morphSVG: "circle",
            x: "-2.9%",
            opacity:1,
            width: "135%",
            height: "60%",
            duration: 5,
            ease: "power1.out",
        });
    } else {
        // Desktop animation
        gsap.set("#shape-1", {
            translate: "0 0",
            opacity: 0.7,
            visibility: "visible",
        });

        timeline.to("#shape-1", {
            morphSVG: "circle",
            x: "17.9%",
            width: "191.87%",
            height: "29.2%",
            ease: "power1.out",
            duration: 3,
        });

        timeline.to("#shape-2", {
            morphSVG: "circle",
            x: "27.9%",
            width: "135%",
            height: "30%",
            duration: 5,
            ease: "power1.out",
            opacity: 1,
        });
    }
</script>
<?php RenderJS::end(); ?>