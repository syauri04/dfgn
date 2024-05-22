<main>
    <!-- slider-area -->
    <?php _include(get_template_directory() . "/pages/insight/components/slide-area.php") ?>

    <!-- Recent Publication -->
    <!-- Struktur Array Object bisa kaya gini -->
    <?php
    $data = [
        [
            "title" => "asdasdasdasd",
            "thumbnail_url" => "",
            "file_type" => "PDF",
            "file_url" => "",
            "img_url" => "",

        ],
        [
            "title" => "asdasdasdasd",
            "thumbnail_url" => "",
            "file_type" => "PDF",
            "file_url" => "",
            "img_url" => "",

        ],
    ];
    ?>
    <?php _include(get_template_directory() . "/pages/insight/components/recent-publications.php", [
        "data" => $data
    ]) ?>

    <!-- Insight in Motion -->
    <?php _include(get_template_directory() . "/pages/insight/components/insight-in-motion.php", [
        "data" => $data
    ]) ?>

    <!-- Experiments & Chronicles -->
    <?php
    $data = [
        [
            "title" => "asdasdasdasd",
            "thumbnail_url" => "",
            "category_name" => "PDF",
            "category_slug" => "",
        ],
    ];
    ?>
    <?php _include(get_template_directory() . "/pages/insight/components/experiments-chronicles.php", [
        "data" => $data
    ]) ?>

</main>

<?php RenderJS::start(); ?>
<script>
    $(document).ready(function() {
        $('#select-primer').awselect({
            background: "#182224", //the dark blue background
            active_background: "#182224", // the light blue background
            placeholder_color: "#FFFFFF", // the light blue placeholder color
            placeholder_active_color: "#FFFFFF", // the dark blue placeholder color
            option_color: "#FFFFFF", // the option colors

            horizontal_padding: "40px", // left and right padding,
            immersive: false // immersive option, demonstrated at the next example
        });
    });
</script>
<?php RenderJS::end(); ?>