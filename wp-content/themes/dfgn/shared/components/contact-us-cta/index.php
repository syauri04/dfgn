<?php
include 'style.css.php';
?>

<?php
$param = [];
$defaultParam = [
    "title" => "Start or join a design factory!",
    "button_text" => "Contact us",
    "link" => "mailto:felipe.garate@aalto.fi"
];
$param = array_merge($param, $defaultParam);
?>

<section class="cta">
    <div class="container">
        <div class="cta-box">
            <div class="wrapper">
                <div class="title">
                    <?= $param["title"] ?>
                </div>
                <div>
                    <a class="btn btn-gradient-red" href="<?= $param["link"] ?>"> <?= $param["button_text"] ?></a>
                </div>
            </div>
        </div>
    </div>
</section>