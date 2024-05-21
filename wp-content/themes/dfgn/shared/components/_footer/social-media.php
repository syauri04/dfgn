<div class="footer-sosmed">
    <ul>
        <li><a href="https://www.linkedin.com/company/design-factory-global-network" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/ssmd/LinkedIn.png'; ?>" alt=""></a></li>
        <li><a href="https://vimeo.com/dfgn" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/ssmd/Vimeo.png'; ?>" alt=""></a></li>
        <li><a href="https://www.flickr.com/photos/107310216@N06/sets/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/ssmd/Flickr.png'; ?>" alt=""></a></li>
        <li><a href="https://www.facebook.com/globaldfnetwork/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/ssmd/Facebook.png'; ?>" alt=""></a></li>
        <li><a href="https://www.instagram.com/dfglobalnetwork/?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/img/assets/ssmd/Instagram.png'; ?>" alt=""></a></li>
    </ul>
</div>

<?php Render::Style(); ?>
<style>
    .footer-sosmed {
        display: flex;
        justify-content: right;
    }

    .footer-sosmed ul {
        gap: 20px
    }

    .footer-sosmed ul li {
        margin: 0;
    }

    @media (max-width: 991px) {
        .footer-sosmed {
        display: flex;
        justify-content: center;
        margin-bottom: 40px;
    }
    }
</style>
<?php Render::EndStyle(); ?>