<?php RenderStyle::Style(); ?>
<style>
    #p-member.show {
        padding-right: 34px;
        display: flex !important;
        justify-content: center;
        align-items: center;
        padding: 0;
    }

    .pm-area {
        /* max-width: 1440px; */
        /* padding-top: 148px; */
        display: flex;
        align-items: center;
    }

    .pm-area .modal-content {
        border-radius: 108px;
        border: 1px solid #d9d9d9;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(70px);
        min-height: 90vh;
    }

    .pm-area .modal-body {
        display: grid;
        align-items: center;
    }

    .pm-area .modal-header {
        border: unset;
        position: absolute;
        border: unset;
        right: 35px;
        top: 25px;
        z-index: 2;
    }

    @media (max-width: 991px) {
        .pm-area .modal-content {
            border-radius: 41px;
        }
    }
</style>
<?php RenderStyle::EndStyle(); ?>