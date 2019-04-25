<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?>
</head>

<body>
    <div class="nav-top">

    <span class="navbar-toggle" id="js-navbar-toggle">
         <svg width="36" height="24" viewBox="0 0 36 24" fill="none" xmlns="http://www.w3.org/2000/svg">
         <rect width="36" height="3.0" rx="1.8" fill="#000000"/>
         <rect y="9.6001" width="36" height="3.0" rx="1.8" fill="#000000"/>
         <rect y="20.3999" width="36" height="3.0" rx="1.8" fill="#000000"/>
       </svg>
   </span>

   <svg class="logo-mobile" id="Lager_1" data-name="Lager 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100.66 26.46"><defs><style>.cls-1{fill:#253937;}.cls-2{fill:#f6b5b1;}.cls-3{isolation:isolate;font-size:24px;font-family:Roboto-Bold, Roboto;font-weight:700;}</style></defs><title>navbar-logo</title><path class="cls-1" d="M20.72,18.81H9.53A8.91,8.91,0,0,1,9.68,1H26.21a1.75,1.75,0,0,1,0,3.5H9.74A5.43,5.43,0,0,0,4.48,9.9a5.36,5.36,0,0,0,5.16,5.4H20.72a1.75,1.75,0,0,1,0,3.5h0Z"/><path class="cls-2" d="M11.51,26a1.75,1.75,0,1,1,0-3.5H26.82a5.39,5.39,0,0,0,.11-10.78H15.85a1.75,1.75,0,0,1,0-3.5H27A8.89,8.89,0,1,1,26.88,26H11.51Z"/><circle class="cls-1" cx="8.18" cy="9.98" r="2.3"/><circle class="cls-2" cx="28.39" cy="17.06" r="2.3"/></svg>
</div>
<nav class="navbar">
<svg class="logo-desktop" id="Lager_1" data-name="Lager 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100.66 26.46"><defs><style>.cls-1{fill:#253937;}.cls-2{fill:#f6b5b1;}.cls-3{isolation:isolate;font-size:24px;font-family:Roboto-Bold, Roboto;font-weight:700;}</style></defs><title>navbar-logo</title><path class="cls-1" d="M20.72,18.81H9.53A8.91,8.91,0,0,1,9.68,1H26.21a1.75,1.75,0,0,1,0,3.5H9.74A5.43,5.43,0,0,0,4.48,9.9a5.36,5.36,0,0,0,5.16,5.4H20.72a1.75,1.75,0,0,1,0,3.5h0Z"/><path class="cls-2" d="M11.51,26a1.75,1.75,0,1,1,0-3.5H26.82a5.39,5.39,0,0,0,.11-10.78H15.85a1.75,1.75,0,0,1,0-3.5H27A8.89,8.89,0,1,1,26.88,26H11.51Z"/><circle class="cls-1" cx="8.18" cy="9.98" r="2.3"/><circle class="cls-2" cx="28.39" cy="17.06" r="2.3"/><text transform="translate(46.72 21.5)">SGN</text></svg>
 <!-- <h5 class="logo">SGN</h5> -->
    <ul class="menu" id="js-menu">
        <?php foreach (get_pages(['sort_column' => 'menu_order']) as $page): ?>
            <li class="li-item <?php if (is_page($page) || is_home() && $page->ID == get_option('page_for_posts')) { echo 'active'; } ?>">
                <a class="li-link" href="<?php echo get_permalink($page); ?>">
                    <?php echo $page->post_title; ?>
                </a><!-- /li-link -->
            </li><!-- /li-item -->
        <?php  endforeach; ?>
        <nav role="navigation">
            <?php wp_nav_menu(['theme_location' => 'navigation']); ?>
        </nav>
    </ul>
</nav>

  <div class="container">