<section class="service-area" style=" margin: 90px 0; ">
    <div class="container-history pteam">
        <div class="r-team">
            <div class="part-history">
                <div class="imageh" style="background: linear-gradient(0deg, rgba(24, 34, 36, 0.4) 0%, rgba(24, 34, 36, 0.4) 100%), url(<?php the_field('background_image'); ?>) lightgray 50% / cover no-repeat;">
                    <div class="overly"></div>
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
</section>
<?php RenderJS::start(); ?>
<script>
    window.onload = function() {
        // Animasi untuk layar dengan lebar di atas 768px
        var tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".container-history",
                scrub: 1,
                pin: true,
                start: "top top",
                end: "+=100%",
            },
        });
        tl.to(".r-team", {
            width: "100%",
            height: "100%",
            borderRadius: "0",
            duration: 1,
            ease: "Power0.easeNone",
        });

        var tl2 = gsap.timeline({
            scrollTrigger: {
                trigger: ".container-history",
                scrub: 1,
                start: "top top",
                end: "+=100%",
            },
        });
        tl2.to(".imageh", {
            opacity: 0.2,
            // width: "55%",
            height: "100vh",
            borderRadius: "0",
            border: "0",
            duration: 1,
            ease: "Power0.easeNone",
        });

        gsap.set(".txt-history", {
            right: "10%",
        });

        var tl3 = gsap.timeline({
            scrollTrigger: {
                trigger: ".container-history",
                scrub: 1,
                start: "top top",
                end: "+=100%",
            },
        });
        tl3.to(".txt-history", {
            right: "0",
            duration: 1,
            ease: "Power0.easeNone",
        });

        

      
    };
</script>
<?php RenderJS::end(); ?>

<style>
    .pteam {
        padding-top: 27px;
    }

    .container-history {
        display: flex;
        justify-content: center;
        width: 100%;
        padding: 0;
        margin: 0 auto;
    }

    .r-team {
        width: 90%;
        position: relative;
        border-radius: 108px;
        background: var(--Rich-black-95, #182224);
        overflow: hidden;
    }

    .part-history .imageh {
        width: 100%;
        min-height: 702px;
        height: 100vh;
        border-radius: 108px 0 0 108px;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .imageh .overly {
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        width: 95%;
        background: linear-gradient(90deg, rgba(24, 34, 36, 0) 0%, #182224 48.87%);
    }

    .txt-history {
        position: absolute;
        width: 525px;
        right: 182px;
        top: 145px;
    }

    .txt-history .title {
        color: #fec601;
        font-size: 46px;
        font-style: normal;
        font-weight: 700;
        line-height: 57.5px;
    }

    .txt-history .summary {
        color: #fff;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 23.408px;
    }

    @media screen and (max-width: 1200px) {
        .txt-history {
            width: 400px;
            right: 100px;
            top: 100px;
        }

        .txt-history .title {
            font-size: 36px;
        }

        .txt-history .summary {
            font-size: 14px;
        }

        .part-history .imageh {
            width: 600px;
        }
    }

    @media screen and (max-width: 768px) {
        .container-history {
            flex-direction: column;
            align-items: center;
        }

        .r-team {
            width: 100%;
        }

        .part-history .imageh {
            width: 100%;
            min-height: 400px;
            border-radius: 0;
        }

        .txt-history {
            width: 100%;
            right: 5%;
            top: 20px;
            position: static;
            /* margin-top: 20px; */

            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            align-items: center;
            height: 100%;
            padding: 10%;
        }

        .txt-history .title {
            font-size: 28px;
        }

        .txt-history .summary {
            font-size: 14px;
        }


        .imageh .overly {
            position: absolute;
            bottom: 0;
            top: unset;
            right: 0;
            height: 15%;
            width: 100%;
            background: linear-gradient(179deg, rgba(24, 34, 36, 0) 0%, #182224 48.87%);
        }
    }

    @media screen and (max-width: 480px) {
        .txt-history .title {
            font-size: 24px;
        }

        .txt-history .summary {
            font-size: 12px;
        }

        .part-history .imageh {
            min-height: 300px;
        }
    }
</style>