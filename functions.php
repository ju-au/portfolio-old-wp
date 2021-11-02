<?php
add_action('init', function () {
    register_post_type('works', [
        'public' => true,
        'label' => '実績',
        'show_in_rest' => true,
        'supports' => ['thumbnail', 'title', 'editor', 'custom-fields', 'tags']
    ]);

    add_theme_support('post-thumbnails');
});
