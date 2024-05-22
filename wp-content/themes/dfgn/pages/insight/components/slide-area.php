<section class="head-animation">
    <div class="slider-scroll">
        <div class="wrapper">
            <div class="container" style="position: relative;">
                <div class="slide-content">
                    <div class="text-wrapper">
                        <h1 class="title">
                            Want to know more <br>
                            about the network? <br>
                            <span>Check our stuff!</span>
                        </h1>
                        <p class="desc">
                            Our community's diverse skillset is mirrored by an equally varied collection of creations. We call them "stuff" because, in our experimental culture, we often venture into projects that defy conventional labels, be it an experiment, a publication, a useful template, or simply a book that inspires. We encourage you to adopt this spirit of experimentation. Below, you’ll find some resources, these not only offer insights into DFGN and our community but are also designed to entertain and inspire. Enjoy your exploration and happy reading!
                        </p>
                    </div>
                </div>
                <div class="slide-first">
                    <div class="shape">
                        <div class="background-animate-image">

                            <svg xmlns="http://www.w3.org/2000/svg" id="shape-1" fill="none" viewBox="0 0 462.82 215.807" width="100%" height="100%">
                                <path id="s-blue" opacity="0.7" d="M0.288624 113.821C-3.03235 51.5402 46.5086 0 108.102 0C147.058 0 181.151 20.6484 200.119 51.5651C206.09 61.2863 216.451 67.4398 227.856 67.4398H231.252C242.658 67.4398 253.031 61.2863 258.989 51.5651C277.97 20.6484 312.062 0 351.019 0C412.6 0 462.153 51.5402 458.82 113.821C455.785 170.707 407.301 216.18 350.31 215.807C311.689 215.559 277.932 195.022 259.064 164.342C253.068 154.583 242.707 148.368 231.252 148.368H227.881C216.426 148.368 206.065 154.583 200.07 164.342C181.201 195.022 147.432 215.559 108.824 215.807C51.8322 216.168 3.34843 170.707 0.313525 113.821H0.288624Z" fill="#119DA4" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" id="shape-2" width="438" height="216" viewBox="0 0 459 218" fill="none">
                                <path id="patlonj-inisight" d="M350.884 0.0761719H107.964C48.3372 0.0761719 0 48.3868 0 107.981C0 167.575 48.3372 215.886 107.964 215.886H350.884C410.511 215.886 458.848 167.575 458.848 107.981C458.848 48.3868 410.511 0.0761719 350.884 0.0761719Z" fill="#119DA4" />
                            </svg>


                            <!-- SVG -->
                            <svg id="shape" viewBox="0 0 1431 822" preserveAspectRatio="xMidYMid meet">
                                <!-- Define the mask -->
                                <mask id="mask" viewBox="0 0 1431 822">
                                    <!-- Path untuk pola yang diinginkan -->
                                    <path id="inspat1" d="M731.184 113.904C727.862 51.5778 777.416 0 839.014 0C877.98 0 912.082 20.6635 931.055 51.6027C937.027 61.331 947.391 67.489 958.799 67.489H962.196C973.605 67.489 983.981 61.331 989.94 51.6027C1008.91 20.651 1043.02 0 1081.98 0C1143.58 0 1193.15 51.5778 1189.81 113.904C1186.78 170.831 1138.28 216.338 1081.27 215.965C1042.64 215.716 1008.88 195.165 990.002 164.462C984.006 154.696 973.642 148.476 962.183 148.476H958.812C947.353 148.476 936.99 154.696 930.993 164.462C912.119 195.165 878.341 215.716 839.723 215.965C782.716 216.326 734.22 170.831 731.184 113.904ZM1323.01 0C1263.36 0 1215.02 48.3433 1215.02 107.982C1215.02 182.525 1154.58 242.96 1080.03 242.96H839.026C779.382 242.96 731.035 291.304 731.035 350.943V377.939C731.035 437.578 682.688 485.921 623.043 485.921H594.067C534.423 485.921 486.076 534.264 486.076 593.903C486.076 653.543 534.423 701.886 594.067 701.886H1323.01C1382.65 701.886 1431 653.543 1431 593.903V107.982C1431 48.3433 1382.65 0 1323.01 0Z" fill="#fff" />
                                </mask>
                                <!-- Apply the mask to a rectangle -->
                                <!-- <rect width="100%" height="100%" fill="#000" mask="url(#mask)" />       -->
                                <image href="<?php echo get_template_directory_uri() . '/assets/img/assets/insight-slide.png'; ?>" width="100%" height="100%" mask="url(#mask)" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php RenderStyle::Style() ?>
<style>
    .text-wrapper {
        max-width: 500px;
    }

    .slide-content {
        position: absolute;
        width: 100%;
        top: 0
    }

    .head-animation .wrapper {
        padding: 100px 0;
    }

    .head-animation h1 {
        color: #119da4;
        font-size: 46px;
        font-style: normal;
        font-weight: 700;
        line-height: 57.5px;
        font-family: "Epilogue", Helvetica;
    }

    .head-animation h1 span {
        font-family: "Sentinel-Book", serif;
        font-style: italic;
    }

    .head-animation .desc {
        font-family: "Epilogue", Helvetica;
        color: #fff;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 146.3%;
    }

    .slider-scroll {
        position: relative;
        height: 100%;
        min-height: 700px;
        overflow: visible;
    }

    /* .main-slide-scroll {
        position: relative;
        width: 100%;
    } */

    .background-animate-image {
        margin-right: -90px;
        display: flex;
        justify-content: end;
        align-items: center;
        position: relative;
    }


    .background-animate-image img {
        width: 100%;
        height: auto;
        -webkit-mask-image: url(#mask);
        mask-image: url(#mask);
    }

    .shape {
        position: relative;
        width: 100%;
        height: auto;
        overflow: visible;
        /* Allow overflow */
    }

    #shape-1 {
        position: absolute;
        top: 0px;
        width: 175%;
        height: 26.1%;
    }

    #shape-2 {
        position: absolute;
        top: 69%;
        left: -74%;
        width: 180%;
        height: 31%;
        opacity: 1;
    }

    @media (max-width: 1200px) {
        .slide-content {
            position: unset;
            width: 100%;
            top: 0
        }

        .background-animate-image {
            margin-top: -300px;
            /* margin-left: -550px; */
            width: 1300px;
        }
    }

    @media (max-width: 900px) {
        .text-wrapper {
            max-width: unset;
        }

        .head-animation h1 {
            font-size: 36px;
            line-height: normal;
            margin-bottom: 30px;
        }

        .slide-content {
            position: unset;
            width: 100%;
            top: 0
        }

        .background-animate-image {
            margin: 0 auto;
            /* margin-left: -550px; */
            width: 100%;
        }

        #shape image {
            mask: unset;

        }

        #shape-1 {
            display: none;
        }

        #shape-2 {
            position: absolute;
            top: 0;
            width: 305%;
            height: 106.1%;
        }

        .background-animate-image {
            margin-top: 60px;
            overflow: hidden;
            border-radius: 41px;
        }


    }
</style>
<?php RenderStyle::EndStyle() ?>

<?php RenderJS::start(); ?>
<script>
    gsap.registerPlugin(ScrollTrigger, MorphSVGPlugin);
    gsap.set("#inspat1", {
        transformOrigin: "center center",
        translate: "-100px 0px",
        opacity: 1,
        visibility: "visible",
    });

    gsap.set("#s-blue", {
        // transformOrigin: "center center",
        translate: "148.5% 0px",
        opacity: 0.7,
        visibility: "visible",
    });

    var timeline = gsap.timeline({
        scrollTrigger: {
            trigger: ".slider-scroll",
            scrub: 1,
            pin: true,
            start: "top top",
            end: "+=50%",
        },
    });

    timeline.from("#s-blue", {
        x: "-100%",
        opacity: 0,
        ease: "power1.out",
        duration: 5,
    });

    gsap.to("#patlonj-inisight", {
        scrollTrigger: {
            trigger: ".slider-scroll",
            start: "top top",
            end: "+=800",
            scrub: 2,
        },
        translate: "70% 0",
        duration: 5,
        ease: "power1.out",
        opacity: 1,
    });
</script>
<?php RenderJS::end(); ?>