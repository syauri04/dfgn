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

            <?php
            $param = [
                "data" => [
                    [
                        'title' => "1st Design Factory Global Network Research Conference ‘Designing the Future’ 5-6 October 2022",
                        'link' => "https://research.aalto.fi/en/publications/1st-design-factory-global-network-research-conference-designing-t",
                        'image' => get_template_directory_uri() . '/assets/img/assets/pub3.png',
                        'year' => "2022",
                    ],
                    [
                        'title' => "DFGN 10th Anniversary Cookbook",
                        'link' => "img/assets/pdf/DFGN_cookbook.pdf",
                        'image' => get_template_directory_uri() . '/assets/img/assets/pub1.png',
                        'year' => "2021",
                    ],
                    [
                        'title' => "DFGN: We are not like the other design factories",
                        'link' => "https://issuu.com/aaltodesignfactory/docs/dfgn_issuu",
                        'image' => get_template_directory_uri() . '/assets/img/assets/pub2.png',
                        'year' => "2020",
                    ],
                    [
                        'title' => "The Interstellar Family Album",
                        'link' => "img/assets/pdf/Interstellar_FamilyAlbum.pdf",
                        'image' => get_template_directory_uri() . '/assets/img/assets/pub3.png',
                        'year' => "2019",
                    ],
                ]
            ];
            ?>


            <?php foreach ($param["data"] as $data) : ?>
                <?php
                include 'recent-publications-card.php'
                ?>


            <?php endforeach; ?>






        </div>
    </div>

</section>





<?php RenderStyle::Style() ?>
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
        font-size:30px;
        text-align:center
    }

}
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