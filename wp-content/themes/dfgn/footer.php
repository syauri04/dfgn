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

    </footer>
</div>
    <!-- POP UP MEMBER AREA -->
    <div id="p-member" class="modal fade" role="dialog">
        <div class="modal-dialog pm-area">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row col-12">
                        <a href=""  class="close" data-dismiss="modal"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/close-popup.png'; ?>" alt=""></a>
                        
                    </div>
                </div>
                <div class="modal-body">
                    <div class="containter body-vpop">
                        
                        <div class="row">
                            
                            <div class="col-12 body-mmbr">
                                <h1>Hi there!</h1>
                                <p>Enter the passcode to access the member area</p>
                                <p class="error-message" style="color: red; display: none;">Passcode you entered is not valid.</p>
                                <form method="post" id="passcode-form">
                                    <div class="fm-input">
                                        <input type="text" name="passcode" id="passcode">
                                    </div>
                                    <div class="fm-enter">
                                        <button type="submit">Enter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
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
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#passcode-form').on('submit', function(e) {
            e.preventDefault();
            var passcode = $('#passcode').val();

            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'POST',
                data: {
                    action: 'check_passcode',
                    passcode: passcode
                },
                success: function(response) {
                    // console.log(response);
                    if (response.success) {
                        window.location.href = '<?php echo home_url('/member'); ?>';
                    } else {
                        $('.error-message').text(response.data).show();
                    }
                }
            });
        });
    });
</script>

</body>
</html>
<?= MinifyHtml::endMinifyHTML() ?>