
<?php RenderStyle::Style() ?>
<style>
    .slick-list.draggable {
        overflow: visible;
    }

    .multiple-items .slick-prev {
        position: absolute;
        bottom: 45%;
        left: 10px;
        cursor: pointer;
        z-index: 7;
    }

    .multiple-items .slick-next {
        position: absolute;
        bottom: 45%;
        right: 10px;
        cursor: pointer;
    }

    @media (max-width: 991px) {
        #publication-list h1 {
            font-size: 30px;
            text-align: center
        }

    }
</style>
<?php RenderStyle::EndStyle() ?>