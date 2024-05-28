    <footer class="footer-section">
        <div class="container pt-100 pb-60">
            
            <div class="row">
               <div class="col-xl-4 col-md-4">
                    <div class="footer-logo">
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/logo-footer.png'; ?>" class="img-fluid" alt=""></a>
                    </div>
               </div>
               <div class="col-xl-4 col-md-4">
                    <div class="footer-menu">
                        <div class="fm-title">
                            Address
                        </div>
                        <div class="fm-content">
                            Puumiehenkuja 5A, 02150  <br> Espoo, Finland  <br>P.O. Box 17700  <br>FI-00076 AALTO
                        </div>
                    </div>
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