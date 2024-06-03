
<?php
include 'style.css.php';
?>

<div id="p-member" class="modal fade" role="dialog">
    <div class="container modal-dialog pm-area">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row col-12">
                    <a href="" class="close" data-dismiss="modal"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/close-popup.png'; ?>" alt=""></a>
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
        </div>
    </div>
</div>