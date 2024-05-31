<div class="card-publication">
    <div class="details">
        <div class="title"><?= @$data['title'] ?></div>
        <div class="hov-dwonload">
            <div class="icwd">
                <a href="<?= @$data['file_url'] ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/Download.png'; ?>" alt="">
                </a>
                <span>PDF</span>
            </div>
            <div class="year"><?= @$data['year'] ?></div>
        </div>
    </div>
    <div class="thumbnail" style=" width: 100%; height: 100%; position: relative; display: flex; justify-content: center; align-items: end; ">
        <div class="wrapper" style="position: absolute; margin: 0 auto; width: 67%;">
            <div class="position:relative;width:100%" style="clip-path:polygon(0% 0%, 0% 0%, 0% 100%, 213% 100%, 80% 0%, 0% 0%);height: 100%;aspect-ratio: 5 / 6;background: #353e3f;overflow: hidden;position: relative;">
                <div class="lipet" style="position: absolute; top: 0; right: 0; z-index: 3;     width: 20%;height: auto;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="110" height="102" viewBox="0 0 110 102" fill="none" style="width: 100%; height: auto;">
                        <path d="M0.222656 0V101.333H110L0.222656 0Z" fill="white" />
                    </svg>
                </div>

                <div class="lipet-shade" style="position: absolute; top: 4%; right: 0; z-index: 2;     width: 20%; height: auto;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="110" height="115" viewBox="0 0 110 115" fill="none" style="width: 100%; height: auto;">
                        <path opacity="0.35" d="M0.222656 0.88916V114.889L110 85.3334L0.222656 0.88916Z" fill="black" />
                    </svg>
                </div>

                <img style="width: 100%;    aspect-ratio: 5 / 6;" src="<?= @$data['image'] ?>" alt="">
            </div>
        </div>

        <!-- Baiknya di load sekali aja -->
        <svg id="svg-pub" style="display: none;">
            <defs>
                <mask id="mask-pub">
                    <path d="M0 388.444V0H194.222L303.999 101.333V388.444H0Z" fill="#FFFFFF"></path>
                </mask>
            </defs>
        </svg>

    </div>
</div>

<?php if (!defined('RECENT_PUBLICATION_CARD_RENDERED')) : ?>
    <?php define('RECENT_PUBLICATION_CARD_RENDERED', true); ?>
    <?php RenderStyle::Style(); ?>
    <style>
        .hover-dw {
            width: 100%;
        }
    </style>


    <style>
        .card-publication {
            position: relative;
            overflow: hidden;
            aspect-ratio: 1/1;
            width: 100%;
            background: white;
            margin: 10px;
            background: var(--Rich-black-95, #182224);
            border-radius: 108px;
        }

        .card-publication .title {
            color: #fff;
            font-size: 22px;
            font-style: normal;
            font-weight: 500;
            line-height: 32.4px;
            margin-bottom: 18px;
        }

        .card-publication:hover .details {
            bottom: 0;
        }

        .card-publication .details {
            position: absolute;
            z-index: 5;
            border-radius: 108px;
            /* background: linear-gradient(180deg, rgba(255, 255, 255, 0.00) -32.24%, #182224 103.77%); */
            bottom: -100%;
            transition: bottom 0.5s ease;
            padding: 0 57px 57px 57px;
            width: 100%;
        }

        .card-publication:hover::before {
            bottom: 0;
            height: 100%;
        }

        .card-publication::before {
            content: "";
            position: absolute;
            bottom: -100%;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0) -32.24%, #222222 103.77%);
            transition: bottom 0.5s ease;
            z-index: 4;
        }

        .card-publication .thumbnail .img {
            width: 100%;
            height: auto;
            -webkit-mask-image: url(#mask-pub);
            mask-image: url(#mask-pub);
            background-color: white;

        }

        @media (max-width: 991px) {
            .card-publication {
                border-radius: 41px;
            }

            .card-publication .title {
                font-size: 12px;
                line-height: normal;
                text-align: center;
            }

            .card-publication .details {
                padding: 0 15px 15px 15px;
            }

            .card-publication .icwd a {
                width: 40px;
                height: 40px;
                padding: 10px;
            }

            .card-publication .icwd img {
                width: 100%;
            }

            .card-publication * {
                font-size: 13px !important;
            }
        }
    </style>
    <?php RenderStyle::EndStyle(); ?>

<?php endif; ?>