<?php RenderStyle::Style() ?>
<style>
    header .wrapper {
        display: flex;
        gap: 40px;
        justify-content: space-between;
        align-items: center;
        /* height: 105px; */
        padding: 23px 0px;
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
            /* height: 50px; */
            padding: 0;
        }
    }
</style>
<?php RenderStyle::EndStyle() ?>