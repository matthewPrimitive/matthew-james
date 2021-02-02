<?php return ['baseUrl' => 'http://localhost',        'siteUrl' => 'http://localhost',        'siteName' => 'Primitive CMS',        'siteDescription' => 'Testing out the thing to see if it actually works...',        'siteJsonLd' => '',        'siteAnalytics' => '',        'pages' => ['home' => ['hero' => ['hero_title' => 'Primitive CMS', 'hero_subtitle' => 'This is just a test to see if this actually works.', 'hero_button_text' => 'Learn More', 'hero_image' => 'https://primitive-cms-bucket.s3.us-east-2.amazonaws.com/uploads/SUeX7eGKCk438lIFBqAZepDpgyRntlq0JjDAh339.png',], 'intro' => ['title' => 'Featured Products', 'first_title' => 'Product #1', 'first_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'first_image' => 'https://primitive-cms-bucket.s3.us-east-2.amazonaws.com/uploads/SWIWiej0YWTyleQItb7A39fGiRbCO8WBj7uZhWoV.png', 'second_title' => 'Second Product', 'second_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'second_image' => 'https://primitive-cms-bucket.s3.us-east-2.amazonaws.com/uploads/68vUXEBOfW6Tj3qnLmLC26nbND2LFRNx2HQNarY7.png',], 'cta' => ['title' => 'Don&#039;t Miss Something', 'description' => 'This is where a really good CTA line goes.', 'button_text' => 'Click Here',],], 'aboutUs' => ['hero' => ['title' => 'About Us', 'sub_title' => 'Some subtitle that is really good.',], 'intro' => ['title' => 'Meet Our Team', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',], 'team' => [['photo' => 'https://primitive-cms-bucket.s3.us-east-2.amazonaws.com/uploads/pdI0pGcFz7oj49CobdSGRbzSjU3HuwQX9fcNkIRJ.png', 'name' => 'Jessica Hicks', 'title' => 'Client Services',], ['photo' => 'https://primitive-cms-bucket.s3.us-east-2.amazonaws.com/uploads/yihTFWT5Sw2xe76esUvhsipeKdV2jTcbkPi1ARub.png', 'name' => 'Trey Woodward', 'title' => 'Product Team',], ['photo' => 'https://primitive-cms-bucket.s3.us-east-2.amazonaws.com/uploads/iwaptyIBNPI8tBeAwo6qnzSwax6hXQVePQxEvSGR.jpeg', 'name' => 'Max', 'title' => 'Bossman',],],],],        'collections' => ['posts' => ['author' => 'Website',                 'sort' => '-date',                'extends' => '_layouts.post',                'path' => '/news/{filename}',                'items' => []],            'categories' => ['path' => '/news/categories/{filename}',                'extends' => '_layouts.category',                'items' => [],                'posts' => function ($page, $allPosts) {
    return $allPosts->filter(function ($post) use ($page) {
        return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
    });
},],],        'getDate' => function ($page) {
    return Datetime::createFromFormat('U', strtotime($page->date));
},        'getExcerpt' => function ($page, $length = 255) {
    $content = $page->excerpt ?? $page->getContent();
    $content = html_entity_decode($content);
    $cleaned = strip_tags(preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content),                '<code>');
    $truncated = substr($cleaned, 0, $length);
    if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
        $truncated .= '</code>';
    }
    return strlen($cleaned) > $length                ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'                : $cleaned;
},        'isActive' => function ($page, $path) {
    return ends_with(trimPath($page->getPath()), trimPath($path));
},];