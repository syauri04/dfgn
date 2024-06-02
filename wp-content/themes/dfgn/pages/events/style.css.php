<!-- Slider Scroll -->
<?php RenderStyle::Style() ?>
<style>
    .main-slide-scroll {
        padding-top: 24px;
        padding-bottom: 24px;
        position: relative;
    }

    .text-ss {
        padding: 0;
        width: 49%;
    }

    .team.eve .text-ss .main-text p {
        font-size: 2.6vw;
        line-height: normal;
    }

    .background-shape .image-container {
        mask: url(#mask0_789_41357);
    }

    .background-shape {
        position: relative;
        /* background: black; */
    }

    .background-shape svg.red-circle,
    .background-shape svg.red-circle path {
        position: absolute;
        top: 33.8%;
        right: 33.8%;
        width: 15.2%;
        opacity: 1;
        height: auto;
    }

    /* responsive */

    @media (max-width: 991px) {
        .background-shape svg.red-circle path {
            position: absolute;
            top: 33.8%;
            right: 33.8%;
            width: auto;
            opacity: 1;
            height: auto;
        }

        .text-ss {
            position: relative;
            width: 100%;
            max-width: none !important;
        }

        .team.eve .text-ss .main-text p {
            font-size: 30px;
            line-height: normal;
        }

        .team .text-ss .main-text {
            margin-bottom: 24px;
        }

        .team.eve .text-ss .summary-text p {
            width: 100%;
        }

        .background-shape .image-container {
            mask: unset;
        }

        .background-shape {
            border-radius: 41px;
            overflow: hidden;
        }

        .background-shape svg.background {
            height: 362px !important;
        }
    }
</style>
<?php RenderStyle::EndStyle() ?>

<!-- Event list -->

<?php RenderStyle::Style() ?>
<style>
    .bread-ev {
        position: relative;
        border-radius: 108px;
        width: 100%;
        height: 702px;
    }

    @media screen and (max-width: 768px) {
        .trainings-ev {
            position: relative;
            right: auto;
            /* width: 432px; */
            /* right: 10%; */
            /* top: 17%; */
        }

        .xasdqw .col-xl-12.d-flex.boxies.even {
            flex-direction: column;
            gap: 23px;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        .bread-ev {
            border-radius: 41px;
            padding: 40px;
            display: flex;
            align-items: end;
            height: auto;
        }

        .trainings-ev {
            width: 100%;
        }

        .trainings-ev h1 {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .trainings-ev p {
            line-height: 1.8;
        }
    }

    .parent-box {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -15px;
    }

    .custom-box-container {
        flex: 1 0;
        display: flex;
    }

    .custom-box {
        border-radius: 108px;
        padding: 15%;
        margin-bottom: 24px;
        box-sizing: border-box;
        aspect-ratio: 1/1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .custom-box.red {
        background: #fe5448;
        color: white;
    }

    .custom-box.red h1,
    .custom-box.red p {
        color: white;
    }

    .custom-box.green {
        background: #00cc74;
        color: black;
    }

    .custom-box h1 {
        font-weight: bold;
        font-size: 3vw;
        margin-bottom: 15px;
    }

    .custom-box p {
        font-size: 16px;
        line-height: 1.6;
        color: black;
    }

    @media screen and (max-width: 768px) {
        .custom-box {
            width: 100%;
            font-size: 30px;
            border-radius: 41px;
            padding: 40px;
            padding-top: 80px;
        }

        .custom-box h1 {
            font-size: 30px;
            margin-bottom: 30px;
        }

        .parent-box {
            flex-direction: column;
        }
    }

    @media (max-width: 991px) {
        .xasdqw {
            padding: 28px;
            border-radius: 41px;
        }

        .mjqweu {
            padding: 40px !important;
            margin: 0;
            border-radius: 41px;
        }

        .mjqweu .col-xl-12.d-flex.boxies.even {
            padding: 0;
            width: 100%;
        }

        .mjqweu h1 {
            margin-bottom: 30px;
        }

        .mjqweu p {
            width: auto;
            font-size: 14px;
            line-height: 1.8;
        }

        .col-xl-12.d-flex.boxies.even {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
        }

        .even h1 {
            font-size: 30px;
            line-height: normal;
            width: auto;
        }

        .txt-right.select-df {
            min-width: 162px;
        }
    }
</style>
<?php RenderStyle::EndStyle() ?>

<!-- Event list card -->
<?php RenderStyle::Style() ?>
<style>
    .btn-outline-white:hover {
        background: #fff;
        color: #0c1618;
    }

    .btn-outline-white {
        display: flex;
        width: fit-content;
        padding: 13px 22px;
        border-radius: 54px;
        border: 1px solid #FFF;
        background: rgba(217, 217, 217, 0.00);
        color: #FFF;
        text-align: center;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        transition: all 1s ease;
    }

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
