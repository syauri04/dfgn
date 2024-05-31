
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