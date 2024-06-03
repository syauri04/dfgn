<?php
include 'insight-content.css.php'
?>

<!-- Insight IN MOtion -->
<div id="insight-in-motion" class="container pt-85">

    <div class="in-motion header-content">
        <div>
            <div class="text">
                <p>Insights in motion</p>
            </div>
        </div>
        <div class="summary">
            <p>
                <?php the_field('summary'); ?>
            </p>
        </div>
    </div>

    <?php $videoContents = get_field('list_vimeo'); ?>
    <?php if (!empty($videoContents)) : $data = $videoContents[0] ?>
        <!-- Kalobisa setiap data dibuat array dulu -->
        <div class="video-content" style="margin-bottom: 24px;">
            <div class="main-video">
                <div class="info">
                    <div class="vm-title">
                        <h2><?php echo $data['title']; ?></h2>
                        <p><?php echo $data['sub_title']; ?></p>
                    </div>
                    <div class="w-vimeo">
                        <a class="wv video-btn" data-video-url="https://player.vimeo.com/video/<?php echo $data['id_vimeo']; ?>">Watch in Vimeo</a>
                        <a class="video-btn" data-video-url="https://player.vimeo.com/video/<?php echo $data['id_vimeo']; ?>">
                            <div class="rounded-play">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/play.png'; ?>" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-v-inm">
            <?php foreach ($videoContents as $data) : ?>
                <div class="box-inm">
                    <div class="inm-bg" style="background: linear-gradient(180deg, rgba(12, 22, 24, 0.00) 26.86%, rgba(12, 22, 24, 0.80) 86.98%), url(<?php echo get_template_directory_uri() . '/assets/img/assets/vimeo/thumb1.jpg'; ?>) lightgray 50% / cover no-repeat;">
                        <div class="inm-txt">
                            <h2><?php echo $data['title']; ?></h2>
                        </div>
                        <div class="inm-play">
                            <a href="#" class="video-btn" data-video-url="https://player.vimeo.com/video/<?php echo $data['id_vimeo']; ?>"">
                                <div class=" rounded-play">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/play.png'; ?>" alt="">
                        </div>
                        </a>

                    </div>
                </div>
        </div>
    <?php endforeach ?>
</div>

<div class="b-in-motion">
    <div class="browse-video">
        <a href="https://vimeo.com/dfgn" target="_blank">All videos on Vimeo</a>
    </div>
</div>
<?php endif ?>
</div>

<?php RenderJS::start(); ?>
<script>
    $('.slider-v-inm').slick({
        dots: false,
        centerMode: true,

        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    variableWidth: false,
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 1044,
                settings: {
                    variableWidth: false,
                    slidesToShow: 1,
                }
            }
        ],
        prevArrow: false,
        prevArrow: '<a class="slick-prev"><img src="' + theme_directory + '/assets/img/assets/slide-right.png" /></a>',
        nextArrow: '<a class="slick-next"><img src="' + theme_directory + '/assets/img/assets/slide-right.png" /></a>',
    });
</script>
<?php RenderJS::end(); ?>

<?php RenderStyle::Style() ?>
<style>
    #insight-in-motion .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: nowrap;
        flex-direction: row;
        gap: 70px;
    }

    #insight-in-motion .header-content .text p {
        font-size: 46px;
    }

    #insight-in-motion .header-content .summary {
        width: auto;
        margin: 0;
        max-width: 50%;
    }

    @media (max-width: 991px) {
        #insight-in-motion .header-content .text p {
            font-size: 26px;
            line-height: normal;
            margin: 0;
        }

        #insight-in-motion .header-content {
            flex-direction: column;
            align-items: normal;
            gap: 20px;
        }

        #insight-in-motion .header-content .summary {
            max-width: 100%;
        }
    }
</style>
<?php RenderStyle::EndStyle() ?>