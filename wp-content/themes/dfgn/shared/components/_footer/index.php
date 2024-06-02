<?php
include 'style.css.php';
?>

<!-- note: -->
<!-- 
    on style.css !need delete
    footer-section 
    .footer-logo, .copyright-text
 -->

<footer class="footer-dfgn">
    <div class="container">

        <div class="background" style="font-size: 0; position:relative">

            <svg class="footer-circle" width="192" height="192" viewBox="0 0 192 192" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="96" cy="96" r="96" fill="white" />
            </svg>

            <svg width="1272" height="318" viewBox="0 0 1272 318" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-bottom: -0.13%;">
                <g clip-path="url(#clip0_1_5)">
                    <path d="M0 312.002V96.002C0 42.9828 42.9805 0.00212009 95.9998 0.00199751L960 2.62188e-10C1013.02 -0.000122578 1056 42.9806 1056 96V120C1056 173.019 1098.98 216 1152 216H1176C1229.02 216 1272 258.982 1272 312.001C1272 365.021 1229.02 408.002 1176 408.002H96C42.9807 408.002 0 365.022 0 312.002Z" fill="white" />
                </g>
                <defs>
                    <clipPath id="clip0_1_5">
                        <rect width="1272" height="318" fill="white" />
                    </clipPath>
                </defs>
            </svg>

            <div class="content">
                <div class="wrapper">
                    <div style="margin-top: -26%;">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/logo-footer.png'; ?>" class="logo" alt=""></a>
                            </div>
                            <div class="col-md-4">
                                <div class="footer-menu">
                                    <div class="title">
                                        Address
                                    </div>
                                    <div class="fm-content">
                                        Puumiehenkuja 5A, 02150  <br> Espoo, Finland  <br>P.O. Box 17700  <br>FI-00076 AALTO
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="footer-menu">
                                    <div class="title">
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
                        <div>
                            <div class="wrapper-sosmed-copyright">
                                <div>
                                    <p> Copyright © 2022 Design Factory Global Network. All rights reserved. </p>
                                </div>
                                <div>
                                    <?php include 'social-media.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <svg width="1272" height="90" viewBox="0 0 1272 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1_3)">
                    <path d="M0 -5.9982V-221.998C0 -275.017 42.9805 -317.998 95.9998 -317.998L960 -318C1013.02 -318 1056 -275.019 1056 -222V-198C1056 -144.981 1098.98 -102 1152 -102H1176C1229.02 -102 1272 -59.0182 1272 -5.99921C1272 47.0208 1229.02 90.0018 1176 90.0018H96C42.9807 90.0018 0 47.0218 0 -5.9982Z" fill="white" />
                </g>
                <defs>
                    <clipPath id="clip0_1_3">
                        <rect width="1272" height="90" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </div>

    </div>

</footer>

<?php RenderJS::start() ?>
<script>
    window.onload = function() {
        gsap.registerPlugin(ScrollTrigger);

        var tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".footer-dfgn",
                start: "top bottom",
                end: "+=30%",
                scrub: true,
                // markers: true
            }
        });

        tl.fromTo(".footer-dfgn .background .footer-circle", {
            opacity: 0,
            y: -100,
            // right: 0,
        }, {
            // top: 0,
            y: 0,
            opacity: 1,
            duration: 3,
            ease: "Power0.easeNone"
        });

        function refreshAnimationFooter() {
            tl.invalidate().restart(); // Refresh the animation
        }

        // Event listener for window resize
        window.addEventListener('resize', function() {
            refreshAnimationFooter(); // Refresh animation on window resize
        });
    };
</script>
<?php RenderJS::end() ?>