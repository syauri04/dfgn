<main>

    <?php
    include 'slider-scroll.php';
    include 'event-list.php';
    ?>

    <?php _include('shared/components/contact-us-cta/index.php', [
        "title" => "Get support for your institution"
    ]); ?>
</main>

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