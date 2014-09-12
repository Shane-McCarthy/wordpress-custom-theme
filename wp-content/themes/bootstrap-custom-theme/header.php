<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php
        wp_title('|',true,'right');
        bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Duru+Sans' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href='<?php bloginfo('template_directory');?>/img/favicon.ico'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
    <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
    <script>

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-23019901-1']);
        _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
    <?php wp_head(); ?>
</head>
<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<body <?php body_class()?> id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div>
                <a href="/wordpress/"><img id="logo" src="<?php echo get_template_directory_uri() ?>/img/logoredblock.png" alt="S. ThomasMcCarthy" /></a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
           <?php wp_nav_menu( array( 'menu'=>'home-menu','menu_class'=>'nav navbar-nav','' ) ); ?>
<!--            <ul class="nav navbar-nav">-->
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
<!--                <li class="hidden">-->
<!--                    <a href="#page-top"></a>-->
<!--                </li>-->
<!---->
<!--                <li class="page-scroll">-->
<!--                    <a href="#services">Projects</a>-->
<!--                </li>-->
<!--                <li class="page-scroll">-->
<!--                    <a href="#about">About</a>-->
<!--                </li>-->
<!--                <li class="page-scroll">-->
<!--                    <a href="https://github.com/Shane-McCarthy?tab=repositories">Code</a>-->
<!--                </li>-->
<!---->
<!--            </ul>-->
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>





