<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="<?php bloginfo('charset') ?>">



  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $descricao; ?>">
  <meta name="author" content="Levitate WEB">
  <title><?php bloginfo('name') ?> <?php wp_title('|'); ?></title>
  <meta name="googlebot" content="index,follow">
  <meta name="theme-color" content="#111111" />
  <meta name="robots" content="index,follow">
  <meta name="keywords" content="<?php echo $meta_keys ?>">
  <meta property="publisher" content="Levitate WEB">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="pt_BR">
  <meta property="og:region" content="Brasil">
  <meta property="og:site_name" content="<?php echo $nome_site ?>">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <?php wp_head(); ?>
</head>









<body <?php body_class(); ?>>
  <header id="header">
    <nav class="navbar navbar-expand-md w-100" id="navbarsExampleDefault">




      <div class="navbar-toggler navbarMobile" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">


        <div>

          <a class="navbar-brand" href="#">
            <?php
            if (function_exists('the_custom_logo')) {
              the_custom_logo();
            }

            ?>
          </a>


        </div>


        <ul class="navbarMobile p-0 mt-3">
          <li>
            <hr class="headerLine ">
          </li>
          <li><a href="<?php echo get_permalink(get_page_by_path('minha-conta')); ?>"><svg style="width:45px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4.74 4.74">
                <defs></defs>
                <g id="Layer_2" data-name="Layer 2">
                  <g id="_1" data-name="#1">
                    <path class="cls-1" d="M2.37,4.3A1.65,1.65,0,0,1,1.1,3.81a.91.91,0,0,1-.2-.76.74.74,0,0,1,.83-.63H3a.75.75,0,0,1,.82.63.91.91,0,0,1-.2.76A1.65,1.65,0,0,1,2.37,4.3ZM1.69,2.62a.57.57,0,0,0-.6.47.75.75,0,0,0,.16.59,1.45,1.45,0,0,0,1.12.42,1.45,1.45,0,0,0,1.12-.42.71.71,0,0,0,.16-.59h0A.57.57,0,0,0,3,2.62H1.69Z" />
                    <path class="cls-1" d="M2.37,2.32a.88.88,0,0,1,0-1.75.88.88,0,1,1,0,1.75Zm0-1.55a.68.68,0,1,0,.68.68A.68.68,0,0,0,2.37.77Z" />
                    <path class="cls-1" d="M2.37,4.74A2.37,2.37,0,1,1,4.74,2.37,2.37,2.37,0,0,1,2.37,4.74ZM2.37.2A2.17,2.17,0,1,0,4.54,2.37,2.17,2.17,0,0,0,2.37.2Z" />
                  </g>
                </g>
              </svg></a></li>
          <li><a href="<?php echo esc_url(wc_get_cart_url()); ?>"><svg style="width:45px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.92 33.51">
                <defs>
                  <style>
                    .cls-1 {
                      fill: #e9f8ff;
                    }

                    .cls-2 {
                      fill: #f20a9a;
                    }
                  </style>
                </defs>
                <g id="Layer_2" data-name="Layer 2">
                  <g id="_1" data-name="#1">
                    <path class="cls-1" d="M14.64,0h1.17c.08.06.17,0,.25,0a7.08,7.08,0,0,1,3.71,1.51,7.11,7.11,0,0,1,2.77,5.3c.07,1.05,0,2.11,0,3.17,0,.15,0,.17.18.17h5.55a.75.75,0,0,1,.82.79c0,.66.08,1.33.12,2,.14,2.1.27,4.21.41,6.31.14,2.28.29,4.56.43,6.84.14,2.12.27,4.24.41,6.36,0,0,0,.09,0,.12V33c-.19.46-.55.55-1,.55H.73A.73.73,0,0,1,0,32.73c0-.21,0-.41,0-.62l.39-5.58c.11-1.54.21-3.09.31-4.64l.39-5.58c.13-1.77.25-3.54.37-5.31,0-.57.3-.81.88-.81H7.82c.16,0,.19,0,.19-.19,0-.88,0-1.76,0-2.64a7.5,7.5,0,0,1,.08-1.17A7.29,7.29,0,0,1,9.82,2.47,7.19,7.19,0,0,1,13.94.13,5.73,5.73,0,0,0,14.64,0Zm.6,32.05H28.77c.15,0,.19,0,.18-.19-.11-1.65-.21-3.29-.31-4.93s-.18-3.17-.28-4.75c-.12-1.92-.24-3.85-.35-5.77-.1-1.54-.19-3.08-.28-4.63,0-.1,0-.13-.13-.13H22.69c-.11,0-.13,0-.13.13q0,.69,0,1.38a.26.26,0,0,0,.12.23,1.4,1.4,0,0,1,.58,1.43A1.42,1.42,0,0,1,22,16a1.45,1.45,0,0,1-1-2.63.24.24,0,0,0,.11-.2c0-.47,0-.93,0-1.39,0-.11,0-.14-.14-.14H9.6c-.12,0-.15,0-.15.15,0,.45,0,.89,0,1.34a.27.27,0,0,0,.13.25,1.38,1.38,0,0,1,.58,1.4A1.43,1.43,0,0,1,8.9,16a1.45,1.45,0,0,1-1.53-.94,1.42,1.42,0,0,1,.54-1.7.21.21,0,0,0,.1-.19c0-.46,0-.93,0-1.39,0-.12,0-.14-.16-.14H3c-.08,0-.15,0-.16.12,0,.81-.1,1.62-.16,2.44L2.5,17.48c-.09,1.31-.17,2.61-.26,3.91L2,24.63c-.09,1.3-.17,2.59-.26,3.88-.07,1.11-.14,2.23-.22,3.34,0,.17,0,.2.19.2Zm0-21.86h5.65c.13,0,.17,0,.17-.16,0-.9,0-1.79,0-2.69a6,6,0,0,0-.29-1.88,5.82,5.82,0,0,0-8.74-3,5.6,5.6,0,0,0-2.6,4.49c-.07,1,0,2.07,0,3.11,0,.14,0,.17.18.17Z" />
                    <circle class="cls-2" cx="33.4" cy="10.83" r="8.52" />
                    <span class="cartCount fontNormalMinus textWhite" style="top:-43px; right:-32px;"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                  </g>
                </g>
              </svg></span>
            </a>
          </li>
          <li><span class="navbar-toggler-icon">
              <svg xmlns="http://www.w3.org/2000/svg" style="width:35px;" viewBox="0 0 4.33 3.89">
                <defs>
                  <style>
                    .cls-1 {
                      fill: #e9f8ff;
                    }
                  </style>
                </defs>
                <g id="Layer_2" data-name="Layer 2">
                  <g id="_1" data-name="#1">
                    <rect class="cls-1" width="4.33" height="0.56" />
                    <rect class="cls-1" y="1.71" width="4.33" height="0.56" />
                    <rect class="cls-1" y="3.33" width="4.33" height="0.56" />
                  </g>
                </g>
              </svg>
            </span>
          </li>

        </ul>


      </div>



      <div class="collapse navbar-collapse " id="navbarResponsive">
        <ul class="navbar-nav">


          <?php
          if (wp_is_mobile()) {
            // Code for mobile devices
          ?>

            <li class="nav-item">
              <a class="navbar-brand float-right" href="#">
                <i class="fa fa-close text-dark"></i>
              </a>
            </li>
            <li class="nav-item">

              <a class="nav-link fontNormal" href="/">Inicio</a>
            </li>
            <li class="nav-item">

              <a class="nav-link fontNormal" href="<?php echo get_permalink(wc_get_page_id('shop')); ?>">Todos os produtos</a>
            </li>

            <li class="nav-item active">
              <a class="nav-link fontNormal" style="color:black !important" href="<?php echo get_permalink(get_page_by_path('agua-micelar-corporal')); ?>">Água Micelar Corporal<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link fontNormal" style="color:black !important" href="<?php echo get_permalink(get_page_by_path('lencos-levitate')); ?>">Lenços Levitate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fontNormal" style="color:black !important" href="<?php echo get_permalink(get_page_by_path('neutralizador-textil')); ?>">Neutralizador Têxtil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fontNormal" style="" href="<?php echo get_permalink(get_page_by_path('manual-levitate')); ?>">Manual Levitate</a>
            </li>

            <li class="nav-item">
              <a class="nav-link fontNormal" style="" href="<?php echo get_permalink(get_page_by_path('sobre-nos')); ?>">Sobre Nós</a>
            </li>

            <!-- <li class="nav-item">
            <a class="nav-link" style="font-size:1.75rem;" href="<?php echo esc_url(wc_get_cart_url()); ?>"></a>
            </li> -->
            <li class="nav-item">

              <hr class="headerLine">
            </li>


            <!-- else mobile --- é desktop -->
          <?php
          } else {
          ?>


            <li class="nav-item">
              <a class="navbar-brand" href="#">
                <?php
                if (function_exists('the_custom_logo')) {
                  the_custom_logo();
                }

                ?>
              </a>
            </li>

            <li class="nav-item">

              <hr class="headerLine">
            </li>

            <li class="nav-item active">
              <a class="nav-link fontNormalPlus" style="" href="<?php echo get_permalink(wc_get_page_id('shop')); ?>">PRODUTOS<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link fontNormalPlus" style="" href="<?php echo get_permalink(get_page_by_path('manual-levitate')); ?>">MANUAL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fontNormalPlus" style="" href="<?php echo get_permalink(get_page_by_path('sobre-nos')); ?>">SOBRE NÓS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fontNormalPlus" style="" href="<?php echo get_permalink(get_page_by_path('minha-conta')); ?>">MINHA CONTA</a>
            </li>

        
            <li class="nav-item">

              <hr class="headerLine">
            </li>

            <li class="nav-item">

              <span>

                <a class="nav-link p-0 m-1" href="<?php echo wc_get_cart_url(); ?>">
              </span>



              <svg style="width:40px; margin-top:10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.92 33.51">
                <defs>
                  <style>
                    .clsCustom {
                      fill: #e9f8ff;
                    }

                    .cls-2 {
                      fill: #f20a9a;
                    }
                  </style>
                </defs>
                <g id="Layer_2" data-name="Layer 2">
                  <g id="_1" data-name="#1">
                    <path class="clsCustom" d="M14.64,0h1.17c.08.06.17,0,.25,0a7.08,7.08,0,0,1,3.71,1.51,7.11,7.11,0,0,1,2.77,5.3c.07,1.05,0,2.11,0,3.17,0,.15,0,.17.18.17h5.55a.75.75,0,0,1,.82.79c0,.66.08,1.33.12,2,.14,2.1.27,4.21.41,6.31.14,2.28.29,4.56.43,6.84.14,2.12.27,4.24.41,6.36,0,0,0,.09,0,.12V33c-.19.46-.55.55-1,.55H.73A.73.73,0,0,1,0,32.73c0-.21,0-.41,0-.62l.39-5.58c.11-1.54.21-3.09.31-4.64l.39-5.58c.13-1.77.25-3.54.37-5.31,0-.57.3-.81.88-.81H7.82c.16,0,.19,0,.19-.19,0-.88,0-1.76,0-2.64a7.5,7.5,0,0,1,.08-1.17A7.29,7.29,0,0,1,9.82,2.47,7.19,7.19,0,0,1,13.94.13,5.73,5.73,0,0,0,14.64,0Zm.6,32.05H28.77c.15,0,.19,0,.18-.19-.11-1.65-.21-3.29-.31-4.93s-.18-3.17-.28-4.75c-.12-1.92-.24-3.85-.35-5.77-.1-1.54-.19-3.08-.28-4.63,0-.1,0-.13-.13-.13H22.69c-.11,0-.13,0-.13.13q0,.69,0,1.38a.26.26,0,0,0,.12.23,1.4,1.4,0,0,1,.58,1.43A1.42,1.42,0,0,1,22,16a1.45,1.45,0,0,1-1-2.63.24.24,0,0,0,.11-.2c0-.47,0-.93,0-1.39,0-.11,0-.14-.14-.14H9.6c-.12,0-.15,0-.15.15,0,.45,0,.89,0,1.34a.27.27,0,0,0,.13.25,1.38,1.38,0,0,1,.58,1.4A1.43,1.43,0,0,1,8.9,16a1.45,1.45,0,0,1-1.53-.94,1.42,1.42,0,0,1,.54-1.7.21.21,0,0,0,.1-.19c0-.46,0-.93,0-1.39,0-.12,0-.14-.16-.14H3c-.08,0-.15,0-.16.12,0,.81-.1,1.62-.16,2.44L2.5,17.48c-.09,1.31-.17,2.61-.26,3.91L2,24.63c-.09,1.3-.17,2.59-.26,3.88-.07,1.11-.14,2.23-.22,3.34,0,.17,0,.2.19.2Zm0-21.86h5.65c.13,0,.17,0,.17-.16,0-.9,0-1.79,0-2.69a6,6,0,0,0-.29-1.88,5.82,5.82,0,0,0-8.74-3,5.6,5.6,0,0,0-2.6,4.49c-.07,1,0,2.07,0,3.11,0,.14,0,.17.18.17Z" />
                    <circle class="cls-2" cx="33.4" cy="10.83" r="8.52" />
                    <span class="cartCount fontNormalMinus textWhite"> <?php echo WC()->cart->get_cart_contents_count(); ?></span>
                  </g>
                </g>
              </svg>






              </a>

            </li>



          <?php
          }
          ?>











          </li> 
        </ul>
        
      </div>
    </nav>
    <script>
      document.addEventListener('click', function(event) {
        const menu = document.getElementById('navbarResponsive');
        const closeButton = document.querySelector('.navbar-brand .fa-close');
        const isClickOnCloseButton = closeButton.contains(event.target);



        const isMobile = window.innerWidth <= 768;


        const isMenuOpen = menu.classList.contains('show');

        if (isMobile && isMenuOpen && isClickOnCloseButton) {

          const toggler = document.querySelector('.navbar-toggler'); // Replace with the correct toggler class or ID
          toggler.click();
        }
      });
    </script>
  </header>