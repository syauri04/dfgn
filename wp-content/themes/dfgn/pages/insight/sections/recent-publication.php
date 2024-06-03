<?php
include 'recent-publication.css.php';
?>

<section id="publication-list" class="service-area" style="margin-bottom: 90px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mb-80 d-inline-flex">
                <div class="col-lg-9 section-title">
                    <h1>Recent publications</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="multiple-items">
            <?php if (have_rows('data_publications')) : ?>
                <?php while (have_rows('data_publications')) : the_row(); ?>
                    <?php
                    $data = [
                        'title' => get_sub_field('title_file') ?: '',
                        'year' => get_sub_field('year') ?: '',
                        'file_publications' => get_sub_field('file_publications') ?: '',
                        'link' => get_sub_field('link') ?: '',
                        'image' => get_sub_field('tumbnail_cover') ?: ''
                    ];
                    ?>
                    <?php include 'recent-publications-card.php'; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('.multiple-items').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            centerMode: true,
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
            prevArrow: '<a class="slick-prev"><img src="' + theme_directory + '/assets/img/assets/slide-right.png" /></a>',
            nextArrow: '<a class="slick-next"><img src="' + theme_directory + '/assets/img/assets/slide-right.png" /></a>',
        });
    });
</script>