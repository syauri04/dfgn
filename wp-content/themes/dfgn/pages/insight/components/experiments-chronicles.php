<section id="experiments-chronicles" class="section-area pt-120">
    <div class="container">

        <div class="row border-head-inm">
            <div class="head-content ">
                <div class="">
                    <h1>Experiments and chronicles of DF's</h1>
                </div>
                <div class="">
                    <p>We give space to a bunch of miscellaneous contributions from bold and creative humans in our network, and we would like to share some resources with you.</p>
                </div>
            </div>
            <div class="body-content">
                <div style=" display: flex; justify-content: center;">
                    <div class="scroll-container" style="overflow:auto">
                        <div class="list-chronicles" style="    width: max-content;">
                            <ul class="filter-cron">
                                <li><a class="active" data-filter="*">All</a></li>
                                <li><a class="" data-filter=".multimedia">Multimedia</a></li>
                                <li><a class="" data-filter=".blogpost">Blog post</a></li>
                                <li><a class="" data-filter=".sosmed">Social media</a></li>
                                <li><a class="" data-filter=".publication">Publications</a></li>
                                <li><a class="" data-filter=".other">Others</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pt-27 cron-active">

            <?php foreach ($param["data"] as $data) : ?>
                <div class="col-xl-4 col-md-4 grid-cron <?= $data['category_slug'] ?>">
                    <div class="boxies-cronicles">
                        <div class="img-cronicles">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/cronicle_1.jpg'; ?>" alt="">
                        </div>
                        <div class="info-cronicles">
                            <p><?= $data['category_name'] ?></p>
                            <h1><?= $data['title'] ?></h1>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="col-xl-4 col-md-4 grid-cron multimedia">
                <div class="boxies-cronicles">
                    <div class="img-cronicles">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/cronicle_1.jpg'; ?>" alt="">
                    </div>
                    <div class="info-cronicles">
                        <p>Podcast</p>
                        <h1>ADF: The Design Factory where it all started</h1>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-4 grid-cron blogpost">
                <div class="boxies-cronicles">
                    <div class="img-cronicles">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/cronicle_2.jpg'; ?>" alt="">
                    </div>
                    <div class="info-cronicles">
                        <p>Blog Post</p>
                        <h1>What is there for students in Design Thinking inside the Design Factory Global Network family?</h1>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-4 grid-cron sosmed">
                <div class="boxies-cronicles">
                    <div class="img-cronicles">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/cronicle_3.jpg'; ?>" alt="">
                    </div>
                    <div class="info-cronicles">
                        <p>Linkedin Post</p>
                        <h1>New Member! Design Factory Birmingham launched at Ansto</h1>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-4 grid-cron publication">
                <div class="boxies-cronicles">
                    <div class="img-cronicles">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/cronicle_4.jpg'; ?>" alt="">
                    </div>
                    <div class="info-cronicles">
                        <p>Book</p>
                        <h1>Passion Based Co-creation</h1>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-4 grid-cron other">
                <div class="boxies-cronicles">
                    <div class="img-cronicles">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/chornicles-5.png'; ?>" alt="">
                    </div>
                    <div class="info-cronicles">
                        <p>Toolkits</p>
                        <h1>Toolkits for cocreation</h1>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-4 grid-cron sosmed">
                <div class="boxies-cronicles">
                    <div class="img-cronicles">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/cronicle_6.jpg'; ?>" alt="">
                    </div>
                    <div class="info-cronicles">
                        <p>Linkedin Post</p>
                        <h1>Celebrating IDFW</h1>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-4 grid-cron multimedia">
                <div class="boxies-cronicles">
                    <div class="img-cronicles">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/chornicles-6.png'; ?>" alt="">
                    </div>
                    <div class="info-cronicles">
                        <p>Podcast</p>
                        <h1>Academic Innovation</h1>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-4 grid-cron sosmed">
                <div class="boxies-cronicles">
                    <div class="img-cronicles">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/assets/cronicle_8.jpg'; ?>" alt="">
                    </div>
                    <div class="info-cronicles">
                        <p>Linkedin Post</p>
                        <h1>THE (PEACING) EMOTIONAL EFFECT OF BELONGING TO A COMMUNITY OF PRACTICE</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php RenderStyle::Style() ?>
<style>
    #experiments-chronicles .row.border-head-inm {
        margin: 20px;
    }

    #experiments-chronicles .head-content {
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 0;
        gap: 40px;
    }

    #experiments-chronicles .body-content {
        width: 100%;
        margin-top: 40px;
    }

    .list-chronicles {
        display: flex;
        justify-content: center;
        overflow-x: auto;
        padding: 10px;
        box-sizing: border-box;
    }

    .list-chronicles {
        white-space: nowrap;
    }

    .list-chronicles a {
        cursor: pointer;
    }

    @media (max-width: 991px) {
        #experiments-chronicles .row.border-head-inm {
            border-radius: 41px;
            padding: 50px;
        }

        #experiments-chronicles .head-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0;
            gap: 20px;
        }

        #experiments-chronicles .head-content h1 {
            font-size: 26px;
            line-height: normal;
        }
    }
</style>
<?php RenderStyle::EndStyle() ?>


<?php RenderJS::start(); ?>
<script>
    $(".filter-cron a").on("click", function(event) {
        // Hapus class active dari semua elemen di dalam ul
        $('.filter-cron a.active').removeClass('active');

        // Tambahkan class active ke elemen yang diklik
        $(this).addClass('active');
        event.preventDefault();
    });

    document.addEventListener('DOMContentLoaded', (event) => {
        const listChronicles = document.querySelector('.list-chronicles');

        let isDown = false;
        let startX;
        let scrollLeft;

        listChronicles.addEventListener('mousedown', (e) => {
            isDown = true;
            listChronicles.classList.add('active');
            startX = e.pageX - listChronicles.offsetLeft;
            scrollLeft = listChronicles.parentElement.scrollLeft;
        });

        listChronicles.addEventListener('mouseleave', () => {
            isDown = false;
            listChronicles.classList.remove('active');
        });

        listChronicles.addEventListener('mouseup', () => {
            isDown = false;
            listChronicles.classList.remove('active');
        });

        listChronicles.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - listChronicles.offsetLeft;
            const walk = (x - startX) * 1; // Scroll-fast
            listChronicles.parentElement.scrollLeft = scrollLeft - walk;
        });
    });
</script>
<?php RenderJS::end(); ?>