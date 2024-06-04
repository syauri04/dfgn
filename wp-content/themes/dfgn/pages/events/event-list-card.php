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


<?php RenderStyle::Style() ?>
<style>
    /* penamaan kelas seharusnya khusus */
    @media (max-width: 1240px) {
        .event-sec {
            max-height: unset;
            flex-direction: column;
            border-radius: 41px;
        }

        .ev-image img {
            width: 100%;
        }

        .ev-info {
            padding: 35px;
        }
    }
</style>
<?php RenderStyle::EndStyle() ?>

<script>
    $(document).ready(function() {
        $(".grid-events").imagesLoaded(function() {
            var $grid = $(".grid-events").isotope({
                itemSelector: ".grid-events-items",
                layoutMode: 'fitRows'
            });

            // Trigger layout after initialization
            $grid.isotope('layout');

            $('#select-event').on('change', function() {
                var filterValue = $(this).val();
                $grid.isotope({
                    filter: filterValue
                });
            });
        });
    });
</script>
