<?php
include 'header-content.css.php';
?>

<div class="header-content">
    <div class="title">
        <h1>
            <?php the_field('title_hero_regular'); ?> <br> <span><?php the_field('title_hero_span'); ?></span>
        </h1>
    </div>
    <div class="summary">
        <p>
            <?php echo nl2br(get_field('summary_hero')); ?>
        </p>
    </div>
</div>
