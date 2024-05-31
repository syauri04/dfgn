<!-- 
unused

 -->

<?php RenderStyle::Style() ?>
<style>
    .count-content {
        margin-bottom: 24px;
    }

    .count-content .wrapper {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        justify-items: center;
    }

    .count-content .wrapper .card {
        aspect-ratio: 1 / 1;
        width: 100%;
        height: auto;
        position: relative;
        overflow: hidden;

        border-radius: 108px;

        color: black;
        text-align: center;
    }

    .count-content .wrapper .card.card-purple {
        background: #a4a2e0;
    }
    .count-content .wrapper .card.card-white {
        color: #a4a2e0;
    }
    .count-content .wrapper .card.card-green {
        background: #00cc74;
        color: white;
    }
    .count-content .wrapper .card.card-green .label {
        color: white;
    }

    .count-content .wrapper .card .card-wrapper {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .count-content .wrapper .card .count-total {
        font-size: 100px;
        font-weight: bold;
    }

    .count-content .wrapper .card .label {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 12px;

        color: black;
        font-weight: bold;
    }

    @media (max-width: 991px) {
        .count-content .wrapper {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 20px;
            justify-items: center;
        }
        .count-content .wrapper .card {
            border-radius: 41px;
        }
    }
</style>
<?php RenderStyle::EndStyle() ?>