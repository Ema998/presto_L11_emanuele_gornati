<?php

return [
    'navbar' => [
        'home' => 'Home',
        'articles' => 'Our articles',
        'create' => 'Create article',
        'dashboard' => 'Dashboard',
        'categories' => 'Categories',
        'search_placeholder' => 'Search articles',
        'search' => 'Search',
        'greeting' => 'Hello :name',
        'login' => 'Login',
        'register' => 'Register',
        'logout' => 'Logout',
        'become_revisor' => 'Become a revisor',
        'change_language' => 'Switch language to :lang',
    ],

    'hero' => [
        'homepage' => [
            'badge' => 'Italian marketplace',
            'title' => 'Buy and sell in style on Presto.it',
            'subtitle' => 'Discover curated listings from the community and publish your products in just a few moments.',
            'primary_cta' => 'Browse catalog',
            'secondary_cta' => 'Post an ad',
        ],
        'articles_index' => [
            'badge' => 'Full catalog',
            'title' => 'Our articles',
            'subtitle' => 'Discover everything the community has put up for sale, from fresh arrivals to timeless classics.',
        ],
        'articles_category' => [
            'badge' => 'Category',
            'title' => 'Articles in :name',
            'subtitle' => 'Browse all products from the selected category and find what you need.',
        ],
        'articles_search' => [
            'badge' => 'Search',
            'title' => 'Results for ":query"',
            'subtitle' => 'Here are the items matching your search. Refine the filters for even more precise results.',
        ],
        'articles_show' => [
            'badge' => 'Article details',
            'subtitle' => 'Published :time by :author in the :category category.',
            'subtitle_no_author' => 'Published :time in the :category category.',
        ],
        'articles_create' => [
            'badge' => 'New listing',
            'title' => 'Create a new article',
            'subtitle' => 'Share a product with the community: just a few details and some photos.',
        ],
        'revisor' => [
            'badge' => 'Revisor area',
            'title' => 'Dashboard',
        ],
        'auth_login' => [
            'badge' => 'Welcome back',
            'title' => 'Log in to your account',
            'subtitle' => 'Access your dashboard and manage your listings quickly and securely.',
        ],
        'auth_register' => [
            'badge' => 'Join Presto.it',
            'title' => 'Create your account',
            'subtitle' => 'Register for free and start publishing your products today.',
        ],
    ],

    'cards' => [
        'price' => '€ :price',
        'published' => 'Posted :time',
        'cta' => 'Learn more',
    ],

    'lists' => [
        'empty_title' => 'No articles to show',
        'empty_subtitle' => 'Come back soon: new offers arrive every day.',
        'category_empty_title' => 'No articles found for this category',
        'category_empty_subtitle' => 'Visit another category or create the first listing!',
        'search_empty_title' => 'No articles found',
        'search_empty_subtitle' => 'Adjust your keywords or filter by category to find what you need.',
    ],

    'alerts' => [
        'success' => 'Article created successfully!',
        'errors_title' => 'Please fix the following issues:',
        'revisor_accepted' => 'Article approved.',
        'revisor_rejected' => 'Article rejected.',
        'revisor_request_sent' => 'Request sent; you will receive a reply by email.',
        'access_denied' => 'Access denied.',
    ],

    'form' => [
        'title' => 'Title',
        'title_placeholder' => 'Enter an eye-catching title',
        'description' => 'Description',
        'description_placeholder' => 'Describe your article in detail',
        'price' => 'Price',
        'price_placeholder' => '0.00',
        'category' => 'Category',
        'category_placeholder' => 'Select a category',
        'images' => 'Images',
        'preview' => 'Image preview:',
        'remove' => 'Remove',
        'submit' => 'Publish article',
        'email' => 'Email',
        'email_placeholder' => 'Enter your email address',
        'password' => 'Password',
        'password_placeholder' => 'Enter your password',
        'password_confirmation' => 'Confirm password',
        'name' => 'Name',
    ],

    'show' => [
        'price' => '€ :price',
        'back_to_catalog' => 'Back to catalog',
        'explore_more' => 'Explore other articles',
        'image_alt' => 'Article image :number',
        'placeholder_alt' => 'Placeholder image',
    ],

    'revisor' => [
        'labels' => 'Labels',
        'no_labels' => 'No labels',
        'ratings' => 'Ratings',
        'price' => 'Price',
        'description' => 'Description',
        'category' => 'Category',
        'reject' => 'Reject',
        'accept' => 'Approve',
        'empty' => 'There are no articles to review',
        'image_alt' => 'Image :number',
        'adult' => 'Adult content',
        'violence' => 'Violence',
        'spoof' => 'Spoof',
        'racy' => 'Racy',
        'medical' => 'Medical',
    ],

    'auth' => [
        'login_button' => 'Log in',
        'register_button' => 'Register',
    ],

    'filter' => [
        'title' => 'Filter by category',
        'all' => '— All categories —',
        'empty' => 'No articles found for the selected category.',
    ],

    'footer' => [
        'line1' => '© :year Presto.it. All rights reserved.',
        'line2' => 'Built with Laravel & Livewire',
    ],
];
