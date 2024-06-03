<!-- Insight IN MOtion -->
<div id="insight-in-motion" class="container pt-85">

    <div class="container">
        <div class="row in-motion header-content">
            <div>
                <div class="text">
                    <p>Insights in motion</p>
                </div>
            </div>
            <div class="summary">
                <p>
                    <?php the_field('summary'); ?>
                </p>
            </div>
        </div>
    </div>

    <?php $videoContents = get_field('list_vimeo'); ?>
    <?php if (!empty($videoContents)) : $data = $videoContents[0] ?>
        <!-- Kalobisa setiap data dibuat array dulu -->
        <div class="video-content">
            <div class="main-video">
                <div class="info">
                    <div class="vm-title">
                        <h2><?php echo $data['title']; ?></h2>
                        <p><?php echo $data['sub_title']; ?></p>
                    </div>
                    <div class="w-vimeo">
                        <a class="wv video-btn" data-video-url="https://player.vimeo.com/video/<?php echo $data['id_vimeo']; ?>">Watch in Vimeo</a>
                        <a class="video-btn" data-video-url="https://player.vimeo.com/video/<?php echo $data['id_vimeo']; ?>">
                            <div class="rounded-play">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/play.png'; ?>" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
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



                @media (max-width: 991px) {
                    #insight-in-motion .main-video {
                        aspect-ratio: 16 / 12;
                        border-radius: 41px;
                        padding: 0px 0 0px 0;
                    }

                    #insight-in-motion .main-video .info h2 {
                        color: #fff;
                        font-size: 20px;
                        font-style: normal;
                        font-weight: 700;
                    }

                    #insight-in-motion .main-video .info p {
                        color: #fff;
                        font-size: 13px;
                        font-style: normal;
                    }

                    #insight-in-motion .main-video .info {
                        flex-direction: column;
                        align-items: start;
                        gap: 10px;

                    }
                }
            </style>
            <?php RenderStyle::EndStyle() ?>
        </div>
    <?php endif ?>


</div>

<div class="container-fluid-cus sec-v-inmotion" id="morevideo">
    <div class="slider-v-inm">

        <div class="box-inm">
            <div class="inm-bg" style="background: linear-gradient(180deg, rgba(12, 22, 24, 0.00) 26.86%, rgba(12, 22, 24, 0.80) 86.98%), url(<?php echo get_template_directory_uri() . '/assets/img/assets/vimeo/thumb1.jpg'; ?>) lightgray 50% / cover no-repeat;">
                <div class="inm-txt">
                    <h2>General DFGN Video</h2>
                </div>
                <div class="inm-play">
                    <a href="#" data-toggle="modal" data-target="#vim-2">
                        <div class="rounded-play">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/play.png'; ?>" alt="">
                        </div>
                    </a>

                </div>
            </div>
        </div>

        <div class="box-inm">
            <div class="inm-bg" style="background: linear-gradient(180deg, rgba(12, 22, 24, 0.00) 26.86%, rgba(12, 22, 24, 0.80) 86.98%), url(<?php echo get_template_directory_uri() . '/assets/img/assets/vimeo/thumb2.jpg'; ?>) lightgray 50% / cover no-repeat;">
                <div class="inm-txt">
                    <h2>International Design Factory</h2>
                </div>
                <div class="inm-play">
                    <a href="#" data-toggle="modal" data-target="#vim-3">
                        <div class="rounded-play">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/play.png'; ?>" alt="">
                        </div>
                    </a>

                </div>
            </div>
        </div>

        <div class="box-inm">
            <div class="inm-bg" style="background: linear-gradient(180deg, rgba(12, 22, 24, 0.00) 26.86%, rgba(12, 22, 24, 0.80) 86.98%), url(<?php echo get_template_directory_uri() . '/assets/img/assets/vimeo/thumb4.jpg'; ?>) lightgray 50% / cover no-repeat;">
                <div class="inm-txt">
                    <h2>Design Factory's Value Proposition</h2>
                </div>
                <div class="inm-play">
                    <a href="#" data-toggle="modal" data-target="#vim-4">
                        <div class="rounded-play">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/play.png'; ?>" alt="">
                        </div>
                    </a>

                </div>
            </div>
        </div>

        <div class="box-inm">
            <div class="inm-bg" style="background: linear-gradient(180deg, rgba(12, 22, 24, 0.00) 26.86%, rgba(12, 22, 24, 0.80) 86.98%), url(<?php echo get_template_directory_uri() . '/assets/img/assets/vimeo/thumb5.jpg'; ?>) lightgray 50% / cover no-repeat;">
                <div class="inm-txt">
                    <h2>Designing circularity - IDFF2021</h2>
                </div>
                <div class="inm-play">
                    <a href="#" data-toggle="modal" data-target="#vim-5">
                        <div class="rounded-play">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/play.png'; ?>" alt="">
                        </div>
                    </a>

                </div>
            </div>
        </div>

        <div class="box-inm">
            <div class="inm-bg" style="background: linear-gradient(180deg, rgba(12, 22, 24, 0.00) 26.86%, rgba(12, 22, 24, 0.80) 86.98%), url(<?php echo get_template_directory_uri() . '/assets/img/assets/vimeo/thumb6.jpg'; ?>) lightgray 50% / cover no-repeat;">
                <div class="inm-txt">
                    <h2>Ritual Design (AlumniExpert)</h2>
                </div>
                <div class="inm-play">
                    <a href="#" data-toggle="modal" data-target="#vim-6">
                        <div class="rounded-play">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/play.png'; ?>" alt="">
                        </div>
                    </a>

                </div>
            </div>
        </div>




    </div>
</div>
<!-- POP UP VIDEO -->
<div id="vim-2" class="modal fade" role="dialog">
    <div class="modal-dialog vimeo-p">
        <div class="modal-content">
            <div class="modal-body">
                <div class="containter body-vpop">

                    <div class="row">
                        <div class="v-close">
                            <a href="" class="close" data-dismiss="modal"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/close-popup.png'; ?>" alt=""></a>

                        </div>
                        <div class="col-12">
                            <iframe src="https://player.vimeo.com/video/240992200" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div> -->
        </div>

    </div>
</div>
<div id="vim-3" class="modal fade" role="dialog">
    <div class="modal-dialog vimeo-p">
        <div class="modal-content">
            <div class="modal-body">
                <div class="containter body-vpop">

                    <div class="row">
                        <div class="v-close">
                            <a href="" class="close" data-dismiss="modal"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/close-popup.png'; ?>" alt=""></a>

                        </div>
                        <div class="col-12">
                            <iframe src="https://player.vimeo.com/video/158310716" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div> -->
        </div>

    </div>
</div>
<div id="vim-4" class="modal fade" role="dialog">
    <div class="modal-dialog vimeo-p">
        <div class="modal-content">
            <div class="modal-body">
                <div class="containter body-vpop">

                    <div class="row">
                        <div class="v-close">
                            <a href="" class="close" data-dismiss="modal"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/close-popup.png'; ?>" alt=""></a>

                        </div>
                        <div class="col-12">
                            <iframe src="https://player.vimeo.com/video/707723253" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div> -->
        </div>

    </div>
</div>
<div id="vim-5" class="modal fade" role="dialog">
    <div class="modal-dialog vimeo-p">
        <div class="modal-content">
            <div class="modal-body">
                <div class="containter body-vpop">

                    <div class="row">
                        <div class="v-close">
                            <a href="" class="close" data-dismiss="modal"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/close-popup.png'; ?>" alt=""></a>

                        </div>
                        <div class="col-12">
                            <iframe src="https://player.vimeo.com/video/637023373" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div> -->
        </div>

    </div>
</div>
<div id="vim-6" class="modal fade" role="dialog">
    <div class="modal-dialog vimeo-p">
        <div class="modal-content">
            <div class="modal-body">
                <div class="containter body-vpop">

                    <div class="row">
                        <div class="v-close">
                            <a href="" class="close" data-dismiss="modal"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/close-popup.png'; ?>" alt=""></a>

                        </div>
                        <div class="col-12">
                            <iframe src="https://player.vimeo.com/video/624768012" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div> -->
        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 b-in-motion">
            <div class="browse-video">
                <a href="https://vimeo.com/dfgn" target="_blank">All videos on Vimeo</a>
            </div>
        </div>
    </div>
</div>


</section>


<!-- Popup untuk modal -->
<!-- buat jadi komponen di panggil di page yg membutuhkan aja -->

<!-- 
    Pemanggilan cukup tambahkan
    class="video-btn" data-video-url="#" 
 -->

<div id="videoModal" class="modal fade" role="dialog">
    <div class="modal-dialog vimeo-p">
        <div class="modal-content">
            <div class="modal-body">
                <div class="containter body-vpop">
                    <div class="row">
                        <div class="v-close">
                            <a>
                                <img class="closeModal" src="<?php echo get_template_directory_uri() . '/assets/img/assets/close-popup.png'; ?>" alt="">
                            </a>
                        </div>
                        <div class="col-12">
                            <iframe id="videoIframe" src="" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop"></div>
<!-- style & script bisa di wrap pakai RenderJS & RenderStyle -->
<script>
    function openModal(element) {
        var videoUrl = element.getAttribute('data-video-url');
        document.getElementById('videoIframe').src = videoUrl;
        document.getElementById('videoModal').classList.add('show');
        document.body.classList.add('modal-open');
        document.querySelector('.modal-backdrop').classList.add('show');
    }

    function closeModal() {
        document.getElementById('videoIframe').src = '';
        document.getElementById('videoModal').classList.remove('show');
        document.body.classList.remove('modal-open');
        document.querySelector('.modal-backdrop').classList.remove('show');
    }
    window.onclick = function(event) {
        var modal = document.getElementById('videoModal');
        console.log(event.target)
        console.log(event.target.classList.contains('closeModal'));
        if (event.target == modal || event.target.classList.contains('closeModal')) {
            closeModal();
        }
    }
    document.querySelectorAll('.video-btn').forEach(function(button) {
        button.onclick = function(event) {
            event.preventDefault();
            openModal(this);
        };
    });
</script>
<style>
    #videoModal {
        display: none;
    }

    #videoModal .modal-dialog {
        width: 100%;
        height: fit-content;
    }

    .modal-backdrop {
        display: none;
    }

    #videoModal.show,
    .modal-backdrop.show {
        display: flex;
        align-items: center;
    }
</style>
<!--  -->



<?php RenderStyle::Style() ?>
<style>
    #insight-in-motion .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: nowrap;
        flex-direction: row;
        gap: 70px;
    }

    #insight-in-motion .header-content .text p {
        font-size: 46px;
    }

    #insight-in-motion .header-content .summary {
        width: auto;
        margin: 0;
        max-width: 50%;
    }

    @media (max-width: 991px) {
        #insight-in-motion .header-content .text p {
            font-size: 26px;
            line-height: normal;
            margin: 0;
        }

        #insight-in-motion .header-content {
            flex-direction: column;
            align-items: normal;
            gap: 20px;
        }

        #insight-in-motion .header-content .summary {
            max-width: 100%;
        }
    }
</style>
<?php RenderStyle::EndStyle() ?>