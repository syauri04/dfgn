<?php include 'shared/components/_footer/index.php'; ?>
<?php include 'shared/components/member-access-modal/index.php'; ?>

<!-- <div class="mobile_ver"></div> -->

<?php wp_footer(); ?>

<style>
    <?php
    RenderStyle::PrintStyles();
    ?>
</style>

<script>
    <?php
    RenderJS::PrintJS();
    ?>
</script>

</body>

</html>
<?= MinifyHtml::endMinifyHTML() ?>