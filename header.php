<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="h-full m-0">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body class="h-full bg-no-repeat bg-cover bg-fixed
  <?php 
    if(is_shop()) echo "bg-[url('./assets/images/produits-bg.png')]";
    else if(!$pagename) echo "bg-[url('./assets/images/landing-bg.png')]";
    else if($pagename == 'mentions-legales') echo "";
    else if($pagename == 'conditionnes-generales-de-vente') echo "";
    else echo "bg-[url('./assets/images/about-us-bg.png')]";
  ?>">
  <header
    class="flex flex-col lg:flex-row xl:justify-between justify-center items-center bg-[#F9F6F2]"
    >
    <div class="block lg:hidden flex w-full justify-between px-8">
      <a href="<?php echo site_url('/') ?>">
        <img
          class="min-w-16 py-2"
          src="<?php echo get_theme_file_uri('/src/assets/images/navbar-logo.png'); ?>"
          width="80"
        />
      </a>
      <button id="astronav-menu" aria-label="Toggle Menu">
        <svg
          fill="currentColor"
          class="w-4 h-4 text-gray-800"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <title>Toggle Menu</title>
          <path
            class="astronav-close-icon astronav-toggle hidden"
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M18.278 16.864a1 1 0 01-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 01-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 011.414-1.414l4.829 4.828 4.828-4.828a1 1 0 111.414 1.414l-4.828 4.829 4.828 4.828z"
          ></path>
          <path
            class="astronav-open-icon astronav-toggle"
            fill-rule="evenodd"
            d="M4 5h16a1 1 0 010 2H4a1 1 0 110-2zm0 6h16a1 1 0 010 2H4a1 1 0 010-2zm0 6h16a1 1 0 010 2H4a1 1 0 010-2z"
          ></path>
        </svg>
      </button>
    </div>
    <div
      class="hidden xl:flex w-full xl:w-auto self-start flex-grow justify-start basis-0"
    >
      <img src="<?php echo get_theme_file_uri('/src/assets/images/leaves-1.png'); ?>" width="70" />
    </div>
    <nav
      class="astronav-items astronav-toggle hidden w-full lg:w-auto lg:flex lg:my-2"
    >
      <ul class="flex flex-col lg:flex-row lg:gap-14 items-center">
        <li></li>
        <li>
          <a
            href="<?php echo site_url('/about-us') ?>"
            class="flex lg:px-3 py-2 items-center text-gray-600 hover:text-gray-900 font-raleway"
          >
            <span>QUI SOMMES-NOUS</span>
          </a>
        </li>
        <li>
          <a
            href="<?php echo site_url('/shop') ?>"
            class="flex lg:px-3 py-2 items-center text-gray-600 hover:text-gray-900 font-raleway"
          >
            <span>PRODUITS</span>
          </a>
        </li>
        <a href="<?php echo site_url('/') ?>">
          <img
            src="<?php echo get_theme_file_uri('/src/assets/images/navbar-logo.png'); ?>"
            width="120"
            class="lg:block hidden"
          />
        </a>
        <li>
          <a
            href="<?php echo site_url('/learn-more') ?>"
            class="flex lg:px-3 py-2 items-center text-gray-600 hover:text-gray-900 font-raleway"
          >
            <span>CONNAÎTRE PLUS</span>
          </a>
        </li>
        <li>
          <a
            href="<?php echo site_url('/contact') ?>"
            class="flex lg:px-3 py-2 items-center text-gray-600 hover:text-gray-900 font-raleway"
          >
            <span>CONTACT</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('/cart') ?>">
            <span class="lg:hidden text-gray-600 hover:text-gray-900 font-raleway">CART</span>
            <div class="lg:flex items-center text-[#598170] hidden">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#598170" viewBox="0 0 256 256"><path d="M239.71,74.14l-25.64,92.28A24.06,24.06,0,0,1,191,184H92.16A24.06,24.06,0,0,1,69,166.42L33.92,40H16a8,8,0,0,1,0-16H40a8,8,0,0,1,7.71,5.86L57.19,64H232a8,8,0,0,1,7.71,10.14ZM88,200a16,16,0,1,0,16,16A16,16,0,0,0,88,200Zm104,0a16,16,0,1,0,16,16A16,16,0,0,0,192,200Z"></path></svg>
              <span  id="mini-cart-count" class="cart-counter mt-2"><?php echo WC()->cart->get_cart_contents_count() ?></span>
            </div>
          </a>
        </li>
      </ul>
    </nav>
    <div
      class="hidden xl:flex w-full xl:w-auto self-start flex-grow justify-end basis-0"
    >
      <img src="<?php echo get_theme_file_uri('/src/assets/images/leaves-2.png'); ?>" width="120" />
    </div>
  </header>
  
    
