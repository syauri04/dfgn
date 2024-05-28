<?php include 'shared/components/_footer/index.php'; ?>

<!-- <div class="mobile_ver"></div> -->

<!-- POP UP MEMBER AREA -->
<div id="p-member" class="modal fade" role="dialog">
    <div class="modal-dialog pm-area">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row col-12">
                    <a href="" class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>

                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="footer-menu">
                        <div class="fm-title">
                            Site map
                        </div>
                        <div class="fm-content">
                            <a href="<?php echo home_url(); ?>">Home</a><br>
                            <a href="<?php echo home_url(); ?>">About</a><br>
                            <a href="<?php echo home_url(); ?>/insight">insight</a><br>
                            <a href="<?php echo home_url(); ?>/events-and-trainings">Events and trainings</a><br>
                            <a href="<?php echo home_url(); ?>/the-dfgn-team">The DFGN team</a><br>
                            <a href="<?php echo home_url(); ?>/the-network">The network</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

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