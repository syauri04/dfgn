<div class="header-content factories">
    <div class=" section-title">
        <h1>
            <?php the_field('title_hero_regular'); ?> <br> <span><?php the_field('title_hero_span'); ?></span>
        </h1>
    </div>
    <div>
        <p>
            <?php echo nl2br(get_field('summary_hero')); ?>
        </p>
    </div>
</div>

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

    #the-network .header-content .section-title h1 {
        font-size: 35px;
        line-height: normal;
    }

    #the-network .header-content>* {
        width: 50%;
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