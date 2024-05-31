<?php RenderStyle::Style() ?>
<!-- tab -->
<style>
    .df-list {
        margin-bottom: 24px;
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

    @media (max-width: 991px) {
        .df-list-tab.border-head-df {
            padding: 20px 30px;
        }
    }
</style>
<?php RenderStyle::EndStyle() ?>