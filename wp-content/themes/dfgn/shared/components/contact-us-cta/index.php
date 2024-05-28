<?php
$param = [];
$defaultParam = [
    "title" => "Start or join a design factory!",
    "button_text" => "Contact us",
    "link" => "mailto:felipe.garate@aalto.fi"
];
$param = array_merge($param, $defaultParam);
?>

<div class="container">
    <div id="contact-us-cta" class="container mb-30">
        <div class="row border-head-cnt">
            <div class="col-xl-12 d-flex boxies">
                <div class="txt-left">
                    <?= $param["title"] ?>
                </div>
                <div class="txt-right">
                    <a class="button" href="<?= $param["link"] ?>"> <?= $param["button_text"] ?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php RenderStyle::Style(); ?>
<style>
    @media (max-width: 991px) {
        #contact-us-cta .row.border-head-cnt {
            display: flex;
            border-radius: 41px;
            justify-content: center;
        }

        #contact-us-cta .row.border-head-cnt .col-xl-12.d-flex.boxies {
            flex-direction: column;
            width: auto;
        }

        #contact-us-cta .row.border-head-cnt .col-xl-12.d-flex.boxies .txt-left {
            text-align: center;
            font-size: 24px;
            margin-bottom: 25px;
        }

        #contact-us-cta .button {
            padding: 20px
        }
    }
</style>
<?php RenderStyle::EndStyle(); ?>