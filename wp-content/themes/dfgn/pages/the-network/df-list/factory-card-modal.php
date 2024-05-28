<div id="factoryModal" class="modal fade" role="dialog">
    <div class="wrapper">
        <div class="modal-dialog factory-detail">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container body-pop">
                        <div class="row mb-50" style="align-items: center;">
                            <div class="col-xl-5 col-md-5 f-country">
                                <img id="modalCountryFlag" src="" alt="">
                                <span id="modalCountry"></span>
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="innerf">
                                    <div id="modalName" class="fussion-title"></div>
                                    <div class="fussion-year">
                                        <p>Founded year &nbsp;&nbsp;<strong id="modalYear"></strong></p>
                                        <a href="#" class="close" data-dismiss="modal"><img src="<?php echo get_template_directory_uri() ?>img/assets/close-popup.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-5 col-md-5 logo-factories">
                                <img id="modalLogo" src="" alt="">
                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="text">
                                    <div id="modalFocus" class="text-wrapper"></div>

                                    <p id="modalDescription" class="div"></p>

                                
                                </div>
                            </div>
                        </div>

                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div id="modalProfilePicture" class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/fusion-profil.JPG) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1 id="modalProfileName">Laura Bellorini</h1>
                                        <p id="modalprofilePosition">Fusion Point Manager</p>
                                        <a id="modalProfileEmail" href="mailto:laura.bellorini@esade.edu"><img src="img/assets/df/icw_email.png" alt=""></a>

                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a id="modalPicture" href="#">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/icw_linkedin.png'; ?>" alt="">
                                        </a>
                                        <a id="modalSosFb" href="#">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/icw-fb.png'; ?>" alt="">
                                        </a>
                                        <a id="modalSosIg" href="#">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/icw-ig.png'; ?>" alt="">
                                        </a>
                                        <a id="modalSosX" href="#">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/icw-x.png'; ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="btn-f-web">
                                        <a id="modalWebsiteLink" href="https://www.esade.edu/en/learning-innovation/rambla/fusion-point" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (!defined('FACTORY_CARD_MODAL_STYLES_RENDERED')) : ?>
    <?php define('FACTORY_CARD_MODAL_STYLES_RENDERED', true); ?>
    <?php RenderStyle::Style() ?>
    <style>
        #factoryModal .wrapper {
            display: flex;
            justify-content: center;
        }

        #factoryModal .modal-dialog {
            width: 100%;
            margin: 0;
            padding: 16px;
            margin-top: 50px;
            margin-bottom: 50px;
        }


        @media (max-width: 991px) {
            #factoryModal .modal-content {
                border-radius: 41px;
            }

            #factoryModal .f-country {
                margin-bottom: 40px;
            }

            #factoryModal .innerf {
                flex-direction: column;
            }

            #factoryModal .body-pop {
                padding: 20px;
            }

            #factoryModal .prof .user-image {
                width: 90px;
                height: 90px;
            }

            #factoryModal .prof {
                margin: 0;
            }

            #factoryModal .pp-profil {
                margin-bottom: 40px;
                flex-direction: column;
                width: 100%;
                text-align: center;
                gap: 21px;
            }
        }
    </style>
    <?php RenderStyle::EndStyle() ?>
<?php endif; ?>