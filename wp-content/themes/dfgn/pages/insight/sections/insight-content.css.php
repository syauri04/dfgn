<?php RenderStyle::Style() ?>
<style>
    .video-content {
        margin-top: 50px;
    }

    #insight-in-motion .main-video {
        background: linear-gradient(270deg, rgba(0, 0, 0, 0.00) 37.06%, rgba(0, 0, 0, 0.80) 100%), url(<?php echo get_template_directory_uri() . '/assets/img/assets/vimeo/thumb3.jpg'; ?>) lightgray 50% / cover no-repeat;
        width: 100%;
        aspect-ratio: 16 / 9;
        height: auto;
        border-radius: 108px;
        position: relative;
        overflow: hidden;
    }

    #insight-in-motion .main-video .info {
        position: absolute;
        bottom: 0;
        display: flex;
        gap: 33px;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        padding: 6%;

    }

    #insight-in-motion .main-video .info h2 {
        color: #fff;
        font-size: 46px;
        font-style: normal;
        font-weight: 700;
    }

    #insight-in-motion .main-video .info p {
        color: #fff;
        font-size: 16px;
        font-style: normal;
    }

    .inm-play {
        display: flex;
        position: relative;
        justify-content: center;
        align-items: center;
        top: 0;
        height: 100%;
    }

    .box-inm {
        position: relative;
        width: 100%;
        height: auto;
        aspect-ratio: 592 / 400;
        overflow: hidden;
        position: relative;
        margin: 0 12px;

    }

    .inm-bg {
        height: 100%;
        height: 100%;
        border-radius: 108px;
        padding: 11%;
    }

    .inm-txt h2 {
        color: #FFF;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 32.5px;
    }

    @media (max-width: 991px) {

        .inm-txt h2 {
            font-size: 15px;
        }

        .box-inm {
            position: relative;
            width: 100%;
            height: auto;
            aspect-ratio: 1 / 1;
            overflow: hidden;
            position: relative;
            /* margin: 0; */
        }

        .inm-bg {
            border-radius: 41px;
            /* padding: 0; */
        }

        #insight-in-motion .main-video {
            aspect-ratio: 16 / 12;
            border-radius: 41px;
            padding: 0px 0 0px 0;
        }

        #insight-in-motion .main-video .info h2 {
            color: #fff;
            font-size: 15px;
            font-style: normal;
            font-weight: 700;
        }

        #insight-in-motion .main-video .info p {
            color: #fff;
            font-size: 13px;
            font-style: normal;
            line-height: normal;
        }

        #insight-in-motion .main-video .info {
            flex-direction: column;
            align-items: start;
            gap: 10px;

        }

        #insight-in-motion .browse-video a {
            font-size: 16px;
            padding: 22px 39px;
        }
    }
</style>
<?php RenderStyle::EndStyle() ?>