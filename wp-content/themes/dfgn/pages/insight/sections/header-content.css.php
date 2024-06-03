<?php RenderStyle::Style() ?>
<style>
    .text-wrapper {
        max-width: 500px;
    }

    .slide-content {
        position: absolute;
        width: 100%;
        top: 0
    }

    .head-animation h1 {
        color: #119da4;
        font-size: 46px;
        font-style: normal;
        font-weight: 700;
        line-height: 57.5px;
        font-family: "Epilogue", Helvetica;
    }

    .head-animation h1 span {
        font-family: "Sentinel-Book", serif;
        font-style: italic;
    }

    .head-animation .desc {
        font-family: "Epilogue", Helvetica;
        color: #fff;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 146.3%;
    }

    .slider-scroll {
        position: relative;
        height: 100%;
        min-height: 700px;
        overflow: visible;
    }

    /* .main-slide-scroll {
        position: relative;
        width: 100%;
    } */

    .background-animate-image {
        display: flex;
        justify-content: end;
        align-items: center;
        position: relative;
    }


    .background-animate-image img {
        width: 100%;
        height: auto;
        -webkit-mask-image: url(#mask);
        mask-image: url(#mask);
    }

    .shape {
        position: relative;
        width: 100%;
        height: auto;
        overflow: visible;
        /* Allow overflow */
    }

    #shape-1 {
        position: absolute;
        top: 0;
        left: -27.3%;
        width: 189%;
        height: 26.4%;
    }

    #shape-2 {
        position: absolute;
        top: 59%;
        left: -58%;
        width: 148%;
        height: 27%;
        opacity: 1;
    }

    @media (max-width: 1200px) {
        .slide-content {
            position: unset;
            width: 100%;
            top: 0
        }
        .background-animate-image {
            margin-top: -17%;
            width: 100%;
        }
    }

    @media (max-width: 900px) {
        .text-wrapper {
            max-width: unset;
        }

        .head-animation h1 {
            font-size: 36px;
            line-height: normal;
            margin-bottom: 30px;
        }

        .slide-content {
            position: unset;
            width: 100%;
            top: 0
        }

        .background-animate-image {
            margin: 0 auto;
            /* margin-left: -550px; */
            width: 100%;
        }

        #shape image {
            mask: unset;

        }

        #shape-1 {
            display: none;
        }

        #shape-2 {
            position: absolute;
            top: 0;
            width: 305%;
            height: 106.1%;
        }

        .background-animate-image {
            margin-top: 60px;
            overflow: hidden;
            border-radius: 41px;
        }


    }
</style>
<?php RenderStyle::EndStyle() ?>