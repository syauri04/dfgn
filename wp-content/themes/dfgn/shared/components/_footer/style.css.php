<?php RenderStyle::Style() ?>
<style>
    .footer-dfgn {
        padding-bottom: 24px;
        /* position: relative; */
    }
    .footer-dfgn .logo {
        width: 100%;
        max-width: 200px;
        margin-bottom: 40px;
    }

    .footer-dfgn .background {
        position: relative;
    }

    .footer-dfgn .background svg {
        width: 100%;
        height: auto;
    }

    svg.footer-circle {
        position: absolute;
        top: 0;
        right: 0;
        width: 13% !important;
    }

    .footer-dfgn .content {
        width: 100%;
        background: white;
    }

    .footer-dfgn .wrapper {
        padding: 6%;
        max-width: 82%;
    }

    .footer-dfgn .wrapper .row {
        gap: 20px;
    }

    .footer-dfgn .wrapper-sosmed-copyright {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
        margin-right: -26%;
        margin-top: 40px;
        margin-bottom: -9%;
    }

    .footer-dfgn p {
        margin: 0;
        color: var(--Rich-Black, #0c1618);
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 146.3%;
        /* 23.408px */
    }

    .footer-dfgn .copyright-text p a {
        color: #fec601;
    }

    .footer-dfgn .footer-menu .title {
        color: var(--Rich-Black, #0c1618);
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: 146.3%;
        padding-bottom: 16px;
    }

    .footer-menu ,
    .footer-menu a {
        color: var(--Rich-Black, #0c1618);
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 25.6px;
        transition: padding-bottom 0.5s ease;
    }

    .fm-content a:hover {
        border-bottom: 2px solid var(--Rich-Black, #0c1618);
        padding-bottom: 2px;
    }

    @media (max-width: 768px) {
        .footer-dfgn .wrapper-sosmed-copyright {
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column-reverse;
        }
    }
</style>
<?php RenderStyle::EndStyle() ?>