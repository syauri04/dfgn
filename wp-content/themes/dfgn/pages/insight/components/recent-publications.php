<section id="publication-list" class="service-area" style="margin-bottom: 90px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mb-80 d-inline-flex">
                <div class="col-lg-9 section-title">
                    <h1>Recent publications</h1>
                    <!-- <p>Kabupaten Bogor </p> -->
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





<?php RenderStyle::Style() ?>
<style>
    .slick-list.draggable {
        overflow: visible;
    }

    .multiple-items .slick-prev {
        position: absolute;
        bottom: 45%;
        left: 10px;
        cursor: pointer;
        z-index: 7;
    }

    .multiple-items .slick-next {
        position: absolute;
        bottom: 45%;
        right: 10px;
        cursor: pointer;
    }

    @media (max-width: 991px) {
        #publication-list h1 {
            font-size: 30px;
            text-align: center
        }

    }
</style>
<?php RenderStyle::EndStyle() ?>

<script>
    $(document).ready(function() {

        $('.multiple-items').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,

            responsive: [{
                    breakpoint: 1200, // Adjust breakpoint as needed
                    settings: {
                        variableWidth: false, // Change to false for smaller screens
                        slidesToShow: 2, // Adjust slides to show on smaller screens
                    }
                },
                {
                    breakpoint: 1044, // Adjust breakpoint as needed
                    settings: {
                        variableWidth: false, // Change to false for smaller screens
                        slidesToShow: 1, // Adjust slides to show on smaller screens
                    }
                }
            ],
            prevArrow: '<a class="slick-prev"><img src="' + theme_directory + '/assets/img/assets/slide-left.png" /></a>',
            nextArrow: '<a class="slick-next"><img src="' + theme_directory + '/assets/img/assets/slide-right.png" /></a>',
        });
        //     $('.slider-publication').slick({
        //         dots: false,
        //         infinite: true,
        //         speed: 300,
        //         slidesToShow: 1,
        //         slidesToScroll: 1,
        //         centerMode: false,
        //         // variableWidth: true,
        //         prevArrow: '<a class="slick-prev"><img src="' + theme_directory + '/assets/img/assets/slide-left.png" /></a>',
        //         nextArrow: '<a class="slick-next"><img src="' + theme_directory + '/assets/img/assets/slide-right.png" /></a>',
        //         // responsive: [{
        //         //     breakpoint: 768, // Adjust breakpoint as needed
        //         //     settings: {
        //         //         variableWidth: false, // Change to false for smaller screens
        //         //         slidesToShow: 1, // Adjust slides to show on smaller screens
        //         //     }
        //         // }]
        //     });
    });
</script>