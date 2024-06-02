<section class="section-area">
    <div class="container">
        <div class="section-tool-bar xasdqw">
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
            <?php include 'event-list-card.php' ?>
        </div>
        <div class="pb-27 bread-ev-container">
            <div class="bread-ev" style="background: linear-gradient(0deg, rgba(24, 34, 36, 0.90) 0%, rgba(24, 34, 36, 0.90) 100%), url(<?php the_field('background_image'); ?>) lightgray 50% / cover no-repeat;">
                <div class="trainings-ev">
                    <h1><?php the_field('title_trainings'); ?></h1>
                    <p><?php the_field('description_trainings'); ?></p>
                </div>
            </div>
        </div>
        <div class="row section-tool-bar train mjqweu">
            <div class="col-xl-12 d-flex boxies even">
                <div class="tab-left">
                    <h1><?php the_field('title_specific_training'); ?></h1>
                </div>
                <div class="txt-right select-df">
                    <p><?php the_field('desc_specific_training'); ?></p>
                </div>
            </div>
        </div>
        <div class="row pt-27 parent-box">
            <?php
            if (have_rows('detail_specific_training')) :
                $index = 0;
                while (have_rows('detail_specific_training')) : the_row();
                    $classc = ($index % 2 === 0) ? 'green' : 'red';
            ?>
                    <div class="col-xl-6 col-md-6 custom-box-container">
                        <div class="custom-box <?php echo $classc; ?>">
                            <h1><?php echo get_sub_field('title_content'); ?></h1>
                            <p><?php echo get_sub_field('desc_content'); ?></p>
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
