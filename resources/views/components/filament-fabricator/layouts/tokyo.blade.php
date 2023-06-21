@props(['page'])

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <!--<![endif]-->

  <head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="{{ config('app.name', 'Laravel') }}">
    <meta name="author" content="Marketify">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- STYLES -->
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet">

    <!-- Scripts -->
    @vite([
    'resources/css/app.css',
    'resources/js/app.js',

    'resources/css/tokyo/plugins.css',
    'resources/css/tokyo/style.css',
    'resources/js/tokyo/jquery.js',
    'resources/js/tokyo/plugins.js',
    'resources/js/tokyo/init.js'
    ])
  </head>

  <body>

    <!-- PRELOADER -->
    <div id="preloader">
      <div class="loader_line"></div>
    </div>
    <!-- /PRELOADER -->

    <!-- WRAPPER ALL -->
    <div class="tokyo_tm_all_wrap" data-magic-cursor="show" data-enter="fadeInLeft" data-exit="">

      <!-- MOBILE MENU -->
      <div class="tokyo_tm_topbar">
        <div class="topbar_inner">
          <div class="logo" data-type="image">
            <!-- You can use image or text as logo. data-type values are "image" and "text" -->
            <a href="#">
              <img src="img/logo/dark.png" alt="" />
              <h3>TOKYO</h3>
            </a>
          </div>
          <div class="trigger">
            <div class="hamburger hamburger--slider">
              <div class="hamburger-box">
                <div class="hamburger-inner"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tokyo_tm_mobile_menu">
        <div class="menu_list">

          <x-tokyo.menu />

        </div>
      </div>
      <!-- /MOBILE MENU -->

      <!-- LEFTPART -->
      <div class="leftpart">
        <div class="leftpart_inner">
          <div class="logo" data-type="image">
            <!-- You can use image or text as logo. data-type values are: "image" and "text" -->
            <a href="#">
              <img src="img/logo/dark.png" alt="" />
              <h3>TOKYO</h3>
            </a>
          </div>
          <div class="menu">

            <x-tokyo.menu />

          </div>

          <x-tokyo.copyright />

        </div>
      </div>
      <!-- /LEFTPART -->

      <!-- RIGHTPART -->
      <div class="rightpart">
        <div class="rightpart_in">

          <x-filament-fabricator::page-blocks :blocks="$page->blocks" />

        </div>
      </div>
      <!-- /RIGHTPART -->

      <!-- CURSOR -->
      <div class="mouse-cursor cursor-outer"></div>
      <div class="mouse-cursor cursor-inner"></div>
      <!-- /CURSOR -->

    </div>
    <!-- / WRAPPER ALL -->

  </body>

</html>