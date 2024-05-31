
<?php RenderStyle::Style(); ?>
<style>
    #videoModal {
        display: none;
    }

    #videoModal .modal-dialog {
        width: 100%;
        height: fit-content;
    }

    .modal-backdrop {
        display: none;
    }

    #videoModal.show,
    .modal-backdrop.show {
        display: flex;
        align-items: center;
    }
</style>
<?php RenderStyle::EndStyle(); ?>