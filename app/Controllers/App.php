<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function getPostByCategory( $nbProjects)
    {
        
        // choose $nbProjects projects from portfolio
        $args =  array(
            'category_name' =>  $nbProjects,
            'posts_per_page' => 3,
        );
        $projects = new \Wp_Query($args);
        
        if ($projects->have_posts()) {
            // get the total of projet
            // $totalNbProjects = wp_count_posts( 'portfolio' )->publish;
            return $projects;
        } else {
            return "no project";
        }

    }
}
