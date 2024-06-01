<?php RenderStyle::Style() ?>
<style>
    /* <!-- items --> */
    .df-list {
        margin-bottom: 24px;
    }

    .df-list-items {
        height: auto !important;
    }

    .card-factory {
        transition: bottom 0.5s ease;
    }

    .factory-box::before {
        content: "";
        position: absolute;
        bottom: -100%;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #182224;
        transition: bottom 0.5s ease;
    }

    .factory-box:hover::before {
        bottom: 0;
        height: 100%;
    }

    .df-list-tab.border-head-df {
        padding: 30px;
        display: flex;
        justify-content: center;
    }

    .df-list .list-tab {
        display: flex;
        padding: 10px;
        box-sizing: border-box;
    }

    .df-list .list-tab li {
        margin-right: 15px;
    }

    .df-list .list-tab li:last-child {
        margin-right: 0;
    }

    .df-list .list-tab li a {
        white-space: nowrap;
        cursor: pointer;
    }

    .active {
        font-weight: bold;
    }

    .factory-box .f-bottom {
        gap: 30px;
    }



    @media (max-width: 991px) {
        .df-list-tab.border-head-df {
            padding: 20px 30px;
        }

        .factory-box {
            border-radius: 41px;
            padding: 9%;
        }

        .f-factories-name ul li .rm {
            padding: 11px 19px;
        }

        .factory-box .f-bottom .f-factories-name {
            font-size: 18px;
            width: 50%;
        }

        .factory-box .f-bottom .f-factories {
            flex: 1 0;
            width: 50%;
        }

        .f-factories img {
            width: 100%;
            margin: 0 auto;
        }
    }

    @media (max-width: 490px) {
        .factory-box .f-profil .inn-right {
            display: none;
        }

    }
</style>
<style>
    /* <!-- modal --> */
    #factoryModal {
    padding: 0 !important;
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