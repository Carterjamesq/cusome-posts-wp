// Creating Custom Posts
function my_first_post_type () {
    $args = array (
        'labels' => array (
                'name' => 'Jobs',
                'singular_name' => 'Job'

        ),
        'hierarchical' => true,
        'menu_icon' => 'dashicons-businessperson',
        'public' => true,
        'has_archive' => true,
        'supports' => array ('title', 'editor', 'thumbnail'),

    );
    register_post_type('jobs', $args);
}

add_action( 'init', 'my_first_post_type' );

//Add Categories to Jobs
function my_jobs_taxonomy () {
    $args = array (
        'labels' => array (
            'name' => 'Categories',
            'singular_name' => 'Category'

        ),
        'public' => true,
        'hierarchical' => false,
    );

    register_taxonomy('jobs-taxonomy', array('jobs'), $args);
}

add_action ('init', 'my_jobs_taxonomy');

// Add tags to custom posts
function my_jobs_taxonomy_tags () {
    $args = array (
        'labels' => array (
            'name' => 'Tags',
            'singular_name' => 'Tag'
        ),
        'public' => true,
        'hierarchical' => false,
    );

    register_taxonomy('tags-taxonomy', array('jobs'), $args);
}

add_action ('init', 'my_jobs_taxonomy_tags');
