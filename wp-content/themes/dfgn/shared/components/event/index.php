<?php
include 'script.js.php';
include 'style.php';
?>

<?php
$eventData = $param['eventData']
// tambah kondisi disini mau pakai filter / engga
?>

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

    <?php
    $repeater_calendar = $eventData;
    $repeater_calendar = array_reverse($repeater_calendar);

    if ($repeater_calendar) {
        $events = []; // Inisialisasi array events

        foreach ($repeater_calendar as $item) {
            $category_id = $item['type_events'];
            $category = get_term_by('id', $category_id, 'category');

            $timestamp_st = strtotime($item['date_start']);
            $timestamp_end = strtotime($item['date_end']);
            $month_st = date('F', $timestamp_st);
            $month_end = date('F', $timestamp_end);
            $event_id = uniqid('event_');

            $event_data = array(
                'category' => $category,
                'date_start' => date('Y-m-d', $timestamp_st),
                'date_end' => date('Y-m-d', $timestamp_end),
                'timestamp_end' => $timestamp_end,
                'month_st' => $month_st,
                'month_end' => $month_end,
                'event_id' => $event_id,
                'thumbnail_events' => $item['thumbnail_events'],
                'title_events' => $item['title_events'],
                'description_events' => $item['description_events'],
                'link' => $item['link'],
                // 'location_events' => $item['location_events']
            );
            $events[] = $event_data;
        }

        foreach ($events as $event) {
            _include('shared/components/event/card/index.php', [
                "data" => $event
            ]);
        }
    } else {
        echo '<p>No data found.</p>';
    }
    ?>

</div>