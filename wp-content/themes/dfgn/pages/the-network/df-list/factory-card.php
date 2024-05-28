<div class="card-factory col-xl-6 col-md-6 grid-facto <?= @$data['continentClass'] ?>">

    <div class="factory-data" 
             data-flag="<?= htmlspecialchars(@$data['flagImage']) ?>"
             data-country="<?= htmlspecialchars(@$data['country']) ?>"
             data-year="<?= htmlspecialchars(@$data['year']) ?>"
             data-image="<?= htmlspecialchars(@$data['image']) ?>"
             data-name="<?= htmlspecialchars(@$data['name']) ?>"
             data-profile-image="<?= htmlspecialchars(@$data['profileImage']) ?>"
             data-profile-name="<?= htmlspecialchars(@$data['profileName']) ?>"
             data-profile-position="<?= htmlspecialchars(@$data['profilePosition']) ?>"
             data-profile-linkedin="<?= htmlspecialchars(@$data['profileLinkedIn']) ?>"
             data-profile-email="<?= htmlspecialchars(@$data['profileEmail']) ?>"
    ></div>

    <div class="factory-box">
        <div class="f-top">
            <div class="f-country">
                <img src="<?= @$data['flagImage'] ?>" alt="">
                <span><?= @$data['country'] ?></span>
            </div>
            <div class="f-year">
                <span><?= @$data['year'] ?></span>
            </div>
        </div>

        <div class="f-bottom">
            <div class="f-factories">
                <img src="<?= @$data['image'] ?>" alt="">
            </div>
            <div class="f-factories-name">
                <span><?= @$data['name'] ?></span>
                <ul>
                    <li class="mr-0">
                        <a href="#" class="rm" data-toggle="modal" data-target="#factoryModal" data-factory="<?= htmlspecialchars(json_encode("data")) ?>">Read more</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="f-profil">
            <div class="inn-left">
                <div class="user-image" style="background: linear-gradient(0deg, #0C1618 0%, #0C1618 100%), url(<?php echo $data['profileImage'] ?>) lightgray 50% / cover no-repeat;"></div>
                <span><?= $data['profileName'] ?></span>
            </div>
            <div class="inn-right">
                <a href="<?= $data['profileLinkedIn'] ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/icw_linkedin.png'; ?>" alt="">
                </a>
                <a href="mailto:<?= $data['profileEmail'] ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/df/icw_email.png'; ?>" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

<?php if (!defined('FACTORY_CARD_RENDERED')) : ?>
    <?php define('FACTORY_CARD_RENDERED', true); ?>
    <?php RenderStyle::Style() ?>
    <style>
        .factory-box .f-bottom {
            gap: 20px;
            position: relative;
            z-index: 1;
            display: flex;
            align-items: end;
            /* padding-top: 175px; */
            min-height: 329px;
            transition: min-height 0.5s ease;
            /* transition: height 0.5s ease; */
        }

        .factory-box .f-bottom .f-factories-name {
            max-width: 350px;
            color: #fff;
            font-size: 24px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            transition: max-width 1s ease;
        }

        @media (max-width: 991px) {
            .card-factory .factory-box {
                border-radius: 41px;
                padding: 34px;
            }

            .factory-box .f-bottom {
                align-items: bottom;
            }

            .factory-box .f-bottom .f-factories-name {
                font-size: 17px;
            }

            .f-factories-name ul li .rm {
                white-space: nowrap;
                padding: 12px 18px;
                font-size: 17px;
            }

            
            .f-profil .inn-left span {
                display: none
            }
        }
    </style>
    <?php RenderStyle::EndStyle() ?>
<?php endif; ?>