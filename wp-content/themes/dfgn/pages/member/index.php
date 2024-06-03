<?php
include 'style.css.php';
?>
<!-- slider-area -->
<!-- main-start -->
<main>
    <section class="section-breadcrumbs pt-70">
        <div class="container">
            <div class="row border-head-df member-area">
                <div class="col-xl-12 d-flex boxies even">
                    <div class="tab-left">
                        <h1>
                            <?php the_field('title_breadcrumbs'); ?>
                        </h1>
                    </div>

                    <div class="txt-right select-df">
                        <p>
                            <?php the_field('summary_breadcrumbs'); ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- LIST GUIDE -->
            <div class="row card-guide">
                <?php
                if (have_rows('dfgn_guide')) :
                    $index = 0;
                    $classes = ['', 'white', 'red'];
                    while (have_rows('dfgn_guide')) : the_row();

                        $classcol = $classes[$index % count($classes)];
                ?>
                        <div class="col-xl-4 col-lg-4 col-md-5 bx_ct_f">
                            <div class="bx_lt_guide <?php echo $classcol; ?>">
                                <div class="guide_ic">
                                    <img src="<?php echo get_sub_field('icon_guide'); ?>" alt="">
                                </div>
                                <div class="guide_tx">
                                    <p><?php echo get_sub_field('title_guide'); ?></p>
                                </div>
                                <div class="guide_sum">
                                    <p>
                                        <?php echo get_sub_field('summary_guide'); ?>
                                    </p>
                                </div>
                                <div class="guide_lk">
                                    <a href="<?php echo get_sub_field('link_guide'); ?>">See more</a>
                                </div>
                            </div>
                        </div>
                <?php
                        $index++;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>

    <section class="section-area">
        <div class="container">
            <div class="row pt-80 pb-70">
                <div class="col-xl-12  d-inline-flex">
                    <div class="col-lg-9 section-title">
                        <h1>DFGN resources and instructions</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                if (have_rows('list_resources')) :
                    $index = 0;
                    while (have_rows('list_resources')) : the_row();
                        $file_res = get_sub_field('file_for_resources');
                        $url_res = get_sub_field('link_for_resources');
                        if ($file_res != "") {
                            $link_get = $file_res;
                        } else {
                            $link_get = $url_res;
                        }
                ?>
                        <div class="col-lg-4 col-md-4 col-sm-2 bx_ct_f">
                            <div class="res_member_bx" style=" background-image: url(<?php echo get_sub_field('image_for_resources'); ?>);">
                                <div class="hover-desc">
                                    <p><?php echo get_sub_field('short_insights'); ?></p>
                                </div>
                                <div class="res_overly_info">

                                    <div class="title_res_ct">
                                        <h1><?php echo get_sub_field('title_of_resource'); ?></h1>
                                    </div>
                                    <div class="dw_rest_ct">
                                        <div class="circle_ic_dw">
                                            <a href="<?php echo $link_get ?>" target="_blank">
                                                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/Download.png'; ?>" alt="">
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                        $index++;
                    endwhile;
                endif;
                ?>

            </div>
        </div>

        <!-- COMM -->
        <div class="container">
            <div class="row pb-70 pt-70">
                <div class="col-xl-12 d-inline-flex">
                    <div class="col-lg-9 section-title">
                        <h1>Communications</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                if (have_rows('list_communications')) :
                    $index = 0;
                    while (have_rows('list_communications')) : the_row();
                        $join = get_sub_field('link_join');


                ?>
                        <div class="col-xl-4 col-md-4 bx_ct_f">
                            <div class="boxies-team member-area">

                                <div class="img-team">
                                    <!-- <div class="gradient-overlay"></div> -->

                                    <img class="pro" src="<?php echo get_sub_field('cover_image'); ?>" alt="">
                                </div>
                                <div class="info-team">
                                    <div class="short-comm tt_of_ct">
                                        <h1><?php echo get_sub_field('title_comm'); ?></h1>
                                        <p><?php echo get_sub_field('short_comm'); ?></p>
                                    </div>
                                    <div class="pro-tips tt_of_ct">
                                        <h1>Pro-tips</h1>
                                        <?php echo get_sub_field('pro-tips'); ?>
                                    </div>
                                </div>
                                <?php
                                if ($join != "") {
                                ?>
                                    <div class="btn-primer-dfg">
                                        <a href="<?php echo $join; ?>" target="_blank">Join</a>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="btn-primer-dfg email">
                                        <a href="mailto:<?php echo get_sub_field('first_email'); ?>">Mail Felipe</a>
                                        <a href="mailto:<?php echo get_sub_field('second_email'); ?>">Mail Sara</a>
                                    </div>
                                <?php
                                }
                                ?>


                            </div>
                        </div>
                <?php
                        $index++;
                    endwhile;
                endif;
                ?>
            </div>
        </div>

        <!-- DATES EVENT -->
        <!-- COMM -->
        <div class="container">
            <div class="row pb-70 pt-70">
                <div class="col-xl-12 d-inline-flex">
                    <div class="col-lg-9 section-title">
                        <h1>Dates to keep in mind in 2024 and 2025</h1>
                    </div>
                </div>
            </div>

            <div class="row pt-27 grid-events">
                <?php
                // Dapatkan data dari repeater ACF
                $repeater_calendar = get_field('input_events', '17');

                // Balik urutan array
                $repeater_calendar = array_reverse($repeater_calendar);

                // Loop untuk menampilkan data yang telah diurutkan
                if ($repeater_calendar) {

                    foreach ($repeater_calendar as $item) {
                        $category_id = $item['type_events']; // Adjust this to match the name of your category field
                        $category = get_term_by('id', $category_id, 'category');

                        $timestamp_st = strtotime($item['date_start']);
                        $timestamp_end = strtotime($item['date_end']);
                        $month_st = date('F', $timestamp_st);
                        $month_end = date('F', $timestamp_end);
                ?>
                        <div class="col-12 pb-27 grid-events-items <?php echo $category->slug; ?>">
                            <div class="event-sec">
                                <div class="ev-image">
                                    <img src="<?php echo $item['thumbnail_events']; ?>" alt="">
                                </div>
                                <div class="ev-info">
                                    <div class="eventso">
                                        <h1><?php echo $item['title_events']; ?></h1>
                                        <p><?php echo $item['description_events']; ?></p>
                                    </div>
                                    <div class="eventags">
                                        <div class="mon">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/Isolation_Mode.png'; ?>" alt="">
                                            <span>Typically held in <?php echo $month_st; ?>-<?php echo $month_end; ?></span>

                                        </div>
                                        <div class="loc">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/Isolation_loc_white.png'; ?>" alt="">
                                            <span>zoom</span>

                                        </div>
                                    </div>
                                    <div class="eventlinks">

                                        <div class="wbs innel_left">
                                            <?php
                                            if ($item['link'] != '') {
                                            ?>
                                                <a href="<?php echo $item['link']; ?>">Visit site</a>
                                            <?php
                                            }
                                            ?>

                                        </div>
                                        <div class="wbs">

                                            <a href="<?php echo $item['link']; ?>">Add to calendar</a>


                                        </div>

                                    </div>
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
</main>

<?php RenderJS::start() ?>
<script>
    $(document).ready(function() {
        $('#select-event').awselect({
            background: "#182224", //the dark blue background
            active_background: "#182224", // the light blue background
            placeholder_color: "#FFFFFF", // the light blue placeholder color
            placeholder_active_color: "#FFFFFF", // the dark blue placeholder color
            option_color: "#FFFFFF", // the option colors
            vertical_padding: "10px", //top and bottom padding
            horizontal_padding: "22px", // left and right padding,
            immersive: false // immersive option, demonstrated at the next example
        });
    });
</script>
<?php RenderJS::end() ?>