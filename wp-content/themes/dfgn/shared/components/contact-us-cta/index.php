<?php
if(!isset($param)){
    $param = [
        "title" => " Start or join a design factory!"
    ];
}
?>

<div id="contact-us-cta" class="container mb-30">
    <div class="row border-head-cnt">
        <div class="col-xl-12 d-flex boxies">
            <div class="txt-left">
                <?= $param["title"] ?>
            </div>
            <div class="txt-right">
                <a class="button" href="mailto:felipe.garate@aalto.fi">Contact us</a>
            </div>
        </div>
    </div>
</div>

<?php RenderStyle::Style(); ?>
<style>
@media (max-width: 991px) {
    #contact-us-cta .row.border-head-cnt {
        display: flex;
        margin: 10px;
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
        padding:20px
    }
}
</style>
<?php RenderStyle::EndStyle(); ?>