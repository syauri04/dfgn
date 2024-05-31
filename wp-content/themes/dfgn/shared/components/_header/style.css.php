<?php RenderStyle::Style() ?>
<style>
    header .wrapper {
        display: flex;
        gap: 40px;
        justify-content: space-between;
        align-items: center;
        height: 105px;
    }

    .menu-navigation a {
        font-size: 14px;
        color: white;
        font-weight: bold;
    }

    .menu-navigation {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 64px;
    }

    .navigation-toggle .btn {
        padding: 5px !important;
        width: 44px;
        border-radius: 11px !important;
        aspect-ratio: 1 / 1;
    }

    .navbar-nav a {
        font-size: 18px;
        color: white;
        font-weight: bold;
        text-align: center;
    }
    .navbar-nav a:hover {
        color: #00cc74;
    }

    @media (max-width: 1250px) {
        .menu-navigation {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }
        header .wrapper {
        height: 50px;
    }
    }

    /* buttom style bisa buat global */

    .btn.btn-gradient-red {
        color: #FFF;
        text-align: center;
        font-size: 17px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        border-radius: 54px;
        background-color: #FE5448;
        background: linear-gradient(90deg, #FE5448 0%, #A4A2E0 100%);
        display: flex;

        padding: 25px 82px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        flex-shrink: 0;

        background-size: 200% 200%;
        background-position: center;
        transition: background-position 0.5s ease;

    }

    .btn.btn-gradient-red:hover {
        /* background: linear-gradient(90deg, #FE5448 100%, #A4A2E0 100%); */
        /* background-position: 300% 0; */
        background-position: left;
    }
</style>
<?php RenderStyle::EndStyle() ?>