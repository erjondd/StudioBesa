<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="robots" content="index,follow" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js"></script>
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <title>
        <?php
        global $page, $paged;
        wp_title('|', true, 'right');
        // Add the blog name.
        bloginfo('name');
        //Add the blog description for the home/fron page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) {
            echo " | $site_description";
        }
        ?>
    </title>
    <?php wp_head(); ?>


</head>

<body>


    <header class="header">
        <?php if (!wp_is_mobile()) { ?>
            <div class="container">
                <div class="header-wrapper">

                    <div class="header-logo">
                        <a href="<?= get_home_url() ?>">
                            <img src="<?= get_template_directory_uri() ?>/images/home-logo.png">
                        </a>
                    </div>
                    <div class="nav-items">
                        <?php
                        echo wp_nav_menu(array(
                            'menu'   => 'Primary',
                        ));
                        ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if (wp_is_mobile()) { ?>
            <div class="container">
                <div class="header-wrapper-mob">
                    <div class="header-logo-mob"><svg xmlns="http://www.w3.org/2000/svg" width="32.186" height="30.195" viewBox="0 0 32.186 30.195">
                            <g id="Group_212" data-name="Group 212" transform="translate(0.258 0.345)">
                                <path id="Path_10" data-name="Path 10" d="M466.218,247.38a2.9,2.9,0,0,1,3.242-2.2,15.532,15.532,0,0,0,3.476-.011" transform="translate(-448.977 -228.489)" fill="none" stroke="#c39435" stroke-linecap="round" stroke-width="0.5" />
                                <path id="Path_11" data-name="Path 11" d="M457.867,247.375a2.9,2.9,0,0,0-3.242-2.2,15.314,15.314,0,0,1-3.5-.02" transform="translate(-443.369 -228.485)" fill="none" stroke="#c39435" stroke-linecap="round" stroke-width="0.5" />
                                <path id="Path_12" data-name="Path 12" d="M458.922,250.058a.671.671,0,0,0-.388-.134c-.35-.013-.9.133-1.557.134a2.057,2.057,0,0,1-2.14-1.361" transform="translate(-444.749 -229.807)" fill="none" stroke="#c39435" stroke-linecap="round" stroke-width="0.5" />
                                <path id="Path_13" data-name="Path 13" d="M466.734,250.058a.672.672,0,0,1,.389-.134c.349-.013.9.133,1.556.134a2.057,2.057,0,0,0,2.14-1.361" transform="translate(-449.169 -229.807)" fill="none" stroke="#c39435" stroke-linecap="round" stroke-width="0.5" />
                                <path id="Path_14" data-name="Path 14" d="M462.017,255.878s.2-.121.305-.017a1.352,1.352,0,0,0,.909.41,1.424,1.424,0,0,0,.949-.412c.11-.1.319.019.319.019" transform="translate(-447.417 -232.452)" fill="none" stroke="#c39435" stroke-linecap="round" stroke-width="0.5" />
                                <line id="Line_1" data-name="Line 1" x2="4.15" transform="translate(13.707 25.766)" fill="none" stroke="#c39435" stroke-linecap="round" stroke-width="0.5" />
                                <line id="Line_2" data-name="Line 2" x2="1.427" transform="translate(15.101 26.866)" fill="none" stroke="#c39435" stroke-linecap="round" stroke-width="0.5" />
                                <path id="Path_15" data-name="Path 15" d="M460.434,226.641a15.691,15.691,0,0,1-3.6-.1c-.714-.25-1.131-2.2-1.131-2.2s2.049-.929,2.581-.35A22.324,22.324,0,0,1,460.434,226.641Z" transform="translate(-445.073 -220.555)" fill="none" stroke="#c39435" stroke-width="0.5" />
                                <path id="Path_16" data-name="Path 16" d="M460.941,227.07a19.656,19.656,0,0,1-2.779-.616,2.271,2.271,0,0,1-.7-1.128,2.236,2.236,0,0,1,1.527.009C459.185,225.457,460.941,227.07,460.941,227.07Z" transform="translate(-445.723 -221.072)" fill="none" stroke="#c39435" stroke-width="0.5" />
                                <path id="Path_17" data-name="Path 17" d="M463.816,226.743a16.259,16.259,0,0,0,3.558,0c.725-.216,1.234-2.147,1.234-2.147s-2-1.024-2.562-.471A17.162,17.162,0,0,0,463.816,226.743Z" transform="translate(-447.415 -220.617)" fill="none" stroke="#c39435" stroke-linecap="round" stroke-width="0.5" />
                                <path id="Path_18" data-name="Path 18" d="M463.528,227.192a21.677,21.677,0,0,0,2.8-.563,2.273,2.273,0,0,0,.757-1.094,2.236,2.236,0,0,0-1.525-.062C465.358,225.585,463.528,227.192,463.528,227.192Z" transform="translate(-447.018 -221.134)" fill="none" stroke="#c39435" stroke-linecap="round" stroke-width="0.5" />
                                <path id="Path_19" data-name="Path 19" d="M462.745,225.1a10.053,10.053,0,0,1-1.918-2.906,1.949,1.949,0,0,1,.41-1.889c.541-.68,1.534-1.661,1.534-1.661s.875.8,1.656,1.661a2.38,2.38,0,0,1,.144,2.632C464.229,223.512,463.235,224.946,462.745,225.1Z" transform="translate(-446.941 -218.641)" fill="none" stroke="#c39435" stroke-width="0.5" />
                                <path id="Path_20" data-name="Path 20" d="M463.392,225.747a23.689,23.689,0,0,1-1.087-2.462,2.007,2.007,0,0,1,.13-1.513c.309-.388.886-.948.886-.948a10.79,10.79,0,0,1,.962.948c.371.419.2,1.062.082,1.5C464.265,223.644,463.392,225.747,463.392,225.747Z" transform="translate(-447.492 -219.452)" fill="none" stroke="#c39435" stroke-width="0.5" />
                                <path id="Path_21" data-name="Path 21" d="M454.523,228.71c.059-.747,1.5,5.075-4.611,8.219-6.466,3.325-9.917,7.2-7.066,11.788a5.723,5.723,0,0,0,6.383,2.426,6.493,6.493,0,0,1-4.028.642c-2.97-.37-6.8-2.41-6.384-7.74.388-5.019,7.376-6.607,10.846-9.582C452.317,232.188,454.464,229.457,454.523,228.71Z" transform="translate(-438.786 -222.254)" fill="none" stroke="#c39435" stroke-linecap="round" stroke-width="0.5" />
                                <path id="Path_22" data-name="Path 22" d="M456.081,257.3s-7.457-4.474-5.208-12.145" transform="translate(-443.119 -228.492)" fill="none" stroke="#c39435" stroke-linecap="round" stroke-width="0.5" />
                                <g id="Group_17" data-name="Group 17" transform="translate(1.491 6.192)">
                                    <path id="Path_23" data-name="Path 23" d="M455.45,228.611a20.351,20.351,0,0,0-11.056,1.945c-4.076,2.033-3.9,5.4-1.686,7a5.347,5.347,0,0,0,1.611.608" transform="translate(-441.158 -228.493)" fill="none" stroke="#c39435" stroke-linecap="round" stroke-width="0.5" />
                                    <path id="Path_24" data-name="Path 24" d="M456.107,228.913a27.692,27.692,0,0,0-9.576,2.52c-3.286,1.64-4.426,5.073-2.642,6.369a4.31,4.31,0,0,0,1.3.491" transform="translate(-441.861 -228.649)" fill="none" stroke="#c39435" stroke-linecap="round" stroke-width="0.5" />
                                </g>
                                <g id="Group_18" data-name="Group 18" transform="translate(15.737 6.192)">
                                    <path id="Path_25" data-name="Path 25" d="M463.825,228.611a20.352,20.352,0,0,1,11.056,1.945c4.076,2.033,3.9,5.4,1.686,7a5.361,5.361,0,0,1-1.611.608" transform="translate(-463.825 -228.493)" fill="none" stroke="#c39435" stroke-linecap="round" stroke-width="0.5" />
                                    <path id="Path_26" data-name="Path 26" d="M463.9,228.913a27.7,27.7,0,0,1,9.576,2.52c3.286,1.64,4.017,5.056,2.233,6.352a2.239,2.239,0,0,1-.891.508" transform="translate(-463.852 -228.649)" fill="none" stroke="#c39435" stroke-linecap="round" stroke-width="0.5" />
                                </g>
                                <path id="Path_27" data-name="Path 27" d="M464.223,228.4c.044.44-.642,4.621,4.649,8,6.129,3.914,9.85,7.518,7,12.1a5.511,5.511,0,0,1-6.384,2.426,6.747,6.747,0,0,0,4.029.642c2.97-.37,6.795-2.41,6.383-7.74-.387-5.019-7.375-6.607-10.845-9.582a26.054,26.054,0,0,1-4.079-4.708C464.516,228.885,464.179,227.963,464.223,228.4Z" transform="translate(-448.26 -222.044)" fill="none" stroke="#c39435" stroke-linecap="round" stroke-width="0.5" />
                                <path id="Path_28" data-name="Path 28" d="M473.828,245.368c1.425,7.105-5.273,12.013-5.273,12.013" transform="translate(-449.845 -228.57)" fill="none" stroke="#c39435" stroke-linecap="round" stroke-width="0.5" />
                            </g>
                        </svg>
                    </div>
                    <div class="nav-items-mob">
                        <div class="hamburger-menu" id="responsive-menu-button" onclick="myFunction(this)">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                        <div id="my-responsive-menu">
                            <?php
                            echo wp_nav_menu(array(
                                'menu'   => 'Footer Menu',
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

    </header>
    <script>

       
 
     
        function myFunction(x) {
            if (x.classList.toggle("change")) {

                document.getElementById("my-responsive-menu").style.display = "block";
                document.body.classList.add('body-overflow');


            } else {
                document.getElementById("my-responsive-menu").style.display = "none";
                document.body.classList.remove('body-overflow');
                jQuery("#my-responsive-menu").removeClass("close-popup");
            }
        };


        
    </script>