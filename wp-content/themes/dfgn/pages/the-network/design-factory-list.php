<div class="df-list">

    <div class="border-head-df">
        <div style="display:flex; justify-content:center;width:100%">
            <div class="scroll-container boxies" style="overflow-x: auto;">
                <div class="list-tab tab-left" style="width:max-content">
                    <ul class="filter-factory">
                        <li><a href="#" class="active" data-filter="*">All Continents</a></li>
                        <li><a href="#" class="" data-filter=".america">Americas</a></li>
                        <li><a href="#" class="" data-filter=".asia">Asia Pacific</a></li>
                        <li><a href="#" class="" data-filter=".europe">Europe and the Middle East</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php RenderStyle::Style() ?>
    <style>
        .border-head-df {
            padding: 30px;
            display: flex;
            justify-content: center;
        }

        .df-list .list-tab {
            display: flex;
            padding: 10px;
            box-sizing: border-box;
        }

        .df-list .list-tab li {
            margin-right: 15px;
        }

        .df-list .list-tab li:last-child {
            margin-right: 0;
        }

        .df-list .list-tab li a {
            white-space: nowrap;
            cursor: pointer;
        }

        .active {
            font-weight: bold;
        }
    </style>
    <?php RenderStyle::EndStyle() ?>
    <?php RenderJS::start() ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const listChronicles = document.querySelector('.boxies');
            let isDown = false;
            let startX;
            let scrollLeft;

            listChronicles.addEventListener('mousedown', (e) => {
                isDown = true;
                listChronicles.classList.add('active');
                startX = e.pageX - listChronicles.offsetLeft;
                scrollLeft = listChronicles.scrollLeft;
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
                const walk = (x - startX) * 1;
                listChronicles.scrollLeft = scrollLeft - walk;
            });
        });
    </script>
    <?php RenderJS::end() ?>
</div>

<div id="factoriesContainer" class="row" style="margin-bottom: 60px;">
    <!-- nanti bisa pake ajax biar load per jumlah -->
    <?php
    $listdf = new WP_Query([
        'post_type' => 'design-factories',
        'meta_key' => 'year_of_joining',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
    ]);
    ?>

    <?php
    include 'df-list/factory-functions.php';
    echo createFactoryModal();
    ?>

    <?php if ($listdf->have_posts()) : ?>
        <?php
        $index = 0;
        ?>
        <?php foreach ($listdf->get_posts() as $post) : ?>
            <?php
            setup_postdata($post);
            $index++;
            $continents = get_field('continents') ?? '';
            if ($continents == "Europe and the middle east") {
                $continentClass = 'europe';
            } else  if ($continents == "Americas") {
                $continentClass = 'america';
            } else  if ($continents == "Asia pacific") {
                $continentClass = 'asia';
            }

            $factoriesData = [
                'continentClass' => $continentClass,
                'flagImage' => get_template_directory_uri() . '/assets/img/assets/country/flags/' . get_field('alpha_code_countries') . '.svg',
                'country' => get_field('city') . ', ' . get_field('countries'),
                'year' => get_field('year_of_joining'),
                'name' => get_the_title(),
                'image' => get_field('df_logo'),
                'profileImage' => get_field('picture'),
                'profileName' => get_field('contact'),
                'profilePosition' => get_field('position_of_cp'),
                'profileLinkedIn' => '#',
                'profileEmail' => get_field('email_of_cp'),
                'description' => 'Fusion Point believes that creativity and innovation are the tools and mindset that future leaders need to navigate uncertainty and create a positive impact for a sustainable future.',
                'focus' => nl2br(get_field('unique_focus')),
                'signatureCourses' => nl2br(get_field('signature_courses')),
                'collaborationPartners' => nl2br(get_field('collaboration_partners')),
                'countryFlag' => '',
                'logo' => ''
            ];

            echo createFactoryEntry($factoriesData);
            ?>
        <?php endforeach; ?>
    <?php endif; ?>
    <?php
    wp_reset_postdata();
    ?>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#factoryModal').on('show.bs.modal', function(event) {
            $('html').addClass('modal-open');
            var button = $(event.relatedTarget);
            var factory = button.closest('.card-factory').find('.factory-data');

            var modal = $(this);
            modal.find('#modalCountryFlag').attr('src', factory.data('flag'));
            modal.find('#modalCountry').text(factory.data('country'));
            modal.find('#modalName').text(factory.data('name'));
            modal.find('#modalYear').text(factory.data('year'));
            modal.find('#modalLogo').attr('src', factory.data('image'));
            modal.find('#modalFocus').text(factory.data('focus'));
            modal.find('#modalDescription').text(factory.data('description'));
            modal.find('#modalProfileName').text(factory.data('profileName'));
            modal.find('#modalprofilePosition').text(factory.data('profilePosition'));
            modal.find('#modalLinkedinLink').attr('href', factory.data('profileLinkedIn'));
            modal.find('#modalLinkedinLink').attr('href', factory.data('profileLinkedIn'));
            modal.find('#modalProfilePicture').css('background-image', 'url(' + factory.data('profileImage') + ')');
            modal.find('#modalSosFb').attr('href', factory.data('profileFacebook'));
            modal.find('#modalSosIg').attr('href', factory.data('profileInstagram'));
            modal.find('#modalSosX').attr('href', factory.data('profileX'));
        });

        $('#factoryModal').on('hidden.bs.modal', function() {
            $('html').removeClass('modal-open');
        });
    });
</script>


<?php RenderStyle::Style() ?>
<style>
    .df-list .list-tab {
        display: flex;
        justify-content: center;
        overflow-x: auto;
        padding: 10px;
        box-sizing: border-box;
    }

    .df-list .list-tab li a {
        white-space: nowrap;
    }

    .df-list .list-tab a {
        cursor: pointer;
    }
</style>
<?php RenderStyle::EndStyle() ?>