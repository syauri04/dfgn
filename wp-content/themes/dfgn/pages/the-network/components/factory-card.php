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
