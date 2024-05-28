<?php
/***
 * Template Name: Insight Template
 */
?>

<?php get_header(); ?>
<!-- slider-area -->
<!-- main-start -->
    <main>
        <!-- slider-area -->
        <section class="slider-scroll">
            <div class="container">
                <div class="main-slide-scroll insight ">
                    <div class="text-ss">
                        <div class="main-text">
                            <p>
                                <?php the_field('title_reguler'); ?><br>
                                <span><?php the_field('title_span'); ?></span>
                            </p>
                        </div>
                        <div class="summary-text">
                            <p>
                                <?php the_field('summary_hero'); ?>
                            </p>
                        </div>
                        
                    </div>
                    <div class="slide-frist">
                            <div class="shape1" id="image1">
                                
                                <svg id="svg-main">
                                    <mask id="mask">
                                        <path id="inspat1" d="M731.184 113.904C727.862 51.5778 777.416 0 839.014 0C877.98 0 912.082 20.6635 931.055 51.6027C937.027 61.331 947.391 67.489 958.799 67.489H962.196C973.605 67.489 983.981 61.331 989.94 51.6027C1008.91 20.651 1043.02 0 1081.98 0C1143.58 0 1193.15 51.5778 1189.81 113.904C1186.78 170.831 1138.28 216.338 1081.27 215.965C1042.64 215.716 1008.88 195.165 990.002 164.462C984.006 154.696 973.642 148.476 962.183 148.476H958.812C947.353 148.476 936.99 154.696 930.993 164.462C912.119 195.165 878.341 215.716 839.723 215.965C782.716 216.326 734.22 170.831 731.184 113.904ZM1323.01 0C1263.36 0 1215.02 48.3433 1215.02 107.982C1215.02 182.525 1154.58 242.96 1080.03 242.96H839.026C779.382 242.96 731.035 291.304 731.035 350.943V377.939C731.035 437.578 682.688 485.921 623.043 485.921H594.067C534.423 485.921 486.076 534.264 486.076 593.903C486.076 653.543 534.423 701.886 594.067 701.886H1323.01C1382.65 701.886 1431 653.543 1431 593.903V107.982C1431 48.3433 1382.65 0 1323.01 0Z" fill="#D9DDE3"/>
                                        <!-- <path id="s-blue"        opacity="0.7" d="M0.288624 113.821C-3.03235 51.5402 46.5086 0 108.102 0C147.058 0 181.151 20.6484 200.119 51.5651C206.09 61.2863 216.451 67.4398 227.856 67.4398H231.252C242.658 67.4398 253.031 61.2863 258.989 51.5651C277.97 20.6484 312.062 0 351.019 0C412.6 0 462.153 51.5402 458.82 113.821C455.785 170.707 407.301 216.18 350.31 215.807C311.689 215.559 277.932 195.022 259.064 164.342C253.068 154.583 242.707 148.368 231.252 148.368H227.881C216.426 148.368 206.065 154.583 200.07 164.342C181.201 195.022 147.432 215.559 108.824 215.807C51.8322 216.168 3.34843 170.707 0.313525 113.821H0.288624Z" fill="#119DA4"/> -->
                                 
                                    </mask>
                                </svg>
                                
                                <div class="main-image">
                                    <img src=" <?php the_field('image_hero'); ?>" alt="Balloons">
                                </div>
                               
                                <svg xmlns="http://www.w3.org/2000/svg" id="main-shape-insight" fill="none">
                                   
                                    <path id="s-blue" opacity="0.7" d="M0.288624 113.821C-3.03235 51.5402 46.5086 0 108.102 0C147.058 0 181.151 20.6484 200.119 51.5651C206.09 61.2863 216.451 67.4398 227.856 67.4398H231.252C242.658 67.4398 253.031 61.2863 258.989 51.5651C277.97 20.6484 312.062 0 351.019 0C412.6 0 462.153 51.5402 458.82 113.821C455.785 170.707 407.301 216.18 350.31 215.807C311.689 215.559 277.932 195.022 259.064 164.342C253.068 154.583 242.707 148.368 231.252 148.368H227.881C216.426 148.368 206.065 154.583 200.07 164.342C181.201 195.022 147.432 215.559 108.824 215.807C51.8322 216.168 3.34843 170.707 0.313525 113.821H0.288624Z" fill="#119DA4"/>
                                
                                </svg>
                                
                                <svg xmlns="http://www.w3.org/2000/svg" id="main-shape-blw-ins" width="438" height="216" viewBox="0 0 459 218" fill="none">
                                    
                                    <path id="patlonj-inisight" d="M350.884 0.0761719H107.964C48.3372 0.0761719 0 48.3868 0 107.981C0 167.575 48.3372 215.886 107.964 215.886H350.884C410.511 215.886 458.848 167.575 458.848 107.981C458.848 48.3868 410.511 0.0761719 350.884 0.0761719Z" fill="#119DA4"/>
                                    <!-- <circle id="crc" r="120" cx="120" cy="120" fill="red" /> -->
                                </svg>
                            </div>
                       
                           
                    </div>
                   
                </div>
            </div>
           
        </section>

        <!-- service-area -->
        <section class="service-area ">
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
            <div class="container-fluid-cus sec-publication">
                <div class="slider-publication">
                    <?php 
                        if( have_rows('data_publications') ):

                            // Membuat array untuk menyimpan data repeater
                            $repeater_data_pub = array();
                        
                            // Mengambil data dari repeater field
                            while( have_rows('data_publications') ) : the_row();
                        
                                // Mengambil nilai dari sub fields
                                $title_file = get_sub_field('title_file');
                                $year = get_sub_field('year');
                                if(get_sub_field('file_publications') != ''){
                                    $file_publications = get_sub_field('file_publications');
                                }else{
                                    $file_publications = '';
                                }

                                if(get_sub_field('link') != ''){
                                    $link = get_sub_field('link');
                                }else{
                                    $link = '';
                                }
                               
                                $link = get_sub_field('link');
                                if(get_sub_field('tumbnail_cover') != ''){
                                    $tumbnail_cover = get_sub_field('tumbnail_cover');
                                }else{
                                    $tumbnail_cover = '';
                                }
                            
                                // Menambahkan data ke dalam array
                                $repeater_data_pub[] = array(
                                    'title_file' => $title_file,
                                    'year' => $year,
                                    'file_publications' => $file_publications,
                                    'link' => $link,
                                    'tumbnail_cover' => $tumbnail_cover

                                );
                        
                            endwhile;
                        
                            // Mengurutkan array berdasarkan 'year' secara menurun
                            usort($repeater_data_pub, function($a, $b) {
                                return $b['year'] - $a['year'];
                            });
                        
                            // Looping melalui array yang telah diurutkan
                            foreach($repeater_data_pub as $item) {
                                if($item['file_publications'] != ''){
                                    $filePub = $item['file_publications'];
                                }else{
                                    $filePub = $item['link'];
                                }
                                if($item['tumbnail_cover'] != ''){
                                    $classNonPic = '';
                                    $lipeshade = 'white';
                                }else{
                                    $classNonPic = 'non-images';
                                    $lipeshade = '#384042';
                                }
                    ?>
                                <div class="box-black <?php echo $classNonPic; ?>">
                                    <div class="hover-dw">
                                        <div class="hov-title">
                                            <?php echo $item['title_file']; ?>
                                        </div>
                                        <div class="hov-dwonload">
                                            <div class="icwd">
                                                <a href="<?php echo $filePub; ?>" target="_blank">
                                                <img src="<?php echo get_template_directory_uri().'/assets/img/assets/Download.png'; ?>" alt="">
                                                </a>
                                                <span>PDF</span>
                                            </div>
                                            <div class="year">
                                                <?php echo $item['year']; ?>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="lipet">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="110" height="102" viewBox="0 0 110 102" fill="none">
                                            <path d="M0.222656 0V101.333H110L0.222656 0Z" fill="<?php echo $lipeshade; ?>"/>
                                            <!-- <path opacity="0.35" d="M0.222656 0.88916V114.889L110 85.3334L0.222656 0.88916Z" fill="black"/> -->
                                        </svg>
                                        
                                    </div>
                                    <div class="lipet-shade">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="110" height="115" viewBox="0 0 110 115" fill="none">
                                            <path opacity="0.35" d="M0.222656 0.88916V114.889L110 85.3334L0.222656 0.88916Z" fill="black"/>
                                        </svg>
                                        
                                    </div>
                                    
                                    <?php
                                        if($item['tumbnail_cover'] != ''){
                                    ?>
                                            <svg id="svg-pub">
                                                <defs>
                                                    <mask id="mask-pub">
                                                        <path  d="M0 388.444V0H194.222L303.999 101.333V388.444H0Z" fill="#FFFFFF"/>
                                                    </mask>
                                                </defs>
                                            </svg>
                                            <div class="load-img">
                                                    <img src="<?php echo $item['tumbnail_cover']; ?>" alt="">
                                            </div>
                                    <?php
                                        }else{
                                    ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="304" height="365" viewBox="0 0 304 365" fill="none">
                                                <path d="M0 388.444V0H194.222L303.999 101.333V388.444H0Z" fill="#273032"/>
                                            </svg>
                                    <?php
                                        }
                                    ?>
                                    
                                </div>
                    <?php
                            }
                        
                        endif;
                    ?>

                </div>
            </div>

            <!-- Insight IN MOtion -->
            <div class="container pt-85">
                
                <div class="row in-motion">
                    
                    <div class="col-xl-4 col-lg-4 col-md-5 mb-25 js-center">
                        <div class="text" >
                           <p>Insights in motion</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-5 mb-25">
                        <div class="summary">
                            <p>
                               <?php the_field('summary'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row grid-v-motion pt-40">
                    <div class="col-12">
                        <?php
                            $rows = get_field('list_vimeo' );
                            if( $rows ) {
                                $first_row = $rows[0];
                                
                            }

                            // print_r($first_row);die();
                        ?>
                        <div class="bg-m-video" style="background: linear-gradient(270deg, rgba(0, 0, 0, 0.00) 37.06%, rgba(0, 0, 0, 0.80) 100%), url(<?php echo  $first_row['thumbnail_vimeo']; ?>) lightgray 50% / cover no-repeat;">
                            <div class="vm-info">
                                <div class="vm-title">
                                    <h1><?php echo $first_row['title']; ?></h1>
                                    <span><?php echo $first_row['sub_title']; ?></span>
                                </div>
                                <div class="w-vimeo">
                                    <a class="wv" href="#" data-toggle="modal" data-target="#vim-1" data-vimeo="<?php echo $first_row['id_vimeo']; ?>">Watch in Vimeo</a>
                                    <!-- <div class="rounded-play">
                                        <a href="#" data-toggle="modal" data-target="#vim-1"><img src="" alt=""></a> 
                                    </div> -->
                                    <a href="#" data-toggle="modal" data-target="#vim-1" data-vimeo="<?php echo $first_row['id_vimeo']; ?>">
                                        <div class="rounded-play">
                                            <img src="<?php echo get_template_directory_uri().'/assets/img/assets/play.png'; ?>" alt="">
                                        </div>
                                    </a> 
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="container-fluid-cus sec-v-inmotion" id="morevideo">
                <div class="slider-v-inm">
                <?php if( have_rows('list_vimeo') ): ?>
                    <?php
                        // Inisialisasi array untuk menyimpan data repeater
                        $repeater_data_vimeo = [];

                        // Loop untuk mendapatkan semua data repeater
                        while( have_rows('list_vimeo') ): the_row();
                            $repeater_data_vimeo[] = [
                                'title' => get_sub_field('title'),
                                'sub_title' => get_sub_field('sub_title'),
                                'thumbnail_vimeo' => get_sub_field('thumbnail_vimeo'),
                                'id_vimeo' => get_sub_field('id_vimeo'),
                            ];
                        endwhile;

                        // Hapus item pertama dari array
                        array_shift($repeater_data_vimeo);

                        foreach( $repeater_data_vimeo as $data ):

                            // print_r($repeater_data_vimeo);die();
                    ?>
                        <div class="box-inm">
                            <div class="inm-bg" style="background: linear-gradient(180deg, rgba(12, 22, 24, 0.00) 26.86%, rgba(12, 22, 24, 0.80) 86.98%), url(<?php echo $data['thumbnail_vimeo']; ?>) lightgray 50% / cover no-repeat;">
                                <div class="inm-txt">
                                    <h2><?php echo $data['title']; ?></h2>
                                </div>
                                <div class="inm-play">
                                    <a href="#" data-toggle="modal" data-target="#vim-1" data-vimeo="<?php echo $data['id_vimeo']; ?>">
                                        <div class="rounded-play">
                                            <img src="<?php echo get_template_directory_uri().'/assets/img/assets/play.png'; ?>" alt="">
                                        </div>
                                    </a> 
                                    
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                    

                   

                    
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-12 b-in-motion">
                        <div class="browse-video">
                            <a href="https://vimeo.com/dfgn" target="_blank">All videos on Vimeo</a>
                        </div>
                    </div>
                </div>
            </div>
            
        
        </section>
        <section class="section-area pt-120">
            <div class="container">
                <div class="row border-head-inm">
                    <div class="col-xl-12 js-center pb-120">
                        <div class="col-xl-5 col-md-5 pl-0">
                            <h1>Experiments and chronicles of DF's</h1>
                            
                        </div>
                        
                        <div class="col-xl-7 col-md-7">
                            <p>
                                <?php the_field('title_summary'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-12 js-center">
                        <div class="list-chronicles">
                       
                        <?php
                      
                            // Nama taksonomi yang Anda gunakan
                            $taxonomy = 'category';

                            // Slug atau ID dari term parent (misalkan "insight")
                            $parent_term_slug = 'insight';

                            // Dapatkan term parent berdasarkan slug atau ID
                            $parent_term = get_term_by('slug', $parent_term_slug, $taxonomy);
                           
                            // Periksa apakah term parent ditemukan
                            if ($parent_term) {
                                // Dapatkan anak-anak dari term parent
                                $child_terms = get_terms(array(
                                    'taxonomy' => $taxonomy,
                                    'parent' => $parent_term->term_id,
                                    'hide_empty' => false, // Ubah menjadi true jika Anda hanya ingin menampilkan terms yang memiliki postingan terkait
                                ));
                                
                                // Periksa apakah ada anak-anak term
                                if (!empty($child_terms) && !is_wp_error($child_terms)) {
                                    echo '<ul class="filter-cron">';
                                    // Loop melalui anak-anak term dan tampilkan datanya
                                    echo '<li><a href="" class="active" data-filter="*">All</a></li>';
                                    foreach ($child_terms as $term) {
                                        if($term->slug == 'blog-post'){
                                            $classTarget = '.blogpost';
                                        }else if($term->slug == 'multimedia'){
                                            $classTarget = '.multimedia';
                                        
                                        }else if($term->slug == 'others'){
                                            $classTarget = '.other';
                                        
                                        }else if($term->slug == 'publications'){
                                            $classTarget = '.publication';
                                        
                                        }else if($term->slug == 'social-media'){
                                            $classTarget = '.sosmed';
                                        
                                        }
                                        echo '<li><a href="" class="" data-filter="'. $classTarget .'">' .$term->name .'</a></li>';
                                    }
                                    echo '</ul>';
                                } else {
                                    echo '<p>No child terms found for the parent term "insight".</p>';
                                }
                            } else {
                                echo '<p>The parent term "insight" was not found.</p>';
                            }
                        ?>
                           
                        </div>
                    </div>
                </div>
                <div class="row pt-27 cron-active">

                <?php
                    // Dapatkan data dari repeater ACF
                    $repeater_data_cron = get_field('post_resources');

                    // Balik urutan array
                    $repeater_data_cron = array_reverse($repeater_data_cron);

                    // Loop untuk menampilkan data yang telah diurutkan
                        if ($repeater_data_cron) {
                            
                            foreach ($repeater_data_cron as $item) {
                                $category_id = $item['type_resources']; // Adjust this to match the name of your category field
                                $category = get_term_by('id', $category_id, 'category');
                                if($category->slug == 'blog-post'){
                                    $IsotopeTarget = 'blogpost';
                                }else if($category->slug == 'multimedia'){
                                    $IsotopeTarget = 'multimedia';
                                
                                }else if($category->slug == 'others'){
                                    $IsotopeTarget = 'other';
                                
                                }else if($category->slug == 'publications'){
                                    $IsotopeTarget = 'publication';
                                
                                }else if($category->slug == 'social-media'){
                                    $IsotopeTarget = 'sosmed';
                                
                                }
                ?>
                                <div class="col-xl-4 col-md-4 grid-cron <?php echo $IsotopeTarget; ?>">
                                    <div class="boxies-cronicles" >
                                        <div class="img-cronicles">
                                            <img src="<?php echo $item['thumbnail_resources']; ?>" alt="">
                                        </div>
                                        <div class="info-cronicles">
                                            <p><?php echo $item['type_of_resources']; ?></p>
                                            <h1> <a href="<?php echo $item['link_for_resource']; ?>" target="_blank"><?php echo $item['title_resources']; ?></a> </h1>
                                        </div>
                                    </div>
                                </div>
                <?php
                            }
                        } else {
                            echo '<p>No data found.</p>';
                        }
                ?>
                            
                    

                   
                </div>
            </div>
        </section>
        
        <!-- POP UP VIDEO -->
        <div id="vim-1" class="modal fade" role="dialog">
            <div class="modal-dialog vimeo-p">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="containter body-vpop">
                        
                            <div class="row">
                                <div class="v-close">
                                    <a href=""  class="close" data-dismiss="modal"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/close-popup.png'; ?>" alt=""></a>
                                    
                                </div>
                                <div class="col-12">
                                    <iframe id="vimeoPlayer" src="https://player.vimeo.com/video/840052304"  frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        
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
       
        
    </main>
<?php get_footer(); ?>
    <script>
        // Dapatkan tombol close
        var modal = document.getElementById('vim-1');
        var closeBtn = document.getElementsByClassName("close")[0];

        // Dapatkan video Vimeo
        var vimeoVideo = document.getElementById("vimeoPlayer");

        // Saat tombol close diklik, hentikan pemutaran video
        closeBtn.onclick = function() {
            // modal.style.display = "none"; // Tutup modal
            vimeoVideo.contentWindow.postMessage('{"method":"pause"}', '*'); // Hentikan pemutaran video
        }

        window.onclick = function(event) {
        if (event.target == modal) {
            // modal.style.display = "none";
            vimeoVideo.contentWindow.postMessage('{"method":"pause"}', '*'); // Hentikan pemutaran video
        }
        }
    </script>
    <script>
        $(document).ready(function(){
            $('#vim-1').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var dataId = button.data('vimeo'); // Extract info from data-* attributes
                var modal = $(this);
                var iframeSrc = 'https://player.vimeo.com/video/' + dataId;
                modal.find('#vimeoPlayer').attr('src', iframeSrc);
            });

            $('#vim-1').on('hidden.bs.modal', function (event) {
                $(this).find('#vimeoPlayer').attr('src', ''); // Clear iframe src to stop video when modal is closed
            });
        });
    </script>

    <script>
        $(".filter-cron a").on("click", function(event) {
           // Hapus class active dari semua elemen di dalam ul
           $('.filter-cron a.active').removeClass('active');
           
           // Tambahkan class active ke elemen yang diklik
           $(this).addClass('active');
           event.preventDefault();
       });
   </script>
   
    <script>
        $(document).ready(function(){
            $('#select-primer').awselect({
                background: "#182224", //the dark blue background
                active_background:"#182224", // the light blue background
                placeholder_color: "#FFFFFF", // the light blue placeholder color
                placeholder_active_color: "#FFFFFF", // the dark blue placeholder color
                option_color:"#FFFFFF", // the option colors
               
                horizontal_padding: "40px", // left and right padding,
                immersive: false // immersive option, demonstrated at the next example
            });
        });
    </script>
    <script>
        
        gsap.registerPlugin(ScrollTrigger, MorphSVGPlugin);
        var endShape = document.getElementById("pat2");
        gsap.set("#inspat1", {
            scale:0.88,
            transformOrigin: "center center",
            translate: "-125px -30px",
            opacity: 1,
            visibility: "visible",
        });
        var tl = gsap.timeline({
            scrollTrigger: {
            trigger: ".slider-scroll",
            scrub: 1,
            pin: true,
            // markers: true,
            start: "-60 top",
            end: "+=50%",
            // toggleActions: "play pause play reset",
            },
        });
        tl.to("#s-blue", {
            translate: "34% 0px",
            ease: "power1.out",
            duration:2,
            
        });
        gsap.to("#patlonj-inisight", {
            scrollTrigger: {
                trigger: ".slider-scroll",
                start: "-60 top",
                end: "+=50",
                scrub: 1,
                // markers:true,
                
            },
            translate: "80% 0",
            // x: "-100%", // Geser ke kiri sejauh 100%
            duration:2,
            ease: "power1.out"
        
        });
    </script>
