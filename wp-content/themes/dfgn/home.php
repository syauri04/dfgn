<?php

/***
 * Template Name: Home Template
 */
?>

<?php get_header(); ?>

<!-- slider-area -->
<!-- main-start -->
    <main >
        <!-- slider-area -->
        <section class="slider-scroll" >
            <div class="container" >
                <div class="main-slide-scroll pt-50">
                    <div class="text-ss">
                        <div class="main-text">
                            <p><?php the_field('text_hero_first'); ?></p>
                                <?php 
                                    $rows = get_field('text_repeater' );
                                    if( $rows ) {
                                        $first_row = $rows[0];
                                        $first_row_title = $first_row['text_hero_repeater'];
                                        // Do something...
                                    }
                                ?>
                            <p id="changingTitle" class="wipe-up"><?php echo $first_row_title; ?></p>
                            <p><?php the_field('text_hero_end'); ?></p>
                        </div>
                        <div class="btn-text">
                            <a id="learnmore" href="#">Learn More</a>
                        </div>
                        
                    </div>
                    <div class="slide-frist">
                            <div class="shape1" id="image1">
                                <svg id="svg-main">
                                    <mask id="mask">
                                        <!-- <path id="pat1" d="M731.184 113.904C727.862 51.5778 777.416 0 839.014 0C877.98 0 912.082 20.6635 931.055 51.6027C937.027 61.331 947.391 67.489 958.799 67.489H962.196C973.605 67.489 983.981 61.331 989.94 51.6027C1008.91 20.651 1043.02 0 1081.98 0C1143.58 0 1193.15 51.5778 1189.81 113.904C1186.78 170.831 1138.28 216.338 1081.27 215.965C1042.64 215.716 1008.88 195.165 990.002 164.462C984.006 154.696 973.642 148.476 962.183 148.476H958.812C947.353 148.476 936.99 154.696 930.993 164.462C912.119 195.165 878.341 215.716 839.723 215.965C782.716 216.326 734.22 170.831 731.184 113.904ZM1323.01 0C1263.36 0 1215.02 48.3433 1215.02 107.982C1215.02 182.525 1154.58 242.96 1080.03 242.96H839.026C779.382 242.96 731.035 291.304 731.035 350.943V377.939C731.035 437.578 682.688 485.921 623.043 485.921H594.067C534.423 485.921 486.076 534.264 486.076 593.903C486.076 653.543 534.423 701.886 594.067 701.886H1323.01C1382.65 701.886 1431 653.543 1431 593.903V107.982C1431 48.3433 1382.65 0 1323.01 0Z" fill="#D9DDE3"/> -->
                                      
                                        <!-- <path id="pat1" d="M350.884 486.076H107.964C48.3372 486.076 0 534.387 0 593.981C0 653.575 48.3372 701.886 107.964 701.886H350.884C410.511 701.886 458.848 653.575 458.848 593.981C458.848 534.387 410.511 486.076 350.884 486.076Z" fill="#A4A2E0"/> -->
                                        
                                        <!-- <path id="pat1" d="M836.933 0C777.289 0 728.941 48.3433 728.941 107.982C728.941 182.525 668.501 242.96 593.952 242.96H352.95C293.306 242.96 244.959 291.304 244.959 350.943V377.939C244.959 437.578 196.611 485.921 136.967 485.921H107.991C48.3472 485.921 0 534.264 0 593.903C0 653.543 48.3472 701.886 107.991 701.886H836.933C896.577 701.886 944.924 653.543 944.924 593.903V107.982C944.924 48.3433 896.577 0 836.933 0Z" fill="#D9DDE3"/> -->
                                        <path id="pat1" d="M1362.01 197C1302.36 197 1254.02 245.343 1254.02 304.982C1254.02 379.525 1193.58 439.96 1119.03 439.96H878.026C818.382 439.96 770.035 488.304 770.035 547.943V574.939C770.035 634.578 721.688 682.921 662.043 682.921H633.067C573.423 682.921 525.076 731.264 525.076 790.903C525.076 850.543 573.423 898.886 633.067 898.886H1362.01C1421.65 898.886 1470 850.543 1470 790.903V304.982C1470 245.343 1421.65 197 1362.01 197Z" fill="#D9DDE3"/>
                                        <path id="patdots" fill-rule="evenodd" clip-rule="evenodd" d="M878.014 197C816.416 197 766.862 248.578 770.184 310.904C773.22 367.831 821.716 413.326 878.723 412.965C917.341 412.716 951.119 392.165 969.993 361.462C975.99 351.696 986.353 345.476 997.812 345.476H1001.18C1012.64 345.476 1023.01 351.696 1029 361.462C1047.88 392.165 1081.64 412.716 1120.27 412.965C1177.28 413.338 1225.78 367.831 1228.81 310.904C1232.15 248.578 1182.58 197 1120.98 197C1082.02 197 1047.91 217.651 1028.94 248.603C1022.98 258.331 1012.6 264.489 1001.2 264.489H997.799C986.39 264.489 976.027 258.331 970.055 248.603C951.082 217.663 916.98 197 878.014 197Z" fill="#D9DDE3"/>

                                       
                                        <path id="pat2" d="M105.208 701H1288.79C1346.9 701 1394 652.718 1394 593.154V107.846C1394 48.2823 1346.9 0 1288.79 0H578.642C520.535 0 473.434 48.2823 473.434 107.846C473.434 167.41 520.535 215.692 578.642 215.692H606.871C664.977 215.692 712.078 263.975 712.078 323.538V377.462C712.078 437.025 664.977 485.308 606.871 485.308H315.623C257.516 485.308 210.415 437.025 210.415 377.462V350.5C210.415 290.936 163.314 242.654 105.208 242.654C47.101 242.654 0 290.936 0 350.5V593.154C0 652.718 47.101 701 105.208 701Z" fill="#D9D9D9"/>
                                        
                                        <path id="pat3" d="M1206.4 903H305.598C171.734 903 63 789.273 63 648.129V334.871C63 194.235 171.734 80 305.598 80H1206.4C1340.27 80 1449 194.235 1449 334.871V648.129C1449 789.273 1340.27 903 1206.4 903Z" fill="white"/>

                                        <!-- <path id="pat3" d="M105.208 701H1288.79C1346.9 701 1394 652.718 1394 593.154V107.846C1394 48.2823 1346.9 0 1288.79 0H578.642C520.535 0 473.434 48.2823 473.434 107.846C473.434 167.41 520.535 215.692 578.642 215.692H606.871C664.977 215.692 712.078 263.975 712.078 323.538V377.462C712.078 437.025 664.977 485.308 606.871 485.308H315.623C257.516 485.308 210.415 437.025 210.415 377.462V350.5C210.415 290.936 163.314 242.654 105.208 242.654C47.101 242.654 0 290.936 0 350.5V593.154C0 652.718 47.101 701 105.208 701Z" fill="#D9D9D9"/> -->
                                       
                                        
                                    </mask>
                                </svg>
                                
                                <div class="main-image">
                                    <img src="<?php the_field('image_hero'); ?>" alt="Balloons">
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" id="main-shape-ylw" fill="none">
                                    <path id="s-yellow" opacity="0.7" d="M0.288869 113.821C-3.03211 51.5402 46.5089 0 108.102 0C147.059 0 181.152 20.6484 200.12 51.5651C206.09 61.2863 216.451 67.4398 227.857 67.4398H231.252C242.658 67.4398 253.031 61.2863 258.989 51.5651C277.97 20.6484 312.063 0 351.019 0C412.6 0 462.153 51.5402 458.82 113.821C455.785 170.707 407.301 216.18 350.31 215.807C311.69 215.559 277.932 195.022 259.064 164.342C253.069 154.583 242.708 148.368 231.252 148.368H227.882C216.426 148.368 206.065 154.583 200.07 164.342C181.201 195.022 147.432 215.559 108.824 215.807C51.8324 216.168 3.34867 170.707 0.313769 113.821H0.288869Z" fill="#FAC201"/>
                                
                                </svg>
                                
                                <svg xmlns="http://www.w3.org/2000/svg" id="main-shape-blw" width="438" height="216" viewBox="0 0 459 218" fill="none">
                                    
                                    <path id="patlonj" d="M350.884 0.0761719H107.964C48.3372 0.0761719 0 48.3868 0 107.981C0 167.575 48.3372 215.886 107.964 215.886H350.884C410.511 215.886 458.848 167.575 458.848 107.981C458.848 48.3868 410.511 0.0761719 350.884 0.0761719Z" fill="#A4A2E0"/>
                                    <!-- <circle id="crc" r="120" cx="120" cy="120" fill="red" /> -->
                                </svg>
                            </div>
               
                            <div class="main-text-ab" id="">
                                <p>
                                    <?php the_field('dfgn_mission_statement'); ?>
                                </p>
                            </div>
                       
                           
                    </div>
                </div>
            </div>
            <div class="row" id="s_nums">
                <div class="col-xl-4 col-lg-4 col-md-5 mb-30">
                    <div class="df-numb" data-animation="fadeInDown" data-delay=".4s">
                        <div class="nums si counter" data-count="10400"><span class="number">0</span><span class="plus">+</span></div>
                        <div class="ic-title">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/Icon-student.png'; ?>" alt="">
                            <span>Student Involved</span>
                        </div>
                    </div>
                </div>
                <div class="row" id="s_nums">
                    <div class="col-xl-4 col-lg-4 col-md-5 mb-30">
                        <div class="df-numb" data-animation="fadeInDown" data-delay=".4s">
                            <div class="nums si countert" data-count="<?php the_field('student_involved'); ?>"><span class="number">10K</span><span class="plus">+</span></div>
                            <div class="ic-title">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/assets/Icon-student.png'; ?>" alt="">
                                <span>Student Involved</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-4 col-md-5 mb-30">
                        <div class="df-numb">
                            <div class="nums ip counter" data-count="<?php the_field('student_projects'); ?>">
                                <span class="number">0</span><span class="plus">+</span>
                            </div>
                            <div class="ic-title">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/assets/Icon-industri.png'; ?>" alt="">
                                <span>Student projects</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 mb-30">
                        <div class="df-numb">
                            <div class="nums ar counter" data-count="<?php the_field('industry_and_external_partners'); ?>">
                                <span class="number">0</span><span class="plus">+</span>
                            </div>
                            <div class="ic-title">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/assets/Icon_insdustryex.png'; ?>" alt="">
                                <span>Industry & external partners</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Our People in Action -->
            <div class="container sec-people title-fade">
                <div class="row r-testi">
                    <div class="col-xl-12 col-12 mb-40 d-flex">
                        <div class="col-lg-9 section-title">
                            <h1 class="fade-tile"><?php the_field('title_section_03'); ?></h1>
                        </div>
                    </div>
                </div>
                <div class="row sec-video">
                    
                    <div class="col-xl-4 col-lg-4 col-md-4 mb-30 js-center">
                        <div class="text" >
                            <p>
                                <?php the_field('description_section_03'); ?>
                            </p> 
                            <a href="<?php echo home_url(); ?>/insight#morevideo">Watch more videos</a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 mb-30 vimeo-uy">
                      
                        <div class="video-cover" style="background: url(<?php the_field('thumbnail_vimeo'); ?>) lightgray 50% / cover no-repeat;">
                           <div class="v-play">
                               <a href="#" data-toggle="modal" data-target="#v-vimeo"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/play-btn.png'; ?>" alt=""></a> 
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row sec-video">

                <div class="col-xl-4 col-lg-4 col-md-4 mb-30 js-center">
                    <div class="text">
                        <p>
                            At the heart of the Design Factory Global Network are our people diverse and unique, yet bound together by the mission to advance education at their local organizations. Who are these awesome humans? They are highly motivated and passionate experts, educators and practitioners, determined to shape the next generation of professionals. Their work varies widely: from designing programs, leading courses and workshops, advancing research and bridging the gap between academia and industry. They form not just a network, but a community of practice, fueled by a collective passion.
                        </p>
                        <!-- <a href="insight.html#morevideo">Watch more videos</a> -->
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 mb-30 vimeo-uy">
                    <div class="video-cover" style="background: url(<?php echo get_template_directory_uri() . '/assets/img/assets/cover-video.png'; ?>) lightgray 50% / cover no-repeat;">
                        <div class="v-play">
                            <a href="#" data-toggle="modal" data-target="#v-vimeo"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/play-btn.png'; ?>" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="cta-wrapper">
                    <a class="btn-online-blue" href="insight.html#morevideo">Watch more videos</a>
                </div>

            </div>
        </div>
        <!-- <div class="container sec-video">
                
                
            </div> -->

            <!-- POP UP VIDEO -->
            <div id="v-vimeo" class="modal fade" role="dialog">
                <div class="modal-dialog vimeo-p">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="containter body-vpop">
                             
                                <div class="row">
                                    <div class="v-close">
                                        <a href=""  class="close" data-dismiss="modal"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/close-popup.png'; ?>" alt=""></a>
                                        
                                    </div>
                                    <div class="col-12">
                                        <iframe id="vimeoVideo" src="https://player.vimeo.com/video/<?php the_field('id_vimeo'); ?>"  frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
               
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div> -->
                </div>

            <!-- what do you say -->
            <div class="container sec-testimoniale title-fade">
                <div class="row r-testi">
                    <div class="col-xl-12 col-12 mb-80 d-flex">
                        <div class="col-lg-9 section-title">
                            <h1><?php the_field('title_testimonial'); ?></h1>
                            <!-- <p>Kabupaten Bogor </p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid-cus sec-testimonial">
                
                <div class="slider-team">
            
                    <?php if( have_rows('add_testimonial') ): 
                            $index = 1;
                            while( have_rows('add_testimonial') ): the_row();
                        ?>
                            <div class="box-say grid<?php echo $index; ?>">
                                <div class="inner-left">
                                    <img src="<?php echo get_sub_field('picture') ?>" alt="">
                                </div>
                                <div class="inner-right">
                                    <div class="content">
                                        <p>
                                            <?php echo get_sub_field('quote') ?>
                                        </p>
                                    </div>
                                    <div class="from-c">
                                        <span><?php echo get_sub_field('author') ?></span>
                                    </div>
                                    
                                </div>
                            </div>
                        <?php
                            $index++;
                            endwhile; 
                        endif;
                    ?>
                    

                   


                </div>
                <div class="box-say grid2">
                    <div class="inner-left">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/v-testi-2.png'; ?>" alt="">
                    </div>
                    <div class="inner-right">
                        <div class="content">
                            <p>Most positive people and most creative minds in one network!” </p>
                        </div>
                        <div class="from-c">
                            <span>Incredible unnamed individual from University of Tartu Delta Sandbox</span>
                        </div>
                    </div>
                </div>
                <div class="box-say grid3">
                    <div class="inner-left">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/v-testi-3.png'; ?>" alt="">
                    </div>
                    <div class="inner-right">
                        <div class="content">
                            <p>DFGN feels both as a home-base to come back to and feel safe, as well as a perfect trampoline to launch your DF to experience the unknown. </p>
                        </div>
                        <div class="from-c">
                            <span>Fabulous anonymous person from Fusion Point</span>
                        </div>
                    </div>
                </div>
                <div class="box-say grid4">
                    <div class="inner-left">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/v-testi-4.png'; ?>" alt="">
                    </div>
                    <div class="inner-right">
                        <div class="content">
                            <p>
                                The DFGN enables our students and us to collaborate with open-minded and curious minds. It challenges us in many fields and provides the ground to grow personally, professionally and institutionally.
                            </p>
                        </div>
                        <div class="from-c">
                            <span>Brilliant incognito from Inno.Space</span>
                        </div>

                    </div>
                </div>
                <div class="box-say grid5">
                    <div class="inner-left">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/v-testi-5.png'; ?>" alt="">
                    </div>
                    <div class="inner-right">
                        <div class="content">
                            <p>Beautiful projects start with beautiful people.</p>
                        </div>
                        <div class="from-c">
                            <span>Awesome unnamed human from Design Factory Shenkar</span>
                        </div>
                    </div>
                </div>
                <div class="box-say grid6">
                    <div class="inner-left">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/v-testi-6.png'; ?>" alt="">
                    </div>
                    <div class="inner-right">
                        <div class="content">
                            <p>
                                DFGN is our bootcamp to share, equip, motivate and empower each other. If you want to go fast, go alone, if you want to go far, go together.
                            </p>
                        </div>
                        <div class="from-c">
                            <span>Spectacular incognito from Design Factory Stuttgart</span>
                        </div>
                    </div>
                </div>


            </div>
            <div class="shade">
            </div>
        </div>
        <!-- Start Section Map -->
        <div class="container sec-map">
            <div class="row border-head-mp">
                <div class="col-xl-12 d-flex boxies">
                    <div class="txt-left">
                        Our global community
                    </div>
                    <div class="txt-center">
                        Our community is united by a shared understanding, enabling collaboration across cultures, time zones, and organisational boundaries. Each Design Factory, from corner to corner of the globe, is uniquely shaped by its awesome people. As we often say, the one thing you'll find in every Design Factory is probably a coffee machine and Hugging Point. Beyond that, each Design Factory stands out in its own special way.
                    </div>
                    <div class="txt-right select-gc">

                        <select id="select-countries" name="countries" data-placeholder="All continents">
                            <option value="m-full">All continents</option>
                            <option value="m-europe">Europe and the Middle East</option>
                            <option value="m-asia">Asia Pacific</option>
                            <option value="m-america">Americas</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Start Section Map -->
            <div class="container sec-map">
                <div class="row border-head-mp">
                    <div class="col-xl-12 d-flex boxies">
                        <div class="txt-left">
                            <?php the_field('title_section_05'); ?>
                        </div>
                        <div class="txt-center">
                            <?php the_field('description_section_05'); ?>
                        </div>
                        <div class="txt-right select-gc">
                            
                            <select id="select-countries" name="countries" data-placeholder="All continents">
                                <option value="m-full">All continents</option>
                                <option value="m-europe">Europe and the Middle East</option>
                                <option value="m-asia">Asia Pacific</option>
                                <option value="m-america">Americas</option>
                            </select>
                        </div>
                    </div>
                </div>

            <div id="factory-map-location" class="row">
                <div class="col-12 b-smap">
                    <svg class="continent" id="m-asia" width="511" height="616" viewBox="0 0 511 616" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M503.192 565.88C499.572 564.788 504.736 555.197 499.053 554.917C494.648 554.638 497.23 566.973 496.458 569.437C494.9 574.645 487.913 573.553 486.608 577.936C485.836 581.226 488.938 580.68 489.47 583.144C489.723 585.062 487.913 586.434 487.913 588.352C495.939 591.363 495.939 580.4 502.407 578.495C505.003 577.669 510.952 576.577 510.18 571.915C509.661 569.45 507.066 569.996 505.269 569.996C505.269 568.345 505.269 566.706 503.978 565.894" fill="#223E44" />
                        <path d="M479.9 587.246C471.102 583.956 469.532 595.465 462.81 599.022C458.658 601.22 454.784 599.568 450.392 602.579C446.772 605.323 442.872 607.787 439.252 610.251C434.86 612.716 434.327 614.367 439.518 614.914C444.948 615.46 447.278 614.914 451.417 611.077C453.24 609.425 455.303 606.961 457.38 605.869C459.709 604.217 460.747 604.776 463.076 604.217C466.95 603.404 469.292 600.381 472.912 598.462C474.736 597.37 487.673 588.325 480.419 587.233" fill="#223E44" />
                        <path d="M425.01 435.736C419.314 438.734 418.276 451.628 416.718 457.383C415.933 460.939 414.642 465.881 411.022 466.694C406.11 467.8 402.996 462.578 399.895 459.847C397.046 457.383 393.173 455.198 394.983 450.536C396.022 447.792 400.933 445.061 400.414 441.757C399.642 437.655 392.907 440.385 390.059 439.573C387.21 438.734 384.881 434.911 381.78 437.362C380.742 438.201 382.033 440.385 381.008 441.211C379.97 442.304 378.945 441.211 377.907 441.478C374.539 442.317 373.767 441.478 371.438 445.594C369.109 449.71 368.324 459.021 362.374 454.092C360.045 452.188 361.083 450.256 357.716 449.71C354.615 449.164 352.285 451.628 350.462 453.56C348.652 455.464 346.575 456.837 344.779 458.488C342.955 460.686 342.702 463.697 341.411 465.895C334.676 459.581 334.676 471.916 330.79 476.298C327.423 479.868 325.865 480.414 321.207 480.681C316.029 480.96 314.485 484.251 309.827 484.797C302.839 485.356 301.535 483.984 298.953 490.831C297.662 494.388 294.547 497.132 293.256 500.702C292.737 502.886 293.509 504.818 293.256 507.002C292.737 509.2 291.965 509.747 290.927 511.665C288.079 516.593 290.421 517.965 291.446 523.44C291.965 527.01 291.18 530.833 291.699 534.403C291.952 536.868 294.281 540.424 293.775 543.168C292.737 547.271 286.521 546.738 286.002 552.213C285.23 563.442 303.079 552.479 307.245 552.759C311.118 553.039 314.499 554.957 318.372 553.585C323.03 552.213 325.373 548.643 330.537 547.551C341.411 545.086 349.424 533.577 361.336 540.984C362.893 542.076 366.247 544.54 367.552 545.912C369.881 548.11 368.59 548.923 369.122 551.667C371.185 560.432 374.806 550.295 379.211 553.039C380.502 554.131 381.288 562.91 381.807 564.828C382.592 569.756 379.477 573.313 384.921 574.965C387.25 575.511 390.604 575.231 392.947 575.511C393.719 575.511 395.023 576.337 395.795 576.057C396.82 575.791 397.339 574.139 397.858 574.139C401.745 573.313 404.859 576.337 408.985 574.139C410.809 573.313 411.834 571.954 413.91 571.395C416.505 570.849 418.049 571.941 420.645 570.569C427.38 567.279 423.493 561.804 428.152 557.421C429.975 555.503 433.848 554.677 435.139 552.226C436.177 549.749 434.62 548.39 436.683 545.912C440.303 541.263 443.671 541.796 445.747 536.055C449.101 526.464 456.621 521.256 456.089 509.747C455.836 502.9 451.95 502.087 449.62 496.599C448.835 494.947 449.367 492.763 448.582 491.391C447.291 488.646 445.734 488.646 444.443 485.37C443.924 483.451 443.924 480.987 442.886 479.056C441.594 476.871 438.999 475.499 437.455 473.581C433.835 469.465 435.126 464.549 434.607 459.061C434.341 457.409 434.607 453.307 433.569 451.655C432.278 449.47 429.163 449.737 427.872 447.539C426.062 444.528 429.163 436.309 426.062 435.483" fill="#223E44" />
                        <path d="M396.527 586.7C393.932 586.7 392.388 583.956 390.059 586.154C388.768 587.526 389.54 591.363 389.021 593.281C387.982 596.851 383.843 603.698 391.097 600.407C392.388 599.861 393.426 598.223 394.464 597.663C395.755 597.117 397.565 597.663 398.604 597.117C400.414 596.025 401.971 592.735 403.009 590.537C405.338 584.516 401.452 586.98 397.313 586.98" fill="#223E44" />
                        <path d="M282.888 278.312C280.159 277.619 276.539 276.674 276.406 280.51C276.273 283.787 278.615 285.305 281.597 285.305C283.154 285.305 285.989 283.787 286.388 282.015C286.894 280.11 284.698 278.046 283.021 278.459" fill="#223E44" />
                        <path d="M316.282 135.793C314.565 134.688 313.181 131.411 311.105 129.946C307.99 128.107 304.889 128.48 302.12 127.388C296.943 125.563 295.905 124.098 293.496 119.356C289.702 112.775 286.601 111.683 279.693 110.231C276.233 109.498 269.338 104.756 266.237 106.568C261.406 109.498 268.992 115.706 269.338 119.356C270.03 129.946 260.367 123.738 258.637 129.213C254.844 140.536 282.102 131.051 277.271 142.001C275.887 145.291 267.608 144.918 264.507 146.024C263.469 146.397 263.469 148.208 262.084 148.568C261.046 148.928 260.008 147.476 258.97 147.835C256.548 148.568 255.177 146.743 254.138 150.02C253.446 152.218 256.894 153.67 255.855 156.6C255.509 158.052 251.37 160.983 249.999 162.075C247.231 163.527 245.846 163.168 242.745 163.887C241.015 164.62 239.298 166.444 237.914 166.817C233.415 167.91 227.545 166.444 223.06 165.352C216.844 163.887 206.156 164.979 200.633 162.075C194.763 158.785 194.417 152.205 186.138 150.739C179.59 149.634 174.745 151.845 171.298 144.159C170.606 142.334 171.298 140.149 169.914 138.311C168.516 136.486 164.044 135.034 161.968 134.288C159.213 133.196 157.469 132.104 155.06 131.011C152.637 129.906 152.637 127.348 149.204 129.173L149.057 129.2C150.348 132.357 150.388 136.686 148.511 138.671C145.756 142.334 141.258 138.311 138.502 143.786C137.464 146.357 139.195 147.076 137.118 148.901C135.388 151.099 132.966 148.168 131.927 152.191C128.826 160.597 141.59 158.039 135.375 164.606C131.581 168.629 125.019 167.177 121.24 171.187C119.842 172.652 119.163 174.837 118.125 176.302C116.408 177.767 114.332 175.929 113.986 179.219C113.626 185.067 121.24 182.15 123.289 185.067C125.006 187.971 123.915 189.516 122.038 190.435L122.943 190.182C128.121 189.822 128.813 194.205 131.568 197.495C132.074 198.028 132.792 198.374 133.471 198.681L133.977 198.214C139.155 194.551 141.923 202.237 142.948 206.247C144.332 211.362 142.948 215.745 146.395 219.048C149.856 222.711 151.865 222.298 153.037 225.908C159.984 218.835 176.116 236.938 185.393 236.938C185.393 236.938 185.646 236.951 185.979 237.004C187.083 236.059 188.148 236.312 189.213 237.098L189.665 236.525C193.366 231.983 198.383 234.886 202.842 237.577L203.042 237.684C203.934 235.992 204.692 234.22 205.77 232.928C208.885 229.292 215.087 227.453 219.227 230.384L221.596 234.34H222.022C226.361 234.42 231.685 238.456 232.004 242.799C232.337 247.554 227.173 249.02 227.173 253.389C227.519 257.412 233.388 258.864 235.797 262.167C237.182 263.619 237.514 265.458 238.899 267.282C240.097 268.228 243.357 268.348 243.996 270.266L244.422 269.853C246.858 267.562 247.39 265.045 249.813 265.284L249.946 265.098C252.009 259.983 257.2 263.26 260.301 264.738C260.647 261.448 263.056 258.144 266.863 260.715C269.964 262.527 267.555 266.923 270.656 269.107L271.108 269.467C271.108 269.467 271.202 269.414 271.242 269.4C274.223 267.882 277.896 268.468 280.652 270.599C282.023 271.332 280.984 276.447 285.483 274.609C286.521 274.236 286.521 270.24 288.238 269.121C289.622 268.028 292.032 268.761 293.416 268.028C296.184 266.936 297.222 264.006 300.324 263.646H299.618C316.535 260.742 319.996 239.922 321.02 225.296C314.472 224.936 319.636 221.632 319.303 218.369C318.944 215.798 313.088 209.963 311.357 207.779C309.64 205.581 304.104 200.825 303.425 198.281C302.733 193.899 308.602 190.968 311.011 188.41C307.551 184.747 302.387 189.13 298.234 187.678C296.517 186.945 289.609 181.457 289.609 179.632C289.609 177.088 298.593 169.775 301.002 170.134C306.526 171.24 300.31 178.54 305.142 180.365C308.283 181.55 310.053 178.633 311.956 177.021L312.063 176.342C311.704 171.227 317.933 170.121 320.688 167.936C322.764 166.111 323.443 165.006 325.519 163.914C327.236 162.821 330.351 163.181 331.043 160.623C332.427 156.241 325.865 154.403 327.249 149.287C328.634 146.01 332.773 145.637 333.465 140.895C335.541 126.642 321.739 138.697 316.216 135.78L316.282 135.793Z" fill="#223E44" />
                        <path d="M323.896 186.292C324.974 186.851 325.972 187.438 326.97 189.129C329.392 193.152 328.008 196.802 329.392 200.452C330.431 203.742 329.725 203.742 333.532 203.742C334.224 203.742 339.069 201.904 339.748 201.544C348.372 194.644 337.804 188.77 331.402 183.148C331.402 183.148 327.542 181.896 326.038 183.361C324.534 184.827 323.896 186.279 323.896 186.279V186.292Z" fill="#223E44" />
                        <path d="M375.311 168.855C372.716 168.576 372.583 171.599 373.368 173.371C374.539 175.969 375.83 177.074 375.83 180.085C375.83 182.562 375.963 185.706 374.406 187.891C372.862 190.222 369.615 190.502 368.191 192.966C366.647 195.857 368.071 196.389 364.69 197.082C362.228 197.642 360.418 197.921 357.822 198.041C354.721 198.174 352.778 200.093 352.139 203.25C352.006 204.089 352.392 205.727 351.873 206.407C351.22 207.632 350.448 206.673 349.543 207.219C347.72 208.178 347.214 210.922 348.106 212.827C349.397 215.305 352.125 215.305 353.417 217.889C354.455 220.367 356.265 222.005 357.809 218.449C359.1 215.571 356.904 210.909 360.79 209.55C361.828 209.137 362.986 209.683 364.025 209.137C365.582 208.178 365.316 206.66 366.221 205.288C368.43 201.731 369.974 205.434 372.436 205.967C373.741 206.247 374.513 205.701 375.551 205.021C377.88 203.503 379.81 202.277 382.419 201.172C384.748 200.359 386.039 199.12 386.172 196.243C386.292 193.366 385.52 190.075 385.001 187.345C384.602 185.973 384.096 184.601 383.843 183.228C383.457 181.031 383.976 178.846 383.59 176.648C383.071 173.638 378.279 169.109 375.311 168.576" fill="#223E44" />
                        <path d="M373.887 151.459C371.558 150.353 366.5 146.663 367.019 151.871C367.272 154.336 369.096 156.254 367.152 158.319C366.114 159.278 364.69 158.732 364.823 160.916C364.956 162.834 366.9 163.527 368.191 164.486C369.349 165.166 370.4 166.258 371.944 165.578C372.849 165.019 373.115 163.527 374.02 163.114C376.35 162.155 378.027 165.579 380.356 164.206C381.128 163.647 381.394 162.288 382.166 161.596C382.938 161.063 384.109 161.183 384.761 160.503C386.438 159.131 385.8 156.8 384.495 155.308C382.432 152.564 380.742 153.936 378.16 153.257C376.735 152.844 375.83 151.605 374.273 151.472" fill="#223E44" />
                        <path d="M42.8977 166.844C43.2305 161.729 40.1426 158.066 39.7833 152.95C39.4372 142.36 46.345 149.66 51.5226 150.02C53.9449 150.02 54.9831 148.195 58.0843 148.555C64.3 149.647 63.6079 153.31 66.363 155.868C69.8102 159.145 74.655 156.96 79.4865 159.877C82.9337 162.075 86.0483 171.573 91.5719 170.84C94.327 170.467 93.6482 167.55 95.3651 166.098C97.4415 164.26 98.8257 164.26 101.581 163.167C104.003 161.715 101.235 159.877 105.374 160.237C107.783 160.237 109.514 163.887 111.244 163.527C116.435 162.075 113.32 156.6 120.907 157.693C126.098 158.412 132.406 160.983 137.238 161.715" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M100.902 162.821C99.172 170.854 109.181 165.006 109.181 171.586C109.181 178.886 101.235 171.959 98.4799 172.319C97.7878 172.319 90.5339 178.526 90.5339 178.886C90.8933 182.549 100.543 184.734 93.9811 190.941" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M103.311 174.144C106.066 181.816 108.835 176.341 114.012 178.166" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M122.983 190.222C128.161 189.862 128.853 194.245 131.608 197.535C133.338 199.36 137.478 198.987 134.363 202.277C133.338 203.383 128.147 201.904 126.084 202.277C113.999 205.194 132.3 215.065 128.493 223.471C127.455 225.655 120.894 233.328 118.831 234.793C115.716 236.978 109.5 235.526 111.231 241.733C112.615 246.116 119.177 245.756 117.446 251.964C116.062 257.079 111.231 255.627 107.77 255.254" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M134.031 198.268C139.208 194.604 141.976 202.291 143.001 206.3C144.386 211.415 143.001 215.798 146.449 219.101C150.601 223.484 152.664 222.019 153.702 228.599C155.433 238.456 157.15 235.899 166.134 239.189C170.965 241.374 173.374 243.931 178.911 244.304C179.949 244.304 183.051 245.396 184.089 244.664C187.203 242.466 184.089 239.549 185.127 238.07C188.92 232.595 192.035 242.453 196.174 242.826C202.39 242.826 203.082 236.258 205.837 232.955C208.952 229.318 215.154 227.48 219.293 230.411L223.446 237.337C222.754 241.001 219.653 239.908 217.576 242.453C215.846 244.65 217.23 246.835 216.538 249.406C215.846 251.95 213.783 253.402 212.399 255.973C210.323 261.088 211.707 266.563 207.567 270.586" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M153.01 226.028C159.905 218.728 176.143 236.991 185.446 236.991" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M188.907 237.71C192.7 231.503 198.224 234.806 203.055 237.71" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M184.661 236.618C185.02 238.443 186.152 243.558 186.844 245.024C187.869 247.568 190.291 248.673 191.316 251.231C193.046 255.614 188.561 261.102 193.392 264.752" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M186.391 245.397C189.493 245.037 194.43 245.397 197.186 247.221C198.57 247.954 197.532 250.152 199.262 251.244C200.3 251.604 202.017 250.885 203.055 251.244C204.44 251.977 206.156 251.244 207.195 252.696C208.233 255.267 205.478 255.987 205.81 257.452C206.157 260.382 207.887 262.207 210.309 264.019" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M220.904 234.433C225.403 233.701 231.711 238.07 232.057 242.825C232.39 247.581 227.226 249.046 227.226 253.415C227.572 257.438 233.442 258.89 235.851 262.194C237.235 263.646 237.568 265.484 238.952 267.309C240.349 268.401 244.476 268.401 244.143 271.332C243.105 279.351 225.855 271.691 233.442 286.318C235.864 291.073 237.581 292.525 238.619 298C238.965 300.184 238.619 303.475 239.657 305.659C240.696 308.23 243.105 309.322 243.797 312.253" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M241.734 273.876C241.042 279.351 244.156 277.899 245.873 280.097C247.949 282.641 247.257 285.572 248.628 288.129C251.743 292.885 253.819 289.221 257.945 288.489C263.123 288.129 262.098 289.208 263.815 293.244C265.891 298.719 272.786 304.207 265.199 305.3C262.444 305.659 259.675 303.475 257.266 305.3C255.19 307.138 255.19 311.893 254.152 314.078" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M244.489 269.88C247.603 266.95 247.603 263.646 252.435 266.217C256.228 268.402 253.819 270.24 255.536 273.517C257.612 276.807 261.073 276.447 262.79 279.724C263.828 282.295 262.79 284.839 264.52 287.41C267.275 292.525 273.837 293.258 274.875 300.185C275.913 305.66 268.659 310.415 265.904 304.567" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M274.17 304.567C274.516 307.138 276.925 309.682 276.925 312.253C276.925 316.276 275.195 315.53 272.772 317.728C271.055 319.553 270.363 321.364 268.633 323.203C266.557 324.655 264.494 322.11 263.802 326.107" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M250.012 265.124C252.075 260.009 257.266 263.286 260.368 264.765C260.714 261.475 263.123 258.171 266.929 260.742C270.03 262.554 267.621 266.949 270.723 269.134" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M149.23 129.213C152.677 127.388 152.678 129.945 155.087 131.051C157.496 132.143 159.239 133.236 161.994 134.328C164.071 135.06 168.543 136.526 169.94 138.351C171.325 140.189 170.632 142.374 171.325 144.199C174.772 151.885 179.617 149.673 186.165 150.779C194.457 152.244 194.79 158.811 200.66 162.115C206.183 165.032 216.884 163.927 223.087 165.392C227.572 166.497 233.442 167.949 237.94 166.857C239.325 166.484 241.042 164.646 242.772 163.927C245.873 163.194 247.244 163.567 250.026 162.115C251.41 161.009 255.549 158.092 255.882 156.64C256.92 153.71 253.46 152.258 254.165 150.06C255.203 146.783 256.574 148.594 258.997 147.875C260.035 147.515 261.073 148.967 262.111 148.608C263.495 148.248 263.495 146.423 264.533 146.063C267.635 144.958 275.927 145.331 277.298 142.041C282.129 131.091 254.87 140.589 258.664 129.253C260.381 123.765 270.057 129.985 269.365 119.395C269.019 115.745 261.432 109.538 266.264 106.607C269.365 104.782 276.259 109.538 279.72 110.271C286.628 111.723 289.729 112.815 293.522 119.395C295.931 124.137 296.97 125.603 302.147 127.428C304.916 128.52 308.017 128.16 311.131 129.985C313.208 131.451 314.578 134.741 316.309 135.833C321.832 138.75 335.648 126.695 333.558 140.948C332.88 145.69 328.727 146.063 327.343 149.34C325.958 154.455 332.533 156.294 331.136 160.676C330.457 163.234 327.343 162.874 325.612 163.967C323.536 165.059 322.857 166.164 320.781 167.989C318.026 170.174 311.797 171.28 312.156 176.395" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M260.021 127.748C254.484 116.065 242.412 129.946 235.159 129.213C230.673 128.84 227.226 126.655 223.433 124.83C218.242 122.273 214.116 124.458 209.284 123.365C203.415 122.273 199.967 116.425 194.444 114.973C192.367 114.6 187.882 113.135 186.152 115.333C184.075 118.61 188.574 120.088 188.228 122.273C187.19 128.853 170.619 119.356 164.749 120.821C161.302 121.913 155.086 125.936 153.023 129.213" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M242.413 342.571C248.282 340.733 250.705 347.673 255.869 346.954" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M289.702 368.88C293.496 371.064 295.226 375.087 299.711 373.995C301.442 373.249 302.48 369.972 304.889 369.612C306.619 368.88 309.374 371.064 311.105 370.345C316.628 367.055 310.413 349.525 322.498 357.93" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M324.228 185.466C325.266 182.922 327.675 182.549 330.098 182.922" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M353.23 203.01C356.664 204.102 362.201 209.217 362.201 209.217" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M11.4866 141.281C9.41027 136.166 3.55391 135.807 1.47758 131.784C-0.944817 127.028 3.19458 120.461 7.0012 125.936C11.4866 122.646 7.3472 117.158 14.6011 116.798C19.0732 116.438 25.981 119.355 30.1337 120.088C32.1967 120.448 32.8889 121.913 34.9519 121.913C37.7203 122.273 40.4754 120.088 43.2306 120.821C46.3451 121.553 46.6911 123.365 50.1384 122.646C54.6238 121.913 55.662 120.461 52.2147 116.798C51.1766 115.346 48.4214 117.517 47.3832 114.613C47.7293 114.986 48.0754 107.66 48.0754 108.033C48.5279 105.648 47.6495 104.663 48.2484 103.757" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M48.1287 103.97C48.1287 103.97 34.2332 75.5969 43.2972 37.8726" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M48.2483 103.744C48.5677 103.264 49.2865 102.811 50.8437 102.172C54.291 100.72 57.0594 103.637 60.1606 103.997C66.7224 104.729 70.1696 102.531 75.0011 99.6142C79.1404 97.4163 79.8325 96.324 83.6391 99.2412C85.7022 101.066 85.7022 102.891 88.8167 104.729C91.5718 106.554 94.6863 107.647 98.1336 106.914C103.311 105.822 101.235 103.997 106.412 106.914C111.244 109.112 111.603 111.669 115.037 114.96C117.113 117.144 120.907 119.342 123.675 120.075C126.43 121.167 127.122 119.702 130.224 119.702C133.684 119.702 135.747 122.259 138.848 123.711C140.925 124.817 144.026 124.817 146.435 125.909C149.882 127.734 151.267 135.767 148.511 138.684C145.756 142.347 141.258 138.324 138.502 143.799C137.464 146.37 139.195 147.089 137.118 148.914C135.388 151.112 132.965 148.182 131.927 152.204C128.826 160.61 141.59 158.052 135.375 164.619C131.581 168.642 125.019 167.19 121.239 171.2C119.842 172.665 119.163 174.85 118.125 176.315C116.408 177.78 114.332 175.942 113.986 179.232C113.626 185.08 121.24 182.163 123.289 185.08C126.75 190.928 118.817 191.288 116.035 192.034C113.294 192.34 111.829 192.766 110.991 193.645" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M32.5562 163.554C37.3743 156.627 39.7967 165.751 42.9112 167.576C49.4596 171.226 49.1269 162.461 52.9202 160.996C57.7517 159.531 59.828 166.844 62.5832 168.669C64.6595 170.121 67.4146 169.761 69.837 171.599C72.2594 173.051 73.2843 175.982 75.7067 177.447C78.5284 179.752 85.902 182.682 86.2082 187.304" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M69.7306 194.871C69.6507 194.778 69.5575 194.698 69.4777 194.604C66.3632 191.314 62.2238 188.037 57.7384 185.826C54.6372 184.734 49.8057 184.374 47.3966 184.734C43.2439 185.093 43.2439 186.199 39.7966 188.757" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M86.1947 187.305C86.2213 187.771 86.1946 188.264 86.0615 188.77C85.7022 189.489 81.9089 192.06 81.2301 193.152C79.8458 195.337 82.2549 196.429 79.4998 198.268C75.1874 200.719 71.8333 197.109 69.7437 194.871" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M86.0618 187.304C90.2011 186.572 91.2394 190.581 94.6866 190.941C99.1587 191.314 98.8259 187.664 101.94 185.093C111.949 177.434 107.797 191.301 111.257 193.872" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M111.031 193.672C109.86 194.897 109.926 196.989 109.527 200.812C108.489 209.95 99.5313 215.425 95.3786 223.47C92.9562 228.213 93.3156 229.678 87.446 228.586C85.3696 228.213 83.6526 226.388 81.5763 226.388C79.4999 226.388 77.4236 228.586 75.3606 228.959C75.3606 233.714 82.6145 235.526 83.2933 239.921C83.9854 243.571 79.1539 245.037 78.1157 249.792" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M78.1688 249.512C80.884 250.178 83.6658 251.244 86.035 251.244C91.8913 251.244 97.4282 246.129 103.298 250.152C106.399 252.696 106.745 257.811 109.513 261.474C110.552 262.567 111.59 262.567 112.615 263.659C112.974 264.778 112.282 266.59 112.615 267.322C114.345 270.253 115.037 271.705 118.152 272.078C124.367 273.17 119.869 269.147 124.021 267.322C128.52 265.138 128.161 270.253 128.161 273.53C128.161 276.807 126.444 280.483 126.776 283.76C127.109 288.143 130.224 289.608 131.954 293.631C134.03 297.294 132.313 301.317 134.03 305.313C135.415 309.336 138.862 311.547 140.246 315.903C142.655 322.856 145.423 328.331 148.525 334.898L148.192 333.806C151.293 338.921 155.086 331.595 157.163 329.051C161.302 323.935 159.239 323.935 159.585 316.995C159.931 311.88 160.969 306.405 161.315 301.29C161.662 295.056 165.455 293.604 169.594 289.581C173.041 285.945 178.219 283.014 180.987 278.618C184.435 273.503 183.743 271.691 188.92 268.028C192.035 265.844 197.904 261.821 202.044 264.005C205.158 265.484 203.428 266.576 204.799 268.761C206.529 271.332 207.567 272.424 209.99 274.609C214.129 278.632 215.846 282.281 217.243 288.129C217.922 291.792 216.884 298.719 221.716 298.719C226.214 298.719 225.868 289.941 229.662 291.419C231.725 292.512 233.455 302.382 234.493 304.927C238.286 312.972 240.017 320.632 239.671 329.77C239.671 334.152 238.632 337.456 240.363 341.452C242.426 345.475 246.578 349.138 248.987 353.521C251.05 357.517 252.435 363.005 255.536 366.295C259.329 370.678 264.161 373.235 263.828 366.655C263.482 362.632 262.444 355.692 261.405 352.042C259.689 346.927 254.152 345.835 250.704 341.812C242.412 333.42 241.734 327.945 243.118 316.622C244.156 309.669 245.873 310.029 251.05 312.959C256.92 316.249 257.958 317.715 260.713 322.816C261.406 324.268 263.482 326.093 264.161 327.199C264.52 328.291 265.199 333.406 265.891 333.766C270.03 337.056 272.439 330.476 274.516 328.291C277.963 323.909 283.141 322.443 284.179 316.609C284.858 312.226 283.819 303.808 281.756 300.518C277.271 292.858 260.687 282.628 268.3 272.024C271.401 267.642 276.925 267.642 280.718 270.572C282.089 271.305 281.051 276.42 285.55 274.582C286.588 274.209 286.588 270.213 288.305 269.094C289.689 268.002 292.098 268.721 293.482 268.002C296.251 266.909 297.289 263.979 300.39 263.619H299.685C316.601 260.715 320.062 239.895 321.087 225.269C314.538 224.909 319.703 221.605 319.37 218.342C319.011 215.771 313.154 209.936 311.424 207.752C309.707 205.554 304.17 200.798 303.491 198.254C302.799 193.872 308.669 190.941 311.078 188.384C307.617 184.72 302.453 189.103 298.3 187.651C296.583 186.918 289.676 181.43 289.676 179.605C289.676 177.061 298.66 169.748 301.069 170.107C306.593 171.213 300.377 178.513 305.208 180.338C311.078 182.536 312.116 170.48 318.332 179.245C320.049 181.443 318.665 182.176 321.433 184.72C323.509 186.559 325.24 186.186 326.957 189.103C329.379 193.126 327.995 196.776 329.379 200.425C330.417 203.716 329.712 203.716 333.518 203.716C334.21 203.716 339.055 201.877 339.734 201.518C351.127 192.393 329.033 185.08 327.303 177.78C326.624 173.025 331.096 171.573 331.455 166.817C331.788 162.435 328.687 155.854 336.966 158.399C339.388 159.131 338.696 162.421 342.143 162.062C345.95 161.702 345.244 160.223 345.244 156.947C345.577 154.749 343.86 152.191 344.206 149.633C344.552 146.716 345.936 144.891 346.629 142.334C347.667 138.311 348.013 133.928 348.705 129.546C350.089 123.698 348.372 123.338 345.59 118.223C342.143 112.748 342.143 109.831 335.581 107.633C331.442 106.541 327.649 107.633 323.842 106.541C321.087 105.808 321.087 105.089 319.011 103.983C317.986 103.251 314.871 101.785 314.179 101.053C311.424 99.2278 312.116 101.785 311.424 97.7625C311.091 95.9376 312.116 92.2877 312.808 90.4627C314.538 86.8129 317.294 80.2324 321.087 78.7805C322.817 78.0478 326.624 78.4075 328.674 78.7805C330.75 79.1401 333.505 81.3247 335.235 81.3247C337.99 81.3247 338.696 79.1401 340.759 78.4075C344.566 77.6748 345.258 80.2324 348.013 80.9651C350.089 81.6977 352.844 82.8033 355.267 81.6977C359.752 80.2457 357.343 80.6054 357.343 77.3152C357.343 74.7576 355.959 65.6196 362.52 69.2828C365.635 71.1077 366.673 79.8728 372.183 74.3979C374.26 72.9326 372.53 69.2828 374.939 67.8175C378.053 65.6196 380.129 67.8175 380.462 70.7347C381.154 74.0249 378.04 75.1173 377.348 77.6882C376.669 80.9651 378.386 82.8033 377.707 85.7206C377.015 88.6511 373.554 86.8129 373.914 90.8357C373.914 93.0336 377.348 95.5912 378.386 97.0432C381.833 101.799 385.294 106.541 389.433 110.564C391.163 112.389 399.096 121.154 401.518 120.061C404.979 118.596 401.186 116.039 401.186 114.587C401.186 113.481 400.84 112.748 400.84 111.656C401.186 109.831 403.262 109.831 403.595 108.739C404.287 106.181 402.903 104.716 402.557 101.799C402.557 101.066 404.979 100.706 404.979 98.5085C404.633 97.0432 402.557 95.9509 402.224 94.8586C401.186 92.6607 400.84 89.0108 399.109 87.5455C396.687 84.2553 393.932 86.0802 391.177 84.2553C385.653 80.2324 388.062 74.7576 393.932 75.1173C397.046 75.4902 398.763 77.6748 401.878 77.6748C404.3 77.3019 407.401 75.1172 409.464 74.3846H409.132C413.271 71.827 412.233 67.0848 417.756 65.9792C421.896 65.2466 428.098 67.0848 422.228 61.5967C420.511 59.3988 408.772 55.7489 416.372 51.7393C420.512 49.5414 428.79 56.8545 432.93 57.2142C434.314 57.5872 437.415 58.3198 438.453 57.2142C441.208 54.2969 437.761 53.9239 437.082 51.7393C433.968 44.7992 432.583 46.2645 426.035 44.7992C416.372 42.2417 406.017 41.882 396.687 38.2321C385.986 34.5822 368.044 28.0018 356.651 31.292C357.343 32.7573 358.381 34.9419 359.06 36.0475C355.267 37.8725 351.127 33.4899 347.334 32.3976C342.156 31.292 335.941 32.3976 330.763 32.7573C324.894 32.7573 322.83 31.292 317.307 29.0941C312.475 27.2691 305.927 28.3614 300.736 28.0018C293.15 28.0018 290.381 27.6288 284.179 23.6193C276.925 19.2367 270.363 19.5964 262.43 19.5964C258.637 19.5964 252.421 18.5041 249.653 21.0617C246.552 23.6193 250.012 25.4442 245.181 26.5498C243.105 26.9228 239.99 25.4575 237.927 25.4575C233.442 25.4575 234.12 27.2825 230.673 28.3748C225.842 29.8267 223.073 25.8172 219.972 23.2596C214.102 18.5041 204.439 15.2272 196.839 15.5869C194.084 15.9465 192.008 18.1444 188.561 18.5041C184.075 18.8638 179.59 15.9465 174.758 15.5869C166.812 15.2272 157.842 20.3424 150.242 17.7715C151.28 13.3889 158.188 15.5869 158.188 10.0987C158.188 5.71619 153.01 4.98355 149.896 5.34321H150.242C146.448 5.34321 142.988 6.80849 139.887 6.44883C136.772 6.08917 132.3 4.25091 129.532 3.15861C126.084 2.06631 123.675 -0.491274 119.869 1.33367C116.435 2.79895 117.46 5.35653 115.037 6.80849C112.974 7.90079 110.206 7.54113 108.143 7.54113C103.99 7.54113 100.543 7.54113 96.7494 8.63343C95.0324 8.63343 92.2773 9.36607 90.5337 9.73906C86.3943 11.2043 88.1113 11.2043 85.7022 13.3889C83.2798 15.5869 85.7022 15.5869 81.5628 16.6792C79.8325 17.0521 77.4102 15.9465 75.6932 16.6792C68.1066 19.2367 76.7313 19.9694 77.0774 24.3519C73.9762 25.4442 54.291 19.9694 55.3291 27.2825C55.6885 28.3748 59.4685 31.665 60.5199 32.3976C61.1987 32.7573 60.1606 34.5822 61.1988 35.3149C62.583 36.4072 64.6593 35.6879 65.6975 36.4072C68.4526 38.2321 68.1199 36.7802 68.1199 41.1627C68.1199 42.9876 68.4526 45.1722 67.4278 46.6375C64.3266 50.2874 56.7267 48.4624 56.7267 43.7203C56.7267 41.1627 58.803 40.0704 58.4569 37.1531C57.7648 34.5956 54.3042 30.9457 53.2794 29.1074C50.1649 24.3652 49.1267 19.6097 42.911 19.9827C36.0032 20.3557 33.9402 24.7249 38.7717 29.8401C40.9279 31.7982 47.7425 37.2464 43.3236 37.8725" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21.0164 138.99C17.2231 138.99 14.8406 139.683 11.979 142.107" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M163.924 331.475C159.652 331.608 161.329 338.601 161.063 341.345C160.943 343.264 160.171 344.769 161.462 346.274C162.62 347.646 164.43 348.325 165.854 347.793C167.025 347.38 168.969 345.461 169.741 344.502C171.418 342.731 171.032 341.225 170.007 339.174C168.849 336.696 166.892 331.621 163.924 331.368" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M250.132 366.682C247.67 364.497 245.474 362.725 243.53 359.981C242.239 358.183 241.321 355.719 239.91 354.08C238.1 351.762 228.783 349.698 227.226 352.708C225.15 356.971 232.789 359.702 234.866 361.353C237.847 363.818 241.734 367.641 242.758 371.624C243.783 375.46 241.601 377.645 244.183 381.215C247.031 384.918 250.012 388.195 252.461 392.297C254.924 396.414 257.892 401.076 261.512 404.086C262.936 405.312 266.304 408.043 268.513 407.363C270.975 406.551 271.228 403.527 271.228 401.342C271.228 398.199 272.652 392.164 270.975 389.553C269.298 386.969 265.279 387.369 263.722 384.638C262.178 381.894 263.721 378.883 261.259 376.273C258.012 372.996 254.005 370.665 250.771 367.374C250.518 367.095 250.132 366.695 249.866 366.415" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M292.977 411.479C290.514 411.066 289.356 412.851 286.894 412.851C284.565 412.851 281.597 410.653 279.387 409.694C277.178 408.735 275.501 407.923 273.305 409.161C272.147 409.841 269.684 411.759 270.07 413.397C270.723 415.862 275.647 415.862 277.444 416.967C280.678 418.752 282.489 418.193 286.109 418.34C289.09 418.473 290.381 420.391 292.977 421.35C296.344 422.589 300.483 422.043 303.984 422.589C305.927 422.869 312.143 423.961 311.238 420.124C310.586 417.38 306.699 418.473 305.155 416.967C304.25 416.142 304.25 414.37 303.345 413.544C302.187 412.718 300.244 412.438 298.82 412.438C297.129 412.438 294.8 413.397 293.509 411.479" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M323.403 348.739C321.327 347.78 319.65 345.035 317.573 344.356C314.472 343.264 313.314 347.913 312.023 350.111C309.694 354.347 305.022 355.306 301.921 358.609C299.592 360.794 298.301 363.658 295.838 365.869C294.041 367.241 292.604 368.613 290.288 368.333C287.307 367.921 286.535 367.241 285.097 370.665C283.673 373.808 283.287 378.058 285.23 380.935C286.402 382.587 288.331 383.546 289.237 385.171C290.275 386.969 289.623 388.741 290.009 390.512C290.647 394.629 293.11 393.39 295.692 394.349C297.116 394.908 298.021 396.4 299.325 396.96C301.269 397.772 301.402 397.093 302.826 396.4C304.769 395.455 305.674 395.867 307.737 397.239C309.947 398.731 312.276 400.516 314.725 398.465C316.934 396.56 316.402 392.577 316.402 389.833C316.402 386.543 316.921 385.038 319.383 383.119C321.446 381.614 321.979 380.935 322.485 378.324C322.751 376.495 323.616 375.265 325.08 374.634C326.517 374.088 326.77 374.501 327.156 372.569C327.542 370.944 326.77 369.146 326.118 367.521C324.827 364.351 321.726 360.528 324.055 356.971C325.359 355.186 328.328 354.64 328.075 351.762C327.822 349.018 325.359 349.698 323.549 348.885" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M282.888 278.312C280.159 277.619 276.539 276.674 276.406 280.51C276.273 283.787 278.615 285.305 281.597 285.305C283.154 285.305 285.989 283.787 286.388 282.015C286.894 280.11 284.698 278.046 283.021 278.459" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M326.89 250.631C323.004 249.819 323.642 254.335 322.098 256.386C320.941 257.758 319.117 257.478 319.902 259.809C320.288 261.181 322.098 262.14 323.017 263.379C323.909 264.751 324.694 266.243 326.77 265.004C328.7 263.912 328.061 261.048 328.194 259.117C328.447 255.414 330.005 254.201 327.409 251.031" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M375.311 168.855C372.716 168.576 372.583 171.599 373.368 173.371C374.539 175.969 375.83 177.074 375.83 180.085C375.83 182.562 375.963 185.706 374.406 187.891C372.862 190.222 369.615 190.502 368.191 192.966C366.647 195.857 368.071 196.389 364.69 197.082C362.228 197.642 360.418 197.921 357.822 198.041C354.721 198.174 352.778 200.093 352.139 203.25C352.006 204.089 352.392 205.727 351.873 206.407C351.22 207.632 350.448 206.673 349.543 207.219C347.72 208.178 347.214 210.922 348.106 212.827C349.397 215.305 352.125 215.305 353.417 217.889C354.455 220.367 356.265 222.005 357.809 218.449C359.1 215.571 356.904 210.909 360.79 209.55C361.828 209.137 362.986 209.683 364.025 209.137C365.582 208.178 365.316 206.66 366.221 205.288C368.43 201.731 369.974 205.434 372.436 205.967C373.741 206.247 374.513 205.701 375.551 205.021C377.88 203.503 379.81 202.277 382.419 201.172C384.748 200.359 386.039 199.12 386.172 196.243C386.292 193.366 385.52 190.075 385.001 187.345C384.602 185.973 384.096 184.601 383.843 183.228C383.457 181.031 383.976 178.846 383.59 176.648C383.071 173.638 378.279 169.109 375.311 168.576" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M373.887 151.459C371.558 150.353 366.5 146.663 367.019 151.871C367.272 154.336 369.096 156.254 367.152 158.319C366.114 159.278 364.69 158.732 364.823 160.916C364.956 162.834 366.9 163.527 368.191 164.486C369.349 165.166 370.4 166.258 371.944 165.578C372.849 165.019 373.115 163.527 374.02 163.114C376.35 162.155 378.027 165.579 380.356 164.206C381.128 163.647 381.394 162.288 382.166 161.596C382.938 161.063 384.109 161.183 384.761 160.503C386.438 159.131 385.8 156.8 384.495 155.308C382.432 152.564 380.742 153.936 378.16 153.257C376.735 152.844 375.83 151.605 374.273 151.472" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M351.606 111.869C350.568 110.91 344.486 104.476 343.461 107.62C343.075 109.125 345.923 111.043 346.828 111.869C347.986 113.095 348.652 114.054 349.557 115.706C351.367 119.129 352.272 121.873 352.658 125.563C353.044 129.12 355.892 130.905 357.316 133.915C358.474 136.659 359.127 140.762 361.722 142.547C364.184 144.185 365.861 143.093 365.994 140.216C366.114 136.792 363.665 136.1 362.494 133.502C361.589 131.171 362.747 128.427 361.722 126.242C360.684 123.911 357.583 123.498 356.278 121.447C355.107 119.662 355.759 117.464 354.987 115.546C354.348 114.174 352.778 112.535 351.62 111.709" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M419.82 391.338C426.301 393.816 432.77 392.164 437.681 398.199C440.011 401.475 440.277 404.779 444.163 406.684C446.226 407.789 446.333 407.43 448.822 409.161C452.895 411.999 449.527 417.194 448.05 417.194L447.784 417.101C449.913 419.778 464.101 430.794 459.177 432.726C457.886 433.259 456.328 431.074 455.024 430.794C453.48 430.794 452.429 432.166 451.404 431.887C447.517 431.887 445.721 428.33 443.897 425.04C442.087 421.763 440.796 417.647 436.137 417.913C431.226 418.473 430.694 424.76 426.821 426.132C425.782 426.412 421.909 426.412 420.858 426.132C418.795 425.32 419.061 423.668 417.757 422.575C413.604 418.739 410.25 424.494 406.882 422.575C402.224 419.831 409.464 417.101 410.25 415.169C412.06 410.787 407.654 407.789 405.059 405.858C401.172 402.834 398.071 401.475 393.666 400.103C390.045 399.291 386.159 401.196 385.121 397.639C383.577 391.884 388.741 393.803 390.032 391.605C391.842 388.328 383.564 390.233 381.753 388.048C376.576 382.573 388.222 378.177 392.108 382.294C396.767 387.222 391.336 402.834 401.425 391.072C408.16 383.666 412.299 386.689 419.553 391.072" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M425.01 435.736C419.314 438.734 418.276 451.628 416.718 457.383C415.933 460.939 414.642 465.881 411.022 466.694C406.11 467.8 402.996 462.578 399.895 459.847C397.046 457.383 393.173 455.198 394.983 450.536C396.022 447.792 400.933 445.061 400.414 441.757C399.642 437.655 392.907 440.385 390.059 439.573C387.21 438.734 384.881 434.911 381.78 437.362C380.742 438.201 382.033 440.385 381.008 441.211C379.97 442.304 378.945 441.211 377.907 441.478C374.539 442.317 373.767 441.478 371.438 445.594C369.109 449.71 368.324 459.021 362.374 454.092C360.045 452.188 361.083 450.256 357.716 449.71C354.615 449.164 352.285 451.628 350.462 453.56C348.652 455.464 346.575 456.837 344.779 458.488C342.955 460.686 342.702 463.697 341.411 465.895C334.676 459.581 334.676 471.916 330.79 476.298C327.423 479.868 325.865 480.414 321.207 480.681C316.029 480.96 314.485 484.251 309.827 484.797C302.839 485.356 301.535 483.984 298.953 490.831C297.662 494.388 294.547 497.132 293.256 500.702C292.737 502.886 293.509 504.818 293.256 507.002C292.737 509.2 291.965 509.747 290.927 511.665C288.079 516.593 290.421 517.965 291.446 523.44C291.965 527.01 291.18 530.833 291.699 534.403C291.952 536.868 294.281 540.424 293.775 543.168C292.737 547.271 286.521 546.738 286.002 552.213C285.23 563.442 303.079 552.479 307.245 552.759C311.118 553.039 314.499 554.957 318.372 553.585C323.03 552.213 325.373 548.643 330.537 547.551C341.411 545.086 349.424 533.577 361.336 540.984C362.893 542.076 366.247 544.54 367.552 545.912C369.881 548.11 368.59 548.923 369.122 551.667C371.185 560.432 374.806 550.295 379.211 553.039C380.502 554.131 381.288 562.91 381.807 564.828C382.592 569.756 379.477 573.313 384.921 574.965C387.25 575.511 390.604 575.231 392.947 575.511C393.719 575.511 395.023 576.337 395.795 576.057C396.82 575.791 397.339 574.139 397.858 574.139C401.745 573.313 404.859 576.337 408.985 574.139C410.809 573.313 411.834 571.954 413.91 571.395C416.505 570.849 418.049 571.941 420.645 570.569C427.38 567.279 423.493 561.804 428.152 557.421C429.975 555.503 433.848 554.677 435.139 552.226C436.177 549.749 434.62 548.39 436.683 545.912C440.303 541.263 443.671 541.796 445.747 536.055C449.101 526.464 456.621 521.256 456.089 509.747C455.836 502.9 451.95 502.087 449.62 496.599C448.835 494.947 449.367 492.763 448.582 491.391C447.291 488.646 445.734 488.646 444.443 485.37C443.924 483.451 443.924 480.987 442.886 479.056C441.594 476.871 438.999 475.499 437.455 473.581C433.835 469.465 435.126 464.549 434.607 459.061C434.341 457.409 434.607 453.307 433.569 451.655C432.278 449.47 429.163 449.737 427.872 447.539C426.062 444.528 429.163 436.309 426.062 435.483" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M396.527 586.7C393.932 586.7 392.388 583.956 390.059 586.154C388.768 587.526 389.54 591.363 389.021 593.281C387.982 596.851 383.843 603.698 391.097 600.407C392.388 599.861 393.426 598.223 394.464 597.663C395.755 597.117 397.565 597.663 398.604 597.117C400.414 596.025 401.971 592.735 403.009 590.537C405.338 584.516 401.452 586.98 397.313 586.98" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M503.192 565.88C499.572 564.788 504.736 555.197 499.053 554.917C494.648 554.638 497.23 566.973 496.458 569.437C494.9 574.645 487.913 573.553 486.608 577.936C485.836 581.226 488.938 580.68 489.47 583.144C489.723 585.062 487.913 586.434 487.913 588.352C495.939 591.363 495.939 580.4 502.407 578.495C505.003 577.669 510.952 576.577 510.18 571.915C509.661 569.45 507.066 569.996 505.269 569.996C505.269 568.345 505.269 566.706 503.978 565.894" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M479.9 587.246C471.102 583.956 469.532 595.465 462.81 599.022C458.658 601.22 454.784 599.568 450.392 602.579C446.772 605.323 442.872 607.787 439.252 610.251C434.86 612.716 434.327 614.367 439.518 614.914C444.948 615.46 447.278 614.914 451.417 611.077C453.24 609.425 455.303 606.961 457.38 605.869C459.709 604.217 460.747 604.776 463.076 604.217C466.95 603.404 469.292 600.381 472.912 598.462C474.736 597.37 487.673 588.325 480.419 587.233" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M333.891 303.395C334.663 297.36 337.778 293.804 335.435 288.582C334.144 285.851 334.65 284.746 331.815 284.213C328.966 283.653 327.156 285.305 326.637 287.49C326.118 289.688 327.928 291.872 326.89 294.337C325.852 297.347 323.27 298.186 324.814 301.743C325.599 303.115 330.005 307.218 331.296 307.777C333.891 308.59 336.726 307.218 334.144 304.207" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M350.968 371.064C346.815 374.354 341.385 371.064 336.979 372.436C334.131 373.528 326.89 380.935 333.359 379.842C335.954 379.283 336.473 376.272 339.574 376.539C343.195 376.819 344.765 380.109 348.891 378.47C349.93 378.191 353.297 375.726 354.069 374.9C355.36 372.716 354.588 368.333 351.487 370.784" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M334.144 392.977C338.283 392.711 335.954 400.929 340.107 402.035C346.575 403.94 342.436 396.001 341.651 393.816C341.398 392.711 340.865 389.966 341.132 388.874C341.651 387.236 344.752 386.13 344.233 384.225C343.727 382.573 340.613 382.853 339.574 382.853C337.511 382.853 336.726 384.225 334.144 382.853L333.625 382.574C330.271 382.014 329.738 388.328 328.714 390.513C327.689 392.711 325.865 392.711 326.384 395.455C326.651 396.547 328.98 398.199 329.499 399.824C330.018 402.035 329.499 411.333 333.119 405.858C335.195 402.568 333.891 396.267 334.157 392.977" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M356.651 330.503C352.259 328.598 354.069 332.421 352.006 334.073C349.929 335.711 347.347 334.326 345.018 334.885C343.195 335.445 337.764 338.721 339.841 341.199C341.904 343.663 345.79 339.281 348.638 342.824C350.701 345.302 349.144 347.486 352.525 349.138C355.892 351.056 356.145 349.418 357.183 346.394C357.436 345.555 358.222 342.558 358.474 342.278C358.741 340.347 359.26 340.626 358.993 338.442C358.741 337.336 357.702 335.151 357.183 333.779C356.93 332.128 359.513 331.568 356.93 330.476" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M356.651 419.831C353.55 419.831 351.74 426.132 355.879 426.398C359.766 426.678 362.6 419.005 356.917 419.831" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M361.323 393.816C357.702 394.628 356.93 397.093 360.285 398.465C364.943 400.383 365.475 394.349 362.108 393.536" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M348.638 426.412C345.524 425.04 342.17 430.794 343.727 432.166C347.094 434.364 352.272 430.515 349.157 426.971" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M345.018 322.563C342.942 322.284 336.992 330.503 342.17 330.782C346.056 330.782 350.196 324.495 345.018 322.284" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M342.942 306.938C338.536 304.194 338.283 310.774 342.689 312.413C349.157 315.157 347.347 307.218 343.208 307.497" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M320.155 421.204C318.092 420.644 316.016 421.483 316.016 423.948C315.763 427.238 318.092 425.866 319.902 425.866C322.232 426.132 323.776 427.771 324.308 424.494C324.561 421.75 322.232 420.924 319.902 421.204" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M466.936 400.663C463.582 401.755 462.797 405.591 459.177 406.684C456.595 407.523 450.885 408.335 456.595 410.533C458.392 411.066 464.607 411.346 466.178 410.254C468.507 408.322 471.102 401.475 467.203 400.663" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M332.321 311.334C327.928 310.241 328.7 314.89 332.068 315.716C336.473 316.809 336.473 311.334 332.587 311.334" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M350.701 315.996C347.347 316.276 348.372 320.112 350.968 320.112C353.55 319.833 353.816 315.17 350.701 315.45" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M366.234 371.877C361.842 372.156 364.437 377.365 367.019 377.098C370.64 376.539 368.563 372.436 366.5 371.624" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M331.815 422.576C327.409 423.668 330.777 429.422 333.891 427.238C336.739 425.586 335.435 421.483 332.068 422.296" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M499.053 470.251C493.862 468.879 494.128 476.005 498.268 476.818C502.141 477.63 505.003 469.691 499.306 470.251" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M40.1827 188.397C40.582 186.452 40.3956 184.254 39.5305 182.136C37.9865 178.579 33.4479 178.033 32.0237 174.743C30.5996 171.453 33.8472 171.852 35.7771 172.279C38.8916 172.825 40.0495 171.32 38.4923 168.162C36.9483 165.152 33.9669 163.913 30.9855 163.101C27.2321 161.995 23.8648 160.21 21.4025 156.787C19.7254 154.602 18.5542 150.073 22.3075 149.127C24.2508 148.714 25.9278 150.353 28.0041 149.26C30.0671 148.035 29.9341 145.291 29.2952 143.093C28.3901 140.229 24.5036 138.71 21.6686 138.857" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg class="continent" id="m-europe" width="350" height="370" viewBox="0 0 350 370" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M168.147 86.2405C171.608 86.9732 171.608 88.7981 174.722 90.6231C176.107 90.996 183.693 92.4613 184.731 91.7287C187.753 89.5841 183.174 87.4527 186.448 85.6544C186.222 85.6145 185.996 85.5612 185.769 85.5079C186.116 80.3927 192.664 82.9503 190.947 77.8352C190.614 76.3699 186.116 74.172 185.077 73.0797C183.693 71.6277 185.077 70.1624 182.655 68.6971C178.436 65.7266 175.587 69.2966 173.005 66.7656C170.743 68.444 168.773 69.5363 167.122 71.6277C164.713 73.8123 164.713 76.7429 160.907 77.4755C159.962 77.702 158.325 77.7153 156.435 77.5821C156.94 79.1006 157.233 80.859 157.446 82.9503C157.619 84.8818 158.418 87.0798 159.057 89.2777L159.855 88.7981C162.278 87.3462 165.046 85.8809 168.134 86.2405H168.147Z" fill="#00522E" />
                        <path d="M107.627 108.033C107.747 108.033 107.88 108.033 108 108.047C107.88 108.047 107.76 108.047 107.627 108.033Z" fill="#00522E" />
                        <path d="M99.4817 107.367C99.6946 107.447 99.9343 107.514 100.174 107.567C99.9209 107.514 99.6946 107.447 99.4817 107.367Z" fill="#00522E" />
                        <path d="M100.174 107.567C102.024 107.993 104.646 107.94 107.148 108.02C104.659 107.94 102.037 107.993 100.174 107.567Z" fill="#00522E" />
                        <path d="M110.569 108.299C110.569 108.299 110.648 108.299 110.675 108.313C110.635 108.313 110.595 108.313 110.569 108.299Z" fill="#00522E" />
                        <path d="M108.599 108.086C108.679 108.086 108.772 108.086 108.852 108.1C108.772 108.1 108.692 108.1 108.599 108.086Z" fill="#00522E" />
                        <path d="M111.394 108.459C111.394 108.459 111.513 108.486 111.566 108.499C111.513 108.486 111.447 108.473 111.394 108.459Z" fill="#00522E" />
                        <path d="M109.637 108.166C109.717 108.166 109.797 108.179 109.877 108.193C109.797 108.193 109.717 108.179 109.637 108.166Z" fill="#00522E" />
                        <path d="M112.832 108.979C112.832 108.979 112.924 109.032 112.964 109.045C112.924 109.019 112.885 108.992 112.832 108.979Z" fill="#00522E" />
                        <path d="M109.464 66.5256C110.156 59.2125 102.916 61.4105 101.877 66.8853C101.518 68.7635 102.716 70.9348 103.488 73.0528C104.952 72.3734 106.922 71.4943 108.413 71.0147C108.812 69.616 109.358 68.0708 109.464 66.5256Z" fill="#00522E" />
                        <path d="M169.957 59.812C169.585 57.6008 169.665 55.3229 169.878 52.6321L169.824 51.9262C169.132 52.2592 168.32 52.5123 167.455 52.6455C164.687 53.0051 159.509 50.0879 157.433 53.0051C155.024 57.028 160.201 55.9357 159.842 58.1203C159.762 58.4267 159.656 58.6931 159.562 58.9329L160.893 59.2126C163.103 60.2116 167.375 60.598 169.957 59.8253V59.812Z" fill="#00522E" />
                        <path d="M61.5354 60.305C60.8965 60.305 59.6054 60.0386 59.4723 59.3459C59.073 57.8274 61.0163 58.1071 61.4023 57.2945C62.8264 54.4173 56.8769 54.4173 55.4528 55.3763C51.9656 57.2945 51.3134 64.9673 52.7375 68.3907C53.9088 71.268 57.782 72.7732 59.9914 74.2918C61.1627 75.2509 63.6117 78.8209 62.4537 80.4593C61.2958 82.0978 58.7004 80.1929 57.4093 81.9645C55.9852 83.6163 55.333 87.0397 57.0233 88.4118C57.7953 89.0911 59.2328 88.4118 58.9533 90.0502C58.8202 91.2757 57.0233 91.1425 56.238 91.5555C54.561 92.1016 53.0037 93.4737 53.6559 95.8048C54.6941 99.3614 57.7953 94.9789 59.6054 94.2995C62.5735 93.074 64.9027 95.2586 67.6179 94.859C69.1752 94.7125 69.4414 93.487 70.4663 92.9408C71.5044 92.2615 72.5293 92.8076 73.5674 92.5279C76.1629 91.8485 74.7254 89.6506 76.1629 87.5992C76.8151 86.6401 78.1061 86.6401 78.2259 85.2681C78.359 83.8961 77.0679 82.6705 76.1629 81.9779C75.1247 81.152 73.8337 80.8856 72.9286 79.9265C71.7706 78.8342 71.2382 77.1824 70.3465 75.8104C68.9223 73.6258 64.9027 71.561 64.5168 68.6838C63.9844 65.2603 67.3651 66.4992 68.4033 64.3012C70.5994 59.7855 63.7448 60.4649 61.9346 60.4649" fill="#00522E" />
                        <path d="M41.8234 144.332C42.8616 141.401 48.7313 139.95 43.8998 137.019C42.1695 135.567 39.0683 138.125 36.3131 136.286L35.1951 135.7C35.2084 137.445 35.3948 139.31 35.2617 141.055C34.5695 145.811 32.5065 147.263 30.4302 150.926C36.8988 153.816 29.2722 159.904 37.0319 161.463L38.0301 160.424C42.5155 155.668 40.1065 149.474 41.8234 144.359V144.332Z" fill="#00522E" />
                        <path d="M35.7141 131.904C35.794 131.717 35.8738 131.531 35.967 131.344C35.8738 131.531 35.7807 131.717 35.7141 131.904Z" fill="#00522E" />
                        <path d="M37.2314 129.866C37.471 129.692 37.7239 129.519 38.0034 129.359C37.7106 129.506 37.4577 129.679 37.2314 129.866Z" fill="#00522E" />
                        <path d="M37.0319 130.039C36.8855 130.172 36.7391 130.305 36.606 130.452C36.7391 130.305 36.8722 130.172 37.0319 130.039Z" fill="#00522E" />
                        <path d="M35.2749 133.742C35.3415 133.156 35.4612 132.596 35.6476 132.063C35.4612 132.583 35.3415 133.142 35.2749 133.742Z" fill="#00522E" />
                        <path d="M75.7237 141.495C75.5108 141.601 75.2978 141.721 75.0715 141.854C75.2978 141.734 75.5241 141.601 75.7237 141.495Z" fill="#00522E" />
                        <path d="M75.8567 141.428C78.918 139.83 79.8496 139.816 81.4335 137.019C79.8496 139.816 78.918 139.816 75.8567 141.428Z" fill="#00522E" />
                        <path d="M63.1592 128.947C63.1592 128.947 63.106 128.973 63.0793 128.987C63.106 128.973 63.1326 128.96 63.1592 128.947Z" fill="#00522E" />
                        <path d="M105.285 141.402H104.766C101.145 141.402 101.531 144.292 101.265 147.156C101.012 150.3 100.879 152.631 104.766 152.511C108.519 152.231 108.905 149.9 108.905 146.477C108.905 143.733 108.772 141.135 105.285 141.402Z" fill="#00522E" />
                        <path d="M126.008 155.935L126.141 156.068C123.932 156.068 118.115 154.563 118.368 158.266C118.501 160.051 119.407 160.184 120.831 160.73C122.774 161.423 122.388 161.689 123.692 163.061C128.87 169.082 131.066 155.255 126.022 155.935H126.008Z" fill="#00522E" />
                        <path d="M139.145 147.622C133.635 145.065 133.967 165.885 130.88 153.097C130.187 150.18 131.558 147.263 129.482 144.705C128.098 143.24 122.934 142.134 120.844 141.042C119.819 140.682 115.334 139.59 114.296 138.857C112.565 136.659 113.963 133.742 112.925 131.544C110.156 125.71 106.363 127.162 101.877 128.267C101.052 128.481 100.36 128.187 99.5615 128.068C99.109 128.001 98.6165 127.974 98.0575 128.148C97.951 128.187 97.8446 128.227 97.7248 128.267C97.046 128.267 97.3787 130.452 96.3539 130.812C96.3272 130.812 96.3006 130.838 96.274 130.838L96.3539 128.254C96.3539 126.416 96.6999 123.872 96.3539 122.406C95.9146 121.141 95.1959 120.288 94.5437 119.489H95.675C98.4169 119.489 98.9759 117.171 100.666 115.666C101.092 115.28 101.598 114.947 102.237 114.734C103.621 114.374 105.351 116.186 106.722 115.813C108.785 115.453 109.145 114.734 110.529 114.001C114.668 112.189 123.652 109.618 122.255 118.756L122.055 119.436C118.315 119.063 118.115 124.884 120.178 128.627C122.588 133.383 141.927 141.775 139.145 147.622Z" fill="#00522E" />
                        <path d="M93.9448 92.8209L95.1294 92.4612C96.8596 88.4917 99.109 84.6286 96.3539 80.7656C94.0646 81.1386 91.7087 81.6448 90.1382 82.9635C88.5676 84.2557 87.0902 85.9074 85.5596 87.5192L85.6527 87.7057C87.383 91.3556 90.1382 93.9132 93.9315 92.8209H93.9448Z" fill="#00522E" />
                        <path d="M95.1294 92.4612C95.1294 92.4612 95.0762 92.5811 95.0496 92.6477C94.9697 92.8208 94.9032 93.0073 94.8366 93.1672C94.5571 93.8465 94.3042 94.5126 94.0913 95.2052C94.0646 95.2452 94.0513 95.2852 94.0513 95.3251C93.9715 95.5516 93.9182 95.7914 93.8517 96.0311C93.8517 96.0311 93.8517 96.0311 93.8517 96.0578C93.8118 96.2576 93.7585 96.4574 93.7319 96.6572C93.692 96.8037 93.6786 96.9636 93.6653 97.1101C93.6387 97.2566 93.6254 97.3898 93.6254 97.5497C93.5988 97.7495 93.5855 97.9626 93.5855 98.1625C93.5855 98.3223 93.5855 98.4955 93.5855 98.6553L93.7053 99.3746C91.7088 99.4146 89.7256 99.6544 88.408 99.3746C83.6031 98.2823 84.2553 93.2205 79.8364 92.4612C80.1692 92.2347 80.4886 91.9949 80.808 91.7285C81.2739 91.4222 81.7264 91.0891 82.1789 90.7295C83.3635 89.7837 84.4682 88.6648 85.5596 87.5059L85.6528 87.6923C87.3831 91.3422 90.1382 93.8998 93.9316 92.8075L95.1294 92.4479V92.4612Z" fill="#00522E" />
                        <path d="M116.026 97.9359C116.385 100.12 120.857 101.959 122.588 102.318C120.604 107.194 115.8 105.089 113.564 109.005L113.444 109.392C111.341 107.607 105.897 108.18 101.984 107.833C101.026 107.753 100.147 107.62 99.4551 107.367C100.174 106.514 100.64 105.515 100.507 104.13C100.28 99.8274 97.0061 99.3212 93.7052 99.3745L93.5854 98.6552C93.5854 98.4953 93.5854 98.3222 93.5854 98.1623C93.5854 97.9625 93.5854 97.7494 93.6254 97.5496C93.6254 97.403 93.652 97.2698 93.6653 97.11C93.6653 96.9635 93.7053 96.8036 93.7319 96.6571C93.7585 96.4573 93.7984 96.2441 93.8517 96.0576C93.8517 96.0576 93.8517 96.0576 93.8517 96.031C93.9049 95.7912 93.9714 95.5515 94.0513 95.325C94.0513 95.285 94.0513 95.2451 94.0912 95.2051C94.2909 94.5258 94.5438 93.8464 94.8366 93.167C94.9031 92.9939 94.9697 92.8074 95.0495 92.6475C95.0762 92.5809 95.1028 92.5277 95.1294 92.461C96.274 89.8369 97.6449 87.266 97.6449 84.6951C97.6449 84.362 97.6183 84.0423 97.5784 83.7093C97.5385 83.3763 97.4586 83.0566 97.3522 82.7236C97.2457 82.3906 97.1259 82.0709 96.9528 81.7378C96.7931 81.4048 96.5935 81.0851 96.3539 80.7521C99.1091 80.2726 101.784 79.9795 102.902 78.5675C104.566 76.9823 104.22 75.0375 103.488 73.0527C104.952 72.3734 106.922 71.4942 108.413 71.0146C107.587 73.9052 107.454 76.1298 113.271 76.3829C116.026 76.7426 117.756 74.1717 120.857 74.9176C122.614 75.4371 122.92 77.1289 124.278 78.0214C122.707 84.8149 128.058 88.1052 122.242 92.8074C120.179 94.2727 115.693 94.6323 116.026 97.9226V97.9359Z" fill="#00522E" />
                        <path d="M149.513 66.1394L148.635 66.3925C148.755 67.6446 149.008 68.9634 148.808 69.8026C148.808 69.7227 148.555 69.9491 148.169 70.3354L148.808 70.5219C153.28 72.2669 155.343 74.345 156.421 77.5686C158.311 77.7018 159.935 77.6885 160.893 77.462C164.687 76.7294 164.687 73.7988 167.109 71.6142C167.349 71.3078 167.588 71.0414 167.841 70.775L167.801 70.5086C166.084 63.5685 154.678 65.7531 149.513 66.1261V66.1394Z" fill="#00522E" />
                        <path d="M173.005 66.7653C172.42 66.1926 171.847 65.3001 171.275 63.9547C170.609 62.556 170.197 61.1973 169.971 59.8119C167.402 60.5845 163.116 60.1982 160.907 59.1992L159.576 58.9194C158.484 61.5836 156.554 60.7311 154.345 61.3971C151.59 62.1297 150.898 59.9318 148.821 63.9547C148.528 64.5807 148.555 65.4732 148.648 66.3924L149.527 66.1393C154.704 65.7663 166.097 63.5817 167.814 70.5218L167.854 70.7882C169.345 69.2164 171.062 68.1907 173.005 66.7653Z" fill="#00522E" />
                        <path d="M96.354 122.406C95.3158 119.489 92.8934 118.756 92.8934 115.826C92.8934 114.733 95.6618 115.466 96.0079 114.733C96.3539 113.641 95.6618 111.443 96.0079 110.71C97.7249 108.526 100.839 107.433 100.507 104.143C100.147 97.2031 91.8685 100.12 88.4213 99.3877C83.6031 98.2954 84.2686 93.2202 79.8364 92.4609C78.359 93.4733 76.7618 94.1793 75.6438 95.3782C74.2596 96.8435 73.5675 100.493 71.5044 101.226C69.0821 101.586 61.8415 93.5532 63.2124 102.332C59.7518 103.064 53.8955 101.226 52.8573 105.609C51.1404 111.456 56.6507 109.258 59.4191 110.351C64.5168 112.389 69.894 124.364 63.9045 128.494V128.613C63.5585 135.913 68.736 130.798 71.5044 131.158C75.5906 131.517 77.4273 136.872 81.8196 136.286C82.0458 135.86 82.2854 135.38 82.5383 134.834C84.6013 130.452 83.9225 130.079 89.4328 130.452C91.4825 130.452 94.1977 131.517 96.2741 130.838L96.354 128.267C96.354 126.429 96.6867 123.885 96.354 122.419V122.406Z" fill="#00522E" />
                        <path d="M176.439 32.1715C175.401 29.6139 175.401 28.1486 174.722 25.6044C173.684 21.2219 172.3 17.9316 169.891 13.9088C167.229 9.6861 167.295 9.11331 168.347 8.35402L168.161 8.06097C167.122 5.86304 163.675 2.9458 161.266 2.9458C158.152 3.30546 158.857 4.77074 156.781 6.59569C150.911 12.0838 151.949 6.95535 145.387 7.68799C137.788 8.42063 146.08 11.7108 148.502 14.2684C151.696 17.0924 152.215 18.8241 151.656 21.9945C152.162 22.0078 152.708 22.101 153.333 22.3142C160.587 24.5121 152.628 29.6272 149.886 32.9041C143.67 40.2172 148.848 51.1802 157.832 48.6093C160.933 47.517 165.765 44.5864 169.225 45.6921C169.611 45.8119 169.944 45.9452 170.25 46.0784V46.0517C171.994 41.6692 178.21 40.9366 178.902 36.9137C179.594 33.9964 177.517 34.3561 176.479 32.1582L176.439 32.1715Z" fill="#00522E" />
                        <path d="M216.129 110.258C216.422 110.444 216.648 110.711 216.835 111.017C216.795 110.95 216.768 110.871 216.728 110.804C216.568 110.551 216.315 110.364 216.129 110.258Z" fill="#00522E" />
                        <path d="M211.817 122.486C212.136 122.819 212.562 123.125 213.028 123.392C212.549 123.125 212.123 122.819 211.817 122.486Z" fill="#00522E" />
                        <path d="M217.181 111.83C217.3 112.256 217.354 112.735 217.34 113.215C217.34 112.722 217.287 112.256 217.181 111.83Z" fill="#00522E" />
                        <path d="M220.535 126.895C219.217 126.242 217.9 125.616 216.608 124.964C216.435 124.884 216.222 124.791 216.01 124.697C216.222 124.791 216.435 124.87 216.608 124.964C217.9 125.616 219.231 126.242 220.535 126.895Z" fill="#00522E" />
                        <path d="M213.041 123.378C213.986 123.911 215.131 124.324 216.009 124.697C215.131 124.338 213.986 123.911 213.041 123.378Z" fill="#00522E" />
                        <path d="M215.969 117.144C215.876 117.251 215.783 117.344 215.663 117.424C215.783 117.344 215.876 117.237 215.969 117.144C216.103 116.998 216.236 116.825 216.355 116.651C216.236 116.838 216.103 116.998 215.969 117.144Z" fill="#00522E" />
                        <path d="M81.8195 136.3C81.3004 137.312 80.8612 138.031 80.4087 138.564C79.0378 140.229 77.6802 140.269 73.9135 142.507C72.1832 143.613 70.1069 145.065 69.4281 147.263C68.3899 149.461 70.1069 153.097 69.4281 154.949C68.3899 156.76 64.9426 157.493 63.2123 159.331C60.4439 161.862 61.8281 162.968 58.3809 164.074C53.8821 165.539 52.1652 161.862 48.3719 166.258C46.3088 160.051 42.1562 162.235 37.3247 161.516C37.2182 161.489 37.125 161.476 37.0186 161.449L38.0168 160.41C42.5022 155.655 40.0931 149.447 41.8101 144.346C42.8483 141.402 48.7179 139.963 43.8864 137.019C42.1562 135.567 39.055 138.125 36.2865 136.3L35.1685 135.7C35.1419 133.063 35.5145 130.678 38.0035 129.373C44.5785 125.896 54.5876 131.011 61.1893 129.626C61.3357 129.599 61.4821 129.573 61.6285 129.52C61.8148 129.48 61.9878 129.426 62.1742 129.373C62.5069 129.253 62.813 129.133 63.0926 128.987C63.239 128.907 63.3721 128.84 63.5052 128.76C63.6383 128.68 63.7714 128.587 63.8912 128.507V128.627C63.5451 135.927 68.7226 130.812 71.4911 131.171C75.5772 131.531 77.414 136.886 81.7929 136.3H81.8195Z" fill="#00522E" />
                        <path d="M157.446 82.9503C157.233 80.8457 156.94 79.0873 156.435 77.5821C152.149 77.2757 146.492 76.1834 144.349 74.9179L144.216 74.8114C140.41 76.8361 142.805 73.4526 139.145 73.1063C134.314 72.7466 131.212 78.5811 126.381 78.5811C125.436 78.5811 124.784 78.3547 124.278 78.035C122.96 83.7363 126.501 86.9599 124.278 90.6231H124.331C127.446 90.9961 129.509 93.5536 132.277 94.6459C134.686 95.3786 139.172 94.2863 139.531 98.3092C139.558 98.8153 139.491 99.2682 139.398 99.6812C141.128 100.227 142.832 100.933 144.416 101.253C150.725 102.519 150.738 100.041 155.929 101.027C155.929 100.361 155.955 99.7078 156.102 99.4015C156.794 97.9495 158.87 97.5765 159.562 96.1112C160.933 92.1017 157.832 86.9865 157.486 82.9637L157.446 82.9503Z" fill="#00522E" />
                        <path d="M287.31 9.88597C286.778 9.96589 286.073 9.96589 285.181 9.88597C280.682 9.52631 277.581 4.7708 272.749 4.41114C266.534 4.05148 264.471 8.06103 259.639 9.88597C255.833 11.3379 249.284 9.88597 245.145 9.88597C241.005 9.88597 221.666 18.2914 220.628 16.8261C219.949 15.0011 224.075 13.9088 223.397 12.0839C222.704 10.2589 218.565 9.52631 216.835 10.2589C209.581 13.1762 219.603 16.4664 214.08 20.8489C212.695 22.3142 209.581 20.4893 207.531 21.5816C204.763 23.0469 205.801 24.8718 204.417 25.9641C200.623 29.614 198.893 25.9641 194.062 25.9641C191.293 25.9641 193.023 28.8813 188.871 27.0564C188.525 27.0564 184.385 22.6739 184.385 21.9412C184.026 18.2914 190.947 20.1163 194.048 20.1163C197.149 20.1163 203.711 21.5683 204.736 17.9184C206.466 12.8032 198.188 12.0706 195.419 10.9783C187.819 8.42069 178.502 6.22277 171.595 3.67851C168.147 2.5862 166.084 0.0286218 161.586 0.747942V0.388281C151.577 0.0286212 144.323 2.94586 134.66 4.77081C126.035 6.59575 120.844 19.7433 114.296 26.3238C111.181 29.614 106.709 32.5312 102.556 34.3562C96.6867 36.9137 92.5473 35.8215 91.1764 43.1212C90.4843 46.7711 91.5092 53.3515 94.2776 55.9091C98.4303 59.932 101.878 55.5361 105.684 53.7112C111.194 50.794 112.938 52.6189 115.001 58.4534C115.693 60.2916 117.769 70.8816 118.448 71.2413C121.217 73.4259 129.842 67.2184 130.534 64.6608C131.572 62.8359 130.188 59.9187 131.226 58.0804C132.264 55.5228 135.019 55.1632 136.057 52.9652C139.158 46.7578 131.572 44.9328 133.302 38.7254C135.019 32.8776 141.235 33.6102 144.349 29.9603C147.45 26.6701 147.797 20.4626 153.32 22.2876C160.574 24.4855 152.615 29.6007 149.873 32.8776C143.657 40.1906 148.835 51.1536 157.819 48.5827C160.92 47.4904 165.752 44.5599 169.212 45.6655C175.082 47.4904 172.327 51.8729 167.495 52.6056C164.727 52.9652 159.549 50.048 157.473 52.9652C155.064 56.9881 160.241 55.8958 159.882 58.0804C158.857 61.7436 156.781 60.638 154.372 61.3706C151.616 62.1033 150.924 59.9053 148.848 63.9282C148.169 65.3935 149.207 68.3107 148.848 69.776C148.848 69.4163 144.017 74.8912 144.709 74.5182C140.21 77.0891 142.978 73.4259 139.185 73.0662C134.354 72.7066 131.252 78.5411 126.421 78.5411C122.974 78.5411 123.306 75.6238 120.897 74.8912C117.796 74.1585 116.066 76.7294 113.311 76.3565C104.686 75.9835 109.171 71.2413 109.517 66.4858C110.21 59.1727 102.969 61.3706 101.931 66.8454C101.239 70.4953 106.403 75.2508 102.969 78.5277C100.893 81.0853 93.6521 79.993 90.1915 82.9103C87.077 85.4678 84.3219 89.4774 80.8746 91.6753C79.1576 93.1273 77.0813 93.8599 75.6971 95.3252C74.3128 96.7905 73.6207 100.44 71.5577 101.173C69.1353 101.533 61.8948 93.5002 63.2657 102.279C59.8051 103.011 53.9488 101.173 52.9106 105.556C51.1936 111.403 56.7039 109.205 59.4724 110.298C64.9959 112.496 70.8523 126.376 62.2275 129.306C55.6791 131.491 44.9646 125.643 38.0568 129.306C33.9174 131.491 35.6344 136.606 35.3017 140.989C34.6095 145.744 32.5466 147.196 30.4702 150.859C37.032 153.79 29.0993 159.997 37.378 161.449C42.1962 162.182 46.3489 159.997 48.4252 166.205C52.2185 161.822 53.9488 165.472 58.4342 164.02C61.8947 162.915 60.5105 161.822 63.2657 159.278C64.9826 157.44 68.4432 156.707 69.4814 154.896C70.1735 153.057 68.4432 149.421 69.4814 147.209C70.1735 145.025 72.2365 143.573 73.9668 142.467C79.4904 139.19 79.8231 140.642 82.5916 134.795C84.6546 130.412 83.9758 130.039 89.4861 130.412C91.5624 130.412 94.3176 131.504 96.3939 130.772C97.4321 130.412 97.086 128.227 97.7648 128.227C99.4951 127.495 100.533 128.587 101.917 128.227C106.39 127.122 110.196 125.657 112.965 131.504C114.003 133.702 112.619 136.619 114.349 138.817C115.387 139.537 119.872 140.642 120.897 141.002C122.974 142.094 128.151 143.2 129.522 144.665C131.598 147.209 130.214 150.14 130.92 153.057C134.021 165.845 133.675 145.025 139.198 147.569C141.967 141.721 122.641 133.329 120.219 128.574C117.809 124.191 118.488 116.878 124.358 120.168C126.434 121.261 127.472 125.643 129.189 127.108C131.266 128.947 133.342 128.574 135.405 130.026C138.852 131.851 143.351 135.501 145.068 139.164C145.76 140.989 145.76 142.081 146.106 143.919C146.798 146.823 146.439 147.569 147.823 149.767C148.861 151.952 151.27 153.79 151.963 155.615C152.641 157.067 153.679 162.182 154.718 162.915C158.87 166.565 162.664 159.638 162.664 156.334C162.664 153.417 159.895 149.407 160.933 146.463C162.318 142.814 168.187 143.919 171.634 143.546C172.433 144.732 172.5 145.758 172.367 146.81" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M226.724 130.625C226.018 130.066 225.34 129.586 224.754 129.213C222.159 127.575 219.31 126.336 216.595 124.964C215.171 124.271 212.203 123.459 211.418 121.94C209.727 118.117 214.519 118.796 215.956 117.145C217.753 115.226 218.139 110.018 214.918 109.885" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M214.931 109.898C213.361 110.99 212.855 112.362 210.912 113.042C208.849 113.734 206.386 113.321 204.443 114.28C201.728 115.653 203.019 117.144 203.152 119.622C203.285 121.54 202.367 123.592 200.184 123.325C195.912 122.646 195.645 115.666 191.639 114.56C185.157 112.922 182.695 121.407 180.499 126.056C179.474 128.387 177.531 130.319 176.879 132.77C176.24 135.514 178.05 136.739 179.607 138.804C179.753 139.017 179.913 139.244 180.073 139.497" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M255.979 114.107C255.713 114.334 255.446 114.574 255.18 114.813C253.503 116.598 250.389 119.076 250.136 121.807C249.883 125.084 253.503 129.613 255.313 131.944C256.551 133.369 257.616 134.861 258.721 136.38" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M61.5354 60.305C60.8965 60.305 59.6054 60.0386 59.4723 59.3459C59.073 57.8274 61.0163 58.1071 61.4023 57.2945C62.8264 54.4173 56.8769 54.4173 55.4528 55.3763C51.9656 57.2945 51.3134 64.9673 52.7375 68.3907C53.9088 71.268 57.782 72.7732 59.9914 74.2918C61.1627 75.2509 63.6117 78.8209 62.4537 80.4593C61.2958 82.0978 58.7004 80.1929 57.4093 81.9645C55.9852 83.6163 55.333 87.0397 57.0233 88.4118C57.7953 89.0911 59.2328 88.4118 58.9533 90.0502C58.8202 91.2757 57.0233 91.1425 56.238 91.5555C54.561 92.1016 53.0037 93.4737 53.6559 95.8048C54.6941 99.3614 57.7953 94.9789 59.6054 94.2995C62.5735 93.074 64.9027 95.2586 67.6179 94.859C69.1752 94.7125 69.4414 93.487 70.4663 92.9408C71.5044 92.2615 72.5293 92.8076 73.5674 92.5279C76.1629 91.8485 74.7254 89.6506 76.1629 87.5992C76.8151 86.6401 78.1061 86.6401 78.2259 85.2681C78.359 83.8961 77.0679 82.6705 76.1629 81.9779C75.1247 81.152 73.8337 80.8856 72.9286 79.9265C71.7706 78.8342 71.2382 77.1824 70.3465 75.8104C68.9223 73.6258 64.9027 71.561 64.5168 68.6838C63.9844 65.2603 67.3651 66.4992 68.4033 64.3012C70.5994 59.7855 63.7448 60.4649 61.9346 60.4649" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M44.5785 71.5342C42.1162 72.6265 42.3824 75.0909 39.8002 75.5038C37.3379 75.9168 35.3947 75.6503 35.3947 79.0738C35.3947 81.1252 38.1099 82.0843 37.471 84.0024C36.8188 86.0538 33.8507 85.2413 34.3565 88.2518C35.2616 93.8731 42.1162 87.9853 44.4454 87.4259C46.5217 87.0129 48.465 87.5591 49.756 85.0947C50.7942 83.1766 49.3567 81.2584 50.0089 79.207C51.0471 76.1965 53.2432 76.0633 50.7942 72.9063C48.5981 70.1622 47.4268 70.3087 44.5785 71.5342Z" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M104.766 141.402C101.146 141.402 101.532 144.292 101.265 147.156C101.012 150.3 100.879 152.631 104.766 152.511C108.519 152.231 108.905 149.9 108.905 146.477C108.905 143.733 108.772 141.135 105.285 141.402" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M103.994 133.582C99.9875 134.142 103.355 139.75 106.589 137.845C108.905 136.326 106.722 132.77 104.26 133.462" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M126.128 156.055C123.919 156.055 118.102 154.549 118.355 158.253C118.488 160.038 119.393 160.171 120.817 160.717C122.761 161.41 122.375 161.676 123.679 163.048C128.857 169.069 131.053 155.242 126.008 155.921" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M25.5588 20.5695C23.3494 20.0233 21.1532 21.6617 18.9438 21.5285C16.2286 21.5285 13.8994 22.2079 11.3173 22.4876C7.81676 22.7541 4.06338 16.7331 0.962189 22.0747C-0.728162 25.0852 2.12016 24.1261 3.67741 25.2317C5.75375 26.737 3.81052 28.2422 4.18319 30.4268C4.96847 34.13 9.36071 32.8911 11.823 32.8911C14.1523 33.0243 15.7095 35.7684 18.0387 34.2632C19.3298 33.4506 19.9687 31.7988 21.3928 30.9729C23.0832 30.1471 24.6271 30.0139 26.3174 29.6009C28.1409 29.188 31.8943 27.5495 33.0522 25.7645C35.3814 22.0747 28.5136 18.3715 25.5455 20.4229" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M227.19 130.079C233.405 124.964 239.954 131.904 245.145 134.462C249.976 136.273 254.462 142.121 258.601 136.646" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M229.812 139.896C232.727 136.593 229.612 132.929 226.724 130.625" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M258.721 136.393C259 136.779 259.293 137.179 259.586 137.579C260.744 139.35 262.94 141.002 263.725 143.187C264.364 144.972 264.231 148.675 263.725 150.593C263.419 151.725 262.754 152.724 262.235 153.79" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M63.9045 128.614C63.5584 135.914 68.7359 130.798 71.5044 131.158C75.6437 131.518 77.4672 137.006 81.9659 136.273" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M36.2998 136.287C39.0549 138.125 42.1695 135.554 43.8864 137.019C48.7179 139.95 42.8483 141.402 41.8101 144.332C40.0931 149.448 42.5022 155.655 38.0168 160.397" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M170.224 46.0517C171.941 41.6692 178.17 40.9365 178.848 36.9137C179.54 33.9964 177.464 34.3561 176.426 32.1582C175.388 29.6006 175.388 28.1353 174.709 25.591C173.671 21.2085 172.287 17.9183 169.878 13.8954C165.046 6.22269 169.185 10.6052 171.941 4.03809" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M168.161 8.06097C167.122 5.86304 163.675 2.9458 161.266 2.9458C158.152 3.30546 158.857 4.77074 156.781 6.59569C150.911 12.0838 151.949 6.95535 145.387 7.68799C137.788 8.42063 146.08 11.7108 148.502 14.2684C152.641 17.9183 152.295 19.7433 150.924 25.2314" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M141.581 9.88574C139.158 11.3377 136.749 9.88574 134.686 10.978C132.61 12.0703 131.572 15.0009 129.855 16.4529C128.125 18.6508 125.702 19.0105 123.985 21.568C122.947 23.393 122.947 26.6832 121.576 28.8811C118.462 33.9963 113.284 33.6233 114.322 40.2037C115.36 44.5863 120.192 50.4341 112.938 53.7243" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M169.891 52.6187C169.545 57.0012 169.545 60.2914 171.275 63.9413C174.376 71.2544 177.491 65.0469 182.655 68.6968C185.077 70.1621 183.693 71.6273 185.077 73.0793C186.115 74.1716 190.601 76.3695 190.947 77.8348C192.664 82.95 186.115 80.3924 185.769 85.5076C190.601 86.6132 194.394 86.2402 197.855 88.7978C200.264 91.3554 202.686 96.4705 207.158 97.9358C211.311 99.0281 217.181 93.9129 220.615 98.6685C225.446 104.876 216.143 105.968 215.783 111.083" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M79.7832 92.4478C84.2686 93.1804 83.5898 98.2956 88.4213 99.3879C91.8552 100.12 100.147 97.2033 100.507 104.143C100.853 107.434 97.7382 108.526 96.0079 110.71C95.6619 111.443 96.354 113.641 96.0079 114.733C95.6619 115.466 92.8934 114.733 92.8934 115.826C92.8934 118.756 95.3025 119.489 96.354 122.406C96.6867 123.871 96.354 126.416 96.354 128.254" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M95.675 119.475C99.1223 119.475 99.1223 115.812 102.223 114.72C103.608 114.36 105.338 116.172 106.709 115.812C108.772 115.453 109.118 114.72 110.502 113.987C114.642 112.162 123.626 109.605 122.228 118.743" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M98.7764 107.061C102.57 109.258 115.001 105.968 114.309 111.816" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M93.5987 98.6555C93.2527 92.448 100.507 86.6002 96.3539 80.7524" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M85.6528 87.7056C87.3831 91.3554 90.1383 93.913 93.9316 92.8207" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M113.271 109.618C115.347 104.863 120.525 107.434 122.588 102.318C120.857 101.945 116.372 100.121 116.026 97.936C115.68 94.6457 120.179 94.2728 122.242 92.8208C128.111 88.0653 122.588 84.7751 124.318 77.835" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M124.318 90.6094C127.432 90.9824 129.495 93.5399 132.264 94.6322C134.673 95.3649 139.158 94.2726 139.518 98.2954C139.85 105.595 126.74 103.051 122.601 103.051" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M121.563 113.641C129.149 112.549 132.943 113.641 133.981 104.144" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M124.664 121.674C126.74 118.024 133.648 116.559 131.572 111.443" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M131.905 114.001C133.981 116.918 145.361 116.918 142.952 121.301C140.183 126.776 133.289 117.291 133.289 128.254" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M142.606 122.766C148.129 126.416 142.26 129.706 141.221 133.729" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M143.99 135.554C148.821 131.904 148.821 136.646 150.551 140.309C152.268 144.332 154.345 144.692 148.821 148.342" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M152.269 144.692C157.792 144.332 158.484 138.111 163.316 137.751C166.776 137.751 172.979 139.936 171.262 143.972" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M172.646 146.877C175.068 144.692 179.194 145.425 179.9 141.029" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M159.522 139.217C158.83 132.636 154.012 135.194 150.206 137.019" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M156.767 134.821C158.484 126.775 149.513 111.803 141.927 118.743" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M134.327 106.701C137.441 109.978 138.48 107.061 141.581 106.328C144.695 105.223 146.772 104.863 150.206 105.223C154.345 105.223 153.653 105.955 155.729 103.038C156.075 102.678 155.729 100.107 156.075 99.3748C156.767 97.9229 158.844 97.5499 159.536 96.0846C160.907 92.0751 157.805 86.9599 157.459 82.937C156.767 76.3566 155.396 73.0664 148.835 70.5088" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M144.349 74.9043C147.45 76.7425 157.805 78.1945 160.907 77.4752C164.7 76.7425 164.7 73.812 167.122 71.6274C168.853 69.4295 170.929 68.3371 173.351 66.5122" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M149.513 66.1392C154.691 65.7663 166.084 63.5817 167.801 70.5218" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M160.907 59.1992C163.329 60.3048 168.267 60.6645 170.689 59.5722" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M159.868 88.7979C162.291 87.3459 165.059 85.8807 168.147 86.2403C171.608 86.973 171.608 88.7979 174.722 90.6228C176.106 90.9958 183.693 92.4611 184.731 91.7285C187.832 89.5305 182.908 87.3459 186.701 85.521" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M149.181 117.291C149.181 116.559 154.704 104.503 155.037 104.144C155.729 103.051 160.907 107.061 161.266 107.061C163.329 107.434 167.482 107.061 169.545 106.701C173.697 105.596 181.63 101.213 183.36 109.978C184.399 116.186 174.376 116.918 183.001 120.941" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M171.262 106.688C177.81 107.793 174.017 119.835 179.886 118.743" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M156.075 127.522C160.574 128.987 162.291 127.149 166.444 126.789C170.237 126.416 175.175 129.719 179.66 127.895" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M227.19 130.079C233.405 124.964 239.954 131.904 245.145 134.461C249.976 136.273 254.462 142.121 258.601 136.646" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M255.486 113.281C253.41 108.166 247.554 107.807 245.477 103.784C243.055 99.0282 247.194 92.461 251.001 97.9359C255.486 94.6456 251.347 89.1575 258.601 88.7978C263.073 88.4382 269.981 91.3554 274.133 92.0881C276.197 92.4477 276.889 93.913 278.952 93.913C281.72 94.2727 284.475 92.0881 287.23 92.8207C290.345 93.5533 290.691 95.365 294.138 94.6456C298.624 93.913 299.662 92.461 296.214 88.7978C295.176 87.3459 292.421 89.5172 291.383 86.6132C291.729 86.9862 292.075 79.6598 292.075 80.0328C292.528 77.6484 291.649 76.6626 292.248 75.7568" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M292.128 75.9701C292.128 75.9701 278.233 47.5969 287.297 9.87256" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M249.976 137.751C252.385 143.226 245.478 138.857 245.478 142.867C245.478 144.692 250.309 145.424 251.001 147.249C251.347 148.355 251.001 150.912 251.001 152.005" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M227.19 130.079C233.405 124.964 239.954 131.904 245.145 134.461C249.976 136.273 254.462 142.121 258.601 136.646" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M230.637 139.217C239.941 135.927 240.646 147.25 247.194 151.272C248.579 152.365 251.347 153.47 252.718 153.097C254.794 152.365 254.794 149.448 255.819 149.088C261.343 147.25 257.896 152.005 262.381 153.47" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M157.393 101.346C150.645 99.5477 151.257 102.625 144.389 101.239C142.313 100.827 140.05 99.7209 137.774 99.228" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <g style="transform: translate(171px, 136px);">
                            <g style="mix-blend-mode:screen">
                                <path d="M72.8269 12.1022V12.0756L72.4542 11.6093C68.8871 6.81385 66.8241 0.659672 59.6501 3.20393L59.2242 3.35046C59.1044 3.53695 58.9846 3.71013 58.8249 3.89662C57.0148 5.80148 52.9952 6.22774 50.5329 6.9071C48.9623 7.28008 47.5648 7.0936 46.2338 6.66733C44.61 6.1345 43.0527 5.20205 41.3624 4.29624C37.995 2.37806 33.8424 0.313325 29.8361 0.739588C28.1591 0.872796 26.3356 1.28575 24.9248 2.24484C23.8866 3.0574 22.9815 4.57596 21.6905 4.98891C20.0134 5.53506 18.3364 4.57596 16.646 4.98891C15.355 5.40185 14.969 6.49415 14.0506 6.9071C11.8678 7.94612 10.417 5.5617 9.24575 3.72344L8.92629 5.02887C8.23417 9.41139 4.09484 8.69207 1.67244 10.8767L1.29977 11.2497C1.12674 12.3553 0.807304 13.5009 0.967022 14.8995C1.32639 18.1898 3.3894 19.655 4.77362 22.5723C5.79848 24.3972 6.4906 26.5818 8.56694 27.6875C9.59179 28.4201 10.9893 27.6875 12.3603 28.0604C12.3603 28.0604 15.8075 30.245 15.4614 30.245C18.2299 30.6047 18.576 29.1527 21.6771 28.7931C24.4456 28.4334 26.1626 30.618 28.931 30.618C32.7377 30.2584 38.2612 24.0509 41.3624 29.8854L41.7085 30.245C47.9242 24.0376 50.3332 29.1527 57.241 27.6875C60.3422 26.9548 62.4186 25.4895 65.5198 25.4895C68.5678 25.1299 71.2696 26.1822 73.6521 23.1184C73.692 23.0652 73.2795 22.7055 73.2795 22.7055C70.8704 19.8682 71.3628 17.0575 72.7604 12.342L72.8269 12.1022Z" fill="#514000" />
                            </g>
                            <path d="M37.2761 68.8064C39.9248 70.1784 42.64 72.0034 43.758 72.9891C47.2053 76.6523 49.9738 84.3117 52.3829 89.0672C54.4459 93.0901 57.9064 98.2052 58.9446 102.588C59.9828 108.063 57.5603 110.247 62.7379 113.91C64.8142 115.362 66.8906 115.362 68.9536 117.574C70.3379 119.026 71.376 121.596 72.4008 123.421C75.1693 127.804 77.9244 132.2 78.9626 137.675C79.3086 141.671 77.5784 146.786 82.0638 148.265C85.8571 149.357 93.4571 144.601 96.9043 143.882C103.466 142.43 110.361 143.522 114.513 137.675C117.974 133.292 119.345 130.348 123.83 126.712C127.969 123.781 132.109 120.478 135.915 116.841C138.684 114.27 145.232 106.611 145.232 102.228C145.232 95.661 135.223 94.1824 131.43 90.9055C127.637 87.2423 128.316 81.0348 122.805 85.7903C119.358 89.0672 119.691 94.542 113.488 93.0901C112.104 92.7304 107.951 89.0672 107.273 87.6153C105.542 84.698 107.951 83.2327 106.94 80.3155C105.556 77.7446 100.378 77.3849 98.3152 75.2003C95.8928 73.0024 94.8546 68.9795 93.8164 66.0623L93.1243 64.97C94.5085 58.0166 100.032 60.5875 102.787 63.8644C106.94 68.9795 106.94 72.2698 112.796 74.8407C116.949 76.6656 121.78 79.2099 126.279 78.8502C128.688 78.4905 129.713 74.8407 133.174 77.0253C135.596 78.8502 134.212 81.4078 135.596 83.2327C138.71 86.1633 144.913 84.698 148.72 85.071C149.531 85.1643 150.37 85.3241 151.209 85.5372" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M91.2346 17.7769C90.8752 18.5228 90.5824 19.2954 90.5291 20.2012C90.396 24.1708 93.1113 24.3173 95.9729 25.1299C99.0741 26.089 101.017 29.1128 104.252 30.0586C108.99 31.4573 112.371 28.5001 113.196 24.3973" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1.32644 10.877C1.16672 12.0891 0.754105 13.3413 0.940443 14.9131C1.29981 18.2034 3.36286 19.6687 4.74708 22.5859C5.77194 24.4108 6.46406 26.5954 8.5404 27.7011C9.56526 28.4337 10.9628 27.7011 12.3337 28.074C12.3337 28.074 15.7809 30.2586 15.4349 30.2586C18.2033 30.6183 18.5494 29.1663 21.6506 28.8067C24.419 28.447 26.136 30.6316 28.9045 30.6316C32.7111 30.272 38.2347 24.0645 41.3359 29.899" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M41.336 31.3506C40.2978 37.1984 42.3608 40.8483 40.2978 46.6961C38.9668 51.2784 39.5524 55.1681 35.9055 56.7532" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.05957 3.49682C10.2708 5.36173 11.7349 7.99922 14.0242 6.92024C14.9292 6.49398 15.3152 5.4017 16.6196 5.00207C18.3099 4.58913 19.987 5.54822 21.664 5.00207C22.9551 4.58913 23.8734 3.08387 24.8983 2.25798C26.3224 1.29889 28.1326 0.885962 29.8096 0.752755C33.8159 0.339812 37.9686 2.3912 41.336 4.30939C44.4372 5.96116 47.0193 7.73281 50.5198 6.92024C52.9821 6.22756 57.0016 5.81463 58.8118 3.90976" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M30.0621 35.2777C28.638 35.1312 26.575 35.2777 26.1757 37.0494C25.6699 39.7935 28.638 38.9676 30.182 39.3805C31.6194 39.7935 33.2965 41.2854 33.6825 38.4214C34.0818 36.2235 32.1252 35.9571 30.5812 35.3976" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M148.347 65.6913C146.617 62.7608 148.693 60.9358 148.001 58.0052C147.309 55.8206 144.9 53.2497 143.862 50.7055C142.824 48.1479 138.684 43.0327 138.338 40.8348C137.992 37.1716 141.785 33.8947 142.824 30.6045" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M159.062 23.3049C163.201 22.5723 164.239 26.5819 167.686 26.9415C172.158 27.3145 171.826 23.6646 174.94 21.0937C184.949 13.4343 180.797 27.3012 184.257 29.8721" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M111.758 92.3462C110.374 100.006 117.615 97.821 121.767 98.9133C127.983 100.752 130.392 107.319 124.869 112.074C121.421 115.351 112.783 113.526 113.143 119.374C113.475 124.489 120.729 124.849 120.037 130.697" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M75.0632 129.245C75.0632 116.11 90.7023 129.977 96.2259 125.581C100.019 122.678 97.2641 119.374 103.134 117.922C106.235 117.203 109.243 117.922 112.344 119.374" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M124.177 100.392C124.523 95.2768 130.046 93.8115 128.316 87.604" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M59.637 3.21717C68.9405 -0.0730538 69.6459 11.2496 76.1943 15.2724C77.5786 16.3647 80.347 17.4704 81.718 17.0974C83.7943 16.3648 83.7943 13.4475 84.8192 13.0878C90.3428 11.2496 86.8955 16.0051 91.3809 17.4704" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M72.7605 12.3418C71.0302 18.1896 70.6842 21.1068 75.5157 24.7701C80.0011 28.4333 84.8192 29.1526 82.7695 36.4523C82.0773 39.0232 79.655 39.0232 80.3604 42.6598C80.6931 44.8577 84.4998 47.775 86.2301 48.8806C88.2931 50.7055 90.3695 51.0652 91.7404 53.2498C93.4707 55.4477 91.4076 56.913 93.8167 58.7379" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M40.99 48.1349C43.7584 53.6231 44.7833 50.3328 47.2057 48.5079C50.3202 46.6696 53.0753 44.858 56.5226 43.0198C64.8146 38.6372 60.6752 33.5354 64.8146 26.209" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M41.3494 43.7653C46.1808 44.125 47.5651 36.4523 42.0282 37.5446" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M39.0867 64.4658C38.6342 65.7713 38.115 67.0367 37.5427 68.2356" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M39.2729 51.0654C41.123 55.5412 40.5374 60.2168 39.0867 64.4661" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M39.0867 64.4658C39.0867 64.4658 39.2064 64.5591 39.2729 64.599C42.7202 66.7836 47.5517 63.8531 49.282 60.9358C50.6662 58.3649 51.7043 55.461 53.0753 52.8901C55.1516 49.2536 56.1898 48.8806 54.8056 44.498" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M35.8125 56.54C37.1568 59.404 36.5312 62.601 39.0734 64.4526" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M54.4463 50.346C62.3923 49.9863 69.9789 56.9131 74.4776 63.1205C79.3091 69.7143 85.8575 68.9683 93.1114 66.7837" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M93.4706 60.5632C89.3179 59.4709 85.1786 64.5861 89.664 66.7707" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M184.031 29.6724C182.86 30.8979 182.926 32.9892 182.527 36.8123C181.489 45.9503 172.531 51.4251 168.379 59.4709C165.956 64.2131 166.316 65.6783 160.446 64.586C158.37 64.2131 156.653 62.3881 154.576 62.3881C152.5 62.3881 150.424 64.586 148.361 64.959C148.361 69.7145 155.614 71.5261 156.293 75.922C156.985 79.5719 152.154 81.0371 151.116 85.7926" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M142.731 30.8709C142.651 30.7776 142.558 30.6977 142.478 30.6045C139.363 27.3142 135.224 24.0373 130.738 21.8261C127.637 20.7338 122.806 20.3741 120.397 20.7338C116.244 21.0934 116.244 22.1991 112.797 24.7567" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M159.195 23.3047C159.221 23.7709 159.195 24.2638 159.062 24.77C158.702 25.4893 154.909 28.0602 154.23 29.1525C152.846 31.3371 155.255 32.4294 152.5 34.2677C148.187 36.7187 144.833 33.1088 142.744 30.8709" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M73.7853 22.9453C71.363 26.2222 68.6078 25.1299 65.5067 25.5029C62.3921 25.5029 60.3158 26.9548 57.2279 27.7008C50.3201 29.1661 47.911 24.0509 41.6953 30.2584" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                            <path d="M1.646 10.8766C4.06839 8.69201 8.19446 9.42465 8.89988 5.02881" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />

                        </g>


                    </svg>
                    <svg class="continent" id="m-america" width="600" height="738" viewBox="0 0 600 738" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M265.001 490.424C273.28 490.424 271.563 509.433 275.023 514.548C276.061 516 278.47 515.64 279.163 518.571C279.855 521.847 278.816 522.22 277.446 524.045C276.061 525.87 273.998 525.497 272.96 527.695C271.576 530.253 272.614 533.183 272.96 535.741C273.293 544.506 269.167 556.934 273.293 564.967C276.061 570.082 280.893 570.082 279.855 577.382C279.509 580.299 277.778 582.497 277.446 585.054C276.407 588.704 277.1 590.902 277.446 594.925C278.124 598.575 277.099 604.423 278.124 607.713C279.163 611.003 282.61 611.363 283.994 614.28C284.686 616.105 282.956 618.663 283.994 620.128C285.032 621.953 288.493 621.234 289.531 623.058C291.94 626.708 288.493 631.091 288.839 634.754C289.172 638.044 291.248 642.054 291.953 645.344C292.991 650.1 294.362 651.192 296.785 655.574C298.848 658.865 297.81 661.782 302.295 662.514C306.088 663.247 308.857 658.132 311.958 662.155C311.958 662.155 314.66 668.935 319.758 671.093L322.832 672.745C324.376 673.571 327.757 672.745 326.452 676.035C325.667 677.673 323.87 676.861 322.313 676.861C318.693 677.141 316.364 676.581 314.287 673.304C312.996 671.666 312.743 668.655 310.92 667.55C308.072 665.911 307.819 668.655 306.008 669.202C301.35 671.12 299.021 668.922 296.425 664.819C293.843 660.703 289.451 656.32 288.147 651.938C287.109 648.381 286.842 645.357 285.285 641.521C281.399 633.302 282.437 619.049 275.196 613.294C273.373 611.922 273.12 613.028 271.829 610.55C270.538 608.366 270.538 604.796 270.285 602.331C269.752 598.215 266.917 594.659 266.665 590.543C266.132 586.426 268.475 582.59 268.475 577.941C268.475 572.733 268.222 567.804 267.437 562.862C266.412 555.189 267.956 547.25 267.184 539.844C266.412 532.997 263.816 526.696 264.082 519.57L264.602 519.303V515.733C264.602 512.177 264.349 508.607 264.349 505.05C264.096 502.306 264.602 497.644 263.83 494.913" fill="#510600" />
                        <path d="M207.09 348.318C204.561 349.411 205.107 356.351 206.877 358.082C207.875 359.055 209.099 359.734 210.457 360.094C215.382 361.199 219.255 351.595 222.356 354.086L221.837 353.527C224.419 355.711 225.723 360.933 226.748 363.944C228.039 367.22 228.039 369.964 227.787 373.534C227.534 379.009 227.001 382.566 223.128 386.136C221.318 387.508 220.333 388.347 219.255 389.972C218.842 390.585 219.082 390.692 219.082 390.692C223.913 391.424 224.605 396.899 229.424 397.632C231.5 397.991 233.217 395.447 235.985 396.899C238.741 398.364 238.048 399.83 239.419 402.014C242.88 406.397 245.289 407.129 250.12 408.954C252.543 410.06 254.952 410.779 256.336 412.964C257.72 414.802 256.696 416.987 258.745 418.812L259.051 419.158C259.051 418.172 258.186 417.346 258.399 415.521C259.091 410.766 262.192 407.476 260.808 402.001C259.424 397.245 255.977 393.609 262.525 390.678C266.332 388.853 272.188 391.771 270.804 384.83C270.458 382.632 267.357 381.167 267.011 378.263C266.665 376.065 268.382 373.881 268.382 371.67C268.382 365.462 266.319 366.554 260.795 365.822C253.208 364.729 242.494 356.324 246.301 346.453C250.453 336.609 249.748 350.117 251.824 351.209C258.386 355.591 253.541 343.19 254.579 342.098L253.994 342.244C253.634 342.231 253.248 342.151 252.849 341.991C253.102 340.899 255.95 338.155 254.659 336.796C253.874 335.704 250.52 337.888 249.734 338.168C246.114 340.099 240.67 340.632 237.822 342.83C234.202 345.574 235.493 353.234 231.606 354.326C227.986 355.432 228.758 352.141 227.201 350.769C225.391 349.397 223.847 349.397 221.251 349.957V350.49C217.884 348.838 215.302 353.234 211.682 352.408C208.82 351.569 209.086 350.49 207.023 348.305" fill="#510600" />
                        <path d="M361.138 522.58C367.101 514.627 379.266 520.662 384.696 512.723C387.026 509.153 388.064 504.237 389.621 500.388C391.445 496.271 394.28 491.636 394.546 486.96C394.546 480.393 389.621 470.522 393.002 464.488C394.04 462.583 395.85 461.744 397.394 460.372C399.989 457.628 399.47 455.989 400.761 452.713C402.585 447.771 407.749 446.399 408.534 440.924C409.053 437.633 408.787 432.985 408.268 429.694C408.015 428.043 407.496 425.592 406.458 424.22C404.382 421.475 404.382 422.847 401.547 422.568C397.141 422.035 395.85 419.571 392.216 416.827C387.824 413.816 384.71 412.71 379.532 412.164C377.975 411.885 376.418 411.605 374.874 411.338C373.05 411.072 371.759 411.338 370.215 411.338C366.076 410.792 367.367 409.7 365.038 407.222C363.214 405.317 359.594 403.386 357.265 402.853C353.645 402.294 353.378 404.225 350.543 404.492C350.29 402.853 350.29 400.935 349.252 399.563L348.999 398.737C346.404 395.726 344.594 397.365 343.556 392.716C343.303 391.344 343.809 389.692 343.556 388.613C342.784 386.961 340.96 386.961 340.454 385.323C339.989 384.071 340.042 382.765 340.108 381.433L340.268 379.755C334.412 383.032 334.052 393.262 325.774 389.612C323.365 388.52 324.043 384.497 319.558 385.589C317.495 386.322 318.187 388.52 316.803 389.253C315.765 389.612 314.38 389.253 313.702 389.612C294.362 402.027 310.254 373.174 298.502 372.069L298.156 372.442C296.079 380.847 289.531 375.732 285.032 377.184C278.817 379.395 287.109 385.23 283.994 391.078C281.918 394.368 278.124 396.925 274.331 394.368C271.909 392.889 272.947 389.253 269.5 387.774C269.5 387.774 270.072 389.199 269.047 389.612C267.33 390.305 264.628 389.732 262.592 390.705C256.03 393.635 259.491 397.272 260.875 402.027C262.259 407.502 259.158 410.806 258.466 415.548C258.12 418.465 260.542 418.825 257.774 421.396C256.389 422.848 252.942 421.396 250.866 422.488C243.279 426.151 242.574 445.506 251.545 449.156C254.313 450.262 255.351 446.612 258.106 448.423C260.169 449.516 258.785 452.446 260.516 454.271C266.385 459.746 270.178 450.994 275.01 449.889C281.904 448.437 280.52 457.934 283.635 460.852C286.736 464.142 292.606 461.225 296.053 464.142C298.129 466.34 297.437 468.524 299.167 470.349C301.23 472.92 302.961 473.28 304.345 475.824C304.691 476.557 303.653 478.755 303.999 479.487C305.024 481.312 306.408 480.953 308.138 482.418C311.585 485.335 316.43 487.533 316.084 493.381C315.725 498.856 311.599 498.856 315.046 504.703C316.763 507.621 319.518 509.086 321.262 511.644C323.338 514.214 323.684 517.132 326.439 518.957C330.938 521.501 338.178 518.224 336.102 526.616C336.102 528.081 333.347 528.441 332.988 529.906C332.642 531.358 334.372 532.091 334.372 533.183C334.372 536.114 336.089 537.925 334.372 540.856C331.603 544.879 325.055 544.146 325.734 551.086C326.426 557.294 333.334 555.469 337.46 559.119C338.498 560.224 337.806 561.676 339.536 563.142C340.907 564.234 342.637 564.234 344.368 564.234C344.368 564.234 345.685 564.394 347.016 559.891C348.361 555.376 350.996 550.727 354.736 546.171C358.476 541.615 358.569 536.953 357.598 531.598C356.626 526.243 361.098 522.593 361.098 522.593L361.138 522.58Z" fill="#510600" />
                        <path d="M301.59 159.816C297.783 157.258 297.104 161.641 295.374 163.466C290.196 168.581 287.095 170.406 280.187 168.941C276.74 168.208 274.664 167.489 271.895 170.033C269.14 172.231 270.178 175.148 266.385 175.881C259.477 176.973 259.81 171.498 256.722 180.263L256.416 180.49C257.108 180.836 256.842 181.689 254.739 183.38H254.992C252.929 187.217 244.637 189.401 240.764 188.589C238.168 188.029 236.105 186.657 236.624 183.647C237.143 180.903 240.245 180.903 241.283 178.452C243.359 174.895 242.321 167.222 237.396 168.315C233.776 169.154 228.851 176.001 227.041 179.011C225.497 181.196 221.864 189.135 219.534 183.127C217.99 179.557 223.155 175.441 224.459 172.711C226.788 168.328 226.535 166.956 231.194 165.318C235.067 163.945 238.954 161.481 232.738 159.843C228.332 158.471 224.193 161.215 219.787 161.761C212.533 162.587 215.129 159.017 219.534 156.566C221.305 155.687 223.075 155.274 224.845 154.861L223.248 153.622C220.839 149.239 218.762 152.53 215.661 152.53C214.277 152.53 213.252 153.622 211.868 152.889C210.138 152.53 210.484 149.612 209.446 149.239C204.614 147.041 193.567 148.507 188.389 148.507C160.093 148.88 131.09 153.622 103.126 149.972L103.033 149.905C103.126 151.237 102.94 152.303 102.261 152.716C99.413 154.088 98.6411 145.043 97.0838 143.951C93.4635 141.766 91.3872 145.603 92.9444 148.613C94.7546 152.729 97.6029 151.89 95.5265 157.378C93.9826 160.948 91.6534 165.064 89.577 168.341C86.9949 173.004 82.8423 174.376 79.7411 178.199C76.3737 182.035 79.222 186.697 77.1589 190.8C75.8679 193.811 71.2094 194.37 70.6771 198.206C70.4242 200.671 72.7534 205.333 73.5254 208.077C74.0444 210.821 74.2973 213.552 74.2973 216.296L74.0444 215.204C74.2973 217.668 73.2725 223.143 74.8297 224.795C75.8679 225.887 78.1971 225.607 79.222 226.167C81.5512 227.818 81.2983 228.631 82.3365 230.816C82.6027 231.628 82.9088 232.401 83.2282 233.173C90.8015 223.582 100.079 239.514 107.625 241.326C114.879 242.791 123.504 227.445 129.374 241.326C131.09 244.989 127.643 251.556 133.513 252.648C138.344 253.767 138.344 244.629 143.522 246.081C151.814 248.652 141.805 263.611 154.223 265.809L155.913 265.769C156.406 262.292 156.699 259.895 159.76 257.124C162.608 254.38 166.228 252.195 169.343 250.264C174.521 246.707 177.103 248.892 182.799 249.451C185.395 249.731 189.015 250.264 191.344 248.359C192.888 246.987 192.116 245.615 194.192 244.523C196.016 243.417 204.548 243.151 206.89 244.256C208.953 245.069 209.738 247 211.535 247.533C213.359 248.093 213.864 246.441 215.941 248.372C220.599 252.475 214.131 268.913 222.928 269.472C231.22 270.005 227.853 253.021 226.802 248.905C223.687 236.85 230.688 231.375 240.79 227.259C245.183 225.341 249.854 223.143 252.689 219.04C256.057 214.111 255.271 211.367 256.31 206.159C257.601 200.404 260.196 205.067 263.816 202.043C267.437 199.032 270.032 194.104 272.88 190.534L273.133 189.988C275.982 186.697 278.577 189.162 282.197 188.336C286.589 186.964 285.046 183.141 286.856 179.291C289.185 174.642 292.552 174.908 296.705 173.536C299.087 172.644 301.124 171.272 303.347 170.126V168.235C303.001 165.677 303.693 161.295 301.63 159.843L301.59 159.816Z" fill="#510600" />
                        <path d="M135.563 53.8633C127.963 61.536 118.992 68.1165 111.392 75.4162C107.599 79.0794 103.446 81.6237 99.3067 84.5543C96.8843 86.3792 93.7831 87.8445 92.3988 90.4021C89.2977 95.1576 91.7067 91.4944 93.091 94.7846C96.5382 103.19 95.8461 98.4345 102.062 96.9692C108.97 95.5039 106.893 100.992 105.176 105.375C104.138 107.559 103.1 108.292 103.1 111.222C103.446 113.42 106.561 115.245 106.214 117.803C105.855 120.36 97.9224 124.743 95.8594 125.116" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M103.1 149.946C131.064 153.596 160.053 148.84 188.363 148.481C193.554 148.481 204.587 147.029 209.419 149.213C210.457 149.586 210.098 152.504 211.841 152.863C213.226 153.596 214.25 152.504 215.635 152.504C218.736 152.504 220.812 149.213 223.221 153.596" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M303.307 168.208C302.961 165.651 303.653 161.268 301.59 159.816C297.783 157.259 297.104 161.641 295.374 163.466C290.196 168.581 287.095 170.406 280.187 168.941C276.74 168.208 274.664 167.489 271.895 170.033C269.14 172.231 270.178 175.148 266.385 175.881C259.477 176.973 259.81 171.499 256.722 180.264" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M299.167 159.443C299.167 156.886 299.167 154.328 301.23 153.236" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M83.0952 233.254C90.6818 223.383 100.012 239.461 107.599 241.273C114.853 242.738 123.477 227.393 129.347 241.273C131.064 244.936 127.617 251.503 133.486 252.596C138.318 253.715 138.318 244.577 143.495 246.029C151.787 248.599 141.778 263.559 154.196 265.757" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M167.999 320.185C170.062 316.908 174.561 317.267 175.585 315.429C177.302 312.885 173.855 310.7 176.624 308.129C177.302 307.77 181.096 308.129 182.493 307.77C184.556 307.05 185.594 304.839 187.671 304.479" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M185.262 318.72C183.531 325.66 176.97 322.01 174.561 327.498" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M180.776 324.208C184.929 323.489 184.929 328.59 186.3 331.521" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M188.722 333.706C188.722 328.59 190.106 327.858 193.9 326.046C194.938 325.66 197.693 324.941 198.731 324.568C200.448 324.208 202.178 323.116 203.563 322.743" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M196.309 342.844C198.026 342.484 199.41 342.111 201.14 342.111" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M206.318 349.411C204.241 351.595 205.28 353.793 206.318 355.978" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M231.167 353.434C232.552 357.816 229.783 360.001 226.336 361.093" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M254.646 342.111C253.608 343.203 258.439 355.618 251.891 351.222C249.814 350.13 250.52 336.623 246.367 346.467C242.574 356.337 253.275 364.743 260.862 365.835C266.385 366.568 268.448 365.475 268.448 371.683C268.448 373.894 266.731 376.065 267.077 378.277C267.423 381.194 270.525 382.646 270.871 384.844C272.255 391.771 266.398 388.867 262.592 390.692C256.03 393.622 259.491 397.259 260.875 402.014C262.259 407.489 259.158 410.793 258.466 415.535C258.12 418.452 260.542 418.812 257.774 421.383C256.389 422.835 252.942 421.383 250.866 422.475C243.279 426.138 242.574 445.493 251.545 449.143C254.313 450.249 255.351 446.599 258.106 448.41C260.169 449.503 258.785 452.433 260.516 454.258C266.385 459.733 270.178 450.981 275.01 449.876C281.904 448.424 280.52 457.921 283.635 460.839C286.736 464.129 292.606 461.212 296.053 464.129C298.129 466.327 297.437 468.511 299.167 470.336C301.23 472.907 302.961 473.267 304.345 475.811C304.691 476.544 303.653 478.742 303.999 479.474C305.024 481.299 306.408 480.94 308.138 482.405C311.585 485.322 316.43 487.52 316.084 493.368C315.725 498.843 311.599 498.843 315.046 504.691C316.763 507.608 319.518 509.073 321.262 511.631C323.338 514.201 323.684 517.119 326.439 518.944C330.938 521.488 338.178 518.211 336.102 526.603C336.102 528.068 333.347 528.428 332.988 529.893C332.642 531.345 334.372 532.078 334.372 533.17C334.372 536.101 336.089 537.912 334.372 540.843C331.603 544.866 325.055 544.133 325.734 551.073C326.426 557.281 333.334 555.456 337.46 559.106C338.498 560.211 337.806 561.663 339.536 563.129C340.907 564.221 342.637 564.221 344.368 564.221" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M219.095 390.691C223.927 391.424 224.619 396.899 229.437 397.632C231.513 397.991 233.23 395.447 235.999 396.899C238.754 398.364 238.062 399.829 239.433 402.014C242.893 406.397 245.302 407.129 250.134 408.954C252.556 410.06 254.965 410.779 256.35 412.964C257.734 414.802 256.709 416.987 258.759 418.812" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M235.307 397.991C235.653 401.654 237.024 408.954 234.268 411.512C231.859 414.069 227.015 412.604 224.606 415.535C222.889 417.719 224.259 423.927 221.145 424.659C217.006 426.125 216.313 418.812 213.558 418.079" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M269.473 387.761C272.934 389.24 271.895 392.876 274.305 394.355C278.098 396.899 281.891 394.355 283.967 391.065C287.082 385.217 278.79 379.382 285.006 377.171C289.504 375.719 296.053 380.834 298.129 372.429C298.808 369.152 296.745 368.06 298.129 364.397C299.513 360.733 302.601 360.014 302.601 355.618" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M298.475 372.056C310.215 373.175 294.336 402.014 313.675 389.599C314.354 389.239 315.738 389.599 316.776 389.239C318.16 388.507 317.468 386.309 319.531 385.576C324.03 384.484 323.338 388.507 325.747 389.599C334.026 393.236 334.385 383.019 340.242 379.742" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M328.17 368.779C321.954 373.534 327.823 381.194 323.684 387.042" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M313.316 366.94C313.316 370.963 308.484 374.626 309.522 378.649C310.561 381.194 313.316 380.834 314.354 383.765C314.7 384.857 314.354 387.401 314.354 388.507" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M264.309 455.737C265.001 459.014 267.064 461.585 267.064 465.221C267.064 469.244 264.988 472.175 264.309 476.184C263.271 483.124 271.217 489.332 262.579 491.53" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M265.001 490.424C273.28 490.424 271.563 509.433 275.023 514.548C276.061 516 278.471 515.64 279.163 518.571C279.855 521.847 278.817 522.22 277.446 524.045C276.061 525.87 273.998 525.497 272.96 527.695C271.576 530.253 272.614 533.183 272.96 535.741C273.293 544.506 269.167 556.934 273.293 564.967C276.061 570.082 280.893 570.082 279.855 577.382C279.509 580.299 277.778 582.497 277.446 585.054C276.408 588.704 277.1 590.902 277.446 594.925C278.124 598.575 277.1 604.423 278.124 607.713C279.163 611.003 282.61 611.363 283.994 614.28C284.686 616.105 282.956 618.663 283.994 620.128C285.032 621.953 288.493 621.234 289.531 623.058C291.94 626.708 288.493 631.091 288.839 634.754C289.172 638.044 291.248 642.054 291.953 645.344C292.992 650.1 294.363 651.192 296.785 655.574C298.848 658.865 297.81 661.782 302.295 662.514C306.088 663.247 308.857 658.132 311.958 662.155" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M327.131 549.981C325.401 551.433 321.608 550.714 320.57 552.525C319.185 555.083 322.3 558.373 322.979 560.571C324.363 564.953 321.262 573.719 326.439 574.451" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M277.432 516.359C278.471 513.442 279.495 508.7 283.302 508.7C285.711 509.059 288.133 514.175 290.556 514.548C290.556 511.257 293.657 509.073 296.772 510.525C299.527 511.977 298.835 515.999 300.911 518.197C305.396 522.58 315.751 519.303 318.866 525.87C320.929 530.626 314.367 536.1 320.583 539.391C328.529 543.4 328.875 531.345 333.36 531.345" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M313.675 499.202C308.484 492.262 305.729 495.539 300.898 499.562C294.682 504.677 297.104 503.944 297.437 511.617" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M257.055 298.259C258.439 302.641 253.94 302.282 254.633 306.305" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M362.429 521.754C357.504 526.416 357.504 526.683 358.276 533.809C359.314 541.762 356.985 544.772 351.808 549.981C348.44 553.817 347.668 556.828 346.63 561.756C346.098 563.954 344.807 565.047 344.301 566.139C343.782 567.511 343.516 568.603 343.01 569.975C341.972 573.265 343.529 573.265 339.39 574.638C335.769 576.289 333.946 574.917 330.845 574.638C323.591 573.812 328.768 577.382 330.579 581.484C331.883 584.508 332.642 589.437 330.579 592.168C327.211 597.096 323.338 594.632 319.185 594.912C312.97 595.178 315.818 599.014 315.818 603.397C315.565 609.152 314.527 607.513 310.64 607.233C304.425 606.687 307.02 609.977 310.64 612.162C315.565 615.452 312.184 614.906 310.893 619.555C310.374 621.193 311.412 623.391 310.893 624.763C310.121 626.682 308.045 626.682 307.007 628.32C303.906 632.436 306.488 634.075 309.855 636.259C319.438 642.014 309.349 645.304 309.083 654.069C309.083 657.905 310.121 657.626 311.931 660.37C313.222 662.022 313.475 663.94 314.514 665.858C316.59 669.415 319.425 671.066 322.806 672.705C324.35 673.531 327.73 672.705 326.426 675.995C325.641 677.633 323.844 676.821 322.286 676.821C318.666 677.101 316.337 676.541 314.261 673.264C312.97 671.626 312.717 668.615 310.893 667.51C308.045 665.871 307.792 668.615 305.982 669.162C301.323 671.08 298.994 668.882 296.399 664.779C293.817 660.663 289.424 656.28 288.12 651.898C287.082 648.341 286.816 645.317 285.258 641.481C281.372 633.262 282.41 619.009 275.17 613.254C273.346 611.882 273.093 612.988 271.802 610.51C270.511 608.326 270.511 604.756 270.258 602.291C269.726 598.175 266.891 594.619 266.638 590.503C266.106 586.386 268.448 582.55 268.448 577.901C268.448 572.693 268.195 567.764 267.41 562.822C266.385 555.149 267.929 547.21 267.157 539.804C266.385 532.957 263.79 526.656 264.056 519.53L264.575 519.263V515.693C264.575 512.137 264.322 508.567 264.322 505.01C264.069 502.266 264.575 497.604 263.803 494.873C262.778 491.862 258.106 489.118 255.777 486.654C251.624 482.005 247.232 482.818 242.574 479.807C233.244 473.52 232.738 459.267 225.484 451.594C221.078 446.945 220.825 441.736 217.458 436.515C214.876 432.132 211.509 433.771 210.737 428.296C210.484 426.924 209.951 423.913 210.218 422.541C210.484 418.439 210.484 420.636 213.066 418.172C214.876 416.534 215.914 417.892 215.395 414.602C215.395 414.602 213.066 412.418 212.8 411.578C209.432 405.291 212.533 398.444 216.686 394.048C217.205 393.222 218.496 393.489 219.268 392.396C219.774 391.837 219.015 390.478 219.268 389.932C220.306 388.28 221.345 387.468 223.141 386.096C227.028 382.526 227.547 378.969 227.8 373.494C228.053 369.924 228.053 367.18 226.762 363.903C225.724 360.893 224.432 355.671 221.85 353.487L222.369 354.046C219.268 351.568 215.395 361.173 210.47 360.054C206.318 358.961 203.989 354.299 200.887 352.115C197.267 349.37 193.367 348.811 194.672 343.083C195.177 341.152 198.292 341.711 195.963 338.98C194.672 337.608 192.595 338.98 191.304 338.141C188.19 335.956 190.013 333.226 185.861 331.854C181.974 330.482 178.354 330.202 174.481 328.004C172.937 327.471 170.594 326.632 169.556 325.54C168.012 323.888 169.037 322.796 168.265 321.157C165.683 317.054 160.492 316.242 155.847 317.321C150.922 318.693 149.112 318.413 143.682 316.775C138.504 314.87 134.099 314.59 129.959 310.474C126.339 306.917 118.566 304.719 117.022 300.07C115.465 295.954 119.085 294.036 118.832 289.92C118.579 286.35 115.212 281.981 113.655 278.957C111.325 274.575 107.439 271.83 105.363 267.448C103.805 263.891 103.552 260.042 101.223 256.485C98.894 252.382 98.3616 250.73 98.3616 246.348C98.3616 242.232 97.8425 237.583 92.4121 238.409L91.893 238.688C88.7785 239.221 89.0447 242.525 90.0695 244.709C90.8548 246.628 92.3987 247.187 93.184 249.372C93.4369 250.744 92.9311 252.395 93.184 254.034C93.9693 257.311 96.5514 259.775 97.5896 263.065C98.3616 266.076 98.0954 269.1 99.3997 272.124C100.185 274.308 105.096 280.875 100.185 280.875C96.5647 280.609 94.4884 274.028 93.9693 271.564C93.184 268.82 93.4502 267.728 91.3739 266.089C89.5637 264.437 85.9435 264.997 85.4244 261.427C85.1582 257.87 89.0447 255.419 86.9683 250.744C86.183 248.826 84.6391 249.651 84.12 246.907C83.8538 245.535 84.892 243.337 85.1449 241.965C85.664 237.849 83.5876 234.586 82.2966 230.736C81.2584 228.551 81.5113 227.739 79.1821 226.087C78.1572 225.528 75.828 225.807 74.7898 224.715C73.2459 223.063 74.2574 217.588 74.0045 215.124L74.2574 216.216C74.2574 213.472 74.0045 210.742 73.4855 207.997C72.7002 205.253 70.3709 200.591 70.6371 198.127C71.1562 194.29 75.828 193.744 77.119 190.72C79.1821 186.604 76.3338 181.955 79.7011 178.119C82.8023 174.283 86.955 172.924 89.5371 168.262C91.6135 164.985 93.9427 160.869 95.4866 157.299C97.563 151.824 94.7014 152.65 92.9045 148.534C91.3473 145.523 93.4103 141.687 97.0439 143.871C98.6011 144.964 99.3731 154.009 102.221 152.636C104.551 151.264 101.197 142.22 100.158 140.568C98.3349 137.291 94.4618 134.547 93.9427 130.711C93.6765 126.874 96.5248 123.051 97.0439 119.215C98.0821 109.89 93.4236 100.299 85.1316 97.2888C80.9922 95.9168 76.8528 94.8245 72.7002 93.4524C68.0417 91.814 65.4463 94.0119 61.5731 96.4629C58.991 98.1147 54.3193 103.31 50.699 102.217C46.0405 100.566 52.2429 98.1014 54.3193 96.4629C57.6867 93.4524 56.9014 91.8007 52.5091 93.4524C48.1036 94.8245 45.2686 97.835 41.3688 100.579C36.9765 103.869 31.2799 104.695 26.8744 108.518C22.2159 112.355 19.3676 113.18 13.6843 114.552C11.8741 115.099 1 121.133 1 116.471C1 114.552 8.75964 110.996 10.064 110.436C12.6594 109.064 19.3809 108.518 20.9382 106.054C24.8246 100.859 15.7606 104.962 13.9505 104.682C6.96281 102.764 16.2797 99.4867 13.9505 97.5552C11.8741 95.9168 5.40556 103.043 6.96281 95.3706C8.77295 84.1412 26.6348 83.8615 34.1415 80.851C37.5089 79.479 47.092 76.4685 38.2942 75.6426C34.1415 75.3629 30.2684 76.1888 26.3819 74.5503C26.901 72.3524 31.0403 69.6083 32.8505 68.7958C34.9268 67.7035 35.965 67.144 38.5471 67.4237C40.8763 67.9699 42.1674 70.1678 43.4717 70.4342C45.2819 70.9804 52.2695 67.9699 52.2695 65.7719C52.2695 63.3076 45.2819 61.6558 47.092 58.3789C47.8773 56.7272 58.2191 56.181 60.5483 55.3684C64.9538 53.9964 69.6123 52.358 73.7516 50.7062C77.891 49.0544 81.5113 49.0544 85.9169 49.0544C90.3224 48.7747 93.9427 47.416 98.3349 46.8698L98.0821 46.5901C102.221 46.3103 104.817 47.6824 108.437 49.0544C112.829 50.4265 117.754 50.1467 122.412 50.1467C125.261 50.1467 130.957 49.0544 133.806 50.1467C136.401 51.239 134.844 52.6111 136.401 53.9831C137.692 54.809 141.326 55.3551 142.617 55.9013C147.275 57.5397 148.833 55.9013 153.744 55.3551C158.921 54.809 160.998 53.1572 165.909 51.239C169.276 50.1467 173.416 50.1467 177.036 50.4131C181.175 50.6929 181.442 53.1572 184.543 54.2495C187.657 55.3418 192.316 54.2495 195.67 54.7957C197.999 55.0754 200.595 55.6215 202.658 56.4474C207.063 57.8195 207.063 61.1097 210.43 63.2943C220 68.7691 229.583 56.7138 238.394 60.2838C240.205 61.1097 241.496 62.7481 243.04 63.2943C245.901 64.1069 246.66 62.202 249.002 61.6425C252.117 61.0964 255.484 62.4684 258.586 62.7348C261.7 62.7348 261.953 61.9223 264.535 61.3628C269.713 60.2705 271.27 62.1887 273.599 56.4341C274.624 53.9698 274.105 53.1439 276.447 51.7719C277.738 51.2257 279.029 52.318 280.321 51.2257C280.84 50.6796 280.573 49.0278 281.106 48.7614C283.169 46.5768 287.322 42.7404 288.613 47.9355C289.132 49.5872 287.322 51.2257 287.574 52.8642C288.36 55.6082 290.423 54.5026 291.98 56.7005C294.309 59.9907 292.233 64.9194 298.196 60.5369C301.816 58.0726 302.588 56.9803 306.993 56.1544C310.361 55.6082 317.349 53.4103 313.728 59.4446C312.171 61.9089 305.183 67.6635 302.335 68.4761C298.449 69.5684 294.043 66.5579 290.423 67.9299C287.322 69.0222 284.739 73.4047 281.625 75.3229C277.486 77.5208 273.612 78.067 269.713 80.5313C265.32 83.2754 262.459 85.1803 257.814 86.0061C252.889 86.832 251.332 90.3887 247.445 92.3069C245.635 93.1327 243.825 92.0271 242.268 93.3992C239.938 95.3173 240.977 97.7817 239.686 100.526L240.458 99.9796C239.938 100.805 239.686 101.352 239.419 102.178C245.382 103.55 241.496 106.56 241.496 110.943C244.344 112.035 246.407 109.024 248.483 109.024C251.332 109.304 251.065 111.768 252.889 113.407C255.205 115.592 259.877 118.882 262.991 119.694C265.839 120.254 273.08 117.789 272.042 123.264C271.27 127.38 263.763 127.38 266.611 133.947C267.902 136.692 272.827 138.61 275.409 136.971C278.524 135.04 278.777 129.565 279.296 126.288C281.372 115.059 290.423 121.626 296.652 114.779C300.272 110.663 296.386 108.199 295.347 104.642C292.752 96.9691 299.753 100.259 302.082 97.795C305.45 94.7845 301.829 88.4838 306.488 85.7397C309.083 84.088 323.045 85.46 324.336 86.5523C325.893 87.6446 329.527 93.9586 329.527 96.1432C329.261 99.1537 325.641 98.6076 329.008 101.352C330.046 101.898 332.628 101.898 333.666 101.618C338.072 101.072 341.958 95.8635 346.617 99.6999C349.199 102.164 348.161 107.093 348.161 110.929C348.161 116.95 349.199 116.684 353.338 119.961C355.934 122.159 359.82 125.995 359.82 129.552C360.073 138.876 348.946 138.05 344.035 141.34C338.338 145.177 336.781 144.085 330.831 143.259C326.173 142.992 323.325 143.805 319.172 144.897C315.299 145.989 311.412 144.617 307.792 145.723C305.716 146.549 297.956 151.478 301.057 154.208C302.348 155.314 325.92 144.617 322.286 153.116C321.248 155.86 314.261 157.232 316.843 161.894C318.666 165.185 324.616 162.441 325.907 165.731C327.717 170.393 320.982 170.393 318.653 171.206C315.285 172.031 311.918 177.786 308.032 176.148C301.563 172.857 311.399 171.765 312.437 170.393C316.577 165.731 308.537 167.649 306.993 168.462C303.12 169.554 300.272 172.031 296.652 173.404C292.499 174.776 289.132 174.496 286.802 179.158C284.992 182.994 286.55 186.831 282.144 188.203C278.524 189.015 275.928 186.551 273.08 189.855L272.827 190.401C269.979 193.971 267.383 198.899 263.763 201.91C260.143 204.92 257.547 200.258 256.256 206.026C255.218 211.234 256.003 213.978 252.636 218.907C249.788 223.01 245.129 225.195 240.737 227.126C230.635 231.242 223.647 236.717 226.748 248.759C227.787 252.875 231.154 269.859 222.875 269.326C214.077 268.767 220.546 252.329 215.888 248.226C213.811 246.295 213.305 247.946 211.482 247.387C209.672 246.854 208.9 244.923 206.837 244.11C204.508 243.004 195.963 243.271 194.139 244.376C192.063 245.469 192.848 246.841 191.291 248.213C188.962 250.118 185.341 249.585 182.746 249.305C177.049 248.746 174.467 246.561 169.29 250.118C166.175 252.049 162.555 254.234 159.707 256.978C156.086 260.268 156.339 262.999 155.554 267.674C154.782 272.057 151.681 275.067 150.643 279.184C149.352 284.672 152.2 287.669 153.504 292.611C154.795 296.993 153.504 301.109 157.897 303.84C160.758 305.212 166.441 306.584 169.303 305.492C172.138 304.653 176.557 302.468 178.101 299.458C179.911 295.888 178.607 292.051 182.759 289.867C184.569 288.774 192.342 287.402 193.633 289.867C194.925 292.051 191.304 297.526 190.519 299.737C189.481 303.294 182.759 313.431 184.556 316.988C186.38 320.558 192.848 316.988 195.177 316.708C197.254 316.162 199.836 316.162 201.646 316.988C204.761 318.36 203.722 318.64 204.76 321.091C206.571 326.312 205.532 328.217 203.722 333.159C202.431 336.436 201.14 340.819 202.937 344.122C203.975 345.774 206.052 346.866 207.09 348.225C209.153 350.409 208.9 351.502 211.748 352.328C215.368 353.14 217.964 348.758 221.318 350.41V349.877C223.913 349.317 225.457 349.317 227.267 350.689C228.825 352.061 228.053 355.352 231.673 354.246C235.559 353.154 234.255 345.494 237.889 342.75C240.737 340.552 246.181 340.006 249.801 338.088C250.586 337.808 253.94 335.623 254.726 336.716C256.017 338.088 253.182 340.819 252.916 341.911C256.536 343.283 258.346 338.634 261.98 339.167C264.056 339.726 266.119 341.911 267.942 342.737C269.753 343.549 271.829 343.829 273.905 344.389C278.564 345.761 281.665 345.761 285.817 344.389C290.729 343.017 290.729 344.389 294.362 347.945C296.692 350.13 299.021 353.14 301.616 354.792C305.237 356.99 306.261 358.362 308.87 362.198C314.553 370.963 323.884 364.663 332.162 369.858C334.492 371.23 338.112 373.961 339.416 376.452C340.96 379.449 339.416 382.459 340.454 385.203C340.974 386.855 342.784 386.855 343.556 388.494C343.809 389.586 343.303 391.238 343.556 392.596C344.594 397.259 346.404 395.62 348.999 398.617L349.252 399.443C350.29 400.815 350.29 402.733 350.543 404.372C353.378 404.105 353.644 402.187 357.265 402.733C359.594 403.28 363.214 405.198 365.038 407.103C367.367 409.58 366.076 410.673 370.215 411.219C371.759 411.219 373.064 410.952 374.874 411.219C376.418 411.485 377.975 411.765 379.532 412.045C384.71 412.591 387.824 413.696 392.216 416.707C395.837 419.451 397.141 421.915 401.547 422.448C404.395 422.728 404.395 421.356 406.458 424.1C407.496 425.472 408.002 427.936 408.268 429.575C408.801 432.878 409.053 437.527 408.534 440.804C407.749 446.279 402.572 447.651 400.761 452.593C399.47 455.87 399.989 457.522 397.394 460.252C395.837 461.624 394.04 462.45 393.002 464.368C389.634 470.403 394.546 480.273 394.546 486.841C394.293 491.503 391.444 496.152 389.621 500.268C388.077 504.118 387.026 509.033 384.696 512.603C379.266 520.555 367.101 514.521 361.138 522.46" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M460.536 4.17673C455.345 4.72288 450.687 5.81518 445.509 5.81518C438.788 5.54877 433.597 5.00262 427.647 7.18722C423.255 8.55925 419.102 7.73337 414.71 8.55925C409.533 9.38514 406.684 12.9418 402.545 15.1397C397.62 17.604 373.556 14.3138 375.353 23.3586C377.682 35.6936 401.76 21.4404 405.912 29.939C407.203 32.9495 404.608 39.2502 405.127 42.8202C405.646 45.8307 403.836 44.7384 406.418 46.3768C408.228 47.4691 411.076 45.5643 412.381 48.295C413.419 51.3055 411.09 49.6671 410.052 50.7594C408.228 52.3978 408.761 51.3055 407.469 54.0496C406.431 56.2475 407.722 56.5139 405.646 58.4321C404.355 59.8041 401.773 60.0705 400.469 61.9887C395.038 68.5559 398.925 81.7168 402.292 88.2972C404.608 92.6797 407.203 91.0413 411.596 92.9461C413.672 93.772 413.925 96.2364 417.292 95.4105C419.621 94.851 420.912 92.4 422.217 90.2021C423.002 88.2839 423.255 86.6454 425.065 85.2601C426.889 83.888 428.685 84.4475 430.509 82.516C433.357 79.2258 433.091 74.5768 437.497 72.0992C441.636 69.6348 445.003 71.8328 449.396 71.8328C453.282 71.553 456.13 67.9964 459.498 66.3579C462.599 64.7062 464.675 61.6957 467.776 60.0439C470.891 58.4055 474.511 60.5901 478.131 59.7775C481.499 59.2313 485.385 57.3132 489.006 56.2209C491.588 55.395 494.183 54.8488 495.221 51.8383C494.183 51.2922 490.044 50.4663 489.791 49.6537C488.753 47.4558 491.082 46.3635 492.639 46.3635C495.221 46.3635 498.336 52.944 500.399 48.8278C502.728 44.4453 494.183 42.2474 497.045 39.2369C498.855 37.5985 504.552 38.9705 507.134 37.3187C508.944 36.2264 510.501 33.7621 511.792 31.8439C513.083 29.646 512.83 27.1816 513.855 25.5432C514.64 24.1712 517.223 23.9047 517.742 22.5327C518.766 20.3481 516.703 19.2425 517.475 17.3243C519.805 12.1159 538.452 12.662 538.971 8.27952C539.224 2.80469 524.476 6.0816 521.881 6.0816C515.932 5.80186 512.564 1.69907 506.601 1.15292C497.032 0.606772 487.182 1.69907 477.879 1.69907C471.663 1.69907 466.752 2.24522 461.042 3.88367" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M396.848 3.91045C389.861 4.73634 384.43 7.46709 377.176 6.10837C370.189 5.01607 363.72 3.09789 356.719 5.01607C352.846 6.10837 346.098 4.73634 343.01 6.38811C336.022 10.2245 346.63 9.67833 347.921 10.7706C353.352 15.1532 341.706 19.5357 338.604 19.8154C333.68 20.3616 329.274 19.549 326.439 23.9182C325.401 25.2902 326.692 26.3825 325.401 27.4882C323.844 28.8602 320.476 27.7679 318.932 27.2084C315.818 26.1161 313.236 23.0923 310.64 27.4882C308.058 32.1504 312.184 32.6966 315.299 33.2427C320.21 34.0686 322.553 35.9868 327.464 35.1609C330.312 34.6148 337.3 35.1609 339.123 32.1504C342.478 27.2217 335.237 28.5938 332.642 28.0343C333.161 21.7336 345.06 25.8497 348.959 24.7441C352.846 23.6518 356.466 20.3616 360.339 18.7098C368.099 15.4196 375.872 15.4196 383.898 13.7811C387.518 12.9552 390.885 11.037 394.772 10.2245C398.139 9.41192 402.026 10.2245 405.393 8.85245C409.799 7.21399 409.533 4.46992 404.874 3.37762C402.292 2.83147 399.178 3.65736 396.848 3.65736" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M343.263 43.9124C340.415 43.9124 336.528 44.725 333.946 43.9124C331.617 43.3663 330.845 41.4481 329.035 40.3558C325.414 38.1579 323.072 39.2502 319.452 41.4481C318.413 42.274 316.097 44.7383 314.54 44.4586C311.692 43.6327 314.54 42.2607 314.287 40.6222C313.502 38.4376 314.806 38.4376 311.958 37.8781C309.629 37.332 307.819 38.9838 306.261 40.3425C303.946 41.9809 299.793 45.5509 299.793 48.8278C300.046 54.8621 307.819 51.8383 311.452 51.2921C317.136 50.4662 325.428 49.3739 330.339 53.2103C333.201 55.4082 336.821 58.6851 335.783 62.8013C335.25 64.7194 331.63 71.2999 330.086 72.1258C325.947 74.044 319.731 69.6614 315.845 71.8594C310.161 75.1496 319.212 76.5083 321.807 76.5083C327.757 76.788 329.58 77.6139 332.429 82.809C333.72 85.5531 333.214 86.6454 336.834 87.7377C337.859 88.0174 340.974 88.5636 341.759 87.7377C344.607 85.2733 337.1 78.1467 344.341 79.5188C347.442 79.7985 349.771 84.7272 353.392 81.1706C358.835 76.2419 348.999 73.4978 349.771 69.395C350.81 64.1866 358.316 68.5691 359.874 70.2209C362.203 72.4055 362.203 74.337 366.089 71.5929C368.152 70.2209 370.748 66.3979 370.229 63.374C369.19 59.2579 365.823 60.0838 362.975 59.2579C353.658 57.06 364.519 51.5852 358.05 46.097C355.974 44.4586 344.847 41.4481 343.556 43.9124" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M331.883 9.11851C329.287 9.66466 327.983 11.3031 325.92 12.129C324.097 12.9416 320.995 11.8493 319.704 12.6751C312.184 16.7913 324.35 18.1633 327.211 17.6171C329.54 17.3374 339.895 18.1633 340.92 15.9787C342.211 13.5144 334.185 7.21364 332.122 9.13183" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M292.259 71.3135C289.411 71.3135 289.677 72.9652 288.373 74.324C288.12 74.8701 285.006 78.4401 285.006 78.7065C283.462 84.461 289.664 80.3449 291.993 80.0785C294.842 79.7988 301.044 83.6352 300.285 77.3344C299.753 74.324 295.361 69.1156 292.512 71.0337" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M267.929 27.7411C263.79 26.6355 262.751 29.3796 259.384 30.4852C254.459 31.8572 255.231 28.0208 252.396 26.1026C247.472 22.8124 230.648 30.4852 239.193 33.4957C243.346 34.8677 248.776 32.4034 253.435 33.2292C256.802 34.0551 258.612 35.1474 262.232 34.3215C263.79 34.0418 270.524 33.4957 271.549 32.4034C274.398 29.3929 269.726 27.7544 267.397 27.7544" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M293.045 25.2768C288.639 25.2768 288.639 25.5565 285.272 27.7411C282.423 29.3795 279.056 30.2054 283.728 32.1236C285.538 32.6698 290.716 32.39 292.273 31.5775C291.488 32.1236 294.602 27.1949 294.349 28.0075C294.602 26.0893 294.602 24.7173 292.02 24.7173" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M281.652 36.2396C275.689 34.055 274.93 37.8781 270.777 39.8096C268.714 40.6221 266.891 38.9837 266.119 41.9942C265.6 44.4585 267.676 45.0047 269.233 46.097C273.892 49.6669 273.892 46.6431 278.284 43.9124C279.841 43.0865 281.651 43.6326 282.943 42.2606C284.5 40.6221 284.766 37.6117 282.423 36.7858" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M297.956 15.4196C296.665 15.4196 291.221 14.3139 290.436 15.1398C288.373 16.7783 291.74 20.6147 293.298 21.1608C294.842 21.9867 298.728 21.4405 300.019 20.0685C301.842 18.1503 301.842 15.1398 298.728 15.1398" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M300.019 35.6934C295.108 35.6934 294.336 35.6934 290.968 38.7038C289.424 39.7961 284.753 42.5402 289.145 44.192C289.93 44.4717 297.69 41.9941 298.728 41.4479C300.804 40.3556 303.387 36.5059 299.513 35.6934" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M338.857 36.5064C334.199 37.8784 337.313 42.5407 340.934 40.8889C344.554 39.5169 343.782 35.4141 339.643 36.2266" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M309.349 17.6038C303.653 17.8702 308.058 24.1842 311.931 21.7199C315.552 19.5353 313.223 16.2451 309.855 17.3374" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M303.4 24.1845C302.109 26.1027 302.615 29.939 305.476 28.0208C308.577 26.3824 305.729 22.8124 302.894 24.4642" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M297.956 29.6594C295.108 31.8573 298.475 34.0419 300.285 32.6699C302.095 31.2979 300.791 28.5538 298.728 29.1133" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M268.448 18.43C263.79 17.8838 259.903 21.4405 265.6 23.0922C269.486 24.1845 274.651 19.2559 269.22 18.7097" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M278.284 24.7307C277.512 25.5566 276.993 26.1028 276.993 27.4748C279.588 28.5671 282.69 24.7307 279.069 24.1846" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M235.054 23.0922C229.61 22.8125 224.18 27.4747 231.686 27.2083C232.977 27.2083 236.092 27.2083 237.13 26.3824C239.193 24.744 238.434 21.7202 235.32 22.8258" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M256.802 39.5302C253.687 38.4379 252.649 39.2505 250.32 40.6225C246.7 43.0868 248.776 42.8204 244.371 41.9945C241.775 41.4484 239.193 41.9945 236.345 41.4484C234.268 40.9022 232.724 39.2504 230.648 38.7043C227.281 38.1581 225.471 41.1686 222.636 42.2609C220.306 43.0868 217.192 41.9812 214.863 43.0868C211.761 44.4589 211.495 45.8309 214.344 48.5616C216.673 50.4798 220.559 49.3875 223.394 52.398C221.85 53.2106 204.76 49.9337 212.52 56.2344C214.596 57.8862 221.065 59.2449 223.647 58.6987C228.053 57.3267 229.61 52.9442 235.054 53.4903C238.927 54.0365 241.522 57.047 245.395 57.047C247.472 57.047 255.764 55.6749 256.536 54.849C260.675 51.0127 254.979 50.1868 254.726 47.7224C254.473 44.4322 261.46 43.6063 257.574 39.5035" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M265.6 52.9573C261.194 53.5035 260.169 58.4455 265.347 58.4455C270.005 58.4455 272.068 51.865 266.385 52.9573" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M219.774 32.1236C214.597 31.5775 213.558 31.8439 209.685 34.588C205.546 37.332 200.621 35.6936 196.735 38.4243C191.304 41.981 195.444 45.5509 200.621 44.725C203.989 44.1789 207.356 41.7146 210.723 41.1684C215.901 40.3425 220.306 39.2502 225.218 37.8782C228.066 37.0656 233.23 36.7859 228.585 33.4957C225.737 31.8572 222.636 33.7754 220.04 32.1236" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M245.143 294.356C238.421 288.601 230.901 282.287 222.103 280.915C218.483 280.382 213.558 280.382 210.191 281.474C206.052 282.847 204.241 286.137 209.938 286.39C214.863 286.67 216.407 285.857 221.331 288.042C227.028 290.253 228.572 290.253 231.686 295.168C234.268 298.991 235.307 297.366 239.446 297.633C241.003 297.633 248.257 300.656 246.181 295.728C246.181 295.168 245.396 294.622 245.143 294.356Z" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M258.346 298.459C256.536 298.179 253.435 297.087 251.877 298.459C250.839 299.551 251.611 301.203 250.839 302.295C249.801 303.387 248.244 303.108 247.472 303.947C242.813 308.862 254.726 307.503 258.093 307.503C260.675 307.503 271.296 306.411 269.473 301.482C268.182 297.912 260.422 299.831 258.093 298.459" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M355.175 139.809C352.327 140.901 351.555 143.911 349.731 146.096C347.402 148.84 343.782 150.479 340.934 152.676C331.098 160.895 350.77 156.233 354.137 157.605C356.985 158.431 358.01 161.988 361.125 161.441C366.049 160.349 362.935 158.165 362.416 155.967C361.883 154.062 361.378 154.874 361.63 152.69C361.63 151.318 363.96 150.772 363.454 148.853C362.669 144.471 359.048 147.481 356.972 148.587C354.909 146.109 361.378 140.914 356.2 139.822" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M243.346 154.328C245.156 156.246 242.827 158.444 244.118 160.629C245.409 163.373 248.776 163.373 251.105 163.653C254.22 163.919 256.283 163.093 257.068 166.663C258.106 171.592 254.739 170.5 252.41 171.592C250.866 172.418 242.321 180.09 246.447 182.009C246.447 182.009 262.246 177.346 254.739 183.381H254.992C252.929 187.217 244.637 189.402 240.764 188.589C238.168 188.03 236.105 186.658 236.624 183.647C237.143 180.903 240.245 180.903 241.283 178.452C243.359 174.895 242.321 167.223 237.396 168.315C233.776 169.154 228.851 176.001 227.041 179.011C225.497 181.196 221.864 189.135 219.534 183.128C217.991 179.558 223.155 175.441 224.459 172.711C226.788 168.328 226.535 166.956 231.194 165.318C235.067 163.946 238.954 161.481 232.738 159.843C228.332 158.471 224.193 161.215 219.787 161.761C212.533 162.587 215.129 159.017 219.534 156.566C223.421 154.648 227.294 154.914 231.194 152.73C235.333 150.532 239.739 148.614 242.84 154.102" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg class="continent" id="m-full" width="1245" height="678" viewBox="0 0 1245 678" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M658.147 134.24C661.608 134.973 661.608 136.798 664.722 138.623C666.107 138.996 673.693 140.461 674.731 139.729C677.753 137.584 673.174 135.453 676.448 133.654C676.222 133.614 675.996 133.561 675.769 133.508C676.116 128.393 682.664 130.95 680.947 125.835C680.614 124.37 676.116 122.172 675.077 121.08C673.693 119.628 675.077 118.162 672.655 116.697C668.436 113.726 665.587 117.296 663.005 114.766C660.743 116.444 658.773 117.536 657.122 119.628C654.713 121.812 654.713 124.743 650.907 125.475C649.962 125.702 648.325 125.715 646.435 125.582C646.94 127.101 647.233 128.859 647.446 130.95C647.619 132.882 648.418 135.08 649.057 137.278L649.855 136.798C652.278 135.346 655.046 133.881 658.134 134.24H658.147Z" fill="#00522E" />
                        <path d="M597.627 156.033C597.747 156.033 597.88 156.033 598 156.047C597.88 156.047 597.76 156.047 597.627 156.033Z" fill="#00522E" />
                        <path d="M589.482 155.367C589.695 155.447 589.934 155.514 590.174 155.567C589.921 155.514 589.695 155.447 589.482 155.367Z" fill="#00522E" />
                        <path d="M590.174 155.567C592.024 155.993 594.646 155.94 597.148 156.02C594.659 155.94 592.037 155.993 590.174 155.567Z" fill="#00522E" />
                        <path d="M600.569 156.3C600.569 156.3 600.648 156.3 600.675 156.313C600.635 156.313 600.595 156.313 600.569 156.3Z" fill="#00522E" />
                        <path d="M598.599 156.086C598.679 156.086 598.772 156.086 598.852 156.1C598.772 156.1 598.692 156.1 598.599 156.086Z" fill="#00522E" />
                        <path d="M601.394 156.459C601.394 156.459 601.513 156.486 601.566 156.499C601.513 156.486 601.447 156.473 601.394 156.459Z" fill="#00522E" />
                        <path d="M599.637 156.166C599.717 156.166 599.797 156.18 599.877 156.193C599.797 156.193 599.717 156.18 599.637 156.166Z" fill="#00522E" />
                        <path d="M602.832 156.979C602.832 156.979 602.924 157.032 602.964 157.045C602.924 157.019 602.885 156.992 602.832 156.979Z" fill="#00522E" />
                        <path d="M599.464 114.526C600.156 107.213 592.916 109.411 591.877 114.885C591.518 116.764 592.716 118.935 593.488 121.053C594.952 120.374 596.922 119.494 598.413 119.015C598.812 117.616 599.358 116.071 599.464 114.526Z" fill="#00522E" />
                        <path d="M659.957 107.812C659.585 105.601 659.665 103.323 659.878 100.632L659.824 99.9263C659.132 100.259 658.32 100.512 657.455 100.646C654.687 101.005 649.509 98.088 647.433 101.005C645.024 105.028 650.201 103.936 649.842 106.12C649.762 106.427 649.656 106.693 649.562 106.933L650.893 107.213C653.103 108.212 657.375 108.598 659.957 107.825V107.812Z" fill="#00522E" />
                        <path d="M551.535 108.305C550.896 108.305 549.605 108.039 549.472 107.346C549.073 105.827 551.016 106.107 551.402 105.295C552.826 102.417 546.877 102.417 545.453 103.376C541.966 105.295 541.313 112.967 542.738 116.391C543.909 119.268 547.782 120.773 549.991 122.292C551.163 123.251 553.612 126.821 552.454 128.459C551.296 130.098 548.7 128.193 547.409 129.965C545.985 131.616 545.333 135.04 547.023 136.412C547.795 137.091 549.233 136.412 548.953 138.05C548.82 139.276 547.023 139.143 546.238 139.555C544.561 140.102 543.004 141.474 543.656 143.805C544.694 147.361 547.795 142.979 549.605 142.3C552.574 141.074 554.903 143.259 557.618 142.859C559.175 142.712 559.441 141.487 560.466 140.941C561.504 140.261 562.529 140.808 563.567 140.528C566.163 139.849 564.725 137.651 566.163 135.599C566.815 134.64 568.106 134.64 568.226 133.268C568.359 131.896 567.068 130.671 566.163 129.978C565.125 129.152 563.834 128.886 562.929 127.926C561.771 126.834 561.238 125.182 560.346 123.81C558.922 121.626 554.903 119.561 554.517 116.684C553.984 113.26 557.365 114.499 558.403 112.301C560.599 107.786 553.745 108.465 551.935 108.465" fill="#00522E" />
                        <path d="M531.823 192.332C532.862 189.402 538.731 187.95 533.9 185.019C532.169 183.567 529.068 186.125 526.313 184.286L525.195 183.7C525.208 185.445 525.395 187.31 525.262 189.055C524.57 193.811 522.507 195.263 520.43 198.926C526.899 201.817 519.272 207.904 527.032 209.463L528.03 208.424C532.516 203.668 530.106 197.474 531.823 192.359V192.332Z" fill="#00522E" />
                        <path d="M525.714 179.904C525.794 179.717 525.874 179.531 525.967 179.344C525.874 179.531 525.781 179.717 525.714 179.904Z" fill="#00522E" />
                        <path d="M527.231 177.866C527.471 177.693 527.724 177.519 528.003 177.36C527.711 177.506 527.458 177.679 527.231 177.866Z" fill="#00522E" />
                        <path d="M527.032 178.039C526.885 178.172 526.739 178.305 526.606 178.452C526.739 178.305 526.872 178.172 527.032 178.039Z" fill="#00522E" />
                        <path d="M525.275 181.742C525.341 181.156 525.461 180.597 525.648 180.064C525.461 180.583 525.341 181.143 525.275 181.742Z" fill="#00522E" />
                        <path d="M565.724 189.495C565.511 189.601 565.298 189.721 565.072 189.855C565.298 189.735 565.524 189.601 565.724 189.495Z" fill="#00522E" />
                        <path d="M565.857 189.428C568.918 187.83 569.85 187.816 571.434 185.019C569.85 187.816 568.918 187.816 565.857 189.428Z" fill="#00522E" />
                        <path d="M553.159 176.947C553.159 176.947 553.106 176.973 553.079 176.987C553.106 176.973 553.133 176.96 553.159 176.947Z" fill="#00522E" />
                        <path d="M595.285 189.402H594.766C591.145 189.402 591.531 192.292 591.265 195.156C591.012 198.3 590.879 200.631 594.766 200.511C598.519 200.231 598.905 197.9 598.905 194.477C598.905 191.733 598.772 189.135 595.285 189.402Z" fill="#00522E" />
                        <path d="M616.008 203.935L616.141 204.068C613.932 204.068 608.115 202.563 608.368 206.266C608.501 208.051 609.407 208.184 610.831 208.73C612.774 209.423 612.388 209.689 613.692 211.061C618.87 217.082 621.066 203.255 616.022 203.935H616.008Z" fill="#00522E" />
                        <path d="M629.145 195.622C623.635 193.065 623.967 213.885 620.88 201.097C620.187 198.18 621.558 195.263 619.482 192.705C618.098 191.24 612.934 190.134 610.844 189.042C609.819 188.682 605.334 187.59 604.296 186.857C602.565 184.659 603.963 181.742 602.925 179.544C600.156 173.71 596.363 175.162 591.877 176.267C591.052 176.481 590.36 176.187 589.562 176.068C589.109 176.001 588.617 175.974 588.058 176.148C587.951 176.187 587.845 176.227 587.725 176.267C587.046 176.267 587.379 178.452 586.354 178.812C586.327 178.812 586.301 178.838 586.274 178.838L586.354 176.254C586.354 174.416 586.7 171.872 586.354 170.406C585.915 169.141 585.196 168.288 584.544 167.489H585.675C588.417 167.489 588.976 165.171 590.666 163.666C591.092 163.28 591.598 162.947 592.237 162.734C593.621 162.374 595.351 164.186 596.722 163.813C598.785 163.453 599.145 162.734 600.529 162.001C604.668 160.189 613.652 157.618 612.255 166.756L612.055 167.436C608.315 167.063 608.115 172.884 610.178 176.627C612.588 181.383 631.927 189.775 629.145 195.622Z" fill="#00522E" />
                        <path d="M583.945 140.821L585.129 140.461C586.86 136.492 589.109 132.629 586.354 128.766C584.065 129.139 581.709 129.645 580.138 130.964C578.568 132.256 577.09 133.907 575.56 135.519L575.653 135.706C577.383 139.356 580.138 141.913 583.931 140.821H583.945Z" fill="#00522E" />
                        <path d="M585.129 140.461C585.129 140.461 585.076 140.581 585.05 140.648C584.97 140.821 584.903 141.007 584.837 141.167C584.557 141.847 584.304 142.513 584.091 143.205C584.065 143.245 584.051 143.285 584.051 143.325C583.971 143.552 583.918 143.791 583.852 144.031C583.852 144.031 583.852 144.031 583.852 144.058C583.812 144.258 583.759 144.458 583.732 144.657C583.692 144.804 583.679 144.964 583.665 145.11C583.639 145.257 583.625 145.39 583.625 145.55C583.599 145.75 583.585 145.963 583.585 146.163C583.585 146.322 583.585 146.496 583.585 146.655L583.705 147.375C581.709 147.415 579.726 147.654 578.408 147.375C573.603 146.282 574.255 141.221 569.836 140.461C570.169 140.235 570.489 139.995 570.808 139.729C571.274 139.422 571.726 139.089 572.179 138.73C573.364 137.784 574.468 136.665 575.56 135.506L575.653 135.692C577.383 139.342 580.138 141.9 583.932 140.808L585.129 140.448V140.461Z" fill="#00522E" />
                        <path d="M606.026 145.936C606.385 148.121 610.857 149.959 612.588 150.319C610.604 155.194 605.8 153.089 603.564 157.006L603.444 157.392C601.341 155.607 595.897 156.18 591.984 155.833C591.026 155.753 590.147 155.62 589.455 155.367C590.174 154.515 590.64 153.516 590.507 152.13C590.28 147.828 587.006 147.321 583.705 147.375L583.585 146.655C583.585 146.496 583.585 146.322 583.585 146.163C583.585 145.963 583.585 145.75 583.625 145.55C583.625 145.403 583.652 145.27 583.665 145.11C583.665 144.964 583.705 144.804 583.732 144.657C583.758 144.458 583.798 144.244 583.852 144.058C583.852 144.058 583.852 144.058 583.852 144.031C583.905 143.791 583.971 143.552 584.051 143.325C584.051 143.285 584.051 143.245 584.091 143.205C584.291 142.526 584.544 141.847 584.837 141.167C584.903 140.994 584.97 140.808 585.05 140.648C585.076 140.581 585.103 140.528 585.129 140.461C586.274 137.837 587.645 135.266 587.645 132.695C587.645 132.362 587.618 132.043 587.578 131.71C587.538 131.377 587.459 131.057 587.352 130.724C587.246 130.391 587.126 130.071 586.953 129.738C586.793 129.405 586.593 129.085 586.354 128.752C589.109 128.273 591.784 127.98 592.902 126.568C594.566 124.983 594.22 123.038 593.488 121.053C594.952 120.374 596.922 119.494 598.413 119.015C597.587 121.905 597.454 124.13 603.271 124.383C606.026 124.743 607.756 122.172 610.857 122.918C612.614 123.437 612.92 125.129 614.278 126.022C612.707 132.815 618.058 136.105 612.242 140.808C610.179 142.273 605.693 142.633 606.026 145.923V145.936Z" fill="#00522E" />
                        <path d="M639.513 114.139L638.635 114.392C638.755 115.645 639.008 116.963 638.808 117.803C638.808 117.723 638.555 117.949 638.169 118.335L638.808 118.522C643.28 120.267 645.343 122.345 646.421 125.569C648.311 125.702 649.935 125.688 650.893 125.462C654.687 124.729 654.687 121.799 657.109 119.614C657.349 119.308 657.588 119.041 657.841 118.775L657.801 118.509C656.084 111.568 644.678 113.753 639.513 114.126V114.139Z" fill="#00522E" />
                        <path d="M663.005 114.765C662.42 114.193 661.847 113.3 661.275 111.955C660.609 110.556 660.197 109.197 659.971 107.812C657.402 108.585 653.116 108.198 650.907 107.199L649.576 106.92C648.484 109.584 646.554 108.731 644.345 109.397C641.59 110.13 640.898 107.932 638.821 111.955C638.528 112.581 638.555 113.473 638.648 114.392L639.527 114.139C644.704 113.766 656.097 111.582 657.814 118.522L657.854 118.788C659.345 117.216 661.062 116.191 663.005 114.765Z" fill="#00522E" />
                        <path d="M586.354 170.406C585.316 167.489 582.893 166.756 582.893 163.826C582.893 162.733 585.662 163.466 586.008 162.733C586.354 161.641 585.662 159.443 586.008 158.711C587.725 156.526 590.839 155.434 590.507 152.143C590.147 145.203 581.869 148.121 578.421 147.388C573.603 146.296 574.269 141.22 569.836 140.461C568.359 141.474 566.762 142.18 565.644 143.378C564.26 144.844 563.567 148.494 561.504 149.226C559.082 149.586 551.841 141.553 553.212 150.332C549.752 151.064 543.895 149.226 542.857 153.609C541.14 159.457 546.651 157.259 549.419 158.351C554.517 160.389 559.894 172.364 553.905 176.494V176.614C553.558 183.913 558.736 178.798 561.504 179.158C565.591 179.518 567.427 184.873 571.82 184.286C572.046 183.86 572.285 183.381 572.538 182.834C574.601 178.452 573.923 178.079 579.433 178.452C581.483 178.452 584.198 179.518 586.274 178.838L586.354 176.267C586.354 174.429 586.687 171.885 586.354 170.42V170.406Z" fill="#00522E" />
                        <path d="M666.439 80.1715C665.401 77.6139 665.401 76.1486 664.722 73.6044C663.684 69.2219 662.3 65.9316 659.891 61.9088C657.229 57.6861 657.295 57.1133 658.347 56.354L658.161 56.061C657.122 53.863 653.675 50.9458 651.266 50.9458C648.152 51.3055 648.857 52.7707 646.781 54.5957C640.911 60.0838 641.949 54.9553 635.387 55.688C627.788 56.4206 636.08 59.7108 638.502 62.2684C641.696 65.0924 642.215 66.8241 641.656 69.9945C642.162 70.0078 642.708 70.101 643.333 70.3142C650.587 72.5121 642.628 77.6272 639.886 80.9041C633.67 88.2172 638.848 99.1802 647.832 96.6093C650.933 95.517 655.765 92.5864 659.225 93.6921C659.611 93.8119 659.944 93.9452 660.25 94.0784V94.0517C661.994 89.6692 668.21 88.9366 668.902 84.9137C669.594 81.9964 667.517 82.3561 666.479 80.1582L666.439 80.1715Z" fill="#00522E" />
                        <path d="M706.129 158.258C706.422 158.444 706.648 158.711 706.835 159.017C706.795 158.95 706.768 158.87 706.728 158.804C706.568 158.551 706.315 158.364 706.129 158.258Z" fill="#00522E" />
                        <path d="M701.817 170.486C702.136 170.819 702.562 171.126 703.028 171.392C702.549 171.126 702.123 170.819 701.817 170.486Z" fill="#00522E" />
                        <path d="M707.181 159.83C707.3 160.256 707.354 160.735 707.34 161.215C707.34 160.722 707.287 160.256 707.181 159.83Z" fill="#00522E" />
                        <path d="M710.535 174.895C709.217 174.243 707.9 173.617 706.608 172.964C706.435 172.884 706.222 172.791 706.01 172.697C706.222 172.791 706.435 172.871 706.608 172.964C707.9 173.617 709.231 174.243 710.535 174.895Z" fill="#00522E" />
                        <path d="M703.041 171.379C703.986 171.911 705.131 172.324 706.009 172.697C705.131 172.338 703.986 171.911 703.041 171.379Z" fill="#00522E" />
                        <path d="M705.969 165.145C705.876 165.251 705.783 165.344 705.663 165.424C705.783 165.344 705.876 165.238 705.969 165.145C706.103 164.998 706.236 164.825 706.355 164.652C706.236 164.838 706.103 164.998 705.969 165.145Z" fill="#00522E" />
                        <path d="M571.82 184.3C571.3 185.312 570.861 186.031 570.409 186.564C569.038 188.229 567.68 188.269 563.913 190.507C562.183 191.613 560.107 193.065 559.428 195.263C558.39 197.461 560.107 201.097 559.428 202.949C558.39 204.76 554.943 205.493 553.212 207.331C550.444 209.862 551.828 210.968 548.381 212.074C543.882 213.539 542.165 209.862 538.372 214.258C536.309 208.051 532.156 210.235 527.325 209.516C527.218 209.489 527.125 209.476 527.019 209.449L528.017 208.41C532.502 203.655 530.093 197.447 531.81 192.346C532.848 189.402 538.718 187.963 533.886 185.019C532.156 183.567 529.055 186.125 526.287 184.3L525.169 183.7C525.142 181.063 525.515 178.678 528.003 177.373C534.579 173.896 544.588 179.011 551.189 177.626C551.336 177.599 551.482 177.573 551.628 177.52C551.815 177.48 551.988 177.426 552.174 177.373C552.507 177.253 552.813 177.133 553.093 176.987C553.239 176.907 553.372 176.84 553.505 176.76C553.638 176.68 553.771 176.587 553.891 176.507V176.627C553.545 183.927 558.723 178.812 561.491 179.171C565.577 179.531 567.414 184.886 571.793 184.3H571.82Z" fill="#00522E" />
                        <path d="M647.446 130.95C647.233 128.846 646.94 127.087 646.435 125.582C642.149 125.276 636.492 124.183 634.349 122.918L634.216 122.811C630.41 124.836 632.805 121.453 629.145 121.106C624.314 120.747 621.212 126.581 616.381 126.581C615.436 126.581 614.784 126.355 614.278 126.035C612.96 131.736 616.501 134.96 614.278 138.623H614.331C617.446 138.996 619.509 141.554 622.277 142.646C624.686 143.378 629.172 142.286 629.531 146.309C629.558 146.815 629.491 147.268 629.398 147.681C631.128 148.227 632.832 148.933 634.416 149.253C640.725 150.518 640.738 148.041 645.929 149.026C645.929 148.36 645.955 147.708 646.102 147.401C646.794 145.949 648.87 145.576 649.562 144.111C650.933 140.102 647.832 134.986 647.486 130.964L647.446 130.95Z" fill="#00522E" />
                        <path d="M777.31 57.886C776.778 57.9659 776.073 57.9659 775.181 57.886C770.682 57.5263 767.581 52.7708 762.749 52.4111C756.534 52.0515 754.471 56.061 749.639 57.886C745.833 59.3379 739.284 57.886 735.145 57.886C731.005 57.886 711.666 66.2914 710.628 64.8261C709.949 63.0011 714.075 61.9088 713.397 60.0839C712.704 58.2589 708.565 57.5263 706.835 58.2589C699.581 61.1762 709.603 64.4664 704.08 68.8489C702.695 70.3142 699.581 68.4893 697.531 69.5816C694.763 71.0469 695.801 72.8718 694.417 73.9641C690.623 77.614 688.893 73.9641 684.062 73.9641C681.293 73.9641 683.023 76.8813 678.871 75.0564C678.525 75.0564 674.385 70.6739 674.385 69.9412C674.026 66.2914 680.947 68.1163 684.048 68.1163C687.149 68.1163 693.711 69.5683 694.736 65.9184C696.466 60.8032 688.188 60.0706 685.419 58.9783C677.819 56.4207 668.502 54.2228 661.595 51.6785C658.147 50.5862 656.084 48.0286 651.586 48.7479V48.3883C641.577 48.0286 634.323 50.9459 624.66 52.7708C616.035 54.5957 610.844 67.7433 604.296 74.3238C601.181 77.614 596.709 80.5312 592.556 82.3562C586.687 84.9137 582.547 83.8215 581.176 91.1212C580.484 94.7711 581.509 101.352 584.278 103.909C588.43 107.932 591.878 103.536 595.684 101.711C601.194 98.794 602.938 100.619 605.001 106.453C605.693 108.292 607.769 118.882 608.448 119.241C611.217 121.426 619.842 115.218 620.534 112.661C621.572 110.836 620.188 107.919 621.226 106.08C622.264 103.523 625.019 103.163 626.057 100.965C629.158 94.7578 621.572 92.9328 623.302 86.7254C625.019 80.8776 631.235 81.6102 634.349 77.9603C637.45 74.6701 637.797 68.4626 643.32 70.2876C650.574 72.4855 642.615 77.6007 639.873 80.8776C633.657 88.1906 638.835 99.1536 647.819 96.5827C650.92 95.4904 655.752 92.5599 659.212 93.6655C665.082 95.4904 662.327 99.8729 657.495 100.606C654.727 100.965 649.549 98.048 647.473 100.965C645.064 104.988 650.241 103.896 649.882 106.08C648.857 109.744 646.781 108.638 644.372 109.371C641.616 110.103 640.924 107.905 638.848 111.928C638.169 113.393 639.207 116.311 638.848 117.776C638.848 117.416 634.017 122.891 634.709 122.518C630.21 125.089 632.978 121.426 629.185 121.066C624.354 120.707 621.252 126.541 616.421 126.541C612.974 126.541 613.306 123.624 610.897 122.891C607.796 122.159 606.066 124.729 603.311 124.356C594.686 123.983 599.171 119.241 599.517 114.486C600.21 107.173 592.969 109.371 591.931 114.845C591.239 118.495 596.403 123.251 592.969 126.528C590.893 129.085 583.652 127.993 580.192 130.91C577.077 133.468 574.322 137.477 570.875 139.675C569.158 141.127 567.081 141.86 565.697 143.325C564.313 144.79 563.621 148.44 561.558 149.173C559.135 149.533 551.895 141.5 553.266 150.279C549.805 151.011 543.949 149.173 542.911 153.556C541.194 159.403 546.704 157.205 549.472 158.298C554.996 160.496 560.852 174.376 552.227 177.306C545.679 179.491 534.965 173.643 528.057 177.306C523.917 179.491 525.634 184.606 525.302 188.989C524.61 193.744 522.547 195.196 520.47 198.859C527.032 201.79 519.099 207.997 527.378 209.449C532.196 210.182 536.349 207.997 538.425 214.205C542.218 209.822 543.949 213.472 548.434 212.02C551.895 210.915 550.511 209.822 553.266 207.278C554.983 205.44 558.443 204.707 559.481 202.896C560.173 201.057 558.443 197.421 559.481 195.209C560.173 193.025 562.237 191.573 563.967 190.467C569.49 187.19 569.823 188.642 572.592 182.795C574.655 178.412 573.976 178.039 579.486 178.412C581.562 178.412 584.318 179.504 586.394 178.772C587.432 178.412 587.086 176.227 587.765 176.227C589.495 175.495 590.533 176.587 591.917 176.227C596.39 175.122 600.196 173.657 602.965 179.504C604.003 181.702 602.619 184.619 604.349 186.817C605.387 187.537 609.872 188.642 610.897 189.002C612.974 190.094 618.151 191.2 619.522 192.665C621.598 195.209 620.214 198.14 620.92 201.057C624.021 213.845 623.675 193.025 629.198 195.569C631.967 189.721 612.641 181.329 610.219 176.574C607.809 172.191 608.488 164.878 614.358 168.168C616.434 169.261 617.472 173.643 619.189 175.108C621.266 176.947 623.342 176.574 625.405 178.026C628.852 179.851 633.351 183.501 635.068 187.164C635.76 188.989 635.76 190.081 636.106 191.919C636.798 194.823 636.439 195.569 637.823 197.767C638.861 199.952 641.27 201.79 641.963 203.615C642.641 205.067 643.679 210.182 644.718 210.915C648.87 214.565 652.664 207.638 652.664 204.334C652.664 201.417 649.895 197.407 650.933 194.463C652.318 190.814 658.187 191.919 661.634 191.546C662.433 192.732 662.5 193.758 662.367 194.81" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M716.724 178.625C716.018 178.066 715.34 177.586 714.754 177.213C712.159 175.575 709.31 174.336 706.595 172.964C705.171 172.271 702.203 171.459 701.418 169.94C699.727 166.117 704.519 166.796 705.956 165.145C707.753 163.226 708.139 158.018 704.918 157.885" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M704.931 157.898C703.361 158.99 702.855 160.362 700.912 161.042C698.849 161.734 696.386 161.322 694.443 162.281C691.728 163.653 693.019 165.145 693.152 167.622C693.285 169.54 692.367 171.592 690.184 171.325C685.912 170.646 685.645 163.666 681.639 162.56C675.157 160.922 672.695 169.407 670.499 174.056C669.474 176.387 667.531 178.319 666.879 180.77C666.24 183.514 668.05 184.739 669.607 186.804C669.753 187.017 669.913 187.244 670.073 187.497" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M745.979 162.107C745.713 162.334 745.446 162.574 745.18 162.813C743.503 164.598 740.389 167.076 740.136 169.807C739.883 173.084 743.503 177.613 745.313 179.944C746.551 181.369 747.616 182.861 748.721 184.38" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M551.535 108.305C550.896 108.305 549.605 108.039 549.472 107.346C549.073 105.827 551.016 106.107 551.402 105.295C552.826 102.417 546.877 102.417 545.453 103.376C541.966 105.295 541.313 112.967 542.738 116.391C543.909 119.268 547.782 120.773 549.991 122.292C551.163 123.251 553.612 126.821 552.454 128.459C551.296 130.098 548.7 128.193 547.409 129.965C545.985 131.616 545.333 135.04 547.023 136.412C547.795 137.091 549.233 136.412 548.953 138.05C548.82 139.276 547.023 139.143 546.238 139.555C544.561 140.102 543.004 141.474 543.656 143.805C544.694 147.361 547.795 142.979 549.605 142.3C552.574 141.074 554.903 143.259 557.618 142.859C559.175 142.712 559.441 141.487 560.466 140.941C561.504 140.261 562.529 140.808 563.567 140.528C566.163 139.849 564.725 137.651 566.163 135.599C566.815 134.64 568.106 134.64 568.226 133.268C568.359 131.896 567.068 130.671 566.163 129.978C565.125 129.152 563.834 128.886 562.929 127.926C561.771 126.834 561.238 125.182 560.346 123.81C558.922 121.626 554.903 119.561 554.517 116.684C553.984 113.26 557.365 114.499 558.403 112.301C560.599 107.786 553.745 108.465 551.935 108.465" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M534.578 119.534C532.116 120.627 532.382 123.091 529.8 123.504C527.338 123.917 525.395 123.65 525.395 127.074C525.395 129.125 528.11 130.084 527.471 132.003C526.819 134.054 523.851 133.241 524.357 136.252C525.262 141.873 532.116 135.985 534.445 135.426C536.522 135.013 538.465 135.559 539.756 133.095C540.794 131.177 539.357 129.258 540.009 127.207C541.047 124.197 543.243 124.063 540.794 120.906C538.598 118.162 537.427 118.309 534.578 119.534Z" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M594.766 189.402C591.146 189.402 591.532 192.292 591.265 195.156C591.012 198.3 590.879 200.631 594.766 200.511C598.519 200.231 598.905 197.9 598.905 194.477C598.905 191.733 598.772 189.135 595.285 189.402" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M593.994 181.582C589.988 182.142 593.355 187.75 596.589 185.845C598.905 184.326 596.722 180.77 594.26 181.462" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M616.128 204.054C613.919 204.054 608.102 202.549 608.355 206.252C608.488 208.037 609.393 208.171 610.817 208.717C612.761 209.409 612.375 209.676 613.679 211.048C618.857 217.069 621.053 203.242 616.008 203.921" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M515.559 68.5695C513.349 68.0233 511.153 69.6617 508.944 69.5285C506.229 69.5285 503.899 70.2079 501.317 70.4876C497.817 70.7541 494.063 64.7331 490.962 70.0747C489.272 73.0852 492.12 72.1261 493.677 73.2317C495.754 74.737 493.811 76.2422 494.183 78.4268C494.968 82.13 499.361 80.8911 501.823 80.8911C504.152 81.0243 505.709 83.7684 508.039 82.2632C509.33 81.4506 509.969 79.7988 511.393 78.9729C513.083 78.1471 514.627 78.0139 516.317 77.6009C518.141 77.188 521.894 75.5495 523.052 73.7645C525.381 70.0747 518.514 66.3715 515.545 68.4229" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M717.19 178.079C723.405 172.964 729.954 179.904 735.145 182.462C739.976 184.273 744.462 190.121 748.601 184.646" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M719.812 187.896C722.727 184.593 719.612 180.93 716.724 178.625" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M748.721 184.393C749 184.779 749.293 185.179 749.586 185.579C750.744 187.35 752.94 189.002 753.725 191.187C754.364 192.972 754.231 196.675 753.725 198.593C753.419 199.725 752.754 200.724 752.235 201.79" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M553.904 176.614C553.558 183.914 558.736 178.798 561.504 179.158C565.644 179.518 567.467 185.006 571.966 184.273" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M526.3 184.286C529.055 186.125 532.169 183.554 533.886 185.019C538.718 187.95 532.848 189.402 531.81 192.332C530.093 197.447 532.502 203.655 528.017 208.397" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M660.224 94.0518C661.941 89.6693 668.17 88.9367 668.848 84.9138C669.54 81.9966 667.464 82.3562 666.426 80.1583C665.388 77.6007 665.388 76.1354 664.709 73.5912C663.671 69.2086 662.287 65.9184 659.878 61.8956C655.046 54.2228 659.185 58.6053 661.941 52.0382" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M658.161 56.0611C657.122 53.8632 653.675 50.9459 651.266 50.9459C648.152 51.3056 648.857 52.7709 646.781 54.5958C640.911 60.084 641.949 54.9555 635.387 55.6881C627.788 56.4207 636.08 59.711 638.502 62.2686C642.641 65.9184 642.295 67.7434 640.924 73.2315" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M631.581 57.886C629.158 59.3379 626.749 57.886 624.686 58.9783C622.61 60.0706 621.572 63.0012 619.855 64.4531C618.125 66.651 615.702 67.0107 613.985 69.5683C612.947 71.3932 612.947 74.6834 611.576 76.8814C608.462 81.9965 603.284 81.6235 604.322 88.204C605.36 92.5865 610.192 98.4343 602.938 101.725" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M659.891 100.619C659.545 105.002 659.545 108.292 661.275 111.942C664.376 119.255 667.491 113.047 672.655 116.697C675.077 118.162 673.693 119.628 675.077 121.08C676.115 122.172 680.601 124.37 680.947 125.835C682.664 130.95 676.115 128.393 675.769 133.508C680.601 134.614 684.394 134.241 687.855 136.798C690.264 139.356 692.686 144.471 697.158 145.936C701.311 147.028 707.181 141.913 710.615 146.669C715.446 152.876 706.143 153.969 705.783 159.084" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M569.783 140.448C574.269 141.181 573.59 146.296 578.421 147.388C581.855 148.121 590.147 145.204 590.507 152.144C590.853 155.434 587.738 156.526 586.008 158.711C585.662 159.443 586.354 161.641 586.008 162.734C585.662 163.466 582.893 162.734 582.893 163.826C582.893 166.756 585.303 167.489 586.354 170.406C586.687 171.872 586.354 174.416 586.354 176.254" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M585.675 167.476C589.122 167.476 589.122 163.813 592.223 162.72C593.608 162.361 595.338 164.172 596.709 163.813C598.772 163.453 599.118 162.72 600.502 161.988C604.642 160.163 613.626 157.605 612.228 166.743" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M588.776 155.061C592.57 157.259 605.001 153.968 604.309 159.816" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M583.599 146.655C583.253 140.448 590.507 134.6 586.354 128.752" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M575.653 135.706C577.383 139.356 580.138 141.913 583.932 140.821" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M603.271 157.618C605.347 152.863 610.525 155.434 612.588 150.319C610.857 149.946 606.372 148.121 606.026 145.936C605.68 142.646 610.179 142.273 612.242 140.821C618.111 136.065 612.588 132.775 614.318 125.835" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M614.318 138.61C617.432 138.983 619.495 141.54 622.264 142.633C624.673 143.365 629.158 142.273 629.518 146.296C629.85 153.596 616.74 151.051 612.601 151.051" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M611.563 161.641C619.149 160.549 622.943 161.641 623.981 152.144" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M614.664 169.674C616.74 166.024 623.648 164.559 621.572 159.443" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M621.905 162.001C623.981 164.918 635.361 164.918 632.952 169.301C630.183 174.776 623.289 165.291 623.289 176.254" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M632.606 170.766C638.129 174.416 632.26 177.706 631.221 181.729" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M633.99 183.554C638.821 179.904 638.821 184.646 640.551 188.309C642.268 192.332 644.345 192.692 638.821 196.342" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M642.269 192.692C647.792 192.332 648.484 186.111 653.316 185.752C656.776 185.752 662.979 187.936 661.262 191.972" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M662.646 194.876C665.068 192.692 669.194 193.425 669.9 189.029" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M649.522 187.217C648.83 180.637 644.012 183.194 640.206 185.019" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M646.767 182.821C648.484 174.776 639.513 159.803 631.927 166.743" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M624.327 154.701C627.441 157.978 628.48 155.061 631.581 154.328C634.695 153.223 636.772 152.863 640.206 153.223C644.345 153.223 643.653 153.955 645.729 151.038C646.075 150.678 645.729 148.107 646.075 147.375C646.767 145.923 648.844 145.55 649.536 144.084C650.907 140.075 647.805 134.96 647.459 130.937C646.767 124.356 645.396 121.066 638.835 118.509" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M634.349 122.905C637.45 124.743 647.805 126.195 650.907 125.475C654.7 124.743 654.7 121.812 657.122 119.628C658.853 117.43 660.929 116.337 663.351 114.512" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M639.513 114.139C644.691 113.767 656.084 111.582 657.801 118.522" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M650.907 107.199C653.329 108.305 658.267 108.665 660.689 107.572" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M649.868 136.798C652.291 135.346 655.059 133.881 658.147 134.241C661.608 134.973 661.608 136.798 664.722 138.623C666.106 138.996 673.693 140.461 674.731 139.729C677.832 137.531 672.908 135.346 676.701 133.521" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M639.181 165.291C639.181 164.559 644.704 152.503 645.037 152.144C645.729 151.051 650.907 155.061 651.266 155.061C653.329 155.434 657.482 155.061 659.545 154.701C663.697 153.596 671.63 149.213 673.36 157.978C674.399 164.186 664.376 164.918 673.001 168.941" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M661.262 154.688C667.81 155.793 664.017 167.835 669.886 166.743" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M646.075 175.521C650.574 176.987 652.291 175.148 656.444 174.789C660.237 174.416 665.175 177.719 669.66 175.894" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M717.19 178.079C723.405 172.964 729.954 179.904 735.145 182.462C739.976 184.273 744.462 190.121 748.601 184.646" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M745.486 161.282C743.41 156.166 737.554 155.807 735.477 151.784C733.055 147.028 737.194 140.461 741.001 145.936C745.486 142.646 741.347 137.158 748.601 136.798C753.073 136.438 759.981 139.356 764.133 140.088C766.197 140.448 766.889 141.913 768.952 141.913C771.72 142.273 774.475 140.088 777.23 140.821C780.345 141.554 780.691 143.365 784.138 142.646C788.624 141.913 789.662 140.461 786.214 136.798C785.176 135.346 782.421 137.517 781.383 134.613C781.729 134.986 782.075 127.66 782.075 128.033C782.528 125.649 781.649 124.663 782.248 123.757" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M782.128 123.97C782.128 123.97 768.233 95.597 777.297 57.8727" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M739.976 185.752C742.385 191.226 735.478 186.857 735.478 190.867C735.478 192.692 740.309 193.424 741.001 195.249C741.347 196.355 741.001 198.912 741.001 200.005" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M717.19 178.079C723.405 172.964 729.954 179.904 735.145 182.462C739.976 184.273 744.462 190.121 748.601 184.646" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M720.637 187.217C729.941 183.927 730.646 195.249 737.194 199.272C738.579 200.365 741.347 201.47 742.718 201.097C744.794 200.365 744.794 197.447 745.819 197.088C751.343 195.249 747.896 200.005 752.381 201.47" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M647.393 149.346C640.645 147.548 641.257 150.625 634.389 149.24C632.313 148.827 630.05 147.721 627.774 147.228" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M591.545 209.13C591.904 215.337 592.237 217.535 590.174 222.277C587.419 228.498 588.79 227.392 592.942 233.24C596.044 237.609 596.736 241.273 597.428 246.015C598.12 250.397 601.221 255.153 600.875 259.908C599.837 266.116 595.365 267.927 600.875 273.775C603.99 276.706 609.513 281.088 612.96 282.554C617.446 284.006 621.252 281.102 625.738 281.461C629.531 281.821 634.363 285.844 637.464 287.669C642.987 290.972 650.241 294.236 654.713 298.259C659.545 302.282 657.482 304.093 656.79 310.327C656.457 313.245 657.136 315.802 656.111 317.987C655.073 319.812 652.996 321.65 651.972 323.835C649.895 328.59 649.216 331.521 651.279 336.263C652.65 338.807 654.035 340.992 655.073 343.563C656.111 346.48 655.752 349.037 656.457 351.968C658.174 357.07 663.365 359.268 666.799 363.291C670.246 367.287 671.63 371.683 676.462 374.613C679.23 376.438 679.23 376.065 682.331 376.798C685.446 377.157 686.484 377.53 689.585 378.636C691.994 379.369 693.379 380.821 696.147 380.088C698.902 379.369 699.248 377.157 700.978 376.065C703.747 374.973 708.219 376.065 709.257 373.148C712.372 363.65 693.032 361.439 699.248 350.116C701.671 345.734 702.709 343.909 703.388 338.794C704.08 332.227 706.502 333.679 709.257 328.563C711.333 325.273 710.295 319.425 711.333 315.789C712.372 311.406 716.964 311.033 719.719 307.743" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M596.736 244.563C597.774 241.632 600.529 239.807 601.913 237.982C601.913 237.609 601.913 235.052 602.605 234.332C603.297 232.867 604.668 231.761 605.706 230.669" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M658.853 236.89C659.891 247.853 659.545 260.641 659.891 271.591C660.237 277.798 664.376 299.351 655.392 298.618" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M661.954 286.217C670.592 287.669 681.28 286.217 690.264 286.217C694.736 286.217 698.889 288.761 701.99 286.217C704.758 284.006 703.374 280.369 707.527 280.009" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M618.817 282.181C619.163 284.019 618.471 288.761 619.163 290.24C619.855 291.692 621.918 292.065 622.623 294.609C623.661 297.539 623.661 307.037 623.315 310.327C622.623 316.535 618.484 315.815 615.715 320.544C614.677 322.023 613.652 325.659 613.998 327.498C614.677 330.775 616.754 329.682 618.138 332.613C619.176 334.065 618.83 336.995 619.522 338.82C620.214 341.365 621.944 341.751 621.944 344.668C621.598 352.714 612.628 346.48 619.881 355.258C624.021 360.014 624.354 359.641 630.236 358.562C631.621 358.562 635.068 358.921 636.106 358.202C638.182 356.364 636.798 353.087 638.182 351.608C641.284 347.972 645.436 350.516 648.191 347.612C650.268 345.041 648.191 340.659 653.023 341.764" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M549.778 218.254C549.446 223.01 554.956 231.762 551.163 235.425C548.754 237.982 543.23 235.425 540.462 237.982C538.745 239.807 538.399 243.097 535.989 245.282C533.913 247.826 530.799 247.826 528.043 248.945C523.558 250.77 524.942 251.849 521.828 255.153C518.034 259.535 512.511 257.697 506.628 257.697" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M521.122 256.618C521.122 264.664 521.815 266.848 514.228 266.489C506.282 266.129 506.974 268.673 506.628 275.986C506.628 276.719 506.987 278.531 506.628 279.277C505.949 280.742 504.565 281.102 504.206 281.834C504.206 282.194 502.835 283.659 502.143 284.392C501.45 285.497 502.489 287.309 501.797 288.401C499.734 291.705 491.788 290.24 487.648 290.24" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M521.482 259.549C528.736 266.848 535.976 273.788 543.909 280.369C551.163 285.844 562.902 289.121 568.772 296.074C570.835 298.259 570.156 303.014 573.603 303.374C576.704 303.733 577.037 300.83 579.113 299.711C580.844 298.618 583.612 299.351 585.329 298.259C587.405 297.166 587.405 293.503 589.122 291.692C590.853 289.494 592.929 288.761 594.992 287.669C599.145 285.124 602.592 281.821 606.399 279.65" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M710.987 325.287C713.05 325.646 717.536 327.125 719.612 326.765C722.367 326.032 723.751 323.835 726.16 322.383" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M736.875 331.88C735.491 334.797 731.005 338.82 731.698 342.111C733.082 346.48 738.605 345.387 739.284 341.005" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M738.246 344.295C737.913 349.411 742.039 349.051 744.808 351.222C747.23 353.06 746.525 354.885 749.639 355.978C751.024 356.71 756.893 355.618 757.918 357.083C759.994 359.641 755.509 363.664 753.779 365.848C750.664 370.231 749.293 370.231 745.154 372.056C741.693 373.894 739.617 377.171 735.837 377.917C732.044 378.65 728.583 377.171 724.79 377.917C722.714 378.29 722.713 380.102 719.612 379.742C717.536 379.742 716.498 377.531 714.781 376.811C712.026 375.719 709.71 376.452 707.979 373.534" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M734.453 378.276C731.698 384.124 729.621 386.309 730.313 393.236C730.659 397.618 731.352 401.281 731.352 405.304" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M700.965 376.078C702.003 380.821 706.835 386.668 704.412 391.424C703.374 393.635 699.235 393.249 699.235 396.539C699.235 397.991 703.028 400.562 703.734 402.014C704.772 403.852 703.041 406.037 704.772 408.221C706.156 409.7 710.628 410.792 712.704 412.604C716.498 415.894 718.92 420.29 724.444 419.917" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M686.125 377.544C686.484 381.567 689.572 388.134 688.534 390.691C688.201 392.516 684.741 393.236 683.702 395.447C683.024 397.258 684.062 399.829 683.356 401.654C682.318 403.852 679.909 404.944 679.217 407.129C678.858 408.954 679.896 411.152 679.896 412.604C679.896 417.359 680.588 420.29 681.972 424.659C682.651 427.576 684.048 431.599 684.727 434.889C685.419 442.203 683.689 437.807 679.55 441.47C676.435 444.014 675.756 449.862 676.435 453.525C677.141 458.281 682.651 460.825 681.626 465.207C675.397 467.405 675.397 460.092 671.604 457.908C669.541 457.175 667.118 458.267 665.388 457.548C662.966 456.815 661.595 454.618 659.172 453.885C655.379 453.152 650.534 456.083 648.125 452.06C646.049 448.397 650.534 439.632 648.125 436.355C647.087 434.517 645.011 434.889 642.948 434.889C638.795 434.889 641.217 435.622 638.116 437.447C633.285 439.632 631.208 439.632 628.799 434.157C627.761 431.613 629.491 430.52 626.723 428.682C625.698 427.949 621.545 429.055 619.828 429.055C616.368 429.055 612.574 428.682 609.127 429.415" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M625.379 542.668C630.902 541.216 635.041 548.515 638.835 541.216C640.565 537.925 639.527 532.437 639.527 529.16C639.527 524.045 639.181 519.29 639.873 514.548C640.565 509.073 643.666 507.967 644.704 502.492C645.397 497.377 643.32 493.368 648.498 491.529C651.266 490.797 658.161 493.727 659.891 491.17C664.376 484.962 654.021 486.787 652.291 487.52C647.46 488.612 642.615 488.985 637.797 488.252C627.442 486.787 617.087 487.52 606.731 486.414" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M653.329 486.774C651.945 483.484 649.882 482.764 648.857 479.101C648.165 476.543 648.498 471.055 649.203 468.511C650.574 463.396 651.279 466.686 654.713 463.396C657.136 461.211 657.482 458.281 658.161 454.618" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M660.237 489.332C665.068 490.064 668.183 489.332 671.976 486.774C675.077 484.576 678.871 478.369 681.639 477.276C685.086 476.171 693.365 481.659 694.749 484.576C696.134 487.866 695.441 494.806 695.109 498.097C694.749 502.479 693.378 509.06 689.585 511.604C687.509 512.71 679.243 513.069 677.167 511.964C675.091 510.871 669.58 503.212 668.542 500.641C667.85 498.456 668.542 496.258 667.158 494.433C665.428 491.876 661.967 494.074 662.326 489.678" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M639.527 525.87C647.46 524.778 641.603 533.916 646.075 535.368C652.291 537.925 650.228 526.963 656.444 527.322C659.545 527.682 658.853 531.705 663.351 529.16C665.774 528.055 665.415 525.511 666.785 523.672C669.195 520.022 674.279 516.412 676.102 511.977" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M686.124 511.977C688.201 517.092 690.277 523.313 688.201 528.055C686.817 530.972 683.702 530.253 684.408 534.276C684.74 537.193 686.817 538.658 689.585 537.552" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M674.731 544.506C671.271 544.879 665.068 554.004 671.617 555.096C675.41 555.829 680.242 545.958 675.41 544.506" stroke="#0C1618" stroke-width="0.55" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M683.702 478.009C686.936 470.696 697.518 466.686 701.311 473.626C703.374 477.276 698.556 480.553 702.349 482.764C707.873 486.414 708.565 478.741 707.873 475.078C706.835 469.23 698.556 463.023 704.772 458.64C710.628 453.885 724.191 462.663 727.997 453.885" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M698.902 397.258C693.724 396.526 694.07 399.47 690.956 401.641C687.855 403.839 685.778 403.839 681.985 403.839" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M681.639 421.755C689.572 421.396 687.855 409.34 687.855 403.479" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M691.302 402.014C691.981 406.396 690.264 410.792 695.441 411.152C700.273 411.152 700.965 404.212 702.695 400.908" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M679.909 412.244C682.331 410.792 684.74 408.954 687.855 408.594" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M684.74 437.46C688.534 444.401 697.518 445.133 697.518 453.166C697.518 458.281 695.095 464.129 695.441 469.603" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M696.826 448.05C705.104 441.843 703.734 454.618 704.08 459.373" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M671.976 370.963C667.824 372.788 664.722 371.683 660.929 372.788C655.405 374.253 652.983 379.742 647.113 376.798C643.653 374.973 639.527 369.138 635.374 374.973C632.965 377.903 634.682 384.471 633.99 388.134C633.311 391.784 633.657 398.351 632.273 401.641C630.543 406.756 625.724 407.489 623.994 413.696C622.61 419.184 623.648 421.742 617.432 422.475C615.702 422.834 613.985 421.742 612.601 422.115C610.871 422.115 608.448 423.94 606.385 424.313" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M603.63 418.092C609.5 415.908 605.014 411.525 607.783 408.967C610.538 406.05 613.293 410.806 615.369 409.7C620.547 408.221 619.163 395.807 617.086 392.516C616.062 390.691 609.833 390.332 612.255 386.309C614.331 382.659 620.201 387.761 621.239 388.147C630.902 389.972 623.648 378.29 634.003 379.382" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M621.918 358.548C619.855 365.115 613.639 366.94 617.086 373.534C618.471 376.078 620.893 378.29 622.277 380.474C623.662 382.659 622.277 384.857 626.071 385.949" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M611.23 387.401C607.423 380.461 605.36 389.972 604.322 391.424C602.246 394.355 596.736 392.889 594.659 396.899" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M597.76 387.761C600.183 386.309 603.284 386.309 605.36 388.507" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M618.125 335.517C617.446 340.992 613.293 342.47 610.871 346.48C608.462 350.862 609.154 355.977 606.399 360.373C602.605 365.848 601.208 362.571 596.736 364.756C592.583 367.3 594.313 371.696 592.942 375.719" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M613.985 328.95C609.5 327.857 606.731 331.88 602.938 332.613C600.529 332.973 594.313 333.345 591.891 332.613C586.021 331.134 579.459 320.931 573.936 329.323C572.898 331.148 571.513 337.368 571.513 339.553C571.167 342.856 573.23 345.76 572.552 348.691C571.513 351.981 568.066 353.074 567.374 357.083C567.028 360.733 569.45 362.944 569.783 366.208" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M532.862 270.139C524.57 270.858 528.03 278.158 528.376 284.751C528.735 293.143 528.736 299.351 530.785 307.037C532.516 312.885 534.938 318.719 528.722 320.171C523.891 321.277 518.7 318.719 513.522 319.439C508.012 320.531 504.192 320.917 505.59 327.125C506.268 330.402 508.012 338.088 510.421 338.447C516.277 339.54 516.97 332.24 520.43 341.365C521.468 344.295 520.084 345.028 522.839 346.866C523.185 347.226 529.747 347.599 530.093 347.599C533.554 346.48 533.194 344.668 534.232 341.751C535.963 337.368 536.655 335.157 539.756 331.88C540.794 330.402 542.178 330.402 543.203 328.95C543.882 328.217 543.203 326.405 544.228 325.286C546.997 322.01 550.098 322.369 553.891 322.01C559.761 321.65 567.707 322.742 571.846 319.439C578.062 315.056 573.922 308.116 574.269 301.909" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M486.61 313.245C490.403 312.512 494.556 312.152 497.657 315.429C500.772 318.719 499.374 322.742 505.244 323.115" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M557.378 322.023C556.699 328.23 558.762 328.23 562.21 331.134C562.902 331.521 564.619 331.521 565.324 332.24C566.362 332.973 566.003 335.157 566.362 335.517C567.747 336.249 570.954 336.995 572.671 336.636" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M566.003 334.811C562.21 345.041 542.192 338.101 542.192 347.599C541.833 349.783 544.255 351.235 544.255 353.074C544.947 356.35 543.909 357.083 543.23 360.373C542.538 362.944 541.5 363.664 541.846 366.581C542.538 369.511 544.96 370.244 544.614 373.894" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M554.61 341.018C555.302 346.493 557.724 351.608 559.095 356.71C559.787 360.733 558.749 365.489 558.403 369.138" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M559.441 339.926C559.441 346.133 561.864 349.424 563.235 354.525C563.927 358.189 563.235 362.931 563.235 366.581" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M542.538 349.051C537.014 349.783 535.989 349.783 532.183 345.76" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M521.828 346.48C523.545 349.41 521.136 351.235 521.482 353.806C521.828 355.258 524.929 355.631 524.929 357.083C524.57 358.921 522.16 358.548 521.482 360C519.405 363.291 517.688 362.931 520.444 366.567C522.52 369.498 527.697 368.406 524.929 374.253" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M519.752 361.466C510.781 359.641 509.396 335.89 500.08 351.595" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M512.857 355.977C511.819 358.908 510.448 361.452 508.704 364.023" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M507.666 335.517C504.565 337.355 501.45 332.973 498.349 334.797C496.273 336.249 497.657 338.461 496.619 339.913C495.94 341.365 494.197 341.005 493.158 343.203" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M498.003 334.065C493.864 330.042 492.493 324.927 485.918 329.309" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M764.985 462.583C759.555 462.583 757.998 475.731 752.567 478.462C749.453 479.834 747.137 479.021 744.275 481.206C740.655 483.67 740.136 486.414 740.136 490.797C740.136 495.739 741.174 500.121 738.845 504.237C736.516 508.62 733.933 511.084 735.211 516.572C737.021 524.791 741.427 534.649 749.972 527.256C752.554 525.071 753.073 523.699 753.845 520.409C754.883 516.026 756.693 513.842 759.023 509.725C762.39 503.691 760.846 496.032 763.162 489.438C764.453 486.161 764.972 481.499 766.782 478.755C768.339 476.011 770.402 477.662 770.15 473C769.883 469.99 768.845 462.597 765.744 462.317" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M700.087 248.466C699.634 249.771 699.115 251.037 698.543 252.235" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M696.812 240.54C698.157 243.404 697.531 246.601 700.073 248.452" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M696.906 240.74C696.759 240.806 696.613 240.86 696.466 240.913C691.289 242.751 688.52 238.369 684.381 237.623C679.203 236.89 677.473 242.365 671.963 240.913C667.81 240.18 662.3 237.996 658.507 236.53C653.675 234.705 650.561 229.963 645.383 230.323C637.783 231.056 640.884 235.798 638.821 240.553C635.72 248.959 631.568 240.553 627.095 238.728C625.365 237.996 623.302 239.088 621.905 238.369C619.482 237.263 619.842 235.438 618.111 233.986C613.972 231.056 609.14 232.521 605.001 229.963C603.284 228.498 599.477 227.033 599.145 224.475C598.453 221.545 600.862 221.172 601.9 218.627C603.976 212.047 601.554 208.397 595.684 208.397C586.367 208.397 577.037 211.314 567.72 212.047C562.183 212.42 557.711 212.779 552.52 215.697C548.381 217.895 545.266 220.812 540.102 219.72C532.848 218.268 534.233 217.162 529.401 223.383C525.262 228.858 518.7 231.042 516.637 237.996C515.266 242.365 515.945 247.48 512.484 251.143C509.383 254.433 505.23 257.71 502.129 261.014C500.399 262.466 497.644 263.944 496.606 266.129C495.221 268.314 496.26 270.512 495.567 272.337C493.504 277.452 487.981 278.544 486.597 284.019C485.558 289.134 487.981 294.995 488.673 299.724C489.365 305.945 487.635 309.222 486.264 315.069C483.855 324.927 485.918 335.89 491.774 343.576C495.567 348.691 500.758 352.354 503.859 357.469C506.615 362.585 509.383 366.594 513.522 370.617C519.738 376.824 524.57 376.092 531.131 373.907C536.655 371.696 542.179 374.64 548.727 373.548C559.082 371.709 569.091 360.027 578.075 371.709C579.459 373.188 580.484 376.092 582.228 376.824C584.983 377.557 586.021 374.999 588.098 374.64C593.954 374.64 597.414 379.022 597.414 384.87V385.603L597.068 384.51C597.76 395.473 589.122 402.4 596.376 411.898C599.491 416.28 604.322 418.838 606.745 423.58C609.154 427.963 608.462 433.078 610.205 437.833C611.922 442.949 611.576 447.331 612.614 452.819C613.999 460.119 614.331 459.746 610.538 465.967C603.284 476.93 603.63 490.077 610.884 500.667C613.999 505.05 617.792 511.257 617.446 517.105C617.446 524.045 615.369 524.778 619.509 532.078C622.277 536.833 623.315 541.948 625.378 547.063C627.455 551.819 630.902 555.469 631.594 560.957C632.286 566.072 629.877 571.547 634.363 575.57C638.502 578.847 643.333 575.57 648.165 574.837C655.073 573.732 664.044 573.012 669.913 568.616C673.707 565.34 675.783 560.224 679.23 556.201C683.023 552.179 687.163 549.261 689.239 543.773C690.623 540.123 690.277 535.368 691.662 531.718C693.738 526.603 698.556 526.603 702.363 522.953C705.118 519.663 705.464 516.013 704.772 511.257C704.08 506.502 701.657 502.492 703.734 497.75C705.451 493.368 710.987 489.704 714.781 487.16C719.958 483.51 726.52 480.207 728.929 473.999C730.992 469.244 728.57 464.502 727.891 459.373C727.532 454.258 728.237 449.875 726.853 445.133C724.776 439.645 724.776 438.553 725.122 433.078C725.482 422.848 721.675 412.258 732.722 406.41L732.363 406.05C737.195 402.387 739.963 397.631 744.102 393.995C748.242 390.332 753.433 387.401 756.88 383.032C763.774 374.64 767.927 361.839 771.72 351.235C772.758 347.599 776.192 338.461 769.644 337.368C766.529 337.009 761.019 343.216 757.226 343.576C753.765 343.936 747.909 344.308 744.448 343.576C736.862 342.124 739.271 338.461 737.554 332.613C735.478 324.927 725.469 324.207 721.675 318C719.599 315.069 721.316 310.341 719.253 306.677C716.484 302.655 713.729 302.655 712.345 297.539C711.653 293.876 712.345 289.88 711.307 286.217C710.269 281.102 706.808 279.65 703.72 275.986C700.952 271.964 699.927 267.941 698.197 263.185C696.812 259.176 693.365 255.526 692.673 251.13C693.791 250.797 696 251.623 698.276 252.795" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1237.19 585.88C1233.57 584.788 1238.74 575.197 1233.05 574.917C1228.65 574.638 1231.23 586.973 1230.46 589.437C1228.9 594.645 1221.91 593.553 1220.61 597.936C1219.84 601.226 1222.94 600.68 1223.47 603.144C1223.72 605.062 1221.91 606.434 1221.91 608.352C1229.94 611.363 1229.94 600.4 1236.41 598.495C1239 597.669 1244.95 596.577 1244.18 591.915C1243.66 589.45 1241.07 589.996 1239.27 589.996C1239.27 588.345 1239.27 586.706 1237.98 585.894" fill="#223E44" />
                        <path d="M1213.9 607.247C1205.1 603.956 1203.53 615.465 1196.81 619.022C1192.66 621.22 1188.78 619.568 1184.39 622.579C1180.77 625.323 1176.87 627.787 1173.25 630.252C1168.86 632.716 1168.33 634.368 1173.52 634.914C1178.95 635.46 1181.28 634.914 1185.42 631.077C1187.24 629.426 1189.3 626.961 1191.38 625.869C1193.71 624.217 1194.75 624.777 1197.08 624.217C1200.95 623.405 1203.29 620.381 1206.91 618.463C1208.74 617.37 1221.67 608.326 1214.42 607.233" fill="#223E44" />
                        <path d="M1159.01 455.736C1153.31 458.734 1152.28 471.628 1150.72 477.383C1149.93 480.939 1148.64 485.881 1145.02 486.694C1140.11 487.8 1137 482.578 1133.89 479.847C1131.05 477.383 1127.17 475.198 1128.98 470.536C1130.02 467.792 1134.93 465.061 1134.41 461.757C1133.64 457.655 1126.91 460.385 1124.06 459.573C1121.21 458.734 1118.88 454.911 1115.78 457.362C1114.74 458.201 1116.03 460.385 1115.01 461.211C1113.97 462.304 1112.95 461.211 1111.91 461.478C1108.54 462.317 1107.77 461.478 1105.44 465.594C1103.11 469.71 1102.32 479.021 1096.37 474.092C1094.05 472.188 1095.08 470.256 1091.72 469.71C1088.61 469.164 1086.29 471.628 1084.46 473.56C1082.65 475.464 1080.58 476.837 1078.78 478.488C1076.96 480.686 1076.7 483.697 1075.41 485.895C1068.68 479.581 1068.68 491.916 1064.79 496.298C1061.42 499.868 1059.87 500.414 1055.21 500.681C1050.03 500.96 1048.49 504.251 1043.83 504.797C1036.84 505.356 1035.53 503.984 1032.95 510.831C1031.66 514.388 1028.55 517.132 1027.26 520.702C1026.74 522.886 1027.51 524.818 1027.26 527.002C1026.74 529.2 1025.97 529.747 1024.93 531.665C1022.08 536.593 1024.42 537.965 1025.45 543.44C1025.97 547.01 1025.18 550.833 1025.7 554.403C1025.95 556.868 1028.28 560.424 1027.78 563.168C1026.74 567.271 1020.52 566.738 1020 572.213C1019.23 583.442 1037.08 572.479 1041.24 572.759C1045.12 573.039 1048.5 574.957 1052.37 573.585C1057.03 572.213 1059.37 568.643 1064.54 567.551C1075.41 565.086 1083.42 553.577 1095.34 560.984C1096.89 562.076 1100.25 564.54 1101.55 565.912C1103.88 568.11 1102.59 568.923 1103.12 571.667C1105.19 580.432 1108.81 570.295 1113.21 573.039C1114.5 574.131 1115.29 582.91 1115.81 584.828C1116.59 589.756 1113.48 593.313 1118.92 594.965C1121.25 595.511 1124.6 595.231 1126.95 595.511C1127.72 595.511 1129.02 596.337 1129.8 596.057C1130.82 595.791 1131.34 594.139 1131.86 594.139C1135.74 593.313 1138.86 596.337 1142.99 594.139C1144.81 593.313 1145.83 591.954 1147.91 591.395C1150.51 590.849 1152.05 591.941 1154.64 590.569C1161.38 587.279 1157.49 581.804 1162.15 577.421C1163.97 575.503 1167.85 574.677 1169.14 572.226C1170.18 569.749 1168.62 568.39 1170.68 565.912C1174.3 561.263 1177.67 561.796 1179.75 556.055C1183.1 546.464 1190.62 541.256 1190.09 529.747C1189.84 522.9 1185.95 522.087 1183.62 516.599C1182.84 514.947 1183.37 512.763 1182.58 511.391C1181.29 508.646 1179.73 508.646 1178.44 505.37C1177.92 503.451 1177.92 500.987 1176.89 499.056C1175.59 496.871 1173 495.499 1171.46 493.581C1167.83 489.465 1169.13 484.549 1168.61 479.061C1168.34 477.409 1168.61 473.307 1167.57 471.655C1166.28 469.47 1163.16 469.737 1161.87 467.539C1160.06 464.528 1163.16 456.309 1160.06 455.483" fill="#223E44" />
                        <path d="M1130.53 606.7C1127.93 606.7 1126.39 603.956 1124.06 606.154C1122.77 607.526 1123.54 611.363 1123.02 613.281C1121.98 616.851 1117.84 623.698 1125.1 620.408C1126.39 619.861 1127.43 618.223 1128.46 617.663C1129.76 617.117 1131.57 617.663 1132.6 617.117C1134.41 616.025 1135.97 612.735 1137.01 610.537C1139.34 604.516 1135.45 606.98 1131.31 606.98" fill="#223E44" />
                        <path d="M1016.89 298.312C1014.16 297.619 1010.54 296.674 1010.41 300.51C1010.27 303.787 1012.62 305.305 1015.6 305.305C1017.15 305.305 1019.99 303.787 1020.39 302.015C1020.89 300.11 1018.7 298.046 1017.02 298.459" fill="#223E44" />
                        <path d="M1050.28 155.793C1048.57 154.688 1047.18 151.411 1045.1 149.946C1041.99 148.107 1038.89 148.48 1036.12 147.388C1030.94 145.563 1029.9 144.098 1027.5 139.356C1023.7 132.775 1020.6 131.683 1013.69 130.231C1010.23 129.498 1003.34 124.756 1000.24 126.568C995.406 129.498 1002.99 135.706 1003.34 139.356C1004.03 149.946 994.367 143.738 992.637 149.213C988.844 160.536 1016.1 151.051 1011.27 162.001C1009.89 165.291 1001.61 164.918 998.507 166.024C997.469 166.397 997.469 168.208 996.084 168.568C995.046 168.928 994.008 167.476 992.97 167.835C990.548 168.568 989.177 166.743 988.138 170.02C987.446 172.218 990.894 173.67 989.855 176.6C989.509 178.052 985.37 180.983 983.999 182.075C981.231 183.527 979.846 183.167 976.745 183.887C975.015 184.619 973.298 186.444 971.914 186.817C967.415 187.91 961.545 186.444 957.06 185.352C950.844 183.887 940.156 184.979 934.633 182.075C928.763 178.785 928.417 172.204 920.138 170.739C913.59 169.634 908.745 171.845 905.298 164.159C904.606 162.334 905.298 160.149 903.914 158.311C902.516 156.486 898.044 155.034 895.968 154.288C893.213 153.196 891.469 152.103 889.06 151.011C886.637 149.906 886.637 147.348 883.204 149.173L883.057 149.2C884.348 152.357 884.388 156.686 882.511 158.671C879.756 162.334 875.258 158.311 872.502 163.786C871.464 166.357 873.195 167.076 871.118 168.901C869.388 171.099 866.966 168.168 865.927 172.191C862.826 180.597 875.59 178.039 869.375 184.606C865.581 188.629 859.019 187.177 855.24 191.187C853.842 192.652 853.163 194.836 852.125 196.302C850.408 197.767 848.332 195.929 847.986 199.219C847.626 205.067 855.24 202.15 857.289 205.067C859.006 207.971 857.915 209.516 856.038 210.435L856.943 210.182C862.121 209.822 862.813 214.205 865.568 217.495C866.074 218.028 866.792 218.374 867.471 218.681L867.977 218.214C873.155 214.551 875.923 222.237 876.948 226.247C878.332 231.362 876.948 235.744 880.395 239.048C883.856 242.711 885.865 242.298 887.037 245.908C893.984 238.835 910.116 256.938 919.393 256.938C919.393 256.938 919.646 256.951 919.979 257.004C921.083 256.059 922.148 256.312 923.213 257.098L923.665 256.525C927.366 251.982 932.383 254.886 936.842 257.577L937.042 257.684C937.934 255.992 938.692 254.22 939.77 252.928C942.885 249.292 949.087 247.453 953.227 250.384L955.596 254.34H956.022C960.361 254.42 965.685 258.456 966.004 262.799C966.337 267.554 961.173 269.02 961.173 273.389C961.519 277.412 967.388 278.864 969.797 282.167C971.182 283.619 971.514 285.457 972.899 287.282C974.097 288.228 977.357 288.348 977.996 290.266L978.422 289.853C980.858 287.562 981.39 285.044 983.813 285.284L983.946 285.098C986.009 279.983 991.2 283.259 994.301 284.738C994.647 281.448 997.056 278.144 1000.86 280.715C1003.96 282.527 1001.55 286.923 1004.66 289.107L1005.11 289.467C1005.11 289.467 1005.2 289.414 1005.24 289.4C1008.22 287.882 1011.9 288.468 1014.65 290.599C1016.02 291.332 1014.98 296.447 1019.48 294.609C1020.52 294.236 1020.52 290.24 1022.24 289.121C1023.62 288.028 1026.03 288.761 1027.42 288.028C1030.18 286.936 1031.22 284.005 1034.32 283.646H1033.62C1050.53 280.742 1054 259.922 1055.02 245.295C1048.47 244.936 1053.64 241.632 1053.3 238.369C1052.94 235.798 1047.09 229.963 1045.36 227.779C1043.64 225.581 1038.1 220.825 1037.42 218.281C1036.73 213.898 1042.6 210.968 1045.01 208.41C1041.55 204.747 1036.39 209.13 1032.23 207.678C1030.52 206.945 1023.61 201.457 1023.61 199.632C1023.61 197.088 1032.59 189.775 1035 190.134C1040.53 191.24 1034.31 198.54 1039.14 200.365C1042.28 201.55 1044.05 198.633 1045.96 197.021L1046.06 196.342C1045.7 191.227 1051.93 190.121 1054.69 187.936C1056.76 186.111 1057.44 185.006 1059.52 183.913C1061.24 182.821 1064.35 183.181 1065.04 180.623C1066.43 176.241 1059.87 174.402 1061.25 169.287C1062.63 166.01 1066.77 165.637 1067.47 160.895C1069.54 146.642 1055.74 158.697 1050.22 155.78L1050.28 155.793Z" fill="#223E44" />
                        <path d="M1057.9 206.292C1058.97 206.852 1059.97 207.438 1060.97 209.13C1063.39 213.153 1062.01 216.802 1063.39 220.452C1064.43 223.742 1063.73 223.742 1067.53 223.742C1068.22 223.742 1073.07 221.904 1073.75 221.545C1082.37 214.644 1071.8 208.77 1065.4 203.149C1065.4 203.149 1061.54 201.896 1060.04 203.362C1058.53 204.827 1057.9 206.279 1057.9 206.279V206.292Z" fill="#223E44" />
                        <path d="M1109.31 188.855C1106.72 188.576 1106.58 191.599 1107.37 193.371C1108.54 195.969 1109.83 197.074 1109.83 200.085C1109.83 202.562 1109.96 205.706 1108.41 207.891C1106.86 210.222 1103.61 210.502 1102.19 212.966C1100.65 215.857 1102.07 216.389 1098.69 217.082C1096.23 217.642 1094.42 217.921 1091.82 218.041C1088.72 218.174 1086.78 220.093 1086.14 223.25C1086.01 224.089 1086.39 225.727 1085.87 226.407C1085.22 227.632 1084.45 226.673 1083.54 227.219C1081.72 228.178 1081.21 230.922 1082.11 232.827C1083.4 235.305 1086.13 235.305 1087.42 237.889C1088.45 240.367 1090.26 242.005 1091.81 238.449C1093.1 235.571 1090.9 230.909 1094.79 229.55C1095.83 229.137 1096.99 229.683 1098.02 229.137C1099.58 228.178 1099.32 226.66 1100.22 225.288C1102.43 221.731 1103.97 225.434 1106.44 225.967C1107.74 226.247 1108.51 225.701 1109.55 225.021C1111.88 223.503 1113.81 222.277 1116.42 221.172C1118.75 220.359 1120.04 219.12 1120.17 216.243C1120.29 213.366 1119.52 210.075 1119 207.345C1118.6 205.973 1118.1 204.601 1117.84 203.228C1117.46 201.031 1117.98 198.846 1117.59 196.648C1117.07 193.638 1112.28 189.109 1109.31 188.576" fill="#223E44" />
                        <path d="M1107.89 171.459C1105.56 170.353 1100.5 166.663 1101.02 171.871C1101.27 174.336 1103.1 176.254 1101.15 178.319C1100.11 179.278 1098.69 178.732 1098.82 180.916C1098.96 182.834 1100.9 183.527 1102.19 184.486C1103.35 185.166 1104.4 186.258 1105.94 185.578C1106.85 185.019 1107.12 183.527 1108.02 183.114C1110.35 182.155 1112.03 185.579 1114.36 184.206C1115.13 183.647 1115.39 182.288 1116.17 181.596C1116.94 181.063 1118.11 181.183 1118.76 180.503C1120.44 179.131 1119.8 176.8 1118.5 175.308C1116.43 172.564 1114.74 173.936 1112.16 173.257C1110.74 172.844 1109.83 171.605 1108.27 171.472" fill="#223E44" />
                        <path d="M776.898 186.844C777.23 181.729 774.143 178.066 773.783 172.95C773.437 162.36 780.345 169.66 785.523 170.02C787.945 170.02 788.983 168.195 792.084 168.555C798.3 169.647 797.608 173.31 800.363 175.868C803.81 179.145 808.655 176.96 813.486 179.877C816.934 182.075 820.048 191.573 825.572 190.84C828.327 190.467 827.648 187.55 829.365 186.098C831.441 184.26 832.826 184.26 835.581 183.167C838.003 181.715 835.235 179.877 839.374 180.237C841.783 180.237 843.514 183.887 845.244 183.527C850.435 182.075 847.32 176.6 854.907 177.693C860.098 178.412 866.406 180.983 871.238 181.715" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M834.902 182.821C833.172 190.853 843.181 185.006 843.181 191.586C843.181 198.886 835.235 191.959 832.48 192.319C831.788 192.319 824.534 198.526 824.534 198.886C824.893 202.549 834.543 204.734 827.981 210.941" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M837.311 194.144C840.066 201.817 842.835 196.342 848.012 198.167" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M856.983 210.222C862.161 209.862 862.853 214.245 865.608 217.535C867.338 219.36 871.478 218.987 868.363 222.277C867.338 223.383 862.147 221.904 860.084 222.277C847.999 225.194 866.3 235.065 862.493 243.47C861.455 245.655 854.894 253.328 852.831 254.793C849.716 256.978 843.5 255.526 845.231 261.733C846.615 266.116 853.177 265.756 851.446 271.963C850.062 277.079 845.231 275.627 841.77 275.254" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M868.03 218.268C873.208 214.604 875.976 222.291 877.001 226.3C878.385 231.415 877.001 235.798 880.448 239.101C884.601 243.484 886.664 242.019 887.702 248.599C889.433 258.456 891.15 255.899 900.134 259.189C904.965 261.374 907.374 263.931 912.911 264.304C913.949 264.304 917.051 265.396 918.089 264.664C921.203 262.466 918.089 259.549 919.127 258.07C922.92 252.595 926.035 262.453 930.174 262.826C936.39 262.826 937.082 256.258 939.837 252.955C942.951 249.318 949.154 247.48 953.293 250.411L957.446 257.337C956.754 261.001 953.653 259.908 951.576 262.453C949.846 264.65 951.23 266.835 950.538 269.406C949.846 271.95 947.783 273.402 946.399 275.973C944.322 281.088 945.707 286.563 941.567 290.586" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M887.01 246.028C893.905 238.728 910.143 256.991 919.446 256.991" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M922.907 257.71C926.7 251.503 932.224 254.806 937.055 257.71" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M918.661 256.618C919.02 258.443 920.152 263.558 920.844 265.023C921.869 267.568 924.291 268.673 925.316 271.231C927.046 275.613 922.561 281.102 927.392 284.751" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M920.391 265.396C923.493 265.037 928.43 265.396 931.186 267.221C932.57 267.954 931.532 270.152 933.262 271.244C934.3 271.604 936.017 270.885 937.055 271.244C938.44 271.977 940.156 271.244 941.195 272.696C942.233 275.267 939.478 275.986 939.81 277.452C940.157 280.382 941.887 282.207 944.309 284.019" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M954.904 254.433C959.403 253.701 965.711 258.07 966.057 262.825C966.39 267.581 961.226 269.046 961.226 273.415C961.572 277.438 967.442 278.89 969.851 282.194C971.235 283.646 971.568 285.484 972.952 287.309C974.349 288.401 978.476 288.401 978.143 291.332C977.105 299.351 959.855 291.692 967.442 306.318C969.864 311.073 971.581 312.525 972.619 318C972.965 320.185 972.619 323.475 973.657 325.659C974.696 328.23 977.105 329.323 977.797 332.253" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M975.734 293.876C975.042 299.351 978.156 297.899 979.873 300.097C981.949 302.641 981.257 305.572 982.628 308.129C985.743 312.885 987.819 309.222 991.945 308.489C997.123 308.129 996.098 309.208 997.815 313.244C999.891 318.719 1006.79 324.207 999.199 325.3C996.444 325.659 993.675 323.475 991.266 325.3C989.19 327.138 989.19 331.893 988.152 334.078" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M978.489 289.88C981.603 286.949 981.603 283.646 986.435 286.217C990.228 288.401 987.819 290.24 989.536 293.516C991.612 296.807 995.073 296.447 996.79 299.724C997.828 302.295 996.79 304.839 998.52 307.41C1001.28 312.525 1007.84 313.258 1008.88 320.185C1009.91 325.659 1002.66 330.415 999.904 324.567" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M1008.17 324.567C1008.52 327.138 1010.93 329.682 1010.93 332.253C1010.93 336.276 1009.19 335.53 1006.77 337.728C1005.06 339.553 1004.36 341.365 1002.63 343.203C1000.56 344.655 998.494 342.111 997.802 346.107" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M984.012 285.124C986.075 280.009 991.266 283.286 994.368 284.765C994.714 281.474 997.123 278.171 1000.93 280.742C1004.03 282.553 1001.62 286.949 1004.72 289.134" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M883.23 149.213C886.677 147.388 886.678 149.946 889.087 151.051C891.496 152.143 893.239 153.236 895.994 154.328C898.071 155.061 902.543 156.526 903.94 158.351C905.325 160.189 904.632 162.374 905.325 164.199C908.772 171.885 913.617 169.674 920.165 170.779C928.457 172.244 928.79 178.812 934.66 182.115C940.183 185.032 950.884 183.927 957.087 185.392C961.572 186.498 967.442 187.95 971.94 186.857C973.325 186.484 975.042 184.646 976.772 183.927C979.873 183.194 981.244 183.567 984.026 182.115C985.41 181.01 989.549 178.092 989.882 176.64C990.92 173.71 987.46 172.258 988.165 170.06C989.203 166.783 990.574 168.595 992.997 167.875C994.035 167.516 995.073 168.968 996.111 168.608C997.495 168.248 997.495 166.423 998.533 166.064C1001.63 164.958 1009.93 165.331 1011.3 162.041C1016.13 151.091 988.87 160.589 992.664 149.253C994.381 143.765 1004.06 149.986 1003.36 139.396C1003.02 135.746 995.432 129.538 1000.26 126.608C1003.36 124.783 1010.26 129.538 1013.72 130.271C1020.63 131.723 1023.73 132.815 1027.52 139.396C1029.93 144.138 1030.97 145.603 1036.15 147.428C1038.92 148.52 1042.02 148.161 1045.13 149.986C1047.21 151.451 1048.58 154.741 1050.31 155.833C1055.83 158.751 1069.65 146.695 1067.56 160.949C1066.88 165.691 1062.73 166.064 1061.34 169.341C1059.96 174.456 1066.53 176.294 1065.14 180.677C1064.46 183.234 1061.34 182.874 1059.61 183.967C1057.54 185.059 1056.86 186.165 1054.78 187.99C1052.03 190.174 1045.8 191.28 1046.16 196.395" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M994.021 147.748C988.485 136.065 976.413 149.946 969.159 149.213C964.673 148.84 961.226 146.655 957.433 144.83C952.242 142.273 948.116 144.457 943.284 143.365C937.415 142.273 933.967 136.425 928.444 134.973C926.367 134.6 921.882 133.135 920.152 135.333C918.075 138.61 922.574 140.088 922.228 142.273C921.19 148.853 904.619 139.356 898.75 140.821C895.302 141.913 889.087 145.936 887.024 149.213" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M976.412 362.571C982.282 360.733 984.704 367.673 989.869 366.954" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M1023.7 388.88C1027.5 391.064 1029.23 395.087 1033.71 393.995C1035.44 393.249 1036.48 389.972 1038.89 389.612C1040.62 388.88 1043.37 391.064 1045.1 390.345C1050.63 387.055 1044.41 369.525 1056.5 377.93" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M1058.23 205.466C1059.27 202.922 1061.68 202.549 1064.1 202.922" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M1087.23 223.01C1090.66 224.102 1096.2 229.217 1096.2 229.217" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M745.487 161.281C743.41 156.166 737.554 155.807 735.478 151.784C733.055 147.028 737.195 140.461 741.001 145.936C745.487 142.646 741.347 137.158 748.601 136.798C753.073 136.438 759.981 139.356 764.134 140.088C766.197 140.448 766.889 141.913 768.952 141.913C771.72 142.273 774.475 140.088 777.231 140.821C780.345 141.553 780.691 143.365 784.138 142.646C788.624 141.913 789.662 140.461 786.215 136.798C785.177 135.346 782.421 137.517 781.383 134.613C781.729 134.986 782.075 127.66 782.075 128.033C782.528 125.649 781.649 124.663 782.248 123.757" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M782.129 123.97C782.129 123.97 768.233 95.5969 777.297 57.8726" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M782.248 123.744C782.568 123.264 783.286 122.811 784.844 122.172C788.291 120.72 791.059 123.637 794.161 123.997C800.722 124.729 804.17 122.531 809.001 119.614C813.14 117.416 813.833 116.324 817.639 119.241C819.702 121.066 819.702 122.891 822.817 124.729C825.572 126.554 828.686 127.647 832.134 126.914C837.311 125.822 835.235 123.997 840.412 126.914C845.244 129.112 845.603 131.669 849.037 134.96C851.113 137.144 854.907 139.342 857.675 140.075C860.43 141.167 861.122 139.702 864.224 139.702C867.684 139.702 869.747 142.259 872.848 143.711C874.925 144.817 878.026 144.817 880.435 145.909C883.882 147.734 885.267 155.767 882.511 158.684C879.756 162.347 875.258 158.324 872.502 163.799C871.464 166.37 873.195 167.089 871.118 168.914C869.388 171.112 866.965 168.182 865.927 172.204C862.826 180.61 875.59 178.052 869.375 184.619C865.581 188.642 859.019 187.19 855.239 191.2C853.842 192.665 853.163 194.85 852.125 196.315C850.408 197.78 848.332 195.942 847.986 199.232C847.626 205.08 855.24 202.163 857.289 205.08C860.75 210.928 852.817 211.288 850.035 212.034C847.294 212.34 845.829 212.766 844.991 213.645" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M766.556 183.554C771.374 176.627 773.797 185.752 776.911 187.577C783.46 191.227 783.127 182.461 786.92 180.996C791.752 179.531 793.828 186.844 796.583 188.669C798.66 190.121 801.415 189.761 803.837 191.599C806.259 193.051 807.284 195.982 809.707 197.447C812.528 199.752 819.902 202.682 820.208 207.305" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M803.731 214.871C803.651 214.778 803.558 214.698 803.478 214.604C800.363 211.314 796.224 208.037 791.738 205.826C788.637 204.734 783.806 204.374 781.397 204.734C777.244 205.093 777.244 206.199 773.797 208.757" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M820.195 207.305C820.221 207.771 820.195 208.264 820.062 208.77C819.702 209.489 815.909 212.06 815.23 213.152C813.846 215.337 816.255 216.429 813.5 218.268C809.187 220.719 805.833 217.109 803.744 214.871" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M820.062 207.305C824.201 206.572 825.239 210.581 828.687 210.941C833.159 211.314 832.826 207.664 835.94 205.093C845.949 197.434 841.797 211.301 845.257 213.872" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M845.031 213.672C843.86 214.897 843.926 216.989 843.527 220.812C842.489 229.95 833.531 235.425 829.379 243.47C826.956 248.213 827.316 249.678 821.446 248.586C819.37 248.213 817.653 246.388 815.576 246.388C813.5 246.388 811.424 248.586 809.361 248.959C809.361 253.714 816.614 255.526 817.293 259.921C817.985 263.571 813.154 265.037 812.116 269.792" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M812.169 269.513C814.884 270.179 817.666 271.244 820.035 271.244C825.891 271.244 831.428 266.129 837.298 270.152C840.399 272.696 840.745 277.811 843.513 281.475C844.552 282.567 845.59 282.567 846.615 283.659C846.974 284.778 846.282 286.59 846.615 287.322C848.345 290.253 849.037 291.705 852.152 292.078C858.367 293.17 853.869 289.147 858.021 287.322C862.52 285.138 862.161 290.253 862.161 293.53C862.161 296.807 860.444 300.483 860.776 303.76C861.109 308.143 864.224 309.608 865.954 313.631C868.03 317.294 866.313 321.317 868.03 325.313C869.415 329.336 872.862 331.547 874.246 335.903C876.655 342.857 879.423 348.331 882.525 354.898L882.192 353.806C885.293 358.921 889.086 351.595 891.163 349.051C895.302 343.936 893.239 343.935 893.585 336.995C893.931 331.88 894.969 326.405 895.315 321.29C895.662 315.056 899.455 313.604 903.594 309.581C907.041 305.945 912.219 303.014 914.987 298.618C918.435 293.503 917.743 291.692 922.92 288.028C926.035 285.844 931.904 281.821 936.044 284.005C939.158 285.484 937.428 286.576 938.799 288.761C940.529 291.332 941.567 292.424 943.99 294.609C948.129 298.632 949.846 302.282 951.243 308.129C951.922 311.793 950.884 318.719 955.716 318.719C960.214 318.719 959.868 309.941 963.662 311.42C965.725 312.512 967.455 322.383 968.493 324.927C972.286 332.973 974.017 340.632 973.671 349.77C973.671 354.152 972.632 357.456 974.363 361.452C976.426 365.475 980.578 369.138 982.987 373.521C985.05 377.517 986.435 383.005 989.536 386.295C993.329 390.678 998.161 393.236 997.828 386.655C997.482 382.632 996.444 375.692 995.405 372.042C993.689 366.927 988.152 365.835 984.704 361.812C976.412 353.42 975.734 347.945 977.118 336.622C978.156 329.669 979.873 330.029 985.05 332.959C990.92 336.249 991.958 337.715 994.713 342.817C995.406 344.268 997.482 346.093 998.161 347.199C998.52 348.291 999.199 353.407 999.891 353.766C1004.03 357.056 1006.44 350.476 1008.52 348.291C1011.96 343.909 1017.14 342.444 1018.18 336.609C1018.86 332.227 1017.82 323.808 1015.76 320.518C1011.27 312.858 994.687 302.628 1002.3 292.025C1005.4 287.642 1010.92 287.642 1014.72 290.573C1016.09 291.305 1015.05 296.42 1019.55 294.582C1020.59 294.209 1020.59 290.213 1022.3 289.094C1023.69 288.002 1026.1 288.721 1027.48 288.002C1030.25 286.909 1031.29 283.979 1034.39 283.619H1033.68C1050.6 280.715 1054.06 259.895 1055.09 245.269C1048.54 244.909 1053.7 241.606 1053.37 238.342C1053.01 235.771 1047.15 229.937 1045.42 227.752C1043.71 225.554 1038.17 220.799 1037.49 218.254C1036.8 213.872 1042.67 210.941 1045.08 208.384C1041.62 204.72 1036.45 209.103 1032.3 207.651C1030.58 206.918 1023.68 201.43 1023.68 199.605C1023.68 197.061 1032.66 189.748 1035.07 190.108C1040.59 191.213 1034.38 198.513 1039.21 200.338C1045.08 202.536 1046.12 190.481 1052.33 199.246C1054.05 201.444 1052.66 202.176 1055.43 204.72C1057.51 206.559 1059.24 206.186 1060.96 209.103C1063.38 213.126 1061.99 216.776 1063.38 220.426C1064.42 223.716 1063.71 223.716 1067.52 223.716C1068.21 223.716 1073.06 221.878 1073.73 221.518C1085.13 212.393 1063.03 205.08 1061.3 197.78C1060.62 193.025 1065.1 191.573 1065.46 186.817C1065.79 182.435 1062.69 175.854 1070.97 178.399C1073.39 179.131 1072.7 182.422 1076.14 182.062C1079.95 181.702 1079.24 180.224 1079.24 176.947C1079.58 174.749 1077.86 172.191 1078.21 169.634C1078.55 166.716 1079.94 164.891 1080.63 162.334C1081.67 158.311 1082.01 153.928 1082.7 149.546C1084.09 143.698 1082.37 143.338 1079.59 138.223C1076.14 132.748 1076.14 129.831 1069.58 127.633C1065.44 126.541 1061.65 127.633 1057.84 126.541C1055.09 125.808 1055.09 125.089 1053.01 123.983C1051.99 123.251 1048.87 121.786 1048.18 121.053C1045.42 119.228 1046.12 121.786 1045.42 117.763C1045.09 115.938 1046.12 112.288 1046.81 110.463C1048.54 106.813 1051.29 100.233 1055.09 98.7806C1056.82 98.0479 1060.62 98.4076 1062.67 98.7806C1064.75 99.1402 1067.5 101.325 1069.24 101.325C1071.99 101.325 1072.7 99.1402 1074.76 98.4076C1078.57 97.675 1079.26 100.233 1082.01 100.965C1084.09 101.698 1086.84 102.803 1089.27 101.698C1093.75 100.246 1091.34 100.606 1091.34 97.3153C1091.34 94.7577 1089.96 85.6197 1096.52 89.2829C1099.63 91.1078 1100.67 99.8729 1106.18 94.3981C1108.26 92.9328 1106.53 89.2829 1108.94 87.8176C1112.05 85.6197 1114.13 87.8176 1114.46 90.7348C1115.15 94.0251 1112.04 95.1174 1111.35 97.6883C1110.67 100.965 1112.39 102.803 1111.71 105.721C1111.01 108.651 1107.55 106.813 1107.91 110.836C1107.91 113.034 1111.35 115.591 1112.39 117.043C1115.83 121.799 1119.29 126.541 1123.43 130.564C1125.16 132.389 1133.1 141.154 1135.52 140.062C1138.98 138.596 1135.19 136.039 1135.19 134.587C1135.19 133.481 1134.84 132.748 1134.84 131.656C1135.19 129.831 1137.26 129.831 1137.59 128.739C1138.29 126.181 1136.9 124.716 1136.56 121.799C1136.56 121.066 1138.98 120.707 1138.98 118.509C1138.63 117.043 1136.56 115.951 1136.22 114.859C1135.19 112.661 1134.84 109.011 1133.11 107.546C1130.69 104.255 1127.93 106.08 1125.18 104.255C1119.65 100.233 1122.06 94.7577 1127.93 95.1174C1131.05 95.4904 1132.76 97.675 1135.88 97.675C1138.3 97.302 1141.4 95.1174 1143.46 94.3847H1143.13C1147.27 91.8271 1146.23 87.085 1151.76 85.9793C1155.9 85.2467 1162.1 87.085 1156.23 81.5968C1154.51 79.3989 1142.77 75.749 1150.37 71.7395C1154.51 69.5415 1162.79 76.8546 1166.93 77.2143C1168.31 77.5873 1171.41 78.3199 1172.45 77.2143C1175.21 74.2971 1171.76 73.9241 1171.08 71.7395C1167.97 64.7994 1166.58 66.2646 1160.04 64.7994C1150.37 62.2418 1140.02 61.8821 1130.69 58.2322C1119.99 54.5824 1102.04 48.0019 1090.65 51.2921C1091.34 52.7574 1092.38 54.942 1093.06 56.0476C1089.27 57.8726 1085.13 53.4901 1081.33 52.3978C1076.16 51.2921 1069.94 52.3978 1064.76 52.7574C1058.89 52.7574 1056.83 51.2921 1051.31 49.0942C1046.48 47.2693 1039.93 48.3616 1034.74 48.0019C1027.15 48.0019 1024.38 47.6289 1018.18 43.6194C1010.92 39.2369 1004.36 39.5965 996.43 39.5965C992.637 39.5965 986.421 38.5042 983.653 41.0618C980.552 43.6194 984.012 45.4443 979.181 46.5499C977.105 46.9229 973.99 45.4576 971.927 45.4576C967.442 45.4576 968.12 47.2826 964.673 48.3749C959.842 49.8269 957.073 45.8173 953.972 43.2597C948.102 38.5042 938.439 35.2273 930.839 35.587C928.084 35.9466 926.008 38.1446 922.561 38.5042C918.075 38.8639 913.59 35.9466 908.758 35.587C900.812 35.2273 891.842 40.3425 884.242 37.7716C885.28 33.3891 892.188 35.587 892.188 30.0988C892.188 25.7163 887.01 24.9837 883.896 25.3433H884.242C880.448 25.3433 876.988 26.8086 873.887 26.449C870.772 26.0893 866.3 24.251 863.532 23.1587C860.084 22.0664 857.675 19.5088 853.869 21.3338C850.435 22.7991 851.46 25.3567 849.037 26.8086C846.974 27.9009 844.206 27.5413 842.143 27.5413C837.99 27.5413 834.543 27.5413 830.749 28.6336C829.032 28.6336 826.277 29.3662 824.534 29.7392C820.394 31.2045 822.111 31.2045 819.702 33.3891C817.28 35.587 819.702 35.587 815.563 36.6793C813.833 37.0523 811.41 35.9466 809.693 36.6793C802.107 39.2369 810.731 39.9695 811.077 44.352C807.976 45.4443 788.291 39.9695 789.329 47.2826C789.689 48.3749 793.468 51.6651 794.52 52.3978C795.199 52.7574 794.161 54.5824 795.199 55.315C796.583 56.4073 798.659 55.688 799.697 56.4073C802.453 58.2322 802.12 56.7803 802.12 61.1628C802.12 62.9877 802.453 65.1723 801.428 66.6376C798.327 70.2875 790.727 68.4626 790.727 63.7204C790.727 61.1628 792.803 60.0705 792.457 57.1533C791.765 54.5957 788.304 50.9458 787.279 49.1075C784.165 44.3654 783.127 39.6098 776.911 39.9828C770.003 40.3558 767.94 44.725 772.772 49.8402C774.928 51.7983 781.743 57.2465 777.324 57.8726" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M755.016 158.99C751.223 158.99 748.841 159.683 745.979 162.107" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M897.924 351.475C893.652 351.608 895.329 358.602 895.063 361.346C894.943 363.264 894.171 364.769 895.462 366.274C896.62 367.646 898.43 368.326 899.854 367.793C901.025 367.38 902.969 365.462 903.741 364.503C905.418 362.731 905.032 361.226 904.007 359.174C902.849 356.697 900.892 351.622 897.924 351.368" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M984.132 386.682C981.67 384.497 979.474 382.725 977.53 379.981C976.239 378.183 975.321 375.719 973.91 374.08C972.1 371.762 962.783 369.698 961.226 372.708C959.15 376.971 966.789 379.702 968.866 381.353C971.847 383.818 975.734 387.641 976.758 391.624C977.783 395.46 975.601 397.645 978.183 401.215C981.031 404.918 984.012 408.195 986.461 412.297C988.924 416.414 991.892 421.076 995.512 424.086C996.936 425.312 1000.3 428.043 1002.51 427.363C1004.98 426.551 1005.23 423.527 1005.23 421.342C1005.23 418.199 1006.65 412.164 1004.98 409.553C1003.3 406.969 999.279 407.369 997.722 404.638C996.178 401.894 997.721 398.883 995.259 396.273C992.012 392.996 988.005 390.665 984.771 387.374C984.518 387.095 984.132 386.695 983.866 386.415" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1026.98 431.479C1024.51 431.066 1023.36 432.851 1020.89 432.851C1018.56 432.851 1015.6 430.653 1013.39 429.694C1011.18 428.735 1009.5 427.923 1007.3 429.161C1006.15 429.841 1003.68 431.759 1004.07 433.397C1004.72 435.862 1009.65 435.862 1011.44 436.967C1014.68 438.752 1016.49 438.193 1020.11 438.34C1023.09 438.473 1024.38 440.391 1026.98 441.35C1030.34 442.589 1034.48 442.043 1037.98 442.589C1039.93 442.869 1046.14 443.961 1045.24 440.124C1044.59 437.38 1040.7 438.473 1039.16 436.967C1038.25 436.142 1038.25 434.37 1037.34 433.544C1036.19 432.718 1034.24 432.438 1032.82 432.438C1031.13 432.438 1028.8 433.397 1027.51 431.479" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1057.4 368.739C1055.33 367.78 1053.65 365.035 1051.57 364.356C1048.47 363.264 1047.31 367.913 1046.02 370.111C1043.69 374.347 1039.02 375.306 1035.92 378.609C1033.59 380.794 1032.3 383.658 1029.84 385.869C1028.04 387.241 1026.6 388.613 1024.29 388.333C1021.31 387.921 1020.53 387.241 1019.1 390.665C1017.67 393.808 1017.29 398.058 1019.23 400.935C1020.4 402.587 1022.33 403.546 1023.24 405.171C1024.27 406.969 1023.62 408.741 1024.01 410.512C1024.65 414.629 1027.11 413.39 1029.69 414.349C1031.12 414.908 1032.02 416.4 1033.33 416.96C1035.27 417.772 1035.4 417.093 1036.83 416.4C1038.77 415.455 1039.67 415.867 1041.74 417.239C1043.95 418.731 1046.28 420.516 1048.72 418.465C1050.93 416.56 1050.4 412.577 1050.4 409.833C1050.4 406.543 1050.92 405.038 1053.38 403.119C1055.45 401.614 1055.98 400.935 1056.48 398.324C1056.75 396.495 1057.62 395.265 1059.08 394.634C1060.52 394.088 1060.77 394.501 1061.16 392.569C1061.54 390.944 1060.77 389.146 1060.12 387.521C1058.83 384.351 1055.73 380.528 1058.06 376.971C1059.36 375.186 1062.33 374.64 1062.07 371.762C1061.82 369.018 1059.36 369.698 1057.55 368.885" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1016.89 298.312C1014.16 297.619 1010.54 296.674 1010.41 300.51C1010.27 303.787 1012.62 305.305 1015.6 305.305C1017.15 305.305 1019.99 303.787 1020.39 302.015C1020.89 300.11 1018.7 298.046 1017.02 298.459" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1060.89 270.632C1057 269.819 1057.64 274.335 1056.1 276.386C1054.94 277.758 1053.12 277.478 1053.9 279.809C1054.29 281.182 1056.1 282.141 1057.02 283.379C1057.91 284.751 1058.69 286.243 1060.77 285.005C1062.7 283.912 1062.06 281.048 1062.19 279.117C1062.45 275.414 1064 274.201 1061.41 271.031" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1109.31 188.855C1106.72 188.576 1106.58 191.599 1107.37 193.371C1108.54 195.969 1109.83 197.074 1109.83 200.085C1109.83 202.562 1109.96 205.706 1108.41 207.891C1106.86 210.222 1103.61 210.502 1102.19 212.966C1100.65 215.857 1102.07 216.389 1098.69 217.082C1096.23 217.642 1094.42 217.921 1091.82 218.041C1088.72 218.174 1086.78 220.093 1086.14 223.25C1086.01 224.089 1086.39 225.727 1085.87 226.407C1085.22 227.632 1084.45 226.673 1083.54 227.219C1081.72 228.178 1081.21 230.922 1082.11 232.827C1083.4 235.305 1086.13 235.305 1087.42 237.889C1088.45 240.367 1090.26 242.005 1091.81 238.449C1093.1 235.571 1090.9 230.909 1094.79 229.55C1095.83 229.137 1096.99 229.683 1098.02 229.137C1099.58 228.178 1099.32 226.66 1100.22 225.288C1102.43 221.731 1103.97 225.434 1106.44 225.967C1107.74 226.247 1108.51 225.701 1109.55 225.021C1111.88 223.503 1113.81 222.277 1116.42 221.172C1118.75 220.359 1120.04 219.12 1120.17 216.243C1120.29 213.366 1119.52 210.075 1119 207.345C1118.6 205.973 1118.1 204.601 1117.84 203.228C1117.46 201.031 1117.98 198.846 1117.59 196.648C1117.07 193.638 1112.28 189.109 1109.31 188.576" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1107.89 171.459C1105.56 170.353 1100.5 166.663 1101.02 171.871C1101.27 174.336 1103.1 176.254 1101.15 178.319C1100.11 179.278 1098.69 178.732 1098.82 180.916C1098.96 182.834 1100.9 183.527 1102.19 184.486C1103.35 185.166 1104.4 186.258 1105.94 185.578C1106.85 185.019 1107.12 183.527 1108.02 183.114C1110.35 182.155 1112.03 185.579 1114.36 184.206C1115.13 183.647 1115.39 182.288 1116.17 181.596C1116.94 181.063 1118.11 181.183 1118.76 180.503C1120.44 179.131 1119.8 176.8 1118.5 175.308C1116.43 172.564 1114.74 173.936 1112.16 173.257C1110.74 172.844 1109.83 171.605 1108.27 171.472" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1085.61 131.869C1084.57 130.91 1078.49 124.476 1077.46 127.62C1077.07 129.125 1079.92 131.043 1080.83 131.869C1081.99 133.095 1082.65 134.054 1083.56 135.706C1085.37 139.129 1086.27 141.873 1086.66 145.563C1087.04 149.12 1089.89 150.905 1091.32 153.915C1092.47 156.659 1093.13 160.762 1095.72 162.547C1098.18 164.185 1099.86 163.093 1099.99 160.216C1100.11 156.792 1097.67 156.1 1096.49 153.502C1095.59 151.171 1096.75 148.427 1095.72 146.242C1094.68 143.911 1091.58 143.498 1090.28 141.447C1089.11 139.662 1089.76 137.464 1088.99 135.546C1088.35 134.174 1086.78 132.535 1085.62 131.709" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1153.82 411.338C1160.3 413.816 1166.77 412.164 1171.68 418.199C1174.01 421.476 1174.28 424.779 1178.16 426.684C1180.23 427.79 1180.33 427.43 1182.82 429.162C1186.89 431.999 1183.53 437.194 1182.05 437.194L1181.78 437.101C1183.91 439.778 1198.1 450.794 1193.18 452.726C1191.89 453.259 1190.33 451.074 1189.02 450.794C1187.48 450.794 1186.43 452.167 1185.4 451.887C1181.52 451.887 1179.72 448.33 1177.9 445.04C1176.09 441.763 1174.8 437.647 1170.14 437.913C1165.23 438.473 1164.69 444.76 1160.82 446.132C1159.78 446.412 1155.91 446.412 1154.86 446.132C1152.79 445.32 1153.06 443.668 1151.76 442.576C1147.6 438.739 1144.25 444.494 1140.88 442.576C1136.22 439.832 1143.46 437.101 1144.25 435.169C1146.06 430.787 1141.65 427.79 1139.06 425.858C1135.17 422.834 1132.07 421.476 1127.67 420.104C1124.05 419.291 1120.16 421.196 1119.12 417.639C1117.58 411.885 1122.74 413.803 1124.03 411.605C1125.84 408.328 1117.56 410.233 1115.75 408.048C1110.58 402.573 1122.22 398.178 1126.11 402.294C1130.77 407.222 1125.34 422.834 1135.43 411.072C1142.16 403.666 1146.3 406.69 1153.55 411.072" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1159.01 455.736C1153.31 458.734 1152.28 471.628 1150.72 477.383C1149.93 480.939 1148.64 485.881 1145.02 486.694C1140.11 487.8 1137 482.578 1133.89 479.847C1131.05 477.383 1127.17 475.198 1128.98 470.536C1130.02 467.792 1134.93 465.061 1134.41 461.757C1133.64 457.655 1126.91 460.385 1124.06 459.573C1121.21 458.734 1118.88 454.911 1115.78 457.362C1114.74 458.201 1116.03 460.385 1115.01 461.211C1113.97 462.304 1112.94 461.211 1111.91 461.478C1108.54 462.317 1107.77 461.478 1105.44 465.594C1103.11 469.71 1102.32 479.021 1096.37 474.092C1094.04 472.188 1095.08 470.256 1091.72 469.71C1088.61 469.164 1086.29 471.628 1084.46 473.56C1082.65 475.464 1080.58 476.837 1078.78 478.488C1076.96 480.686 1076.7 483.697 1075.41 485.895C1068.68 479.581 1068.68 491.916 1064.79 496.298C1061.42 499.868 1059.87 500.414 1055.21 500.681C1050.03 500.96 1048.49 504.251 1043.83 504.797C1036.84 505.356 1035.53 503.984 1032.95 510.831C1031.66 514.388 1028.55 517.132 1027.26 520.702C1026.74 522.886 1027.51 524.818 1027.26 527.002C1026.74 529.2 1025.97 529.747 1024.93 531.665C1022.08 536.593 1024.42 537.965 1025.45 543.44C1025.96 547.01 1025.18 550.833 1025.7 554.403C1025.95 556.868 1028.28 560.424 1027.78 563.168C1026.74 567.271 1020.52 566.738 1020 572.213C1019.23 583.442 1037.08 572.479 1041.24 572.759C1045.12 573.039 1048.5 574.957 1052.37 573.585C1057.03 572.213 1059.37 568.643 1064.54 567.551C1075.41 565.086 1083.42 553.577 1095.34 560.984C1096.89 562.076 1100.25 564.54 1101.55 565.912C1103.88 568.11 1102.59 568.923 1103.12 571.667C1105.19 580.432 1108.81 570.295 1113.21 573.039C1114.5 574.131 1115.29 582.91 1115.81 584.828C1116.59 589.756 1113.48 593.313 1118.92 594.965C1121.25 595.511 1124.6 595.231 1126.95 595.511C1127.72 595.511 1129.02 596.337 1129.8 596.057C1130.82 595.791 1131.34 594.139 1131.86 594.139C1135.74 593.313 1138.86 596.337 1142.99 594.139C1144.81 593.313 1145.83 591.954 1147.91 591.395C1150.51 590.849 1152.05 591.941 1154.64 590.569C1161.38 587.279 1157.49 581.804 1162.15 577.421C1163.97 575.503 1167.85 574.677 1169.14 572.226C1170.18 569.749 1168.62 568.39 1170.68 565.912C1174.3 561.263 1177.67 561.796 1179.75 556.055C1183.1 546.464 1190.62 541.256 1190.09 529.747C1189.84 522.9 1185.95 522.087 1183.62 516.599C1182.83 514.947 1183.37 512.763 1182.58 511.391C1181.29 508.646 1179.73 508.646 1178.44 505.37C1177.92 503.451 1177.92 500.987 1176.89 499.056C1175.59 496.871 1173 495.499 1171.45 493.581C1167.83 489.465 1169.13 484.549 1168.61 479.061C1168.34 477.409 1168.61 473.307 1167.57 471.655C1166.28 469.47 1163.16 469.737 1161.87 467.539C1160.06 464.528 1163.16 456.309 1160.06 455.483" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1130.53 606.7C1127.93 606.7 1126.39 603.956 1124.06 606.154C1122.77 607.526 1123.54 611.363 1123.02 613.281C1121.98 616.851 1117.84 623.698 1125.1 620.408C1126.39 619.861 1127.43 618.223 1128.46 617.663C1129.76 617.117 1131.57 617.663 1132.6 617.117C1134.41 616.025 1135.97 612.735 1137.01 610.537C1139.34 604.516 1135.45 606.98 1131.31 606.98" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1237.19 585.88C1233.57 584.788 1238.74 575.197 1233.05 574.917C1228.65 574.638 1231.23 586.973 1230.46 589.437C1228.9 594.645 1221.91 593.553 1220.61 597.936C1219.84 601.226 1222.94 600.68 1223.47 603.144C1223.72 605.062 1221.91 606.434 1221.91 608.352C1229.94 611.363 1229.94 600.4 1236.41 598.495C1239 597.669 1244.95 596.577 1244.18 591.915C1243.66 589.45 1241.07 589.996 1239.27 589.996C1239.27 588.345 1239.27 586.706 1237.98 585.894" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1213.9 607.247C1205.1 603.956 1203.53 615.465 1196.81 619.022C1192.66 621.22 1188.78 619.568 1184.39 622.579C1180.77 625.323 1176.87 627.787 1173.25 630.252C1168.86 632.716 1168.33 634.368 1173.52 634.914C1178.95 635.46 1181.28 634.914 1185.42 631.077C1187.24 629.426 1189.3 626.961 1191.38 625.869C1193.71 624.217 1194.75 624.777 1197.08 624.217C1200.95 623.405 1203.29 620.381 1206.91 618.463C1208.74 617.37 1221.67 608.326 1214.42 607.233" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1067.89 323.395C1068.66 317.361 1071.78 313.804 1069.44 308.582C1068.14 305.851 1068.65 304.746 1065.81 304.213C1062.97 303.654 1061.16 305.305 1060.64 307.49C1060.12 309.688 1061.93 311.872 1060.89 314.337C1059.85 317.347 1057.27 318.186 1058.81 321.743C1059.6 323.115 1064 327.218 1065.3 327.777C1067.89 328.59 1070.73 327.218 1068.14 324.207" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1084.97 391.064C1080.82 394.355 1075.38 391.064 1070.98 392.436C1068.13 393.529 1060.89 400.935 1067.36 399.843C1069.95 399.283 1070.47 396.273 1073.57 396.539C1077.19 396.819 1078.77 400.109 1082.89 398.471C1083.93 398.191 1087.3 395.727 1088.07 394.901C1089.36 392.716 1088.59 388.334 1085.49 390.785" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1068.14 412.977C1072.28 412.71 1069.95 420.929 1074.11 422.035C1080.58 423.94 1076.44 416.001 1075.65 413.816C1075.4 412.71 1074.87 409.966 1075.13 408.874C1075.65 407.236 1078.75 406.13 1078.23 404.225C1077.73 402.573 1074.61 402.853 1073.57 402.853C1071.51 402.853 1070.73 404.225 1068.14 402.853L1067.62 402.573C1064.27 402.014 1063.74 408.328 1062.71 410.513C1061.69 412.71 1059.87 412.71 1060.38 415.455C1060.65 416.547 1062.98 418.199 1063.5 419.824C1064.02 422.035 1063.5 431.333 1067.12 425.858C1069.2 422.568 1067.89 416.267 1068.16 412.977" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1090.65 350.503C1086.26 348.598 1088.07 352.421 1086.01 354.073C1083.93 355.711 1081.35 354.326 1079.02 354.885C1077.19 355.445 1071.76 358.721 1073.84 361.199C1075.9 363.663 1079.79 359.281 1082.64 362.824C1084.7 365.302 1083.14 367.486 1086.52 369.138C1089.89 371.056 1090.15 369.418 1091.18 366.394C1091.44 365.555 1092.22 362.558 1092.47 362.278C1092.74 360.347 1093.26 360.626 1092.99 358.442C1092.74 357.336 1091.7 355.151 1091.18 353.779C1090.93 352.128 1093.51 351.568 1090.93 350.476" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1090.65 439.832C1087.55 439.832 1085.74 446.132 1089.88 446.399C1093.77 446.678 1096.6 439.006 1090.92 439.832" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1095.32 413.816C1091.7 414.629 1090.93 417.093 1094.28 418.465C1098.94 420.383 1099.48 414.349 1096.11 413.536" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1082.64 446.412C1079.52 445.04 1076.17 450.794 1077.73 452.166C1081.09 454.364 1086.27 450.515 1083.16 446.971" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1079.02 342.563C1076.94 342.284 1070.99 350.503 1076.17 350.782C1080.06 350.782 1084.2 344.495 1079.02 342.284" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1076.94 326.938C1072.54 324.194 1072.28 330.775 1076.69 332.413C1083.16 335.157 1081.35 327.218 1077.21 327.498" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1054.16 441.204C1052.09 440.644 1050.02 441.484 1050.02 443.948C1049.76 447.238 1052.09 445.866 1053.9 445.866C1056.23 446.132 1057.78 447.771 1058.31 444.494C1058.56 441.75 1056.23 440.924 1053.9 441.204" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1200.94 420.663C1197.58 421.755 1196.8 425.591 1193.18 426.684C1190.59 427.523 1184.88 428.335 1190.59 430.533C1192.39 431.066 1198.61 431.346 1200.18 430.254C1202.51 428.322 1205.1 421.475 1201.2 420.663" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1066.32 331.334C1061.93 330.242 1062.7 334.891 1066.07 335.717C1070.47 336.809 1070.47 331.334 1066.59 331.334" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1084.7 335.996C1081.35 336.276 1082.37 340.112 1084.97 340.112C1087.55 339.833 1087.82 335.17 1084.7 335.45" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1100.23 391.877C1095.84 392.157 1098.44 397.365 1101.02 397.099C1104.64 396.539 1102.56 392.436 1100.5 391.624" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1065.81 442.576C1061.41 443.668 1064.78 449.422 1067.89 447.238C1070.74 445.586 1069.44 441.483 1066.07 442.296" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1233.05 490.251C1227.86 488.879 1228.13 496.005 1232.27 496.818C1236.14 497.63 1239 489.691 1233.31 490.251" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M774.183 208.397C774.582 206.452 774.396 204.254 773.53 202.136C771.987 198.58 767.448 198.033 766.024 194.743C764.6 191.453 767.847 191.853 769.777 192.279C772.892 192.825 774.05 191.32 772.492 188.163C770.948 185.152 767.967 183.913 764.986 183.101C761.232 181.995 757.865 180.21 755.402 176.787C753.725 174.602 752.554 170.073 756.308 169.127C758.251 168.714 759.928 170.353 762.004 169.261C764.067 168.035 763.934 165.291 763.295 163.093C762.39 160.229 758.504 158.711 755.669 158.857" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M265.001 490.424C273.28 490.424 271.563 509.432 275.023 514.548C276.061 516 278.47 515.64 279.163 518.57C279.855 521.847 278.816 522.22 277.446 524.045C276.061 525.87 273.998 525.497 272.96 527.695C271.576 530.253 272.614 533.183 272.96 535.741C273.293 544.506 269.167 556.934 273.293 564.967C276.061 570.082 280.893 570.082 279.855 577.382C279.509 580.299 277.778 582.497 277.446 585.054C276.407 588.704 277.1 590.902 277.446 594.925C278.124 598.575 277.099 604.423 278.124 607.713C279.163 611.003 282.61 611.363 283.994 614.28C284.686 616.105 282.956 618.663 283.994 620.128C285.032 621.953 288.493 621.233 289.531 623.058C291.94 626.708 288.493 631.091 288.839 634.754C289.172 638.044 291.248 642.054 291.953 645.344C292.991 650.099 294.362 651.192 296.785 655.574C298.848 658.864 297.81 661.782 302.295 662.514C306.088 663.247 308.857 658.132 311.958 662.155C311.958 662.155 314.66 668.935 319.758 671.093L322.832 672.745C324.376 673.571 327.757 672.745 326.452 676.035C325.667 677.673 323.87 676.861 322.313 676.861C318.693 677.141 316.364 676.581 314.287 673.304C312.996 671.666 312.743 668.655 310.92 667.55C308.072 665.911 307.819 668.655 306.008 669.201C301.35 671.12 299.021 668.922 296.425 664.819C293.843 660.703 289.451 656.32 288.147 651.938C287.109 648.381 286.842 645.357 285.285 641.521C281.399 633.302 282.437 619.049 275.196 613.294C273.373 611.922 273.12 613.028 271.829 610.55C270.538 608.366 270.538 604.796 270.285 602.331C269.752 598.215 266.917 594.659 266.665 590.542C266.132 586.426 268.475 582.59 268.475 577.941C268.475 572.733 268.222 567.804 267.437 562.862C266.412 555.189 267.956 547.25 267.184 539.844C266.412 532.997 263.816 526.696 264.082 519.569L264.602 519.303V515.733C264.602 512.176 264.349 508.607 264.349 505.05C264.096 502.306 264.602 497.644 263.83 494.913" fill="#510600" />
                        <path d="M207.09 348.318C204.561 349.41 205.107 356.35 206.877 358.082C207.875 359.055 209.099 359.734 210.457 360.094C215.382 361.199 219.255 351.595 222.356 354.086L221.837 353.526C224.419 355.711 225.723 360.933 226.748 363.943C228.039 367.22 228.039 369.964 227.787 373.534C227.534 379.009 227.001 382.566 223.128 386.136C221.318 387.508 220.333 388.347 219.255 389.972C218.842 390.585 219.082 390.691 219.082 390.691C223.913 391.424 224.605 396.899 229.424 397.631C231.5 397.991 233.217 395.447 235.985 396.899C238.741 398.364 238.048 399.829 239.419 402.014C242.88 406.396 245.289 407.129 250.12 408.954C252.543 410.06 254.952 410.779 256.336 412.964C257.72 414.802 256.696 416.986 258.745 418.811L259.051 419.158C259.051 418.172 258.186 417.346 258.399 415.521C259.091 410.766 262.192 407.475 260.808 402.001C259.424 397.245 255.977 393.609 262.525 390.678C266.332 388.853 272.188 391.77 270.804 384.83C270.458 382.632 267.357 381.167 267.011 378.263C266.665 376.065 268.382 373.881 268.382 371.669C268.382 365.462 266.319 366.554 260.795 365.821C253.208 364.729 242.494 356.324 246.301 346.453C250.453 336.609 249.748 350.116 251.824 351.209C258.386 355.591 253.541 343.19 254.579 342.097L253.994 342.244C253.634 342.23 253.248 342.151 252.849 341.991C253.102 340.898 255.95 338.154 254.659 336.796C253.874 335.703 250.52 337.888 249.734 338.168C246.114 340.099 240.67 340.632 237.822 342.83C234.202 345.574 235.493 353.233 231.606 354.326C227.986 355.431 228.758 352.141 227.201 350.769C225.391 349.397 223.847 349.397 221.251 349.956V350.489C217.884 348.838 215.302 353.233 211.682 352.407C208.82 351.568 209.086 350.489 207.023 348.305" fill="#510600" />
                        <path d="M361.138 522.58C367.101 514.628 379.266 520.662 384.696 512.723C387.026 509.153 388.064 504.237 389.621 500.388C391.444 496.272 394.279 491.636 394.546 486.96C394.546 480.393 389.621 470.523 393.002 464.488C394.04 462.583 395.85 461.744 397.394 460.372C399.989 457.628 399.47 455.99 400.761 452.713C402.585 447.771 407.749 446.399 408.534 440.924C409.053 437.634 408.787 432.985 408.268 429.694C408.015 428.043 407.496 425.592 406.458 424.22C404.382 421.476 404.382 422.848 401.547 422.568C397.141 422.035 395.85 419.571 392.216 416.827C387.824 413.816 384.71 412.711 379.532 412.164C377.975 411.885 376.418 411.605 374.874 411.338C373.05 411.072 371.759 411.338 370.215 411.338C366.076 410.792 367.367 409.7 365.038 407.222C363.214 405.318 359.594 403.386 357.265 402.853C353.644 402.294 353.378 404.225 350.543 404.492C350.29 402.853 350.29 400.935 349.252 399.563L348.999 398.737C346.404 395.727 344.594 397.365 343.556 392.716C343.303 391.344 343.808 389.692 343.556 388.613C342.784 386.962 340.96 386.962 340.454 385.323C339.989 384.071 340.042 382.766 340.108 381.433L340.268 379.755C334.412 383.032 334.052 393.262 325.774 389.612C323.365 388.52 324.043 384.497 319.558 385.59C317.495 386.322 318.187 388.52 316.803 389.253C315.765 389.612 314.38 389.253 313.702 389.612C294.362 402.027 310.254 373.175 298.502 372.069L298.156 372.442C296.079 380.847 289.531 375.732 285.032 377.184C278.816 379.395 287.108 385.23 283.994 391.078C281.918 394.368 278.124 396.925 274.331 394.368C271.909 392.889 272.947 389.253 269.5 387.774C269.5 387.774 270.072 389.199 269.047 389.612C267.33 390.305 264.628 389.732 262.592 390.705C256.03 393.635 259.491 397.272 260.875 402.027C262.259 407.502 259.158 410.806 258.466 415.548C258.12 418.465 260.542 418.825 257.774 421.396C256.389 422.848 252.942 421.396 250.866 422.488C243.279 426.151 242.574 445.506 251.545 449.156C254.313 450.262 255.351 446.612 258.106 448.423C260.169 449.516 258.785 452.446 260.515 454.271C266.385 459.746 270.178 450.994 275.01 449.889C281.904 448.437 280.52 457.934 283.635 460.852C286.736 464.142 292.605 461.225 296.053 464.142C298.129 466.34 297.437 468.524 299.167 470.349C301.23 472.92 302.96 473.28 304.345 475.824C304.691 476.557 303.653 478.755 303.999 479.487C305.024 481.312 306.408 480.953 308.138 482.418C311.585 485.335 316.43 487.533 316.084 493.381C315.725 498.856 311.599 498.856 315.046 504.704C316.763 507.621 319.518 509.086 321.262 511.644C323.338 514.215 323.684 517.132 326.439 518.957C330.938 521.501 338.178 518.224 336.102 526.616C336.102 528.081 333.347 528.441 332.988 529.906C332.641 531.358 334.372 532.091 334.372 533.183C334.372 536.114 336.089 537.926 334.372 540.856C331.603 544.879 325.055 544.146 325.734 551.086C326.426 557.294 333.334 555.469 337.46 559.119C338.498 560.224 337.806 561.676 339.536 563.142C340.907 564.234 342.637 564.234 344.367 564.234C344.367 564.234 345.685 564.394 347.016 559.891C348.36 555.376 350.996 550.727 354.736 546.171C358.476 541.615 358.569 536.953 357.597 531.598C356.626 526.243 361.098 522.593 361.098 522.593L361.138 522.58Z" fill="#510600" />
                        <path d="M301.59 159.816C297.783 157.259 297.104 161.641 295.374 163.466C290.196 168.581 287.095 170.406 280.187 168.941C276.74 168.208 274.664 167.489 271.895 170.033C269.14 172.231 270.178 175.148 266.385 175.881C259.477 176.973 259.81 171.499 256.722 180.264L256.416 180.49C257.108 180.836 256.842 181.689 254.739 183.381H254.992C252.929 187.217 244.637 189.402 240.764 188.589C238.168 188.03 236.105 186.658 236.624 183.647C237.143 180.903 240.245 180.903 241.283 178.452C243.359 174.895 242.321 167.223 237.396 168.315C233.776 169.154 228.851 176.001 227.041 179.011C225.497 181.196 221.864 189.135 219.534 183.128C217.99 179.558 223.155 175.442 224.459 172.711C226.788 168.328 226.535 166.956 231.194 165.318C235.067 163.946 238.954 161.481 232.738 159.843C228.332 158.471 224.193 161.215 219.787 161.761C212.533 162.587 215.129 159.017 219.534 156.566C221.305 155.687 223.075 155.274 224.845 154.861L223.248 153.622C220.839 149.24 218.762 152.53 215.661 152.53C214.277 152.53 213.252 153.622 211.868 152.89C210.138 152.53 210.484 149.613 209.446 149.24C204.614 147.042 193.567 148.507 188.389 148.507C160.093 148.88 131.09 153.622 103.126 149.972L103.033 149.906C103.126 151.238 102.94 152.303 102.261 152.716C99.413 154.088 98.6411 145.044 97.0838 143.951C93.4635 141.767 91.3872 145.603 92.9444 148.614C94.7546 152.73 97.6029 151.89 95.5265 157.379C93.9826 160.949 91.6534 165.065 89.577 168.342C86.9949 173.004 82.8423 174.376 79.7411 178.199C76.3737 182.035 79.222 186.698 77.1589 190.8C75.8679 193.811 71.2094 194.37 70.6771 198.207C70.4242 200.671 72.7534 205.333 73.5254 208.077C74.0444 210.821 74.2973 213.552 74.2973 216.296L74.0444 215.204C74.2973 217.668 73.2725 223.143 74.8297 224.795C75.8679 225.887 78.1971 225.607 79.222 226.167C81.5512 227.819 81.2983 228.631 82.3365 230.816C82.6027 231.628 82.9088 232.401 83.2282 233.174C90.8015 223.583 100.079 239.514 107.625 241.326C114.879 242.791 123.504 227.446 129.374 241.326C131.09 244.989 127.643 251.556 133.513 252.649C138.344 253.767 138.344 244.629 143.522 246.081C151.814 248.652 141.805 263.611 154.223 265.809L155.913 265.769C156.406 262.293 156.699 259.895 159.76 257.124C162.608 254.38 166.228 252.196 169.343 250.264C174.521 246.707 177.103 248.892 182.799 249.452C185.395 249.731 189.015 250.264 191.344 248.359C192.888 246.987 192.116 245.615 194.192 244.523C196.016 243.417 204.548 243.151 206.89 244.256C208.953 245.069 209.738 247.001 211.535 247.533C213.359 248.093 213.864 246.441 215.941 248.373C220.599 252.475 214.131 268.913 222.928 269.473C231.22 270.005 227.853 253.022 226.802 248.905C223.687 236.85 230.688 231.375 240.79 227.259C245.183 225.341 249.854 223.143 252.689 219.04C256.057 214.112 255.271 211.368 256.31 206.159C257.601 200.405 260.196 205.067 263.816 202.043C267.437 199.033 270.032 194.104 272.88 190.534L273.133 189.988C275.982 186.698 278.577 189.162 282.197 188.336C286.589 186.964 285.046 183.141 286.856 179.291C289.185 174.642 292.552 174.909 296.705 173.537C299.087 172.644 301.124 171.272 303.347 170.127V168.235C303.001 165.677 303.693 161.295 301.63 159.843L301.59 159.816Z" fill="#510600" />
                        <path d="M135.563 53.863C127.963 61.5358 118.992 68.1162 111.392 75.416C107.599 79.0792 103.446 81.6235 99.3067 84.554C96.8843 86.379 93.7831 87.8442 92.3988 90.4018C89.2977 95.1573 91.7067 91.4941 93.091 94.7843C96.5382 103.19 95.8461 98.4342 102.062 96.969C108.97 95.5037 106.893 100.992 105.176 105.374C104.138 107.559 103.1 108.292 103.1 111.222C103.446 113.42 106.561 115.245 106.214 117.803C105.855 120.36 97.9224 124.743 95.8594 125.116" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M103.1 149.945C131.064 153.595 160.053 148.84 188.363 148.48C193.554 148.48 204.587 147.028 209.419 149.213C210.457 149.586 210.098 152.503 211.841 152.863C213.226 153.595 214.25 152.503 215.635 152.503C218.736 152.503 220.812 149.213 223.221 153.595" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M303.307 168.208C302.961 165.651 303.653 161.268 301.59 159.816C297.783 157.259 297.104 161.641 295.374 163.466C290.196 168.581 287.095 170.406 280.187 168.941C276.74 168.208 274.664 167.489 271.895 170.033C269.14 172.231 270.178 175.148 266.385 175.881C259.477 176.973 259.81 171.498 256.722 180.264" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M299.167 159.443C299.167 156.886 299.167 154.328 301.23 153.236" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M83.0952 233.254C90.6818 223.383 100.012 239.461 107.599 241.273C114.853 242.738 123.477 227.393 129.347 241.273C131.064 244.936 127.617 251.503 133.486 252.595C138.318 253.714 138.318 244.576 143.495 246.028C151.787 248.599 141.778 263.558 154.196 265.756" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M167.999 320.185C170.062 316.908 174.561 317.267 175.585 315.429C177.302 312.885 173.855 310.7 176.624 308.129C177.302 307.77 181.096 308.129 182.493 307.77C184.556 307.05 185.594 304.839 187.671 304.479" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M185.262 318.719C183.531 325.659 176.97 322.009 174.561 327.498" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M180.776 324.207C184.929 323.488 184.929 328.59 186.3 331.521" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M188.722 333.705C188.722 328.59 190.106 327.858 193.9 326.046C194.938 325.66 197.693 324.94 198.731 324.567C200.448 324.208 202.178 323.115 203.563 322.742" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M196.309 342.843C198.026 342.484 199.41 342.111 201.14 342.111" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M206.318 349.41C204.242 351.595 205.28 353.793 206.318 355.977" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M231.167 353.433C232.552 357.816 229.783 360 226.336 361.093" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M254.646 342.111C253.608 343.203 258.439 355.618 251.891 351.222C249.815 350.13 250.52 336.622 246.367 346.467C242.574 356.337 253.275 364.743 260.862 365.835C266.385 366.567 268.448 365.475 268.448 371.683C268.448 373.894 266.731 376.065 267.077 378.276C267.423 381.194 270.525 382.646 270.871 384.844C272.255 391.77 266.399 388.866 262.592 390.691C256.03 393.622 259.491 397.258 260.875 402.014C262.259 407.489 259.158 410.792 258.466 415.535C258.12 418.452 260.542 418.811 257.774 421.382C256.39 422.834 252.942 421.382 250.866 422.475C243.279 426.138 242.574 445.493 251.545 449.143C254.313 450.248 255.351 446.599 258.107 448.41C260.17 449.502 258.785 452.433 260.516 454.258C266.385 459.733 270.179 450.981 275.01 449.875C281.905 448.423 280.52 457.921 283.635 460.838C286.736 464.129 292.606 461.211 296.053 464.129C298.129 466.327 297.437 468.511 299.167 470.336C301.23 472.907 302.961 473.267 304.345 475.811C304.691 476.544 303.653 478.741 303.999 479.474C305.024 481.299 306.408 480.939 308.138 482.405C311.586 485.322 316.43 487.52 316.084 493.368C315.725 498.842 311.599 498.842 315.046 504.69C316.763 507.607 319.518 509.073 321.262 511.63C323.338 514.201 323.684 517.118 326.439 518.943C330.938 521.488 338.179 518.211 336.102 526.603C336.102 528.068 333.347 528.428 332.988 529.893C332.642 531.345 334.372 532.078 334.372 533.17C334.372 536.101 336.089 537.912 334.372 540.843C331.604 544.866 325.055 544.133 325.734 551.073C326.426 557.281 333.334 555.456 337.46 559.105C338.498 560.211 337.806 561.663 339.536 563.128C340.907 564.221 342.637 564.221 344.368 564.221" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M219.095 390.691C223.927 391.424 224.619 396.899 229.437 397.631C231.513 397.991 233.23 395.447 235.999 396.899C238.754 398.364 238.062 399.829 239.433 402.014C242.893 406.396 245.302 407.129 250.134 408.954C252.556 410.06 254.965 410.779 256.349 412.964C257.734 414.802 256.709 416.986 258.759 418.811" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M235.307 397.991C235.653 401.654 237.024 408.954 234.268 411.512C231.859 414.069 227.015 412.604 224.606 415.534C222.889 417.719 224.259 423.926 221.145 424.659C217.006 426.124 216.313 418.811 213.558 418.079" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M269.473 387.761C272.934 389.239 271.896 392.876 274.305 394.354C278.098 396.899 281.891 394.354 283.968 391.064C287.082 385.216 278.79 379.382 285.006 377.171C289.504 375.719 296.053 380.834 298.129 372.429C298.808 369.152 296.745 368.059 298.129 364.396C299.513 360.733 302.601 360.014 302.601 355.618" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M298.475 372.056C310.215 373.174 294.336 402.014 313.675 389.599C314.354 389.239 315.738 389.599 316.776 389.239C318.161 388.507 317.468 386.309 319.532 385.576C324.03 384.484 323.338 388.507 325.747 389.599C334.026 393.235 334.385 383.018 340.242 379.742" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M328.17 368.779C321.954 373.534 327.823 381.194 323.684 387.041" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M313.316 366.94C313.316 370.963 308.484 374.626 309.522 378.649C310.561 381.194 313.316 380.834 314.354 383.765C314.7 384.857 314.354 387.401 314.354 388.507" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M264.309 455.736C265.001 459.013 267.064 461.584 267.064 465.221C267.064 469.244 264.988 472.174 264.309 476.184C263.271 483.124 271.217 489.331 262.579 491.529" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M265.001 490.424C273.28 490.424 271.563 509.432 275.023 514.547C276.061 515.999 278.471 515.64 279.163 518.57C279.855 521.847 278.817 522.22 277.446 524.045C276.061 525.87 273.998 525.497 272.96 527.695C271.576 530.253 272.614 533.183 272.96 535.741C273.293 544.506 269.167 556.934 273.293 564.966C276.061 570.082 280.893 570.082 279.855 577.381C279.509 580.299 277.778 582.497 277.446 585.054C276.408 588.704 277.1 590.902 277.446 594.925C278.124 598.575 277.1 604.423 278.124 607.713C279.163 611.003 282.61 611.363 283.994 614.28C284.686 616.105 282.956 618.662 283.994 620.128C285.032 621.953 288.493 621.233 289.531 623.058C291.94 626.708 288.493 631.091 288.839 634.754C289.172 638.044 291.248 642.054 291.953 645.344C292.992 650.099 294.363 651.192 296.785 655.574C298.848 658.864 297.81 661.782 302.295 662.514C306.088 663.247 308.857 658.132 311.958 662.155" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M327.131 549.981C325.401 551.433 321.608 550.713 320.57 552.525C319.185 555.083 322.3 558.373 322.979 560.571C324.363 564.953 321.262 573.718 326.439 574.451" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M277.432 516.359C278.471 513.442 279.495 508.7 283.302 508.7C285.711 509.059 288.133 514.175 290.556 514.548C290.556 511.257 293.657 509.073 296.772 510.525C299.527 511.977 298.835 515.999 300.911 518.197C305.396 522.58 315.751 519.303 318.866 525.87C320.929 530.626 314.367 536.1 320.583 539.391C328.529 543.4 328.875 531.345 333.36 531.345" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M313.675 499.202C308.484 492.262 305.729 495.539 300.898 499.562C294.682 504.677 297.104 503.944 297.437 511.617" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M257.055 298.259C258.439 302.641 253.94 302.282 254.632 306.304" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M362.429 521.754C357.504 526.416 357.504 526.683 358.276 533.809C359.314 541.762 356.985 544.772 351.808 549.981C348.44 553.817 347.668 556.828 346.63 561.756C346.098 563.954 344.807 565.046 344.301 566.139C343.782 567.511 343.516 568.603 343.01 569.975C341.972 573.265 343.529 573.265 339.39 574.637C335.769 576.289 333.946 574.917 330.845 574.637C323.591 573.812 328.768 577.381 330.579 581.484C331.883 584.508 332.642 589.437 330.579 592.167C327.211 597.096 323.338 594.632 319.185 594.912C312.97 595.178 315.818 599.014 315.818 603.397C315.565 609.151 314.527 607.513 310.64 607.233C304.425 606.687 307.02 609.977 310.64 612.162C315.565 615.452 312.184 614.906 310.893 619.555C310.374 621.193 311.412 623.391 310.893 624.763C310.121 626.682 308.045 626.682 307.007 628.32C303.906 632.436 306.488 634.075 309.855 636.259C319.438 642.014 309.349 645.304 309.083 654.069C309.083 657.905 310.121 657.626 311.931 660.37C313.222 662.021 313.475 663.94 314.514 665.858C316.59 669.414 319.425 671.066 322.806 672.705C324.35 673.531 327.73 672.705 326.426 675.995C325.641 677.633 323.844 676.821 322.286 676.821C318.666 677.101 316.337 676.541 314.261 673.264C312.97 671.626 312.717 668.615 310.893 667.51C308.045 665.871 307.792 668.615 305.982 669.161C301.323 671.08 298.994 668.882 296.399 664.779C293.817 660.663 289.424 656.28 288.12 651.898C287.082 648.341 286.816 645.317 285.258 641.481C281.372 633.262 282.41 619.009 275.17 613.254C273.346 611.882 273.093 612.988 271.802 610.51C270.511 608.326 270.511 604.756 270.258 602.291C269.726 598.175 266.891 594.619 266.638 590.502C266.106 586.386 268.448 582.55 268.448 577.901C268.448 572.693 268.195 567.764 267.41 562.822C266.385 555.149 267.929 547.21 267.157 539.804C266.385 532.957 263.79 526.656 264.056 519.529L264.575 519.263V515.693C264.575 512.136 264.322 508.567 264.322 505.01C264.069 502.266 264.575 497.604 263.803 494.873C262.778 491.862 258.106 489.118 255.777 486.654C251.624 482.005 247.232 482.818 242.574 479.807C233.244 473.52 232.738 459.266 225.484 451.594C221.078 446.945 220.825 441.736 217.458 436.515C214.876 432.132 211.509 433.771 210.737 428.296C210.484 426.924 209.951 423.913 210.218 422.541C210.484 418.438 210.484 420.636 213.066 418.172C214.876 416.534 215.914 417.892 215.395 414.602C215.395 414.602 213.066 412.417 212.8 411.578C209.432 405.291 212.533 398.444 216.686 394.048C217.205 393.222 218.496 393.489 219.268 392.396C219.774 391.837 219.015 390.478 219.268 389.932C220.306 388.28 221.345 387.468 223.141 386.096C227.028 382.526 227.547 378.969 227.8 373.494C228.053 369.924 228.053 367.18 226.762 363.903C225.724 360.893 224.432 355.671 221.85 353.486L222.369 354.046C219.268 351.568 215.395 361.173 210.47 360.054C206.318 358.961 203.989 354.299 200.887 352.114C197.267 349.37 193.367 348.811 194.672 343.083C195.177 341.151 198.292 341.711 195.963 338.98C194.672 337.608 192.595 338.98 191.304 338.141C188.19 335.956 190.013 333.226 185.861 331.854C181.974 330.482 178.354 330.202 174.481 328.004C172.937 327.471 170.594 326.632 169.556 325.54C168.012 323.888 169.037 322.795 168.265 321.157C165.683 317.054 160.492 316.242 155.847 317.321C150.922 318.693 149.112 318.413 143.682 316.775C138.504 314.87 134.099 314.59 129.959 310.474C126.339 306.917 118.566 304.719 117.022 300.07C115.465 295.954 119.085 294.036 118.832 289.92C118.579 286.35 115.212 281.981 113.655 278.957C111.325 274.574 107.439 271.83 105.363 267.448C103.805 263.891 103.552 260.041 101.223 256.485C98.894 252.382 98.3616 250.73 98.3616 246.348C98.3616 242.232 97.8425 237.583 92.4121 238.409L91.893 238.688C88.7785 239.221 89.0447 242.525 90.0695 244.709C90.8548 246.627 92.3987 247.187 93.184 249.372C93.4369 250.744 92.9311 252.395 93.184 254.034C93.9693 257.311 96.5514 259.775 97.5896 263.065C98.3616 266.076 98.0954 269.1 99.3997 272.123C100.185 274.308 105.096 280.875 100.185 280.875C96.5647 280.609 94.4884 274.028 93.9693 271.564C93.184 268.82 93.4502 267.728 91.3739 266.089C89.5637 264.437 85.9435 264.997 85.4244 261.427C85.1582 257.87 89.0447 255.419 86.9683 250.744C86.183 248.825 84.6391 249.651 84.12 246.907C83.8538 245.535 84.892 243.337 85.1449 241.965C85.664 237.849 83.5876 234.586 82.2966 230.736C81.2584 228.551 81.5113 227.739 79.1821 226.087C78.1572 225.527 75.828 225.807 74.7898 224.715C73.2459 223.063 74.2574 217.588 74.0045 215.124L74.2574 216.216C74.2574 213.472 74.0045 210.741 73.4855 207.997C72.7002 205.253 70.3709 200.591 70.6371 198.127C71.1562 194.29 75.828 193.744 77.119 190.72C79.1821 186.604 76.3338 181.955 79.7011 178.119C82.8023 174.283 86.955 172.924 89.5371 168.262C91.6135 164.985 93.9427 160.869 95.4866 157.299C97.563 151.824 94.7014 152.65 92.9045 148.534C91.3473 145.523 93.4103 141.687 97.0439 143.871C98.6011 144.964 99.3731 154.008 102.221 152.636C104.551 151.264 101.197 142.22 100.158 140.568C98.3349 137.291 94.4618 134.547 93.9427 130.71C93.6765 126.874 96.5248 123.051 97.0439 119.215C98.0821 109.89 93.4236 100.299 85.1316 97.2887C80.9922 95.9167 76.8528 94.8244 72.7002 93.4523C68.0417 91.8139 65.4463 94.0118 61.5731 96.4628C58.991 98.1146 54.3193 103.31 50.699 102.217C46.0405 100.566 52.2429 98.1013 54.3193 96.4628C57.6867 93.4523 56.9014 91.8006 52.5091 93.4523C48.1036 94.8244 45.2686 97.8348 41.3688 100.579C36.9765 103.869 31.2799 104.695 26.8744 108.518C22.2159 112.354 19.3676 113.18 13.6843 114.552C11.8741 115.099 1 121.133 1 116.471C1 114.552 8.75964 110.996 10.064 110.436C12.6594 109.064 19.3809 108.518 20.9382 106.054C24.8246 100.859 15.7606 104.961 13.9505 104.682C6.96281 102.764 16.2797 99.4866 13.9505 97.5551C11.8741 95.9167 5.40556 103.043 6.96281 95.3705C8.77295 84.1411 26.6348 83.8614 34.1415 80.8509C37.5089 79.4789 47.092 76.4684 38.2942 75.6425C34.1415 75.3628 30.2684 76.1886 26.3819 74.5502C26.901 72.3523 31.0403 69.6082 32.8505 68.7956C34.9268 67.7033 35.965 67.1439 38.5471 67.4236C40.8763 67.9697 42.1674 70.1677 43.4717 70.4341C45.2819 70.9802 52.2695 67.9697 52.2695 65.7718C52.2695 63.3075 45.2819 61.6557 47.092 58.3788C47.8773 56.727 58.2191 56.1809 60.5483 55.3683C64.9538 53.9963 69.6123 52.3578 73.7516 50.7061C77.891 49.0543 81.5113 49.0543 85.9169 49.0543C90.3224 48.7746 93.9427 47.4158 98.3349 46.8697L98.0821 46.59C102.221 46.3102 104.817 47.6823 108.437 49.0543C112.829 50.4263 117.754 50.1466 122.412 50.1466C125.261 50.1466 130.957 49.0543 133.806 50.1466C136.401 51.2389 134.844 52.6109 136.401 53.983C137.692 54.8089 141.326 55.355 142.617 55.9012C147.275 57.5396 148.833 55.9012 153.744 55.355C158.921 54.8089 160.998 53.1571 165.909 51.2389C169.276 50.1466 173.416 50.1466 177.036 50.413C181.175 50.6927 181.442 53.1571 184.543 54.2494C187.657 55.3417 192.316 54.2494 195.67 54.7955C197.999 55.0753 200.595 55.6214 202.658 56.4473C207.063 57.8193 207.063 61.1096 210.43 63.2942C220 68.769 229.583 56.7137 238.394 60.2837C240.205 61.1096 241.496 62.748 243.04 63.2942C245.901 64.1067 246.66 62.2019 249.002 61.6424C252.117 61.0962 255.484 62.4683 258.586 62.7347C261.7 62.7347 261.953 61.9221 264.535 61.3627C269.713 60.2704 271.27 62.1885 273.599 56.434C274.624 53.9697 274.105 53.1438 276.447 51.7717C277.738 51.2256 279.029 52.3179 280.321 51.2256C280.84 50.6794 280.573 49.0277 281.106 48.7612C283.169 46.5766 287.322 42.7403 288.613 47.9354C289.132 49.5871 287.322 51.2256 287.574 52.864C288.36 55.6081 290.423 54.5025 291.98 56.7004C294.309 59.9906 292.233 64.9193 298.196 60.5368C301.816 58.0724 302.588 56.9801 306.993 56.1542C310.361 55.6081 317.349 53.4102 313.728 59.4445C312.171 61.9088 305.183 67.6634 302.335 68.4759C298.449 69.5682 294.043 66.5577 290.423 67.9298C287.322 69.0221 284.739 73.4046 281.625 75.3228C277.486 77.5207 273.612 78.0669 269.713 80.5312C265.32 83.2753 262.459 85.1801 257.814 86.006C252.889 86.8319 251.332 90.3886 247.445 92.3067C245.635 93.1326 243.825 92.027 242.268 93.399C239.938 95.3172 240.977 97.7816 239.686 100.526L240.458 99.9795C239.938 100.805 239.686 101.352 239.419 102.177C245.382 103.549 241.496 106.56 241.496 110.942C244.344 112.035 246.407 109.024 248.483 109.024C251.332 109.304 251.065 111.768 252.889 113.407C255.205 115.591 259.877 118.882 262.991 119.694C265.839 120.254 273.08 117.789 272.042 123.264C271.27 127.38 263.763 127.38 266.611 133.947C267.902 136.691 272.827 138.61 275.409 136.971C278.524 135.04 278.777 129.565 279.296 126.288C281.372 115.059 290.423 121.626 296.652 114.779C300.272 110.663 296.386 108.198 295.347 104.642C292.752 96.969 299.753 100.259 302.082 97.7949C305.45 94.7844 301.829 88.4837 306.488 85.7396C309.083 84.0878 323.045 85.4599 324.336 86.5522C325.893 87.6445 329.527 93.9585 329.527 96.1431C329.261 99.1536 325.641 98.6074 329.008 101.352C330.046 101.898 332.628 101.898 333.666 101.618C338.072 101.072 341.958 95.8634 346.617 99.6997C349.199 102.164 348.161 107.093 348.161 110.929C348.161 116.95 349.199 116.684 353.338 119.961C355.934 122.159 359.82 125.995 359.82 129.552C360.073 138.876 348.946 138.05 344.035 141.34C338.338 145.177 336.781 144.084 330.831 143.259C326.173 142.992 323.325 143.805 319.172 144.897C315.299 145.989 311.412 144.617 307.792 145.723C305.716 146.549 297.956 151.477 301.057 154.208C302.348 155.314 325.92 144.617 322.286 153.116C321.248 155.86 314.261 157.232 316.843 161.894C318.666 165.184 324.616 162.44 325.907 165.731C327.717 170.393 320.982 170.393 318.653 171.205C315.285 172.031 311.918 177.786 308.032 176.147C301.563 172.857 311.399 171.765 312.437 170.393C316.577 165.731 308.537 167.649 306.993 168.461C303.12 169.554 300.272 172.031 296.652 173.403C292.499 174.775 289.132 174.496 286.802 179.158C284.992 182.994 286.55 186.831 282.144 188.203C278.524 189.015 275.928 186.551 273.08 189.855L272.827 190.401C269.979 193.971 267.383 198.899 263.763 201.91C260.143 204.92 257.547 200.258 256.256 206.026C255.218 211.234 256.003 213.978 252.636 218.907C249.788 223.01 245.129 225.194 240.737 227.126C230.635 231.242 223.647 236.717 226.748 248.759C227.787 252.875 231.154 269.859 222.875 269.326C214.077 268.767 220.546 252.329 215.888 248.226C213.811 246.294 213.305 247.946 211.482 247.387C209.672 246.854 208.9 244.922 206.837 244.11C204.508 243.004 195.963 243.271 194.139 244.376C192.063 245.469 192.848 246.841 191.291 248.213C188.962 250.118 185.341 249.585 182.746 249.305C177.049 248.745 174.467 246.561 169.29 250.118C166.175 252.049 162.555 254.234 159.707 256.978C156.086 260.268 156.339 262.999 155.554 267.674C154.782 272.057 151.681 275.067 150.643 279.183C149.352 284.672 152.2 287.669 153.504 292.611C154.795 296.993 153.504 301.109 157.897 303.84C160.758 305.212 166.441 306.584 169.303 305.492C172.138 304.653 176.557 302.468 178.101 299.458C179.911 295.888 178.607 292.051 182.759 289.867C184.569 288.774 192.342 287.402 193.633 289.867C194.925 292.051 191.304 297.526 190.519 299.737C189.481 303.294 182.759 313.431 184.556 316.988C186.38 320.558 192.848 316.988 195.177 316.708C197.254 316.162 199.836 316.162 201.646 316.988C204.761 318.36 203.722 318.639 204.76 321.09C206.571 326.312 205.532 328.217 203.722 333.159C202.431 336.436 201.14 340.818 202.937 344.122C203.975 345.774 206.052 346.866 207.09 348.225C209.153 350.409 208.9 351.502 211.748 352.328C215.368 353.14 217.964 348.758 221.318 350.409V349.877C223.913 349.317 225.457 349.317 227.267 350.689C228.825 352.061 228.053 355.351 231.673 354.246C235.559 353.153 234.255 345.494 237.889 342.75C240.737 340.552 246.181 340.006 249.801 338.088C250.586 337.808 253.94 335.623 254.726 336.716C256.017 338.088 253.182 340.818 252.916 341.911C256.536 343.283 258.346 338.634 261.98 339.167C264.056 339.726 266.119 341.911 267.942 342.737C269.753 343.549 271.829 343.829 273.905 344.388C278.564 345.76 281.665 345.76 285.817 344.388C290.729 343.016 290.729 344.388 294.362 347.945C296.692 350.13 299.021 353.14 301.616 354.792C305.237 356.99 306.261 358.362 308.87 362.198C314.553 370.963 323.884 364.663 332.162 369.858C334.492 371.23 338.112 373.96 339.416 376.451C340.96 379.449 339.416 382.459 340.454 385.203C340.974 386.855 342.784 386.855 343.556 388.493C343.809 389.586 343.303 391.237 343.556 392.596C344.594 397.258 346.404 395.62 348.999 398.617L349.252 399.443C350.29 400.815 350.29 402.733 350.543 404.372C353.378 404.105 353.644 402.187 357.265 402.733C359.594 403.279 363.214 405.198 365.038 407.102C367.367 409.58 366.076 410.672 370.215 411.219C371.759 411.219 373.064 410.952 374.874 411.219C376.418 411.485 377.975 411.765 379.532 412.044C384.71 412.591 387.824 413.696 392.216 416.707C395.837 419.451 397.141 421.915 401.547 422.448C404.395 422.728 404.395 421.356 406.458 424.1C407.496 425.472 408.002 427.936 408.268 429.575C408.801 432.878 409.053 437.527 408.534 440.804C407.749 446.279 402.572 447.651 400.761 452.593C399.47 455.87 399.989 457.521 397.394 460.252C395.837 461.624 394.04 462.45 393.002 464.368C389.634 470.403 394.546 480.273 394.546 486.84C394.293 491.503 391.444 496.152 389.621 500.268C388.077 504.117 387.026 509.033 384.696 512.603C379.266 520.555 367.101 514.521 361.138 522.46" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M460.536 4.17673C455.345 4.72288 450.687 5.81518 445.509 5.81518C438.788 5.54877 433.597 5.00262 427.647 7.18722C423.255 8.55925 419.102 7.73337 414.71 8.55925C409.533 9.38514 406.684 12.9418 402.545 15.1397C397.62 17.604 373.556 14.3138 375.353 23.3586C377.682 35.6936 401.76 21.4404 405.912 29.939C407.203 32.9495 404.608 39.2502 405.127 42.8202C405.646 45.8307 403.836 44.7384 406.418 46.3768C408.228 47.4691 411.077 45.5643 412.381 48.295C413.419 51.3055 411.09 49.6671 410.052 50.7594C408.228 52.3978 408.761 51.3055 407.47 54.0496C406.431 56.2475 407.723 56.5139 405.646 58.4321C404.355 59.8041 401.773 60.0705 400.469 61.9887C395.038 68.5559 398.925 81.7168 402.292 88.2972C404.608 92.6797 407.203 91.0413 411.596 92.9461C413.672 93.772 413.925 96.2364 417.292 95.4105C419.622 94.851 420.913 92.4 422.217 90.2021C423.002 88.2839 423.255 86.6454 425.065 85.2601C426.889 83.888 428.686 84.4475 430.509 82.516C433.357 79.2258 433.091 74.5768 437.497 72.0992C441.636 69.6348 445.003 71.8328 449.396 71.8328C453.282 71.553 456.13 67.9964 459.498 66.3579C462.599 64.7062 464.675 61.6957 467.777 60.0439C470.891 58.4055 474.511 60.5901 478.132 59.7775C481.499 59.2313 485.386 57.3132 489.006 56.2209C491.588 55.395 494.183 54.8488 495.222 51.8383C494.183 51.2922 490.044 50.4663 489.791 49.6537C488.753 47.4558 491.082 46.3635 492.639 46.3635C495.222 46.3635 498.336 52.944 500.399 48.8278C502.728 44.4453 494.183 42.2474 497.045 39.2369C498.855 37.5985 504.552 38.9705 507.134 37.3187C508.944 36.2264 510.501 33.7621 511.792 31.8439C513.083 29.646 512.83 27.1816 513.855 25.5432C514.641 24.1712 517.223 23.9047 517.742 22.5327C518.767 20.3481 516.704 19.2425 517.476 17.3243C519.805 12.1159 538.452 12.662 538.971 8.27952C539.224 2.80469 524.477 6.0816 521.881 6.0816C515.932 5.80186 512.564 1.69907 506.601 1.15292C497.032 0.606772 487.182 1.69907 477.879 1.69907C471.663 1.69907 466.752 2.24522 461.042 3.88367" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M396.848 3.91033C389.861 4.73622 384.43 7.46697 377.176 6.10825C370.189 5.01595 363.72 3.09776 356.719 5.01595C352.846 6.10825 346.098 4.73622 343.01 6.38799C336.022 10.2244 346.63 9.67821 347.921 10.7705C353.352 15.153 341.706 19.5356 338.604 19.8153C333.68 20.3614 329.274 19.5489 326.439 23.9181C325.401 25.2901 326.692 26.3824 325.401 27.488C323.844 28.8601 320.476 27.7678 318.933 27.2083C315.818 26.116 313.236 23.0922 310.64 27.488C308.058 32.1503 312.184 32.6964 315.299 33.2426C320.21 34.0685 322.553 35.9867 327.464 35.1608C330.312 34.6146 337.3 35.1608 339.124 32.1503C342.478 27.2216 335.237 28.5937 332.642 28.0342C333.161 21.7335 345.06 25.8496 348.96 24.744C352.846 23.6517 356.466 20.3614 360.339 18.7097C368.099 15.4194 375.872 15.4194 383.898 13.781C387.518 12.9551 390.886 11.0369 394.772 10.2244C398.139 9.4118 402.026 10.2244 405.393 8.85232C409.799 7.21387 409.533 4.4698 404.874 3.3775C402.292 2.83135 399.178 3.65724 396.848 3.65724" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M343.263 43.9124C340.415 43.9124 336.528 44.725 333.946 43.9124C331.617 43.3663 330.845 41.4481 329.035 40.3558C325.414 38.1579 323.072 39.2502 319.452 41.4481C318.413 42.274 316.098 44.7383 314.54 44.4586C311.692 43.6327 314.54 42.2607 314.287 40.6222C313.502 38.4376 314.806 38.4376 311.958 37.8781C309.629 37.332 307.819 38.9838 306.262 40.3425C303.946 41.9809 299.793 45.5509 299.793 48.8278C300.046 54.8621 307.819 51.8383 311.452 51.2921C317.136 50.4662 325.428 49.3739 330.339 53.2103C333.201 55.4082 336.821 58.6851 335.783 62.8013C335.25 64.7194 331.63 71.2999 330.086 72.1258C325.947 74.044 319.731 69.6614 315.845 71.8594C310.161 75.1496 319.212 76.5083 321.807 76.5083C327.757 76.788 329.58 77.6139 332.429 82.809C333.72 85.5531 333.214 86.6454 336.834 87.7377C337.859 88.0174 340.974 88.5636 341.759 87.7377C344.607 85.2733 337.1 78.1467 344.341 79.5188C347.442 79.7985 349.771 84.7272 353.392 81.1706C358.835 76.2419 349 73.4978 349.771 69.395C350.81 64.1866 358.316 68.5691 359.874 70.2209C362.203 72.4055 362.203 74.337 366.089 71.5929C368.152 70.2209 370.748 66.3979 370.229 63.374C369.191 59.2579 365.823 60.0838 362.975 59.2579C353.658 57.06 364.519 51.5852 358.05 46.097C355.974 44.4586 344.847 41.4481 343.556 43.9124" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M331.883 9.11875C329.287 9.6649 327.983 11.3034 325.92 12.1292C324.097 12.9418 320.995 11.8495 319.704 12.6754C312.184 16.7915 324.35 18.1635 327.211 17.6174C329.54 17.3377 339.895 18.1635 340.92 15.9789C342.211 13.5146 334.185 7.21389 332.122 9.13208" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M292.259 71.3132C289.411 71.3132 289.677 72.965 288.373 74.3237C288.12 74.8699 285.006 78.4398 285.006 78.7062C283.462 84.4608 289.664 80.3447 291.993 80.0783C294.842 79.7985 301.044 83.6349 300.285 77.3342C299.753 74.3237 295.361 69.1153 292.512 71.0335" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M267.929 27.7411C263.79 26.6355 262.752 29.3796 259.384 30.4852C254.46 31.8572 255.232 28.0208 252.397 26.1026C247.472 22.8124 230.648 30.4852 239.193 33.4957C243.346 34.8677 248.776 32.4034 253.435 33.2292C256.802 34.0551 258.612 35.1474 262.233 34.3215C263.79 34.0418 270.525 33.4957 271.549 32.4034C274.398 29.3929 269.726 27.7544 267.397 27.7544" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M293.045 25.2768C288.639 25.2768 288.639 25.5565 285.272 27.7411C282.423 29.3795 279.056 30.2054 283.728 32.1236C285.538 32.6698 290.716 32.39 292.273 31.5775C291.488 32.1236 294.602 27.1949 294.349 28.0075C294.602 26.0893 294.602 24.7173 292.02 24.7173" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M281.652 36.2397C275.689 34.0551 274.93 37.8782 270.777 39.8097C268.714 40.6223 266.891 38.9838 266.119 41.9943C265.6 44.4586 267.676 45.0048 269.233 46.0971C273.892 49.667 273.892 46.6432 278.284 43.9125C279.841 43.0866 281.651 43.6328 282.943 42.2607C284.5 40.6223 284.766 37.6118 282.423 36.7859" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M297.956 15.4194C296.665 15.4194 291.221 14.3138 290.436 15.1397C288.373 16.7782 291.74 20.6145 293.298 21.1607C294.842 21.9866 298.728 21.4404 300.019 20.0684C301.842 18.1502 301.842 15.1397 298.728 15.1397" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M300.019 35.6936C295.108 35.6936 294.336 35.6936 290.968 38.7041C289.424 39.7964 284.753 42.5405 289.145 44.1922C289.93 44.472 297.69 41.9943 298.728 41.4482C300.804 40.3559 303.386 36.5062 299.513 35.6936" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M338.857 36.5061C334.199 37.8782 337.313 42.5404 340.934 40.8887C344.554 39.5166 343.782 35.4138 339.643 36.2264" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M309.349 17.604C303.653 17.8705 308.058 24.1845 311.931 21.7201C315.552 19.5355 313.222 16.2453 309.855 17.3376" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M303.4 24.1845C302.109 26.1027 302.615 29.939 305.476 28.0208C308.577 26.3824 305.729 22.8124 302.894 24.4642" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M297.956 29.6593C295.108 31.8572 298.475 34.0418 300.285 32.6698C302.095 31.2977 300.791 28.5537 298.728 29.1131" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M268.448 18.43C263.79 17.8838 259.903 21.4405 265.6 23.0922C269.486 24.1845 274.65 19.2559 269.22 18.7097" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M278.284 24.7306C277.512 25.5565 276.993 26.1026 276.993 27.4747C279.589 28.567 282.69 24.7306 279.069 24.1844" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M235.054 23.0922C229.61 22.8125 224.18 27.4747 231.686 27.2083C232.977 27.2083 236.092 27.2083 237.13 26.3824C239.193 24.744 238.434 21.7202 235.32 22.8258" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M256.802 39.5299C253.687 38.4376 252.649 39.2502 250.32 40.6222C246.7 43.0866 248.776 42.8202 244.371 41.9943C241.775 41.4481 239.193 41.9943 236.345 41.4481C234.268 40.902 232.724 39.2502 230.648 38.7041C227.281 38.1579 225.471 41.1684 222.636 42.2607C220.306 43.0866 217.192 41.981 214.863 43.0866C211.761 44.4586 211.495 45.8307 214.344 48.5614C216.673 50.4796 220.559 49.3873 223.394 52.3978C221.85 53.2103 204.76 49.9334 212.52 56.2341C214.596 57.8859 221.065 59.2446 223.647 58.6985C228.053 57.3264 229.61 52.9439 235.054 53.4901C238.927 54.0362 241.522 57.0467 245.395 57.0467C247.472 57.0467 255.764 55.6747 256.536 54.8488C260.675 51.0124 254.979 50.1865 254.726 47.7222C254.473 44.432 261.46 43.6061 257.574 39.5033" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M265.6 52.9573C261.194 53.5035 260.169 58.4455 265.347 58.4455C270.005 58.4455 272.068 51.865 266.385 52.9573" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M219.774 32.1236C214.597 31.5775 213.558 31.8439 209.685 34.588C205.546 37.332 200.621 35.6936 196.735 38.4243C191.304 41.981 195.444 45.5509 200.621 44.725C203.989 44.1789 207.356 41.7146 210.723 41.1684C215.901 40.3425 220.306 39.2502 225.218 37.8782C228.066 37.0656 233.23 36.7859 228.585 33.4957C225.737 31.8572 222.636 33.7754 220.04 32.1236" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M245.143 294.356C238.421 288.601 230.901 282.287 222.103 280.915C218.483 280.382 213.558 280.382 210.191 281.475C206.052 282.847 204.241 286.137 209.938 286.39C214.863 286.67 216.407 285.857 221.331 288.042C227.028 290.253 228.572 290.253 231.686 295.168C234.268 298.991 235.307 297.366 239.446 297.633C241.003 297.633 248.257 300.656 246.181 295.728C246.181 295.168 245.396 294.622 245.143 294.356Z" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M258.346 298.459C256.536 298.179 253.435 297.087 251.877 298.459C250.839 299.551 251.611 301.203 250.839 302.295C249.801 303.387 248.244 303.108 247.472 303.947C242.813 308.862 254.726 307.503 258.093 307.503C260.675 307.503 271.296 306.411 269.473 301.482C268.182 297.912 260.422 299.831 258.093 298.459" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M355.175 139.808C352.327 140.901 351.555 143.911 349.731 146.096C347.402 148.84 343.782 150.478 340.934 152.676C331.098 160.895 350.77 156.233 354.137 157.605C356.985 158.431 358.01 161.988 361.125 161.441C366.049 160.349 362.935 158.164 362.416 155.967C361.883 154.062 361.378 154.874 361.63 152.69C361.63 151.318 363.96 150.771 363.454 148.853C362.669 144.471 359.048 147.481 356.972 148.587C354.909 146.109 361.378 140.914 356.2 139.822" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M243.346 154.328C245.156 156.246 242.827 158.444 244.118 160.629C245.409 163.373 248.776 163.373 251.105 163.653C254.22 163.919 256.283 163.093 257.068 166.663C258.106 171.592 254.739 170.5 252.41 171.592C250.866 172.418 242.321 180.09 246.447 182.009C246.447 182.009 262.246 177.346 254.739 183.381H254.992C252.929 187.217 244.637 189.402 240.764 188.589C238.168 188.03 236.105 186.658 236.624 183.647C237.143 180.903 240.245 180.903 241.283 178.452C243.359 174.895 242.321 167.223 237.396 168.315C233.776 169.154 228.851 176.001 227.041 179.011C225.497 181.196 221.864 189.135 219.534 183.128C217.99 179.558 223.155 175.441 224.459 172.711C226.788 168.328 226.535 166.956 231.194 165.318C235.067 163.946 238.953 161.481 232.738 159.843C228.332 158.471 224.193 161.215 219.787 161.761C212.533 162.587 215.129 159.017 219.534 156.566C223.421 154.648 227.294 154.914 231.194 152.73C235.333 150.532 239.739 148.614 242.84 154.102" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <g filter="url(#filter0_d_1_114)">
                            <!-- <path d="M525.182 212.353C528.46 212.353 531.118 209.693 531.118 206.412C531.118 203.131 528.46 200.471 525.182 200.471C521.903 200.471 519.246 203.131 519.246 206.412C519.246 209.693 521.903 212.353 525.182 212.353Z" fill="#00F187"/>
                            <path d="M553.079 211.221C556.358 211.221 559.015 208.561 559.015 205.28C559.015 201.999 556.358 199.339 553.079 199.339C549.801 199.339 547.143 201.999 547.143 205.28C547.143 208.561 549.801 211.221 553.079 211.221Z" fill="#00F187"/>
                            <path d="M525.182 188.203C528.46 188.203 531.118 185.543 531.118 182.262C531.118 178.981 528.46 176.321 525.182 176.321C521.903 176.321 519.246 178.981 519.246 182.262C519.246 185.543 521.903 188.203 525.182 188.203Z" fill="#00F187"/>
                            <path d="M540.315 185.286C543.594 185.286 546.251 182.626 546.251 179.345C546.251 176.063 543.594 173.403 540.315 173.403C537.037 173.403 534.379 176.063 534.379 179.345C534.379 182.626 537.037 185.286 540.315 185.286Z" fill="#00F187"/>
                            <path d="M555.874 144.138C559.153 144.138 561.811 141.478 561.811 138.197C561.811 134.916 559.153 132.256 555.874 132.256C552.596 132.256 549.938 134.916 549.938 138.197C549.938 141.478 552.596 144.138 555.874 144.138Z" fill="#00F187"/>
                            <path d="M575.573 150.092C578.851 150.092 581.509 147.432 581.509 144.151C581.509 140.87 578.851 138.21 575.573 138.21C572.294 138.21 569.637 140.87 569.637 144.151C569.637 147.432 572.294 150.092 575.573 150.092Z" fill="#00F187"/>
                            <path d="M575.653 167.609C578.931 167.609 581.589 164.949 581.589 161.668C581.589 158.387 578.931 155.727 575.653 155.727C572.374 155.727 569.717 158.387 569.717 161.668C569.717 164.949 572.374 167.609 575.653 167.609Z" fill="#00F187"/>
                            <path d="M579.792 136.838C583.071 136.838 585.728 134.178 585.728 130.897C585.728 127.616 583.071 124.956 579.792 124.956C576.514 124.956 573.856 127.616 573.856 130.897C573.856 134.178 576.514 136.838 579.792 136.838Z" fill="#00F187"/>
                            <path d="M593.661 117.483C596.94 117.483 599.597 114.823 599.597 111.542C599.597 108.261 596.94 105.601 593.661 105.601C590.383 105.601 587.725 108.261 587.725 111.542C587.725 114.823 590.383 117.483 593.661 117.483Z" fill="#00F187"/>
                            <path d="M595.045 150.092C598.324 150.092 600.981 147.432 600.981 144.151C600.981 140.87 598.324 138.21 595.045 138.21C591.767 138.21 589.109 140.87 589.109 144.151C589.109 147.432 591.767 150.092 595.045 150.092Z" fill="#00F187"/>
                            <path d="M606.984 190.334C610.263 190.334 612.92 187.674 612.92 184.393C612.92 181.112 610.263 178.452 606.984 178.452C603.706 178.452 601.048 181.112 601.048 184.393C601.048 187.674 603.706 190.334 606.984 190.334Z" fill="#00F187"/>
                            <path d="M609.154 143.312C612.432 143.312 615.09 140.652 615.09 137.371C615.09 134.09 612.432 131.43 609.154 131.43C605.875 131.43 603.218 134.09 603.218 137.371C603.218 140.652 605.875 143.312 609.154 143.312Z" fill="#00F187"/>
                            <path d="M631.235 149.479C634.513 149.479 637.171 146.819 637.171 143.538C637.171 140.257 634.513 137.597 631.235 137.597C627.956 137.597 625.299 140.257 625.299 143.538C625.299 146.819 627.956 149.479 631.235 149.479Z" fill="#00F187"/>
                            <path d="M648.005 125.542C651.283 125.542 653.941 122.882 653.941 119.601C653.941 116.32 651.283 113.66 648.005 113.66C644.727 113.66 642.069 116.32 642.069 119.601C642.069 122.882 644.727 125.542 648.005 125.542Z" fill="#00F187"/>
                            <path d="M659.704 119.468C662.983 119.468 665.641 116.808 665.641 113.527C665.641 110.246 662.983 107.586 659.704 107.586C656.426 107.586 653.768 110.246 653.768 113.527C653.768 116.808 656.426 119.468 659.704 119.468Z" fill="#00F187"/>
                            <path d="M657.455 106.573C660.734 106.573 663.391 103.913 663.391 100.632C663.391 97.3511 660.734 94.6912 657.455 94.6912C654.177 94.6912 651.519 97.3511 651.519 100.632C651.519 103.913 654.177 106.573 657.455 106.573Z" fill="#00F187"/> -->
                            <!-- <path d="M648.857 93.1193C655.421 93.1193 660.743 87.7936 660.743 81.2239C660.743 74.6543 655.421 69.3285 648.857 69.3285C642.293 69.3285 636.971 74.6543 636.971 81.2239C636.971 87.7936 642.293 93.1193 648.857 93.1193Z" fill="#00F187"/> -->
                            <!-- <path d="M676.688 136.838C679.966 136.838 682.624 134.178 682.624 130.897C682.624 127.616 679.966 124.956 676.688 124.956C673.409 124.956 670.752 127.616 670.752 130.897C670.752 134.178 673.409 136.838 676.688 136.838Z" fill="#00F187"/> -->
                        </g>
                        <g style="mix-blend-mode:screen">
                            <path d="M733.827 196.102V196.075L733.454 195.609C729.887 190.814 727.824 184.659 720.65 187.204L720.224 187.35C720.104 187.537 719.985 187.71 719.825 187.896C718.015 189.801 713.995 190.227 711.533 190.907C709.962 191.28 708.565 191.093 707.234 190.667C705.61 190.134 704.053 189.202 702.362 188.296C698.995 186.378 694.842 184.313 690.836 184.739C689.159 184.873 687.336 185.286 685.925 186.245C684.887 187.057 683.982 188.576 682.69 188.989C681.013 189.535 679.336 188.576 677.646 188.989C676.355 189.402 675.969 190.494 675.051 190.907C672.868 191.946 671.417 189.561 670.246 187.723L669.926 189.029C669.234 193.411 665.095 192.692 662.672 194.876L662.3 195.249C662.127 196.355 661.807 197.501 661.967 198.899C662.326 202.19 664.389 203.655 665.774 206.572C666.798 208.397 667.491 210.582 669.567 211.687C670.592 212.42 671.989 211.687 673.36 212.06C673.36 212.06 676.807 214.245 676.461 214.245C679.23 214.604 679.576 213.153 682.677 212.793C685.446 212.433 687.163 214.618 689.931 214.618C693.738 214.258 699.261 208.051 702.362 213.885L702.708 214.245C708.924 208.037 711.333 213.152 718.241 211.687C721.342 210.955 723.419 209.489 726.52 209.489C729.568 209.13 732.27 210.182 734.652 207.118C734.692 207.065 734.279 206.705 734.279 206.705C731.87 203.868 732.363 201.057 733.76 196.342L733.827 196.102Z" fill="#514000" />
                        </g>
                        <path d="M698.276 252.806C700.925 254.178 703.64 256.003 704.758 256.988C708.205 260.652 710.974 268.311 713.383 273.066C715.446 277.089 718.906 282.205 719.945 286.587C720.983 292.062 718.56 294.246 723.738 297.91C725.814 299.362 727.891 299.362 729.954 301.573C731.338 303.025 732.376 305.596 733.401 307.421C736.169 311.803 738.924 316.199 739.963 321.674C740.309 325.67 738.578 330.785 743.064 332.264C746.857 333.356 754.457 328.601 757.904 327.881C764.466 326.429 771.361 327.522 775.513 321.674C778.974 317.291 780.345 314.347 784.83 310.711C788.969 307.78 793.109 304.477 796.915 300.84C799.684 298.269 806.232 290.61 806.232 286.227C806.232 279.66 796.223 278.182 792.43 274.905C788.637 271.242 789.316 265.034 783.805 269.79C780.358 273.066 780.691 278.541 774.488 277.089C773.104 276.73 768.951 273.066 768.273 271.615C766.542 268.697 768.951 267.232 767.94 264.315C766.556 261.744 761.378 261.384 759.315 259.2C756.893 257.002 755.855 252.979 754.816 250.062L754.124 248.969C755.509 242.016 761.032 244.587 763.787 247.864C767.94 252.979 767.94 256.269 773.796 258.84C777.949 260.665 782.78 263.209 787.279 262.849C789.688 262.49 790.713 258.84 794.174 261.025C796.596 262.849 795.212 265.407 796.596 267.232C799.71 270.163 805.913 268.697 809.72 269.07C810.531 269.164 811.37 269.323 812.209 269.536" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M752.235 201.776C751.875 202.522 751.582 203.295 751.529 204.201C751.396 208.17 754.111 208.317 756.973 209.13C760.074 210.089 762.017 213.112 765.252 214.058C769.99 215.457 773.371 212.5 774.196 208.397" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M662.326 194.876C662.167 196.089 661.754 197.341 661.94 198.913C662.3 202.203 664.363 203.668 665.747 206.585C666.772 208.41 667.464 210.595 669.54 211.7C670.565 212.433 671.963 211.7 673.334 212.073C673.334 212.073 676.781 214.258 676.435 214.258C679.203 214.618 679.549 213.166 682.651 212.806C685.419 212.446 687.136 214.631 689.904 214.631C693.711 214.271 699.235 208.064 702.336 213.898" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M702.336 215.35C701.298 221.198 703.361 224.848 701.298 230.696C699.967 235.278 700.552 239.168 696.906 240.753" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M670.06 187.497C671.271 189.362 672.735 191.999 675.024 190.92C675.929 190.494 676.315 189.402 677.62 189.002C679.31 188.589 680.987 189.548 682.664 189.002C683.955 188.589 684.873 187.084 685.898 186.258C687.322 185.299 689.133 184.886 690.81 184.753C694.816 184.34 698.969 186.391 702.336 188.309C705.437 189.961 708.019 191.733 711.52 190.92C713.982 190.227 718.002 189.815 719.812 187.91" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M691.062 219.277C689.638 219.131 687.575 219.277 687.176 221.049C686.67 223.793 689.638 222.967 691.182 223.38C692.619 223.793 694.296 225.285 694.682 222.421C695.082 220.223 693.125 219.957 691.581 219.397" stroke="#6D7374" stroke-width="0.73" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M809.347 249.691C807.617 246.761 809.693 244.936 809.001 242.005C808.309 239.821 805.9 237.25 804.862 234.705C803.824 232.148 799.684 227.033 799.338 224.835C798.992 221.172 802.785 217.895 803.824 214.604" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M820.062 207.305C824.201 206.572 825.239 210.582 828.686 210.941C833.158 211.314 832.826 207.664 835.94 205.093C845.949 197.434 841.797 211.301 845.257 213.872" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M772.758 276.346C771.374 284.006 778.615 281.821 782.767 282.913C788.983 284.752 791.392 291.319 785.869 296.074C782.421 299.351 773.783 297.526 774.143 303.374C774.475 308.489 781.729 308.849 781.037 314.697" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M736.063 313.245C736.063 300.11 751.702 313.977 757.226 309.581C761.019 306.677 758.264 303.374 764.134 301.922C767.235 301.203 770.243 301.922 773.344 303.374" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M785.177 284.392C785.523 279.277 791.046 277.811 789.316 271.604" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M720.637 187.217C729.941 183.927 730.646 195.249 737.194 199.272C738.579 200.365 741.347 201.47 742.718 201.097C744.794 200.365 744.794 197.447 745.819 197.088C751.343 195.249 747.896 200.005 752.381 201.47" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M733.761 196.342C732.03 202.19 731.684 205.107 736.516 208.77C741.001 212.433 745.819 213.153 743.769 220.452C743.077 223.023 740.655 223.023 741.36 226.66C741.693 228.858 745.5 231.775 747.23 232.881C749.293 234.706 751.369 235.065 752.74 237.25C754.471 239.448 752.408 240.913 754.817 242.738" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M701.99 232.135C704.758 237.623 705.783 234.332 708.206 232.508C711.32 230.669 714.075 228.858 717.523 227.019C725.815 222.637 721.675 217.535 725.815 210.209" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M702.349 227.765C707.181 228.125 708.565 220.452 703.028 221.545" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M700.087 248.466C699.634 249.771 699.115 251.037 698.543 252.236" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M700.273 235.065C702.123 239.541 701.537 244.217 700.087 248.466" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M700.087 248.466C700.087 248.466 700.206 248.559 700.273 248.599C703.72 250.784 708.552 247.853 710.282 244.936C711.666 242.365 712.704 239.461 714.075 236.89C716.152 233.254 717.19 232.881 715.806 228.498" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M696.812 240.54C698.157 243.404 697.531 246.601 700.073 248.452" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M715.446 234.346C723.392 233.986 730.979 240.913 735.478 247.12C740.309 253.714 746.858 252.968 754.111 250.784" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M754.471 244.563C750.318 243.471 746.179 248.586 750.664 250.77" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M845.031 213.672C843.86 214.898 843.926 216.989 843.527 220.812C842.489 229.95 833.531 235.425 829.379 243.471C826.956 248.213 827.316 249.678 821.446 248.586C819.37 248.213 817.653 246.388 815.576 246.388C813.5 246.388 811.424 248.586 809.361 248.959C809.361 253.714 816.614 255.526 817.293 259.922C817.985 263.571 813.154 265.037 812.116 269.792" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M803.731 214.871C803.651 214.778 803.558 214.698 803.478 214.604C800.363 211.314 796.224 208.037 791.738 205.826C788.637 204.734 783.806 204.374 781.397 204.734C777.244 205.093 777.244 206.199 773.797 208.757" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M820.195 207.305C820.221 207.771 820.195 208.264 820.062 208.77C819.702 209.489 815.909 212.06 815.23 213.152C813.846 215.337 816.255 216.429 813.5 218.268C809.187 220.719 805.833 217.109 803.744 214.871" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M734.785 206.945C732.363 210.222 729.608 209.13 726.507 209.503C723.392 209.503 721.316 210.955 718.228 211.701C711.32 213.166 708.911 208.051 702.695 214.258" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <path d="M662.646 194.876C665.068 192.692 669.194 193.425 669.9 189.029" stroke="#0C1618" stroke-width="0.55" stroke-miterlimit="10" />
                        <g filter="url(#filter1_d_1_114)">
                            <!-- <path d="M997.815 393.835C1001.09 393.835 1003.75 391.175 1003.75 387.894C1003.75 384.613 1001.09 381.953 997.815 381.953C994.536 381.953 991.879 384.613 991.879 387.894C991.879 391.175 994.536 393.835 997.815 393.835Z" fill="#15BEC7"/>
                            <path d="M1050 253.754C1053.28 253.754 1055.94 251.094 1055.94 247.813C1055.94 244.532 1053.28 241.872 1050 241.872C1046.72 241.872 1044.07 244.532 1044.07 247.813C1044.07 251.094 1046.72 253.754 1050 253.754Z" fill="#15BEC7"/>
                            <path d="M1062.89 225.088C1066.17 225.088 1068.82 222.428 1068.82 219.147C1068.82 215.866 1066.17 213.206 1062.89 213.206C1059.61 213.206 1056.95 215.866 1056.95 219.147C1056.95 222.428 1059.61 225.088 1062.89 225.088Z" fill="#15BEC7"/>
                            <path d="M1072.75 216.016C1076.03 216.016 1078.69 213.357 1078.69 210.075C1078.69 206.794 1076.03 204.134 1072.75 204.134C1069.47 204.134 1066.81 206.794 1066.81 210.075C1066.81 213.357 1069.47 216.016 1072.75 216.016Z" fill="#15BEC7"/>
                            <path d="M1105.03 228.951C1108.3 228.951 1110.96 226.291 1110.96 223.01C1110.96 219.729 1108.3 217.069 1105.03 217.069C1101.75 217.069 1099.09 219.729 1099.09 223.01C1099.09 226.291 1101.75 228.951 1105.03 228.951Z" fill="#15BEC7"/>
                            <path d="M1146.14 597.829C1149.42 597.829 1152.08 595.169 1152.08 591.888C1152.08 588.607 1149.42 585.947 1146.14 585.947C1142.86 585.947 1140.2 588.607 1140.2 591.888C1140.2 595.169 1142.86 597.829 1146.14 597.829Z" fill="#15BEC7"/>
                            <path d="M1173.52 568.27C1176.8 568.27 1179.45 565.61 1179.45 562.329C1179.45 559.048 1176.8 556.388 1173.52 556.388C1170.24 556.388 1167.58 559.048 1167.58 562.329C1167.58 565.61 1170.24 568.27 1173.52 568.27Z" fill="#15BEC7"/>
                            <path d="M1229.17 608.645C1232.44 608.645 1235.1 605.985 1235.1 602.704C1235.1 599.423 1232.44 596.763 1229.17 596.763C1225.89 596.763 1223.23 599.423 1223.23 602.704C1223.23 605.985 1225.89 608.645 1229.17 608.645Z" fill="#15BEC7"/> -->
                        </g>
                        <g filter="url(#filter2_d_1_114)">
                            <!-- <path d="M269.553 601.346C272.831 601.346 275.489 598.686 275.489 595.405C275.489 592.123 272.831 589.464 269.553 589.464C266.274 589.464 263.617 592.123 263.617 595.405C263.617 598.686 266.274 601.346 269.553 601.346Z" fill="#FA7A71"/>
                            <path d="M277.432 586.639C280.711 586.639 283.368 583.98 283.368 580.698C283.368 577.417 280.711 574.757 277.432 574.757C274.154 574.757 271.496 577.417 271.496 580.698C271.496 583.98 274.154 586.639 277.432 586.639Z" fill="#FA7A71"/>
                            <path d="M389.701 484.283C392.979 484.283 395.637 481.623 395.637 478.342C395.637 475.061 392.979 472.401 389.701 472.401C386.422 472.401 383.765 475.061 383.765 478.342C383.765 481.623 386.422 484.283 389.701 484.283Z" fill="#FA7A71"/>
                            <path d="M224.885 391.89C228.163 391.89 230.821 389.23 230.821 385.949C230.821 382.668 228.163 380.008 224.885 380.008C221.606 380.008 218.949 382.668 218.949 385.949C218.949 389.23 221.606 391.89 224.885 391.89Z" fill="#FA7A71"/>
                            <path d="M262.579 372.882C265.857 372.882 268.515 370.222 268.515 366.94C268.515 363.659 265.857 360.999 262.579 360.999C259.3 360.999 256.642 363.659 256.642 366.94C256.642 370.222 259.3 372.882 262.579 372.882Z" fill="#FA7A71"/>
                            <path d="M252.37 214.112C255.648 214.112 258.306 211.452 258.306 208.171C258.306 204.889 255.648 202.229 252.37 202.229C249.091 202.229 246.434 204.889 246.434 208.171C246.434 211.452 249.091 214.112 252.37 214.112Z" fill="#FA7A71"/>
                            <path d="M263.79 204.641C267.068 204.641 269.726 201.981 269.726 198.7C269.726 195.418 267.068 192.759 263.79 192.759C260.511 192.759 257.854 195.418 257.854 198.7C257.854 201.981 260.511 204.641 263.79 204.641Z" fill="#FA7A71"/>
                            <path d="M275.09 185.059C278.368 185.059 281.026 182.399 281.026 179.118C281.026 175.837 278.368 173.177 275.09 173.177C271.811 173.177 269.154 175.837 269.154 179.118C269.154 182.399 271.811 185.059 275.09 185.059Z" fill="#FA7A71"/> -->
                        </g>
                        <g filter="url(#filter3_d_1_114)">
                            <!-- <path d="M674.625 200.205C677.903 200.205 680.561 197.545 680.561 194.264C680.561 190.983 677.903 188.323 674.625 188.323C671.346 188.323 668.689 190.983 668.689 194.264C668.689 197.545 671.346 200.205 674.625 200.205Z" fill="#FACE34"/>
                            <path d="M701.99 215.071C705.268 215.071 707.926 212.411 707.926 209.13C707.926 205.849 705.268 203.189 701.99 203.189C698.711 203.189 696.054 205.849 696.054 209.13C696.054 212.411 698.711 215.071 701.99 215.071Z" fill="#FACE34"/>
                            -->
                        </g>
                        <defs>
                            <filter id="filter0_d_1_114" x="513.426" y="63.5085" width="175.018" height="154.665" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="2.91" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0.945098 0 0 0 0 0.529412 0 0 0 0.75 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_114" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_114" result="shape" />
                            </filter>
                            <filter id="filter1_d_1_114" x="986.059" y="198.314" width="254.864" height="416.151" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="2.91" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.0823529 0 0 0 0 0.745098 0 0 0 0 0.780392 0 0 0 0.75 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_114" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_114" result="shape" />
                            </filter>
                            <filter id="filter2_d_1_114" x="213.129" y="167.357" width="188.328" height="439.809" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="2.91" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.980392 0 0 0 0 0.329412 0 0 0 0 0.282353 0 0 0 0.75 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_114" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_114" result="shape" />
                            </filter>
                            <filter id="filter3_d_1_114" x="661.609" y="181.243" width="53.3973" height="40.908" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset />
                                <feGaussianBlur stdDeviation="3.54" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.980392 0 0 0 0 0.807843 0 0 0 0 0.203922 0 0 0 0.75 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_114" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_114" result="shape" />
                            </filter>
                        </defs>
                        <!-- <circle id="america_newyork" class="circle-hover" cx="275" cy="178" r="6" class="dot"  fill="#FA7A71" style="filter: drop-shadow(0px 0px 5.82px rgba(239, 101, 80, 0.75));"></circle> -->

                        <div class="box-dots" id="b-m-full">
                        <?PHP
                            $listdf = new WP_Query(
                                array(
                                    'post_type' => 'design-factories',
                                    'order'          => 'ASC',
                                )
                            );
                            $double_displayed = false; 
                            if($listdf->have_posts()) :
                                $index = 1;
                                while($listdf->have_posts()) : $listdf->the_post();
                                
                                $continents = get_field('continents');
                                $stat = get_field('status');
                               
                            
                                if($continents == "Europe and the middle east"){
                                    $class_continents = 'europe';
                                }else  if($continents == "Americas"){
                                    $class_continents = 'america';
                                }else  if($continents == "Asia pacific"){
                                    $class_continents = 'asia';
                                }
                                $cx = get_field('cx').'%';
                                $cy = get_field('cy').'%';
                                if($stat == "Single"){
                        ?>
                                    <div class="dots-map <?php echo $class_continents; ?>" data-cek="full" data-id="<?php the_title(); ?>" style="left: <?php echo $cx ?>;top: <?php echo $cy ?>;"></div>
                        <?php
                                }elseif ($stat == 'Double' && !$double_displayed) {
                        ?>
                                    <div class="dots-map-dob <?php echo $class_continents; ?>" data-cek="full" data-id="finland-espoo" style="left: <?php echo $cx ?>;top: <?php echo $cy ?>"></div>
                        <?php
                                    $double_displayed = true;
                                }
                                $index++;
                                endwhile;
                            endif;
                            wp_reset_postdata();
                        ?>
                            
                        </div>

                        <div class="box-dots" id="b-m-europe">
                            <!-- Europe & Midle east -->
                            <div class="dots-map europe" data-cek="detail" data-id="spain-barcelona" style="left: 402px;top: 294px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="swiss-geneva" style="left: 456px;top: 237px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="italy-bologna" style="left: 495px;top: 252px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="italy-salerno" style="left: 530px;top: 301px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="estonia-tartu" style="left: 596px;top: 121px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="portugal" style="left: 337px;top: 315px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="germany" style="left: 491px;top: 184px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="germany-stuttgart" style="left: 480px;top: 212px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="portugal-porto" style="left: 342px;top: 292px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="latvia-riga" style="left: 599px;top: 137px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="uk-london" style="left: 401px;top: 189px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="uk-manchester" style="left: 394px;top: 159px;"></div>    
                            <div class="dots-map europe" data-cek="detail" data-id="nl-friesland" style="left: 450px;top: 182px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="lithuania-vilnius" style="left: 583px;top: 150px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="spain" style="left: 378px;top: 319px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="france-nantes" style="left: 413px;top: 241px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="finland-espoo" style="left: 584px;top: 100px;"></div>
                            <div class="dots-map europe-middle" data-cek="detail" data-id="turkey-ankara" style="left: 665px;top: 294px;"></div>
                            <div class="dots-map europe-middle" data-cek="detail" data-id="israel" style="left: 684px;top: 398px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="ireland" style="left: 353px;top: 174px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="poland-warsaw" style="left: 553px;top: 193px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="germany-pforzheim" style="left: 469px;top: 200px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="finland-helsinki" style="left: 595px;top: 96px;"></div>
                            <div class="dots-map europe" data-cek="detail" data-id="finland-hamk" style="left: 581px;top: 89px;"></div>
                        </div>

                    </div>

                    <div class="hover-dots" style="left: 278px;top: 183px;">
                        <div class="int">
                            <h1 class="nm-x-fac">Aalto Design Factory</h1>
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/ic_loc.png'; ?>" alt="">
                            <span class="loc-x-fac">Espoo, Finland</span>
                            <div class="b-read">
                                <a id="readMoreLink" class="tolink" href="factory.html"> Read more</a>
                            </div>
                        </div>
                        <div class="inlo">
                            <img class="img-factories" id="img-x-fac" src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/df-1.png'; ?>" alt="">
                        </div>
                    </div>


                </div>
                <div class="col-12 b-factory">
                    <div class="browse-factory">
                        <a href="factory.html">Browse all design factories</a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section id="factory" class="section-area pt-120">
        <div class="container">
            <div class="row r-df">
                <div class="col-xl-12 col-12 mb-90 d-flex">
                    <div class="col-lg-12 section-title">
                        <h1>New design factory is built almost every year</h1>
                        <!-- <p>Kabupaten Bogor </p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid-cus"></div>
        <div class="marquee-container">
            <div class="marquee">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s1_df_1.png'; ?>" alt="Logo 1">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s1_df_2.png'; ?>" alt="Logo 2">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s1_df_3.png'; ?>" alt="Logo 3">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s1_df_4.png'; ?>" alt="Logo 1">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s1_df_5.png'; ?>" alt="Logo 2">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s1_df_6.png'; ?>" alt="Logo 3">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s1_df_7.png'; ?>" alt="Logo 3">
                <!-- Tambahkan gambar logo yang lain di sini -->
            </div>
        </div>
        </div>
        <div class="container-fluid-cus"></div>
        <div class="marquee-container">
            <div class="marquee2">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s2_df_1.png'; ?>" alt="Logo 1">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s2_df_2.png'; ?>" alt="Logo 2">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s2_df_3.png'; ?>" alt="Logo 3">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s2_df_4.png'; ?>" alt="Logo 1">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s2_df_5.png'; ?>" alt="Logo 2">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s2_df_6.png'; ?>" alt="Logo 3">
                <!-- Tambahkan gambar logo yang lain di sini -->
            </div>
        </div>
        </div>
        <div class="container-fluid-cus"></div>
        <div class="marquee-container">
            <div class="marquee3">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s3_df_1.png'; ?>" alt="Logo 1">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s3_df_2.png'; ?>" alt="Logo 2">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s3_df_3.png'; ?>" alt="Logo 3">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s3_df_4.png'; ?>" alt="Logo 1">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s3_df_5.png'; ?>" alt="Logo 2">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s3_df_6.png'; ?>" alt="Logo 3">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/s3_df_7.png'; ?>" alt="Logo 3">

                <!-- Tambahkan gambar logo yang lain di sini -->
            </div>
        </div>
        </div>

        <?php _include('shared/components/contact-us-cta/index.php'); ?>

    </section>
</main>
<?php get_footer(); ?>

    <script>
        document.getElementById('learnmore').addEventListener('click', function(event) {
          event.preventDefault(); // Mencegah tindakan bawaan dari link
          var currentScroll = window.pageYOffset || document.documentElement.scrollTop; // Mendapatkan posisi scroll saat ini
          var targetScroll = 920; // Posisi scroll yang diinginkan
          var distance = targetScroll - currentScroll; // Jarak yang harus digulirkan
        
          var scrollStep = Math.PI / (900 / 15); // Hitung langkah scroll, semakin kecil nilai ini, semakin lambat scroll-nya
          var count = 0, scrollInterval = setInterval(function(){
            if (window.scrollY != targetScroll) { // Selama belum mencapai target scroll
              window.scrollTo(0, currentScroll + distance * Math.sin(scrollStep * count)); // Update posisi scroll
              count++;
            } else {
              clearInterval(scrollInterval); // Hentikan interval saat mencapai target scroll
            }
          },15); // Interval untuk efek scroll yang halus
        });
    </script>
    <script>
        // Dapatkan tombol close
        var modal = document.getElementById('v-vimeo');
        var closeBtn = document.getElementsByClassName("close")[0];

        var scrollStep = Math.PI / (900 / 15); // Hitung langkah scroll, semakin kecil nilai ini, semakin lambat scroll-nya
        var count = 0,
            scrollInterval = setInterval(function() {
                if (window.scrollY != targetScroll) { // Selama belum mencapai target scroll
                    window.scrollTo(0, currentScroll + distance * Math.sin(scrollStep * count)); // Update posisi scroll
                    count++;
                } else {
                    clearInterval(scrollInterval); // Hentikan interval saat mencapai target scroll
                }
            }, 15); // Interval untuk efek scroll yang halus
    });
</script>
<script>
    // Dapatkan tombol close
    var modal = document.getElementById('v-vimeo');
    var closeBtn = document.getElementsByClassName("close")[0];

    // Dapatkan video Vimeo
    var vimeoVideo = document.getElementById("vimeoVideo");

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
      <?php
       
        $repeater_data = array();

        if( have_rows('text_repeater') ):
            while ( have_rows('text_repeater') ) : the_row();
                $repeater_data[] = get_sub_field('text_hero_repeater'); // Ganti 'sub_field_name' dengan nama sub field yang sesuai
            endwhile;
        endif;
        if (!empty($repeater_data)) {
            $first_element = array_shift($repeater_data); // Ambil elemen pertama dan hapus dari array
            $repeater_data[] = $first_element; // Tambahkan elemen pertama ke akhir array
        }
        
        // Konversi array ke JSON
        $ss = json_encode($repeater_data);
    ?>
    
      var titles = <?php echo $repeater_data_json; ?>;
      // Fungsi untuk mengubah judul dengan efek fadeIn
      function changeTitle() {
        var titleElement = document.getElementById("changingTitle");
        var currentTitleIndex = titles.indexOf(titleElement.textContent);
        var nextTitleIndex = (currentTitleIndex + 1) % titles.length;
        titleElement.textContent = titles[nextTitleIndex];
        // Menghapus class 'wipe-up' dari judul
        titleElement.classList.remove("wipe-up");
        // Menjadwalkan penambahan kembali class 'wipe-up' dengan jeda kecil
        // setTimeout(function () {
        //   titleElement.classList.add("wipe-up");
        // }, 100);

        setTimeout(function() {
            titleElement.classList.remove("wipe-up");
            void titleElement.offsetWidth; // Trigger reflow
            titleElement.classList.add("wipe-up");
        }, 0);
    }
    // Memanggil fungsi changeTitle setiap beberapa detik
    setInterval(changeTitle, 5000); // Ganti judul setiap 3 detik
</script>
<script>
    document.getElementById('readMoreLink').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default action of link click
        var datafac = event.target.getAttribute('data-id');
        window.location.href = this.getAttribute('href') + "?showModal=" + datafac; // Redirect to factories.html with query parameter
    });
</script>
<script>
    $(document).ready(function() {
        $(".dots-map").click(function(event) {
            event.preventDefault();
            var dataValue = $(this).data('id');
            var dataCek = $(this).data('cek');

            $('.hover-dots').css('display', 'flex').animate({
                opacity: 1
            }, 100);
            if (dataCek == 'full') {
                if (dataValue == 'au-sydney') {
                    $('.hover-dots').css({
                        left: '650px',
                        top: '473px'
                    });
                    $('.nm-x-fac').text('Nandin Innovation Centre');
                    $('.loc-x-fac').text('Sydney, Australia');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/nandin.png'; ?>');
                    $('.tolink').attr('data-id', 'nandin');
                } else if (dataValue == 'germany-pforzheim') {
                    $('.hover-dots').css({
                        left: '594px',
                        top: '147px'
                    });
                    $('.nm-x-fac').text('Design Factory Pforzheim');
                    $('.loc-x-fac').text('Pforzheim, Germany');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/Pforzheim.png'; ?>');
                    $('.tolink').attr('data-id', 'pforzheim');
                } else if (dataValue == 'poland-warsaw') {
                    $('.hover-dots').css({
                        left: '631px',
                        top: '138px'
                    });
                    $('.nm-x-fac').text('Warsaw Design Factory');
                    $('.loc-x-fac').text('Warsaw, Poland');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/Warsaw_niversity.png'; ?>');
                    $('.tolink').attr('data-id', 'warsaw');
                } else if (dataValue == 'ireland') {
                    $('.hover-dots').css({
                        left: '536px',
                        top: '133px'
                    });
                    $('.nm-x-fac').text('Forge Design Factory');
                    $('.loc-x-fac').text('Ireland');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/forge.png'; ?>');
                    $('.tolink').attr('data-id', 'forge');
                } else if (dataValue == 'korea-hannam') {
                    $('.hover-dots').css({
                        left: '663px',
                        top: '211px'
                    });
                    $('.nm-x-fac').text('Hannam Design Factory');
                    $('.loc-x-fac').text('Hannam, South Korea');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/HDF_final_color_logo.png'; ?>');
                    $('.tolink').attr('data-id', 'hannam');
                } else if (dataValue == 'jpn-kyoto') {
                    $('.hover-dots').css({
                        left: '680px',
                        top: '221px'
                    });
                    $('.nm-x-fac').text('Kyoto Design Lab');
                    $('.loc-x-fac').text('Kyoto, Japan');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/df-3.png'; ?>');
                    $('.tolink').attr('data-id', 'kyoto');
                } else if (dataValue == 'singapore') {
                    $('.hover-dots').css({
                        left: '660px',
                        top: '393px'
                    });
                    $('.nm-x-fac').text('Design Factory SIT');
                    $('.loc-x-fac').text('Singapore');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/SIT.png'; ?>');
                    $('.tolink').attr('data-id', 'sit');
                } else if (dataValue == 'korea-seol') {
                    $('.hover-dots').css({
                        left: '660px',
                        top: '221px'
                    });
                    $('.nm-x-fac').text('Design Factory Korea');
                    $('.loc-x-fac').text('Seoul, Republic of Korea');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/korseldf-01s.png'; ?>');
                    $('.tolink').attr('data-id', 'korsel');
                } else if (dataValue == 'cina-sanghai') {
                    $('.hover-dots').css({
                        left: '660px',
                        top: '253px'
                    });
                    $('.nm-x-fac').text('Sino-Finnish Centre');
                    $('.loc-x-fac').text('Shanghai, China');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/sfc_cina.png'; ?>');
                    $('.tolink').attr('data-id', 'sfc');
                } else if (dataValue == 'nz-hamilton') {
                    $('.hover-dots').css({
                        left: '660px',
                        top: '399px'
                    });
                    $('.nm-x-fac').text('Design Factory NZ');
                    $('.loc-x-fac').text('Hamilton, New Zealand');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/df_nz.png'; ?>');
                    $('.tolink').attr('data-id', 'dfnz');
                } else if (dataValue == 'au-melbourne') {
                    $('.hover-dots').css({
                        left: '650px',
                        top: '495px'
                    });
                    $('.nm-x-fac').text('Swinburne Design Factory Melbourne');
                    $('.loc-x-fac').text('Melbourne, Australia');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/df-4.png'; ?>');
                    $('.tolink').attr('data-id', 'melbourne');
                } else if (dataValue == 'spain-barcelona') {
                    $('.hover-dots').css({
                        left: '563px',
                        top: '195px'
                    });
                    $('.nm-x-fac').text('Fusion Point');
                    $('.loc-x-fac').text('Barcelona, Spain');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/fusiopoint.png'; ?>');
                    $('.tolink').attr('data-id', 'fusion');
                } else if (dataValue == 'italy-bologna') {
                    $('.hover-dots').css({
                        left: '606px',
                        top: '173px'
                    });
                    $('.nm-x-fac').text('Oper.Space');
                    $('.loc-x-fac').text('Bologna, Italy');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/operspace.png'; ?>');
                    $('.tolink').attr('data-id', 'operspace');
                } else if (dataValue == 'israel') {
                    $('.hover-dots').css({
                        left: '707px',
                        top: '237px'
                    });
                    $('.nm-x-fac').text('Design Factory Shenkar');
                    $('.loc-x-fac').text('Tel-Aviv, Israel');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/dfs.png'; ?>');
                    $('.tolink').attr('data-id', 'dfs');
                } else if (dataValue == 'turkey-ankara') {
                    $('.hover-dots').css({
                        left: '692px',
                        top: '196px'
                    });
                    $('.nm-x-fac').text('METU Design Factory');
                    $('.loc-x-fac').text('Ankara, Türkiye');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/Metudf.png'; ?>.png');
                    $('.tolink').attr('data-id', 'metu');
                } else if (dataValue == 'finland-espoo') {
                    $('.hover-dots').css({
                        left: '649px',
                        top: '96px'
                    });
                    $('.nm-x-fac').text('Aalto Design Factory');
                    $('.loc-x-fac').text('Espoo, Finland');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/df-2.png'; ?>');
                    $('.tolink').attr('data-id', 'alto');
                } else if (dataValue == 'france-nantes') {
                    $('.hover-dots').css({
                        left: '564px',
                        top: '169px'
                    });
                    $('.nm-x-fac').text('Design Factory Nantes');
                    $('.loc-x-fac').text('Nantes, France');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/francenantes.png'; ?>');
                    $('.tolink').attr('data-id', 'france');
                } else if (dataValue == 'spain') {
                    $('.hover-dots').css({
                        left: '548px',
                        top: '206px'
                    });
                    $('.nm-x-fac').text('UPV Design Factory');
                    $('.loc-x-fac').text('Spain');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/upv.png'; ?>');
                    $('.tolink').attr('data-id', 'upv');
                } else if (dataValue == 'lithuania-vilnius') {
                    $('.hover-dots').css({
                        left: '646px',
                        top: '124px'
                    });
                    $('.nm-x-fac').text('VILNIUS TECH');
                    $('.loc-x-fac').text('Vilnius, Lithuania');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/df-6.png'; ?>');
                    $('.tolink').attr('data-id', 'vilnus');
                } else if (dataValue == 'nl-friesland') {
                    $('.hover-dots').css({
                        left: '585px',
                        top: '138px'
                    });
                    $('.nm-x-fac').text('Future Design Factory');
                    $('.loc-x-fac').text('Friesland, Netherlands');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/netherlanddf.png'; ?>');
                    $('.tolink').attr('data-id', 'futurenl');
                } else if (dataValue == 'uk-manchester') {
                    $('.hover-dots').css({
                        left: '554px',
                        top: '124px'
                    });
                    $('.nm-x-fac').text('Design Factory Manchester');
                    $('.loc-x-fac').text('Manchester, UK');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/manchesterdf.png'; ?>');
                    $('.tolink').attr('data-id', 'manchester');
                } else if (dataValue == 'uk-london') {
                    $('.hover-dots').css({
                        left: '559px',
                        top: '141px'
                    });
                    $('.nm-x-fac').text('Design Factory London');
                    $('.loc-x-fac').text('London, UK');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/londondf.png'; ?>');
                    $('.tolink').attr('data-id', 'londondf');
                } else if (dataValue == 'latvia-riga') {
                    $('.hover-dots').css({
                        left: '658px',
                        top: '118px'
                    });
                    $('.nm-x-fac').text('RTU Design Factory');
                    $('.loc-x-fac').text('Riga, Latvia');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/rtu.png'; ?>');
                    $('.tolink').attr('data-id', 'rtu');
                } else if (dataValue == 'portugal-porto') {
                    $('.hover-dots').css({
                        left: '530px',
                        top: '190px'
                    });
                    $('.nm-x-fac').text('Porto Design Factory');
                    $('.loc-x-fac').text('Porto, Portugal');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/df_porto.png'; ?>');
                    $('.tolink').attr('data-id', 'dfporto');
                } else if (dataValue == 'germany-stuttgart') {
                    $('.hover-dots').css({
                        left: '600px',
                        top: '154px'
                    });
                    $('.nm-x-fac').text('Design Factory Stuttgart');
                    $('.loc-x-fac').text('Stuttgart, Germany');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/df_stutgart.png'; ?>');
                    $('.tolink').attr('data-id', 'dfstutgart');
                } else if (dataValue == 'germany') {
                    $('.hover-dots').css({
                        left: '607px',
                        top: '140px'
                    });
                    $('.nm-x-fac').text('inno.space Design Factory Mannheim');
                    $('.loc-x-fac').text('Germany');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/inno_space.png'; ?>');
                    $('.tolink').attr('data-id', 'innospace');
                } else if (dataValue == 'portugal') {
                    $('.hover-dots').css({
                        left: '524px',
                        top: '206px'
                    });
                    $('.nm-x-fac').text('Design Factory Aveiro');
                    $('.loc-x-fac').text('Portugal');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/df-aveiro.png'; ?>');
                    $('.tolink').attr('data-id', 'dfaveiro');
                } else if (dataValue == 'estonia-tartu') {
                    $('.hover-dots').css({
                        left: '658px',
                        top: '105px'
                    });
                    $('.nm-x-fac').text('Sandbox University of Tartu');
                    $('.loc-x-fac').text('Tartu, Estonia');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/sandbox.png'; ?>');
                    $('.tolink').attr('data-id', 'sandbox');
                } else if (dataValue == 'italy-salerno') {
                    $('.hover-dots').css({
                        left: '622px',
                        top: '197px'
                    });
                    $('.nm-x-fac').text('SEIUNISA');
                    $('.loc-x-fac').text('Salerno, Italy');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/SEIUNISA.png'; ?>');
                    $('.tolink').attr('data-id', 'seiunisa');
                } else if (dataValue == 'swiss-geneva') {
                    $('.hover-dots').css({
                        left: '583px',
                        top: '164px'
                    });
                    $('.nm-x-fac').text('CERN IdeaSquare');
                    $('.loc-x-fac').text('Geneva, Switzerland');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/cern.png'; ?>');
                    $('.tolink').attr('data-id', 'cern');
                } else if (dataValue == 'nyc') {
                    $('.hover-dots').css({
                        left: '278px',
                        top: '183px'
                    });
                    $('.nm-x-fac').text('NYC Design Factory');
                    $('.loc-x-fac').text('New York City, USA');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/NYCDF_logo-01.png'; ?>');
                    $('.tolink').attr('data-id', 'nyc');
                } else if (dataValue == 'queens') {
                    $('.hover-dots').css({
                        left: '268px',
                        top: '203px'
                    });
                    $('.nm-x-fac').text('St. Johns University Design Factory');
                    $('.loc-x-fac').text('Queens, USA');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/stqueensny.webp'; ?>');
                    $('.tolink').attr('data-id', 'stqueens');
                } else if (dataValue == 'colombia-bogota') {
                    $('.hover-dots').css({
                        left: '263px',
                        top: '378px'
                    });
                    $('.nm-x-fac').text('Design Factory Javeriana');
                    $('.loc-x-fac').text('Bogota, Colombia');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/df-5.png'; ?>');
                    $('.tolink').attr('data-id', 'dfjaveriana');
                } else if (dataValue == 'colombia-cali') {
                    $('.hover-dots').css({
                        left: '226px',
                        top: '391px'
                    });
                    $('.nm-x-fac').text('Cali Design Factory');
                    $('.loc-x-fac').text('Cali, Colombia');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/cali_df-01.png'; ?>');
                    $('.tolink').attr('data-id', 'cali');
                } else if (dataValue == 'chile-santiago') {
                    $('.hover-dots').css({
                        left: '278px',
                        top: '578px'
                    });
                    $('.nm-x-fac').text('DDHUB - Duoc Design Hub');
                    $('.loc-x-fac').text('Santiago, Chile');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/ddhub.png'; ?>');
                    $('.tolink').attr('data-id', 'ddhub');
                } else if (dataValue == 'chile-concepcion') {
                    $('.hover-dots').css({
                        left: '261px',
                        top: '583px'
                    });
                    $('.nm-x-fac').text('iCubo UDD');
                    $('.loc-x-fac').text('Concepción, Chile');
                    $('#img-x-fac').attr('src', 'img/assets/df/icubo.png');
                    $('.tolink').attr('data-id', 'icubo');
                }
            } else {
                if (dataValue == 'au-sydney') {
                    $('.hover-dots').css({
                        left: '650px',
                        top: '573px'
                    });
                    $('.nm-x-fac').text('Nandin Innovation Centre');
                    $('.loc-x-fac').text('Sydney, Australia');
                    $('#img-x-fac').attr('src', 'img/assets/df/nandin.png');
                } else if (dataValue == 'finland-hamk') {
                    $('.hover-dots').css({
                        left: '635px',
                        top: '86px'
                    });
                    $('.nm-x-fac').text('HAMK Design Factory');
                    $('.loc-x-fac').text('Hamk, Finland');
                    $('#img-x-fac').attr('src', 'img/assets/df/hamk-design-factory-logo-valkoinen-pohja.png');
                    $('.tolink').attr('data-id', 'hamk');
                } else if (dataValue == 'finland-helsinki') {
                    $('.hover-dots').css({
                        left: '643px',
                        top: '97px'
                    });
                    $('.nm-x-fac').text('Viikki Food Design Factory');
                    $('.loc-x-fac').text('Helsinki, Finland');
                    $('#img-x-fac').attr('src', 'img/assets/df/df-1.png');
                    $('.tolink').attr('data-id', 'Viikki');
                } else if (dataValue == 'germany-pforzheim') {
                    $('.hover-dots').css({
                        left: '479px',
                        top: '210px'
                    });
                    $('.nm-x-fac').text('Design Factory Pforzheim');
                    $('.loc-x-fac').text('Pforzheim, Germany');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/Pforzheim.png'; ?>');
                    $('.tolink').attr('data-id', 'pforzheim');
                } else if (dataValue == 'poland-warsaw') {
                    $('.hover-dots').css({
                        left: '553px',
                        top: '193px'
                    });
                    $('.nm-x-fac').text('Warsaw Design Factory');
                    $('.loc-x-fac').text('Warsaw, Poland');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/Warsaw_niversity.png'; ?>');
                    $('.tolink').attr('data-id', 'warsaw');
                } else if (dataValue == 'ireland') {
                    $('.hover-dots').css({
                        left: '353px',
                        top: '174'
                    });
                    $('.nm-x-fac').text('Forge Design Factory');
                    $('.loc-x-fac').text('Ireland');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/forge.png'; ?>');
                    $('.tolink').attr('data-id', 'forge');
                } else if (dataValue == 'korea-hannam') {
                    $('.hover-dots').css({
                        left: '663px',
                        top: '211px'
                    });
                    $('.nm-x-fac').text('Hannam Design Factory');
                    $('.loc-x-fac').text('Hannam, South Korea');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/HDF_final_color_logo.png'; ?>');
                    $('.tolink').attr('data-id', 'hannam');
                } else if (dataValue == 'singapore') {
                    $('.hover-dots').css({
                        left: '660px',
                        top: '393px'
                    });
                    $('.nm-x-fac').text('Design Factory SIT');
                    $('.loc-x-fac').text('Singapore');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/SIT.png'; ?>');
                } else if (dataValue == 'korea-seol') {
                    $('.hover-dots').css({
                        left: '660px',
                        top: '221px'
                    });
                    $('.nm-x-fac').text('Design Factory Korea');
                    $('.loc-x-fac').text('Seoul, Republic of Korea');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/korseldf-01s.png'; ?>');
                } else if (dataValue == 'cina-sanghai') {
                    $('.hover-dots').css({
                        left: '660px',
                        top: '253px'
                    });
                    $('.nm-x-fac').text('Sino-Finnish Centre');
                    $('.loc-x-fac').text('Shanghai, China');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/sfc_cina.png'; ?>');
                } else if (dataValue == 'nz-hamilton') {
                    $('.hover-dots').css({
                        left: '660px',
                        top: '589px'
                    });
                    $('.nm-x-fac').text('Design Factory NZ');
                    $('.loc-x-fac').text('Hamilton, New Zealand');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/df_nz.png'; ?>');

                } else if (dataValue == 'au-melbourne') {
                    $('.hover-dots').css({
                        left: '650px',
                        top: '595px'
                    });
                    $('.nm-x-fac').text('Swinburne Design Factory Melbourne');
                    $('.loc-x-fac').text('Melbourne, Australia');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/df-4.png'; ?>');

                } else if (dataValue == 'spain-barcelona') {
                    $('.hover-dots').css({
                        left: '412px',
                        top: '304px'
                    });
                    $('.nm-x-fac').text('Fusion Point');
                    $('.loc-x-fac').text('Barcelona, Spain');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/fusiopoint.png'; ?>');

                } else if (dataValue == 'italy-bologna') {
                    $('.hover-dots').css({
                        left: '606px',
                        top: '173px'
                    });
                    $('.nm-x-fac').text('Oper.Space');
                    $('.loc-x-fac').text('Bologna, Italy');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/operspace.png'; ?>');
                } else if (dataValue == 'israel') {
                    $('.hover-dots').css({
                        left: '707px',
                        top: '237px'
                    });
                    $('.nm-x-fac').text('Design Factory Shenkar');
                    $('.loc-x-fac').text('Tel-Aviv, Israel');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/dfs.png'; ?>');
                } else if (dataValue == 'turkey-ankara') {
                    $('.hover-dots').css({
                        left: '692px',
                        top: '196px'
                    });
                    $('.nm-x-fac').text('METU Design Factory');
                    $('.loc-x-fac').text('Ankara, Türkiye');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/Metudf.png'; ?>.png');
                } else if (dataValue == 'finland-espoo') {
                    $('.hover-dots').css({
                        left: '649px',
                        top: '96px'
                    });
                    $('.nm-x-fac').text('Aalto Design Factory');
                    $('.loc-x-fac').text('Espoo, Finland');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/df-2.png'; ?>');
                } else if (dataValue == 'france-nantes') {
                    $('.hover-dots').css({
                        left: '423px',
                        top: '251px'
                    });
                    $('.nm-x-fac').text('Design Factory Nantes');
                    $('.loc-x-fac').text('Nantes, France');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/francenantes.png'; ?>');
                } else if (dataValue == 'spain') {
                    $('.hover-dots').css({
                        left: '388px',
                        top: '329px'
                    });
                    $('.nm-x-fac').text('UPV Design Factory');
                    $('.loc-x-fac').text('Spain');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/upv.png'; ?>');
                } else if (dataValue == 'lithuania-vilnius') {
                    $('.hover-dots').css({
                        left: '646px',
                        top: '124px'
                    });
                    $('.nm-x-fac').text('VILNIUS TECH');
                    $('.loc-x-fac').text('Vilnius, Lithuania');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/df-6.png'; ?>');
                } else if (dataValue == 'nl-friesland') {
                    $('.hover-dots').css({
                        left: '460px',
                        top: '192px'
                    });
                    $('.nm-x-fac').text('Future Design Factory');
                    $('.loc-x-fac').text('Friesland, Netherlands');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/netherlanddf.png'; ?>');
                } else if (dataValue == 'uk-manchester') {
                    $('.hover-dots').css({
                        left: '404px',
                        top: '169px'
                    });
                    $('.nm-x-fac').text('Design Factory Manchester');
                    $('.loc-x-fac').text('Manchester, UK');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/manchesterdf.png'; ?>');
                } else if (dataValue == 'uk-london') {
                    $('.hover-dots').css({
                        left: '411px',
                        top: '199px'
                    });
                    $('.nm-x-fac').text('Design Factory London');
                    $('.loc-x-fac').text('London, UK');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/londondf.png'; ?>');
                } else if (dataValue == 'latvia-riga') {
                    $('.hover-dots').css({
                        left: '658px',
                        top: '118px'
                    });
                    $('.nm-x-fac').text('RTU Design Factory');
                    $('.loc-x-fac').text('Riga, Latvia');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/rtu.png'; ?>');
                } else if (dataValue == 'portugal-porto') {
                    $('.hover-dots').css({
                        left: '352px',
                        top: '302px'
                    });
                    $('.nm-x-fac').text('Porto Design Factory');
                    $('.loc-x-fac').text('Porto, Portugal');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/df_porto.png'; ?>');
                } else if (dataValue == 'germany-stuttgart') {
                    $('.hover-dots').css({
                        left: '490px',
                        top: '222px'
                    });
                    $('.nm-x-fac').text('Design Factory Stuttgart');
                    $('.loc-x-fac').text('Stuttgart, Germany');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/df_stutgart.png'; ?>');
                } else if (dataValue == 'germany') {
                    $('.hover-dots').css({
                        left: '501px',
                        top: '194px'
                    });
                    $('.nm-x-fac').text('inno.space Design Factory Mannheim');
                    $('.loc-x-fac').text('Germany');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/inno_space.png'; ?>');
                } else if (dataValue == 'portugal') {
                    $('.hover-dots').css({
                        left: '347px',
                        top: '325'
                    });
                    $('.nm-x-fac').text('Design Factory Aveiro');
                    $('.loc-x-fac').text('Portugal');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/df-aveiro.png'; ?>');
                } else if (dataValue == 'estonia-tartu') {
                    $('.hover-dots').css({
                        left: '658px',
                        top: '105px'
                    });
                    $('.nm-x-fac').text('Sandbox University of Tartu');
                    $('.loc-x-fac').text('Tartu, Estonia');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/sandbox.png'; ?>');
                } else if (dataValue == 'italy-salerno') {
                    $('.hover-dots').css({
                        left: '622px',
                        top: '197px'
                    });
                    $('.nm-x-fac').text('SEIUNISA');
                    $('.loc-x-fac').text('Salerno, Italy');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/SEIUNISA.png'; ?>');
                } else if (dataValue == 'swiss-geneva') {
                    $('.hover-dots').css({
                        left: '466px',
                        top: '247px'
                    });
                    $('.nm-x-fac').text('CERN IdeaSquare');
                    $('.loc-x-fac').text('Geneva, Switzerland');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/cern.png'; ?>');
                } else if (dataValue == 'nyc') {
                    $('.hover-dots').css({
                        left: '602px',
                        top: '183px'
                    });
                    $('.nm-x-fac').text('NYC Design Factory');
                    $('.loc-x-fac').text('New York City, USA');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/NYCDF_logo-01.png'; ?>');

                } else if (dataValue == 'queens') {
                    $('.hover-dots').css({
                        left: '576px',
                        top: '203px'
                    });
                    $('.nm-x-fac').text('St. Johns University Design Factory');
                    $('.loc-x-fac').text('Queens, USA');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/stqueensny.webp'; ?>');

                } else if (dataValue == 'colombia-bogota') {
                    $('.hover-dots').css({
                        left: '585px',
                        top: '378px'
                    });
                    $('.nm-x-fac').text('Design Factory Javeriana');
                    $('.loc-x-fac').text('Bogota, Colombia');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/df-5.png'; ?>');
                } else if (dataValue == 'colombia-cali') {
                    $('.hover-dots').css({
                        left: '557px',
                        top: '391px'
                    });
                    $('.nm-x-fac').text('Cali Design Factory');
                    $('.loc-x-fac').text('Cali, Colombia');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/cali_df-01.png'; ?>');

                } else if (dataValue == 'chile-santiago') {
                    $('.hover-dots').css({
                        left: '599px',
                        top: '578px'
                    });
                    $('.nm-x-fac').text('DDHUB - Duoc Design Hub');
                    $('.loc-x-fac').text('Santiago, Chile');
                    $('#img-x-fac').attr('src', '<?php echo get_template_directory_uri() . '/assets/img/assets/df/ddhub.png'; ?>');

                } else if (dataValue == 'chile-concepcion') {
                    $('.hover-dots').css({
                        left: '596px',
                        top: '583px'
                    });
                    $('.nm-x-fac').text('iCubo UDD');
                    $('.loc-x-fac').text('Concepción, Chile');
                    $('#img-x-fac').attr('src', 'img/assets/df/icubo.png');

                }
            }

        });

        $(document).click(function(event) {
            if (!$(event.target).closest('.hover-dots').length && !$(event.target).is('.dots-map')) {
                // Sematikan div box
                $('.hover-dots').animate({
                    opacity: 0
                }, 100, function() {
                    $(this).css('display', 'none');

                });
            }
        });
    });
</script>

<script>
    $(document).ready(function() {

        $('#select-countries').awselect({
            background: "#182224", //the dark blue background
            active_background: "#182224", // the light blue background
            placeholder_color: "#FFFFFF", // the light blue placeholder color
            placeholder_active_color: "#FFFFFF", // the dark blue placeholder color
            option_color: "#FFFFFF", // the option colors

            horizontal_padding: "29px", // left and right padding,
            immersive: false // immersive option, demonstrated at the next example
        });

        $("#select-countries").change(function() {
            var selectedContinent = $(this).val();
            $('.continent').css('display', 'none').animate({
                opacity: 0
            }, 500);
            $('#' + selectedContinent).css('display', 'inline-block').animate({
                opacity: 1
            }, 500);
            // $('.continent').fadeOut();
            // $('#' + selectedContinent).fadeIn();

            $('.box-dots').css('display', 'none').animate({
                opacity: 0
            }, 500);
            // $('.box-dots').fadeOut();
            // $('#b-' + selectedContinent).fadeIn();
            $('#b-' + selectedContinent).css('display', 'block').animate({
                opacity: 1
            }, 500);
        });

        $(".dots-map-dob").click(function() {
            var selectedContinent = "m-europe";
            $('.continent').css('display', 'none').animate({
                opacity: 0
            }, 500);
            $('#' + selectedContinent).css('display', 'inline-block').animate({
                opacity: 1
            }, 500);
            // $('.continent').fadeOut();
            // $('#' + selectedContinent).fadeIn();

            $('.box-dots').css('display', 'none').animate({
                opacity: 0
            }, 500);
            // $('.box-dots').fadeOut();
            // $('#b-' + selectedContinent).fadeIn();
            $('#b-' + selectedContinent).css('display', 'block').animate({
                opacity: 1
            }, 500);
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const marquee = document.querySelector(".marquee");
        const logos = document.querySelectorAll(".marquee img");

        // Menghitung lebar total marquee
        let marqueeWidth = 0;
        logos.forEach(logo => {
            marqueeWidth += logo.offsetWidth;
        });

        // Kloning gambar-gambar untuk melanjutkan animasi tanpa jeda
        logos.forEach(logo => {
            const clone = logo.cloneNode(true);
            marquee.appendChild(clone);
        });

        // Animasi marquee
        function animateMarquee() {
            gsap.to(marquee, {
                duration: 30, // Durasi animasi (10 detik)
                x: -marqueeWidth, // Menggerakkan marquee ke kiri sejauh lebar marquee
                ease: "linear",
                onComplete: function() {
                    gsap.set(marquee, {
                        x: 0
                    }); // Mengatur ulang posisi marquee ke awal
                    animateMarquee(); // Mulai kembali animasi
                }
            });
        }

        animateMarquee(); // Mulai animasi pertama kali
    });

    // MARQUE 2
    document.addEventListener("DOMContentLoaded", function() {
        const marquee = document.querySelector(".marquee2");
        const logos = document.querySelectorAll(".marquee2 img");

        // Menghitung lebar total marquee
        let marqueeWidth = 0;
        logos.forEach(logo => {
            marqueeWidth += logo.offsetWidth;
        });

        // Kloning gambar-gambar untuk melanjutkan animasi tanpa jeda
        logos.forEach(logo => {
            const clone = logo.cloneNode(true);
            marquee.appendChild(clone);
        });

        // Animasi marquee
        function animateMarquee() {
            gsap.to(marquee, {
                duration: 40, // Durasi animasi (10 detik)
                x: -marqueeWidth, // Menggerakkan marquee ke kiri sejauh lebar marquee
                ease: "linear",
                onComplete: function() {
                    gsap.set(marquee, {
                        x: 0
                    }); // Mengatur ulang posisi marquee ke awal
                    animateMarquee(); // Mulai kembali animasi
                }
            });
        }

        animateMarquee(); // Mulai animasi pertama kali
    });

    // MARQUE 3

    document.addEventListener("DOMContentLoaded", function() {
        const marquee = document.querySelector(".marquee3");
        const logos = document.querySelectorAll(".marquee3 img");

        // Menghitung lebar total marquee
        let marqueeWidth = 0;
        logos.forEach(logo => {
            marqueeWidth += logo.offsetWidth;
        });

        // Kloning gambar-gambar untuk melanjutkan animasi tanpa jeda
        logos.forEach(logo => {
            const clone = logo.cloneNode(true);
            marquee.appendChild(clone);
        });

        // Animasi marquee
        function animateMarquee() {
            gsap.to(marquee, {
                duration: 20, // Durasi animasi (10 detik)
                x: -marqueeWidth, // Menggerakkan marquee ke kiri sejauh lebar marquee
                ease: "linear",
                onComplete: function() {
                    gsap.set(marquee, {
                        x: 0
                    }); // Mengatur ulang posisi marquee ke awal
                    animateMarquee(); // Mulai kembali animasi
                }
            });
        }

        animateMarquee(); // Mulai animasi pertama kali
    });
</script>
<script>
    gsap.registerPlugin(ScrollTrigger, MorphSVGPlugin, ScrollSmoother);

    var endShape = document.getElementById("pat2");



        // var txtl = gsap.timeline({
        //     scrollTrigger: {
        //     trigger: ".df-in-numbers",
        //     scrub: 1,
        //     // markers: true,
        //     start: "50 top",
        //     end: "+=100%",
        //     toggleActions: 'play none none none'
        //     },
        // });

        // txtl.from(".fsec-title", {
        //     y: "100%",
        //     opacity: 1,
        //     stagger: 0.3,
        //     duration: 1.2,
        //     delay: 0.6,
        //     ease: "power4.out",
        //     stagger: {
        //         each: 0.3,
        //         from: "start",
        //         ease: "none"
        //     }
        // });

        // var t_fade = gsap.timeline({
        //     scrollTrigger: {
        //     trigger: ".title-fade",
        //     scrub: 1,
        //     // markers: true,
        //     start: "top top",
        //     end: "+=100%",
        //     toggleActions: 'play none none none'
        //     },
        // });

        // t_fade.from(".fade-tile, .text", {
        //     y: "100%",
        //     opacity: 1,
        //     stagger: 0.3,
        //     duration: 1.2,
        //     delay: 0.6,
        //     ease: "power4.out",
        //     stagger: {
        //         each: 0.3,
        //         from: "start",
        //         ease: "none"
        //     }
        // });

    gsap.set("#patdots", {
        transformOrigin: "top top",
        translate: "-46px -161px",
        scale: 0.96
    });
    gsap.set("#pat1", {
        transformOrigin: "top top",
        translate: "-62px -170px",
        opacity: 1,
        visibility: "visible",
    });

    gsap.set(endShape, {
        scale: 0.2,
        transformOrigin: "center center",
        opacity: 0,
        visibility: "hidden",
    });
    gsap.set("#pat3", {
        scale: 0.2,
        transformOrigin: "center center",
        opacity: 0,
        visibility: "hidden",
    });
    var tl = gsap.timeline({
        scrollTrigger: {
            trigger: ".slider-scroll",
            scrub: 1,
            pin: true,
            // markers: true,
            start: "top top",
            end: "+=110%",
            // toggleActions: "play pause play reset",
        },
    });

    tl.to("#pat1", {
        morphSVG: {
            shape: "#pat2",
            type: "rotational",
            origin: "50% 70%",
            // map: "complexity"
        },
        translate: "0px 0px",
        duration: 1,
        delay: 1,
        ease: "Power0.easeNone",
        scale: 1,

    });

    tl.to("#pat1", {
        morphSVG: {
            shape: "#pat3",
            type: "rotational",
            origin: "65% 60%",
        },
        duration: 3,
        translate: "0px 0px",
        ease: "power3.in",
        scale: 2,
        opacity: 0.6,
        visibility: "visible",

    });



    gsap.to(".main-text-ab", {
        scrollTrigger: {
            trigger: "#pat3",
            start: "300 top",
            end: "+=100%",
            scrub: 1,
            // markers:true,

        },
        visibility: "visible",
        delay: 3,
        ease: "slow(0.7,0.7,false)",
        yPercent: -100

    });
    gsap.set("#patlonj", {
        scale: 0.96,
        transformOrigin: "center center",
        translate: "-66% 2px",
    });
    gsap.to("#patlonj", {
        scrollTrigger: {
            trigger: ".slide-frist",
            start: "100 top",
            end: "+=100",
            scrub: 3,
            // markers:true,

        },
        x: "-160%",
        // x: "-100%", // Geser ke kiri sejauh 100%
        duration: 3,
        ease: "power1.out",

    });

    gsap.set("#s-yellow", {
        translate: "64.6% -3px"
    });
    gsap.to("#s-yellow", {
        scrollTrigger: {
            trigger: ".slide-frist",
            start: "100 top",
            end: "+=100",
            scrub: 3,
            // markers:true

        },
        x: "-100%",
        // x: "-100%", // Geser ke kiri sejauh 100%
        duration: 3,
        delay: 3,
        ease: "power1.out",

    });
    gsap.to("#patdots", {
        scrollTrigger: {
            trigger: ".slide-frist",
            start: "100 top",
            end: "+=100",
            scrub: 3,
            // markers:true

        },
        visibility: "hidden",
        // x: "-100%", // Geser ke kiri sejauh 100%
        duration: 3,
        delay: 3,
        ease: "power1.out",

    });
    gsap.to("#patdots", {
        scrollTrigger: {
            trigger: "#pat1",
            start: "400 top",
            end: "+=150",
            scrub: 1,
            // markers:true,

        },
        // morphSVG: { shape: "#pat2", map: "complexity" }
        opacity: 0

    });


    gsap.to(".text-ss", {
        scrollTrigger: {
            trigger: ".slider-scroll",
            start: "top top",
            end: "+=100",
            scrub: 3,
            // markers:true,

        },
        y: "-80%",
        // x: "-100%", // Geser ke kiri sejauh 100%
        duration: 3,
        ease: "power1.out",
        opacity: 0,

    });
</script>
<script>
    // Function to format numbers
    function formatNumber(num) {
        if (num >= 10000) {
            return Math.floor(num / 1000) + 'K';
        }
        return num.toLocaleString();
    }

    // Function to animate counters
    function animateCounter(element) {
        const endValue = parseInt(element.getAttribute('data-count'));
        const numberElement = element.querySelector('.number');
        gsap.fromTo(numberElement, {
            innerText: 0
        }, {
            innerText: endValue,
            duration: 2,
            ease: 'power1.out',
            scrollTrigger: {
                trigger: element,
                start: 'top 90%', // Start animation when the element is 90% from the top of the viewport
                toggleActions: 'play none none none' // Play the animation only once
            },
            snap: {
                innerText: 1
            }, // Ensure the number is an integer during the animation
            onUpdate: function() {
                numberElement.innerText = formatNumber(Math.round(numberElement.innerText));
            }
        });
    }

    // Select all counters and animate them
    document.querySelectorAll('.counter').forEach(animateCounter);
</script>