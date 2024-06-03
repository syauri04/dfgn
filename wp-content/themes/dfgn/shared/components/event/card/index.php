<?php
$data = $param['data'];
?>

<div class="col-12 pb-27 grid-events-items <?php echo $data['category']->slug; ?>">
    <div class="event-sec">
        <div class="ev-image">
            <img src="<?php echo $data['thumbnail_events']; ?>" alt="">
        </div>
        <div class="ev-info" style="display: flex; flex-direction: column; justify-content: space-between;">
            <div class="eventso">
                <h1><?php echo $data['title_events']; ?></h1>
                <p><?php echo $data['description_events']; ?></p>
            </div>
            <div>
                <div class="eventags" style="gap: 20px; padding: 25px 36px; margin-bottom:24px">
                    <div style="display: flex; gap: 10px; align-items: center;">
                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/Isolation_Mode.png'; ?>" alt="" style="width: 23px; height: auto; aspect-ratio: 1/1;">
                        </div>
                        <div>Typically held in <?php echo $data['month_st']; ?>-<?php echo $data['month_end']; ?></div>
                    </div>
                    <div style="display: flex; gap: 10px; align-items: center;">
                        <div>
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/Isolation_Mode.png'; ?>" alt="" style="width: 23px; height: auto; aspect-ratio: 1/1;">
                        </div>
                        <div>Zoom</div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-md-row align-items-center" style="gap: 20px; justify-content: space-between;">
                    <?php if (!empty($data['link'])) : ?>
                        <a class="btn-outline-white" href="<?php echo $data['link']; ?>">Visit site</a>
                    <?php endif ?>
                    <div class="countdown" data-end-time="<?php echo $data['timestamp_end']; ?>" style="display: flex; justify-content: space-between; gap: 5px; align-items: center;">
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
                    <a class="btn-outline-white" href="javascript:void(0);" onclick="addToCalendar('<?php echo $data['event_id']; ?>', '<?php echo htmlspecialchars($data['title_events'], ENT_QUOTES); ?>', '<?php echo htmlspecialchars($data['description_events'], ENT_QUOTES); ?>', '<?php echo htmlspecialchars($data['date_start'], ENT_QUOTES); ?>', '<?php echo htmlspecialchars($data['date_end'], ENT_QUOTES); ?>', '<?php echo htmlspecialchars($data['location_events'], ENT_QUOTES); ?>')">Add to calendar</a>
                </div>
            </div>
        </div>
    </div>
</div>
