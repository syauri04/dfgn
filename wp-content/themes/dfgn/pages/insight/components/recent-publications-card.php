<div class="box-black">
    <div class="hover-dw">
        <div class="hov-title">
            <?= $data["title"] ?>
        </div>
        <div class="hov-dwonload">
            <div class="icwd">
                <a href=" <?= $data["file_url"] ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/Download.png'; ?>" alt="">
                </a>
                <span>PDF</span>
            </div>
            <div class="year">
                2023
            </div>
        </div>
    </div>
    <div class="lipet">
        <svg xmlns="http://www.w3.org/2000/svg" width="110" height="102" viewBox="0 0 110 102" fill="none">
            <path d="M0.222656 0V101.333H110L0.222656 0Z" fill="white" />
            <!-- <path opacity="0.35" d="M0.222656 0.88916V114.889L110 85.3334L0.222656 0.88916Z" fill="black"/> -->
        </svg>
    </div>
    <div class="lipet-shade">
        <svg xmlns="http://www.w3.org/2000/svg" width="110" height="115" viewBox="0 0 110 115" fill="none">
            <path opacity="0.35" d="M0.222656 0.88916V114.889L110 85.3334L0.222656 0.88916Z" fill="black" />
        </svg>

    </div>
    <svg id="svg-pub">
        <defs>
            <mask id="mask-pub">
                <path d="M0 388.444V0H194.222L303.999 101.333V388.444H0Z" fill="#FFFFFF" />
            </mask>
        </defs>
    </svg>
    <div class="load-img">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/pub5.png'; ?>" alt="">
    </div>
</div>


<?php RenderStyle::Style(); ?>
<style>
    .hover-dw {
        width: 100%;
    }
</style>
<?php RenderStyle::EndStyle(); ?>