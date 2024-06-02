<section class="section-area">
    <div class="container">
        <div class="border-head-df xasdqw">
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
            <?php include 'event-list-card.php' ?>
        </div>

        <div class="row pb-27" style=" margin: 0; ">
            <div class="bread-ev" style="background: linear-gradient(0deg, rgba(24, 34, 36, 0.90) 0%, rgba(24, 34, 36, 0.90) 100%), url(<?php the_field('background_image'); ?>) lightgray 50% / cover no-repeat;">
                <div class="trainings-ev">
                    <h1><?php the_field('title_trainings'); ?></h1>
                    <p>
                        <?php the_field('description_trainings'); ?>
                    </p>
                </div>
            </div>
        </div>
        <?php RenderStyle::Style() ?>
        <style>
            .bread-ev {
                position: relative;
                border-radius: 108px;
                width: 100%;
                height: 702px;
            }

            @media screen and (max-width: 768px) {

                .xasdqw .col-xl-12.d-flex.boxies.even {
                    flex-direction: column;
                    gap: 23px;
                    text-align: center;
                    justify-content: center;
                    align-items: center;
                }

                .bread-ev {
                    position: relative;
                    border-radius: 41px;
                    padding: 40px;
                    display: flex;
                    align-items: end;
                }

                .trainings-ev {
                    position: relative;
                    right: 0%;
                    top: 0%;
                    width: 100%;
                }

                .trainings-ev h1 {
                    font-size: 20px;
                    margin-bottom: 10px;
                }

                .trainings-ev p {
                    /* font-size: 12px; */
                    line-height: 1.8;
                }
            }
        </style>
        <?php RenderStyle::EndStyle() ?>

        <div class="row border-head-df train mjqweu">
            <div class="col-xl-12 d-flex boxies even">
                <div class="tab-left">
                    <h1>
                        <?php the_field('title_specific_training'); ?>
                    </h1>
                </div>

                <div class="txt-right select-df">
                    <p>
                        <?php the_field('desc_specific_training'); ?>
                    </p>
                </div>
            </div>
        </div>


        <div class="row pt-27 parent-box">
            <?php
            if (have_rows('detail_specific_training')) :
                $index = 0;
                while (have_rows('detail_specific_training')) : the_row();

                    $classc = ($index % 2 === 0) ? 'green' : 'red';
            ?>
                    <div class="col-xl-6 col-md-6" style=" flex: 1 0; display: flex; ">
                        <div class="custom-box <?php echo $classc; ?>" style=" flex: 1 0;">
                            <h1><?php echo get_sub_field('title_content'); ?></h1>
                            <p>
                                <?php echo get_sub_field('desc_content'); ?>
                            </p>
                        </div>
                    </div>
            <?php
                    $index++;
                endwhile;
            endif;
            ?>
        </div>


        <?php RenderStyle::Style() ?>
        <style>
            .parent-box {
                display: flex;
                flex-wrap: wrap;
                margin: 0 -15px;
            }

            .custom-box.red {
                background: #fe5448;
            }

            .custom-box h1 {
                font-weight: bold;
                font-size: 3vw;
                line-height: normal;
            }

            .custom-box.red h1,
            .custom-box.red p {
                color: white;
            }

            .custom-box.green {
                background: #00cc74;
                color: black;
            }

            .custom-box.green h1,
            .custom-box.green p {
                color: black;
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

            .custom-box h1 {
                color: #ffffff;
                /* font-size: 22px; */
                margin-bottom: 15px;
            }

            .custom-box p {
                color: #ffffff;
                font-size: 16px;
                line-height: 1.6;
            }

            @media screen and (max-width: 768px) {
                .custom-box {
                    width: 100%;
                    /* text-align: center; */
                    font-size: 30px;
                    border-radius: 41px;
                    padding: 40px;
                    padding-top: 80px;
                }
                .custom-box h1 {
                font-size: 30px;
                margin-bottom: 30px;
            }

                .row.pt-27.parent-box {
                    flex-direction: column;
                }
            }
        </style>
        <?php RenderStyle::EndStyle() ?>

    </div>
</section>


<?php RenderStyle::Style() ?>
<style>
    /* penamaan kelas seharusnya khusus */
    @media (max-width: 991px) {
        .xasdqw {
            /* margin: 90px 0 0; */
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
            margin-bottom: 20px
        }

        .mjqweu p {
            width: auto;
            /* font-size: 12px; */
            line-height: 1.8;
        }

        .col-xl-12.d-flex.boxies.even {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
        }

        .even h1 {
            font-size: 20px;
            line-height: normal;
            width: auto;
        }

        .txt-right.select-df {
            min-width: 162px;
        }
    }
</style>
<?php RenderStyle::EndStyle() ?>