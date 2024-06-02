<div>
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
            $event_id = uniqid('event_'); // Unique ID for each event
    ?>
            <div class="col-12 pb-27 grid-events-items <?php echo $category->slug; ?>">
                <div class="event-sec">
                    <div class="ev-image">
                        <img src="<?php echo $item['thumbnail_events']; ?>" alt="">
                    </div>
                    <div class="ev-info" style=" display: flex; flex-direction: column; justify-content: space-between; ">
                        <div class="eventso">
                            <h1><?php echo $item['title_events']; ?></h1>
                            <p><?php echo $item['description_events']; ?></p>
                        </div>
                        <div>
                            <div class="eventags" style="gap: 20px;padding: 25px 36px;margin-bottom:24px">
                                <div class="" style="display: flex;gap: 10px;align-items: center;">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/Isolation_Mode.png'; ?>" alt="" style="width: 23px;height: auto;aspect-ratio: 1/1;">
                                    </div>
                                    <div>Typically held in <?php echo $month_st; ?>-<?php echo $month_end; ?></div>
                                </div>
                                <div class="" style="display: flex;gap: 10px;align-items: center;">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/Isolation_Mode.png'; ?>" alt="" style="width: 23px;height: auto;aspect-ratio: 1/1;">
                                    </div>
                                    <div>Zoom</div>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-md-row align-items-center" style=" gap: 20px; justify-content: space-between; ">
                                <?php if (isset($item['link'])) : ?>
                                    <a class="btn-outline-white" href="<?php echo $item['link']; ?>">Visit site</a>
                                <?php endif ?>
                                <div class="countdown" data-end-time="<?php echo $timestamp_end ?>" style="display: flex;justify-content:space-between;gap: 5px;align-items: center;">
                                    <div>
                                        <b class="days">0</b> Days
                                    </div>
                                    <div>
                                        <b class="hours">0</b> Hours
                                    </div>
                                    <div>
                                        <b class="minutes">0</b> Minutes
                                    </div>
                                </div>
                                <a class="btn-outline-white" href="javascript:void(0);" onclick="addToCalendar('<?php echo $event_id; ?>', '<?php echo $item['title_events']; ?>', '<?php echo $item['description_events']; ?>', '<?php echo $item['date_start']; ?>', '<?php echo $item['date_end']; ?>', '<?php echo $item['location_events']; ?>')">Add to calendar</a>
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