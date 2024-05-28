<section class="section-area">
    <div class="container c-event">
        <div class="row border-head-df">
            <div class="col-xl-12 d-flex boxies even">
                <div class="tab-left">
                    <h1>
                        WorldSync: <br>The DFGN calendar
                    </h1>
                </div>

                <div class="txt-right select-df">

                    <select id="select-event" name="pilihan" data-placeholder="All Event">
                        <option value="*">All Event</option>
                        <option value=".courses">Courses</option>
                        <option value=".trainings">Trainings</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row pt-27 grid-events">
            <?php
            // Dapatkan data dari repeater ACF
            $repeater_calendar = get_field('input_events');

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
                                    <div class="wbs">
                                        <?php
                                        if ($item['link'] != '') {
                                        ?>
                                            <a href="<?php echo $item['link']; ?>">Visit site</a>
                                        <?php
                                        }
                                        ?>

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

        <div class="row pb-27">
            <div class="bread-ev" style="background: linear-gradient(0deg, rgba(24, 34, 36, 0.90) 0%, rgba(24, 34, 36, 0.90) 100%), url(<?php the_field('background_image'); ?>) lightgray 50% / cover no-repeat;">
                <div class="trainings-ev">
                    <h1><?php the_field('title_trainings'); ?></h1>
                    <p>
                        <?php the_field('description_trainings'); ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="row border-head-df train">
            <div class="col-xl-12 d-flex boxies even">
                <div class="tab-left">
                    <h1>
                        <?php the_field('title_specific_training'); ?>
                    </h1>
                </div>

                <div class="txt-right select-df">
                    <p>
                        <?php the_field('desc_specific_training'); ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="row pt-27">
            <?php
            if (have_rows('detail_specific_training')) :
                $index = 0;
                while (have_rows('detail_specific_training')) : the_row();

                    $classc = ($index % 2 === 0) ? 'green' : 'red';
            ?>
                    <div class="col-xl-6 col-md6">
                        <div class="box-train <?php echo $classc; ?>">
                            <h1><?php echo get_sub_field('title_content'); ?></h1>
                            <p>
                                <?php echo get_sub_field('desc_content'); ?>
                            </p>
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


<?php RenderStyle::Style() ?>
<style>
    /* penamaan kelas seharusnya khusus */
    @media (max-width: 991px) {
        .row.border-head-df {
            margin: 90px 0 0;
            padding: 28px;
            border-radius: 41px;
        }

        .col-xl-12.d-flex.boxies.even {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
        }

        .even h1 {
            font-size: 20px;
            line-height: normal;
            width: auto;
        }

        .txt-right.select-df {
            min-width: 162px;
        }
    }
</style>
<?php RenderStyle::EndStyle() ?>