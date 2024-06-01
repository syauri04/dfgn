<?php

function register_designfactoryDetail_routes()
{
    register_rest_route('api/v1', '/designfactory/detail/(?P<id>\d+)', array(
        'methods' => 'POST',
        'callback' => 'designfactoryDetail_get_data',
    ));
}

function designfactoryDetail_get_data(WP_REST_Request $request)
{
    $id = $request->get_param('id');

    $query_args = array(
        'post_type'      => 'design-factories',
        'p'              => $id,
        'posts_per_page' => 1,
    );

    $data = new WP_Query($query_args);

    $formatted_data = array();

    if ($data->have_posts()) {
        while ($data->have_posts()) {
            $data->the_post();

            $factoriesData = array(
                'id'                     => get_the_ID(),
                'continentClass'         => get_field('continents'),
                'flagImage'              => get_template_directory_uri() . '/assets/img/assets/country/flags/' . get_field('alpha_code_countries') . '.svg',
                'country'                => get_field('city') . ', ' . get_field('countries'),
                'year'                   => get_field('year_of_joining'),
                'name'                   => get_the_title(),
                'image'                  => get_field('df_logo'),
                'profilePosition'        => get_field('position_of_cp'),
                'profile_image'          => get_field('picture'),
                'profileName'            => get_field('contact'),
                'profileLinkedIn'        => 'belum ada field',
                'profileEmail'           => get_field('email_of_cp'),
                'description'            => [
                    'focus'                  => nl2br(get_field('unique_focus')),
                    'signatureCourses'       => nl2br(get_field('signature_courses')),
                    'collaborationPartners'  => nl2br(get_field('collaboration_partners')),
                ],
            );

            $formatted_data[] = $factoriesData;
        }
    }
    wp_reset_postdata();
    return new WP_REST_Response($formatted_data[0], 200);
}
