<!-- 
unused

 -->

<?php RenderStyle::Style() ?>
<style>
    #the-network .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: nowrap;
        flex-direction: row;
        gap: 70px;
        margin-bottom: 40px;
    }

    .header-content h1 {
        font-size: 35px;
        line-height: normal;
        color: white;
        font-weight: bold;
    }

    .header-content .title {
        width: 50%;
    }
    .header-content .summary {
        width: fit-content;
    }

    @media (max-width: 991px) {
        #the-network .header-content {
            flex-direction: column;
            align-items: normal;
            gap: 20px;
        }

        #the-network .header-content>* {
            width: 100%;
        }
    }
</style>
<?php RenderStyle::EndStyle() ?>