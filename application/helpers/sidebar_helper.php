<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('menu_show')) {
    function menu_show($pattern = [])
    {
        $ci = &get_instance();
        $uri_string = uri_string(); // lebih fleksibel dari current_url()

        foreach ($pattern as $segment) {
            if (stripos($uri_string, $segment) !== false) {
                return true; // cocok
            }
        }
        return false;
    }
}

if (!function_exists('collapse_state')) {
    function collapse_state($pattern = [])
    {
        return menu_show($pattern) ? 'show' : '';
    }
}

if (!function_exists('aria_expanded')) {
    function aria_expanded($pattern = [])
    {
        return menu_show($pattern) ? 'true' : 'false';
    }
}

if (!function_exists('toggle_class')) {
    function toggle_class($pattern = [])
    {
        return menu_show($pattern) ? '' : 'collapsed';
    }
}