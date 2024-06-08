<?php 
    /***
     * Template Name: The network Template
     */
?>

<?php get_header(); ?>
<!-- slider-area -->
<!-- main-start -->
    <main>
        <!-- service-area -->
        <section class="service-area pt-70 ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 mb-70 d-inline-flex factories">
                        <div class="col-lg-6 section-title">
                            <h1> <?php the_field('title_hero_regular'); ?> <br> <span><?php the_field('title_hero_span'); ?></span> </h1>
                            <!-- <p>Kabupaten Bogor </p> -->
                        </div>
                        <div class="col-lg-6 p-0">
                            <p>
                                <?php 
                                    $txt_area = get_field('summary_hero');
                                ?>
                                <?php echo nl2br($txt_area); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row" id="s_nums">
                    <div class="col-xl-4 col-lg-4 col-md-5 mb-30 bx_ct_f">
                        <div class="df-numb-fc df" >
                            <div class="nums si counter" id="counter" data-target="<?php the_field('total_df'); ?>">
                                <?php the_field('total_df'); ?>
                            </div>
                            <div class="ic-title">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/assets/Icon-home.png'; ?>" alt="">
                                <span>Design factories</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-4 col-md-5 mb-30 bx_ct_f">
                        <div class="df-numb-fc ctn">
                            <div class="nums ip counter" id="counter" data-target="<?php the_field('total_countries'); ?>">
                                <?php the_field('total_countries'); ?>
                            </div>
                            <div class="ic-title">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/assets/Icon-contries.png'; ?>" alt="">
                                <span>Countries</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 mb-30 bx_ct_f">
                        <div class="df-numb-fc dfp">
                            <div class="nums ar counter" id="counter" data-target="<?php the_field('total_df_people'); ?>">
                                <?php the_field('total_df_people'); ?>
                            </div>
                            <div class="ic-title">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/assets/Icon-student.png'; ?>" alt="">
                                <span>DF people</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row border-head-df">
                    <div class="col-xl-12 d-flex boxies">
                        <div class="tab-left">
                            
                           <ul class="filter-factory">
                            <li><a href="" class="active" data-filter="*">All Continents</a></li>
                            <li><a href="" class="" data-filter=".america">Americas</a></li>
                            <li><a href="" class="" data-filter=".asia">Asia Pacific</a></li>
                            <li><a href="" class="" data-filter=".europe">Europe and the Middle East</a></li>
                           </ul>
                        </div>
                        
                        <div class="txt-right select-df">
                            <form id="sort-form" method="GET">
                                <select id="select-cronogical" name="sort_by" data-placeholder="Sort by: chronological">
                                    <option value="sort_chronological">Chronological</option>
                                    <option value="sort_alphabet">A-Z</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    
                </div>
                <div class="row factory-active">
                    <!-- <div class="tab1"> -->
                    <?PHP
                        // $sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'sort_chronological';
                        // if ($sort_by === 'sort_chronological') {
                        //     $listdf = new WP_Query(
                        //         array(
                        //             'post_type' => 'design-factories',
                        //             'meta_key'        => 'year_of_joining',
                        //             'orderby'        => 'meta_value_num',
                        //             'order'          => 'ASC',
                        //             'posts_per_page' => -1
                        //         )
                        //     );
                        // } elseif ($sort_by === 'sort_alphabet') {
                        //     $listdf = new WP_Query(
                        //         array(
                        //             'post_type' => 'design-factories',
                        //             'orderby'        => 'title',
                        //             'order'          => 'ASC',
                        //             'posts_per_page' => -1
                        //         )
                        //     );
                        // }
                        $listdf = new WP_Query(
                            array(
                                'post_type' => 'design-factories',
                                'meta_key'        => 'year_of_joining',
                                'orderby'        => 'meta_value_num',
                                'order'          => 'ASC',
                                'posts_per_page' => -1
                            )
                        );
                        $total_posts = $listdf->found_posts;
                        // print_r($total_posts);die();
                        if($listdf->have_posts()) :
                            $index = 1;
                            while($listdf->have_posts()) : $listdf->the_post();
                            $slug = get_post_field('post_name', get_the_ID());
                            $continents = get_field('continents');
                            $code_aplha = get_field('alpha_code_countries').'.svg';
                            $post_id = get_the_ID();
                            
                            $uniqe_focus = get_field('unique_focus');
                            $signature_focus = get_field('signature_courses');
                            $collaboration_focus = get_field('collaboration_partners');

                            $city = get_field('city');
                            if($city != ''){
                                $city_n = $city.',';
                            }else{
                                $city_n = '';
                            }
                        
                            if($continents == "Europe and the middle east"){
                                $class_continents = 'europe';
                            }else  if($continents == "Americas"){
                                $class_continents = 'america';
                            }else  if($continents == "Asia pacific"){
                                $class_continents = 'asia';
                            }

                           
                    ?>
                        <div class="col-xl-6 col-md-6 grid-facto <?php echo $class_continents; ?>">
                           <div class="factory-box">
                                <div class="f-top">
                                    <div class="f-country">
                                        <img src="<?php echo get_template_directory_uri().'/assets/img/assets/country/flags/'.$code_aplha; ?>" alt="">
                                        <span><?php echo $city_n ?> <?php the_field('countries') ?></span>
                                    </div>
                                    <div class="f-year">
                                        <span><?php the_field('year_of_joining') ?></span>
                                    </div>
                                </div>

                                <div class="f-bottom">
                                    <div class="f-factories">
                                        <img src="<?php the_field('df_logo') ?>" alt="">
                                    </div>
                                    <div class="f-factories-name">
                                        <span><?php the_title() ?></span>
                                        <ul>
                                            <!-- <li><a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a></li>
                                            <li><a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a></li>
                                            <li><a href="#"><img src="img/assets/df/icw-x.png" alt=""></a></li> -->
                                            <li class="mr-0"><a href="" class="rm" data-toggle="modal" data-target="#<?php echo $slug ?>" data-id="<?php echo $post_id; ?>">Read more</a></li>

                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="f-profil">
                                    <div class="inn-left">
                                        <!-- <img src="img/assets/df/user/fusion-profil.JPG" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(<?php the_field('picture') ?>) lightgray 50% / cover no-repeat;">
                                            
                                        </div>
                                        <span><?php the_field('contact') ?></span>
                                    </div>
                                    <div class="inn-right">
                                        <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/df/icw_linkedin.png'; ?>" alt=""></a>
                                        <a href="mailto:<?php the_field('email_of_cp') ?>"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/df/icw_email.png'; ?>" alt=""></a>

                                    </div>
                                </div>
                           </div>
                        </div>

                        <!-- Pop UP DF -->
                        <div id="<?php echo $slug ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog factory-detail">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="containter body-pop">
                                            <div class="row mb-50" style="align-items: center;">
                                                <div class="col-xl-5 col-md-5 f-country">
                                                    <img src="<?php echo get_template_directory_uri().'/assets/img/assets/country/flags/'.$code_aplha; ?>" alt="">
                                                    <span><?php the_field('city') ?> <?php the_field('countries') ?></span>
                                                </div>
                                                <div class="col-xl-7 col-md-7">
                                                    <div class="innerf">
                                                        <div class="fussion-title">
                                                            <?php the_title() ?>
                                                        </div>
                                                        <div class="fussion-year">
                                                            <p>
                                                                Founded year &nbsp;&nbsp;<strong><?php the_field('year_of_joining') ?></strong>
                                                            </p>
                                                            <a href=""  class="close" data-dismiss="modal"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/close-popup.png'; ?>" alt=""></a>
                                                    
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-5 col-md-5 logo-factories">
                                                    <img src="<?php the_field('df_logo') ?>" alt="">
                                                </div>
                                                <div class="col-xl-7 col-md-7">
                                                    <div class="text">
                                                        <div class="text-wrapper">Unique Focus</div>
                                                        <p class="div">
                                                            <?php echo nl2br($uniqe_focus); ?>
                                                        </p>
                                                        <div class="text-wrapper-2">Signature Courses</div>
                                                        <p class="div">
                                                            <?php echo nl2br($signature_focus); ?>
                                                        </p>
                                                        <div class="text-wrapper-2">Collaboration Partners</div>
                                                        <p class="div">
                                                            <?php echo nl2br($collaboration_focus); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-30">
                                                <div class="col-xl-5 col-md-5">
                                                    <div class="pp-profil">
                                                        <div class="prof">
                                                            <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                                            <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(<?php the_field('picture') ?>) lightgray 50% / cover no-repeat;">
                                                                    
                                                            </div>
                                                        </div>
                                                        <div class="somd">
                                                            <h1><?php the_field('contact') ?></h1>
                                                            <p><?php the_field('position_of_cp') ?></p>
                                                            <a href="mailto:<?php the_field('email_of_cp') ?>"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/df/icw_email.png'; ?>" alt=""></a>
                                                            <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/df/icw_linkedin.png'; ?>" alt=""></a>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                                <div class="col-xl-7 col-md-7">
                                                    <div class="border-black">
                                                        <div class="df-institue">
                                                            <p><?php the_field('institution') ?></p>
                                                        </div>
                                                        <div class="list-smd">
                                                            <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/df/icw-fb.png'; ?>" alt=""></a>
                                                            <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/df/icw-ig.png'; ?>" alt=""></a>
                                                            <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/df/icw-x.png'; ?>" alt=""></a>
                                                            
                                                        </div>
                                                        <div class="btn-f-web">
                                                            <a href="<?php the_field('link_of_website') ?>" target="_blank">Visit website</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> -->
                                </div>
                        
                            </div>
                        </div> 
                    <?php
                            $index++;
                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>
                        
                    <!-- </div> -->
                </div>
            </div>

  
           
        </section>
        <section class="section-area pt-30">
            
            <div class="container mb-30">
                <div class="row border-head-cnt">
                    <div class="col-xl-12 d-flex boxies">
                        <div class="txt-left">
                            Start or join a design factory!
                        </div>
                        
                        <div class="txt-right">
                            
                            <a href="mailto:felipe.garate@aalto.fi">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
       
        
    </main>
<?php get_footer(); ?>

    <script>
         $(".filter-factory a").on("click", function(event) {
            // Hapus class active dari semua elemen di dalam ul
            $('.filter-factory a.active').removeClass('active');
            
            // Tambahkan class active ke elemen yang diklik
            $(this).addClass('active');
            event.preventDefault();
        });
    </script>
    <script>
        $(document).ready(function() {
        const counters = document.querySelectorAll('.counter');
        
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const duration = 2; // Durasi animasi dalam detik
            const step = target / (duration * 60); // Hitung jumlah iterasi per frame

            let current = 0; // Nilai saat ini

            // Fungsi animasi
            function updateCounter() {
            current += step; // Tambahkan nilai langkah ke nilai saat ini
            if (current >= target) {
                current = target; // Pastikan nilai saat ini tidak melebihi target
            }
            counter.textContent = Math.round(current); // Perbarui teks counter
            if (current < target) {
                requestAnimationFrame(updateCounter); // Lakukan rekursi untuk iterasi berikutnya
            }
            }

            // Mulai animasi
            updateCounter();
        });
        });
    </script>
    <script>
        // $(document).ready(function() {
        // $('#dfjaveriana').modal('show');
        // });
        // Show modal only if redirected from "Read more" link
        window.onload = function() {
          var urlParams = new URLSearchParams(window.location.search);
          var showModalParam = urlParams.get('showModal');
          $('#'+showModalParam).modal('show'); // Show the modal
        //   if (showModalParam == 'true') {
        //     $('#dfjaveriana').modal('show'); // Show the modal
        //   }
        };
    </script>  

    <script>
        $(document).ready(function(){
            $('#select-cronogical').awselect({
                background: "#182224", //the dark blue background
                active_background:"#182224", // the light blue background
                placeholder_color: "#FFFFFF", // the light blue placeholder color
                placeholder_active_color: "#FFFFFF", // the dark blue placeholder color
                option_color:"#FFFFFF", // the option colors
                vertical_padding: "10px", //top and bottom padding
                horizontal_padding: "22px", // left and right padding,
                immersive: false // immersive option, demonstrated at the next example
            });
        });
    </script>

    <script>
        jQuery(document).ready(function($) {
            function initializeIsotope() {
                var $grid = $('.factory-active').imagesLoaded(function() {
                    $grid.isotope({
                        itemSelector: '.grid-facto',
                        percentPosition: true,
                        masonry: {
                            // use outer width of grid-sizer for columnWidth
                            // columnWidth: 1
                        }
                    });

                    // Filter items on button click
                    $('.filter-factory').on('click', 'a', function() {
                        var filterValue = $(this).attr('data-filter');
                        $grid.isotope({ filter: filterValue });
                    });
                });
            }

            // Initialize Isotope on page load
            initializeIsotope();
            $('#select-cronogical').on('change', function() {
                // alert("asdsad");
                var sortValue = $(this).val();
                
                $.ajax({
                    url: '<?php echo admin_url('admin-ajax.php'); ?>',
                    type: 'POST',
                    data: {
                        action: 'sort_posts',
                        sort_by: sortValue,
                    },
                    success: function(response) {
                        // console.log(response);
                        $('.factory-active').html(response);

                        // Reinitialize Isotope after updating the content
                        initializeIsotope();
                        
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX error:', status, error);
                    }
                });

               
            });
        });
    </script>       
