<?php

add_action('rest_api_init', 'register_all_module_routes');

function register_all_module_routes()
{
    $modules_dir = get_template_directory() . '/pages/api';

    if (is_dir($modules_dir)) {
        $modules = scandir($modules_dir);

        foreach ($modules as $module) {
            if ($module !== '.' && $module !== '..' && is_dir($modules_dir . '/' . $module)) {
                $route_file = $modules_dir . '/' . $module . '/route.php';

                if (file_exists($route_file)) {
                    include_once $route_file;

                    $register_function = 'register_' . $module . '_routes';

                    if (function_exists($register_function)) {
                        error_log("Registering routes for $module"); 
                        $register_function();
                    } else {
                        error_log("Function $register_function does not exist"); 
                    }
                } else {
                    error_log("Route file $route_file does not exist"); 
                }
            }
        }
    } else {
        error_log("Modules directory $modules_dir does not exist"); 
    }
}
