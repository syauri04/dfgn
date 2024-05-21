    <footer class="footer-section">
        <div class="container pt-100 pb-60">
            
            <div class="row">
               <div class="col-xl-4 col-md-4">
                    <div class="footer-logo">
                        <a href="index.html"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/logo-footer.png'; ?>" class="img-fluid" alt=""></a>
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
                            <a href="index.html">Home</a><br>
                            <a href="index.html">About</a><br>
                            <a href="insight.html">insight</a><br>
                            <a href="event.html">Events and trainings</a><br>
                            <a href="team.html">The DFGN team</a><br>
                            <a href="factory.html">The network</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    
                    <div class="col-xl-8 col-lg-8 text-center text-lg-left">
                        
                        <div class="copyright-text">
                            <p>  Copyright © 2022 Design Factory Global Network. <br>All rights reserved. </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 d-none d-lg-block text-right">
                        <div class="footer-sosmed">
                            <ul>
                                <li><a href="https://www.linkedin.com/company/design-factory-global-network" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/ssmd/LinkedIn.png'; ?>" alt=""></a></li>
                                <li><a href="https://vimeo.com/dfgn" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/ssmd/Vimeo.png'; ?>" alt=""></a></li>
                                <li><a href="https://www.flickr.com/photos/107310216@N06/sets/" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/ssmd/Flickr.png'; ?>" alt=""></a></li>
                                <li><a href="https://www.facebook.com/globaldfnetwork/" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/ssmd/Facebook.png'; ?>" alt=""></a></li>
                                <li><a href="https://www.instagram.com/dfglobalnetwork/?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/img/assets/ssmd/Instagram.png'; ?>" alt=""></a></li>
                           
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="mobile_ver"></div>
    <!-- POP UP MEMBER AREA -->
    <div id="p-member" class="modal fade" role="dialog">
        <div class="modal-dialog pm-area">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row col-12">
                        <a href=""  class="close" data-dismiss="modal"><img src="img/assets/close-popup.png" alt=""></a>
                        
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
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
            </div>
    
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
    <?php wp_footer(); ?>

    <style>
        <?php
        Render::PrintStyles(); 
        ?>
    </style>

    </body>

</html>