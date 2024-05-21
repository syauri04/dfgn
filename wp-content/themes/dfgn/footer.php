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
            </div>
            <div class="modal-body">
                <div class="containter body-vpop">

                    <div class="row">

                        <div class="col-12 body-mmbr">
                            <h1>Hi there!</h1>
                            <p>Enter the passcode to access the member area</p>
                            <form action="">
                                <div class="fm-input">
                                    <input type="text" name="">
                                </div>
                                <div class="fm-enter">
                                    <button type="button">Enter</button>
                                </div>
                            </form>
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
    Render::PrintStyles();
    ?>
</style>

</body>
</html>