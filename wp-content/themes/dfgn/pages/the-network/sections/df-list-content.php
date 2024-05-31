<?php
include 'df-list-content.css.php';
include 'df-list-content.js.php';
include get_template_directory() .'/pages/the-network/components/factory-functions.php';
echo createFactoryModal();
?>

<div class="df-list">

    <div class="df-list-tab border-head-df">
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

    <div class="df-list-items row">
        <!-- nanti bisa pake ajax biar load per jumlah -->
        <?php
        $data = new WP_Query([
            'post_type' => 'design-factories',
            'meta_key' => 'year_of_joining',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
        ]);
        ?>

        <?php if ($data->have_posts()) : ?>
            <?php $index = 0; ?>
            <?php foreach ($data->get_posts() as $post) : ?>
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
        <?php wp_reset_postdata(); ?>
    </div>
</div>