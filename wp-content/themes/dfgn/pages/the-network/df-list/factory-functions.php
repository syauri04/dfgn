<?php
function createFactoryEntry($factory)
{
?>
    <?php ob_start(); ?>

    <div class="card-factory col-xl-6 col-md-6 grid-facto <?= $factory['category'] ?>">
        <div class="factory-box">
            <div class="f-top">
                <div class="f-country">
                    <img src="img/assets/country/flags/es.svg" alt="">
                    <span><?= $factory['country'] ?></span>
                </div>
                <div class="f-year">
                    <span><?= $factory['year'] ?></span>
                </div>
            </div>

            <div class="f-bottom">
                <div class="f-factories">
                    <img src="<?= $factory['image'] ?>" alt="">
                </div>
                <div class="f-factories-name">
                    <span><?= $factory['name'] ?></span>
                    <ul>
                        <li class="mr-0"><a href="#" class="rm" data-toggle="modal" data-target="#factoryModal" data-factory="<?= htmlspecialchars(json_encode($factory)) ?>">Read more</a></li>
                    </ul>
                </div>
            </div>

            <div class="f-profil">
                <div class="inn-left">
                    <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(<?= $factory['profileImage'] ?>) lightgray 50% / cover no-repeat;"></div>
                    <span><?= $factory['profileName'] ?></span>
                </div>
                <div class="inn-right">
                    <a href="<?= $factory['profileLinkedIn'] ?>"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                    <a href="<?= $factory['profileEmail'] ?>"><img src="img/assets/df/icw_email.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <?php
    $entry = ob_get_clean();
    return $entry;
    ?>
<?php
}
?>


<?php RenderStyle::Style() ?>
<style>
    @media (max-width: 991px) {
        .card-factory .factory-box {
            border-radius: 41px;
        }
    }
</style>
<?php RenderStyle::EndStyle() ?>

<?php
function createFactoryModal()
{
?>
    <?php ob_start(); ?>
    <div id="factoryModal" class="modal fade" role="dialog">
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
                                        <a href="#" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>
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

                                    <p id="modalDescription" class="div">Fusion Point believes that creativity and innovation are the tools and mindset that future leaders need to navigate uncertainty and create a positive impact for a sustainable future.</p>
                                    <p id="modalDescription" class="div">Fusion Point believes that creativity and innovation are the tools and mindset that future leaders need to navigate uncertainty and create a positive impact for a sustainable future.</p>
                                    <p id="modalDescription" class="div">Fusion Point believes that creativity and innovation are the tools and mindset that future leaders need to navigate uncertainty and create a positive impact for a sustainable future.</p>
                                    <p id="modalDescription" class="div">Fusion Point believes that creativity and innovation are the tools and mindset that future leaders need to navigate uncertainty and create a positive impact for a sustainable future.</p>
                                    <p id="modalDescription" class="div">Fusion Point believes that creativity and innovation are the tools and mindset that future leaders need to navigate uncertainty and create a positive impact for a sustainable future.</p>
                                    <p id="modalDescription" class="div">Fusion Point believes that creativity and innovation are the tools and mindset that future leaders need to navigate uncertainty and create a positive impact for a sustainable future.</p>
                                    <p id="modalDescription" class="div">Fusion Point believes that creativity and innovation are the tools and mindset that future leaders need to navigate uncertainty and create a positive impact for a sustainable future.</p>
                                    <p id="modalDescription" class="div">Fusion Point believes that creativity and innovation are the tools and mindset that future leaders need to navigate uncertainty and create a positive impact for a sustainable future.</p>

                                </div>
                            </div>
                        </div>

                        <div class="row mt-30">
                            <div class="col-xl-5 col-md-5">
                                <div class="pp-profil">
                                    <div class="prof">
                                        <!-- <img src="img/assets/df/f-profil.png" alt=""> -->
                                        <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(img/assets/df/user/fusion-profil.JPG) lightgray 50% / cover no-repeat;">

                                        </div>
                                    </div>
                                    <div class="somd">
                                        <h1>Laura Bellorini</h1>
                                        <p>Fusion Point Manager</p>
                                        <a href="mailto:laura.bellorini@esade.edu"><img src="img/assets/df/icw_email.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw_linkedin.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="border-black">
                                    <div class="list-smd">
                                        <a href="#"><img src="img/assets/df/icw-fb.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-ig.png" alt=""></a>
                                        <a href="#"><img src="img/assets/df/icw-x.png" alt=""></a>

                                    </div>
                                    <div class="btn-f-web">
                                        <a href="https://www.esade.edu/en/learning-innovation/rambla/fusion-point" target="_blank">Visit website</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $modal_content = ob_get_clean();
    return $modal_content;
    ?>
<?php
}
?>


<?php RenderStyle::Style() ?>
<style>
    #factoryModal {
        padding: 40px;
    }

    #factoryModal .modal-dialog {
        width: 100%;
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